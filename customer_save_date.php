<?session_start();?>
<? include ("Allfunction.inc");
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$datedate=((intval($_POST[callyear]))*10000) + intval($_POST[callmonth])*100 + intval($_POST[calldate]);
$timetime = strval($_POST[callhour]).":".strval($_POST[callminute]);
$bbx= explode(":",$_POST[position]);
$bbt = eregi_replace("&nbsp"," ",$bbx[0]);
$checkagain = "NO NO NO";
$CSQL = "Select *  FROM  customer_check_see_interview where idcompany = '$_SESSION[idcompanyvalue]' and idemployee = '$_SESSION[g_resumeindex]' and position = '$bbt'";
$resultC= mysql_query($CSQL);
while ($rowc=mysql_fetch_array($resultC))    {      //   start while C 
         $checkagain = $rowc['senddate'];
                                                              }      //   end while C 

$d = date('d');
$m = date('m');
$y = date('Y')+543;
$now = $y.$m.$d;                  
//echo $datedate;
//echo $now;
		
if   ($checkagain == "NO NO NO" and $_SESSION[idcompanyvalue] != "" and $_SESSION[g_resumeindex] != "" and $bbt != "")  {
      if($datedate<$now=='true'){
		$_SESSION['alert_xb'] = 3;
		echo "<script>window.history.back(-1);</script>";
	  }else{
	  $SQL = "insert  into  customer_check_see_interview(senddate,sendtime,position,salary,idcompany,idemployee) values('$datedate','$timetime','$bbt','$bbx[1]','$_SESSION[idcompanyvalue]','$_SESSION[g_resumeindex]')";
      $result= mysql_query($SQL);
      $_SESSION['alert_xb'] = 1;
?>
	  <meta http-equiv=refresh content='0.1;url=customer_search_resume_result.php?key=F&gdepartment=<?=$_SESSION[zdepartment];  ?>&gender=<?=$_SESSION[zgender];  ?>&degree=<?=$_SESSION[zdegree];  ?>&province=<?=$_SESSION[zprovince];  ?>&reversename=<?=$_SESSION[nicksend];  ?>&searchname=<?=$_SESSION[zsearchname];  ?>&sendpage=<?=$_SESSION[zsendpage];  ?>'>";
<?
	  }
                                 }
else  {   $_SESSION['alert_xb'] = 2;  }                                 

?>




