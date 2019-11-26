<?php
global $mang;
$syncurl = $_SERVER["REQUEST_URI"];
$syncurl = explode("sync", $syncurl);

$where="";
$limit=5;

if (isset($syncurl[1]) and $syncurl[1] != '') {
    $syncurl = explode('/', $syncurl[1]);

    if (isset($syncurl[2]) and (int)$syncurl[2] > 5)
        $limit = (int) $syncurl[2];

    else
        $limit = 5;

    $syncaction = $syncurl[1];
    $syncaction = strtolower($syncaction);

    if ($syncaction != '') {
        switch ($syncaction) {
            case 'vinaphone':

                $fixmang = "Vinaphone";

                $where = $mang[$fixmang];


                break;

            case 'mobifone':

                $fixmang = "Mobifone";

                $where = $mang[$fixmang];


                break;

            case 'viettel':

                $fixmang = "Viettel";

                $where = $mang[$fixmang];

                break;

            case 'gmobile':

                $fixmang = "Gmobile";

                $where = $mang[$fixmang];

                break;


            case 'vietnamobile':

                $fixmang = "Vietnamobile";

                $where = $mang[$fixmang];
                break;


        }

        $where = str_replace('sim2', 'sms_to', $where);

    }


}