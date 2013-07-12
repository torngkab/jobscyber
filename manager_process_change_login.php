<?
 include ("Allfunction.inc"); 
$OLD_manager_login = "Nodata";
$OLD_manager_password =  "Nodata";
$NEW_manager_login = "Nodata";
$NEW_manager_password =  "Nodata";

$_SESSION['oldusername'] = $_POST['oldusername'];
$_SESSION['oldpassword'] = $_POST['oldpassword'];
$_SESSION['newusername'] = $_POST['newusername'];
$_SESSION['newpassword'] = $_POST['newpassword'];
$_SESSION['repassword'] = $_POST['repassword'];

$SQL = "Select *  FROM  manager where kkusername='$_POST[oldusername]'";
mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");
$result= mysql_db_query($databasename,$SQL);
while ($row=mysql_fetch_array($result))   {        //   start while 1
          $OLD_manager_login = $row['email'];
                                                                          }       //    end while 1

$SQL2 = "Select *  FROM  manager  WHERE  kkpassword ='$_POST[oldpassword]'";
mysql_connect($host,$user,$password);
$result2= mysql_db_query($databasename,$SQL2);
while ($rowz=mysql_fetch_array($result2)) {
          $OLD_manager_password = $rowz["email"];
                                                                       }
$SQL3 = "Select *  FROM  manager  WHERE  kkusername ='$_POST[newusername]'";
mysql_connect($host,$user,$password);
$result3= mysql_db_query($databasename,$SQL3);
while ($rowd=mysql_fetch_array($result3)) {
          $NEW_manager_password = $rowd["email"];
                                                                       }
$SQL4 = "Select *  FROM  manager  WHERE  kkpassword ='$_POST[newpassword]'";
mysql_connect($host,$user,$password);
$result4= mysql_db_query($databasename,$SQL4);
while ($rowt=mysql_fetch_array($result4)) {
          $NEW_manager_password = $rowt["email"];
                                                                       }

if   ($OLD_manager_login == "Nodata")                    {
      echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php?alert=1'>";
                                                                                         }
else if  ($OLD_manager_password == "Nodata")    {
      echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php?alert=2'>";
                                                                                         }
else if  ($_POST['newusername'] == "")             {
      echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php?alert=3'>";
                                                                                         }
else if  ($_POST['newpassword'] == "")    {
      echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php?alert=4'>";
                                                                                         }
else if  ($_POST['newpassword'] != $_POST['repassword'])    {
      echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php?alert=5'>";
                                                                                         }
else   { 

$SQL5 = "update manager set kkusername = '$_POST[newusername]',kkpassword = '$_POST[newpassword]'"; 
mysql_connect($host,$user,$password);
$result5= mysql_db_query($databasename,$SQL5);
echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php?alert=6'>";

          }



?>