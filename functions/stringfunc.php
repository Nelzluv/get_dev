<?php
//function to compare how two string match
function inputMatch($str1, $str2){
	$percent = (1 - levenshtein($str1, $str2)/ max(strlen($str1), strlen($str2))) * 100;
	return 'Percent match: '. $percent."%";
}

?>