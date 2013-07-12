<?php 
session_start();
header("Content-type: image/jpeg || image/png");
include('define.php');
//connect to database. Username and password need to be changed 
$connection=mysql_connect($host,$user,$password); 

//Select database, database_name needs to be changed 
mysql_select_db($databasename); 

//get decoded image data from database 
$result=mysql_query("SELECT * FROM emp_img WHERE idresume='".$_GET['idresume']."'"); 

//fetch data from database 
$data=mysql_fetch_array($result); 
$encoded=$data['data']; 

//note: "$data['data']" is the row "data" in the table we made. 
//The image ID would be "$data['img']" for example 


//close connection 
mysql_close($connection); 

//decode and echo the image data 
//echo $encoded;
echo base64_decode($encoded); 

//echo "<meta http-equiv=refresh content='0.1;url=../employee_post_resume_th.php'>";
//end 
?>