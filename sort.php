<?php



$mage1csv = array_map('str_getcsv', file('mage1.csv'));
$mage2csv = array_map('str_getcsv', file('mage2.csv'));


$final = array();
foreach ($mage1csv as $mage1)
{
	foreach($mage2csv as $mage2)
	{
		if($mage1[1] === $mage2[1])
		{
			$array = array('mage1'=> $mage1[0], 'mage2'=> $mage2[0]);
			array_push($final, $array);
		}
	}
}

//file_put_contents('test3.txt', print_r($final, true), FILE_APPEND);

//Need to serialize array

$serialized_data = serialize($final);
file_put_contents('serialize.txt',$serialized_data);

?>