<? session_start(); ?>
<? include ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<script language=javascript src=Foption.js>
</script>
<? include("functions/show_user.php"); ?>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body onload="Javascrpit: Check();">

<?  echo gheader(th,0,F);  ?>
<? echo "<div id=submenu><a href='employee_resume_view.php'>ประวัติการส่ง Resume เข้าสู่บริษัท</a>|<a href='employee_interview_view.php'>ประวัติการเรียกนัดสัมภาษณ์ จาก บริษัท</a> | <a href='employee_check_status.php'>สถานะการเปิดอ่านจากบริษัท</a></div>"; ?>

<br>
<div align=center>

                              <TABLE>
                                <TR>
                                <TD><a href="employee_post_resume_th.php"><img src="images/image1rb.png" border="0"></a></TD>
                                <TD width="20"></TD>
                                <TD><a href="employee_process_current.php"><img src="images/image2rb.png" border="0"></a></TD>
                                <TD width="20"></TD>
                                <!--<TD><a href="employee_resume_view.php"><img src="images/image3.png" border="0"></a></TD>-->
                                </TR>
                             </TABLE>
</div>
<br><br/><br/><br/><br><br/>
<?  echo gfooter();  ?>
</body>
</html>
<?    if   ($_SESSION['alert_a'] == "T")   {
              echo "<script>alert('Login เรียบร้อยแล้วครับ')</script>";
                                                                     }
         $_SESSION['alert_a'] = "F";
?> 
