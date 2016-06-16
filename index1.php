<?php
class PostOffice{
	function mailFiler(){
		$f = fopen("string.txt", "r");
		echo fread($f, filesize("string.txt"));

	}

	function mailRegex(){
		$f = fopen("string.txt", "r");
		$fr = fread($f, filesize("string.txt"));
		$c = preg_replace("/[A-Za-z0-9]/", "", 	$fr);
		echo $c;
	}

	function spiltroad(){
		$f = fopen("road.txt", "r");
		$fr = fread($f, filesize("road.txt"));

		$str = explode(" ", $fr);	
		for($a=1;$a<12;$a+=2){
			echo $str[$a];
			echo "<br/>";
		}
		}
	}



$nf = new PostOffice();
$nf->mailFiler();
echo "<br/>";
$nf->mailRegex();
echo "<br/>";
$nf->spiltroad();



?>