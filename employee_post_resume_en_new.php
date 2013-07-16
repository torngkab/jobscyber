<?session_start();?>
<?
include("Allfunction.inc");

if    ($_SESSION['codereturn2'] == "T")   {
          $_SESSION[kgfirstname] = "";
          $_SESSION[kglastname] = "";            
          $_SESSION[kgnationality] = "";
          $_SESSION[kgaddress] = "";
          $_SESSION[kgcareer] = "";
          $_SESSION[kgintposition1] = "";
          $_SESSION[kgintposition2] = "";
          $_SESSION[kgintposition3] = "";
          $_SESSION[kghobby1] = "";
          $_SESSION[kghobby2] = "";
          $_SESSION[kghobby3] = "";
          $_SESSION[kghobby4] = "";
          $_SESSION[kghobby5] = "";                  
          $_SESSION[kgintitude1] = "";
          $_SESSION[kgfaculty1] = "";
          $_SESSION[kgmajor1] = "";
          $_SESSION[kgminor1] = "";
          $_SESSION[kgintitude2] = "";
          $_SESSION[kgfaculty2] = "";
          $_SESSION[kgmajor2] = "";
          $_SESSION[kgminor2] = "";
          $_SESSION[kgintitude3] = "";
          $_SESSION[kgfaculty3] = "";
          $_SESSION[kgmajor3] = "";
          $_SESSION[kgminor3] = "";
          $_SESSION[kgintitude4] = "";
          $_SESSION[kgfaculty4] = "";
          $_SESSION[kgmajor4] = "";
          $_SESSION[kgminor4] = "";
          $_SESSION[kgextracur1] = "";
          $_SESSION[kgextracur2] = "";
          $_SESSION[kgextracur3] = "";
          $_SESSION[kgextracur4] = "";																		
          $_SESSION[kgextracur5] = "";
          $_SESSION[kgotherskill1] = "";
          $_SESSION[kgotherskill2] = "";
          $_SESSION[kgotherskill3] = "";
          $_SESSION[kgotherskill4] = "";
          $_SESSION[kgotherskill5] = "";
          $_SESSION[kgotherskill6] = "";
          $_SESSION[kgotherskill7] = "";
          $_SESSION[kgotherskill8] = "";
          $_SESSION[kgposition1] = "";
          $_SESSION[kgcompany1] = "";
          $_SESSION[kgcom1onus1] = "";
          $_SESSION[kgcom1onus2] = "";
          $_SESSION[kgcom1onus3] = "";
          $_SESSION[kgcom1onus4] = "";
          $_SESSION[kgcom1onus5] = "";
          $_SESSION[kgcom1onus6] = "";
          $_SESSION[kgcom1onus7] = "";
          $_SESSION[kgcom1onus8] = "";
          $_SESSION[kgposition2] = "";
          $_SESSION[kgcompany2] = "";
          $_SESSION[kgcom2onus1] = "";
          $_SESSION[kgcom2onus2] = "";
          $_SESSION[kgcom2onus3] = "";
          $_SESSION[kgcom2onus4] = "";
          $_SESSION[kgcom2onus5] = "";
          $_SESSION[kgcom2onus6] = "";
          $_SESSION[kgcom2onus7] = "";
          $_SESSION[kgcom2onus8] = "";
          $_SESSION[kgposition3] = "";
          $_SESSION[kgcompany3] = "";
          $_SESSION[kgcom3onus1] = "";
          $_SESSION[kgcom3onus2] = "";
          $_SESSION[kgcom3onus3] = "";
          $_SESSION[kgcom3onus4] = "";
          $_SESSION[kgcom3onus5] = "";
          $_SESSION[kgcom3onus6] = "";
          $_SESSION[kgcom3onus7] = "";
          $_SESSION[kgcom3onus8] = "";	
                                                                           } 
$_SESSION['codereturn2'] = "F";
$SQL = "Select *  FROM  employee_resume_th  WHERE  idresume ='$_SESSION[resumeindex]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {
          $_SESSION[dbtitle] = $row[title];
          $_SESSION[dbgender] = $row[gender];
          $_SESSION[dbbirthofdate] = $row[bbbday];
          $_SESSION[dbpasspostid] = $row[passpostid];
          $_SESSION[dbmarital] = $row[kkkmarital];
          $_SESSION[dbmilitary] = $row[kkkmilitary];
          $_SESSION[dbpostcode] = $row[postcode];
          $_SESSION[dbemail] = $row[emailaddress];
          $_SESSION[dbmobile] = $row[mobile];
          $_SESSION[dbmotorcycle] = $row[motorcyclebill];
          $_SESSION[dbcar] = $row[carbill];
          $_SESSION[dbtruck] = $row[truckbill];
          $_SESSION[dbpersonalvehicle] = $row[personalvehicle];
          $_SESSION[dboutsidebangkok] = $row[outsidebkk];
          $_SESSION[dboutsidethailand] = $row[outth];
          $_SESSION[dbweight] = $row[weight];
          $_SESSION[dbheight] = $row[height];
          $_SESSION[dbprovince]= $row[province];
          $_SESSION[dbdistrict] = $row[district];
          $_SESSION[dbhome] = $row[homenumber];
          $_SESSION[dboffice] = $row[office];
          $_SESSION[dbfax] = $row[fax];
          $_SESSION[dbintposition1] = $row[interestingposition1];
          $_SESSION[dbintposition2] = $row[interestingposition2];
          $_SESSION[dbintposition3] = $row[interestingposition3];
          $_SESSION[dbhobby3] = $row[hobby3];
          $_SESSION[dbhobby4] = $row[hobby4];
          $_SESSION[dbhobby5] = $row[hobby5];
          $_SESSION[dblanguage1] = $row[language1];
          $_SESSION[dblisten1] = $row[listen1];
          $_SESSION[dbspeak1] = $row[speak1];
          $_SESSION[dbread1] = $row[read1];
          $_SESSION[dbwrite1] = $row[write1];
          $_SESSION[dblanguage2] = $row[language2];
          $_SESSION[dblisten2] = $row[listen2];
          $_SESSION[dbspeak2] = $row[speak2];
          $_SESSION[dbread2] = $row[read2];
          $_SESSION[dbwrite2] = $row[write2];
          $_SESSION[dblanguage3] = $row[language3];
          $_SESSION[dblisten3] = $row[listen3];
          $_SESSION[dbspeak3] = $row[speak3];
          $_SESSION[dbread3] = $row[read3];
          $_SESSION[dbwrite3] = $row[write3];
          $_SESSION[dbenglishpermin] = $row[englishpermin];
          $_SESSION[dbthaipermin] = $row[thaipermin];
          $_SESSION[dbcomputerskill] = $row[computerskill];
          $_SESSION[dbstartmonth1] = $row[startmonth1];
          $_SESSION[dbstartyear1] = $row[startyear1];
          $_SESSION[dbendmonth1] = $row[endmonth1];
          $_SESSION[dbendyear1] = $row[endyear1];
          $_SESSION[dbcompany1] = $row[company1];
          $_SESSION[dbposition1] = $row[position1];		
          $_SESSION[dbsalary1] = $row[salary1];
          $_SESSION[dbcom1onus1] = $row[com1onus1];
          $_SESSION[dbcom1onus2] = $row[com1onus2];
          $_SESSION[dbcom1onus3] = $row[com1onus3];
          $_SESSION[dbcom1onus4] = $row[com1onus4];
          $_SESSION[dbcom1onus5] = $row[com1onus5];
          $_SESSION[dbcom1onus6] = $row[com1onus6];
          $_SESSION[dbcom1onus7] = $row[com1onus7];
          $_SESSION[dbcom1onus8] = $row[com1onus8];						
          $_SESSION[dbstartmonth2] = $row[startmonth2];
          $_SESSION[dbstartyear2] = $row[startyear2];
          $_SESSION[dbendmonth2] = $row[endmonth2];
          $_SESSION[dbendyear2] = $row[endyear2];
          $_SESSION[dbcompany2] = $row[cccompany2];
          $_SESSION[dbposition2] = $row[ppposition2];			
          $_SESSION[dbsalary2] = $row[xalary222];
          $_SESSION[dbcom2onus1] = $row[com2onus1];
          $_SESSION[dbcom2onus2] = $row[com2onus2];
          $_SESSION[dbcom2onus3] = $row[com2onus3];
          $_SESSION[dbcom2onus4] = $row[com2onus4];
          $_SESSION[dbcom2onus5] = $row[com2onus5];
          $_SESSION[dbcom2onus6] = $row[com2onus6];
          $_SESSION[dbcom2onus7] = $row[com2onus7];
          $_SESSION[dbcom2onus8] = $row[com2onus8];
          $_SESSION[dbstartmonth3] = $row[startmonth3];
          $_SESSION[dbstartyear3] = $row[startyear3];
          $_SESSION[dbendmonth3] = $row[endmonth3];
          $_SESSION[dbendyear3] = $row[endyear3];
          $_SESSION[dbcompany3] = $row[company3];
          $_SESSION[dbposition3] = $row[position3];			
          $_SESSION[dbsalary3] = $row[xalary333];
          $_SESSION[dbcom3onus1] = $row[com3onus1];
          $_SESSION[dbcom3onus2] = $row[com3onus2];
          $_SESSION[dbcom3onus3] = $row[com3onus3];
          $_SESSION[dbcom3onus4] = $row[com3onus4];
          $_SESSION[dbcom3onus5] = $row[com3onus5];
          $_SESSION[dbcom3onus6] = $row[com3onus6];
          $_SESSION[dbcom3onus7] = $row[com3onus7];
          $_SESSION[dbcom3onus8] = $row[com3onus8];
          $_SESSION[dbedt1_from] = $row[edt1_from];
          $_SESSION[dbedt1_to] = $row[edt1_to];		
          $_SESSION[dbedt1_intitudename] = $row[edt1_intitudename];																													
          $_SESSION[dbedt1_gpa] = $row[edt1_gpa];
          $_SESSION[dbedt1_degree] = $row[edt1_degree];
          $_SESSION[dbedt1_faculty] = $row[edt1_faculty];
          $_SESSION[dbedt1_major] = $row[edt1_major];
          $_SESSION[dbedt1_minor] = $row[edt1_minor];
          $_SESSION[dbedt2_from] = $row[edt2_from];
          $_SESSION[dbedt2_to] = $row[to2];		
          $_SESSION[dbedt2_intitudename] = $row[edt2_intitudename];																													
          $_SESSION[dbedt2_gpa] = $row[edt2_gpa];
          $_SESSION[dbedt2_degree] = $row[edt2_degree];
          $_SESSION[dbedt2_faculty] = $row[fffaculty2];
          $_SESSION[dbedt2_major] = $row[mmmajor2];
          $_SESSION[dbedt2_minor] = $row[mmminor2];
          $_SESSION[dbedt3_from] = $row[edt3_from];
          $_SESSION[dbedt3_to] = $row[edt3_to];		
          $_SESSION[dbedt3_intitudename] = $row[edt3_intitudename];																													
          $_SESSION[dbedt3_gpa] = $row[edt3_gpa];
          $_SESSION[dbedt3_degree] = $row[edt3_degree];
          $_SESSION[dbedt3_faculty] = $row[edt3_faculty];
          $_SESSION[dbedt3_major] = $row[edt3_major];
          $_SESSION[dbedt3_minor] = $row[edt3_minor];
          $_SESSION[dbedt4_from] = $row[edt4_from];
          $_SESSION[dbedt4_to] = $row[edt4_to];		
          $_SESSION[dbedt4_intitudename] = $row[edt4_intitudename];																													
          $_SESSION[dbedt4_gpa] = $row[edt4_gpa];
          $_SESSION[dbedt4_degree] = $row[edt4_degree];
          $_SESSION[dbedt4_faculty] = $row[edt4_faculty];
          $_SESSION[dbedt4_major] = $row[edt4_major];
          $_SESSION[dbedt4_minor] = $row[edt4_minor];											
          $_SESSION[dbedt5_from] = $row[edt5_from];
          $_SESSION[dbedt5_to] = $row[edt5_to];		
          $_SESSION[dbedt5_intitudename] = $row[edt5_intitudename];																													
          $_SESSION[dbedt5_gpa] = $row[edt5_gpa];
          $_SESSION[dbedt5_degree] = $row[edt5_degree];
          $_SESSION[dbedt5_faculty] = $row[edt5_faculty];
          $_SESSION[dbedt5_major] = $row[edt5_major];
          $_SESSION[dbedt5_minor] = $row[edt5_minor];
          $_SESSION[db_intsalary1] = $row[intsalary1];
          $_SESSION[db_intsalary2] = $row[intsalary2];
          $_SESSION[db_intsalary3] = $row[intsalary3];
          $_SESSION[gd_ext1] = $row[extracur1];
          $_SESSION[gd_ext2] = $row[extracur2];
          $_SESSION[gd_ext3] = $row[extracur3];
          $_SESSION[gd_ext4] = $row[extracur4];																			
          $_SESSION[gd_ext5] = $row[extracur5];
          $_SESSION[gd_otherskill3] = $row[otherskill3];
          $_SESSION[gd_otherskill4] = $row[otherskill4];
          $_SESSION[gd_otherskill5] = $row[otherskill5];
          $_SESSION[gd_otherskill6] = $row[otherskill6];
          $_SESSION[gd_otherskill7] = $row[otherskill7];
          $_SESSION[gd_otherskill8] = $row[otherskill8];
                                                                  }

$SQL5 = "Select *  FROM  employee_resume_en  WHERE  idresume ='$_SESSION[resumeindex]'";
$result1= mysql_query($SQL5);
while ($qrow=mysql_fetch_array($result1)) {
          $mmmfirstname = $qrow['firstname'];
                                                          }

if    ($mmmfirstname != "")   {
       mysql_connect($host,$user,$password);mysql_select_db($databasename);
       mysql_query("SET NAMES TIS620");
       $SQL1 = "Select *  FROM  employee_resume_en  WHERE  idresume ='$_SESSION[resumeindex]'";
       $result01= mysql_query($SQL1);
       while ($xrow=mysql_fetch_array($result01)) {
          $_SESSION[kgfirstname] = $xrow['firstname'];
          $_SESSION[kglastname] = $xrow['lastname'];            
          $_SESSION[kgnationality] = $xrow['xxxnationality'];
          $_SESSION[kgaddress] = $xrow['xxxaddress'];
          $_SESSION[kgcareer] = $xrow['careerobjective'];
          $_SESSION[kgintposition1] = $xrow['interestingposition1'];
          $_SESSION[kgintposition2] = $xrow['interestingposition2'];
          $_SESSION[kgintposition3] = $xrow['interestingposition3'];
          $_SESSION[kghobby1] = $xrow[hobby1];
          $_SESSION[kghobby2] = $xrow[hobby2];
          $_SESSION[kghobby3] = $xrow[hobby3];
          $_SESSION[kghobby4] = $xrow[hobby4];
          $_SESSION[kghobby5] = $xrow[hobby5];                    
          $_SESSION[kgintitude1] = $xrow[edt1_intitudename];
          $_SESSION[kgfaculty1] = $xrow[fffaculty1];
          $_SESSION[kgmajor1] = $xrow[edt1_major];
          $_SESSION[kgminor1] = $xrow[edt1_minor];     
          $_SESSION[kgintitude2] = $xrow[edt2_intitudename];
          $_SESSION[kgfaculty2] = $xrow[fffaculty2];
          $_SESSION[kgmajor2] = $xrow[mmmajor2];
          $_SESSION[kgminor2] = $xrow[mmminor2];     
          $_SESSION[kgintitude3] = $xrow[edt3_intitudename];
          $_SESSION[kgfaculty3] = $xrow[edt3_faculty];
          $_SESSION[kgmajor3] = $xrow[edt3_major];
          $_SESSION[kgminor3] = $xrow[edt3_minor];
          $_SESSION[kgintitude4] = $xrow[edt4_intitudename];
          $_SESSION[kgfaculty4] = $xrow[edt4_faculty];
          $_SESSION[kgmajor4] = $xrow[edt4_major];
          $_SESSION[kgminor4] = $xrow[edt4_minor];
          $_SESSION[kgextracur1] = $xrow[extracur1];
          $_SESSION[kgextracur2] = $xrow[extracur2];
          $_SESSION[kgextracur3] = $xrow[extracur3];
          $_SESSION[kgextracur4] = $xrow[extracur4];																			
          $_SESSION[kgextracur5] = $xrow[extracur5];
          $_SESSION[kgotherskill1] = $xrow[ooootherskill1];
          $_SESSION[kgotherskill2] = $xrow[xxxotherskill2];
          $_SESSION[kgotherskill3] = $xrow[xxxotherskill3];
          $_SESSION[kgotherskill4] = $xrow[xxxotherskill4];
          $_SESSION[kgotherskill5] = $xrow[xxxotherskill5];
          $_SESSION[kgotherskill6] = $xrow[xxxotherskill6];
          $_SESSION[kgotherskill7] = $xrow[xxxotherskill7];
          $_SESSION[kgotherskill8] = $xrow[xxxotherskill8];
          $_SESSION[kgposition1] = $xrow[position1];
          $_SESSION[kgcompany1] = $xrow[company1];
          $_SESSION[kgcom1onus1] = $xrow[com1onus1];
          $_SESSION[kgcom1onus2] = $xrow[com1onus2];
          $_SESSION[kgcom1onus3] = $xrow[com1onus3];
          $_SESSION[kgcom1onus4] = $xrow[com1onus4];
          $_SESSION[kgcom1onus5] = $xrow[com1onus5];
          $_SESSION[kgcom1onus6] = $xrow[com1onus6];
          $_SESSION[kgcom1onus7] = $xrow[com1onus7];
          $_SESSION[kgcom1onus8] = $xrow[com1onus8];
          $_SESSION[kgposition2] = $xrow[ppposition2];
          $_SESSION[kgcompany2] = $xrow[cccompany2];
          $_SESSION[kgcom2onus1] = $xrow[com2onus1];
          $_SESSION[kgcom2onus2] = $xrow[com2onus2];
          $_SESSION[kgcom2onus3] = $xrow[com2onus3];
          $_SESSION[kgcom2onus4] = $xrow[com2onus4];
          $_SESSION[kgcom2onus5] = $xrow[com2onus5];
          $_SESSION[kgcom2onus6] = $xrow[com2onus6];
          $_SESSION[kgcom2onus7] = $xrow[com2onus7];
          $_SESSION[kgcom2onus8] = $xrow[com2onus8];
          $_SESSION[kgposition3] = $xrow[position3];
          $_SESSION[kgcompany3] = $xrow[company3];
          $_SESSION[kgcom3onus1] = $xrow[com3onus1];
          $_SESSION[kgcom3onus2] = $xrow[com3onus2];
          $_SESSION[kgcom3onus3] = $xrow[com3onus3];
          $_SESSION[kgcom3onus4] = $xrow[com3onus4];
          $_SESSION[kgcom3onus5] = $xrow[com3onus5];
          $_SESSION[kgcom3onus6] = $xrow[com3onus6];
          $_SESSION[kgcom3onus7] = $xrow[com3onus7];
          $_SESSION[kgcom3onus8] = $xrow[com3onus8];		
                                                                           } }

$bufferday = strval($_SESSION['dbbirthofdate']);
$yearyear = substr($bufferday,0,4);
$monthmonth = substr($bufferday,4,2);
$dayday = substr($bufferday,6,2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>Jobscyber</title>
<link href="style.css" rel="stylesheet" type="text/css" >
<?include("functions/show_user.php");?>
</head>
<body onload="Javascript: Check();">
<?  echo gheader(th,0,F);  ?>
<br>
<div align=center>
<table width="950" cellpadding="0" cellspacing="0" bgcolor="#78ce31" border="0">
<div align="center"><font class="PD9">Member Register</font></div><br />
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font><----- ช่องบังคับ</font></div></td>
      <td colspan="6">&nbsp;</td>
    </tr>
   <tr>
     <td><div align="left"><font class=PD3><font color="red">* &nbsp;</font>Title</font></div></td>
     <form action="employee_save_resume_en.php" method="post">
      <td colspan="6"><div align="left">
      <font class=PD10><?  echo  encodetitle_en($_SESSION[dbtitle]);   ?></font>										
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><span class="PD2">*</span><font class=PD10 style1> &nbsp;</font><span class="PD3">First Name</span></div></td>
      <td colspan="5"><div align="left">
        <input  type="text" name="firstname" size=12 class="PD3" value=<?echo $_SESSION[kgfirstname]; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>Last Name</font></div></td>
      <td colspan="5"><div align="left">
        <input  type="text" name="lastname" size=18 class="PD3"  value=<?echo $_SESSION[kglastname]; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color="red">*</font> &nbsp;Gender</font></div></td>
      <td colspan="5"><div align="left">
      <font class=PD10><? echo  encodegender_en($_SESSION[dbgender]);   ?></font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font><font class="PD3">Date of Birth</font></font></div></td>
      <td colspan="5"><div align="left">
      <font class=PD10><?=$dayday  ?> / <?=$monthmonth  ?> / <?=$yearyear  ?></font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; Weight</font></div></td> 
      <td colspan="5"><div align="left"><font class=PD10>
      <?  if   ($_SESSION[dbweight] != "")      {   
                  echo $_SESSION[dbweight]."&nbsp;&nbsp;Kg.";
                                                                    }	
             else  echo "-";     ?>		  
    </font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; Height</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
      <?  if   ($_SESSION[dbheight] != "")      {   
                  echo $_SESSION[dbheight]."&nbsp;&nbsp;cm.";
                                                                    }	
             else  echo "-";     ?>	
    </font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;ID No / Passpost No</font></div></td>
      <td colspan="5"><div align="left">
       <font class=PD10><?=$_SESSION[dbpasspostid];  ?></font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;Nationality</font></div></td>
      <td colspan="5"><div align="left">
        <input  type="text" name="nationality" size=20  class="PD3" value=<?echo $_SESSION['kgnationality']; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;Marital Status</font></div></td>
      <td colspan="5"><div align="left">
      <font class=PD10><?=encodemarital_en($_SESSION[dbmarital]);    ?></font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp;&nbsp;&nbsp;Military Status</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
      <?=encodemilitary_en($_SESSION[dbmilitary]);   ?></font>
      </div></td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color=red>* &nbsp;</font>Contact Address</font></div></td>
      <td colspan="5"><div align="left">
        <input name="address" type="text" class="PD3" size="60"  value=<?echo $_SESSION['kgaddress']; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp;&nbsp; District</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
      <?=encodedistrict_en($_SESSION[dbdistrict]);   ?>
      </font> </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>Province</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
      <?=encodeprovince_en($_SESSION['dbprovince']);   ?></font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> <font color="red">*</font>&nbsp; Post Code</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10><?=$_SESSION[dbpostcode];   ?></font>

      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; Country</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>Thailand</font>
      </div></td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color="red">*</font>&nbsp; Email Address</font></div></td>
      <td colspan="5"><div align="left">
        <font class=PD10><?=$_SESSION[dbemail];  ?></font>
        </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; Contact Number</font></div></td>
      <td colspan="5"></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;Home</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
      <?  if  ($_SESSION[dbhome] == "")   {
                 echo  "-";                        }
      else  {  echo $_SESSION[dbhome];   }  ?>
      </font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font color="red">*</font>&nbsp;Mobile</font></div></td>
      <td colspan="5"><div align="left">
      <font class=PD10><?=$_SESSION[dbmobile];   ?></font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Offfice</font></div></td>
      <td colspan="5"><div align="left">
      <font class=PD10>
      <?  if  ($_SESSION[dboffice] == "")   {
                 echo  "-";                                }
            else  {  echo $_SESSION[dboffice];   }  ?>
      </font>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fax์</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
       <?  if  ($_SESSION[dbfax] == "")   {
                   echo  "-";                                 }
             else  {  echo $_SESSION[dbfax];   }  ?>
      </font></div></td>
    </tr>
    <tr>
      <td colspan="5"><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color="red">*</font>&nbsp; Driver License</font></div></td>
      <td colspan="5"><div align="left"><font class="PD10">
<?
      if  ($_SESSION['dbmotorcycle'] == "T")  {
           echo "Motercycle"."&nbsp; &nbsp";
                                                                            }
      if  ($_SESSION['dbcar'] == "T")  {
           echo "Car"."&nbsp; &nbsp";
	                                            }
      if  ($_SESSION['dbtruck'] == "T")  {
           echo "Truck";
                                                                  }
?>	 
</font></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color="red">*</font>&nbsp; Do you own or have personal use of a vehicle</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
<?
      if  ($_SESSION[dbpersonalvehicle] == "T")   {
           echo "Yes";
                                                                                    }
      else  {   echo "-";   }	        
?>	 	 
</font></div></td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color="red">*</font> &nbsp;Career Objective</font></div></td>
      <td><div align="left">
<select name="careerdepartment_en" class="PD3">
<option value=0>
<?  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx))  { 
           if   ($_SESSION['careerdepartment'] == $rowzz[id])      {   
                 $ng[$i] = "selected";	                        }	?>

<option value=<?=$rowzz[id];  ?> &nbsp; <?=$ng[$i];  ?>><?=$rowzz[departmentname_en];  ?><br>
<?       $i++;                                                           }   ?>
</select>      
        <input type="text" name="career_en" size="30"   value=<?echo $_SESSION['kgcareer']; ?>>
      </div>
<?
     for ($i=0;$i<=15;$i++)   {
	      if  ($_SESSION['yearexp'] == $i)   {
		      $Ypoint[$i] = "selected";
			                                               }
                                          }												  
?></td><td>
<font class=PD3>experience &nbsp; &nbsp; <select name="yearexp">
<option value="0" &nbsp; <?=$Ypoint[0]; ?>>0
<option value="1" &nbsp; <?=$Ypoint[1]; ?>>1
<option value="2" &nbsp; <?=$Ypoint[2]; ?>>2
<option value="3" &nbsp; <?=$Ypoint[3]; ?>>3
<option value="4" &nbsp; <?=$Ypoint[4]; ?>>4
<option value="5" &nbsp; <?=$Ypoint[5]; ?>>5
<option value="6" &nbsp; <?=$Ypoint[6]; ?>>6
<option value="7" &nbsp; <?=$Ypoint[7]; ?>>7
<option value="8" &nbsp; <?=$Ypoint[8]; ?>>8
<option value="9" &nbsp; <?=$Ypoint[9]; ?>>9
<option value="10" &nbsp; <?=$Ypoint[10]; ?>>10
<option value="11" &nbsp; <?=$Ypoint[11]; ?>>11
<option value="12" &nbsp; <?=$Ypoint[12]; ?>>12
<option value="13" &nbsp; <?=$Ypoint[13]; ?>>13
<option value="14" &nbsp; <?=$Ypoint[14]; ?>>14
<option value="15" &nbsp; <?=$Ypoint[15]; ?>>15
</select>&nbsp; ปี
</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>Interesting Position(s)</font></div></td>
      <td colspan="5">
      <div align="left">
              <table border=0 cellpadding="0" cellspacing="0">
              <tr>
              <td width=278><div align="center" class="PD3">English Language Only </div></td>
              <td width=62>&nbsp;</td>
              </tr>
              </table>
      </div>	 </td>
    </tr>
    <tr>
      <td><div align="left"><font class="PD3"><font color="red">*</font>&nbsp;1</font></div></td>
      <td><div align="left">
<select name="intdepartment1_en" class="PD3">
<option value=0>
<?
$_SESSION[gd_intposition1] = "";  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx))  { 
           if   ($_SESSION['intdepartment1'] == $rowzz[id])      {   
                 $wqq[$i] = "selected";	                        }	?>

<option value=<?=$rowzz[id];  ?> &nbsp; <?=$wqq[$i];  ?>><?=$rowzz[departmentname_en];  ?><br>
<?       $i++;                                                           }   ?>
</select>      
        <input type="text" name="intposition1" size="30"   value=<?echo $_SESSION['kgintposition1']; ?>>
      </div></td><td><div align="left">
<font class="PD10">&nbsp; &nbsp; <?echo $_SESSION['db_intsalary1']; ?>&nbsp; bath</font></div></td>
</tr>

    <?   if   ($_SESSION[intposition2] != "")     {     ?>
    <tr>
      <td><div align="left"><font class="PD3"><font color="#78CE41">*</font>&nbsp;2</font></div></td>
      <td><div align="left">
<select name="intdepartment2_en" class="PD3">
<option value=0>
<?
$_SESSION[gd_intposition2] = "";  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx))  { 
           if   ($_SESSION['intdepartment2'] == $rowzz[id])      {   
                 $nxx[$i] = "selected";	                        }	?>

<option value=<?=$rowzz[id];  ?> &nbsp; <?=$nxx[$i];  ?>><?=$rowzz[departmentname_en];  ?><br>
<?       $i++;                                                           }   ?>
</select>      
        <input type="text" name="intposition2" size="30"   value=<?echo $_SESSION['kgintposition2']; ?>>
      </div></td><td><div align="left">
<font class="PD10">&nbsp; &nbsp; <?echo $_SESSION['db_intsalary2']; ?>&nbsp; bath</font></div></td>
</tr>
    <?                                                                    }     ?>
    <?   if   ($_SESSION[intposition3] != "")     {     ?>    
    <tr>
      <td><div align="left"><font class="PD3"><font color="#78CE41">*</font>&nbsp;3</font></div></td>
      <td><div align="left">
<select name="intdepartment3_en" class="PD3">
<option value=0>
<?
$_SESSION[gd_intposition3] = "";  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx))  { 
           if   ($_SESSION['intdepartment3'] == $rowzz[id])      {   
                 $pxx[$i] = "selected";	                        }	?>

<option value=<?=$rowzz[id];  ?> &nbsp; <?=$pxx[$i];  ?>><?=$rowzz[departmentname_en];  ?><br>
<?       $i++;                                                           }   ?>
</select>      
        <input type="text" name="intposition3" size="30"   value=<?echo $_SESSION['kgintposition3']; ?>>
      </div></td>
              <td><div align="left"><font class="PD10">&nbsp; &nbsp; <?echo $_SESSION['db_intsalary3']; ?>&nbsp; bath</font></div></td>
              </tr>
    <?                                                                    }     ?>    
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3> &nbsp; &nbsp; Hobbies </font></div></td>
      <td colspan="5"></td>
    </tr>
    <tr>
      <td><font class="PD3"><font color="red">*</font> 1</font></td>
      <td colspan="5"><div align="left">
        <input  type=text name="hobby1" size=44  class="PD3"  value=<?echo $_SESSION['kghobby1']; ?>>
      </div></td>
    </tr> 
    <tr>
      <td><font class="PD3"><font color="red">*</font> 2</font></td>
      <td colspan="5"><div align="left">
        <input  type=text name="hobby2" size=44  class="PD3"  value=<?echo $_SESSION['kghobby2']; ?>>
      </div></td>
    </tr> 
    <?   if   ($_SESSION[hobby3] != "")     {     ?>    
    <tr>
      <td><font class="PD3"><font color="#78CE41">*</font> 3</font></td>
      <td colspan="5"><div align="left">
        <input  type=text name="hobby3" size=44  class="PD3"  value=<?echo $_SESSION['kghobby3']; ?>>
      </div></td>
    </tr>
    <?                                                             }     ?>
    <?   if   ($_SESSION[hobby4] != "")     {     ?>             
    <tr>
      <td><font class="PD3"><font color="#78CE41">*</font> 4</font></td>
      <td colspan="5"><div align="left">
        <input  type=text name="hobby4" size=44  class="PD3"  value=<?echo $_SESSION['kghobby4']; ?>>
      </div></td>
    </tr> 
    <?                                                             }     ?>    
    <?   if   ($_SESSION[hobby5] != "")     {     ?>    
    <tr>
      <td><font class="PD3"><font color="#78CE41">*</font> 5</font></td>
      <td colspan="5"><div align="left">
        <input  type=text name="hobby5" size=44  class="PD3"  value=<?echo $_SESSION['kghobby5']; ?>>
      </div></td>
    </tr>
    <?                                                              }     ?>             
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3>&nbsp; &nbsp; Can you work outside Bangkok?</font></div></td>
      <td colspan="5"><div align="left"><font class=PD10>
<?
      if   ($_SESSION[dboutsidebangkok] == "T")   {
            echo "Yes";
                                                                                     }
      else  {   echo "No";   }
                                                                  	        
?>	 
    </font></div></td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3>&nbsp; &nbsp; Can you work outside Thailand?</font></div></td>
      <td colspan=5><div align="left"><font class=PD10>
<?
      if   ($_SESSION[dboutsidethailand] == "T")   {
            echo "Yes";
                                                                                    }
      else  {   echo "No";   }	        
?>	 	 
    </font></div></td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td colspan=5><div align=left><font class=pd4><b class="PD10">&nbsp;&nbsp;&nbsp;</b></font><span class="PD3">Education BackGround</span><font class=pd4><br />
      </font></div></td>
    </tr>
    <tr>
      <td colspan=5><div align=left><font class=pd4><b class="PD10">&nbsp;&nbsp;&nbsp;</b></font><span class="PD3">(1)</span><font class=pd4><br />
      </font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font> &nbsp;From</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt1_from];    ?> - <?=$_SESSION[dbedt1_to];    ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; Institution Name</font></div></td>
      <td colspan="5"><div align=left><input  type=text name="institude1" size=40  class="PD3" value=<?echo $_SESSION[kgintitude1]; ?>></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">* </font>&nbsp;GPA</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt1_gpa];    ?></font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font> &nbsp;Degree</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=encodedeegree($_SESSION[dbedt1_degree]);   ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font> &nbsp;Faculty</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name="faculty1" size=30  class="PD3" value=<?echo $_SESSION['kgfaculty1']; ?>>
      </div></td>
    </tr>
    <?   if  ($_SESSION[dbedt1_major] != "")     {   ?>
    <tr>
      <td><div align=left><font class=PD3>  &nbsp;&nbsp;  &nbsp;Major</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name="major1" size=30  class="PD3" value=<?echo $_SESSION['kgmajor1']; ?>>
      </div></td>
    </tr>
    <?                                                                 }   ?> 
    <?   if  ($_SESSION[dbedt1_minor] != "")     {    ?>       
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Minor</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name="minor1" size=30  class="PD3"  value=<?echo $_SESSION['kgminor1']; ?>>
      </div></td>
    </tr>
    <?                                                                 }   ?>    
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?   if  ($_SESSION[dbedt2_from] != ""  and $_SESSION[dbedt2_to] != "")   {     ?>
    <tr>
      <td colspan=5><div align=left><font class=pd4><b class="PD10">&nbsp;&nbsp;&nbsp;</b></font><span class="PD3">(2)</span><font class=pd4><br />
      </font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;From</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt2_from];  ?> - <?=$_SESSION[dbedt2_to];  ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp; Institution Name</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name="institude2"  size=40 class="PD3"  value=<?echo $_SESSION['kgintitude2']; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;GPA</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt2_gpa];    ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Degree</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=encodedeegree($_SESSION[dbedt2_degree]);    ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp;&nbsp;Faculty</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=faculty2 size=30 class="PD3" value=<?echo $_SESSION['kgfaculty2']; ?>>
      </div></td>
    </tr>
    <?   if  ($_SESSION[dbedt2_major] != "")     {   ?>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Major</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=major2 size=30 class="PD3"  value=<?echo $_SESSION['kgmajor2']; ?>>
      </div></td>
    </tr>
    <?                                                                 }   ?>    
    <?   if  ($_SESSION[dbedt2_minor] != "")     {   ?>    
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Minor</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=minor2 size=30 class="PD3"  value=<?echo $_SESSION['kgminor2']; ?>>
      </div></td>
    </tr>
    <?                                                                 }   ?>    
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?                                                                                                                        }   ?>
    <?   if   ($_SESSION[dbedt3_from] != ""  and $_SESSION[dbedt3_to] != "")        {    ?>
    <tr>
      <td colspan=5><div align=left><font class=pd4><b class="PD10">&nbsp;&nbsp;&nbsp;</b></font><span class="PD3">(3)</span><font class=pd4><br />
      </font></div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;From</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt3_from];   ?> - <?=$_SESSION[dbedt3_to];   ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Institution Name</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=institude3 size=40 class="PD3"  value=<?echo $_SESSION['kgintitude3']; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;GPA</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt3_gpa];    ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Degree</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=encodedeegree($_SESSION[dbedt3_degree]);   ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Faculty</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=faculty3 size=30 class="PD3"  value=<?echo $_SESSION['kgfaculty3']; ?>>
      </div></td>
    </tr>
    <?   if  ($_SESSION[dbedt3_major] != "")     {   ?>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Major</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=major3 size=30 class="PD3"  value=<?echo $_SESSION['kgmajor3']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
    <?   if  ($_SESSION[dbedt3_minor] != "")     {   ?>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Minor</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=minor3 size=30 class="PD3"  value=<?echo $_SESSION['kgminor3']; ?>>
      </div></td>
    </tr>
    <?                                                                 }  ?>    
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?                                                                                                                        }   ?> 
    <?   if   ($_SESSION[dbedt4_from] != ""  and $_SESSION[dbedt4_to] != "")        {    ?>    
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;From</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt4_from];   ?> - <?=$_SESSION[dbedt4_to];   ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Institution Name</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=institude4 size=40 class="PD3"  value=<?echo $_SESSION['kgintitude4']; ?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;GPA</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=$_SESSION[dbedt4_gpa];    ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Degree</font></div></td>
      <td colspan="5"><div align=left><font class="PD10"><?=encodedeegree($_SESSION[dbedt4_degree]);   ?></font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Faculty</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=faculty4 size=30 class="PD3"  value=<?echo $_SESSION['kgfaculty4']; ?>>
      </div></td>
    </tr>
    <?   if  ($_SESSION[dbedt4_major] != "")     {   ?>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Major</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=major4 size=30 class="PD3"  value=<?echo $_SESSION['kgmajor4']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
    <?   if  ($_SESSION[dbedt4_minor] != "")     {   ?>
    <tr>
      <td><div align=left><font class=PD3> &nbsp;&nbsp; &nbsp;Minor</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=minor4 size=30 class="PD3"  value=<?echo $_SESSION['kgminor4']; ?>>
      </div></td>
    </tr>
    <?                                                                 }  ?>    
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?                                                                                                                        }   ?>   
    <?   if  ( $_SESSION[gd_ext1] != ""  or  $_SESSION[gd_ext2] != ""  or  $_SESSION[gd_ext3] != ""  or  $_SESSION[gd_ext4] != ""  or  $_SESSION[gd_ext5] != ""  )     {   ?>
    <tr>
      <td valign=top><div align=left><font class=PD3> &nbsp; &nbsp; Extracurricular Activities<br>
      </font></div></td>
      <td colspan="5">&nbsp;</td>
    </tr>
    <?   if  ($_SESSION[gd_ext1] != "")     {   ?>    
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 1</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=extracur1 size=55  class="PD3"  value=<?echo $_SESSION['kgextracur1']; ?>>
      </div></td>
    </tr>
    <?                                                       }   ?>    
    <?   if  ($_SESSION[gd_ext2] != "")     {   ?>     
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 2</font></div></td>
      <td colspan="5">
	 <div align=left>
        <input  type=text name=extracur2 size=55  class="PD3"  value=<?echo $_SESSION['kgextracur2']; ?>>
      </div>	 </td>
    </tr>
    <?                                                       }   ?>    
    <?   if  ($_SESSION[gd_ext3] != "")     {   ?>     
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 3</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=extracur3 size=55  class="PD3"  value=<?echo $_SESSION['kgextracur3']; ?>>
      </div></td>
    </tr>
    <?                                                       }   ?>    
    <?   if  ($_SESSION[gd_ext4] != "")     {   ?>                 
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 4</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=extracur4 size=55  class="PD3"  value=<?echo $_SESSION['kgextracur4']; ?>>
      </div></td>
    </tr>
    <?                                                       }   ?>
    <?   if  ($_SESSION[gd_ext5] != "")     {   ?>      
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 5</font></div></td>
      <td colspan="5"><div align=left>
        <input  type=text name=extracur5 size=55  class="PD3"  value=<?echo $_SESSION['kgextracur5']; ?>>
      </div></td>
    </tr>
    <?                                                       }   ?>             
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?                                                                                                                                                                                                                                                                           }   ?> 
    <tr>
      <td valign=top><div align=left> <font color="red" class=PD3></font><font class=PD3>&nbsp; &nbsp;</font></div></td>
      <td colspan="5"><div align=left>
        <table border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width=100><div align="left"><font class=PD3>Language</font></div></td>
            <td width=100><div align="left"><font class=PD3>Listen</font></div></td>
            <td width=100><div align="left"><font class=PD3>Speak</font></div></td>
            <td width=100><div align="left"><font class=PD3>Read</font></div></td>
            <td width=100><div align="left"><font class=PD3>Write</font></div></td>
          </tr>
        </table>
      </div></td>
    </tr>

    <tr>
      <td valign=top><div align="center"><font class="PD3"><font color="red">*</font> 1</font></div></td>
      <td colspan="5">
      <table border=0 align="left" cellpadding="0" cellspacing="0">
      <tr>
      <td width=100><div align="left"><font class="PD10"><?=encodelanguage_en($_SESSION[dblanguage1]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dblisten1]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbspeak1]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbread1]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbwrite1]);   ?></font></div></td>	 
      </tr>
	 </table>	 </td>
    </tr>
    <?   if   ($_SESSION[dblanguage2] != 0)   {    ?>
    <tr>
      <td valign=top><div align="center"><font class="PD3">&nbsp; 2</font></div></td>
      <td colspan="5">
      <table border=0 align="left" cellpadding="0" cellspacing="0">
      <tr>
      <td width=100><div align="left"><font class="PD10"><?=encodelanguage_en($_SESSION[dblanguage2]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dblisten2]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbspeak2]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbread2]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbwrite2]);   ?></font></div></td>	 
      </tr>
	 </table>	 </td>
    </tr>
    <?   }   ?>
    <?   if   ($_SESSION[dblanguage3] != 0)   {    ?>    
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 3</font></div></td>
      <td colspan="5">
      <table border=0 align="left" cellpadding="0" cellspacing="0">
      <tr>
      <td width=100><div align="left"><font class="PD10"><?=encodelanguage_en($_SESSION[dblanguage3]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dblisten3]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbspeak3]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbread3]);   ?></font></div></td>
      <td width=100><div align="left"><font class="PD10"><?=encodelavel_en($_SESSION[dbwrite3]);   ?></font></div></td>	 
      </tr>
	 </table>	 </td>
    </tr>
    <?  }   ?>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font>&nbsp;Typing Skill</font></div></td>
      <td colspan="5"><div align=left><font class=PD3>English &nbsp;<font class=PD10><?=$_SESSION[dbenglishpermin];  ?></font>&nbsp; words
        / min &nbsp; &nbsp; &nbsp; &nbsp; Thai &nbsp;<font class=PD10><?=$_SESSION[dbthaipermin];  ?></font>&nbsp; words
        / min</font></div></td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font>&nbsp; Computer Skill</font></div></td>
      <td><div align=left><font class=PD10><?=encodecomputerskill($_SESSION[dbcomputerskill]);  ?></font></div></td>
    </tr>    
    <tr>
      <td colspan=5><div center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3><font color="red">*</font>&nbsp; Other Skills<br>
        &nbsp; &nbsp; </font></div></td>
      <td colspan="8">
	 <div align=left>
              <table border="0" cellpadding="0"  cellspacing="0">
              <tr>
                   <td><div align=center><font class=PD3><font color="red">*</font>&nbsp;1</font></div></td>
                   <td><div align=center><font class=PD3><font color="red">*</font>&nbsp;2</font></div></td>
                   <?   if  ($_SESSION[gd_otherskill3] != "")    {    ?>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;3</font></div></td>
                   <?                                                                }    ?>			    
                   <?   if  ($_SESSION[gd_otherskill4] != "")    {    ?>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;4</font></div></td>
                   <?                                                                }    ?>			    
             </tr>
              <tr>
                   <td><input  type="text" name="otherskill1" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill1']; ?>></td>
                   <td><input  type="text" name="otherskill2" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill2']; ?>></td>
                   <?   if  ($_SESSION[gd_otherskill3] != "")    {    ?>
                   <td><input  type="text" name="otherskill3" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill3']; ?>></td>
                   <?                                                                }    ?>			    
                   <?   if  ($_SESSION[gd_otherskill4] != "")    {     ?>
                   <td><input  type="text" name="otherskill4" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill4']; ?>></td>
                   <?                                                                }    ?>            
             </tr>
              <tr>
                   <?   if  ($_SESSION[gd_otherskill5] != "")    {    ?>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;5</font></div></td>
                   <?                                                                }    ?>			    
                   <?   if  ($_SESSION[gd_otherskill6] != "")    {    ?>			    
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;6</font></div></td>
                   <?                                                                }    ?>			    
                   <?   if  ($_SESSION[gd_otherskill7] != "")    {    ?>			    
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;7</font></div></td>
                   <?                                                                }    ?>			    
                   <?   if  ($_SESSION[gd_otherskill8] != "")    {    ?>			    
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;8</font></div></td>
                   <?                                                                }    ?>			    
             </tr>
              <tr>
                   <?   if  ($_SESSION[gd_otherskill5] != "")    {    ?>
                   <td><input  type="text" name="otherskill5" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill5']; ?>></td>
                   <?                                                                }    ?>			    
                   <?   if  ($_SESSION[gd_otherskill6] != "")    {    ?>
                   <td><input  type="text" name="otherskill6" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill6']; ?>></td>
                   <?                                                                }   ?>
                   <?   if  ($_SESSION[gd_otherskill7] != "")    {    ?>
                   <td><input  type="text" name="otherskill7" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill7']; ?>></td>
                   <?                                                                }   ?>
                   <?   if  ($_SESSION[gd_otherskill8] != "")    {    ?>
                   <td><input  type="text" name="otherskill8" size="21"  class="PD3" value=<?echo $_SESSION['kgotherskill8']; ?>></td>
                   <?                                                                }   ?>			    
             </tr>		   		   		   
             </table>
      </div>	 </td>
    </tr>
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
 <?  if   ($_SESSION[dbstartmonth1] != "0"  and  $_SESSION[dbendmonth1] != "0" and $_SESSION[dbcompany1] != "")    {     ?>
    <tr>
      <td width="291"><div align="left"><font class="PD3">&nbsp; &nbsp;Work Experiences 1</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date - End Date</font></div></td>
      <td colspan="5"><div align="left">
      <font class="PD10"><?=encodemonth_en($_SESSION[dbstartmonth1]);   ?>/<?=$_SESSION[dbstartyear1]-543;   ?> - <?=encodemonth_en($_SESSION[dbendmonth1]);   ?>/<?=$_SESSION[dbendyear1]-543;   ?></font>
      </td>
    </tr>
    <?  if   ($_SESSION[dbcompany1] != "")    {   ?>    
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company</font></div></td>
      <td  colspan="5"><div align=left><input  type="text" name="company1" size="40" class="PD3" value=<?echo $_SESSION['kgcompany1']; ?>>
      </div></td>
    </tr>
    <?                                                                     }   ?> 
    <?  if   ($_SESSION[dbposition1] != "")    {   ?>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="position1" size="25" class="PD3" value=<?echo $_SESSION['kgposition1']; ?>>
      </div></td>
    </tr>
    <?                                                                   }   ?>
    <?  if   ($_SESSION[dbsalary1] != "")    {   ?>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary</font></div></td>
      <td  colspan="5"><div align="left"><font class="PD10"><?=$_SESSION[dbsalary1];   ?>&nbsp; &nbsp; Baht. &nbsp; &nbsp; &nbsp; &nbsp;<?  if  ($_SESSION[dbshowsalary1] != "T")   {   echo  "( show  to resume )";   }   ?> </font>
      </div></td>
    </tr>
    <?                                                                   }   ?>
    <?  if   ($_SESSION[dbcom1onus1] != "")    {   ?>    
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 1</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus1" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus1']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?> 
    <?  if   ($_SESSION[dbcom1onus2] != "")    {   ?>        
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 2</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus2" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus2']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom1onus3] != "")    {   ?>             
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 3</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus3" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus3']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom1onus4] != "")    {   ?>         
    <tr>
     <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 4</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus4" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus4']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom1onus5] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 5</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus5" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus5']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom1onus6] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 6</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus6" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus6']; ?>>
      </div></td>
    </tr> 
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom1onus7] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 7</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus7" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus7']; ?>>
      </div></td>
    </tr> 
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom1onus8] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 8</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com1onus8" size="55" class="PD3" value=<?echo $_SESSION['kgcom1onus8']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>     
    <tr> 
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?                                                                                                                              }     ?> 

    <?  if   ($_SESSION[dbstartmonth2] != "0"  and  $_SESSION[dbendmonth2] != "0" and $_SESSION[dbcompany2] != "")    {     ?>
    <tr>
      <td width="291"><div align="left"><font class="PD3">&nbsp; &nbsp;Work Experiences 2</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date - End Date</font></div></td>
      <td colspan="5"><div align="left">
      <font class="PD10"><?=encodemonth_en($_SESSION[dbstartmonth2]);   ?>/<?=$_SESSION[dbstartyear2]-543;   ?> - <?=encodemonth_en($_SESSION[dbendmonth2]);   ?>/<?=$_SESSION[dbendyear2]-543;   ?></font>
      </td>
    </tr>
    <?  if   ($_SESSION[dbcompany2] != "")    {   ?>    
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company</font></div></td>
      <td  colspan="5"><div align=left><input  type="text" name="company2" size="40" class="PD3" value=<?echo $_SESSION['kgcompany2']; ?>>
      </div></td>
    </tr>
    <?                                                                     }   ?> 
    <?  if   ($_SESSION[dbposition2] != "")    {   ?>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="position2" size="25" class="PD3" value=<?echo $_SESSION['kgposition2']; ?>>
      </div></td>
    </tr>
    <?                                                                   }   ?>
    <?  if   ($_SESSION[dbsalary2] != "")    {   ?>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary</font></div></td>
      <td  colspan="5"><div align="left"><font class="PD10"><?=$_SESSION[dbsalary2];   ?>&nbsp; &nbsp; Baht. &nbsp; &nbsp; &nbsp; &nbsp;<?  if  ($_SESSION[dbshowsalary2] != "T")   {   echo  "( show  to resume )";   }   ?> </font>
      </div></td>
    </tr>
    <?                                                                   }   ?>
    <?  if   ($_SESSION[dbcom2onus1] != "")    {   ?>    
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 1</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus1" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus1']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?> 
    <?  if   ($_SESSION[dbcom2onus2] != "")    {   ?>        
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 2</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus2" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus2']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom2onus3] != "")    {   ?>             
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 3</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus3" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus3']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom2onus4] != "")    {   ?>         
    <tr>
     <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 4</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus4" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus4']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom2onus5] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 5</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus5" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus5']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom2onus6] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 6</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus6" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus6']; ?>>
      </div></td>
    </tr> 
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom2onus7] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 7</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus7" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus7']; ?>>
      </div></td>
    </tr> 
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbcom2onus8] != "")    {   ?>         
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 8</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com2onus8" size="55" class="PD3" value=<?echo $_SESSION['kgcom2onus8']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <tr> 
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>     
    <?                                                                                                                              }     ?> 
    <?   if   ($_SESSION[dbstartmonth3] != "0"  and  $_SESSION[dbstartyear3] != "0" and $_SESSION[dbcompany3] != "")    {     ?>                                                   
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td width="291"><div align="left"><font class="PD3">&nbsp; &nbsp;Work Experiences 3</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date - End Date</font></div></td>
      <td colspan="5"><div align="left"><font class="PD10"><?=encodemonth_en($_SESSION[dbstartmonth3]);   ?>/<?=$_SESSION[dbstartyear3]-543;   ?> - <?=encodemonth_en($_SESSION[dbendmonth3]);   ?>/<?=$_SESSION[dbendyear3]-543;   ?></font></div></td>
    </tr>
    <?  if   ($_SESSION[dbcompany3] != "")    {   ?>    
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company</font></div></td>
      <td  colspan="5"><div align=left><input  type="text" name="company3" size="40" class="PD3" value=<?echo $_SESSION['kgcompany3']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <?  if   ($_SESSION[dbposition3] != "")    {   ?>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="position3" size="25" class="PD3" value=<?echo $_SESSION['kgposition3']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salary</font></div></td>
      <td  colspan="5"><div align="left"><font class="PD10"><?=$_SESSION[dbsalary3];   ?>&nbsp; &nbsp; Baht. &nbsp; &nbsp; &nbsp; &nbsp;<?  if  ($_SESSION[dbshowsalary3] != "T")   {   echo  "( show  to resume )";   }   ?> </font></div></td>
    </tr>
    <?  if   ($_SESSION[dbcom3onus1] != "")    {   ?>     
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 1</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus1" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus1']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
    <?  if   ($_SESSION[dbcom3onus2] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 2</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus2" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus2']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>        
    <?  if   ($_SESSION[dbcom3onus3] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 3</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus3" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus3']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
    <?  if   ($_SESSION[dbcom3onus4] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 4</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus4" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus4']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
    <?  if   ($_SESSION[dbcom3onus5] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 5</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus5" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus5']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
    <?  if   ($_SESSION[dbcom3onus6] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 6</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus6" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus6']; ?>>
      </div></td>
    </tr> 
    <?                                                                }   ?>    
    <?  if   ($_SESSION[dbcom3onus7] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 7</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus7" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus7']; ?>>
      </div></td>
    </tr> 
    <?                                                                }   ?>    
    <?  if   ($_SESSION[dbcom3onus8] != "")    {   ?> 
    <tr>
      <td><div align=left><font class=PD3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job description 8</font></div></td>
      <td  colspan="5"><div align="left"><input  type="text" name="com3onus8" size="55" class="PD3" value=<?echo $_SESSION['kgcom3onus8']; ?>>
      </div></td>
    </tr>
    <?                                                                }   ?>    
                       
    <tr>
      <td colspan=5><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <?    }    ?>     
      <td valign=top>&nbsp;</td>
      <td colspan="5"><div align=left>
          <input  type="submit"  name="gcontinue"  value="ดำเนินการต่อไป" /><button onclick="Javascript: form.action = 'employee_post_resume_th.php'">กลับ</button>      
      </div>	 </td>
    </tr>
  </form>
</table>
<br>
   
<?  echo  gfooter();  ?>
</div>
</body>
</html>

<?
     switch  ($_SESSION['return2alert'])     {
                 case  1  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง firstname')</script>";  break;
                 case  2  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง lastname')</script>";  break;
                 case  3  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง nationality')</script>";  break;
                 case  4  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง address')</script>";  break;
                 case  5  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง career objective')</script>";  break;
                 case  6  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง interesting position 1')</script>";  break;
                 case  7  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง interesting position 2')</script>";  break;
                 case  8  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง interesting position 3')</script>";  break;						   						   
                 case  9  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง hobby 1')</script>";  break;
                 case  10  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง hobby 2')</script>";  break;
                 case  11  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง hobby 3')</script>";  break;						   						   						   						   						   
                 case  12 :  echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง hobby 4')</script>";  break;						   
                 case  13 :  echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง hobby 5')</script>";  break;
                 case  14 :  echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง institude 1')</script>";  break;						   
                 case  15 :  echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง faculty 1')</script>";  break;
                 case  16  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง major 1')</script>";  break;
                 case  17  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง minor 1')</script>";  break;
                 case  18  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง institude 2')</script>";  break;
                 case  19  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง faculty 2')</script>";  break;
                 case  20  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง major 2')</script>";  break;
                 case  21  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง minor 2')</script>";  break;
                 case  22  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง institude 3')</script>";  break;
                 case  23  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง faculty 3')</script>";  break;
                 case  24  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง major 3')</script>";  break;
                 case  25  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง minor 3')</script>";  break;
                 case  26  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง institude 4')</script>";  break;
                 case  27  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง faculty 4')</script>";  break;
                 case  28  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง major 4')</script>";  break;
                 case  29  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง minor 4')</script>";  break;
                 case  30  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง Extracurricular Activities 1')</script>";  break;						   						   						   						   						   						   						   						   						   						   						   						   						   						   						   
                 case  31  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง Extracurricular Activities 2')</script>";  break;
                 case  32  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง Extracurricular Activities 3')</script>";  break;
                 case  33  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง Extracurricular Activities 4')</script>";  break;
                 case  34  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง Extracurricular Activities 5')</script>";  break;
                 case  35  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 1')</script>";  break;
                 case  36  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 2')</script>";  break;
                 case  37  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 3')</script>";  break;			  
                 case  38  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 4')</script>";  break;
                 case  39  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 5')</script>";  break;
                 case  40  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 6')</script>";  break;
                 case  41  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 7')</script>";  break;
                 case  42  : echo  "<script>alert('ไม่ได้ใส่ข้อมูลในช่อง  Other Skills 8')</script>";  break;
 
                                                           		}
$_SESSION['return2alert'] = 0;

?>