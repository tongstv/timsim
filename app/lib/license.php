<?php
function license_save()
{
    $success = false;
    if (isset($_POST['license'])) {
        $license = $_POST['license'];
        $base = $_SERVER["DOCUMENT_ROOT"]."/license";
        if(!is_dir($$base))mkdir($base);
        
        $textfile = fopen($base . "/" .app. "_license.txt", "w+") or die("Unable to open file!");
        $contents = $license . "\n";
        fwrite($textfile, $contents);
        fclose($textfile);
        $success = true;
    }

    ob_start();

?>
    <div class="wrapper container">
 <div class="form">
 <?php
    if ($success) {
?>
 <p>License added!</p>
 <?php
    } else {
?>
<div class="text-center" style="margin: 0 auto;">
 <form method="post" action="" class="form-inline">
 <div class="alert alert-info">Đăng ký bản quyền ứng dụng</div>
 <label>Nhập license key : </label>
<input class="form-control" name="license">
 <input type="submit" class="btn-success btn" value="Submit">
 
 <br />

<a class="pull-right btn btn-sm btn-default" style="color: red; font-weight: bold;" href="https://khachhang.stv.vn/cart.php?gid=17" target="_blank"> <i class="glyphicon glyphicon-briefcase"></i> Mua license key ứng dụng   </a>


<br />

Để cấp lại license key bị mất quý khách truy cập https://khachhang.stv.vn để lấy mã license đã mua
 </form>
 <?php } ?>
 </div>
</div>
</div>
<?php

    return ob_get_clean();

}
function stv_check_license($licensekey, $localkey = '')
{

    // -----------------------------------
    //  -- Configuration Values --
    // -----------------------------------

    // Enter the url to your WHMCS installation here
    $whmcsurl = 'https://khachhang.stv.vn/';
    // Must match what is specified in the MD5 Hash Verification field
    // of the licensing product that will be used with this check.
    $licensing_secret_key = 'd999cb16ac4d3300b4187e7a4d4bbe30';
    // The number of days to wait between performing remote license checks
    $localkeydays = 15;
    // The number of days to allow failover for after local key expiry
    $allowcheckfaildays = 5;

    // -----------------------------------
    //  -- Do not edit below this line --
    // -----------------------------------

    $check_token = time() . md5(mt_rand(1000000000, 9999999999) . $licensekey);
    $checkdate = date("Ymd");
    $domain = $_SERVER['SERVER_NAME'];
    $usersip = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : $_SERVER['LOCAL_ADDR'];
    $dirpath = dirname(__file__);
    $verifyfilepath = 'modules/servers/licensing/verify.php';
    $localkeyvalid = false;
    if ($localkey) {
        $localkey = str_replace("\n", '', $localkey); # Remove the line breaks
        $localdata = substr($localkey, 0, strlen($localkey) - 32); # Extract License Data
        $md5hash = substr($localkey, strlen($localkey) - 32); # Extract MD5 Hash
        if ($md5hash == md5($localdata . $licensing_secret_key)) {
            $localdata = strrev($localdata); # Reverse the string
            $md5hash = substr($localdata, 0, 32); # Extract MD5 Hash
            $localdata = substr($localdata, 32); # Extract License Data
            $localdata = base64_decode($localdata);
            $localkeyresults = unserialize($localdata);
            $originalcheckdate = $localkeyresults['checkdate'];
            if ($md5hash == md5($originalcheckdate . $licensing_secret_key)) {
                $localexpiry = date("Ymd", mktime(0, 0, 0, date("m"), date("d") - $localkeydays,
                    date("Y")));
                if ($originalcheckdate > $localexpiry) {
                    $localkeyvalid = true;
                    $results = $localkeyresults;
                    $validdomains = explode(',', $results['validdomain']);
                    if (!in_array($_SERVER['SERVER_NAME'], $validdomains)) {
                        $localkeyvalid = false;
                        $localkeyresults['status'] = "Invalid";
                        $results = array();
                    }
                    $validips = explode(',', $results['validip']);
                    if (!in_array($usersip, $validips)) {
                        $localkeyvalid = false;
                        $localkeyresults['status'] = "Invalid";
                        $results = array();
                    }
                    $validdirs = explode(',', $results['validdirectory']);
                    if (!in_array($dirpath, $validdirs)) {
                        $localkeyvalid = false;
                        $localkeyresults['status'] = "Invalid";
                        $results = array();
                    }
                }
            }
        }
    }
    if (!$localkeyvalid) {
        $responseCode = 0;
        $postfields = array(
            'licensekey' => $licensekey,
            'domain' => $domain,
            'ip' => $usersip,
            'dir' => $dirpath,
            );
        if ($check_token)
            $postfields['check_token'] = $check_token;
        $query_string = '';
        foreach ($postfields as $k => $v) {
            $query_string .= $k . '=' . urlencode($v) . '&';
        }
        if (function_exists('curl_exec')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $whmcsurl . $verifyfilepath);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($ch);
            $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        } else {
            $responseCodePattern = '/^HTTP\/\d+\.\d+\s+(\d+)/';
            $fp = @fsockopen($whmcsurl, 80, $errno, $errstr, 5);
            if ($fp) {
                $newlinefeed = "\r\n";
                $header = "POST " . $whmcsurl . $verifyfilepath . " HTTP/1.0" . $newlinefeed;
                $header .= "Host: " . $whmcsurl . $newlinefeed;
                $header .= "Content-type: application/x-www-form-urlencoded" . $newlinefeed;
                $header .= "Content-length: " . @strlen($query_string) . $newlinefeed;
                $header .= "Connection: close" . $newlinefeed . $newlinefeed;
                $header .= $query_string;
                $data = $line = '';
                @stream_set_timeout($fp, 20);
                @fputs($fp, $header);
                $status = @socket_get_status($fp);
                while (!@feof($fp) && $status) {
                    $line = @fgets($fp, 1024);
                    $patternMatches = array();
                    if (!$responseCode && preg_match($responseCodePattern, trim($line), $patternMatches)) {
                        $responseCode = (empty($patternMatches[1])) ? 0 : $patternMatches[1];
                    }
                    $data .= $line;
                    $status = @socket_get_status($fp);
                }
                @fclose($fp);
            }
        }
        if ($responseCode != 200) {
            $localexpiry = date("Ymd", mktime(0, 0, 0, date("m"), date("d") - ($localkeydays +
                $allowcheckfaildays), date("Y")));
            if ($originalcheckdate > $localexpiry) {
                $results = $localkeyresults;
            } else {
                $results = array();
                $results['status'] = "Invalid";
                $results['description'] = "Remote Check Failed";
                return $results;
            }
        } else {
            preg_match_all('/<(.*?)>([^<]+)<\/\\1>/i', $data, $matches);
            $results = array();
            foreach ($matches[1] as $k => $v) {
                $results[$v] = $matches[2][$k];
            }
        }
        if (!is_array($results)) {
            die("Invalid License Server Response");
        }
        if ($results['md5hash']) {
            if ($results['md5hash'] != md5($licensing_secret_key . $check_token)) {
                $results['status'] = "Invalid";
                $results['description'] = "MD5 Checksum Verification Failed";
                return $results;
            }
        }
        if ($results['status'] == "Active") {
            $results['checkdate'] = $checkdate;
            $data_encoded = serialize($results);
            $data_encoded = base64_encode($data_encoded);
            $data_encoded = md5($checkdate . $licensing_secret_key) . $data_encoded;
            $data_encoded = strrev($data_encoded);
            $data_encoded = $data_encoded . md5($data_encoded . $licensing_secret_key);
            $data_encoded = wordwrap($data_encoded, 80, "\n", true);
            $results['localkey'] = $data_encoded;
        }
        $results['remotecheck'] = true;
    }
    unset($postfields, $data, $matches, $whmcsurl, $licensing_secret_key, $checkdate,
        $usersip, $localkeydays, $allowcheckfaildays, $md5hash);
    return $results;
}



// Validate the license key information


$licensekey = "";
$localkey = "";
     $base = $_SERVER["DOCUMENT_ROOT"]."/license";
        if(!is_dir($$base))mkdir($base);
$handle = fopen($base . "/" . app. "_license.txt", "r");
if ($handle) {
    $count = 0;
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        if ($count == 0) {
            $licensekey = trim($line);
        } else
            if ($count == 1) {
                $localkey = trim($line);
                break;
            }
        $count++;
    }

    fclose($handle);
} else {
    
   // echo "Không thể đọc được file license. Vui lòng liên hệ hỗ trợ.";
    echo license_save();
    die();
}
$results = stv_check_license($licensekey, $localkey);
extract($results);

echo '<div class="text-right">
<strong>Thông tin bản quyền </strong>
<br>
License key:<strong>'.$licensekey.'</strong><br>
'.$productname.' <br>
Ngày đăng ký: '.$regdate.' hết hạn: '.$nextduedate.'
<br>
Tên miền: '.$validdomain.'
</div>';

switch ($results['status']) {
    case "Active":
        // get new local key and save it somewhere
        $localkeydata = str_replace(' ', '', preg_replace('/\s+/', ' ', $results['localkey']));
        $handle = fopen($base . "/" . app . "_license.txt", "r");
        if ($handle) {
            $count = 0;
            while (($line = fgets($handle)) !== false) {
                // process the line read.
                if ($count == 0) {
                    $licensekey = trim($line);
                    break;
                }
                $count++;
            }
            fclose($handle);
            if (isset($results['localkey'])) {
                $textfile = fopen($base . "/" .app. "_license.txt", "w") or die("Không thể mở file!");
                $contents = $licensekey . "\n" . $localkeydata . "\n";
                fwrite($textfile, $contents);
                fclose($textfile);
            }
        } else {
            die("Không thể đọc được file license. Vui lòng liên hệ hỗ trợ.");
        }
        break;
    case "Invalid":
        echo license_save();
        die("License key không hợp lệ");
        
        break;
    case "Expired":
    echo license_save();
        die("License key đã hết hạn");
        break;
    case "Suspended":
        die("License key bị Suspended");
        break;
    default:
        die("Invalid Response");
        break;
}


