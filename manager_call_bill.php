<?session_start();?>
<?include_once("Allfunction.inc");?>
<?
$_SESSION[S] = $_GET[d_start];
$_SESSION[E] = $_GET[d_end];
$_SESSION[T] = $_GET[sorting];
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
<script>
function myFunction()
{
	var x=document.getElementById("d_start").value;
	var y=document.getElementById("d_end").value;
	document.getElementById('start').innerText = x;
	document.getElementById('end').innerText = y;
	}
	//document.frm1.submit();
	//alert(x);alert(y);
}
function OnSort(){
	var e = document.getElementById("sorting").value;
	//alert(e);
}
</script>
</head>
<body>
<?include("header_manager.php");?>
<?
	
	$d1 = substr($_SESSION[S], -2);
	$m1 = substr($_SESSION[S], -5, 2);
	$y1 = substr($_SESSION[S], 0, -6);
	$tmp1 = ($y1+543).($m1).($d1);
	
	$d2 = substr($_SESSION[E], -2);
	$m2 = substr($_SESSION[E], -5, 2);
	$y2 = substr($_SESSION[E], 0, -6);
	$tmp2 = ($y2+543).($m2).($d2);

	//$text = substr($_SESSION[S], 0, -6);
	if($_SESSION[T]==2){$sort = "companyname asc";}
	elseif($_SESSION[T]==3){$sort = "idcompany asc";}
	else{$sort = "signuptime asc";}
	//echo $text."<br>";
	//echo $tmp1."<br>";echo $tmp2."<br>";echo $_SESSION[T]."<br>";echo $sort."<br>";
	$sql1 = "select * from customer INNER JOIN product ON customer.jobpromotion=product.idproduct WHERE signuptime>=$tmp1 and signuptime<=$tmp2 order by $sort";
	$conn = mysql_connect($host,$user,$password);mysql_select_db($databasename);mysql_select_db($databasename);mysql_select_db($databasename);
	$set_conn = mysql_query("SET NAMES TIS620");
	$result1= mysql_query($sql1);
	
?>	
	<form name="frm1" action="manager_call_bill.php" method="get">
	<center>
	
	<?//check browser?>
	<script>
	/*if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
	var ieversion=new Number(RegExp.$1) // capture x.x portion and store as a number
	if (ieversion>=8){
		document.write("<p>�������&nbsp;<input type='date' name='d_start' id='d_start' />&nbsp;�֧&nbsp;<input type='date' name='d_end' id='d_end' />&nbsp;���§�ӴѺẺ&nbsp;");
	}
	else{
		document.write("<p>�������&nbsp;<input type='date' name='d_start' id='d_start' />&nbsp;�֧&nbsp;<input type='date' name='d_end' id='d_end' />&nbsp;���§�ӴѺẺ&nbsp;");}
	}*/
	</script>
	<p>�������&nbsp;<input type="date" name="d_start" id="d_start" />&nbsp;�֧&nbsp;<input type="date" name="d_end" id="d_end" />&nbsp;���§�ӴѺẺ&nbsp;
	<?  switch ($_SESSION['sorting'])  {
                  case "1" : $MF1="selected"; break;
                  case "2" : $MF2="selected"; break;
				  case "3" : $MF3="selected"; break;
                                                                }
	?>
	
	<select id="sorting" name="sorting" text="Ẻ������" onchange="Javescript: OnSort();">
	<option value="1" <?$MF1?>>Ẻ������
	<option value="2" <?$MF2?>>���§�ӴѺ�������
	<option value="3" <?$MF3?>>���§��������١���
	</select>
	
	<input type="submit" value="��ŧ" onclick="JavaScript: myFunction();"/>
	</center>
	<br/>
	<table border=1 align='center'>
	<tr>
		<th>�ѹ���</th>
		<th>�����١���</th>
		<th>�����١���</th>
		<th>���Թ</th>
		<th>�鹩�Ѻ</th>
		<th>����</th>
	</tr>
<?
	while ($row1=mysql_fetch_array($result1)) {   //  start  while 1
		echo "<tr>";
		//$date = date("Y-m-d");
		$date = $row1[signuptime];
		$d3 = substr($date, -2);
		$m3 = substr($date, -4, 2);
		$y3 = substr($date, 0, -4);
		$showdate = ($d3).'/'.($m3).'/'.($y3);
		echo "<td>$showdate</td>";
		echo "<td>$row1[idcompany]</td>";
		echo "<td>$row1[companyname]</td>";
		echo "<td>$row1[price]</td>";
		echo "<td><a href='customerprintprototypebill.php?idcompanylist=$row1[idcompany]&idproduct=$row1[idproduct]&pdname=$row1[productname]&price=$row1[price]&signup=$row1[signuptime]'>�鹩�Ѻ</a></td>";
		echo "<td><a href='customerprintcopybill.php?idcompanylist=$row1[idcompany]&idproduct=$row1[idproduct]&pdname=$row1[productname]&price=$row1[price]&signup=$row1[signuptime]'>����</a></td>";
		echo "</tr>";
		$sum += $row1[price];
	}
?>
<tr>
	<td colspan='4' align="right">������Թ</td>
	<td colspan='2' align='right'><?echo $sum;?></td>
</tr>
<tr>
	<td colspan='4' align="right">VAT</td>
	<td colspan='2' align='right'><?echo $vat = $sum*0.07;?></td>
</tr>
<tr>
	<td colspan='4' align="right">�ѡ���� � ������ 2%</td>
	<td colspan='2' align='right'><?echo $ovat = $sum*0.02;?></td>
</tr>
<tr>
	<td colspan='3' align="left">� �ѹ��� <span id='start'><?echo $_SESSION[S];?></span> - <span id='end'><?echo $_SESSION[E];?></span></td>
	<td align="right">������ط��</td>
	<td colspan='2' align='right'><?echo $sum+($vat+$ovat);?></td>
</tr>
</table>
</form>
<a href="manager_menu.php">��Ѻ</a>
</body>
<? echo gfooter();  ?>
</html>