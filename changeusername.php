<? include ("Allfunction.inc");  ?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<?
session_start();
if   ($_SESSION['Pvaluemenu'] == 400 and  $hiddenpath == "F14afLpqbcd1AfpP145axQ")   {  //  start
$GMM_manager_oldusername = "Nodata";
$GMM_manager_oldpassword1 = "Nodata";
$GMM_manager_oldpassword2 = "Nodata";
$KKKid = 1;
$SQL = "Select *  FROM  manager  WHERE  kkusername ='$oldusername'"; 
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {
          $GMM_manager_oldusername = $row[kkusername];
                                                                }
												    
$SQL1 = "Select *  FROM  manager  WHERE  kkpassword ='$oldpassword1'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result= mysql_query($SQL1);
while ($row=mysql_fetch_array($result)) {
          $GMM_manager_oldpassword1 = $row[kkusername];
                                                                }

if  ($oldusername == "")   {
     echo "<script>alert('�������� Username'); window.history.go(-1); </script>";
                                         }
elseif  ($GMM_manager_oldusername == "Nodata")   {
     echo "<script>alert('���� Username ���١��ͧ'); window.history.go(-1); </script>";
	                                                                                }
elseif  ($oldpassword1 == "")    {
     echo "<script>alert('�������� Password ���'); window.history.go(-1); </script>";
                                                 }
elseif  ($GMM_manager_oldpassword1 == "Nodata")   {
     echo "<script>alert('���� Password ���١��ͧ'); window.history.go(-1); </script>";
	                                                                                 }
elseif  ($oldpassword2 == "")   {
     echo "<script>alert('�������� Password ��ҵ�Ƿ�� 2'); window.history.go(-1); </script>";
	                                           }
elseif  ($oldpassword1 != $oldpassword2)   {
     echo "<script>alert('���� Password ��ҵ�Ƿ�� 2 ���١��ͧ'); window.history.go(-1); </script>";
	                                                               }
elseif  ($newusername == "")   {
     echo "<script>alert('�������� New username'); window.history.go(-1); </script>";
                                                 }
elseif  ($newpassword == "")    {
     echo "<script>alert('�������� New password'); window.history.go(-1); </script>";
	                                            }
else   {

$SQL2 = "update manager  set kkusername = '$newusername',kkpassword = '$newpassword' where id='$KKKid'"; 
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result2= mysql_query($SQL2);
$_SESSION['Pvaluemenu'] = 0;
echo "<script>alert('����¹ username ��� Password ��������'); </script>";
          }

                                                                                                                                                }    //  end            		                                                          
?>
<meta http-equiv=refresh content='0.1;url=manager.htm'>
