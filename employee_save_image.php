<?session_start();?>
<? include ("Allfunction.inc");  ?>
<? 
$_GET['resumeindex'] = $_SESSION['resumeindex'];
if   ($uploadimage != "")   {
     if   (($uploadimage_type!="image/gif") and ($uploadimage_type!="image/jpeg") and ($uploadimage_type!="image/png"))   {
	      echo "<meta http-equiv=refresh content='0.1;url=employee_post_resume_th.php'>";
                        $_SESSION['return2alertclip'] = 81;
		 exit;   
                                                         }

//‚§È¥‡°Ë“
copy($uploadimage,$uploadimage_name);
$psize=filesize($uploadimage_name);
$Data=addslashes(fread(fopen($uploadimage_name,"r"),$psize));											  
$SQL="update  employee_resume_th set imageemployee='$Data' where idresume='$_GET[resumeindex]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result= mysql_query($SQL);
unlink($uploadimage_name); 
		    
echo $_GET['resumeindex'];
//echo $Data;			}  
//echo $uploadimage_type;


/* ‚§È¥„À¡Ë
$file = $_FILES['uploadimage']['tmp_name'];
$image = addslashes(file_get_contents($_FILES['uploadimage']['tmp_name']));
$image_name = addslashes($_FILES['uploadimage']['name']);
$image_size = getimagesize($_FILES['uploadimage']['tmp_name']);

$SQL="update  employee_resume_th set imageemployee='$image' where idresume='$_SESSION[resumeindex]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result= mysql_query($SQL);

//echo "<img src=employee_show_image.php?idresume=$_SESSION[resumeindex]>";

*/
echo "<meta http-equiv=refresh content='0.1;url=employee_show_image.php?idresume=$_GET[resumeindex]'>";
}
?>