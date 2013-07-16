<?session_start();?>
<? include_once ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<?include("header_manager.php");?>
<?
	$conn = mysql_connect($host,$user,$password);mysql_select_db($databasename);
	$set_conn = mysql_query("SET NAMES TIS620");
	
	$sql1 = "select * from employee_resume_th order by idresume asc";
	$result1= mysql_query($sql1);
	$count1 = mysql_num_rows($result1);
	
	$sql2 = "select * from employee_resume_en order by idresume asc";
	$result2= mysql_query($sql2);
	$count2 = mysql_num_rows($result2);
?>	
	<table border=1 align='center'>
	<tr>
		<th>จำนวน Resume ไทย</th>
		<th>จำนวน Resume Eng</th>
	</tr>
<?
		echo "<tr>";
		echo "<td align='center'>$count1</td>";
		echo "<td align='center'>$count2</td>";
		echo "</tr>";
?>
</table>
<a href="manager_menu.php">กลับ</a>
</body>
<? echo gfooter();  ?>
</html>