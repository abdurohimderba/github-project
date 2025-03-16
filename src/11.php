<?php
$data = array("apple", "banana", "cherry");
$rand_keys = array_rand($data, 2);
echo $data[$rand_keys[0]] . "\n";
echo $data[$rand_keys[1]] . "\n";
?>