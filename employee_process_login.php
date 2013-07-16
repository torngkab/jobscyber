<?
session_start();
include("Allfunction.inc");
$_SESSION['bufferlogin'] = $_POST[fixusername];
$check_username = "nodata";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$SQL = "Select *  FROM  employee_resume_th  WHERE  userloginname ='$_POST[fixusername]'  and  userpassword ='$_POST[fixpassword]'";
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {
          $check_username = $row['idresume'];
          $time_resume = $row['resumeupdate'];
          $_SESSION['dcomputerskill'] = $row['computerskill'];
                                                                       }

$year1=date("Y")+543;
$month1=date("m");
$day1=date("d");
$year2=substr(strval($time_resume),0,4);
$month2=substr(strval($time_resume),4,2);
$day2=substr(strval($time_resume),6,2);
$timetoday = gregoriantojd($month1,$day1,$year1);
$timeupdate =  gregoriantojd($month2,$day2,$year2);
$buffertodaydate = ((date('Y')+543)*10000)+(date('m')*100)+date('d');
										    
if  ($check_username == "nodata")  {
     $_SESSION['comment'] = 1;
     echo "<meta http-equiv=refresh content=0.1;url=employee_login_page.php>";
                                                                }
else if  (($timetoday - $timeupdate) > 365)  {
              $_SESSION['comment'] = 2;
              echo "<meta http-equiv=refresh content=0.1;url=employee_login_page.php>";
                                                                           }
else  {   
           $_SESSION[resumeindex] = $check_username;
           $DSQL = "update employee_resume_th set resumeupdate = '$buffertodaydate' where idresume =  '$check_username'";
           $result2= mysql_query($DSQL);
           echo "<meta http-equiv=refresh content=0.1;url=employee_choose_current.php>";
         } 											      
												     												    
?>
