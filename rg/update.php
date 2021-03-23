<?php
include'header.php';
$strJsonFileContents=file_get_contents('rohit.json');
$ar1=json_decode($strJsonFileContents,true,);
$key1=$_REQUEST['q'];
echo $key1;


 if(isset($_REQUEST['btn']))
 	{
 		$key1=$_REQUEST['key'];
 		$title=$_REQUEST['title'];
 		$type=$_REQUEST['type'];
 		$ar1['products'][$key1]['title']=$title;
 		$ar1['products'][$key1]['product_type']=$type;
 		$newJsonString = json_encode($ar1,JSON_PRETTY_PRINT);
            
		file_put_contents('rohit.json',$newJsonString);
		header("location:rohit.php?successa=1");
 		
 	}


		//echo$key2;

		//echo$ar1['products'];
		// foreach($ar1['products'] as $key=>$value)
		// {
			
		// 	echo$key;	//$value['title']="";
		// 		//echo$value['title'];
		// 		//echo"hello";
		// 		//$value['product_type']=$type;
			   
			
		// }

		
	//} 
?>
<div class="col md-6"style="margin-top:200px;margin-left:390px">
<form method="POST">
	<div class="form-group">
		<input type="hidden"name="key"class="form-control"value="<?php echo$key1?>">
	</div>
	<div class="form-group">
		<input type="text"name="title"class="form-control"value="<?php echo$ar1['products'][$key1]['title']?>">
	</div>
	<div class="form-group">
        <input type="text"name="type"class="form-control"value="<?php echo$ar1['products'][$key1]['product_type']?>">
    </div>
    <div class="form-group">
        <input type="submit"name="btn"value="update"class="btn btn-primary form-control"/>
    </div>