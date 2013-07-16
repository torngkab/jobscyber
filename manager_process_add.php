<? include_once ("Allfunction.inc");  ?>
<?
	//define $_POST
	$proc_id = $_POST["proc_id"];
	$proc_name = $_POST["proc_name"];
	$proc_price = $_POST["proc_price"];
	$proc_time = $_POST["proc_time"];
	$proc_pos = $_POST["proc_pos"];
	$proc_resume = $_POST["proc_resume"];
	$tmp = 0;
	switch ($proc_time){
		case 30 : $tmp="2"; break;
		case 60 : $tmp="3"; break;
		case 90 : $tmp="4"; break;
		case 180 : $tmp="7"; break;
		case 365 : $tmp="13"; break;

		return $tmp;
	}
	
	// inserting
	$sql1 = "insert into product(idproduct,productname,price,timeout,position,totalresume,sumtime) values(";
	$sql1 .= "'$proc_id',";
	$sql1 .= "'$proc_name',";
	$sql1 .= "'$proc_price',";
	$sql1 .= "'$proc_time',";
	$sql1 .= "'$proc_pos',";
	$sql1 .= "'$proc_resume',";
	$sql1 .= "'$tmp')";
	$conn = mysql_connect($host,$user,$password);mysql_select_db($databasename);
	$set_conn = mysql_query("SET NAMES TIS620");
	$result = mysql_query($sql1);
	if($result)
		echo "Save Done.";
	else
		//die('Error: ' . mysql_error());
		echo "<script>alert('รหัสสินค้า $proc_id ซ้ำครับ');</script>";
	mysql_close($conn);
	echo "<script>location = 'manager_views.php';</script>";
	
?>
	