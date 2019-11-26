<?php
class json extends db
{

    public function query_cache($sql, $time = 10)
    {




            $cache_key = md5($sql) . md5($time);


            $data = cache($cache_key, null, $time, "cache/page/");


            if ($data === null) {


                $data = $this->getAll($sql);

                $data = json_encode($data);
                cache($cache_key, $data,'+' .$time+' seconds', "cache/page/");


            }
            return json_decode($data, true);





    }


    function index()
    {
        header('Content-type: application/json');


        if (isset($_GET['simdl'])) {
            $data = $this->query_cache("SELECT sim1, gianhap FROM simso WHERE simdl=" . (int)
                $_REQUEST['simdl'], 24*24*60);

            echo json_encode($data);
            exit();
        }

        $data = $this->query_cache("SELECT id AS xid, fullname, email, last_update, mobile FROM daily",
           24*24*60);


        foreach ($data as $row) {
            $email = strtolower(trim($row['email']));

            $d[$row['email']] = $row;
        }
        echo json_encode($d);

    }


}
