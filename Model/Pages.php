<?php
class Pages{
	public static function findStart($limit){
		$start=-1;
		if((!isset($_GET["page"])) || ($_GET["page"]=="1")){
			$_GET['page']=1;
			$start=0;
		}
		else{
			$start = ($_GET["page"]-1)*$limit;
		}
		return $start;
	}
	public static function findPages($countProducts,$limit){
		$page = ($countProducts%$limit==0)? $countProducts/$limit : floor($countProducts/$limit)+1;
		return $page;
	}
	public static function PreNext($currPage,$url,$limitPage){
		$next_prev="";
		if($currPage-1<=0)
			$next_prev.="Preview";
		else
			$next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($currPage-1)."\">Preview</a>";
		$next_prev.="| "."<big>".$currPage."</big>". " |";
		if(($currPage+1)>$limitPage)
			$next_prev.="Next";
		else
			$next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($currPage+1)."\">Next</a>";
		return $next_prev;
	}
}
?>