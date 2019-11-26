<?php

function seobai()
{
    if(isset($_GET['do']) AND $_GET['do']=='search')return '';
     if ($_SERVER['HTTPS'] == "on")
     {
        $link="https://".str_replace("www.","",$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
     }
     else
     {
          $link="http://".str_replace("www.","",$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
     }
    
        
    $link=preg_replace('/\?page=([0-9]*)/','',$link);




    $cache_key = md5($link)."11";
    $cache_path = "seo/";

    $data = cache($cache_key, null, "+7 day", "cache/" . $cache_path);

    if (empty($data)) {

        if(!class_exists('db'))
        {
            include_once dirname(__FILE__)."/mysql.php";
        }
        $db = new db;

        $data = $db->getOne("select page_title, page_des, page_detail FROM page where replace(page_code,'www.','') = '".$link."' limit 1");
        
            // echo "NO CACHE";
        

        $data=serialize($data);
        cache($cache_key, $data, "+7 day", "cache/" . $cache_path);

    }
    else
    {
        // "CAHE CACHE";
    }

    return unserialize($data);
}



if(isset($error) AND $error==1):

ini_set('log_errors',1);

ini_set('error_log','error.log');

error_reporting(E_ALL);
error_reporting(E_ERROR|
        E_WARNING|
        E_CORE_ERROR|
        E_CORE_WARNING|
        E_COMPILE_ERROR|
        E_COMPILE_WARNING|
        E_USER_ERROR|
        E_USER_WARNING|
        E_RECOVERABLE_ERROR|
        E_DEPRECATED|
        E_USER_DEPRECATED);

        //E_STRICT|


endif;
if (class_exists("auth"))
    $apps = @glob("app/myapp/admincp/*.php");
else
    $apps = @glob("app/myapp/*.php");

foreach ($apps as $file) {
    try {
        @eval(str_replace(array('<?php', '<?'), '', @file_get_contents($file)));


    }
    catch (exception $e) {

        $error .= $e->getMessage() . "\n";
    }
}
function locktime($file,$var=null)
{
        if(!is_dir($_SERVER["DOCUMENT_ROOT"]."/ccache"))@mkdir($_SERVER["DOCUMENT_ROOT"]."/ccache");
    if(!is_dir($_SERVER["DOCUMENT_ROOT"]."/ccache/locktine"))@mkdir($_SERVER["DOCUMENT_ROOT"]."/ccache/locktine");
    if($var==null)
    {
        $time= @file_get_contents($_SERVER["DOCUMENT_ROOT"]."/ccache/locktine/".$file);
        $time=(int) trim($time);
        
        if($time==0)$time=1;
        if(time() > $time):
        return true;
        else:
        return false;
        endif;
    }
    $time = preg_replace('/[^0-9]/', '', $var);
    $var = trim(strtolower($var));

    if (stristr($var, "h")):

        $date = time() + ($time * 60 * 60);

    elseif (stristr($var, "d")):

        $date = time() + ($time * 24 * 60 * 60);

    elseif (stristr($var, "m")):

        $date = time() + ($time * 60);

    elseif (stristr($var, "s")):
        $date = $time;
    else:
    $date=1;
    endif;
    
    if(isset($date))
    file_put_contents($_SERVER["DOCUMENT_ROOT"]."/ccache/locktine/".$file,$date);
    
    }

    function remove_mem()
    {


        if (@$memcache === null) {
            if (class_exists('Memcache')) {
                if (!@$memcache) {
                    $memcache = new Memcache;
                    @$memcache->connect('127.0.0.1', 11211) or ($memcache = false);
                }
            }
        }


        if ($memcache) {


            $list = array();
            $allSlabs = $memcache->getExtendedStats('slabs');

            $items = $memcache->getExtendedStats('items');
            foreach ($allSlabs as $server => $slabs) {
                foreach ($slabs as $slabId => $slabMeta) {
                    $cdump = $memcache->getExtendedStats('cachedump', (int)$slabId);
                    foreach ($cdump as $keys => $arrVal) {
                        foreach ($arrVal as $k => $v) {

                            if (stristr($k, str_replace("www.", '', $_SERVER["HTTP_HOST"]))) {


                                $memcache->delete($k);
                            }

                        }
                    }
                }
            }
            echo "Đã xóa cache trên ram: ";


        }


    }

    $lang = array(
        '_search_txt' => 'Nhập nội dung cần tìm!',
        '_search' => 'Tìm kiếm',
        '_addnew' => ' Thêm mới',
        '_edit' => 'Sửa',
        '_del' => 'Xóa',
        '_add_success' => 'Thêm mới thành công!',
        '_edit_success' => 'Sửa thành công!');

    if (isset($_GET['ajax'])) {
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    }

    function curl_sms($to, $msg)
    {
        $msg = urlencode($msg);

        $ch = curl_init();
        // set url
        curl_setopt($ch, CURLOPT_PORT, 8080);
        curl_setopt($ch, CURLOPT_URL, gatewayurl . "?smsto=" . $to . "&smsbody=" . $msg .
            "&smstype=sms");

        //return the transfer as a string

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        $output = curl_exec($ch);

        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200) {
            $status = 1;
        } else {
            $status = 0;
        }

        curl_close($ch);

        if ($status)
            return true;
        else
            return false;


    }

    function create_table($sql)
    {
        global $db;
        $cache_key = md5($sql);

        if (!cache($cache_key)) {
            $db->query($sql);
            cache($cache_key, "yes", "+30 day");

        }
    }
    function is_bot()
    {

        if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|spider|googlebot|bingbot|cococ|wala|baidu/i',
            $_SERVER['HTTP_USER_AGENT'])) {
            return true;
        } else {
            return false;
        }

    }
    function ungz($srcName, $dstName)
    {
        $sfp = gzopen($srcName, "rb");
        $fp = fopen($dstName, "w");

        while ($string = gzread($sfp, 4096)) {
            fwrite($fp, $string, strlen($string));
        }
        gzclose($sfp);
        fclose($fp);
    }
    function gz($srcName, $dstName)
    {
        $fp = fopen($srcName, "r");
        $data = fread($fp, filesize($srcName));
        fclose($fp);

        $zp = gzopen($dstName, "w9");
        gzwrite($zp, $data);
        gzclose($zp);
    }
    $bootstrap = '<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>';
    function minify_html($tpl_output, Smarty_Internal_Template $template)
    {
        $tpl_output = preg_replace('![\t ]*[\r\n]+[\t ]*!', '', $tpl_output);
        return $tpl_output;
    }
    function xoadau($str)
    {
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D' => 'Đ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
            );

        foreach ($unicode as $nonUnicode => $uni) {
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        return $str;
    }
    function navmenu()
    {
        $cache_key = "navmenus";

        $str = null;
        $str = cache($cache_key, null, "+7 hour", "cache/menu/");

        if ($str == null):
            global $navmenu, $loai;

            if (test == 1)
                echo "nav Nocache";
            $loais = $loai['s'];
            foreach ($navmenu as $key => $array) {
                $str .= "<li class=\"top\"><a href=\"/chon-mang/" . $key . "\">" . $key .
                    " <span class=\"caret\"></span></a> \n";
                $str .= "<ul>";
                foreach ($array as $dau) {
                    $str .= "<li><a href=\"/chon-mang/" . $key . "/dau-so/" . $dau . "\">Đầu số " .
                        $dau . " <span class=\"pull-right glyphicon glyphicon-circle-arrow-right\"></span></a>";
                    $str .= "<ul>";

                    foreach ($loais as $link => $name) {

                        $str .= "<li><a href=\"/chon-mang/" . $key . "/dau-so/" . $dau . "/" . $link . "\">" .
                            $name . "</a>";
                    }
                    $str .= "</ul></li>";
                }
                $str .= "</ul></li>";

            }
            cache($cache_key, $str, "+7 hour", "cache/menu/");
        endif;

        return $str;
    }
    function homedb()
    {
        return new mysqli(DB_SERVER, HOME_DB_USER, HOME_DB_PASS, HOME_DB_DATABASE);
    }

    function dhdb()
    {
        return new mysqli(DB_SERVER, DH_DB_USER, DH_DB_PASS, DH_DB_DATABASE);
    }
    function create_sms($to, $msg, $h = null)
    {
        if ($h == 1)
            $db = new db;
        else
            global $db;


        $data = $db->query_first("SELECT * FROM apps WHERE appcode='smsconfig'");

        $conf = unserialize($data['appconf']);
        $msg = trim($msg);
        if ($conf['smsxoadau']['status'] == 'on') {

            $msg = xoadau($msg);
        }


        $to = preg_replace('/[^0-9]/', '', $to);


        $p['sms_sender'] = $_COOKIE['fullname'];
        $p['sms_date'] = date('H:i:s - d/m/Y', time());
        $p['sms_to'] = $to;
        $p['sms_msg'] = $msg;
        $p['uid']=isset($_COOKIE['uid']) ? $_COOKIE['uid'] : "";


        if (phoneveryfi($to)) {


            if (gatewayurl) {
                if (curl_sms($to, $msg)) {
                    $p['sms_staus'] = 1;

                }


                $db->query_insert("sms", $p);
            } else {
                $db->query_insert("sms", $p);
            }
        }


    }

    function getGroupNewfooter()
    {

        $cache_key = "getGroupNewfooter1";

        $data = cache($cache_key, null, "+7 day", "cache/page/");

        if (empty($data)) {
            $db = new db;
            if (test == 1)
                echo "cache khuyen mai Not cache";
            $query = $db->query("SELECT * FROM pagegroup WHERE groupcode='new' order by pos ASC");


            $i = 0;
            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
                $i++;
                $data .= '<div class="col-md-3 col-sm-3 font-13 col' . $i .
                    ' wow fadeInUp " data-wow-duration="1s" data-wow-delay=".' . $i . 's ">';
                $data .= '<h4 class="font-14"><strong>' . $row['groupname'] .
                    '</strong></h4><hr>';
                $data .= '<ul>';
                $data .= getNewIngroup2($row['id']);
                $data .= '</ul>';
                $data .= '</div>';
            }

            cache($cache_key, $data, "+7 day", "cache/page/");
            $query->free();


        }
        return $data;

    }


    function getconfig($pos)
    {

        $domain = str_replace("www.", "", $_SERVER["HTTP_HOST"]);
        $cache_key = "seoconfig" . $domain . $pos;


        $data = cache($cache_key, null, "+60 seconds", "cache/page/");


        if (empty($data)) {
            $db = new db;
            $query = $db->query("SELECT * FROM config WHERE domain='" . $domain .
                "' AND pos='" . $pos . "'");


            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {

                $data .= $row['code'] . "\n";

            }


            $query->free();

            cache($cache_key, $data, "+60 seconds", "cache/page/");
        }
        return $data;

    }


    function getGroupNew($num = 5)
    {

        $cache_key = "groupnew22222";

        $data = cache($cache_key, null, "+1 hour", "cache/page/");

        if (empty($data)) {
            $db = new db;
            if (test == 1)
                echo "cache khuyen mai Not cache 1";
            $query = $db->query("SELECT * FROM pagegroup WHERE groupcode='khuyenmai' order by pos ASC");


            $data = '<div>';
            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
                $data .= '<div class="newleft">';
                $data .= '<h6><strong class="red font-b font-15"> <i class="glyphicon glyphicon-star-empty"></i>  ' .
                    $row['groupname'] . '</strong><h6>';
                $data .= "<ul>";
                $data .= getNewIngroup($row['id'], $num);
                $data .= "</ul>";
                $data .= '</div>';
            }

            $data .= '</div>';
            $query->free();

            cache($cache_key, $data, "+1 hour", "cache/page/");
        }
        return $data;

    }
    function getNewIngroup($id, $limit = 5)
    {
        $cache_key = "newg1" . $id . $limit;


        $data = cache($cache_key, null, "+1 hour", "cache/page/");

        if ($data == null) {

            $db = new db;

            $data = "";
            $query = $db->query("SELECT * FROM page WHERE page_group=" . $id .
                " order by page_pos ASC, id DESC limit " . $limit);
            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {

                $data .= '<li><a href="/p/' . $row['page_url'] . '">' . $row['page_title'] .
                    '</a></li>';
            }

            $query->free();

            cache($cache_key, $data, "+1 hour", "cache/page/");
        }
        return $data;


    }
    function seopage()
    {
        if (isset($_GET['page_url']) || isset($_GET['id'])) {
            $cache_key = md5($_GET['page_url']) . "1";
            $data = "";
            $data = cache($cache_key, null, "+7 day", "cache/page/");
            if (empty($data)) {
                $db = new db;

                if (isset($_GET['id'])) {
                    $query = $db->query("SELECT * FROM page WHERE id=" . $_GET['id'] . " limit 1");
                } else
                    $query = $db->query("SELECT * FROM page WHERE page_url='" . $_GET['page_url'] .
                        "' limit 1");
                $row = $query->fetch_array(MYSQLI_ASSOC);

                $datax['title'] = $row['page_title'];
                $datax['des'] = strip_tags($row['page_des']);
                $datax['keyword'] = $row['page_title'] . ", " . xoadau($row['page_title']);

                $data = serialize($datax);
                cache($cache_key, $data, "+7 day", "cache/page/");

                $query->free();
            }

            return unserialize($data);
        }

    }

    function getNewIngroup2($id, $limit = 10)
    {
        $cache_key = "newg2" . $id . $limit;


        $data = cache($cache_key, null, "+1 hour", "cache/page/");

        if ($data == null) {
            $db = new db;

            $data = "";
            $query = $db->query("SELECT * FROM page WHERE page_group=" . $id .
                " order by page_pos ASC, id DESC limit " . $limit);

            if ($query):
                while ($row = $query->fetch_array(MYSQLI_ASSOC)) {

                    $data .= '<li><a href="/p/' . $row['page_url'] . '">' . $row['page_title'] .
                        '</a></li>';
                }

                $query->free();
            endif;

            cache($cache_key, $data, "+1 hour", "cache/page/");
        }

        return $data;

    }
    function num_rows_cache($sql, $seconds = 3600)
    {
    

    
        global $db;

        $cache_key = md5($sql) . "x1";

        $num_rows = cache($cache_key, null, "+7 day", "cache/num_rows/");

        if (empty($num_rows)) {
            
           $row =  $db->query_first($sql);
           

            $num_rows = $row['num_rows'];
            cache($cache_key, $num_rows, "+1 hour", "cache/num_rows/");
        }
        return $num_rows;
    }
    function getCity()
    {
        $cache_key = "city";

        $city = cache($cache_key, null, "+1 hour", "cache/page/");

        if (empty($city)) {
            $city['01'] = "Hà Nội";
            $city['79'] = "Hồ Chí Minh";
            if (test == 1)
                echo "cache city not cache";
            $db = new db;
            $query = $db->query("SELECT * FROM province ORDER BY name, provinceid ASC");

            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
                $city[$row['provinceid']] = $row['name'];

            }
            $city = serialize($city);
            cache($cache_key, $city, "+1 hour", "cache/page/");
        }

        return unserialize($city);
    }

    function amduongdayso($dayso)
    {
        $dayso = preg_replace('/[^0-9]/', '', $dayso);
        $soam = 0;
        $soduong = 0;
        $am = array(
            0,
            2,
            4,
            6,
            8);
        $duong = array(
            1,
            3,
            5,
            7,
            9);
        $strleng = strlen($dayso);
        $row = "";
        for ($i = 0; $i < $strleng; $i++) {

            if (in_array($dayso[$i], $am)) {
                $soam++;
            } else {
                $soduong++;


            }


        }


        if ($soduong > $soam)
            $menh = "Dương";
        else
            if ($soam < $soduong)
                $menh = "Âm";
            else
                if ($soam == $soduong)
                    $menh = "Dương";
                else
                    $menh = "Âm";

        if ($menh == 'Âm')
            $color = "#555555";
        else
            $color = "red";
        return array(
            'menh' => $menh,
            'color' => $color,
            'soduong' => $soduong,
            'soam' => $soam);
    }
    function nguhanhso($dayso)
    {
        $dayso = preg_replace('/[^0-9]/', '', $dayso);
        $strleng = strlen($dayso);
        $nguhanh = array(
            0 => 'Thủy',
            1 => 'Thủy',
            2 => 'Thổ',
            3 => 'Mộc',
            4 => 'Mộc',
            5 => 'Thổ',
            6 => 'Kim',
            7 => 'Kim',
            8 => 'Thổ',
            9 => 'Hỏa');

        $temp = array();
        for ($i = 0; $i < $strleng; $i++) {

            if (isset($temp[$dayso[$i]])) {
                $temp[$dayso[$i]]++;
                if ($temp[$dayso[$i]] / $strleng >= 0.4)
                    return $nguhanh[$dayso[$i]];
            } else
                $temp[$dayso[$i]] = 1;

        }

        return $nguhanh[substr($dayso, -1, 1)];

    }
    function getSim2($i, $sql)
    {
        global $db;
        $data = "";


        $result = $db->query($sql);

        if ($db->affected_rows > 0):
            while ($row = $db->fetch_array($result)) {
                $i++;
                $row['stt'] = $i;


                $row['nguhanh'] = nguhanhso($row['sim1']);
                $row['amduong'] = amduongdayso($row['sim1']);
                $data[] = $row;

            }
            $db->free_result($result);
        endif;

        return $data;

    }
    function getSim($i, $sql)
    {
        global $db;
        $data = "";


        $result = $db->query($sql);

        if ($db->affected_rows > 0):
            while ($row = $db->fetch_array($result)) {
                $i++;
                $row['stt'] = $i;


                $data[] = $row;

            }
            $db->free_result($result);
        endif;

        return $data;

    }
    function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir")
                        rrmdir($dir . "/" . $object);
                    else
                        unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
    function deleteFile($dir)
    {
        if (substr($dir, strlen($dir) - 1, 1) != '/') {
            $dir .= '/';
        }
        if ($handle = @opendir($dir)) {
            while ($obj = readdir($handle)) {
                if ($obj != '.' && $obj != '..') {
                    if (is_dir($dir . $obj)) {
                        if (!deleteFile($dir . $obj)) {
                            echo $dir . $obj . "<br />";
                            return false;
                        }
                    } elseif (is_file($dir . $obj)) {
                        if (!unlink($dir . $obj)) {
                            echo $dir . $obj . "<br />";
                            return false;
                        }
                    }
                }
            }
            closedir($handle);
            if (!@rmdir($dir)) {
                echo $dir . '<br />';
                return false;
            }
            return true;
        }
        return true;
    }

    function stringtonumber($data)
    {
        return preg_replace('/[^0-9]/', '', $data);
    }
    function dlinfo($id)
    {
        global $db;
        return $db->query_first("SELECT * FROM daily WHERE id=" . $id);
    }
    function maxtime_event()
    {

        $row['time'] = time();
        return $row['time'];
    }
    function emailverify($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        else
            return false;
    }
    function verify_mobile($sim)
    {
        $leng = strlen($sim);
        $dau = substr($sim, 0, 2);

        if ($dau == '09' && $leng == 10)
            return true;
            
           else if ($dau == '08' && $leng == 10)
            return true;
        else
            if ($dau == '01' && $leng == 11)
                return true;

            else
                if (($dau == '02' || $dau == '04') and ($leng < 12 and $leng > 9))
                    return true;

                else
                    return false;
    }
    function dailylist()
    {
        global $db;

        $sql = $db->query("SELECT id, fullname, mobile FROM daily ORDER BY pos ASC");
        while ($row = $db->fetch_array($sql)) {
            $list['name'][] = $row['fullname'];
            $list['key'][] = $row['id'];
            $list['mobile'][] = $row['mobile'];

        }
        return $list;
    }

    function easymenu($group_id, $attr = '')
    {
        global $db;
        include_once 'tree.php';
        $tree = new Tree;

        $sql = sprintf('SELECT * FROM %s WHERE group_id = %s ORDER BY %s, %s', 'menu', $group_id,
            'parent_id', 'position');
        $menu = $db->fetch_all_array($sql);
        foreach ($menu as $row) {
            $label = '<a rel="nofollow" href="' . $row['url'] . '">';
            $label .= $row['title'];
            $label .= '</a>';

            $li_attr = '';
            if ($row['class']) {
                $li_attr = ' class="' . $row['class'] . '"';
            }
            $tree->add_row($row['id'], $row['parent_id'], $li_attr, $label);
        }
        $menu = $tree->generate_list($attr);
        return $menu;
    }

    function stvmenu($group_id, $attr = '')
    {
        $cache_key = "menu" . md5($group_id . $attr);
        $menu = cache($cache_key, null, "+1 hour", "cache/menu/");
        if (empty($menu)) {
            $db = new db;
            include_once 'tree.php';
            $tree = new Tree;

            $sql = sprintf('SELECT * FROM %s WHERE group_id = %s ORDER BY %s, %s', 'menu', $group_id,
                'parent_id', 'position');
            $query = $db->query($sql);
            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {

                if ($row['class']) {


                    $label = '<a rel="nofollow" href="' . $row['url'] . '"><span class="' . $row['class'] .
                        '"></span> ';
                } else
                    $label = '<a rel="nofollow" href="' . $row['url'] . '">';
                $label .= $row['title'];
                $label .= '</a>';

                $li_attr = '';

                $tree->add_row($row['id'], $row['parent_id'], $li_attr, $label);
            }

            $menu = $tree->generate_list($attr);
            cache($cache_key, $menu, "+1 hour", "cache/menu/");
        }
        return $menu;
    }


    function dropdownmenu($group_id, $attr = '')
    {
        $cache_key = "dropdown";
        $menu = cache($cache_key, null, "+1 hour", "cache/menu/");
        if (empty($menu)) {
            $db = new db;
            include_once 'tree.php';
            $tree = new Tree;

            $sql = sprintf('SELECT * FROM %s WHERE group_id = %s ORDER BY %s, %s', 'menu', $group_id,
                'parent_id', 'position');
            $query = $db->query($sql);
            while ($row = $query->fetch_array(MYSQLI_ASSOC)) {


                $label = '<option value="' . $row['url'] . '">' . $row['title'] . '</option>';


                $tree->add_row($row['id'], $row['parent_id'], $li_attr, $label);
            }

            $menu = $tree->generate_list($attr);
            cache($cache_key, $menu, "+1 hour", "cache/menu/");
        }
        return $menu;
    }


    function exits_row($table, $col, $row)
    {
        global $db;

        $db->query("SELECT * FROM {$table} WHERE {$col}='" . $row . "'");

        if ($db->affected_rows)
            return true;
        else
            return false;

    }
    function menu($groupid)
    {
        $cache_key = "menu" . $groupid;
        $menu = "";
        $menu2 = "";

        $menu = cache($cache_key, null, "+1 day", "cache/menu/");


        if ($menu == null) {
            if (test == 1)
                echo "cache menu1 not cache!";
            $db = new db;

            $qml = $db->query("SELECT * FROM menu WHERE parent_id=0 AND group_id=" . $groupid .
                " order BY position ASC");
            while ($rqml = $qml->fetch_array(MYSQLI_ASSOC)) {
                $qml2 = $db->query("SELECT * FROM menu WHERE parent_id=" . $rqml['id'] .
                    " ORDER BY position ASC");
                $num = $db->affected_rows;

                if ($num)
                    $menu .= '<li class="dropdown">
          <a href="' . $rqml['url'] .
                        '" class="dropdown-toggle" data-toggle="dropdown"><span class="' . $rqml['class'] .
                        '"></span> ' . $rqml['title'] . ' <span class="caret"></span></a>';
                else
                    $menu .= '<li class="' . $rqml['class'] . '"><a href="' . $rqml['url'] . '" >' .
                        $rqml['title'] . '</a></li>';

                if ($num > 0) {
                    $menu .= "<ul class=\"dropdown-menu mega-menu\" role=\"menu\" >";
                    while ($rqml2 = $qml2->fetch_array(MYSQLI_ASSOC)) {
                        $menu .= '<li class="mega-menu-column">';
                        $menu .= '<ul><li class="nav-header"><a href="' . $rqml2['url'] .
                            '" ><span class="' . $rqml2['class'] . '"></span> ' . $rqml2['title'] . '</a>';


                        $qml3 = $db->query("SELECT * FROM menu WHERE parent_id=" . $rqml2['id'] .
                            " ORDER BY position ASC");
                        $num = $db->affected_rows;
                        if ($num) {
                            while ($rqm3 = $qml3->fetch_array(MYSQLI_ASSOC)) {
                                $menu .= '<li><a href="' . $rqm3['url'] . '" ><span class="' . $rqm3['class'] .
                                    '"></span> ' . $rqm3['title'] . '</a></li>';
                            }
                        }

                        $menu .= '</ul></li>';

                    }
                    unset($menu2);
                    $menu .= "</ul>";
                }
                if ($num)
                    $menu .= "</li>";


            }
            cache($cache_key, $menu, "+1 day", "cache/menu/");


        }
        return $menu;
    }

    function menu2($groupid)
    {
        $cache_key = "menu2";
        $menu = "";
        $menu2 = "";

        $menu = cache($cache_key, null, "+1 hour", "cache/menu/");


        if ($menu == null) {
            if (test == 1)
                echo "cache menu2 not cache!";
            $db = new db;

            $qml = $db->query("SELECT * FROM menu WHERE parent_id=0 AND group_id=" . $groupid .
                " order BY position ASC");
            while ($rqml = $qml->fetch_array(MYSQLI_ASSOC)) {
                $qml2 = $db->query("SELECT * FROM menu WHERE parent_id=" . $rqml['id'] .
                    " ORDER BY position ASC");
                $num = $db->affected_rows;

                if ($num)
                    $menu .= '<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="' .
                        $rqml['class'] . '"></span> ' . $rqml['title'] .
                        ' <span class="caret"></span></a>';
                else
                    $menu .= '<li><a href="' . $rqml['url'] . '" >' . $rqml['title'] . '</a></li>';

                if ($num > 0) {
                    $menu .= "<ul class=\"dropdown-menu\" role=\"menu\" >";
                    while ($rqml2 = $qml2->fetch_array(MYSQLI_ASSOC)) {

                        $menu .= '<li><a href="' . $rqml2['url'] . '" >' . $rqml2['title'] . '</a></li>';

                    }

                    $menu .= "</ul>";
                }
                if ($num)
                    $menu .= "</li>";
            }
            cache($cache_key, $menu, "+1 hour", "cache/menu/");
        }
        return $menu;
    }

    function buildmenu($groupid)
    {
        $menu = "";
        global $db;
        $menu2 = "";
        $qml = $db->query("SELECT * FROM menu WHERE parent_id=0 AND group_id=" . $groupid .
            " order BY position ASC");
        while ($rqml = $db->fetch_array($qml)) {
            $qml2 = $db->query("SELECT * FROM menu WHERE parent_id=" . $rqml['id'] .
                " ORDER BY position ASC");
            $num = $db->affected_rows;

            if ($num)
                $menu .= '<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="' .
                    $rqml['class'] . '"></span>' . $rqml['title'] .
                    ' <span class="caret"></span></a>';
            else
                $menu .= '<li><a href="' . $rqml['url'] . '" ><span class="' . $rqml['class'] .
                    '"></span>' . $rqml['title'] . '</a></li>';

            if ($num > 0) {
                $menu .= "<ul class=\"dropdown-menu\" role=\"menu\">";
                while ($rqml2 = $db->fetch_array($qml2)) {
                    $menu2[] = '<li><a href="' . $rqml2['url'] . '" ><span class="' . $rqml2['class'] .
                        '"></span>' . $rqml2['title'] . '</a></li>';

                }

                $menu .= @join('<li class="divider"></li>', $menu2);
                unset($menu2);
                $menu .= "</ul>";
            }
            if ($num)
                $menu .= "</li>";
        }

        return $menu;
    }
    class facebookcheck
    {
        function checkuser($id)
        {
            global $db;


            $row = $db->query_first("SELECT * FROM member WHERE fb_id='" . $id . "'");

            if (!empty($row['fb_id'])) {
                setcookie("email", $row['email'], time() + 24 * 60 * 60);
                setcookie("uid", $row['id'], time() + 24 * 60 * 60);
                setcookie("fullname", $row['fullname'], time() + 24 * 60 * 60);
                setcookie("money", $row['money'], time() + 24 * 60 * 60);
                setcookie("perm", $row['perm'], time() + 24 * 60 * 60);

                return true;
            } else
                return false;
        }
        function user($id, $name, $email, $gender)
        {
            global $db;


            if ($gender == 'male')
                $gender = 'Nam';
            else
                if ($gender == '')
                    $gender = 'Nữ';
                else
                    $gender = 'Khác';

            $db->query("INSERT INTO member(fullname, fb_id, email, gender, money, status ) VALUES ('" .
                $name . "', '" . $id . "', '" . $email . "', '" . $gender .
                "', '10000','active') ");

            $last = $db->query_first("SELECT LAST_INSERT_ID() AS lastid FROM member");

            setcookie("email", $email, time($fb) + 24 * 60 * 60);
            setcookie("uid", $last['lastid'], time() + 24 * 60 * 60);
            setcookie("fullname", $name, time() + 24 * 60 * 60);
            setcookie("money", 10000, time() + 24 * 60 * 60);
            location("index.php");


        }
    }

    function msg($msg)
    {
        //echo "<script>$(function(){msgshow('".$msg."')})</script>";
    }
    function phoneveryfi($phone)
    {
        if ($phone) {
            if (preg_match("/^(09|01|08)[0-9]{8,9}$/", $phone)) {
                return true;
            } else
                return false;
        } else
            return false;
    }
    function spintxt($data)
    {
        preg_match_all("#\[([^\]]*)\]#is", $data, $array);

        foreach ($array[1] as &$spin) {


            $xspin = explode("|", $spin);

            $spinrand = round(rand(0, count($xspin) - 1));

            $newtext = $xspin[$spinrand];
            $xspin2 = "[" . $spin . "]";


            $data = str_replace($xspin2, $newtext, $data);

            unset($xspin);
            unset($spinrand);
        }
        return $data;
    }


    function getPage($code, $array1 = null, $array2 = null, $cache = null)
    {
        $cache_key = md5($code);

        $data = "";
        $data = cache($cache_key, null, "+1 day", "cache/page/");

        if ($cache)
            $data = "";

        if (empty($data)) {
            $db = new db;

            $row = $db->getOne("SELECT page_code, page_title, page_detail FROM page WHERE page_code='" .
                $code . "' limit 1");

            $replace = new querycache();
            
            if (is_array($array1) && is_array($array2)) {
                $data[$code]['title'] = str_replace($array1, $array2, $row['page_title']);
                $data[$code]['detail'] = str_replace($array1, $array2, $row['page_detail']);
            } else {
                $data[$code]['title'] = $row['page_title'];
                $data[$code]['detail'] = $replace->strtofunc($row['page_detail']);
            }

            $data = serialize($data);

            cache($cache_key, $data, "+1 day", "cache/page/");

        }

        return unserialize($data);
    }

    function getPageByGroupCode2($code, $array1 = null, $array2 = null, $nocache = null)
    {
        global $db;

        $query = $db->query("SELECT page_title, page_des FROM page WHERE page_group = (SELECT id FROM pagegroup WHERE groupcode='" .
            $code . "' limit 1) order by page_pos ASC");

        while ($row = $db->fetch_array($query)) {
            $r['msg'] = strip_tags($row['page_des']);
            $r['msg'] = str_replace($array1, $array2, $r['msg']);
            $r['title'] = strip_tags($row['page_title']);


            $data[] = $r;
        }

        $data = serialize($data);


        return unserialize($data);


    }
    function getPageByGroupCode($code, $array1 = null, $array2 = null, $nocache = null)
    {
        global $db;
        $cache_key = $code . "1";

        $data = cache($cache_key);
        if ($nocache == 1)
            $data = "";

        if (empty($data)) {
            $query = $db->query("SELECT page_title, page_des FROM page WHERE page_group = (SELECT id FROM pagegroup WHERE groupcode='" .
                $code . "' limit 1) order by page_pos ASC");

            while ($row = $db->fetch_array($query)) {
                $r['msg'] = strip_tags($row['page_des']);
                $r['msg'] = str_replace($array1, $array2, $r['msg']);
                $r['title'] = strip_tags($row['page_title']);


                $data[] = $r;
            }

            $data = serialize($data);
            cache($cache_key, $data, "+1 day", "cache/page/");
        }

        return unserialize($data);


    }
    function invoice($data)
    {
        global $db;
        $db->query_insert("invoice", $data);
    }
    function witelog($log)
    {
        $f = fopen($_SERVER["DOCUMENT_ROOT"] . "/ccache/logs.log", "a+");
        fwrite($f, "\n" . date('h:j:s d/m/Y') . " | " . $log);
        fclose($f);
    }
    function field_valuecheck($table, $col, $value)
    {
        global $db;

        $db->query("select * FROM $table where $col='" . $value . "'");

        if ($db->affected_rows)
            return true;
        else
            return false;
    }
    function perm_select($select = null)
    {

        global $db;
        $str = "";
        $query = $db->query("SELECT * FROM perm");
        while ($row = $db->fetch_array($query)) {
            if ($select && $select == $row['id'])
                $str .= "<option value=\"" . $row['id'] . "\" selected=\"selected\">" . $row['perm_name'] .
                    "</option>\n";
            else
                $str .= "<option value=\"" . $row['id'] . "\">" . $row['perm_name'] . "</option>\n";
        }
        return $str;

    }

    function group_select($select = null)
    {

        global $db;
        $str = "";
        $query = $db->query("SELECT * FROM cgroup where guid=" . $_SESSION['uid']);
        while ($row = $db->fetch_array($query)) {
            if ($select && $select == $row['id'])
                $str .= "<option value=\"" . $row['gid'] . "\" selected=\"selected\">" . $row['gname'] .
                    "</option>\n";
            else
                $str .= "<option value=\"" . $row['gid'] . "\">" . $row['gname'] . "</option>\n";
        }
        return $str;

    }

    function myperm()
    {
        global $db;
        $perm = array();

        $perm['event'] = "Quản lý sự kiện";
        $perm['lichsuchecksim'] = "Lịch sử check sim";
        $perm['orders'] = "Quản lý đơn hàng";
        $perm['page'] = "Quản lý tin";
        $perm['pagegroup'] = "Quản lý nhóm tin";
        $perm['checksim'] = "Check sim";
        $perm['daily'] = "Quản lý đại lý";
        $perm['seo'] = "Quản lý seo";
        $perm['cod'] = "Quản lý cod";

        return $perm;
    }

    function doctien($number)
    {
        $donvi = " đồng ";
        $tiente = array(
            "nganty" => " nghìn tỷ ",
            "ty" => " tỷ ",
            "trieu" => " triệu ",
            "ngan" => " nghìn ",
            "tram" => " trăm ");
        $num_f = $nombre_format_francais = number_format($number, 2, ',', ' ');
        $vitri = strpos($num_f, ',');
        $num_cut = substr($num_f, 0, $vitri);
        $mang = explode(" ", $num_cut);
        $sophantu = count($mang);
        switch ($sophantu) {
            case '5':
                $nganty = doc3so($mang[0]);
                $text = $nganty;
                $ty = doc3so($mang[1]);
                $trieu = doc3so($mang[2]);
                $ngan = doc3so($mang[3]);
                $tram = doc3so($mang[4]);
                if ((int)$mang[1] != 0) {
                    $text .= $tiente['ngan'];
                    $text .= $ty . $tiente['ty'];
                } else {
                    $text .= $tiente['nganty'];
                }
                if ((int)$mang[2] != 0)
                    $text .= $trieu . $tiente['trieu'];
                if ((int)$mang[3] != 0)
                    $text .= $ngan . $tiente['ngan'];
                if ((int)$mang[4] != 0)
                    $text .= $tram;
                $text .= $donvi;
                return $text;


                break;
            case '4':
                $ty = doc3so($mang[0]);
                $text = $ty . $tiente['ty'];
                $trieu = doc3so($mang[1]);
                $ngan = doc3so($mang[2]);
                $tram = doc3so($mang[3]);
                if ((int)$mang[1] != 0)
                    $text .= $trieu . $tiente['trieu'];
                if ((int)$mang[2] != 0)
                    $text .= $ngan . $tiente['ngan'];
                if ((int)$mang[3] != 0)
                    $text .= $tram;
                $text .= $donvi;
                return $text;


                break;
            case '3':
                $trieu = doc3so($mang[0]);
                $text = $trieu . $tiente['trieu'];
                $ngan = doc3so($mang[1]);
                $tram = doc3so($mang[2]);
                if ((int)$mang[1] != 0)
                    $text .= $ngan . $tiente['ngan'];
                if ((int)$mang[2] != 0)
                    $text .= $tram;
                $text .= $donvi;
                return $text;
                break;
            case '2':
                $ngan = doc3so($mang[0]);
                $text = $ngan . $tiente['ngan'];
                $tram = doc3so($mang[1]);
                if ((int)$mang[1] != 0)
                    $text .= $tram;
                $text .= $donvi;
                return $text;

                break;
            case '1':
                $tram = doc3so($mang[0]);
                $text = $tram . $donvi;
                return $text;

                break;
            default:
                echo "Xin lỗi số quá lớn không thể đổi được";
                break;
        }
    }
    function doc3so($so)
    {
        $achu = array(
            " không ",
            " một ",
            " hai ",
            " ba ",
            " bốn ",
            " năm ",
            " sáu ",
            " bảy ",
            " tám ",
            " chín ");
        $aso = array(
            "0",
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9");
        $kq = "";
        $tram = floor($so / 100); // Hàng trăm
        $chuc = floor(($so / 10) % 10); // Hàng chục
        $donvi = floor(($so % 10)); // Hàng đơn vị
        if ($tram == 0 && $chuc == 0 && $donvi == 0)
            $kq = "";
        if ($tram != 0) {
            $kq .= $achu[$tram] . " trăm ";
            if (($chuc == 0) && ($donvi != 0))
                $kq .= " lẻ ";
        }
        if (($chuc != 0) && ($chuc != 1)) {
            $kq .= $achu[$chuc] . " mươi";
            if (($chuc == 0) && ($donvi != 0))
                $kq .= " linh ";
        }
        if ($chuc == 1)
            $kq .= " mười ";
        switch ($donvi) {
            case 1:
                if (($chuc != 0) && ($chuc != 1)) {
                    $kq .= " mốt ";
                } else {
                    $kq .= $achu[$donvi];
                }
                break;
            case 5:
                if ($chuc == 0) {
                    $kq .= $achu[$donvi];
                } else {
                    $kq .= " năm ";
                }
                break;
            default:
                if ($donvi != 0) {
                    $kq .= $achu[$donvi];
                }
                break;
        }
        if ($kq == "")
            $kq = 0;
        return $kq;
    }
    function doc_so($so)
    {
        $so = preg_replace("([a-zA-Z{!@#$%^&*()_+<>?,.}]*)", "", $so);
        if (strlen($so) <= 21) {
            $kq = "";
            $c = 0;
            $d = 0;
            $tien = array(
                "",
                " nghìn",
                " triệu",
                " tỷ",
                " nghìn tỷ",
                " triệu tỷ",
                " tỷ tỷ");
            for ($i = 0; $i < strlen($so); $i++) {
                if ($so[$i] == "0")
                    $d++;
                else
                    break;
            }
            $so = substr($so, $d);
            for ($i = strlen($so); $i > 0; $i -= 3) {
                $a[$c] = substr($so, $i, 3);
                $so = substr($so, 0, $i);
                $c++;
            }
            $a[$c] = $so;
            for ($i = count($a); $i > 0; $i--) {
                if (strlen(trim($a[$i])) != 0) {
                    if (doc3so($a[$i]) != "") {
                        if (($tien[$i - 1] == "")) {
                            if (count($a) > 2)
                                $kq .= " không trăm lẻ " . doc3so($a[$i]) . $tien[$i - 1];
                            else
                                $kq .= doc3so($a[$i]) . $tien[$i - 1];
                        } else
                            if ((trim(doc3so($a[$i])) == "mười") && ($tien[$i - 1] == "")) {
                                if (count($a) > 2)
                                    $kq .= " không trăm " . doc3so($a[$i]) . $tien[$i - 1];
                                else
                                    $kq .= doc3so($a[$i]) . $tien[$i - 1];
                            } else {
                                $kq .= doc3so($a[$i]) . $tien[$i - 1];
                            }
                    }
                }
            }
            return $kq;
        } else {
            return "Số quá lớn!";
        }
    }

?>
