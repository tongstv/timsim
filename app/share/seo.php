<?php
function seo($url, $array1, $array2)
{
    if (isset($_GET['do']) and $_GET['do'] == 'page.view') {
        $r = seopage();
        return $r;
    }

    $r = array();
    $url = preg_replace('/(\?page=)([0-9]*)/', '', $url);

    $domain = $_SERVER['HTTP_HOST'];

    $url = "http://" . $domain . $url;

    if (isset($_GET['do']))
        $do = $_GET['do'];
    else
        $do = "";
    if ($do == 'ordered') {
        $url = 'datmuasim';
        $cache_key = md5($url);
    }

    if ($do == 'ordered.done') {
        $url = 'dathangthanhcong';
        $cache_key = md5($url);
    }

    if (empty($cache_key))
        $cache_key = md5($url);

    $data = cache($cache_key, null, "+1 year", "cache/seo/");

    if (isset($_GET['do'])  AND $_GET['do'] == 'search') {
        $url = "search";
    }


    if (empty($data)) {
        if (test == 1)
            echo "Chua ho?t d?ng seo cache";
        $db = new db;

        $row = $db->getOne("SELECT title, des, keyword FROM seo where url='" . $url .
            "' limit 1");


        if ($row['title'] == null and isset($_GET['do']) and $_GET['do'] == 'search') {

            $txt[] = "Tìm kiếm sim:";

            if (!empty($_GET['sim']))
                $txt[] = $_GET['sim'];

            if (isset($_GET['giatu']))
                $txt[] = "Giá từ: " . $_GET['giatu'];
            if (isset($_GET['den']))
                $txt[] = "Đến: " . $_GET['den'];
            $r['title'] = @join(" ", $txt);
            return $r;
        } elseif ($row['title'] == null) {
            $row = $db->getOne("SELECT title, des, keyword FROM seo where url='http://" . $_SERVER["HTTP_HOST"] .
                "/' limit 1");
        }
        if ($url != 'datmuasim') {
            $r['title'] = str_replace($array1, $array2, $row['title']);
            $r['des'] = str_replace($array1, $array2, $row['des']);
            $r['keyword'] = str_replace($array1, $array2, $row['keyword']);
        } else {
            $r['title'] = $row['title'];
            $r['des'] = $row['des'];
            $r['keyword'] = $row['keyword'];
        }


        $data = serialize($r);

        cache($cache_key, $data, "+1 year", "cache/seo/");
    }

    if ($url == 'datmuasim') {
        $seo = unserialize($data);
        $seo['title'] = str_replace($array1, $array2, $seo['title']);
        $seo['des'] = str_replace($array1, $array2, $seo['des']);
        $seo['keyword'] = str_replace($array1, $array2, $seo['keyword']);
        return $seo;
    }

    if ($url == 'search') {

        
        foreach ($_GET as $key => $val) {
            array_push($array1, "#" . $key . "#");
            array_push($array2, $val);

        }

        $seo = unserialize($data);
        $seo['title'] = str_replace($array1, $array2, $seo['title']);
        $seo['des'] = str_replace($array1, $array2, $seo['des']);
        $seo['keyword'] = str_replace($array1, $array2, $seo['keyword']);
        return $seo;
    }


    return unserialize($data);

}

$array1 = array("#sim#", "#domain#");
$getsosim = isset($_GET['sosim']) ? $_GET['sosim'] : "";

$array2 = array($getsosim, str_replace('www.', '', $_SERVER["HTTP_HOST"]));


