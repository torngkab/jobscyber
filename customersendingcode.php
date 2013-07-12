<? include("Allfunction.inc");

$var_email=$_POST['yourmail'];
$var_pincode=$_POST['pincode'];
												    
$SQL = "Select *  FROM  customer  WHERE email ='$var_email'";
mysql_connect($host,$user,$password);
$result= mysql_db_query($databasename,$SQL);
while ($row=mysql_fetch_array($result)) {
          $jobpromotionvalue = $row['jobpromotion'];
          $signuptime = $row['signuptime'];
          $var_username = $row['username'];
          $var_password = $row['password'];						
                                                                 }
$year1=date("Y");
$month1=date("m");
$day1=date("d");
$year2=substr($signuptime,0,4);
$month2=substr($signuptime,5,2);
$day2=substr($signuptime,8,2);
$encodetoday=gregoriantojd($month1,$day1,$year1);
$encodesignupdate=gregoriantojd($month2,$day2,$year2);
//$timepackage=timeofjobtype($jobpromotionvalue);
//echo $timepackage;

$have_email = "bad_email";
$SQL1 = "Select *  FROM  customer  WHERE  email ='$var_email'";
mysql_connect($host,$user,$password);
$result1= mysql_db_query($databasename,$SQL1);
while ($row1=mysql_fetch_array($result1)) {
          $have_email = "have_email";
                                                                    }
												    
$have_pincode = "bad_pincode";
$SQL2 = "Select *  FROM  decoder  WHERE  pincode ='$var_pincode'";
mysql_connect($host,$user,$password);
$result2= mysql_db_query($databasename,$SQL2);
while ($row2=mysql_fetch_array($result2)) {
          $have_pincode = "have_pincode";
                                                                    }
?>

<?                                                                                        
if   ($var_email == "")  {     ?>
     <meta http-equiv=refresh content="0.1;url=customerforgetcode.php?returnresult=1">     
<?                              } 
else if   ($var_pincode == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=customerforgetcode.php?returnresult=2">    
<?                                            }    
else if   ($have_email == "bad_email")    {     ?>
     <meta http-equiv=refresh content="0.1;url=customerforgetcode.php?returnresult=3">
<?                                                           }
/*else if  ($encodetoday-$encodesignupdate > $timepackage)   {    ?>
     <!--<meta http-equiv=refresh content="0.1;url=customerforgetcode.php?returnresult=5">-->
<?                                                                                             }*/     
else if   ($var_pincode == "bad_pincode")    {     ?>
     <meta http-equiv=refresh content="0.1;url=customerforgetcode.php?returnresult=4">
<?                                                                 } 
else    {
$header = "From:support@jobitcity.com";
$to = $var_email;
$subject = "ส่งรหัสผ่านมาให้ครับ";
$message = "username :".$var_username."          "."password :".$var_password;
mail($to,$subject,$message,$header);
echo "<meta http-equiv=refresh content=0.1;url=customerforgetcode.php?returnresult=6>";
           }
?>
