<?
include("Allfunction.inc");
$numrandom = rand(1,35);
$showimage = "pixa".$numrandom.".PNG";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style></head>
<body>
<? echo gheader(th,0,F);  ?>
<br>
<div align=center>
  <br>
  <table width="550" height="212" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><div align="center">
        <table width="455"  border="0" cellpadding="0" cellspacing="0" bordercolor="#78CE31">
      <tr>
        <form method="post" action="employee_sending_code.php">
          <td class="PD3"><div align="right">ใส่ email ที่สมัครไว้</div></td>
          <td>&nbsp;</td>
          <td><div align="left">
            <input name="yourmail" type="text" class="PD3" size="38" value=<?=$_SESSION['xxyourmail'];  ?>>
            </div></td>
      </tr>
          <tr>
            <td class="PD3"><div align="right">รหัส PIN CODE </div></td>
        <td width="19">&nbsp;</td>
        <td width="249"><div align="left"><img src=images/<?=$showimage;  ?> &nbsp;  width="240" height="66" border="1" /></div></td>
      </tr>
          <tr>
            <td><div align="right" class="PD3">ใส่รหัส PIN CODE </div></td>
        <td>&nbsp;</td>
        <td valign="middle" ><div align="left" class="PD8">
          <input name="pincode" type="text" class="PD3" size="15" maxlength="8" /> &nbsp; &nbsp; <a href=employee_forget_code.php><font class=PD1>เปลี่ยน PIN CODE</font></a>
          </div></td>
      </tr>
          <tr>
            <td height="10">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          <tr>
            <td height="26">&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="left">
          <input name="sendbt" type="submit" class="PD3" id="sendbt" value="ส่ง" />
          <input name="resetbt" type="reset" class="PD3" id="resetbt" value="ยกเลิก" />
          </div></td></tr></form>
      </tr>
            </table>
      </div></td>
    </tr>
  </table>
  <br />
  <br />
 
<?  switch ($_GET['returnresult'])  {
                 case "1":  {  echo "<script>alert('คุณไม่ได้ใส่ email ครับ')</script>";
                                    break;
                                 }
                 case "2":  {  echo "<script>alert('คุณไม่ได้ใส่ PIN CODE ครับ')</script>";
                                    break;
                                 }
                  case "3":  {  echo "<script>alert('คุณใส่รหัส PIN CODE ผิดครับ')</script>";
                                    break;
                                 }
                 case "4":  {  echo "<script>alert('ได้ส่งรหัสผ่านให้คุณทาง email แล้วครับ')</script>";
                                    break;
                                 }						   
                                                       }
?>

</div>
<br>
<br>
    
<?  echo  gfooter();   ?>
</body>
</html>

