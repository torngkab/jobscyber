<?session_start();?>
<? include ("Allfunction.inc");  ?>
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
<table   border="0"  bordercolor="black">
<tr><form action="manager_process_change_login.php"  method="post">
<td></td><td></td><td><font class="PD3">เปลี่ยนรหัส manager ใหม่</font></td>
</tr>
<tr><td><div align="right"><font class="PD3">username</font></div></td><td width="8">&nbsp;</td><td><input type="text" name="oldusername" value=<?= $_SESSION['oldusername']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">password</font></div></td><td>&nbsp;</td><td><input type="password" name="oldpassword"  value=<?= $_SESSION['oldpassword']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">New username</font></div></td><td>&nbsp;</td><td><input type="text" name="newusername"  value=<?= $_SESSION['newusername']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">New password</font></div></td><td>&nbsp;</td><td><input type="password" name="newpassword"  value=<?= $_SESSION['newpassword']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">Re password</font></div></td><td>&nbsp;</td><td><input type="password" name="repassword"  value=<?= $_SESSION['repassword']; ?>></td></tr>
<tr><td></td><td>&nbsp;</td><td><div align="left"><input type="submit"  value="OK"  name="mbutton"></div></td></tr>
</tr></form>
</table>
</div>
<br>
</body>
<? echo gfooter();  ?>
</html>
<?    switch   ($_GET['alert'])     {
                       case  1 : echo "<script>alert('ใส่ username เก่าผิด')</script>"; $_GET['alert'] = 0; break;
                       case  2 : echo "<script>alert('ใส่ password เก่าผิด')</script>"; $_GET['alert'] = 0; break;
                       case  3 : echo "<script>alert('ไม่ได้ใส่ username ใหม่')</script>"; $_GET['alert'] = 0; break;
                       case  4 : echo "<script>alert('ไม่ได้ใส่ password ใหม่')</script>"; $_GET['alert'] = 0; break;
                       case  5 : echo "<script>alert('ใส่ password ใหม่ ไม่ตรงกับ repassword')</script>"; $_GET['alert'] = 0; break;
                       case  6 : echo "<script>alert('เปลี่ยน username และ password เรียบร้อยแล้วครับ')</script>"; $_GET['alert'] = 0; break;
                                                      }
?> 
