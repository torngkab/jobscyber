<?session_start();?>
<?  include ("Allfunction.inc");  ?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >

<?  
$_SESSION['Xjobname'] = $_POST['jobname'];
$_SESSION['Xqualification'] = $_POST['qualification'];
$_SESSION['Xjobdepartment'] =  $_POST['iddepartment'];
$_SESSION['Xyearexp'] =  $_POST['yearexp'];
$_SESSION['Xjobdescription'] = $_POST['jobdescription'];
$_SESSION['Xlocationofwork'] = $_POST['locationofwork'];
$_SESSION['Xnumberofposition'] = $_POST['numberofposition']; 
$_SESSION['Xsalary'] = $_POST['salary']; 
$_SESSION['Xbenefit'] = $_POST['benefit']; 
$_SESSION['Xjobname_en']=$_POST['jobname_en'];
$_SESSION['Xqualification_en'] = $_POST['qualification_en'];
$_SESSION['Xjobdescription_en'] = $_POST['jobdescription_en'];
$_SESSION['Xlocationofwork_en'] = $_POST['locationofwork_en'];
$_SESSION['Xbenefit_en'] = $_POST['benefit_en']; 

mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");

$GSQL = "select * from  joblist  where  idcustomer ='$buffer_idcus'";
$YSQL = "select * from  customer  where  idcompany ='$buffer_idcus'";
$result = mysql_db_query($databasename,$GSQL);
$result2 = mysql_db_query($databasename,$YSQL);
$maxposition = mysql_num_rows($result);
while ($row=mysql_fetch_array($result2))         {
           $Xjobpromotion = $row['jobpromotion'];
                                                                                 }  
$KSQL = "select * from  product  where  idproduct ='$Xjobpromotion'";
$result3 = mysql_db_query($databasename,$KSQL);
while ($rowy=mysql_fetch_array($result3))         {
           $Xposition = $rowy['position'];
                                                                                   }


      if  ($_POST['jobname'] == "")   {     //   start  if 
                  $_SESSION['returncheckbutton'] = "T";        
	$_SESSION['returncomment'] = 1;
           echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                           }   
      elseif  ($_POST['qualification'] == "")   {
                  $_SESSION['returncheckbutton'] = "T";  
	$_SESSION['returncomment'] = 2;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                        }
      elseif  ($_POST['jobdescription'] == "")    {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 4;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                            }
      elseif  ($_POST['locationofwork'] == "")    {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 5;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                             }
      elseif  ($_POST['numberofposition'] == "")    {
                  $_SESSION['returncheckbutton'] = "T";
   	$_SESSION['returncomment'] = 6;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                                   }
      elseif  ($_POST['benefit'] == "")   {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 8;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                               }
      elseif  ($_POST['jobname_en'] == "")   {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 11;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                        }   
      elseif  ($_POST['qualification_en'] == "")   {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 12;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                              }
      elseif  ($_POST['jobtype_en'] == "0")   {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 13;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                        }															  
      elseif  ($_POST['jobdescription_en'] == "")    {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 14;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                                  }
      elseif  ($_POST['locationofwork_en'] == "")    {
                  $_SESSION['returncheckbutton'] = "T";
	$_SESSION['returncomment'] = 15;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
                                                                                    }
      elseif  ($_POST['benefit_en'] == "")   {
                  $_SESSION['returncheckbutton'] = "T";
                  $_SESSION['returncomment'] = 18;
                  echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
		                                  }
      else    {     //  start else      

$_SESSION['returncheckbutton'] = "F";
if  ($_POST['cgicommand']=="insertmode")         {
     $SQL = "insert  into  joblist(yearexp,idcustomer,jobname,jobdepartment,jobdescription,qualification,locationofwork,numberofposition,salary,benefit,jobname_en,qualification_en,jobdescription_en,locationofwork_en,benefit_en) values('$Xyearexp','$_SESSION[idcompanyvalue]','$Xjobname','$Xjobdepartment','$Xjobdescription','$Xqualification','$Xlocationofwork','$Xnumberofposition','$Xsalary','$Xbenefit','$Xjobname_en','$Xqualification_en','$Xjobdescription_en','$Xlocationofwork_en','$Xbenefit_en')";
     $SQL2 = "insert  into  jobother(yearexp,idcustomer,jobname,jobdepartment,jobdescription,qualification,locationofwork,numberofposition,salary,benefit,jobname_en,qualification_en,jobdescription_en,locationofwork_en,benefit_en) values('$Xyearexp','$_SESSION[idcompanyvalue]','$Xjobname','$Xjobdepartment','$Xjobdescription','$Xqualification','$Xlocationofwork','$Xnumberofposition','$Xsalary','$Xbenefit','$Xjobname_en','$Xqualification_en','$Xjobdescription_en','$Xlocationofwork_en','$Xbenefit_en')";	
                                                                                    }

if   ($_POST['cgicommand']=="editmode")     {
             $Xjobindexnumber = $_POST['jobindexnumber'];
             $SQL = "update joblist set jobname = '$Xjobname',qualification = '$Xqualification',jobdepartment = '$Xjobdepartment',yearexp = '$Xyearexp',jobdescription = '$Xjobdescription',locationofwork = '$Xlocationofwork',numberofposition = '$Xnumberofposition',salary = '$Xsalary',benefit = '$Xbenefit',jobname_en = '$Xjobname_en',qualification_en = '$Xqualification_en',jobdescription_en = '$Xjobdescription_en',locationofwork_en = '$Xlocationofwork_en',benefit_en = '$Xbenefit_en' where jobnumber = '$Xjobindexnumber'";
             $SQL2 = "update jobother set jobname = '$Xjobname',qualification = '$Xqualification',jobdepartment = '$Xjobdepartment',yearexp = '$Xyearexp',jobdescription = '$Xjobdescription',locationofwork = '$Xlocationofwork',numberofposition = '$Xnumberofposition',salary = '$Xsalary',benefit = '$Xbenefit',jobname_en = '$Xjobname_en',qualification_en = '$Xqualification_en',jobdescription_en = '$Xjobdescription_en',locationofwork_en = '$Xlocationofwork_en',benefit_en = '$Xbenefit_en' where jobnumber = '$Xjobindexnumber'";
                                                                              }
												
$result= mysql_db_query($databasename,$SQL);
$result2= mysql_db_query($databasename,$SQL2);      
                     }  //  end  else
?>
<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>