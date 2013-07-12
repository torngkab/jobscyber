<? include ("Allfunction.inc");  ?>
<?
session_start();
$Gusr=$_SESSION['bufferlogin'];
$Gpw=$_SESSION['bufferpassword'];

if   ($mapfile!="")   {
     if   (($mapfile_type!="image/gif") and ($mapfile_type!="image/jpeg") and ($mapfile_type!="image/png"))   {
           echo  "<meta http-equiv=refresh content='0.1;url=customerbuilddata.php?returnmap=1'>";
		exit;  
                                                                                                                     }
copy($mapfile,$mapfile_name);
$psize=filesize($mapfile_name);																							  
     if   ($psize>=2048000)   {
          echo  "<meta http-equiv=refresh content='0.1;url=customerbuilddata.php?returnmap=2'>";
		exit;  
                                        }																								  
     
$Data=addslashes(fread(fopen($mapfile_name,"r"),$psize));											  
$SQL="update customer set map='$Data' where username='$Gusr' and password='$Gpw'" ;
mysql_connect($host,$user,$password);
$result= mysql_db_query($databasename,$SQL);
unlink($mapfile_name); 

$SQL2 = "Select *  FROM  customer  WHERE  username ='$Gusr'  and password='$Gpw'";
mysql_connect($host,$user,$password);
$result= mysql_db_query($databasename,$SQL2);
while ($row=mysql_fetch_array($result)) {
          $MMB = $row[map];
                                                                }

		           		}

?>
<meta http-equiv=refresh content='0.1;url=customerbuilddata.php?PKusr=<?=$_SESSION[bufferlogin];  ?>&PKpw=<?=$_SESSION[bufferpassword];  ?>'>
