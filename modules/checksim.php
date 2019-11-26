<?php

/**
 * @author stv.vn
 * @copyright 2014
 */
class checksim extends Smarty
{
    protected $lcs;

    /** view **/
    function index()
    {
        global $db, $mangpos, $kieu,$loai, $config;
       $this->setTemplateDir(TEMPLATE);
       
       $db = new db;

        $this->display(temp_file);
    }

}
