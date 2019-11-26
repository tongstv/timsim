<?php

function updatelink()
{
    if (!class_exists('db')) {
        require_once "app/lib/mysqli.php";


    }
    $db = new db;

    $cache_key = "sdsdsd332sd";
    $cache_path = "seo/";

    $data = cache($cache_key, null, "+10 year", "cache/" . $cache_path);

    if (empty($data)) {


        $db->query("update `menu` SET `url` =replace(url,'MobiFone','Mobifone')");

        $db->query("update `menu` SET `url` =replace(url,'VinaPhone','Vinaphone')");
        $db->query("update `menu` SET `url` =replace(url,'VietTel','Viettel')");


        $db->query("update `menu` SET `url` =replace(url,'VietNamobile','Vietnamobile')");
        $data = 1;
        cache($cache_key, $data, "+1 hour", "cache/" . $cache_path);


    }

}
updatelink();
$cache_key = "rm1111";
$cache_path = "page";

$data = cache($cache_key, null, "+10 year", "cache/" . $cache_path);

if (empty($data)) {


    rrmdir(CACHE_PATH . "cache/menu");

        $data=1;
    cache($cache_key, $data, "+1 hour", "cache/" . $cache_path);

}
if (!file_exists("m.php")) {
    $navmenu = "";
    $navmenu['Vinaphone'] = array(
        '0911','0912','0913','0914','0915','0916','0917','0918','0919',
        '0941', '0942', '0943', '0944', '0945', '0946', '0947', '0948', '0949',
        '0123',
        '0124',
        '0125',
        '0127',
        '0129',
        '088');
    $navmenu['Mobifone'] = array(
        '0901','0902','0903','0904','0905','0906','0907','0908','0909',
        '0931', '0932', '0933', '0934', '0935', '0936', '0937', '0938', '0939',
        '0120',
        '0121',
        '0122',
        '0126',
        '0128',
        '089');
    $navmenu['Viettel'] = array(
    '0971','0972','0973','0974','0975','0976','0977','0978','0979',
        '0981', '0982', '0983', '0984', '0985', '0986', '0987', '0988', '0989',
        '0961', '0962', '0963', '0964', '0965', '0966', '0967', '0968', '0969',
        '0162',
        '0163',
        '0164',
        '0165',
        '0166',
        '0167',
        '0168',
        '0169',
        '086');
    $navmenu['Vietnamobile'] = array(
        '0921', '0922', '0923', '0924', '0925', '0926', '0927', '0928', '0929',
        '0186',
        '0188');
    $navmenu['Gmobile'] = array('0993', '0994', '0995', '0996', '0997', '0199');
    $mang = "";
    $mang['Viettel'] = "AND (LEFT(`sim2`,3) IN ('097','098','096') || LEFT(`sim2`,4) IN ('0162', '0163','0164', '0165', '0166', '0167', '0168', '0169','086'))";
    $mang['Mobifone'] = "AND (LEFT(`sim2`,3) IN ('090','093','089') || LEFT(`sim2`,4) IN ('0120', '0121', '0122', '0126', '0128','0898'))";
    $mang['Vinaphone'] =
        "AND (LEFT(`sim2`,3) IN ('091','094','088') || LEFT(`sim2`,4) IN ( '0123', '0124', '0125', '0127', '0129','088'))";
    $mang['Vietnamobile'] =
        "AND (LEFT(`sim2`,3) IN ('092') || LEFT(`sim2`,4) IN ('0186','0188'))";
    $mang['Gmobile'] = "AND (LEFT(`sim2`,3) IN ('099') || LEFT(`sim2`,4) IN ('0199'))";
    $mangpos = "";
    $mangpos['Viettel'] = 1;
    $mangpos['Mobifone'] = 2;
    $mangpos['Vinaphone'] = 3;
    $mangpos['Vietnamobile'] = 4;
    $mangpos['Gmobile'] = 5;
}
