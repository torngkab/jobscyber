<?session_start();?>
<? include ("Allfunction.inc");  ?>
<?
//   if  ($_SESSION['Pvaluemenu'] == 700)   {   ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body onload='Check();'>
<?include("header_manager.php");?>
<br>
<div align=center>

<?
$SQL = "Select *  FROM  dddcounter order by datecount asc";
mysql_connect($host,$user,$password);
$set_conn = mysql_query("SET NAMES TIS620");
$result= mysql_db_query($databasename,$SQL);
$nrow=mysql_num_rows($result);
?>
<select>
<?
while ($row=mysql_fetch_array($result)) {    ?>
          <option><? echo substr($row[datecount],5,2)."-";  echo substr($row[datecount],0,4); ?>&nbsp มีคนเยี่ยมชม &nbsp<?=$row[amount];  ?> &nbsp คน</option>
                                                       <?    }    ?>
</select>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<div align=center>
<table border=0 bgcolor=#FFFFFF cellspacing=0 cellpadding=0>
<tr>
<td>
</td>
<td>
</td>
</table>


    </div>
</body>
<? echo gfooter();  ?>
</html>
<?        /*                                                 } 
else  {  echo "<div align=center>ไม่ได้เข้ารหัสผ่านก่อน</div>";  }    */
?>                          

