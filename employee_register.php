<?session_start();?>
<?
include ("Allfunction.inc");
mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");
$year1=strval(date("Y"));
$month1=strval(date("m"));
$day1=strval(date("d"));
$buffertoday = ($year1+543).$month1.$day1;
//echo $buffertoday;
$times = date("H:i:s");
//$xtoday = doubleval($buffertoday);
$DSQL = "update employee_resume_th set resumeupdate = '$buffertoday' where idresume =  '$_SESSION[resumeindex]'";
$ISQL = "insert into customer_check_see_resume values('$buffertoday','$times','$_SESSION[resumeindex]','$_GET[jjcustomer]','$_SESSION[jobname]','$_SESSION[salary]')";

     if  ($_SESSION['bufferlogin'] != "")  {
		if($_SESSION['resumeindex'] == ""){
			$_SESSION['alert'] = 3;
			echo "<meta http-equiv=refresh content='0.1;url=jobshowpage.php?alert=1&lang=$_GET[lang]&jjcustomer=$_GET[jjcustomer]&jjobnumber=$_GET[jjobnumber]&atpage=$_GET[atpage]'>";
		}else{
          $resultA= mysql_db_query($databasename,$DSQL);
		  $resultB= mysql_db_query($databasename,$ISQL);
          $_SESSION['alert'] = 1;
          echo "<meta http-equiv=refresh content='0.1;url=jobshowpage.php?alert=1&lang=$_GET[lang]&jjcustomer=$_GET[jjcustomer]&jjobnumber=$_GET[jjobnumber]&atpage=$_GET[atpage]'>";
        }
     }else  {
                 $_SESSION['alert'] = 2;
				 echo "<meta http-equiv=refresh content='0.1;url=jobshowpage.php?alert=2&lang=$_GET[lang]&jjcustomer=$_GET[jjcustomer]&jjobnumber=$_GET[jjobnumber]&atpage=$_GET[atpage]'>";
               }

?>