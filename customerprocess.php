<?
session_start();
//$_SESSION[logid] = $_POST["ggloginname"];
include("Allfunction.inc");
$_SESSION['idcompanyvalue'] = "";
$_SESSION['bufferlogin'] = "";
$_SESSION['bufferpassword'] = "";
$_SESSION[companyname]= "";
$_SESSION[address] = "";
$_SESSION[moo] =  "";
$_SESSION[soi] = "";
$_SESSION[street] = "";
$_SESSION[tambon] = ""; 
$_SESSION[umphur] = "";
$_SESSION[province] = ""; 
$_SESSION[postcode] = ""; 
$_SESSION[telephone] = ""; 
$_SESSION[fax] = ""; 
$_SESSION[email] = "";
$_SESSION[website] = ""; 
$_SESSION[jobpromotion] = "";
$_SESSION[description] = "";
$_SESSION[contactname] = "";
$_SESSION[howtoapply] = ""; 
$_SESSION[companyname_EN] =  "";
$_SESSION[address_EN] = "";
$_SESSION[moo_EN] = "";
$_SESSION[soi_EN] = "";
$_SESSION[street_EN] = "";
$_SESSION[tambon_EN] = "";
$_SESSION[umphur_EN] = "";
$_SESSION[province_EN] = "";
$_SESSION[profile_EN] = "";
$_SESSION[contactname_EN] = "";
$Xidcompany = "";
$SQL3 = "Select *  FROM  customerbuffer  WHERE username ='$_POST[ggloginname]' and password ='$_POST[ggpassword]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result= mysql_query($SQL3);
while ($row=mysql_fetch_array($result)) {   //  start  while 1
          $_SESSION['idcompanyvalue'] = $row['idcompany'];
		  $_SESSION['companyname'] = $row['companyname'];
          $Xidcompany = $row['idcompany'];
          $Xjobpromotion = $row['jobpromotion'];
                                                                       }  //  end while 1
$timemax = 0;
$SQL5 = "Select *  FROM  dateappear  WHERE idcompany ='$Xidcompany'";
$result5= mysql_query($SQL5);
while ($rowxx=mysql_fetch_array($result5))            {   //  start  while 2
          if  ($timemax < $rowxx['showdate'])        {
               $timemax = $rowxx['showdate'];
                                                                               }
                                                                                        }  //  end  while 2
                                                                                        
$SQL8 = "Select *  FROM  product  WHERE idproduct ='$Xjobpromotion'";
$result8= mysql_query($SQL8);
while ($rowsd=mysql_fetch_array($result8))            {   //  start  while 3
         $_SESSION['promotion'] = $rowsd['totalresume'];
                                                                       }  //  end  while 3
                                                                                     

$year1=date("Y");
$month1=date("m");
$day1=date("d");
// $year2=substr(strval($timemax),0,4);
// $month2=substr(strval($timemax),4,2);
// $day2=substr(strval($timemax),6,2);
$encodetoday=(($year1+543)*10000) + ($month1*100) + $day1;


if    ($Xidcompany == "")     {
             $_SESSION['alert_e'] = 1;
             echo "<meta http-equiv=refresh content='0.1;url=customer.php'>";
                                               }	
else if  ($encodetoday > $timemax)   {
//             $_SESSION['statuswebsite'] = "open_program_jobitcity";
//             $_SESSION['bufferlogin'] = $_POST[ggloginname];
//             $_SESSION['bufferpassword'] = $_POST[ggpassword];
             $_SESSION['alert_e'] = 2;
             echo "<meta http-equiv=refresh content='0.1;url=customer.php'>";
                                                                              }
else   {
             $_SESSION['statuswebsite'] = "open_program_jobitcity";
             $_SESSION['bufferlogin'] = $_POST[ggloginname];
             $_SESSION['bufferpassword'] = $_POST[ggpassword];
             echo "<meta http-equiv=refresh content='0.1;url=customer_menu.php'>";
          }

?>