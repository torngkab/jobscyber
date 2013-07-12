<? session_start(); ?>
<? include ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>jobscybernet</title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<script>
function Check(){
	document.getElementById('showuser').innerHTML = '<?echo $_SESSION['bufferlogin'] . " " ."กำลังใช้งานอยู่ ";?><a href="firstpage.php">ออกจากระบบ</a>';
	document.getElementById("menu").style.marginTop="-1%";
};
</script>
<body onload="Javascrpit: Check();">
<? echo gheader($_GET[lang],$_GET[atpage],$_GET[thisbanner]);  ?>
<? echo "<div id=submenu><a href='customer_resume_view.php'>ประวัติการส่ง Resume ของลูกจ้าง</a>|<a href='customer_interview_view.php'>ประวัตินัดสัมภาษณ์ลูกจ้าง</a> | <a href='customer_check_status.php'>สถานะการเปิดอ่าน</a></div>"; ?>
<?
	$conn = mysql_connect($host,$user,$password);
	$db_select = mysql_select_db($databasename, $conn);
	$set_conn = mysql_query("SET NAMES TIS620");
	//$limit = 1;
	//$sql1 = "select * from customer_check_see_resume order by senddate asc limit 0,$limit";
	//$result1= mysql_db_query($databasename,$sql1);
	
	//เลือกข้อมูลมาแสดง
	$strSQL = "select * from customer_check_see_interview INNER JOIN employee_resume_th ON customer_check_see_interview.idemployee = employee_resume_th.idresume WHERE idcompany='$_SESSION[idcompanyvalue]'";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$Num_Rows = mysql_num_rows($objQuery);
	
	//จำนวนแถวต่อหน้า
	$Per_Page = 20;   

	//คำนวณการแบ่งหน้า
	if (!isset($_GET['Page'])) {
		$Page = 1;
	} else {
		$Page = $_GET['Page'];
	}

	$Prev_Page = $Page - 1;
	$Next_Page = $Page + 1;

	$Page_Start = (($Per_Page * $Page) - $Per_Page);
	if ($Num_Rows <= $Per_Page) {
		$Num_Pages = 1;
	} elseif (($Num_Rows % $Per_Page) == 0) {
		$Num_Pages = ($Num_Rows / $Per_Page) ;
	} else {
		$Num_Pages = ($Num_Rows / $Per_Page) + 1;
		$Num_Pages = (int) $Num_Pages;
	}

	//ส่วนที่ 2
	$strSQL .=" order  by senddate desc LIMIT $Page_Start , $Per_Page";
	$objQuery  = mysql_query($strSQL) or trigger_error(mysql_error());;
?>
	<br/>
	<table border=1 align='center' style='border: 0px;'>
	<tr>
		<th>วันที่</th>
		<th>เวลา</th>
		<th>รายชื่อ</th>
		<th>ตำแหน่ง</th>
		<th>&nbsp;&nbsp;เงินเดือนที่ต้องการ&nbsp;&nbsp;</th>
	</tr>
<?
	while($row1=mysql_fetch_array($objQuery)) {   //  start  while 1
		echo "<tr>";
		$d = substr($row1[senddate], -2);
		$m = substr($row1[senddate], -4, 2);
		$y = substr($row1[senddate], 0, -4);
		$date = $y."/".$m."/".$d;
		$daterv = $d."/".$m."/".$y;
		if($row1[gender]==1){$gen="นาย";}
		elseif($row1[gender]==2){$gen="นางสาว";}
		else{$gen="นาง";}
		echo "<td>&nbsp;&nbsp;$daterv&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;$row1[sendtime]&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;$gen$row1[firstname]&nbsp;$row1[lastname]&nbsp;&nbsp;</td>";
		echo "<td>&nbsp;&nbsp;$row1[position]&nbsp;&nbsp;</td>";
		echo "<td align='center'>$row1[salary]</td>";
		echo "</tr>";
	}
?>
</table>
<p align='center'>
<?
	//แสดงผล
	if ($Prev_Page) {
		echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtName=$getname&txtState=$getstate&txtCell=$getcell&txtGroup=$getgroup'><< Back</a> ";
	}

	for ($i=1; $i <= $Num_Pages; $i++) {
		if ($i != $Page) {
			echo " [<a href ='$_SERVER[SCRIPT_NAME]?Page=$i&txtName=$getname&txtState=$getstate&txtCell=$getcell&txtGroup=$getgroup'>$i</a>] ";
		} else {
			echo "[<b> $i </b>]"; 
		}
	}

	if ($Page!=$Num_Pages) {
		echo " [<a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtName=$getname&txtState=$getstate&txtCell=$getcell&txtGroup=$getgroup'>Next>></a>] ";        
	}
?>
</p>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?//<a href="customer_menu.php">กลับ</a>?>
</body>
<? echo gfooter( );  ?>
</html>