<?php

echo "resort.php";

$newArray = file_get_contents('serialize.txt');

$unserialize = unserialize($newArray);


var_dump($unserialize);

?>