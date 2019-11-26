<?php
ini_set("display_errors",1);
class memplush
{
        function index()
        {
            $memcache_obj = memcache_connect('memcache_host', 11211);

            memcache_flush($memcache_obj);
            
            /* OO API */
            
            $memcache_obj = new Memcache;
            $memcache_obj->connect('memcache_host', 11211);
            
            echo $memcache_obj->flush();
        }

}