<?
session_start();
include ("Allfunction.inc"); 
$BBG_manager_login = "Nodata";
$BBG_manager_password =  "Nodata";

$_SESSION['rrrusername'] = $_POST['Gusername'];
$_SESSION['rrrpassword'] = $_POST['Gpassword'];

$SQL = "Select *  FROM  manager where kkusername='$_POST[Gusername]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result))   {        //   start while 1
          $BBG_manager_login = $row['email'];
                                                                          }       //    end while 1

$SQL2 = "Select *  FROM  manager  WHERE  kkpassword ='$_POST[Gpassword]'";
$result2= mysql_query($SQL2);
while ($rowz=mysql_fetch_array($result2)) {     //   start while 2
          $BBG_manager_password = $rowz["email"];
                                                                           }     //   end  while 2
if   ($BBG_manager_login == "Nodata")   {
      echo "<meta http-equiv=refresh content='0.1;url=manager.php?alert=1'>";
                                                                       }
else if   ($BBG_manager_password == "Nodata")   {
      echo "<meta http-equiv=refresh content='0.1;url=manager.php?alert=2'>";
                                                                                          }
echo "<meta http-equiv=refresh content='0.1;url=manager_menu.php'>";
?>