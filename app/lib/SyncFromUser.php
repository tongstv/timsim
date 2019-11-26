<?php
class SyncFromUser
{
    protected $admin_db;
    protected $home_db;
    protected $db;
    var $FromDB = null;
    var $Table = array();
    function __construct()
    {
        global $admin_db_db,$home_db_db;
        $this->admin_db = $admin_db_db;
        $this->home_db = $home_db_db;

        $this->db = new mysqli(DB_SERVER, CRON_DB_USER, CRON_DB_PASS, CRON_DB_DATABASE);
        $this->db->query("SET NAMES utf8");
    }

    function StartAdminSync()
    {
        if ($this->FromDB != null and count($this->Table) > 0) {


            foreach ($this->Table as $table):

                $sql .= "DROP TABLE IF EXISTS " . $this->admin_db . "." . $table . ";";

                $sql .= "CREATE TABLE " . $this->admin_db . "." . $table . " AS select * FROM " .
                    $this->FromDB . "_admin." . $table . ";";

            endforeach;

            if($this->db->multi_query($sql))
            {
                echo "sync done: ".join(" - ",$this->Table);
            }
        }

    }
    function StartHomeSync()
    {
        $table = "sim";

        $sql  .= "DROP TABLE IF EXISTS " . $this->home_db . "." . $table . ";";

        $sql .= "CREATE TABLE " . $this->home_db . "." . $table . " AS select * FROM " .
            $this->FromDB . "_home." . $table . ";";
            
              if($this->db->multi_query($sql))
            {
                echo "sync done: sim";
            }
    }
}
