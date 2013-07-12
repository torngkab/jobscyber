<?session_start();?>
<? include ("Allfunction.inc");  ?>
<?$_SESSION['resumeindex']=""?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<script language=javascript src=Foption.js>
</script>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<? $_SESSION['idcompanyvalue'] = "";  
      echo gheader(th,0,F);
?>
<br>
<div align=center><br />
  <table width="290" height=140 border="0" cellpadding="0" cellspacing="1" bgcolor=#FFCC33>
  <tr>
  <td>
  <table  border="0" cellpadding="0" cellspacing="0" >
    <tr><form   method="post" action="customerprocess.php">
      <td width="100" class="PD4">&nbsp;&nbsp;&nbsp;Username</td>
      <td width="9">&nbsp;</td>
      <td width="144"><input name="ggloginname" type="text" value=<?=$_SESSION['bufferlogin'];?>></td>
    </tr>
    <tr>
      <td class="PD4">&nbsp;&nbsp;&nbsp;Password</td>
      <td>&nbsp;</td>
      <td><input name="ggpassword" type="password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <div align="left"><a href="customerforgetcode.php" class="PD4">ลืมรหัสผ่าน</a><br />
          <br />
          <input name="submit" type="submit" class="PD3"  value="ตกลง" />
          <input name="cancel" type="reset" class="PD3"  value="ยกเลิก" />
          </div></td></form>
    </tr>
  </table>
  </td>
  </tr>
  </table><br />
</div>
										    
<br>
<br>
<br>
<br>
<br>
<br>
<br>    
<? echo gfooter();  ?>
<? 
     if  ($_SESSION['alert_e'] == 1)  {  echo "<script>alert('ใส่ username หรือ password ผิด')</script>"; $_SESSION['alert_e'] = 0; } 
     else if  ($_SESSION['alert_e'] == 2)  {  echo "<script>alert('ได้หมดเวลาลงโฆษณาเรียบร้อยแล้วครับ')</script>"; $_SESSION['alert_e'] = 0; }


	 
?>
</body>
</html>