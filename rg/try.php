<?php 
$id=$_REQUEST['q'];
$strJsonFileContents=file_get_contents('rohit.json');
$ar1=json_decode($strJsonFileContents,true,);
			 $arr_index = array();
             echo '<pre>';
			 print_r($ar1);
			 echo '</pre>';
// 
// foreach($ar1['products'] as $key=>$value)
// {
// 	if($key==1)
// 	echo$key;
// }



			 ?>