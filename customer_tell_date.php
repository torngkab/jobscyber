<?session_start();?>
<? include ("Allfunction.inc");  ?>
<?if($_SESSION['alert_xb']==3){echo "<script>alert('ใส่วันที่ต่ำกว่าปัจจุบันครับ');</script>";}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>jobscybernet</title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<? echo gheader($_GET[lang],$_GET[atpage],$_GET[thisbanner]);  ?>
<br>
<div align="center">
<table border="0" background="images/bg0001.png" width="491" height="220">
<tr height="30">
<td rowspan="6" width="30">
</td>
<td>
</td>
<td>
</td>
</tr>

<tr>
<td width="110"><div align="left"><font class="PD1">เลือกตำแหน่ง</font></div>
</td>
<td width="330"><form action="customer_save_date.php" method="post">
<font class="PD1"><div align="left">
<?
$ps1 = $_GET[intposition1].":".$_GET[salary1];
$ps2 = $_GET[intposition2].":".$_GET[salary2];
$ps3 = $_GET[intposition3].":".$_GET[salary3];

?>
<input type="radio"  name="position" value=<?=eregi_replace(" ","&nbsp",$ps1);  ?>><?=$_GET['intposition1'];   ?> &nbsp; เงินเดือนที่ต้องการ &nbsp; <?=$_GET['salary1'];  ?> บาท<br>
<?  if  ($_GET['intposition2'] != "")  {  ?>
<input type="radio"  name="position" value=<?=eregi_replace(" ","&nbsp",$ps2);  ?>><?=$_GET['intposition2'];   ?> &nbsp; เงินเดือนที่ต้องการ &nbsp; <?=$_GET['salary2'];  ?> บาท<br>
<?  }   ?>
<?  if  ($_GET['intposition3'] != "")  {  ?>
<input type="radio"  name="position" value=<?=eregi_replace(" ","&nbsp",$ps3);  ?>><?=$_GET['intposition3'];   ?> &nbsp; เงินเดือนที่ต้องการ &nbsp; <?=$_GET['salary3'];  ?> บาท</div>
<?  }   ?>
</font>  
</td>
</tr>

<tr>
<td><div align="left"><font class="PD1">วันที่นัดสัมภาษณ์</font></div>
</td>
<td>
<font class="PD1">
<div align="left">วันที่ 
<select name="calldate" class="PD3">
<?  for($i=1;$i<=31;$i++)  {  ?>
<option value=<?=$i;  ?>><?=$i;  ?>
<?   }    ?>
</select>
เดือน 
<select name="callmonth" class="PD3">
<?  for($i=1;$i<=12;$i++)  {  ?>
<option value=<?=$i;  ?>><?=$i;  ?>
<?   }    ?>
</select>
ปี 
<select name="callyear" class="PD3">
<?  for($i=1;$i<=20;$i++)  {  ?>
<option value=<?=2555+$i;  ?>><?=2555+$i;  ?>
<?   }    ?>
</select>
</div>
</font>
</td>
</tr>

<tr>
<td><div align="left"><font class="PD1">เวลา</font></div>
</td>
<td>
<div align="left"><select name="callhour" class="PD3">
<option value="01">01
<option value="02">02
<option value="03">03
<option value="04">04
<option value="05">05
<option value="06">06
<option value="07">07
<option value="08">08
<option value="09">09
<?  for($i=10;$i<=24;$i++)  {  ?>
<option value=<?=$i;  ?>><?=$i;  ?>
<?   }    ?>
</select>
<font class="PD1">
นาฬิกา &nbsp;
<select name="callminute" class="PD3">
<option value="0">00
<option value="01">01
<option value="02">02
<option value="03">03
<option value="04">04
<option value="05">05
<option value="06">06
<option value="07">07
<option value="08">08
<option value="09">09
<?  for($i=1;$i<=50;$i++)  {  ?>
<option value=<?=$i+9;  ?>><?=$i+9;  ?>
<?   }    ?>
</select>
นาที</div></font>
</td>
</tr>

<tr>
<td>
</td>
<td><div align="left"><input type="submit" name="gsubmit" value="ส่ง"> &nbsp; <input type="reset" name="greset" value="ยกเลิก"></div>
</td>
</tr>

<tr height="30">
<td>
</td>
<td>
</td>
</tr>
</form>
</table>
</div>
<br>
<br>
<br>
<br>
    
<? echo gfooter( );  ?>
</body>
</html>
