<?session_start();?>
<? include_once ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body onload='Check();'>
<?include("header_manager.php");?>
<div align=center><br>
<form action="manager_process_mainmenu.php"  method="post">
<select  name="gbmenu">
<option value="1">สร้างรหัสผ่านให้ลูกค้า
<option value="2">เรียกดูใบเสร็จรับเงิน
<option value="3">แก้ไขรหัสผ่าน Manager
<option value="6">แสดงสถิติ การเข้าชมเว็บไซด์
<option value="7">แสดงจำนวน resume
<option value="8">เรียกดูตารางสินค้า
<option value="9">เพิ่มสินค้าใหม่
</select> 
<input type="submit" value="เลือก">
</form>
</div>
<br>
</body>
<? echo gfooter();  ?>
</html>
