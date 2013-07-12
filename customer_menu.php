<? session_start(); ?>
<?$_SESSION['image'] = '1';?>
<? include ("Allfunction.inc");  ?>
<?
	$SQL = "Select *  FROM  customer_buffer INNER JOIN product ON customer_buffer.jobpromotion = product.idproduct WHERE  username ='$_SESSION[bufferlogin]'";
	mysql_connect($host,$user,$password);
	mysql_query("SET NAMES TIS620");
	$result= mysql_db_query($databasename,$SQL);
	while ($row=mysql_fetch_array($result)) {
		$promotion = $row['totalresume'];
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>jobscybernet</title>
<link href="style.css" rel="stylesheet" type="text/css" >
<script>
function Check(){
	document.getElementById('showuser').innerHTML = '<?echo $_SESSION['bufferlogin'] . " " ."กำลังใช้งานอยู่ ";?><a href="firstpage.php">ออกจากระบบ</a>';
	document.getElementById("menu").style.marginTop="-1%";
};
</script>
<body onload="Javascrpit: Check();">
<? echo gheader($_GET[lang],$_GET[atpage],$_GET[thisbanner]);  ?>
<? echo "<div id=submenu><a href='customer_resume_view.php'>ประวัติการส่ง Resume ของลูกจ้าง</a>|<a href='customer_interview_view.php'>ประวัตินัดสัมภาษณ์ลูกจ้าง</a> | <a href='customer_check_status.php'>สถานะการเปิดอ่าน</a></div>"; ?>
<br>
<div align="center">
<table border="0">
<tr>
<td><a href="customerbuilddata.php"><img src="images/customer_register.png" border="0"></a>
</td>
<?if ($promotion!='N') {
	echo "<td><a href='customer_search_resume_result.php'><img src='images/customer_search.png' border=0></a></td>";
}
?>
</tr>
</table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> 
<? echo gfooter( );  ?>
                                                  
</body>
</html>
<?  if   ($_SESSION['alert_xa'] == 1)  {  ?>
	      <script>alert("ไม่สามารถค้นหาประวัติได้ เพราะเป็น free promotion หรือหมดเวลา Login แล้วครับ");</script>
<?                                                }
$_SESSION['alert_xa'] = 0;

  ?> 
