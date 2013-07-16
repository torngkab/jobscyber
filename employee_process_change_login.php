<?session_start();?>
<?
 include ("Allfunction.inc"); 
$OLD_employee_login = "Nodata";
$OLD_employee_password =  "Nodata";
$NEW_employee_login = "Nodata";
$NEW_employee_password =  "Nodata";

$_SESSION['qqoldusername'] = $_POST['qqoldusername'];
$_SESSION['qqoldpassword'] = $_POST['qqoldpassword'];
$_SESSION['qqnewusername'] = $_POST['qqnewusername'];
$_SESSION['qqnewpassword'] = $_POST['qqnewpassword'];
$_SESSION['qqrepassword'] = $_POST['qqrepassword'];

$SQL = "select *  from  employee_resume_th  where userloginname='$_POST[qqoldusername]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result))   {        //   start while 1
          $OLD_employee_login = $row['idresume'];
                                                                          }       //    end while 1

$SQL2 = "select *  from  employee_resume_th  where  userpassword ='$_POST[qqoldpassword]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result2= mysql_query($SQL2);
while ($rowz=mysql_fetch_array($result2)) {
          $OLD_employee_password = $rowz['idresume'];
                                                                       }
$SQL3 = "select *  from  employee_resume_th  where  userloginname ='$_POST[qqnewusername]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result3= mysql_query($SQL3);
while ($rowd=mysql_fetch_array($result3)) {
          $NEW_employee_password = $rowd['idresume'];
                                                                       }
$SQL4 = "select *  from  employee_resume_th  where  userpassword ='$_POST[qqnewpassword]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result4= mysql_query($SQL4);
while ($rowt=mysql_fetch_array($result4)) {
          $NEW_employee_password = $rowt['idresume'];
                                                                       }

if   ($OLD_employee_login == "Nodata")                    {
      echo "<meta http-equiv=refresh content='0.1;url=employee_edit_login.php?alert=1'>";
                                                                                         }
else if  ($OLD_employee_password == "Nodata")    {
      echo "<meta http-equiv=refresh content='0.1;url=employee_edit_login.php?alert=2'>";
                                                                                         }
else if  ($_POST['qqnewusername'] == "")             {
      echo "<meta http-equiv=refresh content='0.1;url=employee_edit_login.php?alert=3'>";
                                                                                         }
else if  ($_POST['qqnewpassword'] == "")    {
      echo "<meta http-equiv=refresh content='0.1;url=employee_edit_login.php?alert=4'>";
                                                                                         }
else if  ($_POST['qqnewpassword'] != $_POST['qqrepassword'])    {
      echo "<meta http-equiv=refresh content='0.1;url=employee_edit_login.php?alert=5'>";
                                                                                         }
else   { 

$SQL5 = "update employee_resume_th set userloginname = '$_POST[qqnewusername]',userpassword = '$_POST[qqnewpassword]' where idresume = '$OLD_employee_login'"; 
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result5= mysql_query($SQL5);
echo "<meta http-equiv=refresh content='0.1;url=employee_edit_login.php?alert=6'>"; 
          } 

?>