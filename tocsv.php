<?php
$file_input = fopen('magecsv.csv','r+');
$array = file_get_contents('serialize.txt');
$unserialize = unserialize($array);
foreach ($unserialize as $row) 
{
	fputcsv($file_input, $row);
}

 fclose($file_input);

?>