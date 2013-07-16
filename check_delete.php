<?
	$conn = mysql_connect($host,$user,$password);mysql_select_db($databasename);
	$set_conn = mysql_query("SET NAMES TIS620");
	
	$sql1 = "select * from employee_resume_th order by resumeupdate desc";
	$result1= mysql_query($sql1);
	
	$sql2 = "select * from employee_resume_en order by resumeupdate desc";
	$result2= mysql_query($sql2);
	
	$Ythai = date('Y')+543;
	while ($row1=mysql_fetch_array($result1)) {
		$d1 = substr($row1[resumeupdate], -2);
		$m1 = substr($row1[resumeupdate], -4, 2);
		$y1 = substr($row1[resumeupdate], 0, -4);
		$tmp1 = (date("d")-$d1)+((date("m")-$m1)*60)+(($Ythai-$y1)*365);
		if($tmp1 >= 365){
			$del1 = "delete from employee_resume_th where idresume = '".$row1[idresume]."'";
			$rs1 = mysql_query($del1);
			//echo "$row1[resumeupdate] || $tmp1 <br />";
		}/*else{
			echo "$row1[resumeupdate] || $tmp1 <br />";
		}*/
	}
	
	while ($row2=mysql_fetch_array($result2)) {
		$d2 = substr($row2[resumeupdate], -2);
		$m2 = substr($row2[resumeupdate], -4, 2);
		$y2 = substr($row2[resumeupdate], 0, -4);
		$tmp2 = (date("d")-$d2)+((date("m")-$m2)*60)+(($Ythai-$y2)*365);
		if($tmp2 >= 365){
			$del2 = "delete from employee_resume_en where idresume = '".$row2[idresume]."'";
			$rs2 = mysql_query($del2);
			//echo "$row2[resumeupdate] || $tmp2 <br />";
		}/*else{
			echo "$row2[resumeupdate] || $tmp2 <br />";
		}*/
	}
?>	