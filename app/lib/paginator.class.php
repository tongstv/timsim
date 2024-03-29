<?php
/**
 * PHP Pagination Class
 * @author admin@catchmyfame.com - http://www.catchmyfame.com
 * @version 3.0.0
 * @date February 6, 2014
 * @copyright (c) admin@catchmyfame.com (www.catchmyfame.com)
 * @license CC Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0) - http://creativecommons.org/licenses/by-sa/3.0/
*/
/*
try {
	$conn = new PDO('mysql:host=;dbname=', '', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$num_rows = $conn->query('SELECT COUNT(*) FROM '.$table)->fetchColumn(); 
	$pages = new Paginator($num_rows,9,array(15,3,6,9,12,25,50,100,250,'All'));
	echo $pages->display_pages();
	echo "<span class=\"\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span>";
	$stmt = $conn->prepare('SELECT City.Name,City.Population,Country.Name,Country.Continent,Country.Region FROM City INNER JOIN Country ON City.CountryCode = Country.Code ORDER BY City.Name ASC LIMIT :start,:end');
	$stmt->bindParam(':start', $pages->limit_start, PDO::PARAM_INT);
	$stmt->bindParam(':end', $pages->limit_end, PDO::PARAM_INT);
	$stmt->execute();
	$result = $stmt->fetchAll();
	echo "<table><tr><th>City</th><th>Population</th><th>Country</th><th>Continent</th><th>Region</th></tr>\n";
	foreach($result as $row) {
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>\n";
	}
	echo "</table>\n";
	echo $pages->display_pages();
	echo "<p class=\"paginate\">Page: $pages->current_page of $pages->num_pages</p>\n";
	echo "<p class=\"paginate\">SELECT * FROM table LIMIT $pages->limit_start,$pages->limit_end (retrieve records $pages->limit_start-".($pages->limit_start+$pages->limit_end)." from table - $pages->total_items item total / $pages->items_per_page items per page)";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
*/
error_reporting(-1);
class Paginator{
	public $current_page;
	public $items_per_page;
	public $limit_end;
	public $limit_start;
	public $num_pages;
	public $total_items;
	protected $ipp_array;
	protected $limit;
	protected $mid_range;
	protected $querystring;
	protected $return;
	protected $get_ipp;

	public function __construct($total=0,$mid_range=7,$ipp_array=array(10,25,50,100,"All")) {
		$this->total_items = (int) $total;
		if($this->total_items <= 0);
		$this->mid_range = (int) $mid_range; // midrange must be an odd int >= 1
		if($this->mid_range%2 == 0 Or $this->mid_range < 1) exit("Unable to paginate: Invalid mid_range value (must be an odd integer >= 1)");
		if(!is_array($ipp_array)) exit("Unable to paginate: Invalid ipp_array value");
		$this->ipp_array = $ipp_array;
		$this->items_per_page = (isset($_GET["ipp"])) ? $_GET["ipp"] : $this->ipp_array[0];
		$this->default_ipp = $this->ipp_array[0];
		if($this->items_per_page == "All") {
			$this->num_pages = 1;
		} else {
			if(!is_numeric($this->items_per_page) OR $this->items_per_page <= 0) $this->items_per_page = $this->ipp_array[0];
			$this->num_pages = ceil($this->total_items/$this->items_per_page);
		}
		$this->current_page = (isset($_GET["page"])) ? (int) $_GET["page"] : 1 ; // must be numeric > 0
		if($_GET) {
			$args = explode("&",$_SERVER["QUERY_STRING"]);
			foreach($args as $arg) {
				$keyval = explode("=",$arg);
				if($keyval[0] != "page" And $keyval[0] != "ipp") $this->querystring .= "&" . $arg;
			}
		}
		if(isset($_POST)) {
			foreach($_POST as $key=>$val) {
				if($key != "page" And $key != "ipp") $this->querystring .= "&$key=$val";
			}
		}
		if($this->num_pages > 10) {
			$this->return = ($this->current_page > 1 And $this->total_items >= 10) ? "<a rel=\"nofollow\" class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=".($this->current_page-1)."&ipp=$this->items_per_page$this->querystring\">Previous</a> ":"<span class=\"inactive\" href=\"#\">Previous</span> ";
			$this->start_range = $this->current_page - floor($this->mid_range/2);
			$this->end_range = $this->current_page + floor($this->mid_range/2);
			if($this->start_range <= 0) {
				$this->end_range += abs($this->start_range)+1;
				$this->start_range = 1;
			}
			if($this->end_range > $this->num_pages) {
				$this->start_range -= $this->end_range-$this->num_pages;
				$this->end_range = $this->num_pages;
			}
			$this->range = range($this->start_range,$this->end_range);
			for($i=1;$i<=$this->num_pages;$i++) {
				if($this->range[0] > 2 And $i == $this->range[0]) $this->return .= " ... ";
				// loop through all pages. if first, last, or in range, display
				if($i==1 Or $i==$this->num_pages Or in_array($i,$this->range)) $this->return .= ($i == $this->current_page And $this->items_per_page != "All") ? "<a title=\"Go to page $i of $this->num_pages\" class=\"current\" href=\"#\">$i</a> \n":"<a class=\"paginate\" title=\"Go to page $i of $this->num_pages\" href=\"$_SERVER[PHP_SELF]?page=$i&ipp=$this->items_per_page$this->querystring\">$i</a> \n";
				if($this->range[$this->mid_range-1] < $this->num_pages-1 And $i == $this->range[$this->mid_range-1]) $this->return .= " ... ";
			}
			$this->return .= (($this->current_page < $this->num_pages And $this->total_items >= 10) And ($this->items_per_page != "All") And $this->current_page > 0) ? "<a class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=".($this->current_page+1)."&ipp=$this->items_per_page$this->querystring\">Next</a>\n":"<span class=\"inactive\" href=\"#\">Next</span>\n";
			$this->return .= ($this->items_per_page == "All") ? "<a rel=\"nofollow\" class=\"current\" style=\"margin-left:10px\" href=\"#\">All</a> \n":"<a class=\"paginate\" style=\"margin-left:10px\" href=\"$_SERVER[PHP_SELF]?page=1&ipp=All$this->querystring\">All</a> \n";
		} else	{
			for($i=1;$i<=$this->num_pages;$i++) {
				$this->return .= ($i == $this->current_page) ? "<a rel=\"nofollow\" class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=$i&ipp=$this->items_per_page$this->querystring\">$i</a> ";
			}
			$this->return .= "<a rel=\"nofollow\" class=\"paginate\" href=\"$_SERVER[PHP_SELF]?page=1&ipp=All$this->querystring\">All</a> \n";
		}
		$this->return = str_replace("&","&amp;",$this->return);
		$this->limit_start = ($this->current_page <= 0) ? 0:($this->current_page-1) * $this->items_per_page;
		if($this->current_page <= 0) $this->items_per_page = 0;
		$this->limit_end = ($this->items_per_page == "All") ? (int) $this->total_items: (int) $this->items_per_page;
	}
	public function display_items_per_page() {
		$items = NULL;
		natsort($this->ipp_array); // This sorts the drop down menu options array in numeric order (with 'all' last after the default value is picked up from the first slot
		foreach($this->ipp_array as $ipp_opt) $items .= ($ipp_opt == $this->items_per_page) ? "<option selected value=\"$ipp_opt\">$ipp_opt</option>\n":"<option value=\"$ipp_opt\">$ipp_opt</option>\n";
		return "<span class=\"paginate\">Items per page:</span><select class=\"paginate\" onchange=\"window.location='$_SERVER[PHP_SELF]?page=1&amp;ipp='+this[this.selectedIndex].value+'$this->querystring';return false\">$items</select>\n";
	}
	public function display_jump_menu() {
		$option=NULL;
		for($i=1;$i<=$this->num_pages;$i++) {
			$option .= ($i==$this->current_page) ? "<option value=\"$i\" selected>$i</option>\n":"<option value=\"$i\">$i</option>\n";
		}
		return "<span class=\"paginate\">Page:</span><select class=\"paginate\" onchange=\"window.location='$_SERVER[PHP_SELF]?page='+this[this.selectedIndex].value+'&amp;ipp=$this->items_per_page$this->querystring';return false\">$option</select>\n";
	}
	public function display_pages() {
		return $this->return;
	}
}