<? session_start(); ?>
<? header("Content-type: image/jpeg"); ?>
<?  include ("Allfunction.inc");  ?>
<?
$var_idcustomer = $_SESSION['idcompanyvalue'];
$SQL2 = "Select *  FROM  customer  WHERE  IDcompany ='$var_idcustomer'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
$result= mysql_query($SQL2);
while ($row=mysql_fetch_array($result)) {
          $MMB = $row[map];
}
echo $MMB;					    
?>

												    