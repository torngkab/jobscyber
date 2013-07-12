<?session_start();?>
<?
header("Content-type: image/jpeg");
include ("Allfunction.inc"); 
$SQL = "Select *  FROM  employee_resume_th  WHERE  idresume ='".$_GET['idresume']."'";
mysql_connect($host,$user,$password);
$result= mysql_db_query($databasename,$SQL);

//echo $_GET['idresume'];

/*
$result = mysql_fetch_assoc($result);
$result = $result['imageemployee'];
//echo $result;
*/

$row=mysql_fetch_array($result);
$MMB = $row['imageemployee'];

if  ($MMB == "")   {
    echo "<center><font face=microsoft sans serif size=+2 color=blue>ไม่มีรูปภาพครับ</font></center>";
                           }
else  {  
	//echo $MMB;
	echo base64_decode($MMB);
	
}
?>												    
