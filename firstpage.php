<?session_start();?>
<? //unset($_SESSION["bufferlogin"]); ?>
<? include ("Allfunction.inc");  ?>
<? if  ($_GET['startlog'] == "ON")   {
      $_SESSION['startlog'] = "online";
                                                            }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function checkblank()  {
               if   (document.jobsearchfrom.searchname.value == "")  {
                    alert("�س�ѧ��������Ӥ��Ҥ�Ѻ");
                                                                                                               }
               else  {  document.jobsearchfrom.action = "jobsearch.php";  }
                                       }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>jobscybernet</title>
<link href="style.css" rel="stylesheet" type="text/css" >
<? include("functions/show_user.php"); ?>
</head>
<body onload='Check();'>
<? echo gheader($_GET[lang],$_GET[atpage],$_GET[thisbanner]);  ?>
<br>
<div align=center>
<table border="0" width="100%">
<tr><form name=jobsearchfrom>
<td align='center' bordercolor="RGB(120,206,49)"><font class="PD10">����</font> <input type="text" name="searchname" size="50">
<input type="hidden" name="lang" value=<?=$_GET[lang];  ?>>
<input type="hidden" name="atpage" value="4">
<select name=gdepartment>
<?
$sqlstr = "Select *  FROM  department";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($sqlstr);
?>
<?  if   ($_GET[lang] !="en")   { 						 
           while ($row=mysql_fetch_array($result)) {  ?>
           <option value=<?=$row[id]  ?>><?=$row[departmentname];  ?>
<?   } }
else   {  
           while ($row=mysql_fetch_array($result)) {  ?>
           <option value=<?=$row[id]  ?>><?=$row[departmentname_en];  ?>
<?  } }  ?>
</select>
<input type="submit" name="gsubmit" value="����"  onclick="checkblank()"></td>
</tr>
</table>

<?
$Gcount = 0;
$atMonth = date("m");
$atyear = date("Y");
$sqlstr = "Select *  FROM  dddcounter  WHERE  month(datecount) ='$atMonth'  And year(datecount) ='$atyear'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_select_db($databasename);
$result= mysql_query($sqlstr);
$nrow=mysql_num_rows($result);
while ($row=mysql_fetch_array($result)) {
         $Gcount = $row[amount];
}
?>

<?
if  ($Gcount != "")  {
    $Gcount = $Gcount + 1;
    $sqlstr1 = "update dddcounter  set amount = '$Gcount' where Month(datecount) = '$atMonth'  And Year(datecount) ='$atyear'"; 
    mysql_connect($host,$user,$password);mysql_select_db($databasename);
    $result2= mysql_query($sqlstr1);
                               }
else						 
                               {						 
    $Gcount = 1;
    $MMC = date("Y-m-d");
    $sqlstr2 = "insert  into  dddcounter(datecount,amount) values ('$MMC','$Gcount')";
    mysql_connect($host,$user,$password);mysql_select_db($databasename);
    $result3= mysql_query($sqlstr2);
                               }
?>
<?
$sqlstr = "Select *  FROM  department";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($sqlstr);
?>
<br>						 
<table border="0"  bordercolor="RGB(120,206,49)" cellspacing="0"  width="90%">
<tr>
<td valign="top">
<a href=jobshow.php?lang=<?=$_GET[lang];  ?>&jjcustomer=THM0000069&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=2><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=3><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=4><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=5><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=6><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=7><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=8><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=9><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=10><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=11><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=12><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=13><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=14><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=15><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=16><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?gidcustomer=17><img src="images/banner.png" border="0"></a><br>
</td>
<td width="100%" valign="top">
<div align="center">
<table border="0"  width="100%">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=1&lang=th&atpage=2><font class="PD11">�ҹ�ѭ��</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ�ôԵ �͹���  , �ҹ���� , �ҹ��Ǩ�ͺ�ѭ��</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=2&lang=th&atpage=2><font class="PD11">�ҹ��á�� �ҹ��Ѿ�ҡúؤ��</a></font><br>
<font class="PD3">�ҹ���ºؤ�� , �ҹ�Ţҹء�� , �ҹ�ç�ҹ����ѹ��</font></div></td>
</tr>
<?                                                   } 
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=1&lang=en&atpage=2><font class="PD11">Accounting</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;taxation , audit , credit control</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=2&lang=en&atpage=2><font class="PD11">Admin & HR</a></font><br>
<font class="PD3">Operation , Employee Relations , Recruitment</font></div></td>
</tr>
<?   }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=4&lang=th&atpage=2><font class="PD11">�ҹ�آ�Ҿ �ҹ����ҡ�� �ҹ��ҹ�������</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ���� , �ҹ�Ե�� , �ҹʻҺӺѴ</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=5&lang=th&atpage=2><font class="PD11">�ҹ������ҧ</a></font><br>
<font class="PD3">�ҹ�¸� , �ҹ������ҧ , �ҹ�Ǻ����Ҥ�� , �ҹʶһѵ¡���</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=4&lang=en&atpage=2><font class="PD11">Beauty / Health</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Spa therapist , Sport , Fitness</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=5&lang=en&atpage=2><font class="PD11">Building / Construction</a></font><br>
<font class="PD3">Building , Architectural Service , Construction</font></div></td>
</tr>
<?    }   ?>


<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=7&lang=th&atpage=2><font class="PD11">�ҹ����֡�� �ҹ�Ԫҡ��</font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ��� , �ҹ�Ҩ���� , �ҹ��ó��ѡ�� , �ҹ�͹�����</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=8&lang=th&atpage=2><font class="PD11">�ҹ���ǡ���</font><br>
<font class="PD3">���ǡþ�ѧ�ҹ , ���ǡ���� , ���ǡ�����ͧ�� , ���ǡ�俿��</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=7&lang=en&atpage=2><font class="PD11">Education</font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Teacher , Libralian , Lectuer , Professor</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=8&lang=en&atpage=2><font class="PD11">Engineer</font><br>
<font class="PD3">Chemical , Electrical , Electronic , Energy</font></div></td>
</tr>
<?    }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=10&lang=th&atpage=2><font class="PD11">�ҹ�ͷ�</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ software , �ҹ��ҹ�ҹ������ , �ҹ��ҹ����������</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=16&lang=th&atpage=2><font class="PD11">�ҹ��ԡ�ô�ҹ���ᾷ��</font></a><br>
<font class="PD3">�ҹ෤�Ԥ���ᾷ�� , �ҹ���Ѫ���� , �ҹᾷ�� , �ҹ�ѵ�ᾷ��</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=10&lang=en&atpage=2><font class="PD11">Information Technology(IT)</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Programming , DBA , Internet , Hardware</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=16&lang=en&atpage=2><font class="PD11">Medical Service</font></a><br>
<font class="PD3">Doctor , Surgeon , Nursing</font></div></td>
</tr>
<?    }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=12&lang=th&atpage=2><font class="PD11">�ҹ������</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ�����÷���� , �ҹ���������дѺ�٧</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=13&lang=th&atpage=2><font class="PD11">�ҹ��ü�Ե</font></a><br>
<font class="PD3">�ҹ��Ǩ�ͺ�س�Ҿ , �ҹ����� , �ҹ��Ե�ѭ��� , �ҹ��Ե����ͼ��</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=12&lang=en&atpage=2><font class="PD11">Management</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;General Management , Top Excutives</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=13&lang=en&atpage=2><font class="PD11">Manufacturing</font></a><br>
<font class="PD3">Garment , Jewelry & Gem , Printing , Production</font></div></td>
</tr>
<?    }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=18&lang=th&atpage=2><font class="PD11">�ҹ��ԡ��੾�зҧ </font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ������ , �ҹ����֡�ҷҧ��áԨ , �ҹ���� , �ҹ������</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=19&lang=th&atpage=2><font class="PD11">�ҹ��ѧ�������Ѿ��</font></a><br>
<font class="PD3">�ҹ��������ѧ�������Ѿ�� , �ҹ����֡����ѧ�������Ѿ��</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=18&lang=en&atpage=2><font class="PD11">Professional Service</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Bussiness Analysis , Legal & Compliance , Translation</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=19&lang=en&atpage=2><font class="PD11">Property</font></a><br>
<font class="PD3">Property Consultancy , Property Management , All Property</font></div></td>
</tr>
<?    }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=21&lang=th&atpage=2><font class="PD11">�ҹ��� �ҹ��ԡ���١��� �ҹ�Ѳ�Ҹ�áԨ</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ��� , �ҹ��µç , �ҹ call center , �ҹ�����</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=22&lang=th&atpage=2><font class="PD11">�ҹ�׷����ʵ�� �ҹ��� �ҹ�Ԩ����оѲ��</font></a><br>
<font class="PD3">�ҹ��� , �ҹ��� , �ҹ�Է����ʵ���ҹ����� , �ҹ�Ԩ�� , �ҹ�Ѳ��</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=21&lang=en&atpage=2><font class="PD11">Sale & Bussiness</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Account Service , Call centre , Bussiness Developement</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=22&lang=en&atpage=2><font class="PD11">Sciences , LAP , R&D</font></a><br>
<font class="PD3">Chemical , Biotechnology , Energy , LAP</font></div></td>
</tr>
<?    }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=24&lang=th&atpage=2><font class="PD11">�ҹ����</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ��úԹ , �ҹ�����Թ��� , �ҹ��ѧ�Թ��� , �ҹ�ҹ¹��</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=23&lang=th&atpage=2><font class="PD11">�ҹ�ä��Ҥ�</font></a><br>
<font class="PD3">�ҹ���ǡê����� , �ҹ�������к����͢��� , �ҹ���ǡô����к��ä��Ҥ�</font></div></td>
</tr>
<?                                                 }
else  {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=24&lang=en&atpage=2><font class="PD11">Transportation & Logistics</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Airline , Automotive , Shipping , Import Export</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=23&lang=en&atpage=2><font class="PD11">Telecomm</font></a><br>
<font class="PD3">GSM Engineer , System Engineer , System Security</font></div></td>
</tr>
<?    }   ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=3&lang=th&atpage=2><font class="PD11">�ҹ��Ҥ�� �ҹ����Թ</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ��� , �ҹ��µç , �ҹ call center , �ҹ�����</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=6&lang=th&atpage=2><font class="PD11">�ҹ�͡Ẻ</font></a><br>
<font class="PD3">�ҹ��ҿԡ , �ҹ�͡ẺῪ�� , �ҹ�͡Ẻ��Ե�ѳ��</font></div></td>
</tr>
<?    }
else  {    ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=3&lang=en&atpage=2><font class="PD11">Banking / Finance</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Analysis , Loan , Mortgage , Invesment</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=6&lang=en&atpage=2><font class="PD11">Design</font></a><br>
<font class="PD3">Graphic design , Fasion design , Interior</font></div></td>
</tr>
<?   }    ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=9&lang=th&atpage=2><font class="PD11">�ҹ��ͧ����� �ҹ����ç��� �ҹ F&B</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ�������ê�� , �ҹ�����á���ç��� , �ҹ������������ͧ����</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=11&lang=th&atpage=2><font class="PD11">�ҹ��Сѹ���</font></a><br>
<font class="PD3">�ҹ���᷹��Сѹ��� , �ҹ�ѡʶԵԡ�û�Сѹ��� , �ҹ���˹�ҷ���Թ�����᷹</font></div></td>
</tr>
<?    }
else  {    ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=9&lang=en&atpage=2><font class="PD11">Hospitality / F&B</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;F&B , Operation , Tourism , Management</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=11&lang=en&atpage=2><font class="PD11">Insurance</font></a><br>
<font class="PD3">Actuarial , Underwriter , Broker , Claims Offices</font></div></td>
</tr>
<?   }    ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=14&lang=th&atpage=2><font class="PD11">�ҹ��õ�Ҵ �ҹ������</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ�����á�õ�Ҵ , �ҹ��õ�Ҵ����� , �ҹ�������ù���Թ���</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=20&lang=th&atpage=2><font class="PD11">�ҹ�Ҫ��� �ҹ��ԡ�ô�ҹ�Ҹ�ó�</font></a><br>
<font class="PD3">�ҹ�Ҫ��� , �ҹ�Ҫ��÷��� , �ҹ�Ҹ�óٻ���</font></div></td>
</tr>
<?    }
else  {    ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=14&lang=en&atpage=2><font class="PD11">Maketing / Public Relation</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Direct Maketing , Management , Public Relation</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=20&lang=en&atpage=2><font class="PD11">Public / Civil</font></a><br>
<font class="PD3">All Public / Civil , Civil Service , Military / Defense</font></div></td>
</tr>
<?   }    ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=17&lang=th&atpage=2><font class="PD11">�ҹ�Ѵ����</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ�Ѵ���ͨѴ�� , �ҹ�Ѵ�����ص��ˡ��� , �ҹ�Ѵ��������</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=15&lang=th&atpage=2><font class="PD11">�ҹ�ɳ� , �ҹ����</font></a><br>
<font class="PD3">�ҹ��Ե���� , �ҹ����ͷտ , �ҹ������觾���� , �ҹ��ҧ�Ҿ �Ѵ���</font></div></td>
</tr>
<?    }
else  {    ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=17&lang=en&atpage=2><font class="PD11">Merchandising & Purchasing</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Household , Industrial , Garment , Procurement</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=15&lang=en&atpage=2><font class="PD11">Media & Advertising</font></a><br>
<font class="PD3">Editorial , Journalism , Broadcasting , Creative</font></div></td>
</tr>
<?   }    ?>

<?   if   ($_GET['lang'] != "en")   {   ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=25&lang=th&atpage=2><font class="PD11">�ҹ����</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;�ҹ��ҧ෤�Ԥ , �ҹ��ҧ����� , �ҹ�ó��Է�� , �ҹ����ͧ���</font></div></td>
<td><div align="left">&nbsp;<br>
&nbsp;</div></td>
</tr>
<?    }
else  {    ?>
<tr>
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=25&lang=en&atpage=2><font class="PD11">Other</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;Geologist , Mining , Skill worker , Student</font></div></td>
<td><div align="left">&nbsp;<br>
&nbsp;</div></td>
</tr>
<?   }    ?>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

</table>
</div>

<table>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<img src="images/header1.png" border="0"></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD3">˹ѧ��;�����͹�Ź� :</font><font class="PD10"><a href="http://www.thairath.co.th"> ���Ѱ</a> , <a href="http://www.dailynews.co.th">��Թ����</a> , <a href="http://www.matichon.co.th/matichon">��Ԫ�</a> , <a href="http://www.thaipost.net">�����</a> , <a href="http://www.matichon.co.th/khaosod">����ʴ</a> , <a href="http://www.matichon.co.th/weekly">��Ԫ��ش�ѻ����</a> , <a href="http://www.matichon.co.th/prachachart">��ЪҪҵԸ�áԨ</a> , <a href="http://www.komchadluek.net">���Ѵ�֡</a> , <a href="http://www.daradaily.com">��������</a> , <a href="http://www.manager.co.th">���Ѵ���</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD10"><a href="http://www.manager.co.th/mgrweekly">���Ѵ�������ѻ����</a> , <a href="http://www.gotomanager.com">���Ѵ��������͹</a> , <a href="http://www.posttoday.com">�ʵ�����</a> , <a href="http://www.bangkok-today.com">�ҧ�͡&nbsp;�����</a> , <a href="http://www.bangkokbiznews.com">��ا෾��áԨ</a> , <a href="http://www.thannews.th.com">�ҹ���ɰ�Ԩ</a> , <a href="http://www.sentangonline.com">��鹷ҧ���ɰ�Ԩ</a> , <a href="http://www.naewna.com">��˹��</a> , <a href="http://www.siamrath.co.th">�����Ѱ</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD10"><a href="http://www.bangkokpost.com">�ҧ�͡��</a> , <a href="http://www.nationmultimedia.com">๪��</a> , <a href="http://www.nationweekend.com">๪���ش�ѻ����</a> , <a href="http://www.siamturakij.com">������áԨ</a> , <a href="http://www.stockwave.in.th">��������</a> , <a href="http://www.banmuang.co.th">��ҹ���ͧ</a> , <a href="http://www.tj.co.th">��Ť��&nbsp;���</a> , <a href="http://www.nationchannel.com">๪��&nbsp;����</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD3">TV / Cable :</font> <font class="PD10"><a href="http://www.thaitv3.com">��ͧ&nbsp;3</a> , <a href="http://www.tv5.co.th">��ͧ&nbsp;5</a> , <a href="http://www.ch7.com">��ͧ&nbsp;7</a> , <a href="http://www.mcot.net">��ͧ&nbsp;9</a> , <a href="http://www.prd.go.th">��ͧ&nbsp;11</a> , <a href="http://www.thaipbs.or.th">��ͧ&nbsp;thaipbs</a> , <a href="http://www.truevisionstv.com">��ͧ&nbsp;True vision</a> , <a href="http://www.nationchanel.com">��ͧ&nbsp;nation channal</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD3">Top 10 website :</font> <font class="PD10"><a href="http://www.sanook.com">sanook</a> , <a href="http://www.kapook.com">kapook</a> , <a href="http://www.mthai.com">mthai</a> , <a href="http://www.dek-d.com">dek-d</a> , <a href="http://www.pantip/cafe.com">pantip/cafe</a> , <a href="http://www.manager.co.th">manager</a> , <a href="http://www.exteen.com">exteen</a> , <a href="http://www.bloggang.com">bloggang</a> , <a href="http://www.teenee.com">teenee</a> , <a href="http://www.truelife.com">truelife</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp; </div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp; </div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp; </div></td></tr>
</table>


</td>
<td valign="top">
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
<a href=jobshow.php?lang=th&jjcustomer=THM0000002&key=T&atpage=2&thisbanner=T><img src="images/banner.png" border="0"></a><br>
</td>
</tr>
</table>
</div>
<br>
<br>
<div align="center">
<a href="firstpage.php">˹���á</a> | <a href="employee_login_page.php">�ҡ����ѵ�</a>  | <a href="customer.php">���Ҿ�ѡ�ҹ</a>  | <a href="#">����ǡѺ���</a>  | <a href="contactus.php">�Դ������</a> | <a href="adperpay.php">�ѵ���ɳ�</a>
</div>
<br>
<br>

<? include ("check_delete.php"); ?>
<? echo gfooter( );  ?>
</body>
</html>