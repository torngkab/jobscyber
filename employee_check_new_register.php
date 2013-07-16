<?//session_start();?>
<?
include("Allfunction.inc");
$_SESSION['newlogin'] = $_POST['newlogin'];
$checklogin = "NO_DATA";
$checkpassword = "NO_DATA";
$checkidresume = "NO_DATA";

$year1=date("Y")+543;
$month1=date("m");
$day1=date("d");
$timetoday = ($year1*10000) + ($month1*100) + $day1; 

mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$SQL = "Select *  FROM  employee_resume_th  WHERE  userloginname = '$_POST[newlogin]'";
$result= mysql_query($SQL);
while ($rowx=mysql_fetch_array($result))          {
$checklogin = $rowx['firstname'];
                                                                                  }
$SQL2 = "Select *  FROM  employee_resume_th  WHERE  userpassword = '$_POST[newpassword]'";
$result2= mysql_query($SQL2);
while ($rowc=mysql_fetch_array($result2))          {
$checkpassword = $rowc['firstname'];
                                                                                    }
do {
for($i=1;$i<=26;$i++)  {
     $j = chr(rand(97,122));
     $m = $m.$j;
                                      }
$SQL3 = "Select *  FROM  employee_resume_th  WHERE  idresume = '$m'";
$result3= mysql_query($SQL3);
while ($rowg=mysql_fetch_array($result3))          {
$checkidresume = $rowg['idresume'];
                                                                                    }

}  while ($checkidresume != "NO_DATA");

$_SESSION['newpassword'] = $_POST['newpassword'];
$_SESSION['resumeindex'] = $m;

if  (strlen($_POST[newlogin]) >=1 and strlen($_POST[newlogin]) < 8)  {  
           echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=7'>";
                                                            }
else if  (strlen($_POST[newlogin]) > 12)  {  
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=8'>";
                                                                      }
else if  ($checklogin != "NO_DATA")  {  
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=1'>";
                                                                 }
else if  ($_POST[newlogin] == "")  {  
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=2'>";
                                                           }
else if  (strlen($_POST[newpassword]) >= 1 and strlen($_POST[newpassword]) < 8)  {  
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=9'>";
                                                            }
else if  (strlen($_POST[newpassword]) > 12)  {  
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=10'>";
                                                                               }
else if  ($checkpassword != "NO_DATA")  {
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=3'>";
                                                                         }
else if  ($_POST[newpassword] == "")  {
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=4'>";
                                                                   }
else if  ($_POST[newpassword] != $_POST[againpassword])  {
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=5'>";
                                                                                                           }
else if  ($_POST[againpassword] == "")  {
             echo "<meta http-equiv=refresh content='0.1;url=employee_new_register.php?alert=6'>";
                                                                     }
else  {
             $SQL = "insert  into  employee_resume_th(idresume,userloginname,userpassword,resumesignup,resumeupdate) values('$m','$_POST[newlogin]','$_POST[newpassword]','$timetoday','$timetoday')";
             $SQL2 = "insert  into  employee_resume_en(idresume,resumesignup,resumeupdate) values('$m','$timetoday','$timetoday')";
             $result= mysql_query($SQL);
             $result2= mysql_query($SQL2);
             $_SESSION['codereturn1'] = "T";
			 echo "<script>alert('Login&Password สามารถใช้งานได้แล้วครับ');</script>";
             echo "<meta http-equiv=refresh content='0.1;url=employee_login_page.php'>";
          }   

?>