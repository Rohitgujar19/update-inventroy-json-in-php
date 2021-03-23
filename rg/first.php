<?php
include'header.php';
$id=$_REQUEST['q'];
$strJsonFileContents=file_get_contents('rohit.json');
$ar1=json_decode($strJsonFileContents,true,);
echo "<pre>";
        print_r($ar1);
   echo "</pre>";
?>