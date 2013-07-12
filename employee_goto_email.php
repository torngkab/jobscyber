<? include("Allfunction.inc");
$k="";
$g="";
for ($i=1;$i<=12;$i++)  {
       $k = $k.chr(rand(97,122));
                                       }
for ($j=1;$j<=12;$j++)  {
       $g = $g.chr(rand(97,122));
                                       }

$var_email=$_POST['yourmail'];
$var_pincode=$_POST['pincode'];
$_SESSION['yourmail']=$_POST['yourmail'];
												    
$have_pincode = "";
$SQL2 = "Select *  FROM  imagecode  WHERE  imagename ='$var_pincode'";
mysql_connect($host,$user,$password);
$result2= mysql_db_query($databasename,$SQL2);
while ($row2=mysql_fetch_array($result2)) {
          $have_pincode = $row2['code'];
                                                                    }

?>

<?                                                                                        
if   ($var_pincode == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=employee_new_register.php?returnresult=1">    
<?                                            }    
else if   ($have_pincode == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=employee_new_register.php?returnresult=2">
<?                                                                 } 
else if   ($var_email == "")    {     ?>
     <meta http-equiv=refresh content="0.1;url=employee_new_register.php?returnresult=3">
<?                                                                 } 
else    {
$header = "From:support@jobitcity.com\n";
$to = $var_email;
$subject = "ส่งรหัสผ่านมาให้ครับ";
$message = "username :".$k." "."password :".$g;
mail($to,$subject,$message,$header); 
           }
?>
<meta http-equiv=refresh content="0.1;url=employee_process_register_mail.php?xxlogin=<?=$k; ?>&xxpassword=<?=$g;  ?>">