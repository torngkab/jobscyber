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
                    alert("คุณยังไม่ได้ใส่คำค้นหาครับ");
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
<td align='center' bordercolor="RGB(120,206,49)"><font class="PD10">ค้นหา</font> <input type="text" name="searchname" size="50">
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
<input type="submit" name="gsubmit" value="ค้นหา"  onclick="checkblank()"></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=1&lang=th&atpage=2><font class="PD11">งานบัญชี</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานเครดิต คอนโทรล  , งานภาษี , งานตรวจสอบบัญชี</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=2&lang=th&atpage=2><font class="PD11">งานธุรการ งานทรัพยากรบุคคล</a></font><br>
<font class="PD3">งานฝ่ายบุคคล , งานเลขานุการ , งานแรงงานสัมพันธ์</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=4&lang=th&atpage=2><font class="PD11">งานสุขภาพ งานโภชนาการ งานด้านความงาม</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานกีฬา , งานฟิตเนส , งานสปาบำบัด</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=5&lang=th&atpage=2><font class="PD11">งานก่อสร้าง</a></font><br>
<font class="PD3">งานโยธา , งานก่อสร้าง , งานควบคุมอาคาร , งานสถาปัตยกรรม</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=7&lang=th&atpage=2><font class="PD11">งานการศึกษา งานวิชาการ</font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานครู , งานอาจารย์ , งานบรรณารักษ์ , งานสอนพิเศษ</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=8&lang=th&atpage=2><font class="PD11">งานวิศวกรรม</font><br>
<font class="PD3">วิศวกรพลังงาน , วิศวกรเคมี , วิศวกรเครื่องกล , วิศวกรไฟฟ้า</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=10&lang=th&atpage=2><font class="PD11">งานไอที</a></font><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งาน software , งานด้านฐานข้อมูล , งานด้านโปรแกรมเมอร์</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=16&lang=th&atpage=2><font class="PD11">งานบริการด้านการแพทย์</font></a><br>
<font class="PD3">งานเทคนิคการแพทย์ , งานเภสัชกรรม , งานแพทย์ , งานสัตวแพทย์</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=12&lang=th&atpage=2><font class="PD11">งานบริหาร</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานบริหารทั่วไป , งานผู้บริหารระดับสูง</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=13&lang=th&atpage=2><font class="PD11">งานการผลิต</font></a><br>
<font class="PD3">งานตรวจสอบคุณภาพ , งานพิมพ์ , งานผลิตอัญมณี , งานผลิตเสื้อผ้า</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=18&lang=th&atpage=2><font class="PD11">งานบริการเฉพาะทาง </font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานกฏหมาย , งานที่ปรึกษาทางธุรกิจ , งานล่าม , งานแปลภาษา</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=19&lang=th&atpage=2><font class="PD11">งานอสังหาริมทรัพย์</font></a><br>
<font class="PD3">งานบริหารอสังหาริมทรัพย์ , งานที่ปรึกษาอสังหาริมทรัพย์</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=21&lang=th&atpage=2><font class="PD11">งานขาย งานบริการลูกค้า งานพัฒนาธุรกิจ</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานขาย , งานขายตรง , งาน call center , งานขายส่ง</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=22&lang=th&atpage=2><font class="PD11">งานวืทยาศาสตร์ งานแล็ป งานวิจัยและพัฒนา</font></a><br>
<font class="PD3">งานแล็ป , งานเคมี , งานวิทยาศาสตร์ด้านอาหาร , งานวิจัย , งานพัฒนา</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=24&lang=th&atpage=2><font class="PD11">งานขนส่ง</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานการบิน , งานขนส่งสินค้า , งานคลังสินค้า , งานยานยนต์</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=23&lang=th&atpage=2><font class="PD11">งานโทรคมนาคม</font></a><br>
<font class="PD3">งานวิศวกรชุมสาย , งานผู้ดูแลระบบเครือข่าย , งานวิศวกรดูแลระบบโทรคมนาคม</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=3&lang=th&atpage=2><font class="PD11">งานธนาคาร งานการเงิน</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานขาย , งานขายตรง , งาน call center , งานขายส่ง</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=6&lang=th&atpage=2><font class="PD11">งานออกแบบ</font></a><br>
<font class="PD3">งานกราฟิก , งานออกแบบแฟชั่น , งานออกแบบผลิตภัณฑ์</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=9&lang=th&atpage=2><font class="PD11">งานท่องเที่ยว งานการโรงแรม งาน F&B</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานโอเปอร์เรชั่น , งานบริหารการโรงแรม , งานอาหารและเครื่องดื่ม</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=11&lang=th&atpage=2><font class="PD11">งานประกันภัย</font></a><br>
<font class="PD3">งานตัวแทนประกันภัย , งานนักสถิติการประกันภัย , งานเจ้าหน้าที่สินไหมทดแทน</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=14&lang=th&atpage=2><font class="PD11">งานการตลาด งานพีอาร์</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานบริหารการตลาด , งานการตลาดทั่วไป , งานบริหารแบรนด์สินค้า</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=20&lang=th&atpage=2><font class="PD11">งานราชการ งานบริการด้านสาธารณะ</font></a><br>
<font class="PD3">งานราชการ , งานราชการทหาร , งานสาธารณูปโภค</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=17&lang=th&atpage=2><font class="PD11">งานจัดซื้อ</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานจัดซื้อจัดหา , งานจัดซื้ออุตสาหกรรม , งานจัดซื้ออื่นๆ</font></div></td>
<td><div align="left"><a href=jobshow.php?gdepartment=15&lang=th&atpage=2><font class="PD11">งานโฆษณา , งานสื่อ</font></a><br>
<font class="PD3">งานผลิตสื่อ , งานครีเอทีฟ , งานสื่อสิ่งพิมพ์ , งานช่างภาพ ตัดต่อ</font></div></td>
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
<td><div align="left">&nbsp; &nbsp; &nbsp;<a href=jobshow.php?gdepartment=25&lang=th&atpage=2><font class="PD11">งานอื่นๆ</font></a><br>
<font class="PD3">&nbsp; &nbsp; &nbsp; &nbsp;งานช่างเทคนิค , งานช่างฝีมือ , งานธรณีวิทยา , งานเหมืองแร่</font></div></td>
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
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD3">หนังสือพิมพ์ออนไลน์ :</font><font class="PD10"><a href="http://www.thairath.co.th"> ไทยรัฐ</a> , <a href="http://www.dailynews.co.th">เดลินิวส์</a> , <a href="http://www.matichon.co.th/matichon">มติชน</a> , <a href="http://www.thaipost.net">ไทยโพส์</a> , <a href="http://www.matichon.co.th/khaosod">ข่าวสด</a> , <a href="http://www.matichon.co.th/weekly">มติชนสุดสัปดาห์</a> , <a href="http://www.matichon.co.th/prachachart">ประชาชาติธุรกิจ</a> , <a href="http://www.komchadluek.net">คมชัดลึก</a> , <a href="http://www.daradaily.com">ดาราเดลี่</a> , <a href="http://www.manager.co.th">ผู้จัดการ</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD10"><a href="http://www.manager.co.th/mgrweekly">ผู้จัดการรายสัปดาห์</a> , <a href="http://www.gotomanager.com">ผู้จัดการรายเดือน</a> , <a href="http://www.posttoday.com">โพสต์ทูเดย์</a> , <a href="http://www.bangkok-today.com">บางกอก&nbsp;ทูเดย์</a> , <a href="http://www.bangkokbiznews.com">กรุงเทพธุรกิจ</a> , <a href="http://www.thannews.th.com">ฐานเศรษฐกิจ</a> , <a href="http://www.sentangonline.com">เส้นทางเศรษฐกิจ</a> , <a href="http://www.naewna.com">แนวหน้า</a> , <a href="http://www.siamrath.co.th">สยามรัฐ</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD10"><a href="http://www.bangkokpost.com">บางกอกโพส</a> , <a href="http://www.nationmultimedia.com">เนชั่น</a> , <a href="http://www.nationweekend.com">เนชั่นสุดสัปดาห์</a> , <a href="http://www.siamturakij.com">สยามธุรกิจ</a> , <a href="http://www.stockwave.in.th">กระแสหุ้น</a> , <a href="http://www.banmuang.co.th">บ้านเมือง</a> , <a href="http://www.tj.co.th">เทเลคอม&nbsp;เจเนล</a> , <a href="http://www.nationchannel.com">เนชั่น&nbsp;แชลแนล</a></font></div></td></tr>
<tr><td><div align="left">&nbsp; &nbsp; &nbsp; &nbsp;<font class="PD3">TV / Cable :</font> <font class="PD10"><a href="http://www.thaitv3.com">ช่อง&nbsp;3</a> , <a href="http://www.tv5.co.th">ช่อง&nbsp;5</a> , <a href="http://www.ch7.com">ช่อง&nbsp;7</a> , <a href="http://www.mcot.net">ช่อง&nbsp;9</a> , <a href="http://www.prd.go.th">ช่อง&nbsp;11</a> , <a href="http://www.thaipbs.or.th">ช่อง&nbsp;thaipbs</a> , <a href="http://www.truevisionstv.com">ช่อง&nbsp;True vision</a> , <a href="http://www.nationchanel.com">ช่อง&nbsp;nation channal</a></font></div></td></tr>
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
<a href="firstpage.php">หน้าแรก</a> | <a href="employee_login_page.php">ฝากประวัติ</a>  | <a href="customer.php">ค้นหาพนักงาน</a>  | <a href="#">เกี่ยวกับเรา</a>  | <a href="contactus.php">ติดต่อเรา</a> | <a href="adperpay.php">อัตราโฆษณา</a>
</div>
<br>
<br>

<? include ("check_delete.php"); ?>
<? echo gfooter( );  ?>
</body>
</html>