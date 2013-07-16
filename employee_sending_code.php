<?//session_start();?>
<? include("Allfunction.inc")?>
<?

$var_email=$_POST['yourmail'];
$var_pincode=$_POST['pincode'];
$_SESSION['xxyourmail']=$_POST['yourmail'];
												    
$have_pincode = "";
$SQL2 = "Select *  FROM  imagecode  WHERE  imagename ='$var_pincode'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result2= mysql_query($SQL2);
while ($row2=mysql_fetch_array($result2)) {
          $have_pincode = $row2['code'];
                                                                    }

$SQL4 = "Select *  FROM  employee_resume_th  WHERE  emailaddress ='$var_email'";
$result4= mysql_query($SQL4);
while ($row4=mysql_fetch_array($result4)) {
          $kk_login = $row4['userloginname'];
          $kk_password = $row4['userpassword'];
                                                                          }


?>

<?                                                                                        
if   ($var_pincode == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=employee_forget_code.php?returnresult=2">    
<?                                            }    
else if   ($have_pincode == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=employee_forget_code.php?returnresult=3">
<?                                                                 } 
else if   ($var_email == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=employee_forget_code.php?returnresult=1">
<?                                                                 } 
else    {
$header = "From:support@jobcybernet.com\n";
$to = $var_email;
$subject = "ส่งรหัสผ่านมาให้ครับ";
$message = "username :".$kk_login." "."password :".$kk_password;
mail($to,$subject,$message,$header); 
echo "<meta http-equiv=refresh content=0.1;url=employee_forget_code.php?returnresult=4>";
           }
?>
