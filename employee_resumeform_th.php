<?session_start();?>
<?
include("Allfunction.inc");
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$SQL = "Select *  FROM  employee_resume_th  WHERE  idresume = '$_SESSION[resumeindex]'";
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {
$_SESSION['title'] = $row['title'];
//$_SESSION['image'] = $row['imageemployee'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
$_SESSION['gender'] = $row['gender'];
$_SESSION['bufferdate'] = strval($row['bbbday']);
$_SESSION['birthyear'] = substr($_SESSION['bufferdate'],0,4);
$_SESSION['birthmonth'] = substr($_SESSION['bufferdate'],4,2);
$_SESSION['birthdate'] = substr($_SESSION['bufferdate'],6,2);
$_SESSION['birthofdate'] = ($_SESSION['birthyear'] *10000)+($_SESSION['birthmonth'] * 100)+$_SESSION['birthdate'];
$_SESSION['weight'] = $row['weight'];
$_SESSION['height'] = $row['height'];
$_SESSION['passpostid'] = $row['passpostid'];
$_SESSION['nationality'] = $row['nationality'];
$_SESSION['marital'] = intval($row['kkkmarital']);
$_SESSION['military'] = intval($row['kkkmilitary']);
$_SESSION['address'] = $row['contactaddress'];
$_SESSION['district'] = $row['district'];
$_SESSION['province'] = $row['province'];
$_SESSION['postcode'] = $row['postcode'];
$_SESSION['country'] = $row['country'];
$_SESSION['email'] = $row['emailaddress'];
$_SESSION['home'] = $row['homenumber'];
$_SESSION['mobile'] = $row['mobile'];
$_SESSION['office'] = $row['office'];
$_SESSION['fax'] = $row['fax'];
$_SESSION['driver1'] = $row['motorcyclebill'];
$_SESSION['driver2'] = $row['carbill'];
$_SESSION['driver3'] = $row['truckbill'];
$_SESSION['personal_car'] = $row['personalvehicle'];
$_SESSION['career'] = $row['careerobjective'];
$_SESSION['intposition1'] = $row['interestingposition1'];
$_SESSION['intposition2'] = $row['interestingposition2'];
$_SESSION['intposition3'] = $row['interestingposition3'];
$_SESSION['intsalary1'] = $row['intsalary1'];
$_SESSION['intsalary2'] = $row['intsalary2'];
$_SESSION['intsalary3'] = $row['intsalary3'];
$_SESSION['hobby1'] = $row['hobby1'];
$_SESSION['hobby2'] = $row['hobby2'];
$_SESSION['hobby3'] = $row['hobby3'];
$_SESSION['hobby4'] = $row['hobby4'];
$_SESSION['hobby5'] = $row['hobby5'];
$_SESSION['xxoutbangkok'] = $row['outsidebkk'];
$_SESSION['xxoutthailand'] = $row['outth'];
$_SESSION['from1']= $row['edt1_from'];
$_SESSION['to1'] = $row['edt1_to'];
$_SESSION['institude1'] = $row['edt1_intitudename'];
$_SESSION['gpa1'] = $row['edt1_gpa'];
$_SESSION['degree1'] = $row['edt1_degree'];
$_SESSION['faculty1'] = $row['edt1_faculty'];
$_SESSION['major1'] = $row['edt1_major'];
$_SESSION['minor1'] = $row['edt1_minor'];
$_SESSION['from2'] = $row['edt2_from'];
$_SESSION['to2'] = $row['to2'];
$_SESSION['institude2'] = $row['edt2_intitudename'];
$_SESSION['gpa2'] = $row['edt2_gpa'];
$_SESSION['degree2'] = $row['edt2_degree'];
$_SESSION['faculty2'] = $row['fffaculty2'];
$_SESSION['major2'] = $row['mmmajor2'];
$_SESSION['minor2'] = $row['mmminor2'];
$_SESSION['from3'] = $row['edt3_from'];
$_SESSION['to3'] = $row['edt3_to'];
$_SESSION['institude3'] = $row['edt3_intitudename'];
$_SESSION['gpa3'] = $row['edt3_gpa'];
$_SESSION['degree3'] = $row['edt3_degree'];
$_SESSION['faculty3'] = $row['edt3_faculty'];
$_SESSION['major3'] = $row['edt3_major'];
$_SESSION['minor3'] = $row['edt3_minor'];
$_SESSION['from4'] = $row['edt4_from'];
$_SESSION['to4'] = $row['edt4_to'];
$_SESSION['institude4'] = $row['edt4_intitudename'];
$_SESSION['gpa4'] = $row['edt4_gpa'];
$_SESSION['degree4'] = $row['edt4_degree'];
$_SESSION['faculty4'] = $row['edt4_faculty'];
$_SESSION['major4'] = $row['edt4_major'];
$_SESSION['minor4'] =  $row['edt4_minor'];
$_SESSION['extracur1'] = $row['extracur1'];
$_SESSION['extracur2'] = $row['extracur2'];
$_SESSION['extracur3'] = $row['extracur3'];
$_SESSION['extracur4'] = $row['extracur4'];
$_SESSION['extracur5'] = $row['extracur5'];
$_SESSION['extracur6'] = $row['extracur6'];
$_SESSION['extracur7'] = $row['extracur7'];
$_SESSION['extracur8'] = $row['extracur8'];
$_SESSION['language1'] = $row['language1'];
$_SESSION['listen1'] = $row['listen1'];
$_SESSION['speak1'] = $row['speak1'];
$_SESSION['read1'] = $row['read1'];
$_SESSION['write1'] =  $row['write1'];
$_SESSION['language2'] = $row['language2'];
$_SESSION['listen2'] = $row['listen2'];
$_SESSION['speak2'] = $row['speak2'];
$_SESSION['read2'] = $row['read2'];
$_SESSION['write2'] = $row['write2'];
$_SESSION['language3'] = $row['language3'];
$_SESSION['listen3'] = $row['listen3'];
$_SESSION['speak3'] = $row['speak3'];
$_SESSION['read3'] = $row['read3'];
$_SESSION['write3'] = $row['write3'];
$_SESSION['typingen'] = $row['englishpermin'];
$_SESSION['typingth'] = $row['thaipermin'];
$_SESSION['dcomputerskill'] = $row['computerskill'];
$_SESSION['otherskill1'] = $row['otherskill1'];
$_SESSION['otherskill2'] = $row['otherskill2'];
$_SESSION['otherskill3'] = $row['otherskill3'];
$_SESSION['otherskill4'] = $row['otherskill4'];
$_SESSION['otherskill5'] = $row['otherskill5'];
$_SESSION['otherskill6'] = $row['otherskill6'];
$_SESSION['otherskill7'] = $row['otherskill7'];
$_SESSION['otherskill8'] = $row['otherskill8'];
$_SESSION['tomonth1'] = $row['startmonth1'];
$_SESSION['toyear1'] = $row['startyear1'];
$_SESSION['jtomonth1'] = $row['endmonth1'];
$_SESSION['jtoyear1'] = $row['endyear1'];
$_SESSION['company1'] = $row['company1'];
$_SESSION['position1'] = $row['position1'];
$_SESSION['showsalary1'] = $row['showsalary1'];
$_SESSION['salary1'] = $row['salary1'];
$_SESSION['com1onus1'] = $row['com1onus1'];
$_SESSION['com1onus2'] = $row['com1onus2'];
$_SESSION['com1onus3'] = $row['com1onus3'];
$_SESSION['com1onus4'] = $row['com1onus4'];
$_SESSION['com1onus5'] = $row['com1onus5'];
$_SESSION['com1onus6'] = $row['com1onus6'];
$_SESSION['com1onus7'] = $row['com1onus7'];
$_SESSION['com1onus8'] = $row['com1onus8'];
$_SESSION['tomonth2'] = $row['startmonth2'];
$_SESSION['toyear2'] = $row['startyear2'];
$_SESSION['jtomonth2'] = $row['endmonth2'];
$_SESSION['jtoyear2'] = $row['endyear2'];
$_SESSION['company2'] = $row['cccompany2'];
$_SESSION['position2'] = $row['ppposition2'];
$_SESSION['showsalary2'] = $row['ssshowsalary2'];
$_SESSION['salary2'] = $row['xalary222'];
$_SESSION['com2onus1'] = $row['com2onus1'];
$_SESSION['com2onus2'] = $row['com2onus2'];
$_SESSION['com2onus3'] = $row['com2onus3'];
$_SESSION['com2onus4'] = $row['com2onus4'];
$_SESSION['com2onus5'] = $row['com2onus5'];
$_SESSION['com2onus6'] = $row['com2onus6'];
$_SESSION['com2onus7'] = $row['com2onus7'];
$_SESSION['com2onus8'] = $row['com2onus8'];
$_SESSION['tomonth3'] = $row['startmonth3'];
$_SESSION['toyear3'] = $row['startyear3'];
$_SESSION['jtomonth3'] = $row['endmonth3'];
$_SESSION['jtoyear3'] = $row['endyear3'];
$_SESSION['company3'] = $row['company3'];
$_SESSION['position3'] = $row['position3'];
$_SESSION['showsalary3'] = $row['showsalary3'];
$_SESSION['salary3'] = $row['xalary333'];
$_SESSION['com3onus1'] = $row['com3onus1'];
$_SESSION['com3onus2'] = $row['com3onus2'];
$_SESSION['com3onus3'] = $row['com3onus3'];
$_SESSION['com3onus4'] = $row['com3onus4'];
$_SESSION['com3onus5'] = $row['com3onus5'];
$_SESSION['com3onus6'] = $row['com3onus6'];
$_SESSION['com3onus7'] = $row['com3onus7'];
$_SESSION['com3onus8'] = $row['com3onus8'];
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
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7 ROWSPAN=8 HEIGHT=175><div align="center">
                                                      <?  if  (!empty($_SESSION['image'] ))  {  ?><img border=1 src="functions/image.php?idresume=<?echo $_SESSION[resumeindex];?>" width=185px height=180px></img><?  }  elseif  (encodegender_th($_SESSION['gender']) == "ชาย")  {  ?><img src=images/man.png border=0 width=185 height=180><?  }  elseif (encodegender_th($_SESSION['gender']) == "หญิง")  {  ?><img src=images/woman.png border=0 width=185 height=180><?  }  ?> </div></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9 ALIGN=LEFT>ชื่อ <?=encodetitle_th($_SESSION['title']);  ?>&nbsp;<?=$_SESSION['firstname'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>นามสกุล <?=$_SESSION['lastname'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>เพศ <?=encodegender_th($_SESSION['gender']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>สัญชาติ <?=$_SESSION['nationality'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>วัน/เดือน/ปี เกิด &nbsp;<?=$_SESSION['birthdate'];  ?>/<?=$_SESSION['birthmonth'];  ?>/<?=$_SESSION['birthyear'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>อายุ &nbsp;<?=$_SESSION['age']; ?>&nbsp; ปี</TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6>ส่วนสูง  <?=$_SESSION['height'];  ?> cm.</TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>น้ำหนัก <?=$_SESSION['weight'];  ?> kg.</TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=13>รห้สบัตรประชาชน <?=$_SESSION['passpostid'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>สถานะการสมรส &nbsp; <?=encodemarital_th($_SESSION['marital']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>สถานะทางทหาร &nbsp; <?=encodemilitary_th($_SESSION['military']);  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=32>ที่อยู่ &nbsp; <?=$_SESSION['address'];  ?>&nbsp; <?  if  ($_SESSION['province'] == 1) {  echo "อ.". encodedistrict_th($_SESSION['district']);  }  ?> &nbsp; จ.<?= inthaiPV($_SESSION['province']);  ?> &nbsp; <?=$_SESSION['postcode'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>อีเมลส์ <?=$_SESSION['email'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11>โทรศัพท์บ้าน  <?=$_SESSION['home'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>มือถือ <?=$_SESSION['mobile'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>แฟกซ์ <?=$_SESSION['fax'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>ใบขับขี่ <?  if  ($_SESSION['driver1'] == "T")  {  echo "มอเตอร์ไซด์"; }  ?>&nbsp; <?  if  ($_SESSION['driver2'] == "T")  {  echo "รถยนต์"; }  ?>&nbsp; <?  if  ($_SESSION['driver3'] == "T")  {  echo "รถบรรทุก"; }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=5>รถยนต์ส่วนตัว  <?  if ($_SESSION['personal_car'] == "T")  {  echo "มี";  }  else  {  echo "ไม่มี";  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9>อาชีพปัจจุบัน &nbsp;  <?=$_SESSION['career'];  ?></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>สามารถทำงานต่างจังหวัด &nbsp; <?  if  ($_SESSION['xxoutbangkok'] == "T")  {  echo  "ได้";  }  else { echo "ไม่ได้";  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>สามารถทำงานต่างประเทศ &nbsp; <? if  ($_SESSION['xxoutthailand'] == "T")  {   echo "ได้";  }  else  {  echo "ไม่ได้";  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><BR></TD>
			</TR>
		<TR>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000" COLSPAN=15>พิมพ์ดีดภาษาไทย &nbsp; <?=$_SESSION['typingth'];  ?> &nbsp; คำต่อนาที &nbsp; พิพม์ดีดภาษาอังกฤษ &nbsp <?=$_SESSION['typingen'];  ?> &nbsp; คำต่อนาที</TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=17><BR></TD>
			</TR>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD colspan=4>ตำแหน่งงานที่ต้องการ</TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD colspan=2>เงินเดือน</TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><TD colspan=2>งานอดิเรก</TD></TD><TD><BR></TD>
			<TD></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11 HEIGHT=22>&nbsp; 1. <?=$_SESSION['intposition1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><div align="right"><?=$_SESSION['intsalary1']; ?>&nbsp; </div></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; 1. <?=$_SESSION['hobby1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; <?  if  ($_SESSION['hobby4'] != "")  {  echo  "4."." ".$_SESSION['hobby4'];  }   ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11 HEIGHT=22>&nbsp; <?  if  ($_SESSION['intposition2'] != "")   {  echo "2."." ".$_SESSION['intposition2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><div align="right"><?  if  ($_SESSION['intsalary2'] != "")   {  echo $_SESSION['intsalary2'];  }  ?>&nbsp; </div></TD>
			<TD ALIGN=LEFT BGCOLOR="#FFFFCC"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; 2. <?=$_SESSION['hobby2'];  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; <?  if  ($_SESSION['hobby5'] != "")  {  echo  "5."." ".$_SESSION['hobby5'];  }   ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=11 HEIGHT=22>&nbsp; <?  if  ($_SESSION['intposition3'] != "")   {  echo "3."." ".$_SESSION['intposition3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><div align="right"><?  if  ($_SESSION['intsalary3'] != "")   {  echo $_SESSION['intsalary3'];  }  ?>&nbsp; </div></TD>
			<TD ALIGN=LEFT BGCOLOR="#FFFFCC"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12>&nbsp; <?  if  ($_SESSION['hobby3'] != "")  {  echo  "3."." ".$_SESSION['hobby3'];  }   ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12><BR></TD>
			</TR>
		<TR>
			<TD HEIGHT=22 colspan=2><center>จาก</center></TD><TD colspan=2><center>ถึง</center></TD><TD colspan=10><center>ชื่อสถานศึกษา</center></TD>
			<TD colspan=3><center>เกรดเฉลี่ย</TD><TD colspan=4><center>ระดับ</center></TD><TD colspan=7><center>คณะ</center></TD><TD colspan=6><center>เอกวิชา</center></TD><TD colspan=6><center>โทวิชา</center></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 SDVAL="2547" SDNUM="1054;" ALIGN=CENTER><?=$_SESSION['from1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2  SDVAL="2550" SDNUM="1054;" ALIGN=CENTER><?=$_SESSION['to1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['institude1'] ;  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=3 ALIGN=CENTER><?=$_SESSION['gpa1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4>&nbsp; <?=encodedeegree_th($_SESSION['degree1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['faculty1'];  ?> </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6>&nbsp; <?=$_SESSION['major1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6>&nbsp; <?=$_SESSION['minor1'];  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=CENTER><?  if  ($_SESSION['from2'] != "")  {   echo $_SESSION['from2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['to2'] != "")  {   echo $_SESSION['to2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><?  if  ($_SESSION['institude2'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['institude2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=3 ALIGN=CENTER><?  if  ($_SESSION['gpa2'] != "")  {   echo $_SESSION['gpa2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><?  if  ($_SESSION['degree2'] != "")  {   echo "&nbsp;"."&nbsp;".encodedeegree_th($_SESSION['degree2']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7><?  if  ($_SESSION['faculty2'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['faculty2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['major2'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['major2'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['minor2'] != "")  {   echo "&nbsp"."&nbsp;".$_SESSION['minor2'];  }  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=CENTER><?  if  ($_SESSION['from3'] != "")  {   echo $_SESSION['from3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['to3'] != "")  {   echo $_SESSION['to3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><?  if  ($_SESSION['institude3'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['institude3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=3 ALIGN=CENTER><?  if  ($_SESSION['gpa3'] != "")  {   echo $_SESSION['gpa3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><?  if  ($_SESSION['degree3'] != "")  {   echo "&nbsp;"."&nbsp;".encodedeegree_th($_SESSION['degree3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7><?  if  ($_SESSION['faculty3'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['faculty3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['major3'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['major3'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6><?  if  ($_SESSION['minor3'] != "")  {   echo "&nbsp"."&nbsp;".$_SESSION['minor3'];  }  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=CENTER><?  if  ($_SESSION['from4'] != "")  {   echo $_SESSION['from4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=CENTER><?  if  ($_SESSION['to4'] != "")  {   echo $_SESSION['to4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10 ALIGN=LEFT><?  if  ($_SESSION['institude4'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['institude4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=3 ALIGN=CENTER><?  if  ($_SESSION['gpa4'] != "")  {   echo $_SESSION['gpa4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=LEFT><?  if  ($_SESSION['degree4'] != "")  {   echo "&nbsp;"."&nbsp;".encodedeegree_th($_SESSION['degree4']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7 ALIGN=LEFT><?  if  ($_SESSION['faculty4'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['faculty4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=LEFT><?  if  ($_SESSION['major4'] != "")  {   echo "&nbsp;"."&nbsp;".$_SESSION['major4'];  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=LEFT><?  if  ($_SESSION['minor4'] != "")  {   echo "&nbsp"."&nbsp;".$_SESSION['minor4'];  }  ?></TD>
			</TR>
		<TR>
			<TD HEIGHT=22 colspan=19><center>กิจกรรมนอกหลักสูตร</center></TD><TD><BR></TD><TD colspan=4><center>ภาษา</center></TD><TD colspan=4><center>ฟัง</center></TD><TD colspan=4><center>พูด</center></TD><TD colspan=4><center>อ่าน</center></TD><TD colspan=4><center>เขียน</center></TD>
		
	                  <TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['extracur1'] != "")  {  echo "&nbsp;"."1."." ".$_SESSION['extracur1'];  }  ?></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4>&nbsp;1. <?=encodelanguage_th($_SESSION['language1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['listen1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['speak1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['read1']);  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['write1']);  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['extracur2'] != "")  {  echo "&nbsp;"."2."." ".$_SESSION['extracur2'];  }  ?></TD>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4>&nbsp;2. <?=encodelanguage_th($_SESSION['language2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['listen2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['speak2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['read2']);  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?=encodelavel_th($_SESSION['write2']);  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['extracur3'] != "")  {  echo "&nbsp;"."3."." ".$_SESSION['extracur3'];  }  ?></TD>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4><?  if  ($_SESSION['language3'] != 0)  {  echo  "&nbsp;"."3."." ".encodelanguage_th($_SESSION['language3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['listen3'] != "")  {  echo  encodelavel_th($_SESSION['listen3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['speak3'] != "")  {  echo  encodelavel_th($_SESSION['speak3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['read3'] != "")  {  echo  encodelavel_th($_SESSION['read3']);  }  ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=4 ALIGN=center><?  if  ($_SESSION['write3'] != "")  {  echo  encodelavel_th($_SESSION['write3']);  }  ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['extracur4'] != "")  {  echo "&nbsp;"."4."." ".$_SESSION['extracur4'];  }  ?></TD>
                                    </TR>
		<TR>
			<TD STYLE="border-top: 0px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=19 HEIGHT=22><?  if  ($_SESSION['extracur5'] != "")  {  echo "&nbsp;"."5."." ".$_SESSION['extracur5'];  }  ?></TD>
                                    </TR>

		<TR>
			<TD HEIGHT=22 colspan=40><center>มีความสามารถใช้โปรแกรม</center></TD>
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
			<TD HEIGHT=22 colspan=40><center>การใช้โปรแกรม หรือ ความสามารถอื่นๆ</center></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10 HEIGHT=22><? if  ($_SESSION['otherskill1'] != "")  {  echo "&nbsp;"."1."." ".$_SESSION['otherskill1'];  } ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['otherskill2'] != "")  {  echo "&nbsp;"."2."." ".$_SESSION['otherskill2'];  } ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['otherskill3'] != "")  {  echo "&nbsp;"."3."." ".$_SESSION['otherskill3'];  } ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['otherskill4'] != "")  {  echo "&nbsp;"."4."." ".$_SESSION['otherskill4'];  } ?></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10 HEIGHT=22><? if  ($_SESSION['otherskill5'] != "")  {  echo "&nbsp;"."5."." ".$_SESSION['otherskill5']; } ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['otherskill6'] != "")  {  echo "&nbsp;"."6."." ".$_SESSION['otherskill6']; } ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['otherskill7'] != "")  {  echo "&nbsp;"."7."." ".$_SESSION['otherskill7']; } ?></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10><? if  ($_SESSION['otherskill8'] != "")  {  echo "&nbsp;"."8."." ".$_SESSION['otherskill8']; } ?></TD>
			</TR>
		<TR>
			<TD HEIGHT=22 colspan=2><center>จาก</center></TD><TD colspan=2><center>ถึง</center></TD><TD colspan=10><center>ชื่อบริษัท</center></TD><TD colspan=7><center>ตำแหน่ง</center></TD><TD colspan=3><center>เงินเดือน</center></TD><TD colspan=16><center>หน้าที่</center></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=center><?=$_SESSION['tomonth1'];  ?>/<?=$_SESSION['toyear1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=center><?=$_SESSION['jtomonth1']; ?>/<?=$_SESSION['jtoyear1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['company1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['position1'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000" COLSPAN=3 ALIGN=center><?  if  ($_SESSION['showsalary1'] == "T")  {  echo $_SESSION['salary1']; }  else { echo "ไม่ระบุ";  }  ?>&nbsp; </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus1'];  ?></TD>
		</TR>
<?  if   ($_SESSION['com1onus2'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus2'];  ?></TD>
		</TR> 
<?                                                                }   ?>
<?  if   ($_SESSION['com1onus3'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus3'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com1onus4'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus4'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com1onus5'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus5'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com1onus6'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus6'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com1onus7'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus7'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com1onus8'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com1onus8'];  ?></TD>
		</TR>
<?                                                                }   ?>

		<TR>
			<TD HEIGHT=22 colspan=40><BR></TD>
		</TR>
<?  if  (($_SESSION['tomonth2'] != "") and ($_SESSION['toyear2'] != "") and ($_SESSION['jtomonth2'] != "") and ($_SESSION['jtoyear2'] != "") and ($_SESSION['company2'] != ""))   {   ?>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=center><?=$_SESSION['tomonth2'];  ?>/<?=$_SESSION['toyear2'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=center><?=$_SESSION['jtomonth2']; ?>/<?=$_SESSION['jtoyear2'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['company2'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['position2'];  ?></TD>
		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000" COLSPAN=3 ALIGN=center><?  if  ($_SESSION['showsalary2'] == "T")  {  echo $_SESSION['salary2']; }  else { echo "ไม่ระบุ";  }  ?>&nbsp; </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus1'];  ?></TD>
		</TR>
<?  if   ($_SESSION['com2onus2'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus2'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com2onus3'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus3'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com2onus4'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus4'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com2onus5'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus5'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com2onus6'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus6'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com2onus7'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus7'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com2onus8'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com2onus8'];  ?></TD>
		</TR>
<?                                                                }     }  ?>
		<TR>
                                                      <TD HEIGHT=22 colspan=40><BR></TD>
		</TR>
<?  if  (($_SESSION['tomonth3'] != "") and ($_SESSION['toyear3'] != "") and ($_SESSION['jtomonth3'] != "") and ($_SESSION['jtoyear3'] != "") and ($_SESSION['company3'] != ""))   {   ?>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 HEIGHT=22 ALIGN=center><?=$_SESSION['tomonth3'];  ?>/<?=$_SESSION['toyear3'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=2 ALIGN=center><?=$_SESSION['jtomonth3']; ?>/<?=$_SESSION['jtoyear3'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=10>&nbsp; <?=$_SESSION['company3'];  ?></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=7>&nbsp; <?=$_SESSION['position3'];  ?></TD>
		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000" COLSPAN=3 ALIGN=center><?  if  ($_SESSION['showsalary3'] == "T")  {  echo $_SESSION['salary3']; }  else { echo "ไม่ระบุ";  }  ?>&nbsp; </TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus1'];  ?></TD>
		</TR>
<?  if   ($_SESSION['com3onus2'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus2'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com3onus3'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus3'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com3onus4'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus4'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com3onus5'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus5'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com3onus6'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus6'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com3onus7'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus7'];  ?></TD>
		</TR>
<?                                                                }   ?>
<?  if   ($_SESSION['com3onus8'] != "")   {  ?>
		<TR>
			<TD HEIGHT=22><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD>
			<TD><BR></TD><TD><BR></TD><TD><BR></TD>	<TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD><TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=16>&nbsp; <?=$_SESSION['com3onus8'];  ?></TD>
		</TR>
<?                                                                }   }  ?>
	</TBODY>
</TABLE>
<a href=employee_resumeform_en.php><img src=images/resume_banner.png border=0></a>&nbsp;&nbsp;&nbsp;<a href=firstpage.php><img src=images/home.png border=0></a>
</BODY>
</HTML>