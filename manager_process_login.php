<?
 include ("Allfunction.inc"); 
$GMM_manager_login = "Nodata";
$GMM_manager_password =  "Nodata";
$SQL = "Select *  FROM  customer where username='$_POST[managerusername]'";
mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");
$result= mysql_db_query($databasename,$SQL);
while ($row=mysql_fetch_array($result))   {        //   start while 1
     $GMM_manager_login = $row['idcompany'];
                                                                          }       //    end while 1

$SQL2 = "Select *  FROM  customer  WHERE  password ='$_POST[managerpassword]'";
$result2= mysql_db_query($databasename,$SQL2);
while ($rowz=mysql_fetch_array($result2)) {
          $GMM_manager_password = $rowz["idcompany"];
                                                                       }

if  ($GMM_manager_login != "Nodata")    {
    $_SESSION['alert_b'] = 1;
    echo "<meta http-equiv=refresh content='0.1;url=manager_create_login_customer.php'>";
                                                             }
else if  ($GMM_manager_password != "Nodata")   {
    $_SESSION['alert_b'] = 2;
    echo "<meta http-equiv=refresh content='0.1;url=manager_create_login_customer.php'>";
                                                             } 
else   {   

$SQL3 = "Select *  FROM  idcustomercount";  
$result3= mysql_db_query($databasename,$SQL3);
while ($row=mysql_fetch_array($result3)) {
          $comcom = $row["idnum"];
                                                                }


$plaza = "0000000" . $comcom;
$pluto = substr($plaza,-7);
$idcustomercode = "THM" . $pluto;
$timetoday = getdate();
$xyear = $timetoday[year]+543;
$xmonth = $timetoday[mon];
$xday = $timetoday[mday];
$thistime = ($xyear*10000)+($xmonth*100)+$xday;
$decodethistime = gregoriantojd($xmonth,$xday,$xyear);
$SQL4 = "insert  into  customer(username,password,idcompany,jobpromotion) values ('$_POST[managerusername]','$_POST[managerpassword]','$idcustomercode','$_POST[position]')";
$result4= mysql_db_query($databasename,$SQL4);
$SQL8 = "insert  into  customerbuffer(username,password,idcompany,jobpromotion) values ('$_POST[managerusername]','$_POST[managerpassword]','$idcustomercode','$_POST[position]')";
$result8= mysql_db_query($databasename,$SQL8);
$multiplytime = 30;

$SQL6 = "Select *  FROM  product  WHERE  idproduct ='$_POST[position]'";
$result6= mysql_db_query($databasename,$SQL6);
while ($rowk=mysql_fetch_array($result6)) {
          $outputtime = $rowk['sumtime'];
                                                                           }

for ($i=1;$i<=$outputtime;$i++)  {  // start for loop
       if   ($i ==1)  {
             $bufferdate = $thistime;
                            }
       else  {
                     $totalnum = $multiplytime * ($i-1);
                     if   ($i == 13)  {
                           $buffernum1 = jdtogregorian($decodethistime + $totalnum+5);
                                             }
                     else  {   $buffernum1 = jdtogregorian($decodethistime + $totalnum);   }
                     $varnum = explode("/",$buffernum1);
                     $newvarmonth = $varnum[0] * 100;
                     $newvaryear = $varnum[2] * 10000;
                     $bufferdate = $newvaryear+$newvarmonth+$varnum[1];
                 }

      $SQL5 = "insert  into  dateappear(idcompany,showdate) values ('$idcustomercode','$bufferdate')";
      $result5= mysql_db_query($databasename,$SQL5);
                                                         }  //  end for loop

$comcom = $comcom + 1;
$SQL5 = "update idcustomercount set idnum = '$comcom'"; 
$result5= mysql_db_query($databasename,$SQL5);
$_SESSION['alert_b'] = 3;
echo "<meta http-equiv=refresh content='0.1;url=manager_create_login_customer.php'>";
           }



?>