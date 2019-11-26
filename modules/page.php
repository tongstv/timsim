<?php
#ini_set("display_errors", 1);


class autob
{
    protected $title;


    function fiximg($matches)
    {
        $img = $matches[0];

        $src = preg_match('/src="([^"]*)/', $img, $arr);

        return '<img alt="'.$this->title.'" src="' . $arr[1] . '" class="img-responsive img-fluid">';
    }
    function autotag($title, $text)
    {

        $this->title = $title;
        $title = explode(' ', $title);

        foreach ($title as $key) {

            $keywords[] = " sim " . $key . " ";

            $replace[] = " <b>sim " . $key . "</b> ";

            $keywords[] = " số " . $key . " ";
            $replace[] = " <u>số " . $key . "</u> ";


            $keywords[] = " đẹp " . $key . " ";

            $replace[] = " <i>đẹp " . $key . "</i> ";
            
            $keywords[] =" sim số đẹp ";
            
            $replace[] =' <a title="sim số đẹp" href ="https://timsim.com">sim số đẹp</a> ';
            
            
             $keywords[] =" kho sim số đẹp ";
            
            $replace[] =' <a title="kho sim số đẹp" href ="https://timsim.com">kho sim số đẹp </a> ';
            
            
                
             $keywords[] =" tổng kho sim số đẹp ";
            
            $replace[] =' <a title="tổng kho sim số đẹp" href ="https://timsim.com">tổng kho sim số đẹp</a> ';


         $keywords[] =" bán sim số đẹp ";
            
            $replace[] =' <a title="bán sim số đẹp" href ="https://timsim.com">bán sim số đẹp</a> ';
        }

        
        
        $fix1 = str_replace($keywords, $replace, $text);
        
        
        return  preg_replace_callback('/<img(.*)>/',array($this,'fiximg'), $fix1);
    }


}





class page extends SmartyBC
{
    private $id = null;
    private $keyword = null;
    private $url = null;


    function hinhanh($code = 'hinhanh')
    {
        $rand = round(rand(0, 3));
        $cache_key = "hinhanhseo" . $rand;
        $cache_path = "page/";

        $data = cache($cache_key, null, "+ 1 hour", "cache/" . $cache_path);

        if (empty($data)) {
            $db = new db;
            $data = $db->getAll("SELECT * FROM page WHERE page_group=(select id from pagegroup where groupcode='" .
                $code . "' limit 1) ORDER BY page_pos ASC ");


            $i = 0;
            foreach ($data as $row) {
                $d[$i] = $row['page_detail'];
                $i++;
            }

            $rand = round(rand(0, $i));

            $data = $d[$rand];


            $data = str_replace("#simsodep#", $this->keyword, $data);

            cache($cache_key, $data, "+1 hour", "cache/" . $cache_path);

        }

        return $data;

    }

    function video($code = 'video')
    {
        $rand = round(rand(0, 9));
        $cache_key = "videoseo" . $rand;
        $cache_path = "page/";

        $data = cache($cache_key, null, "+ 1 hour", "cache/" . $cache_path);

        if (empty($data)) {
            $db = new db;
            $data = $db->getAll("SELECT * FROM page WHERE page_group=(select id from pagegroup where groupcode='" .
                $code . "' limit 1) ORDER BY page_pos ASC ");


            $i = 0;
            foreach ($data as $row) {
                $d[$i] = $row['page_detail'];
                $i++;
            }

            $rand = round(rand(0, $i));

            $data = $d[$rand];


            cache($cache_key, $data, "+1 hour", "cache/" . $cache_path);

        }
        return $data;

    }
    function seo($code = 'baiseo')
    {

        $cache_key = "seobaiviet";
        $cache_path = "page/";


        $data = cache($cache_key, null, "+ 1 hour", "cache/" . $cache_path);

        if (empty($data)) {

            $db = new db;
            $data = $db->getAll("SELECT * FROM page WHERE page_group=(select id from pagegroup where groupcode='" .
                $code . "' limit 1) ORDER BY page_pos ASC ");

            $i = 0;
            foreach ($data as $row) {
                $d[$i] = $row['page_detail'];
                $i++;
            }

            $rand = round(rand(0, $i));

            $data = $d[$rand];


            cache($cache_key, $data, "+1 hour", "cache/" . $cache_path);

        }


        $array1 = ['#keyword#', '#url#'];
        $array2 = [$this->keyword, $this->url];

        return str_replace($array1, $array2, $data);


    }
    function get10page($limit = 10)
    {


        $db = new db;


        $data = $db->getAll("select * from page where id > " . $this->id . " limit " . $limit);

        foreach ($data as $row) {
            $str[] = '<a href="/p/' . $row['page_url'] . '" title="' . $row['page_title'] .
                '">' . $row['page_title'] . '</a>';
        }

        if (is_array($str)) {
            $result = join(", ", $str);
            unset($str);
            return $result;
        } else
            return "";

    }
    function strtofunc($text)
    {
        $reg = "/\{{([0-9a-zA-Z\- ]+)\:([0-9a-zA-Z\- ]+):?\}}/";
        return preg_replace_callback($reg, array($this, 'ireplace'), $text);
    }

    function ireplace($matches)
    {
        if (method_exists($this, $matches[1])) {
            return @$this->$matches[1]($matches[2]);
        } else {
            return "{{" . $matches[1] . ":" . $matches[2] . "}}";
        }
    }


    function morepage($gid)
    {


        $cache_key = "dem1" . $gid;
        $cache_path = "page/";

        $count = cache($cache_key, null, "+ 1 hour", "cache/" . $cache_path);

        if (empty($count)) {

            /***
            
            code
            **/
            $db = new db;

            $row = $db->getOne("select count(*) AS count FROM page WHERE page_group=" . $gid);

            $count = $row['count'];


            cache($cache_key, $count, "+1 hour", "cache/" . $cache_path);

        }


        if ($count > 200) {
            $limit = ceil(round($count / 100));


            $bg = rand(0, $limit);
            $cache_key = "1more" . $gid . $bg;
        } else
            $cache_key = "1more" . $gid;

        $data = cache($cache_key, null, "+1 year", "cache/page/");

        if (empty($data)) {
            $db = new db;

            if ($count > 200) {
                $data = $db->getAll("SELECT page_title, page_url, page_pos FROM page WHERE page_group=" .
                    $gid . " ORDER BY page_pos ASC limit " . $bg . ", 200");


            } else
                $data = $db->getAll("SELECT page_title, page_url, page_pos FROM page WHERE page_group=" .
                    $gid . " ORDER BY page_pos ASC");


            $data = serialize($data);
            cache($cache_key, $data, "+1 year", "cache/page/");
        }

        return @unserialize($data);

    }
    function view()
    {

        $this->setTemplateDir(TEMPLATE);


        $db = new db;


        $query = $db->query("SELECT * FROM page WHERE page_url='" . trim($_GET['page_url']) .
            "' limit 1");
        $row = $query->fetch_array(MYSQLI_ASSOC);
        $this->id = $row['id'];
        $this->keyword = $row['page_title'];
        $this->url = $row['page_url'];



        $row['page_detail'] = @$this->strtofunc($row['page_detail']);
        
        
        
    //    $autob = new autob;

 ///$row['page_detail']= $autob->autotag( $row['page_title'], $row['page_detail']);
        ///
        ///
        ///

            $seed = $db->getAll("select * from seeding WHERE  cid =".$row['id']);

            $this->assign("seeding",$seed);


        $this->assign($row);
        $query->free();

        if (isset($row['page_group']))
            $this->assign("more", $this->morepage($row['page_group']));
        $this->registerFilter("output", "minify_html");
        if ($this->lc())
            $this->display(temp_file);
    }

}
