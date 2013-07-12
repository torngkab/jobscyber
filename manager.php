<? include_once ("Allfunction.inc");  ?>
<html>
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
<?include("header_manager.php");?>
<br>
<div align=center>
                     <FORM action=manager_check_login.php method=post>
                        <TABLE cellSpacing=0 cellPadding=0 border=1 bordercolor=black>
                          <TBODY>
                            <TD align=middle bgcolor=yellow><font class=PD3>manager</font>
                            </TD>
                          <TR>
                            <TD align=middle height=10>
                              <TABLE>
                                <TBODY>
                                <TR>
                                <TD width="80"><FONT class=PD3>&nbsp; &nbsp;Username:</FONT></TD>
                                <TD><div align=left><INPUT maxLength="20" size="17" name="Gusername"  value=<?=$_SESSION['rrrusername'];  ?>></div></TD>
                                </TR>
                                <TR>
                                <TD><FONT class=PD3>&nbsp; &nbsp;Password:</FONT></TD>
                                <TD><div align=left><INPUT type="password" maxLength="20" size="17" name="Gpassword"  value=<?=$_SESSION['rrrpassword'];  ?>></div></TD>
                                </TR>
                             </TBODY></TABLE>
                             </TD>
                             </TR>
                             <TR>
                             <TD>
                                <div align=center><input type=submit name=submit value=submit></div>
                             </TD>
                             </TR>
                             </form>
                             </TBODY>
                             </TABLE>
                             </TD>
                             </TBODY>
                             </TABLE>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
    
</body>
<? echo gfooter();  ?>
</html>
<?    switch ($_GET['alert'])   {
                    case  1 : echo  "<script>alert('ใส่รหัส login ผิด');</script>";  break;
                    case  2 : echo  "<script>alert('ใส่รหัส password ผิด');</script>";  break;
                                                  }
?>