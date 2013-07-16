<?session_start();?>
<? include ("Allfunction.inc");  ?>
<?
$XXlanguage = $_GET['lang'];
$XXcustomer = $_GET['jjcustomer'];
$XXjobnumber = $_GET['jjobnumber'];
$SQL = "Select *  FROM  jobother  WHERE  jobnumber ='$XXjobnumber' and idcustomer = '$XXcustomer'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {   //    start while
$Xjobname = $row['jobname'];
$Xqualification = $row['qualification'];
$Xjobtype =  $row['jobtype'];
$Xyearexp =  $row['yearexp'];
$Xjobdescription = $row['jobdescription'];
$Xlocationofwork = $row['locationofwork'];
$Xnumberofposition = $row['numberofposition']; 
$Xsalary = $row['salary']; 
$Xbenefit = $row['benefit']; 
$Xhowtoapply = $row['howtoapply']; 
$Xcontact = $row['contact']; 
$Xjobname_en =$row['jobname_en'];
$Xqualification_en = $row['qualification_en'];
$Xjobdescription_en = $row['jobdescription_en'];
$Xlocationofwork_en = $row['locationofwork_en'];
$Xbenefit_en = $row['benefit_en']; 
$Xhowtoapply_en = $row['howtoapply_en']; 
$Xcontact_en = $row['contact_en'];
                                                                        }    //  end  while


$SQL1 = "Select *  FROM  customerbuffer  WHERE  idcompany ='$XXcustomer'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL1);
while ($row=mysql_fetch_array($result)) {     //   start while
$Xcompanyname_th = $row[companyname];
$Xaddress = $row[address];
$Xmoo_th = $row[moo];
$Xsoi_th = $row[soi];
$Xstreet_th = $row[street];
$Xtambon_th = $row[tambon];
$Xumphur_th = $row[umphur];
$Xprovince_th = $row[province];
$Xpostcode = $row[postcode];
$Xtel = $row[tel];
$Xfax = $row[fax];
$Xemail = $row[email];
$Xwebsite = $row[website];
$Xdescription_th = $row[description];
$Xmap = $row[map];
$Xcontactname_th = $row[contactname];
$Xcompany_en = $row[companyname_en];
$Xaddress_en = $row[address_en];
$Xmoo_en = $row[moo_en];
$Xsoi_en = $row[soi_en];
$Xstreet_en = $row[street_en];
$Xtambon_en = $row[tambon_en];
$Xumphur_en = $row[umphur_en];
$Xprofile_en = $row[profile_en];
$Xcontactname_en = $row[contactname_en];
$Xsignuptime = $row[signuptime];
                                                                  }   //  end  while
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>

<?  echo gheader($_GET[lang],5,F);   ?>

<div align=center><br><br><br>
<?   if   ($XXlanguage == "th")    {     ?>
<table cellspacing="0" cellpadding="0" border="0" width="65%">
<tr bgcolor="#FFFFFF" height="30"><td width="12">&nbsp;</td><td>&nbsp;</td></tr>
<tr bgcolor="#1FA2EF" height="30"><td>&nbsp;</td><td><font class="PD12"><?=$Xcompanyname_th;  ?></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><br><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xdescription_th);   ?></font></div><br></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="center"><?=$Xjobname;  ?></div></font><font class="PD3"><div align="center">(<?=inthaiPV($Xprovince_th);   ?>)</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">รายละเอียดของงาน</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xjobdescription);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">คุณสมบัติของผู้สมัครงาน</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xqualification);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">ตำแหน่ง</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=$Xnumberofposition;   ?>&nbsp; อัตรา</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">สวัสดิการ</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xbenefit);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">เงินเดือน</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?  if  ($Xsalary == 0)  {  echo "ไม่ระบุ";  }  else  {  echo $Xsalary." "."บาท";  }   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">วิธีการสมัคร</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xhowtoapply);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">ติดต่อ</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=$Xcontactname_th;   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">ตำแหน่งงานอื่นๆ</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td>
<td>
<div align="left">

<?
$SQL = "Select *  FROM  jobother  WHERE idcustomer = '$XXcustomer'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($rowz=mysql_fetch_array($result))                  {   //    start while
if     ($XXjobnumber != $rowz['jobnumber'])    {   //   start  if
        echo  "<a href=customerpreview.php?jjcustomer=$XXcustomer&jjobnumber=$rowz[jobnumber]&lang=th>"."<font class=PD3>".$rowz['jobname']."</font>"."</a>"."<br>";
                                                                              }  
                                                                                          }   //  end  while
?>

</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="50"><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="center"><?=$Xcompanyname_th;  ?><br>
<?=$Xaddress;  ?><?  if  ($Xmoo_th != "")  {  echo " "."หมู่"." ".$Xmoo_th;  }  ?><?  if  ($Xsoi_th != "")  {  echo " "."ซอย"." ".$Xsoi_th;   }   ?>&nbsp; ถนน <?=$Xstreet_th;   ?>&nbsp; ตำบล <?=$Xtambon_th;  ?> อำเภอ <?=$Xumphur_th;  ?><br>
จังหวัด <?=inthaiPV($Xprovince_th);  ?>&nbsp; <?=$Xpostcode;  ?>&nbsp; โทร : <?=$Xtel;  ?><br>แฟกซ์ <?=$Xfax;  ?>&nbsp; อีเมลส์ <?=$Xemail;  ?><br>
<?  if   ($Xwebsite != "")  {  echo "เว็บไซด์"." ".$Xwebsite;  }  ?></div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td width="8">&nbsp;</td><td>&nbsp;</td></tr>
<tr bgcolor="#FFFFFF" height="50"><td width="8">&nbsp;</td><td>&nbsp;</td></tr>
</table>
<?                     } 
else                  {          ?>

<table cellspacing="0" cellpadding="0" border="0" width="65%">
<tr bgcolor="#FFFFFF" height="30"><td width="12">&nbsp;</td><td>&nbsp;</td></tr>
<tr bgcolor="#1FA2EF" height="30"><td>&nbsp;</td><td><font class="PD12"><?=$Xcompany_en;  ?></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><br><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xprofile_en);   ?></font></div><br></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="center"><?=$Xjobname_en;  ?></div></font><font class="PD3"><div align="center">(<?=encodeprovince_en($Xprovince_th);   ?>)</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">Job description</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xjobdescription_en);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">Qualification</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xqualification_en);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">Position</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=$Xnumberofposition;   ?>&nbsp; position</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">Benefit</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xbenefit_en);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">salary</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=$Xsalary;   ?>&nbsp; baht</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">How to apply</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=ereg_replace(chr(13),"<br>",$Xhowtoapply_en);   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">Contact</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD3"><div align="left"><?=$Xcontactname_en;   ?></font></div></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="left">Other Job</div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td>
<td>
<div align="left">

<?
$SQL = "Select *  FROM  jobother  WHERE idcustomer = '$XXcustomer'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($rowz=mysql_fetch_array($result))                  {   //    start while
if     ($XXjobnumber != $rowz['jobnumber'])    {   //   start  if
        echo  "<a href=customerpreview.php?jjcustomer=$XXcustomer&jjobnumber=$rowz[jobnumber]&lang=en>"."<font class=PD3>".$rowz['jobname_en']."</font>"."</a>"."<br>";
                                                                              }  
                                                                                }   //  end  while
?>

</font></div></td></tr>
<tr bgcolor="#FFFFFF" height="50"><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr bgcolor="#FFFFFF" height="30"><td>&nbsp;</td><td><font class="PD13"><div align="center"><?=$Xcompany_en;  ?><br>
<?=$Xaddress;  ?><?  if  ($Xmoo_en != "")  {  echo " "."moo"." ".$Xmoo_en;  }  ?><?  if  ($Xsoi_en != "")  {  echo " "."soi"." ".$Xsoi_en;   }   ?>&nbsp; street <?=$Xstreet_en;   ?>&nbsp; tambon <?=$Xtambon_en;  ?> umphur <?=$Xumphur_en;  ?><br>
province <?=encodeprovince_en($Xprovince_th);  ?>&nbsp; <?=$Xpostcode;  ?>&nbsp; Tel :โทร : <?=$Xtel;  ?><br>Fax : <?=$Xfax;  ?>&nbsp; e-mail <?=$Xemail;  ?><br>
<?  if   ($Xwebsite != "")  {  echo "website"." ".$Xwebsite;  }  ?></div></font></td></tr>
<tr bgcolor="#FFFFFF" height="30"><td width="8">&nbsp;</td><td>&nbsp;</td></tr>
<tr bgcolor="#FFFFFF" height="50"><td width="8">&nbsp;</td><td>&nbsp;</td></tr>
</table>
<?                         }         ?>      

</div>
<br>
<br>
<?  echo gfooter();   ?>
</body>
</html>
