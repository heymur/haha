<?php
if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {

$kata = file("kata.txt");
$isine = $kata[array_rand($kata)];
$statuse= $isine; 

}

$string = $statuse;
$result = preg_replace("/n/", "", $string);
echo $result;

?>