<?
session_start();
include('define.php');
echo $_POST['idrs'];
?>
<?php
//session_start();
//connect to database. Username and password need to be changed 
mysql_connect($host,$user,$password); 

//Select database, database_name needs to be changed 
mysql_select_db($databasename); 

if (!$_POST['uploaded']){ 
//If nothing has been uploaded display the form 
?> 

<?/*
<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post"  
ENCTYPE="multipart/form-data"> 
</form>
*/?> 

<? 
}else{ 
//if the form hasn't been submitted then: 

//from here onwards, we are copying the file to the directory you made earlier, so it can then be moved  
//into the database. The image is named after the persons IP address until it gets moved into the database 

//get users IP 
$ip=$REMOTE_ADDR; 

//don't continue if an image hasn't been uploaded 
if ($_FILES["image"]["tmp_name"]!=null){ 

//copy the image to directory 
chmod($_FILES["image"]["tmp_name"], 777);
copy($_FILES["image"]["tmp_name"],"temporary/".$_FILES["image"]["name"]); 

//open the copied image, ready to encode into text to go into the database 
$filename1 = "temporary/".$_FILES["image"]["name"];
$fp1 = fopen($filename1, "r"); 

//record the image contents into a variable 
$contents1 = fread($fp1, filesize($filename1)); 

//close the file 
fclose($fp1); 

//encode the image into text 
$encoded = chunk_split(base64_encode($contents1));  

$result=mysql_query("SELECT * FROM emp_img WHERE idresume='".$_POST['idrs']."'"); 
$count=mysql_num_rows($result); 

//insert information into the database 
if($count=="0"){
mysql_query("INSERT INTO emp_img (img,data,idresume)"."VALUES ('NULL', '$encoded', '$_POST[idrs]')");
}else{
mysql_query("UPDATE emp_img SET data = '$encoded' WHERE idresume = '$_POST[idrs]'");
}

//delete the temporary file we made 
unlink($filename1); 
} 

//echo "<meta http-equiv=refresh content='0.1;url=image.php?idresume=$_POST[idrs]'>";
echo "<meta http-equiv=refresh content='0.1;url=../employee_post_resume_th.php'>";
//end 
} 
?>