<?php
if (isset($_SERVER["REQUEST_URI"]) and strstr($_SERVER["REQUEST_URI"],'index.php/syncmysql')) {

    include_once __DIR__."/SQLyogTunnel.php";
    exit;

}
if(isset($test) AND $test==1)
{
    ini_set("display_errors",1);
}
else
ini_set("display_errors",0);
 header('Content-language: vi');
if (function_exists('header_remove')) {
    header_remove('X-Powered-By'); // PHP 5.3+
} else {
    @ini_set('expose_php', 'off');
}

define('test',0);

if(class_exists('auth'))
$seconds_to_cache=0;
else
$seconds_to_cache = 300;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");

header("Cache-Control: max-age=$seconds_to_cache");
$src = isset($_GET['src']) ? $_GET['src'] : "";
$w = isset($_GET['w']) ? $_GET['w'] : "";
$h = isset($_GET['h']) ? $_GET['h'] : "";
if ($src and ($w and $h))
{
    include_once "app/resize.php";
}

//include 'app/lib/class.magic-min.php';

// prevent conflicts between different applications using the same memcache server
define('CACHE_NAMESPACE','cache');

// if memcache is not available this folder will be used to store cache
// memcache server hostname

define('CACHE_MEMCACHE_HOST','127.0.0.1');


if(isset($_ENV['HTTP_HOST']))
{
    $host_domain=$_ENV['HTTP_HOST'];
}
else
{
    $host_domain =$_SERVER["HTTP_HOST"];   
}

define('CACHE_PATH',$_SERVER["DOCUMENT_ROOT"]."/c");



// memcache server port
define('CACHE_MEMCACHE_PORT','11211');

/**
 * cache()
 * Read, Write or Clear cached data using a key value pair.
 *
 * @param string $key - the key to use to store and retrieve the cached data
 * @param mixed $value - the data to store in cache
 * @param string $expires - the expirey time of the data
 * @return mixed - the cached data to return
**/
function cache($key,$value=null,$expires='+1 year', $folder='cache/'){
	// static variables allowing the function to run faster when called multiple times
	static $cache_id, $memcache;

	// get the cache_id used for easy cache clearing
	if ($key != 'cache_id') {
		if (!$cache_id) {
			$cache_id = cache('cache_id',null);
		}
		if (!$cache_id) {
			$cache_id = md5(microtime());
			cache('cache_id',$cache_id);
		}
		$file = CACHE_NAMESPACE.'.'.$cache_id.'.'.$key;
	}
	else {
		$file = CACHE_NAMESPACE.'.'.$key;
	}

	// set the expire time
	$now = time();
	if (!is_numeric($expires)) {
		$expires = strtotime($expires, $now);
	}

	// attempt connection to memcache
	if ($memcache===null) {
		if (class_exists('Memcache')) {
			if (!$memcache) {
				$memcache = new Memcache;
				@$memcache->connect(CACHE_MEMCACHE_HOST, CACHE_MEMCACHE_PORT) or ($memcache=false);
			}
		}
	}

	// handle cache using memcache
	if ($memcache) {
		// read cache
        $file=str_replace("www.",'',$_SERVER["HTTP_HOST"])."__".$file;
        $key=str_replace("www.",'',$_SERVER["HTTP_HOST"])."_".$key;
		if ($value===null) {
			$time = $memcache->get($file.'.time');
			if (!$expires || $time <= $now) {
				$memcache->delete($file.'.time');
				$memcache->delete($file.'.data');
			}
			else {
				$value = $memcache->get($file.'.data');
				if ($value===false) $value = null;
			}
		}
		// write cache
		else {
			$memcache->set($file.'.data', $value);
			$memcache->set($file.'.time', $expires);
		}
	}

	// handle cache using files
	else {
		$md5 = md5($key);
		$file = CACHE_PATH.$folder.substr($md5,0,1).'/'.substr($md5,0,2).'/'.substr($md5,0,3).'/'.$file;
     
		// read cache
		if ($value===null) {
			if (file_exists($file)) {
				$result = unserialize(file_get_contents($file));
              
				if (!$expires || $result['time'] <= $now) {
					@unlink($file);
				}
				else {
					$value = $result['data'];
				}
			}
		}
		// write cache
		else {
			if (!file_exists(dirname($file))){
				mkdir(dirname($file),0777,true);
			}
			file_put_contents($file, serialize(array('data'=>$value,'time'=>$expires)));
		}
	}

	// return the data
	return $value;
}

?>