<?session_start();?>
<? include_once ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<?include("header_manager.php");?>
<form name="proc_add" action="manager_process_add.php" method="post">
<table border=1 align='center'>
<tr><td>�����Թ���&nbsp;</td><td><input type="text" name="proc_id" autofocus /></td></tr>
<tr><td>�����Թ���&nbsp;</td><td><input type="text" name="proc_name" /></td></tr>
<tr><td>�Ҥ�&nbsp;</td><td><input type="text" name="proc_price" /></td></tr>
<tr><td>��������&nbsp;</td>
	<td>
	<select name="proc_time">
	<option value="30">30
	<option value="60">60
	<option value="90">90
	<option value="180">180
	<option value="365">365
	</select>
&nbsp;�ѹ</td></tr>
<tr><td>�ӹǹ���˹�ŧ�ɳ�&nbsp;</td><td><input type="text" name="proc_pos" /></td></tr>
<tr><td>��ä��� resume&nbsp;</td>
	<td>
	<select name="proc_resume">
	<option value="T">T
	<option value="N">N
	</select>
</td></tr>
</table>
<p align='center'><input type="submit" value="��ŧ" /><input type="reset" value="¡��ԡ" /></p>
</form>
</body>
<? echo gfooter();  ?>
</html>
