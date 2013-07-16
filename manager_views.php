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
	$sql1 = "select * from product order by idproduct asc";
	$conn = mysql_connect($host,$user,$password);mysql_select_db($databasename);
	$set_conn = mysql_query("SET NAMES TIS620");
	$result1= mysql_query($sql1);
?>	
	<table border=1 align='center'>
	<tr>
		<th>รหัส</th>
		<th>รายละเอียด</th>
		<th>ระยะเวลา</th>
		<th>ตำแหน่ง</th>
		<th>ราคา</th>
		<th>VAT</th>
		<th>เป็นเงิน</th>
		<th>ค้นประวัติ</th>
	</tr>
<?
	while ($row1=mysql_fetch_array($result1)) {   //  start  while 1
		echo "<tr>";
		echo "<td>$row1[idproduct]</td>";
		echo "<td>$row1[productname]</td>";
		echo "<td align='center'>$row1[timeout]</td>";
		echo "<td align='center'>$row1[position]</td>";
		echo "<td align='center'>$row1[price]</td>";
		$vat = $row1[price]*0.07;
		echo "<td align='center'>$vat</td>";
		$sum = $row1[price]+$vat;
		echo "<td align='center'>$sum</td>";
		if($row1[totalresume]=="T"){$resume = "ไม่จำกัด";}
		else{$resume = "-";}
		echo "<td align='center'>$resume</td>";
		echo "</tr>";
	}
?>
</table>
<a href="manager_menu.php">กลับ</a>
</body>
<? echo gfooter();  ?>
</html>