<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>jobscyber</title>
<link href="style.css" rel="stylesheet" type="text/css" >
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style></head>
<body>

<?
include("Allfunction.inc");
echo gheader(th,0,F);
?>
<br>
<div align=center>
  <br>
  <table width="550" height="170" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td><div align="center">
        <table width="520"  border="0" cellpadding="0" cellspacing="0" bordercolor="#78CE31">
      <tr>
        <form method="post" action="employee_check_new_register.php">
          <td class="PD3"><div align="right">ใส่ new login</div></td>
          <td>&nbsp; &nbsp; &nbsp;</td>
          <td><div align="left"><input name="newlogin" type="text" class="PD3" size="15" value=<?=$_SESSION['newlogin'];  ?>> &nbsp; &nbsp; ใช้ตัวอักษรไม่ต่ำกว่า 8 และไม่เกิน 12</div></td>
         <td width="15">&nbsp;</td>
      </tr>
    <tr>
          <td class="PD3"><div align="right">ใส่ new password</div></td>
          <td>&nbsp; &nbsp; &nbsp;</td>
          <td><div align="left"><input name="newpassword" type="password" class="PD3" size="15"></div></td>
         <td width="15">&nbsp;</td>
      </tr>
          <tr>
            <td><div align="right" class="PD3">ใส่รหัส Password อีกครั้ง</div></td>
        <td>&nbsp; &nbsp; &nbsp;</td>
        <td><div align="left" class="PD8">
          <input name="againpassword" type="password" class="PD3" size="15"></a>
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
 
<?  switch ($_GET['alert'])  {

                 case "1":  {  echo "<script>alert('Login ซ้ำครับ')</script>";
                                    break;
                                 }
                 case "2":  {  echo "<script>alert('ลืมใส่ Login ครับ')</script>";
                                    break;
                                 }
                 case "3":  {  echo "<script>alert('Password ซ้ำครับ')</script>";
                                    break;
                                 }
                 case "4":  {  echo "<script>alert('ลืมใส่ Password ครับ')</script>";
                                    break;
                                 }
                 case "5":  {  echo "<script>alert('กรอก Password ไม่ตรงกัน ครับ')</script>";
                                    break;
                                 }
                 case "6":  {  echo "<script>alert('ลืมใส่ช่อง Password อีกครั้ง ครับ')</script>";
                                    break;
                                 }
                 case "7":  {  echo "<script>alert('login ต่ำกว่า 8 ตัวอักษร ครับ')</script>";
                                    break;
                                 }
                 case "8":  {  echo "<script>alert('login มากกว่า 12 ตัวอักษร ครับ')</script>";
                                    break;
                                 }
                 case "9":  {  echo "<script>alert('Password ต่ำกว่า 8 ตัวอักษร ครับ')</script>";
                                    break;
                                 }
                 case "10":  {  echo "<script>alert('Password มากกว่า 12 ตัวอักษร ครับ')</script>";
                                    break;
                                 }



                                                       }
$_GET['alert'] = "";
?>

</div>
<br>
<br>
    
<? echo gfooter();   ?>
</body>
</html>

