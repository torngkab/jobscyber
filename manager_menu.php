<?session_start();?>
<? include_once ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body onload='Check();'>
<?include("header_manager.php");?>
<div align=center><br>
<form action="manager_process_mainmenu.php"  method="post">
<select  name="gbmenu">
<option value="1">���ҧ���ʼ�ҹ����١���
<option value="2">���¡��������Ѻ�Թ
<option value="3">������ʼ�ҹ Manager
<option value="6">�ʴ�ʶԵ� �����Ҫ����䫴�
<option value="7">�ʴ��ӹǹ resume
<option value="8">���¡�ٵ��ҧ�Թ���
<option value="9">�����Թ�������
</select> 
<input type="submit" value="���͡">
</form>
</div>
<br>
</body>
<? echo gfooter();  ?>
</html>
