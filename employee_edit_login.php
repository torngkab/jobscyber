<?session_start();?>
<? include ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<?
echo gheader(th,0,F);
?>

<div align=center><br>
<table   border="0"  bordercolor="black">
<tr><form action="employee_process_change_login.php"  method="post">
<td></td><td></td><td><font class="PD3">เปลี่ยนรหัสผ่านใหม่</font></td>
</tr>
<?  if  ($_GET['alert'] == 6)  {  $_SESSION['qqoldusername'] = ""; $_SESSION['qqoldpassword'] = ""; $_SESSION['qqnewusername'] = ""; $_SESSION['qqnewpassword'] = ""; $_SESSION['qqrepassword'] = "";  }  ?>
<tr><td><div align="right"><font class="PD3">username</font></div></td><td width="8">&nbsp;</td><td><input type="text" name="qqoldusername" value=<?= $_SESSION['qqoldusername']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">password</font></div></td><td>&nbsp;</td><td><input type="password" name="qqoldpassword"  value=<?= $_SESSION['qqoldpassword']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">New username</font></div></td><td>&nbsp;</td><td><input type="text" name="qqnewusername"  value=<?= $_SESSION['qqnewusername']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">New password</font></div></td><td>&nbsp;</td><td><input type="password" name="qqnewpassword"  value=<?= $_SESSION['qqnewpassword']; ?>></td></tr>
<tr><td><div align="right"><font class="PD3">Re password</font></div></td><td>&nbsp;</td><td><input type="password" name="qqrepassword"  value=<?= $_SESSION['qqrepassword']; ?>></td></tr>
<tr><td></td><td>&nbsp;</td><td><div align="left"><input type="submit"  value="OK"  name="mbutton"></div></td></tr>
</tr></form>
</table>
</div>
<br>
<?  echo  gfooter();   ?>
</body>
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
