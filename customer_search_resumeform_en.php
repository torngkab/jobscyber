<?
session_start();
       include("Allfunction.inc");
       mysql_connect($host,$user,$password);mysql_select_db($databasename);
       mysql_query("SET NAMES TIS620");
       $SQL1 = "Select *  FROM  employee_resume_en  WHERE  idresume ='$_GET[resumeindex]'";
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
                                                                           }
$_SESSION['age'] = (date("Y")+543)-$_SESSION['birthyear'];

?>

<?
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$SQL = "Select *  FROM  emp_img  WHERE  idresume = '$_SESSION[resumeindex]'";
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {
$_SESSION['image'] = $row['data'];
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=windows-874">
<TITLE></TITLE>
<STYLE>
<!-- 
BODY,DIV,TABLE,THEAD,TBODY,TFOOT,TR,TH,TD,P { font-family:"Microsoft Sans Serif"; font-size:x-small }
-->
</STYLE>
</HEAD>
<BODY TEXT="#280099" BGCOLOR="#FFFFCC">
<TABLE FRAME=VOID CELLSPACING=0 COLS=40 RULES=NONE BORDER=0 BGCOLOR="#FFFFCC">
	<COLGROUP><COL WIDTH=22></COLGROUP>
	<TBODY>
		<TR>
			<TD WIDTH=22 HEIGHT=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=10><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
			<TD WIDTH=22><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ROWSPAN=8 HEIGHT=175><div align="center">
                                                       <?  if  (!empty($_SESSION['image'] ))  {  ?><img border=1 src="functions/image.php?idresume=<?echo $_GET[resumeindex];?>" width=185px height=180px></img><!--<img src=employee_show_image.php?resumeindex=<?=$_GET[resumeindex]; ?> border=0 width=185 height=180>--><?  }  elseif  (encodegender_th($_SESSION['gender']) == "ªÒÂ")  {  ?><img src=images/man.png border=0 width=185 height=180><?  }  elseif (encodegender_th($_SESSION['gender']) == "Ë­Ô§")  {  ?><img src=images/woman.png border=0 width=185 height=180><?  }  ?> </div></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9 ALIGN=LEFT>Name <?=encodetitle_en($_SESSION['title']);  ?>&nbsp;<?=$_SESSION['kgfirstname'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>Surname <?=$_SESSION['kglastname'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>Gender <?=encodegender_en($_SESSION['gender']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>Nationality <?=$_SESSION['kgnationality'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>Birthdate (DD/MM/YY) &nbsp;<?=$_SESSION['birthdate'];  ?>/<?=$_SESSION['birthmonth'];  ?>/<?=$_SESSION['birthyear'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>Age &nbsp;<?=$_SESSION['age']; ?>&nbsp; year old</TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6>Height  <?=$_SESSION['height'];  ?> cm.</TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>Weight <?=$_SESSION['weight'];  ?> kg.</TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=13>ID No. / Passpost No. <?=$_SESSION['passpostid'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>Marital status &nbsp; <?=encodemarital_en($_SESSION['marital']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>Military status &nbsp; <?=encodemilitary_en($_SESSION['military']);  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=32>Address &nbsp; <?=$_SESSION['kgaddress'];  ?>&nbsp; <?  if  ($_SESSION['province'] == 1) {  echo encodedistrict_en($_SESSION['district']);  }  ?> &nbsp; <?= encodeprovince_en($_SESSION['province']);  ?> &nbsp; <?=$_SESSION['postcode'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>email &nbsp; <?=$_SESSION['email'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>home &nbsp; <?=$_SESSION['home'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>mobile &nbsp; <?=$_SESSION['mobile'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>Fax &nbsp; <?=$_SESSION['fax'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>Driver License &nbsp; <?  if  ($_SESSION['driver1'] == "T")  {  echo "motorcycle"; }  ?>&nbsp; <?  if  ($_SESSION['driver2'] == "T")  {  echo "car"; }  ?>&nbsp; <?  if  ($_SESSION['driver3'] == "T")  {  echo "truck"; }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>Personal of vihical &nbsp; <?  if ($_SESSION['personal_car'] == "T")  {  echo "Yes";  }  else  {  echo "No";  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>Recent job &nbsp;  <?=$_SESSION['kgcareer'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>Can you work outside Bangkok? &nbsp; <?  if  ($_SESSION['xxoutbangkok'] == "T")  {  echo  "Yes";  }  else { echo "No";  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>Can you work outside Thailand? &nbsp; <? if  ($_SESSION['xxoutthailand'] == "T")  {   echo "Yes";  }  else  {  echo "No";  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><BR></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000" COLSPAN=15>Typing skill (Thai) &nbsp; <?=$_SESSION['typingth'];  ?> &nbsp; word/min &nbsp; Typing skill (English) &nbsp <?=$_SESSION['typingen'];  ?> &nbsp; word/min</TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=17><BR></TD>
			</TR>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD colspan=4>Interesting positions</TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD colspan=2>salary</TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><TD colspan=2>Hobbies</TD></TD><TD><BR></TD>
			<TD></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11 HEIGHT=22>&nbsp; 1. <?=$_SESSION['kgintposition1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><div align="right"><?=$_SESSION['intsalary1']; ?>&nbsp; </div></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; 1. <?=$_SESSION['kghobby1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; <?  if  ($_SESSION['kghobby4'] != "")  {  echo  "4."." ".$_SESSION['kghobby4'];  }   ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11 HEIGHT=22>&nbsp; <?  if  ($_SESSION['kgintposition2'] != "")   {  echo "2."." ".$_SESSION['kgintposition2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><div align="right"><?  if  ($_SESSION['intsalary2'] != "")   {  echo $_SESSION['intsalary2'];  }  ?>&nbsp; </div></TD>
			<TD ALIGN=LEFT BGCOLOR="#FFFFCC"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; 2. <?=$_SESSION['kghobby2'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; <?  if  ($_SESSION['kghobby5'] != "")  {  echo  "5."." ".$_SESSION['kghobby5'];  }   ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11 HEIGHT=22>&nbsp; <?  if  ($_SESSION['kgintposition3'] != "")   {  echo "3."." ".$_SESSION['kgintposition3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><div align="right"><?  if  ($_SESSION['intsalary3'] != "")   {  echo $_SESSION['intsalary3'];  }  ?>&nbsp; </div></TD>
			<TD ALIGN=LEFT BGCOLOR="#FFFFCC"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; <?  if  ($_SESSION['kghobby3'] != "")  {  echo  "3."." ".$_SESSION['kghobby3'];  }   ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12><BR></TD>
			</TR>
		<TR>
			<TD HEIGHT=22 colspan=2><center>From</center></TD><TD colspan=2><center>To</center></TD><TD colspan=10><center>Institution name</center></TD>
			<TD colspan=2><center>GPA</TD><TD colspan=5><center>Degree</center></TD><TD colspan=7><center>Faculty</center></TD><TD colspan=6><center>Major</center></TD><TD colspan=6><center>Minor</center></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 SDVAL="2547" SDNUM="1054;" ALIGN=CENTER><?=$_SESSION['from1']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2  SDVAL="2550" SDNUM="1054;" ALIGN=CENTER><?=$_SESSION['to1']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['kgintitude1'] ;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?=$_SESSION['gpa1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>&nbsp; <?=encodedeegree($_SESSION['degree1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['kgfaculty1'];  ?> </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6>&nbsp; <?=$_SESSION['kgmajor1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6>&nbsp; <?=$_SESSION['kgminor1'];  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=CENTER><?  if  ($_SESSION['from2'] != "")  {   echo $_SESSION['from2']-543;  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['to2'] != "")  {   echo $_SESSION['to2']-543;  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><?  if  ($_SESSION['kgintitude2'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgintitude2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['gpa2'] != "")  {   echo $_SESSION['gpa2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5><?  if  ($_SESSION['degree2'] != "")  {   echo "&nbsp;"."&nbsp;".encodedeegree($_SESSION['degree2']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7><?  if  ($_SESSION['kgfaculty2'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgfaculty2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['kgmajor2'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgmajor2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['kgminor2'] != "")  {   echo "&nbsp"."&nbsp;".$_SESSION['kgminor2'];  }  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=CENTER><?  if  ($_SESSION['from3'] != "")  {   echo $_SESSION['from3']-543;  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['to3'] != "")  {   echo $_SESSION['to3']-543;  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><?  if  ($_SESSION['kgintitude3'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgintitude3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['gpa3'] != "")  {   echo $_SESSION['gpa3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5><?  if  ($_SESSION['degree3'] != "")  {   echo "&nbsp;"."&nbsp;".encodedeegree($_SESSION['degree3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7><?  if  ($_SESSION['kgfaculty3'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgfaculty3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['kgmajor3'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgmajor3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['kgminor3'] != "")  {   echo "&nbsp"."&nbsp;".$_SESSION['kgminor3'];  }  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=CENTER><?  if  ($_SESSION['from4'] != "")  {   echo $_SESSION['from4']-543;  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['to4'] != "")  {   echo $_SESSION['to4']-543;  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10 ALIGN=LEFT><?  if  ($_SESSION['kgintitude4'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgintitude4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['gpa4'] != "")  {   echo $_SESSION['gpa4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5 ALIGN=LEFT><?  if  ($_SESSION['degree4'] != "")  {   echo "&nbsp;"."&nbsp;".encodedeegree($_SESSION['degree4']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7 ALIGN=LEFT><?  if  ($_SESSION['kgfaculty4'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgfaculty4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=LEFT><?  if  ($_SESSION['kgmajor4'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['kgmajor4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=LEFT><?  if  ($_SESSION['kgminor4'] != "")  {   echo "&nbsp"."&nbsp;".$_SESSION['kgminor4'];  }  ?></TD>
			</TR>
		<TR>
			<TD HEIGHT=22 colspan=19><center> Extracurricular Activities</center></TD><TD><BR></TD><TD colspan=4><center>Language</center></TD><TD colspan=4><center>Listen</center></TD><TD colspan=4><center>Speak</center></TD><TD colspan=4><center>Read</center></TD><TD colspan=4><center>Write</center></TD>
		
	                  <TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['kgextracur1'] != "")  {  echo "&nbsp;"."1."." ".$_SESSION['kgextracur1'];  }  ?></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4>&nbsp;1. <?=encodelanguage_en($_SESSION['language1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['listen1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['speak1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['read1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['write1']);  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['kgextracur2'] != "")  {  echo "&nbsp;"."2."." ".$_SESSION['kgextracur2'];  }  ?></TD>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4>&nbsp;2. <?=encodelanguage_en($_SESSION['language2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['listen2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['speak2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['read2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_en($_SESSION['write2']);  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['kgextracur3'] != "")  {  echo "&nbsp;"."3."." ".$_SESSION['kgextracur3'];  }  ?></TD>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><?  if  ($_SESSION['language3'] != 0)  {  echo  "&nbsp;"."3."." ".encodelanguage_en($_SESSION['language3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['listen3'] != 0)  {  echo  encodelavel_en($_SESSION['listen3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['speak3'] != 0)  {  echo  encodelavel_en($_SESSION['speak3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['read3'] != 0)  {  echo  encodelavel_en($_SESSION['read3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['write3'] != 0)  {  echo  encodelavel_en($_SESSION['write3']);  }  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['kgextracur4'] != "")  {  echo "&nbsp;"."4."." ".$_SESSION['kgextracur4'];  }  ?></TD>
                                    </TR>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['kgextracur5'] != "")  {  echo "&nbsp;"."5."." ".$_SESSION['kgextracur5'];  }  ?></TD>
                                    </TR>

		<TR>
			<TD HEIGHT=22 colspan=40><center>Computer skill</center></TD>
		</TR>
<?  $posnare = explode(":",$_SESSION['dcomputerskill']);
      $counter = 0;
      for ($i=0;$i<=167;$i++)  {
            if   ($posnare[$i] == "T")   {
                  $counter++;
                  $maybuff[$counter] = "&nbsp;".$counter."."." ".encodeprogramname($i);
                                                      }
                                              }
?> 
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8 HEIGHT=22><?=$maybuff[1];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[2];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[3];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[4];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[5];  ?></TD>
			</TR>
<?   if   ($maybuff[6] != "")   {    ?>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8 HEIGHT=22><?=$maybuff[6];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[7];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[8];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[9];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[10];  ?></TD>
			</TR>
<?                                        }    ?>
<?   if   ($maybuff[11] != "")   {    ?>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8 HEIGHT=22><?=$maybuff[11];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[12];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[13];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[14];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[15];  ?></TD>
			</TR>
<?                                        }    ?>
<?   if   ($maybuff[16] != "")   {    ?>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8 HEIGHT=22><?=$maybuff[16];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[17];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[18];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[19];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[20];  ?></TD>
			</TR>
<?                                        }    ?>
<?   if   ($maybuff[21] != "")   {    ?>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8 HEIGHT=22><?=$maybuff[21];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[22];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[23];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[24];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[25];  ?></TD>
			</TR>
<?                                          }    ?>
<?   if   ($maybuff[26] != "")   {    ?>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8 HEIGHT=22><?=$maybuff[26];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[27];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[28];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[29];  ?></TD>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=8><?=$maybuff[30];  ?></TD>
			</TR>
<?                                         }    ?>
		<TR>
			<TD HEIGHT=22 colspan=40><center>Other computer skill or Talent</center></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10 HEIGHT=22><? if  ($_SESSION['kgotherskill1'] != "")  {  echo "&nbsp;"."1."." ".$_SESSION['kgotherskill1'];  } ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['kgotherskill2'] != "")  {  echo "&nbsp;"."2."." ".$_SESSION['kgotherskill2'];  } ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['kgotherskill3'] != "")  {  echo "&nbsp;"."3."." ".$_SESSION['kgotherskill3'];  } ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['kgotherskill4'] != "")  {  echo "&nbsp;"."4."." ".$_SESSION['kgotherskill4'];  } ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10 HEIGHT=22><? if  ($_SESSION['kgotherskill5'] != "")  {  echo "&nbsp;"."5."." ".$_SESSION['kgotherskill5']; } ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['kgotherskill6'] != "")  {  echo "&nbsp;"."6."." ".$_SESSION['kgotherskill6']; } ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['kgotherskill7'] != "")  {  echo "&nbsp;"."7."." ".$_SESSION['kgotherskill7']; } ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['kgotherskill8'] != "")  {  echo "&nbsp;"."8."." ".$_SESSION['kgotherskill8']; } ?></TD>
			</TR>
		<TR>
			<TD HEIGHT=22 colspan=2><center>From</center></TD><TD colspan=2><center>To</center></TD><TD colspan=10><center>Company name</center></TD><TD colspan=7><center>Position</center></TD><TD colspan=3><center>Salary</center></TD><TD colspan=16><center>Job description</center></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=center><?=$_SESSION['tomonth1'];  ?>/<?=$_SESSION['toyear1']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=center><?=$_SESSION['jtomonth1']; ?>/<?=$_SESSION['jtoyear1']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['kgcompany1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['kgposition1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000" COLSPAN=3 ALIGN=center><?  if  ($_SESSION['showsalary1'] == "T")  {  echo $_SESSION['salary1']; }  else { echo "Not show";  }  ?>&nbsp; </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus1'];  ?></TD>
		</TR>
<?  if   ($_SESSION['kgcom1onus2'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus2'];  ?></TD>
		</TR> 
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom1onus3'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus3'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom1onus4'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus4'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom1onus5'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus5'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom1onus6'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus6'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom1onus7'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus7'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom1onus8'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom1onus8'];  ?></TD>
		</TR>
<?                                                                }   ?>

		<TR>
			<TD HEIGHT=22 colspan=40><BR></TD>
		</TR>
<?  if  (($_SESSION['tomonth2'] != "") and ($_SESSION['toyear2'] != "") and ($_SESSION['jtomonth2'] != "") and ($_SESSION['jtoyear2'] != "") and ($_SESSION['company2'] != ""))   {   ?>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=center><?=$_SESSION['tomonth2'];  ?>/<?=$_SESSION['toyear2']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=center><?=$_SESSION['jtomonth2']; ?>/<?=$_SESSION['jtoyear2']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['kgcompany2'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['kgposition2'];  ?></TD>
		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000" COLSPAN=3 ALIGN=center><?  if  ($_SESSION['showsalary2'] == "T")  {  echo $_SESSION['salary2']; }  else { echo "Not show";  }  ?>&nbsp; </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus1'];  ?></TD>
		</TR>
<?  if   ($_SESSION['kgcom2onus2'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus2'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom2onus3'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus3'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom2onus4'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus4'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom2onus5'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus5'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom2onus6'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus6'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom2onus7'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus7'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom2onus8'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom2onus8'];  ?></TD>
		</TR>
<?                                                                }     }  ?>
		<TR>
                                                      <TD HEIGHT=22 colspan=40><BR></TD>
		</TR>
<?  if  (($_SESSION['tomonth3'] != "") and ($_SESSION['toyear3'] != "") and ($_SESSION['jtomonth3'] != "") and ($_SESSION['jtoyear3'] != "") and ($_SESSION['company3'] != ""))   {   ?>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=center><?=$_SESSION['tomonth3'];  ?>/<?=$_SESSION['toyear3']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=center><?=$_SESSION['jtomonth3']; ?>/<?=$_SESSION['jtoyear3']-543;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['kgcompany3'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['kgposition3'];  ?></TD>
		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000" COLSPAN=3 ALIGN=center><?  if  ($_SESSION['showsalary3'] == "T")  {  echo $_SESSION['salary3']; }  else { echo "Not show";  }  ?>&nbsp; </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus1'];  ?></TD>
		</TR>
<?  if   ($_SESSION['kgcom3onus2'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus2'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom3onus3'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus3'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom3onus4'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus4'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom3onus5'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus5'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom3onus6'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus6'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom3onus7'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus7'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['kgcom3onus8'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['kgcom3onus8'];  ?></TD>
		</TR>
<?                                                                }   }  ?>
	</TBODY>
</TABLE>
<a href=customer_search_resumeform_th.php?resumeindex=<?=$_GET[resumeindex];  ?>><img src=images/033.png border=0></a>&nbsp; &nbsp;
<a href=customer_tell_date.php?intposition1=<?=eregi_replace(" ","+",$_SESSION[intposition1]);  ?>&salary1=<?=eregi_replace(" ","+",$_SESSION[intsalary1]);  ?>&intposition2=<?=eregi_replace(" ","+",$_SESSION[intposition2]);  ?>&salary2=<?=eregi_replace(" ","+",$_SESSION[intsalary2]);  ?>&intposition3=<?=eregi_replace(" ","+",$_SESSION[intposition3]);  ?>&salary3=<?=eregi_replace(" ","+",$_SESSION[intsalary3]);  ?>><img src=images/022.png border=0></a>
</BODY>
</HTML>