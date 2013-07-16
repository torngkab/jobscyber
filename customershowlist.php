<?session_start();?>
<? include("Allfunction.inc");  ?>

<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv=Content-Type content=text/html; charset=windows-874>
<title></title>
<link href=style.css rel=stylesheet type=text/css>
</head>
<body>
<?include("header_manager.php");?>
<br>
<form  action="customershowlist.php"  method="post">
<table  border=0>
<tr>
<td>
<select name="startdate">
<option  value="01">01              
<option  value="02">02
<option  value="03">03
<option  value="04">04
<option  value="05">05
<option  value="06">06
<option  value="07">07
<option  value="08">08
<option  value="09">09
<option  value="10">10
<?  for  ($rr = 1;$rr <=21;$rr++)  {    ?>
<option  value=<?=$rr+10;  ?>><?=$rr+10;  ?>              
<?                                                   }    ?>
</td></select>
<td>
<select name="startmonth">
<option  value="01">01              
<option  value="02">02
<option  value="03">03
<option  value="04">04
<option  value="05">05
<option  value="06">06
<option  value="07">07
<option  value="08">08
<option  value="09">09
<option  value="10">10
<option  value="11">11
<option  value="12">12
</td></select>
<td>
<select name="startyear">
<?  for  ($rr = 1;$rr <=24;$rr++)  {    ?>
<option  value=<?=$rr+2553;  ?>><?=$rr+2553;  ?>              
<?                                                   }    ?>
</td></select>
<td width="45"><center>&nbsp;<font class="PD3">ถึง</font></center></td>
<td>
<select name="enddate">
<option  value="01">01              
<option  value="02">02
<option  value="03">03
<option  value="04">04
<option  value="05">05
<option  value="06">06
<option  value="07">07
<option  value="08">08
<option  value="09">09
<option  value="10">10
<?  for  ($rr = 1;$rr <=21;$rr++)  {    ?>
<option  value=<?=$rr+10;  ?>><?=$rr+10;  ?>              
<?                                                   }    ?>
</td></select>
<td>
<select name="endmonth">
<option  value="01">01              
<option  value="02">02
<option  value="03">03
<option  value="04">04
<option  value="05">05
<option  value="06">06
<option  value="07">07
<option  value="08">08
<option  value="09">09
<option  value="10">10
<option  value="11">11
<option  value="12">12
</td></select>
<td>
<select name="endyear">
<?  for  ($rr = 1;$rr <=24;$rr++)  {    ?>
<option  value=<?=$rr+2553;  ?>><?=$rr+2553;  ?>              
<?                                                   }    ?>
</td></select>
<td>
<select name="status">
<option  value="1">ดูทั้งหมด
<option  value="2">ดูเฉพาะ promotion free
<option  value="3">ดูเฉพาะ promotion เสียเงิน
<option  value="4">ดูรายได้ทั้งหมด
</td></select>
<td>
<input type="submit" name="okbutton"  value="ตกลง">
</td>
</form>
</tr>
</table>


<table border=1 cellspacing=0 >
<tr>
<td border=0 width=50 ><div align=center><font class=pd3>ลำดับ</font></div></td>
<td border=0 width=100 ><div align=center><font class=pd3>รหัสลูกค้า</font></div></td>
<td border=0 width=200 ><div align=center><font class=pd3>ชื่อลูกค้า</font></div></td>
<td border=0 width=80><div align=center><font class=pd3>ราคาที่ซื้อ</font></div></td>
<td border=0 width=40 ><div align=center><font class=pd3>ต้นฉบับ</font></div></td>
<td border=0 width=40 ><div align=center><font class=pd3>สำเนา</font></div></td>
<td border=0 width=100 ><div align=center><font class=pd3>วันที่</font></div></td>
</tr>
<tr>
<?

$countermoney = 0;
$starttime1 = $_POST['startyear'].$_POST['startmonth'].$_POST['startdate'];
$lasttime1 = $_POST['endyear'].$_POST['endmonth'].$_POST['enddate'];
$starttime = intval($starttime1);
$lasttime = intval($lasttime1);

/* if  ($_SESSION['Pvaluemenu'] != 100)   {
        echo "<meta http-equiv=refresh content='0.1;url=result.htm'>";
                                                              }    */
$perpage = 50;
if  ($_POST['sendpage']=="")  {
    $HPG=0;
                                 }
else {  $HPG=$_POST['sendpage'];  }

switch ($_POST['status'])  {
            case 1: $SQL2 = "select *  from  customer order by idcompany asc  limit  $HPG,$perpage"; break;
            case 2: $SQL2 = "select *  from  customer where signuptime between $starttime and $lasttime and jobpromotion = 0 order by idcompany asc  limit  $HPG,$perpage"; break;
            case 3: $SQL2 = "select *  from  customer where signuptime between $starttime and $lasttime and jobpromotion <> 0 order by idcompany asc  limit  $HPG,$perpage"; break;
            case 4: $SQL2 = "select *  from  customer where signuptime between $starttime and $lasttime and jobpromotion <> 0"; break;
            default : $SQL2 = "select *  from  customer order by idcompany asc  limit  $HPG,$perpage"; break;                         
                                              }						   
$SQL1 = "Select *  FROM  customer";

mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result1= mysql_query($SQL1);
$totalrec = mysql_num_rows($result1);
$result2= mysql_query($SQL2);
$BMcount = 1;
while ($row=mysql_fetch_array($result2)) {    ?>
<?  if  ($_POST['status'] == 4)  {  $countermoney = $countermoney + moneyofjobtype($row['jobpromotion']) + ((moneyofjobtype($row['jobpromotion'])*0.07)); }  ?>
<td><div align=right><font class=pd3><?=$BMcount + $HPG  ?>&nbsp;</div></td></font>
<td><font class=pd3>&nbsp;<?=$row['idcompany'];  ?><? $xidcompany = $row['idcompany'];  ?></td></font>
<td><font class=pd3>&nbsp;<?=$row['companyname'];   ?></td></font>
<td><font class=pd3><div align="right">&nbsp; <?=moneyofjobtype($row['jobpromotion']) + (moneyofjobtype($row['jobpromotion'])*0.07);   ?> &nbsp; </div></td></font>
<td><div align=center><a href=customerprintprototypebill.php?idcompanylist=<?=$xidcompany;  ?>><img src=images/point.png border=0></a></div></td>
<td><div align=center><a href=customerprintcopybill.php?idcompanylist=<?=$xidcompany;  ?>><img src=images/point.png border=0></a></div></td>
<td><div align="right"><font class=pd3><?=exchangedate($row['signuptime']);   ?>&nbsp; &nbsp;</font></div></td>
</tr>
<? $BMcount++;  ?>
<?     }     ?>
	
</table>

<?

$bctotalpage = bcdiv($totalrec,$perpage);
if  ($totalrec <= $perpage)  {
    $totalpage = 0;  
                                            }
elseif  (($totalrec % $perpage) != 0)  {											    
             $totalpage = $bctotalpage;
		                                                }
else { $totalpage = $bctotalpage-1;  }											   																   
?>
<form action=customershowlist.php method=post>
<font class=pd3>หน้าที่</font>
<select name=sendpage>
<? for ($i=0;$i<=$totalpage;$i++)    {  ?>
<option value=<?=$i * $perpage;  ?>><?=$i+1 ?></option>
<? } ?>
</select>
<input type=submit name=submit value=ตกลง>
</form><br><br>
<?  if  ($_POST['status'] == 4)  {  ?>
<script>alert('รวมเป็นเงิน '+<?=$countermoney ?>+' บาท')</script>
<?                                                 }  ?>
</body>
<? echo gfooter();  ?>
</html>