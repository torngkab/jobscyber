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
<br><br>
<div align=center>
<FORM action="manager_process_login.php" method="post">
<TABLE cellSpacing="0" cellPadding="0" border="1" bordercolor="black">
<TR>
<TD bgcolor="yellow" colspan="2" height="25"><center><font class="PD3">Create Customer Login</font></center></TD>
</TR>
<TR>
<TD width=100><div align="right"><FONT class=PD3>Username:</FONT>&nbsp; &nbsp;</div></TD>
<TD width=160><div align="left"><INPUT maxLength=20 size=17 name=managerusername></div></TD>
</TR>
<TR>
<TD><div align="right"><FONT class=PD3>Password:</FONT>&nbsp; &nbsp;</div></TD>
<TD><div align="left"><INPUT  type=password maxLength=20 size=17 name=managerpassword></div></TD>
</TR>
<TR>
<TD><div align='right'><FONT class=PD3>Package:</FONT>&nbsp; &nbsp;</div></TD>
<TD><div align='left'><select name=position>
<?
$SQL = "Select *  FROM  product order by idproduct asc";
mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");
$result= mysql_db_query($databasename,$SQL);
while ($row=mysql_fetch_array($result)) {    ?>
          <option value=<?=$row[idproduct];  ?>><?=$row[productname];  ?></option>
<?                                                                  }    ?>
</select></div>
</TD>
</TR>
<TR><TD colspan="2"><div align="center"><input type=submit name=submit value=submit></div> </TD></TR>
</form>
</TABLE>
</div>
<br>
<br>

<br>
<br>
<br>
<br>
    
<? echo gfooter();  ?>
</body>
</html>
<?  if  ($_SESSION['alert_b'] == 1)   {   echo  "<script>alert('Login ซ้ำ')</script>";   }
      if   ($_SESSION['alert_b'] == 2)   {   echo "<script>alert('Password ซ้า')</script>";   }
      if   ($_SESSION['alert_b'] == 3)   {   echo "<script>alert('บันทึกเรียบร้อยแล้ว')</script>";   }
      $_SESSION['alert_b'] = 0;
?>
