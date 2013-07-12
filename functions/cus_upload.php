<?
//session_start();
include('define.php');
echo $_POST[idrs];
//echo "<br/>$image";
echo "<br/>".$_FILES["image"]["name"];
echo "<br/>".$_FILES["image"]["type"];
echo "<br/>".($_FILES["image"]["size"]/1024);
echo "<br/>".$_FILES["image"]["tmp_name"];
//echo $_POST[uploaded];

//connect to database. Username and password need to be changed 
$con = mysql_connect($host,$user,$password); 

if (!$con){
  die('Could not connect: ' . mysql_error());
} else {
  echo "<br/>CONNECT OK";
}

//Select database, database_name needs to be changed 
mysql_select_db($databasename); 

if (!$_POST[uploaded]){ 
//If nothing has been uploaded display the form
echo "CANNOT UPLOAD"; 
?> 

<?/*
<form action='<? echo $_SERVER['PHP_SELF']; ?>' method='post'  
ENCTYPE='multipart/form-data'> 
</form>
*/?> 

<? 
}else{
/*
	if (file_exists("temporary/" . $_FILES["image"]["name"]))
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["image"]["tmp_name"],"temporary/".$_FILES["temporary"]["name"]);

      echo "Stored in: " . "temporary/" . $_FILES["image"]["name"];
      }
*/
//if the form hasn't been submitted then: 

//from here onwards, we are copying the file to the directory you made earlier, so it can then be moved  
//into the database. The image is named after the persons IP address until it gets moved into the database 

//get users IP 
$ip=$REMOTE_ADDR; 
echo "<br/>UPLOADED OK";

//don't continue if an image hasn't been uploaded 
if ($_FILES["image"]["tmp_name"]!=null){ 
if (!file_exists("upload")) {
  if (mkdir("upload")) {
    echo "<br/>Upload directory created!";
  }
  else {
    die( "<br/>Invalid upload directory!" );
  }
}
//copy the image to directory 
//copy($_FILES["image"]["tmp_name"], "temporary/".$ip); 
//move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);

chmod($_FILES["image"]["tmp_name"], 777);
move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);

//open the copied image, ready to encode into text to go into the database 
$filename1 = "upload/".$_FILES["image"]["name"]; 
chmod($filename1, 0777);
$fp1 = fopen($filename1, "r"); 

//record the image contents into a variable 
$contents1 = fread($fp1, filesize($filename1)); 

//close the file 
fclose($fp1); 

//encode the image into text 
$encoded = chunk_split(base64_encode($contents1));  
echo "<br/>ENCODED OK";

$con = mysql_connect($host,$user,$password); 
mysql_select_db($databasename); 
$result=mysql_query("SELECT * FROM cus_img WHERE idcompany='".$_POST[idrs]."'"); 
$count=mysql_num_rows($result); 

//insert information into the database 
if($count=="0"){
mysql_query("INSERT INTO cus_img (img,data,idcompany)"."VALUES ('NULL', '$encoded', '$_POST[idrs]')");
echo "<br/>INSERT OK";
}else{
mysql_query("UPDATE cus_img SET data = '$encoded' WHERE idcompany = '".$_POST[idrs]."'");
echo "<br/>UPDATE OK";
}

//delete the temporary file we made 
//unlink($filename1); 
} 

//echo "<meta http-equiv=refresh content='0.1;url=image.php?idresume=$_POST[idrs]'>";
echo "<meta http-equiv=refresh content='0.1;url=../customerbuilddata.php'>";
//end 
} 
?>