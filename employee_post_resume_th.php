<?session_start();?>
<?
/*
$count = mysql_num_rows($result);
if($count=="0"){$_SESSION['codereturn1'] = "T";}
else{$_SESSION['codereturn1'] = "F";}
*/
$_SESSION['codereturn1'] = "F"
?>
<?
include("Allfunction.inc");
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");

$SQL8 = "Select *  FROM  employee_resume_th  WHERE  idresume = '$_SESSION[resumeindex]'";
$result8= mysql_query($SQL8);
while ($rowx=mysql_fetch_array($result8))          {
$yyycheckname = $rowx['firstname'];
$yyychecksurname = $rowx['lastname'];              
                                                                                    }
if   ($_SESSION['codereturn1'] ==  "T")   {    //   start if  X
$_SESSION['title'] = ""; 
$_SESSION['firstname'] = "";
$_SESSION['lastname'] = "";
$_SESSION['gender'] = "";
$_SESSION['bufferdate'] = "";
$_SESSION['birthyear'] = "";
$_SESSION['birthmonth'] = "";
$_SESSION['birthdate'] = "";
$_SESSION['birthofdate'] = "";
$_SESSION['weight'] = "";
$_SESSION['height'] = "";
$_SESSION['passpostid'] = "";
$_SESSION['nationality'] = "";
$_SESSION['marital'] = "";
$_SESSION['military'] = "";
$_SESSION['address'] = "";
$_SESSION['district'] = "";
$_SESSION['province'] = "";
$_SESSION['postcode'] = "";
$_SESSION['country'] = "";
$_SESSION['email'] = "";
$_SESSION['home'] = "";
$_SESSION['mobile'] = "";
$_SESSION['office'] = "";
$_SESSION['fax'] = "";
$_SESSION['driver1'] = "";
$_SESSION['driver2'] = "";
$_SESSION['driver3'] = "";
$_SESSION['personal_car'] = "";
$_SESSION['careerdepartment'] = "";
$_SESSION['career'] = "";
$_SESSION['yearexp'] = "";
$_SESSION['intdepartment1'] = "";
$_SESSION['intposition1'] = "";
$_SESSION['intdepartment2'] = "";
$_SESSION['intposition2'] = "";
$_SESSION['intdepartment3'] = "";
$_SESSION['intposition3'] = "";
$_SESSION['intsalary1'] = "";
$_SESSION['intsalary2'] = "";
$_SESSION['intsalary3'] = "";
$_SESSION['hobby1'] = "";
$_SESSION['hobby2'] = "";
$_SESSION['hobby3'] = "";
$_SESSION['hobby4'] = "";
$_SESSION['hobby5'] = "";
$_SESSION['xxoutbangkok'] = "";
$_SESSION['xxoutthailand'] = "";
$_SESSION['from1']= "";
$_SESSION['to1'] = "";
$_SESSION['institude1'] = "";
$_SESSION['gpa1'] = "";
$_SESSION['degree1'] = "";
$_SESSION['faculty1'] = "";
$_SESSION['major1'] = "";
$_SESSION['minor1'] = "";
$_SESSION['from2'] = "";
$_SESSION['to2'] = "";
$_SESSION['institude2'] = "";
$_SESSION['gpa2'] = "";
$_SESSION['degree2'] = "";
$_SESSION['faculty2'] = "";
$_SESSION['major2'] = "";
$_SESSION['minor2'] = "";
$_SESSION['from3'] = "";
$_SESSION['to3'] = "";
$_SESSION['institude3'] = "";
$_SESSION['gpa3'] = "";
$_SESSION['degree3'] = "";
$_SESSION['faculty3'] = "";
$_SESSION['major3'] = "";
$_SESSION['minor3'] = "";
$_SESSION['from4'] = "";
$_SESSION['to4'] = "";
$_SESSION['institude4'] = "";
$_SESSION['gpa4'] = "";
$_SESSION['degree4'] = "";
$_SESSION['faculty4'] = "";
$_SESSION['major4'] = "";
$_SESSION['minor4'] =  "";
$_SESSION['extracur1'] = "";
$_SESSION['extracur2'] = "";
$_SESSION['extracur3'] = "";
$_SESSION['extracur4'] = "";
$_SESSION['extracur5'] = "";
$_SESSION['extracur6'] = "";
$_SESSION['extracur7'] = "";
$_SESSION['extracur8'] = "";
$_SESSION['language1'] = "";
$_SESSION['listen1'] = "";
$_SESSION['speak1'] = "";
$_SESSION['read1'] = "";
$_SESSION['write1'] =  "";
$_SESSION['language2'] = "";
$_SESSION['listen2'] = "";
$_SESSION['speak2'] = "";
$_SESSION['read2'] = "";
$_SESSION['write2'] = "";
$_SESSION['language3'] = "";
$_SESSION['listen3'] = "";
$_SESSION['speak3'] = "";
$_SESSION['read3'] = "";
$_SESSION['write3'] = "";
$_SESSION['typingen'] = "";
$_SESSION['typingth'] = "";
$_SESSION['dcomputerskill'] = "";
$_SESSION['otherskill1'] = "";
$_SESSION['otherskill2'] = "";
$_SESSION['otherskill3'] = "";
$_SESSION['otherskill4'] = "";
$_SESSION['otherskill5'] = "";
$_SESSION['otherskill6'] = "";
$_SESSION['otherskill7'] = "";
$_SESSION['otherskill8'] = "";
$_SESSION['tomonth1'] = "";
$_SESSION['toyear1'] = "";
$_SESSION['jtomonth1'] = "";
$_SESSION['jtoyear1'] = "";
$_SESSION['company1'] = "";
$_SESSION['position1'] = "";
$_SESSION['showsalary1'] = "";
$_SESSION['salary1'] = "";
$_SESSION['com1onus1'] = "";
$_SESSION['com1onus2'] = "";
$_SESSION['com1onus3'] = "";
$_SESSION['com1onus4'] = "";
$_SESSION['com1onus5'] = "";
$_SESSION['com1onus6'] = "";
$_SESSION['com1onus7'] = "";
$_SESSION['com1onus8'] = "";
$_SESSION['tomonth2'] = "";
$_SESSION['toyear2'] = "";
$_SESSION['jtomonth2'] = "";
$_SESSION['jtoyear2'] = "";
$_SESSION['company2'] = "";
$_SESSION['position2'] = "";
$_SESSION['showsalary2'] = "";
$_SESSION['salary2'] = "";
$_SESSION['com2onus1'] = "";
$_SESSION['com2onus2'] = "";
$_SESSION['com2onus3'] = "";
$_SESSION['com2onus4'] = "";
$_SESSION['com2onus5'] = "";
$_SESSION['com2onus6'] = "";
$_SESSION['com2onus7'] = "";
$_SESSION['com2onus8'] = "";
$_SESSION['tomonth3'] = "";
$_SESSION['toyear3'] = "";
$_SESSION['jtomonth3'] = "";
$_SESSION['jtoyear3'] = "";
$_SESSION['company3'] = "";
$_SESSION['position3'] = "";
$_SESSION['showsalary3'] = "";
$_SESSION['salary3'] = "";
$_SESSION['com3onus1'] = "";
$_SESSION['com3onus2'] = "";
$_SESSION['com3onus3'] = "";
$_SESSION['com3onus4'] = "";
$_SESSION['com3onus5'] = "";
$_SESSION['com3onus6'] = "";
$_SESSION['com3onus7'] = "";
$_SESSION['com3onus8'] = "";
   }  //   end  if  X

if    ($yyycheckname != "" and $yyychecksurname != "" )   {
$SQL = "Select *  FROM  employee_resume_th  WHERE  idresume = '$_SESSION[resumeindex]'";
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result)) {
$_SESSION['title'] = $row['title']; 
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
$_SESSION['careerdepartment'] = $row['departmentid'];
$_SESSION['career'] = $row['careerobjective'];
$_SESSION['yearexp'] = $row['yearexp'];
$_SESSION['intdepartment1'] = $row['intdepartment1'];
$_SESSION['intposition1'] = $row['interestingposition1'];
$_SESSION['intdepartment2'] = $row['intdepartment2'];
$_SESSION['intposition2'] = $row['interestingposition2'];
$_SESSION['intdepartment3'] = $row['intdepartment3'];
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
                                       }  //  end  while
                                                 }   //   end  if
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>Jobscyber</title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<? include("functions/show_user.php"); ?>
<body onload="Javascrpit: Check();">
<?  echo gheader(th,0,F);  ?>

<br>
<div align=center>
<table width="950"  border="0" cellpadding=0 cellspacing=0 bgcolor=#78ce31 >

<div align="center"><font class="PD9">สมัครสมาชิก Jobscyber</font></div><br />
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font><----- ช่องบังคับ</font></div></td>
      <td colspan="10">&nbsp;</td>
    </tr>
    <tr>
      <td width="550"><div align="left"><font class=PD3>&nbsp; &nbsp; รูปผู้สมัคร</font></div></td>
      <td colspan="10"><form action="functions/upload.php" enctype="multipart/form-data" method="post">
	   <div align="left">
       <?/*
	   <input  type="file" name="uploadimage" size=50 class="PD3">
	   <input  type="submit" name="gsubmit" value="อัพโหลด">&nbsp; <a href=employee_show_image.php?resumeindex=<?=$_SESSION[resumeindex];  ?>><font class=PD3>ดูภาพ</font></a>
	   */?>
       <img border=1 src="functions/image.php?idresume=<?echo $_SESSION[resumeindex];?>" width=100px height=100px></img><br />
	   <?include("functions/frm_upload.php");?>
		</div>
      </td></form>
    </tr>    
    <tr>
<?  switch ($_SESSION['title'])  {
                  case "0" : $NH0="selected"; break;
                  case "1" : $NH1="selected"; break;
                  case "2" : $NH2="selected"; break;
                  case "3" : $NH3="selected"; break;
			                                   }
?>													   			   			   
      <td><div align="left"><font class=PD3><font color="red">* &nbsp;</font>คำนำหน้า</font></div></td>
     <form action="employee_save_resume_th.php" method="post">
      <td colspan="10"><div align="left">
        <select  name="title">
          <option value="0" <?=$NH0; ?>>
          <option value="1" <?=$NH1; ?>>นาย
          <option value="2" <?=$NH2; ?>>นาง
          <option value="3" <?=$NH3; ?>>นางสาว
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>ชื่อ</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="firstname" size=12 class="PD3" value=<?echo $_SESSION['firstname'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>นามสกุล</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="lastname" size=18 class="PD3"  value=<?echo $_SESSION['lastname'];?>>
      </div></td>
    </tr>
<?
    switch  ($_SESSION['gender'])   {
                 case "0" : $gd0="selected"; break;
                 case "1" : $gd1="selected"; break;
                 case "2" : $gd2="selected"; break;			  			  
                                                       }
?>    
    <tr>
      <td><div align="left"><font class=PD3><font color="red">*</font> &nbsp; เพศ</font></div></td>
      <td colspan="10"><div align="left">
        <select  name="gender">
          <option value="0" <?=$gd0; ?>>
          <option value="1" <?=$gd1; ?>>ชาย
          <option value="2" <?=$gd2; ?>>หญิง
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>วันที่เกิด</font></div></td>
      <td colspan="10"><div align="left">
        <select name="birthdate">
          <option value=0>
            <?   for ($i=1;$i<=31;$i++)	  { 
                          if   ($_SESSION['birthdate'] == $i)   {
                               $gf[$i] = "selected";                       }     ?>
                               <option value=<?=$i;  ?> &nbsp; <?=$gf[$i];  ?>>
                                <?=$i; ?>
            <?                                                          }	  ?>
        </select>
        &nbsp;
        <select name="birthmonth">
          <option value=0>
            <?   for ($i=1;$i<=12;$i++)	  {
                          if   ($_SESSION['birthmonth'] == $i)   {	
                               $gn[$i] = "selected";                     }     ?> 
                               <option value=<?=$i;  ?> &nbsp; <?=$gn[$i];  ?>>
                               <?=$i; ?>
            <?                                                         }	  ?>
        </select>
        &nbsp;
        <select name="birthyear">
          <option value=0>
            <?   for ($i=1;$i<=68;$i++)	  {
                           if   ($_SESSION['birthyear'] == $i+2484)      {   
                                 $gq[$i] = "selected";	                    }	?>
                                 <option value=<?=$i+2484;  ?> &nbsp; <?=$gq[$i];  ?>>
                                 <?=$i+2484; ?>
            <?                                                         }	  ?>
        </select>
        &nbsp; <font class=PD3>วัน/เดือน/ปี</font> </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; น้ำหนัก</font></div></td>
      <td colspan="10"><div align="left">
        <select name="weight">
          <option value=0>
            <?   for ($i=1;$i<=101;$i++)	  {   
		                if   ($_SESSION['weight'] == $i+29)      {   
					       $gk[$i] = "selected";	                              }	?>		  
          <option value=<?=$i+29;  ?> &nbsp; <?=$gk[$i];  ?>>
            <?=$i+29; ?>
            <?                                     }	  ?>
        </select>
        <font class=PD3> &nbsp; &nbsp; กิโลกรัม</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; ความสูง</font></div></td>
      <td colspan="10"><div align="left">
        <select name="height">
          <option value=0>
            <?   for ($i=0;$i<=90;$i++)	  {
		                if   ($_SESSION['height'] == $i+120)      {   
					       $gb[$i] = "selected";	                        }	?>		  
          <option value=<?=$i+120;  ?> &nbsp; <?=$gb[$i];  ?>>
            <?=$i+120; ?>
            <?                                     }	  ?>
        </select>
        <font class=PD3> &nbsp; &nbsp; เซ็นติเมตร</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;รหัสบัตรประชาชน</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="idcard" size=15  class="PD3" value=<?echo $_SESSION['passpostid'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;สัญชาติ</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="nationality" size=8  class="PD3" value=<?echo $_SESSION['nationality'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;สถานะภาพการสมรส</font></div></td>
      <td colspan="10"><div align="left">
<?
      switch ($_SESSION['marital'])  {
	            case "0" : $ab[0]="selected"; break;
	            case "1" : $ab[1]="selected"; break;
	            case "2" : $ab[2]="selected"; break;
	            case "3" : $ab[3]="selected"; break;
	            case "4" : $ab[4]="selected"; break;
	            case "5" : $ab[5]="selected"; break;
			                                       }			  			  			  			  			  
?>	 
        <select name="marital">
          <option value=0 <?=$ab[0]; ?>>
          <option value=1 <?=$ab[1]; ?>>โสด
          <option value=2 <?=$ab[2]; ?>>แต่งงานแล้ว
          <option value=3 <?=$ab[3]; ?>>หย่า 
          <option value=4 <?=$ab[4]; ?>>เป็นม่าย
          <option value=5 <?=$ab[5]; ?>>ไม่เฉพาะเจาะจง
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp;&nbsp;การเกณฑ์ทหาร</font></div></td>
      <td colspan="10"><div align="left">
<?
      switch ($_SESSION['military'])  {
	            case "0" : $ac[0]="selected";  break;
	            case "1" : $ac[1]="selected";  break;
	            case "2" : $ac[2]="selected";  break;
	            case "3" : $ac[3]="selected";  break;
			                                       }			  			  			  			  			  
?>	 	 
        <select  name="military">
          <option  value=0 &nbsp; <?=$ac[0]; ?>>
          <option  value=1 &nbsp; <?=$ac[1]; ?>>ถูกเกณฑ์ทหาร
          <option  value=2 &nbsp; <?=$ac[2]; ?>>ยังไม่ผ่านการเกณฑ์ทหาร
          <option  value=3 &nbsp; <?=$ac[3]; ?>>ได้รับการยกเว้น
        </select>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color=red>* &nbsp;</font>ที่อยู่ในการติดต่อ</font></div></td>
      <td colspan="10"><div align="left">
        <input name="address" type="text" class="PD3" size="60"  value=<?echo $_SESSION['address'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp; เขต</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=50;$i++)   {
	      if  ($_SESSION['district'] == $i)   {
		      $ad[$i] = "selected";
			                                               }
                                          }												  
?>	 
        <select  name="district">
          <option value=0 &nbsp; <?=$ad[0]; ?>>
          <option value=1 &nbsp; <?=$ad[1]; ?>>คลองเตย
          <option value=2 &nbsp; <?=$ad[2]; ?>>คลองสามวา
          <option value=3 &nbsp; <?=$ad[3]; ?>>คลองแสน
          <option value=4 &nbsp; <?=$ad[4]; ?>>คันนายาว
          <option value=5 &nbsp; <?=$ad[5]; ?>>จัตตุจักร
          <option value=6 &nbsp; <?=$ad[6]; ?>>ชุมทอง
          <option value=7 &nbsp; <?=$ad[7]; ?>>ดอนเมือง
          <option value=8 &nbsp; <?=$ad[8]; ?>>ดินแดง
          <option value=9 &nbsp; <?=$ad[9]; ?>>ดูสิต
          <option value=10 &nbsp; <?=$ad[10]; ?>>ตลิ่งชัน
          <option value=11 &nbsp; <?=$ad[11]; ?>>ทวีวัฒนา
          <option value=12 &nbsp; <?=$ad[12]; ?>>ทุ่งครุ
          <option value=13 &nbsp; <?=$ad[13]; ?>>ธนบุรี
          <option value=14 &nbsp; <?=$ad[14]; ?>>บางกอกน้อย
          <option value=15 &nbsp; <?=$ad[15]; ?>>บางกอกใหญ
          <option value=16 &nbsp; <?=$ad[16]; ?>>บางกะปิ
          <option value=17 &nbsp; <?=$ad[17]; ?>>บางขุนเทียน
          <option value=18 &nbsp; <?=$ad[18]; ?>>บางเขน
          <option value=19 &nbsp; <?=$ad[19]; ?>>บางคอแหลม
          <option value=20 &nbsp; <?=$ad[20]; ?>>บางแค
          <option value=21 &nbsp; <?=$ad[21]; ?>>บางซัว
          <option value=22 &nbsp; <?=$ad[22]; ?>>บางนา
          <option value=23 &nbsp; <?=$ad[23]; ?>>บางบอน
          <option value=24 &nbsp; <?=$ad[24]; ?>>บางพลัด
          <option value=25 &nbsp; <?=$ad[25]; ?>>บางรัก
          <option value=26 &nbsp; <?=$ad[26]; ?>>บึงกุม
          <option value=27 &nbsp; <?=$ad[27]; ?>>ปทุมวัน
          <option value=28 &nbsp; <?=$ad[28]; ?>>ประเวศ
          <option value=29 &nbsp; <?=$ad[29]; ?>>ป้อมปราบศัตรูพ่าย
          <option value=30 &nbsp; <?=$ad[30]; ?>>พญาไท
          <option value=31 &nbsp; <?=$ad[31]; ?>>พระโขนง
          <option value=32 &nbsp; <?=$ad[32]; ?>>พระนคร
          <option value=33 &nbsp; <?=$ad[33]; ?>>ภาษีเจริญ
          <option value=34 &nbsp; <?=$ad[34]; ?>>มีนบุรี
          <option value=35 &nbsp; <?=$ad[35]; ?>>ยานนาวา
          <option value=36 &nbsp; <?=$ad[36]; ?>>ราชเทวี
          <option value=37 &nbsp; <?=$ad[37]; ?>>ราษฏร์บูรณะ
          <option value=38 &nbsp; <?=$ad[38]; ?>>ลาดกระบัง
          <option value=39 &nbsp; <?=$ad[39]; ?>>ลาดพร้าว
          <option value=40 &nbsp; <?=$ad[40]; ?>>วังทองหลาง
          <option value=41 &nbsp; <?=$ad[41]; ?>>วัฒนา
          <option value=42 &nbsp; <?=$ad[42]; ?>>สวนหลวง
          <option value=43 &nbsp; <?=$ad[43]; ?>>สะพานสูง
          <option value=44 &nbsp; <?=$ad[44]; ?>>สัมพันธวงศ์
          <option value=45 &nbsp; <?=$ad[45]; ?>>สาทร
          <option value=46 &nbsp; <?=$ad[46]; ?>>สายใหม่
          <option value=47 &nbsp; <?=$ad[47]; ?>>หนองแขม
          <option value=48 &nbsp; <?=$ad[48]; ?>>หนองชุก
          <option value=49 &nbsp; <?=$ad[49]; ?>>หลักสี่
          <option value=50 &nbsp; <?=$ad[50]; ?>>ห้วยขวาง
        </select>
        <font class=PD3> &nbsp; &nbsp; เฉพาะในเขตกรุงเทพเทพฯ เท่านั้น</font> </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>จังหวัด</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=76;$i++)   {
	      if  ($_SESSION['province'] == $i)   {
		      $Mpoint[$i] = "selected";
			                                               }
                                          }												  
?>	 	 
        <select  name="province">
          <option value="0" &nbsp; <?=$Mpoint[0]; ?>>
          <option value="1" &nbsp; <?=$Mpoint[1]; ?>>กรุงเทพมหานคร
          <option value="2" &nbsp; <?=$Mpoint[2]; ?>>กระบี่
          <option value="3" &nbsp; <?=$Mpoint[3]; ?>>กาญจน์
          <option value="4" &nbsp; <?=$Mpoint[4]; ?>>กาญจนบุรี
          <option value="5" &nbsp; <?=$Mpoint[5]; ?>>กาฬสินธุ์
          <option value="6" &nbsp; <?=$Mpoint[6]; ?>>กำแพงเพชร
          <option value="7" &nbsp; <?=$Mpoint[7]; ?>>ขอนแก่น
          <option value="8" &nbsp; <?=$Mpoint[8]; ?>>จันทบุรี
          <option value="9" &nbsp; <?=$Mpoint[9]; ?>>ฉะเชิงเทรา
          <option value="10" &nbsp; <?=$Mpoint[10]; ?>>ชลบุรี
          <option value="11" &nbsp; <?=$Mpoint[11]; ?>>ชัยนาท
          <option value="12" &nbsp; <?=$Mpoint[12]; ?>>ชัยภูมิ
          <option value="13" &nbsp; <?=$Mpoint[13]; ?>>ชุมพร
          <option value="14" &nbsp; <?=$Mpoint[14]; ?>>เชียงราย
          <option value="15" &nbsp; <?=$Mpoint[15]; ?>>เชียงใหม่
          <option value="16" &nbsp; <?=$Mpoint[16]; ?>>ตรัง
          <option value="17" &nbsp; <?=$Mpoint[17]; ?>>ตราด
          <option value="18" &nbsp; <?=$Mpoint[18]; ?>>ตาก
          <option value="19" &nbsp; <?=$Mpoint[19]; ?>>นครนายก
          <option value="20" &nbsp; <?=$Mpoint[20]; ?>>นครปฐม
          <option value="21" &nbsp; <?=$Mpoint[21]; ?>>นครพนม
          <option value="22" &nbsp; <?=$Mpoint[22]; ?>>นครราชสีมา
          <option value="23" &nbsp; <?=$Mpoint[23]; ?>>นครศรีธรรมราช
          <option value="24" &nbsp; <?=$Mpoint[24]; ?>>นครสวรรค์
          <option value="25" &nbsp; <?=$Mpoint[25]; ?>>นนทบุรี
          <option value="26" &nbsp; <?=$Mpoint[26]; ?>>นราธิวาส
          <option value="27" &nbsp; <?=$Mpoint[27]; ?>>น่าน
          <option value="28" &nbsp; <?=$Mpoint[28]; ?>>บุรีรัมย์
          <option value="29" &nbsp; <?=$Mpoint[29]; ?>>ปทุมธานี
          <option value="30" &nbsp; <?=$Mpoint[30]; ?>>ประจวบคีรีขันธ์
          <option value="31" &nbsp; <?=$Mpoint[31]; ?>>ปราจีนบุรี
          <option value="32" &nbsp; <?=$Mpoint[32]; ?>>ปัตตานี
          <option value="33" &nbsp; <?=$Mpoint[33]; ?>>พระนครศรีอยุธยา
          <option value="34" &nbsp; <?=$Mpoint[34]; ?>>พะเยา
          <option value="35" &nbsp; <?=$Mpoint[35]; ?>>พังงา
          <option value="36" &nbsp; <?=$Mpoint[36]; ?>>พัทลุง
          <option value="37" &nbsp; <?=$Mpoint[37]; ?>>พิจิตร
          <option value="38" &nbsp; <?=$Mpoint[38]; ?>>พิษณุโลก
          <option value="39" &nbsp; <?=$Mpoint[39]; ?>>เพชรบุรี
          <option value="40" &nbsp; <?=$Mpoint[40]; ?>>เพชรบูรณ์
          <option value="41" &nbsp; <?=$Mpoint[41]; ?>>แพร่
          <option value="42" &nbsp; <?=$Mpoint[42]; ?>>ภูเก็ต
          <option value="43" &nbsp; <?=$Mpoint[43]; ?>>มหาสารคาม
          <option value="44" &nbsp; <?=$Mpoint[44]; ?>>มุกดาหาร
          <option value="45" &nbsp; <?=$Mpoint[45]; ?>>แม่ฮ่องสอน
          <option value="46" &nbsp; <?=$Mpoint[46]; ?>>ยโสธร
          <option value="47" &nbsp; <?=$Mpoint[47]; ?>>ยะลา
          <option value="48" &nbsp; <?=$Mpoint[48]; ?>>ร้อยเอ็ด
          <option value="49" &nbsp; <?=$Mpoint[49]; ?>>ระนอง
          <option value="50" &nbsp; <?=$Mpoint[50]; ?>>ระยอง
          <option value="51" &nbsp; <?=$Mpoint[51]; ?>>ราชบุรี
          <option value="52" &nbsp; <?=$Mpoint[52]; ?>>ลพบุรี
          <option value="53" &nbsp; <?=$Mpoint[53]; ?>>ลำปาง
          <option value="54" &nbsp; <?=$Mpoint[54]; ?>>ลำพูน
          <option value="55" &nbsp; <?=$Mpoint[55]; ?>>เลย
          <option value="56" &nbsp; <?=$Mpoint[56]; ?>>ศรีสะเกษ
          <option value="57" &nbsp; <?=$Mpoint[57]; ?>>สกลนคร
          <option value="58" &nbsp; <?=$Mpoint[58]; ?>>สงขลา
          <option value="59" &nbsp; <?=$Mpoint[59]; ?>>สตูล
          <option value="60" &nbsp; <?=$Mpoint[60]; ?>>สมุทรปราการ
          <option value="61" &nbsp; <?=$Mpoint[61]; ?>>สมุทรสงคราม
          <option value="62" &nbsp; <?=$Mpoint[62]; ?>>สมุทรสาคร
          <option value="63" &nbsp; <?=$Mpoint[63]; ?>>สระแก้ว
          <option value="64" &nbsp; <?=$Mpoint[64]; ?>>สระบุรี
          <option value="65" &nbsp; <?=$Mpoint[65]; ?>>สิงห์บุรี
          <option value="66" &nbsp; <?=$Mpoint[66]; ?>>สุโขทัย
          <option value="67" &nbsp; <?=$Mpoint[67]; ?>>สุพรรณบุรี
          <option value="68" &nbsp; <?=$Mpoint[68]; ?>>สุราษฎร์ธานี
          <option value="69" &nbsp; <?=$Mpoint[69]; ?>>สุรินทร์
          <option value="70" &nbsp; <?=$Mpoint[70]; ?>>หนองคาย
          <option value="71" &nbsp; <?=$Mpoint[71]; ?>>หนองบัวลำภู
          <option value="72" &nbsp; <?=$Mpoint[72]; ?>>อ่างทอง
          <option value="73" &nbsp; <?=$Mpoint[73]; ?>>อำนาจเจริญ
          <option value="74" &nbsp; <?=$Mpoint[74]; ?>>อุดรธานี
          <option value="75" &nbsp; <?=$Mpoint[75]; ?>>อุตรดิตถ์
          <option value="76" &nbsp; <?=$Mpoint[76]; ?>>อุทัยธานี
          <option value="77" &nbsp; <?=$Mpoint[77]; ?>>อุบลราชธานี
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> <font color="red">*</font>&nbsp; รหัสไปรษณีย์</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="postcode" size=10 class="PD3" value=<?echo $_SESSION['postcode'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; ประเทศ</font></div></td>
      <td colspan="10"><div align="left">
        <select  name="country">
          <option value=1>ไทย
        </select>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp;<font color="red">*</font>&nbsp; อีเมลส์</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="email" size=32 class="PD3" value=<?echo $_SESSION['email'];?>>
        <font class=PD3> &nbsp; &nbsp; 1 ชื่อเท่านั้น</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; หมายเลขติดต่อ</font></div></td>
      <td colspan="10"><div align="left"><font class="PD3">ถ้ามีมากกว่า 1 เบอร์ให้คั่นด้วยเครื่องหมาย , ห้ามเว้นวรรค</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ที่บ้าน</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="home" size=16  class="PD3"  value=<?echo $_SESSION['home'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font color="red">*</font>&nbsp; มือถือ</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="mobile" size=16  class="PD3"  value=<?echo $_SESSION['mobile'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ที่ทำงาน</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="office" size=16  class="PD3"  value=<?echo $_SESSION['office'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; แฟกซ์</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="fax" size=16  class="PD3"  value=<?echo $_SESSION['fax'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color="red">*</font>&nbsp; ใบขับขี่</font></div></td>
      <td colspan="10"><div align="left">
<?
      if  ($_SESSION['driver1'] == "T")  {
           $ppa = "checked";
		                                                 }

      if  ($_SESSION['driver2'] == "T")  {
           $ppb = "checked";
		                                                 }

      if  ($_SESSION['driver3'] == "T")  {
           $ppc = "checked";
		                                                 }
											    
      if  ($_SESSION['driver4'] == "T")  {
           $ppd = "checked";
		                                                 }											    											        											                               
?>	 
        <input  type=checkbox name="driver1" value="T"  <?=$ppa; ?>>
        <font class=PD3> &nbsp; มอเตอร์ไซด์</font>
        <input  type=checkbox name="driver2" value="T"  <?=$ppb; ?>>
        <font class=PD3> &nbsp; รถยนต์</font>
        <input  type=checkbox name="driver3" value="T"  <?=$ppc; ?>>
        <font class=PD3> &nbsp; รถบรรทุก และ อื่นๆ</font>
	   </div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color="red">*</font>&nbsp; มีรถยนต์ส่วนตัวหรือไม่</font></div></td>
      <td colspan="10"><div align="left">
<?
      switch ($_SESSION['personal_car'])   {
                  case  "T" : $ans = "checked";  break;
                  case  "F" : $ang = "checked";  break;			   
                                                                  }  	        
?>	 	 
        <input  type=radio name="personal_car" value="T"  <?=$ans; ?>>
        <font class=PD3> &nbsp; ใช่</font> &nbsp;
        <input  type=radio name="personal_car" value="F"  <?=$ang; ?>>
        <font class=PD3> &nbsp; ไม่</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign="top" colspan="4"><div align="left"><font class="PD3"><font color="red">*</font>&nbsp; ถ้าเป็นนักศึกษาจบใหม่ หรือ กำลังศึกษาอยู่ให้เลือกประเภทงานอื่นๆ และใส่ในช่องชื่องานว่า นักศึกษาจบใหม่ หรือ กำลังศึกษาอยู่ ประสบการณ์ 0 ปีครับ</font></div></td>
      <td><div align="left"><font class="PD3">&nbsp;</font></div></td>
      <td><div align="left"><font class="PD3">&nbsp;</font></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color="red">*</font> &nbsp;อาชีพปัจจุบัน</font></div></td>
      <td><div align="left">
<select name="careerdepartment" class="PD3">
<option value=0>
<?  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx))  { 
           if   ($_SESSION['careerdepartment'] == $rowzz[id])      {   
                 $ng[$i] = "selected";	                        }	?>

<option value=<?=$rowzz[id];  ?> &nbsp; <?=$ng[$i];  ?>><?=$rowzz[departmentname];  ?><br>
<?       $i++;                                                           }   ?></div>
      </td>
      <td><div align="left">
        <input type="text" name="career" size="30"   value=<?echo $_SESSION['career'];?>>
      </div></td>
<?
     for ($i=0;$i<=15;$i++)   {
	      if  ($_SESSION['yearexp'] == $i)   {
		      $Ypoint[$i] = "selected";
			                                               }
                                          }												  
?>
<td><div align="left"><font class=PD3>ประสบการณ์&nbsp; &nbsp; &nbsp; <select name="yearexp">
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
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; ตำแหน่งงานที่สนใจ</font></div></td>
      <td colspan="10">
	 <div align="left">
              <table border=0 cellpadding="0" cellspacing="0">
              <tr>
              <td width="278"><div align="center"><font class="PD3">ประเภทงาน</font></div></td>
              <td width="220"><div align="center"><font class="PD3">ตำแหน่งงาน</font></div></td>
              </tr>
              </table>
      </div>	 </td>
    </tr>
    <tr>
      <td><font class="PD3"><font color="red">*</font> 1</font></td>
      <td colspan="10">
	 <div align="left">
              <table border=0 cellpadding="0" cellspacing="0">
              <tr>
      <td>
<select name="intdepartment1" class="PD3">
<option value=0>
<?  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx)) { 
           if   ($_SESSION['intdepartment1'] == $rowzz[id])      {   
                 $nv[$i] = "selected";	                                                     }	?>
<option value=<?=$rowzz[id];  ?> &nbsp; <?=$nv[$i];  ?>><?=$rowzz[departmentname];  ?><br>
<?      $i++;                                                                  }   ?>
      </td>
              <td><input  type=text name="intposition1" size="24"  class="PD3"  value=<?echo $_SESSION['intposition1'];?>></td>
              <td><input  type=text name="intsalary1" size="5"  class="PD3"  value=<?echo $_SESSION['intsalary1'];?>><font class="PD3"><font color=white>&nbsp;<--</font> เงินเดือนที่ต้องการ</font></td>
              </tr>
              </table>	 
      </div>	 </td>
    </tr>
    <tr>
      <td><font class="PD3"> &nbsp;&nbsp;2</font></td>
      <td colspan="10">
	 <div align="left">
              <table border=0 cellpadding="0" cellspacing="0">
              <tr>
      <td>
<select name="intdepartment2" class="PD3">
<option value=0>
<?  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
$i = 0;
while ($rowzz=mysql_fetch_array($resultx)) { 
           if   ($_SESSION['intdepartment2'] == $rowzz[id])      {   
                 $nq[$i] = "selected";	                                                     }	?>
<option value=<?=$rowzz[id];  ?> &nbsp; <?=$nq[$i];  ?>><?=$rowzz[departmentname];  ?><br>
<?      $i++;                                                          }   ?>
      </td>
              <td><input  type=text name="intposition2" size="24"  class="PD3"  value=<?echo $_SESSION['intposition2'];?>></td>
              <td><input  type=text name="intsalary2" size="5"  class="PD3"  value=<?echo $_SESSION['intsalary2'];?>><font class="PD3"><font color=white>&nbsp;<--</font> เงินเดือนที่ต้องการ</font></td>
              </tr>
              </table>
      </div>	 </td>
    </tr>
    <tr>
      <td><font class="PD3">&nbsp;&nbsp;3</font></td>
      <td colspan="10">
	 <div align="left">
              <table border=0 cellpadding="0" cellspacing="0">
              <tr>
      <td>
<select name="intdepartment3" class="PD3">
<option value=0>
<?  
$XSQL = "Select *  FROM  department order by id asc";
$resultx = mysql_query($XSQL);
while ($rowzz=mysql_fetch_array($resultx)) { 
           if   ($_SESSION['intdepartment3'] == $rowzz[id])      {   
                 $nx[$i] = "selected";	                                                     }	?>
<option value=<?=$rowzz[id];  ?> &nbsp; <?=$nx[$i];  ?>><?=$rowzz[departmentname];  ?><br>
<?      $i++;                                                          }   ?>
      </td>
              <td><input  type=text name="intposition3" size="24"  class="PD3"  value=<?echo $_SESSION['intposition3'];?>></td>
              <td><input  type=text name="intsalary3" size="5"  class="PD3"  value=<?echo $_SESSION['intsalary3'];?>><font class="PD3"><font color=white>&nbsp;<--</font> เงินเดือนที่ต้องการ</font></td>
              </tr>
              </table>
      </div>	 </td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3> &nbsp; &nbsp; งานอดิเรก</font></div></td>
      <td colspan="10"></td>
    </tr>
    <tr>
      <td><font class="PD3"><font color="red">*</font> 1</font></td>
      <td colspan="10"><div align="left">
        <input  type=text name="hobby1" size=44  class="PD3"  value=<?echo $_SESSION['hobby1'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><font class="PD3"><font color="red">*</font> 2</font></td>
      <td colspan="10"><div align="left">
        <input  type=text name="hobby2" size=44  class="PD3"  value=<?echo $_SESSION['hobby2'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><font class="PD3">&nbsp; 3</font></td>
      <td colspan="10"><div align="left">
        <input  type=text name="hobby3" size=44  class="PD3"  value=<?echo $_SESSION['hobby3'];?>>
      </div></td>
    </tr>         
    <tr>
      <td><font class="PD3">&nbsp; 4</font></td>
      <td colspan="10"><div align="left">
        <input  type=text name="hobby4" size=44  class="PD3"  value=<?echo $_SESSION['hobby4'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><font class="PD3">&nbsp; 5</font></td>
      <td colspan="10"><div align="left">
        <input  type=text name="hobby5" size=44  class="PD3"  value=<?echo $_SESSION['hobby5'];?>>
      </div></td>
    </tr>         
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td colspan=10><div align="left"><font class=PD3> &nbsp; &nbsp; สามารถทำงานต่างจังหวัดได้หรือไม่</font></div></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"><div align="left">
<?
      switch ($_SESSION['xxoutbangkok'])   {
                  case  "T" : $dwx = "checked";  break;
                  case  "F" : $dwz = "checked";  break;			   
                                                                      }  	        
?>	 
        <input  type="radio" name="outbkk"  value=T &nbsp;  <?=$dwx; ?>>
        <font class=PD3> &nbsp; ได้</font> &nbsp;
        <input  type="radio" name="outbkk"  value=F &nbsp;  <?=$dwz; ?>>
        <font class=PD3> &nbsp; ไม่ได้</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td colspan=10><div align="left"><font class=PD3> &nbsp; &nbsp; สามารถทำงานนอกประเทศได้หรือไม่</font></div></td>
    </tr>
    <tr>
      <td></td>
      <td colspan="10"  valign=top><div align="left">
<?
      switch ($_SESSION['xxoutthailand'])   {
                  case  "T" : $dmc = "checked";  break;
                  case  "F" : $dmd = "checked";  break;			   
                                                                      }  	        
?>	 	 
        <input  type="radio" name="outth" value="T"  <?=$dmc; ?>>
        <font class=PD3> &nbsp; ได้</font> &nbsp;
        <input  type="radio" name="outth" value="F"   <?=$dmd; ?>>
        <font class=PD3> &nbsp; ไม่ได้</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=left><font class="PD3">ระดับการศึกษา (สูงสุด)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font> &nbsp;จาก</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="from1" size=4   class="PD3"  value=<?echo $_SESSION['from1'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; ถึง</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="to1" size=4   class="PD3"  value=<?echo $_SESSION['to1'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; ชื่อสถานศึกษา</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="institude1" size=40  class="PD3"  value=<?echo $_SESSION['institude1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; เกรดเฉลี่ย</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="gpa1" size=4  class="PD3"  value=<?echo $_SESSION['gpa1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; ระดับการศึกษา</font></div></td>
      <td colspan="10"><div align=left>
<?
     for ($i=0;$i<=9;$i++)   {
	      if  ($_SESSION['degree1'] == $i)   {
		      $Qpoint[$i] = "selected";
			                                                  }
                                         }												  
?>	 
        <select  name="degree1">
          <option value=0 &nbsp; <?=$Qpoint[0]; ?>>
          <option value=1 &nbsp; <?=$Qpoint[1]; ?>>ประถม
          <option value=2 &nbsp; <?=$Qpoint[2]; ?>>มัธยมต้น
          <option value=3 &nbsp; <?=$Qpoint[3]; ?>>มัธยมปลาย 
          <option value=4 &nbsp; <?=$Qpoint[4]; ?>>ปวช
          <option value=5 &nbsp; <?=$Qpoint[5]; ?>>ปวส
          <option value=6 &nbsp; <?=$Qpoint[6]; ?>>อนุปริญญา
          <option value=7 &nbsp; <?=$Qpoint[7]; ?>>ปริญญาตรี
          <option value=8 &nbsp; <?=$Qpoint[8]; ?>>ปริญญาโท
          <option value=9 &nbsp; <?=$Qpoint[9]; ?>>ปริญญาเอก
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; คณะ</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="faculty1" size=30  class="PD3" value=<?echo $_SESSION['faculty1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; เอกวิชา</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="major1" size=30  class="PD3" value=<?echo $_SESSION['major1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; โทวิชา</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="minor1" size=30  class="PD3"  value=<?echo $_SESSION['minor1'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; จาก</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="from2" size=4  class="PD3"  value=<?echo $_SESSION['from2'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ถึง</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=to2 size=4  class="PD3"  value=<?echo $_SESSION['to2'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ชื่อสถานศึกษา</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=institude2 size=40 class="PD3"  value=<?echo $_SESSION['institude2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; เกรดเฉลี่ย</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=gpa2 size=4 class="PD3"  value=<?echo $_SESSION['gpa2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ระดับการศึกษา</font></div></td>
      <td colspan="10"><div align=left>
<?
     for ($i=0;$i<=9;$i++)   {
	      if  ($_SESSION['degree2'] == $i)   {
		      $Apoint[$i] = "selected";
			                                                  }
                                         }												  
?>	 
        <select  name="degree2">
          <option value=0 &nbsp; <?=$Apoint[0]; ?>>
          <option value=1 &nbsp; <?=$Apoint[1]; ?>>ประถม
          <option value=2 &nbsp; <?=$Apoint[2]; ?>>มัธยมต้น
          <option value=3 &nbsp; <?=$Apoint[3]; ?>>มัธยมปลาย 
          <option value=4 &nbsp; <?=$Apoint[4]; ?>>ปวช
          <option value=5 &nbsp; <?=$Apoint[5]; ?>>ปวส
          <option value=6 &nbsp; <?=$Apoint[6]; ?>>อนุปริญญา
          <option value=7 &nbsp; <?=$Apoint[7]; ?>>ปริญญาตรี
          <option value=8 &nbsp; <?=$Apoint[8]; ?>>ปริญญาโท
          <option value=9 &nbsp; <?=$Apoint[9]; ?>>ปริญญาเอก
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; คณะ</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=faculty2 size=30 class="PD3" value=<?echo $_SESSION['faculty2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; วิชาเอก</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=major2 size=30 class="PD3"  value=<?echo $_SESSION['major2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; โทวิชา </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=minor2 size=30 class="PD3"  value=<?echo $_SESSION['minor2'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; จาก </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=from3 size=4 class="PD3"  value=<?echo $_SESSION['from3'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ถึง </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=to3 size=4 class="PD3" value=<?echo $_SESSION['to3'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ชื่อ</font>สถานศึกษา</div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=institude3 size=40 class="PD3"  value=<?echo $_SESSION['institude3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; เกรดเฉลี่ย</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=gpa3 size=4 class="PD3" value=<?echo $_SESSION['gpa3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ระดับการศึกษา</font></div></td>
      <td colspan="10"><div align=left>
<?
     for ($i=0;$i<=9;$i++)   {
	      if  ($_SESSION['degree3'] == $i)   {
		      $Bpoint[$i] = "selected";
			                                                  }
                                         }												  
?>	 
        <select  name="degree3">
          <option value=0 &nbsp; <?=$Bpoint[0]; ?>>
          <option value=1 &nbsp; <?=$Bpoint[1]; ?>>ประถม
          <option value=2 &nbsp; <?=$Bpoint[2]; ?>>มัธยมต้น
          <option value=3 &nbsp; <?=$Bpoint[3]; ?>>มัธยมปลาย 
          <option value=4 &nbsp; <?=$Bpoint[4]; ?>>ปวช
          <option value=5 &nbsp; <?=$Bpoint[5]; ?>>ปวส
          <option value=6 &nbsp; <?=$Bpoint[6]; ?>>อนุปริญญา
          <option value=7 &nbsp; <?=$Bpoint[7]; ?>>ปริญญาตรี
          <option value=8 &nbsp; <?=$Bpoint[8]; ?>>ปริญญาโท
          <option value=9 &nbsp; <?=$Bpoint[9]; ?>>ปริญญาเอก
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; คณะ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=faculty3 size=30 class="PD3"  value=<?echo $_SESSION['faculty3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; วิชาเอก </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=major3 size=30 class="PD3"  value=<?echo $_SESSION['major3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; วิชาโท </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=minor3 size=30 class="PD3"  value=<?echo $_SESSION['minor3'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; จาก</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=from4 size=4 class="PD3"  value=<?echo $_SESSION['from4'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ถึง </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=to4 size=4 class="PD3"  value=<?echo $_SESSION['to4'];?>>
        &nbsp;<font class=PD3>(ปี)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ชื่อสถานศึกษา </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=institude4 size=40 class="PD3"  value=<?echo $_SESSION['institude4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; เกรดเฉลี่ย</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=gpa4 size=4 class="PD3"  value=<?echo $_SESSION['gpa4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ระดับการศึกษา</font></div></td>
      <td colspan="10"><div align=left>
<?
     for ($i=0;$i<=9;$i++)   {
	      if  ($_SESSION['degree4'] == $i)   {
		      $Cpoint[$i] = "selected";
			                                                  }
                                         }												  
?>	 
        <select  name="degree4">
          <option value=0 &nbsp; <?=$Cpoint[0]; ?>>
          <option value=1 &nbsp; <?=$Cpoint[1]; ?>>ประถม
          <option value=2 &nbsp; <?=$Cpoint[2]; ?>>มัธยมต้น
          <option value=3 &nbsp; <?=$Cpoint[3]; ?>>มัธยมปลาย 
          <option value=4 &nbsp; <?=$Cpoint[4]; ?>>ปวช
          <option value=5 &nbsp; <?=$Cpoint[5]; ?>>ปวส
          <option value=6 &nbsp; <?=$Cpoint[6]; ?>>อนุปริญญา
          <option value=7 &nbsp; <?=$Cpoint[7]; ?>>ปริญญาตรี
          <option value=8 &nbsp; <?=$Cpoint[8]; ?>>ปริญญาโท
          <option value=9 &nbsp; <?=$Cpoint[9]; ?>>ปริญญาเอก
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; คณะ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=faculty4 size=30 class="PD3"  value=<?echo $_SESSION['faculty4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; วิชาเอก </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=major4 size=30  class="PD3"  value=<?echo $_SESSION['major4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; วิชาโท </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="minor4" size=30  class="PD3"  value=<?echo $_SESSION['minor4'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3> &nbsp; &nbsp; กิจกรรมนอกหลักสูตร</font></div></td>
      <td colspan="10">&nbsp;</td>
    </tr>
    
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 1</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=extracur1 size=55  class="PD3"  value=<?echo $_SESSION['extracur1'];?>>
      </div></td>
    </tr>
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 2</font></div></td>
      <td colspan="10">
	 <div align=left>
        <input  type=text name=extracur2 size=55  class="PD3"  value=<?echo $_SESSION['extracur2'];?>>
      </div>	 </td>
    </tr>
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 3</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=extracur3 size=55  class="PD3"  value=<?echo $_SESSION['extracur3'];?>>
      </div></td>
    </tr>            
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 4</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=extracur4 size=55  class="PD3"  value=<?echo $_SESSION['extracur4'];?>>
      </div></td>
    </tr> 
    <tr>
      <td valign=top><div align=center><font class=PD3>&nbsp; 5</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=extracur5 size=55  class="PD3"  value=<?echo $_SESSION['extracur5'];?>>
      </div></td>
    </tr>         
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
	
    <tr>
      <td valign=top><div align=left> <font color="red" class=PD3></font><font class=PD3>&nbsp; &nbsp; การใช้ภาษา</font></div></td>
      <!--<td colspan="10"><div align=left>&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3">ภาษา</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3">ฟัง</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="PD3">พูด</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3">อ่าน</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3"> เขียน </span></div></td>-->
	  <td colspan=10>
	  <table border=0 cellpadding="0" cellspacing="0" width='69%'>
	  <tr>
		  <td align='center' width=20%><span class="PD3">ภาษา</span></td>
		  <td align='center' width=20%><span class="PD3">ฟัง</span></td>
		  <td align='center' width=20%><span class="PD3">พูด</span></td>
		  <td align='center' width=20%><span class="PD3">อ่าน</span></td>
		  <td align='center' width=20%><span class="PD3">เขียน</span></td>
	  </tr>
	  </table>
	  </td>
	</tr>
	
    <tr>
      <td valign=top><font class="PD3"><font color="red">*</font> 1</font></td>
      <td colspan="10">
      <table border=0 align="left" cellpadding="0" cellspacing="0" width='70%'>
      <tr>
      <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['language1'] == $i)   {
		      $CRT[$i] = "selected";
			                                                  }
                                         }												  
?>	 	 
        <select  name="language1">
        <option value="0" <?=$CRT[0]; ?>>
        <option value="1" <?=$CRT[1]; ?>>ไทย
        <option value="2" <?=$CRT[2]; ?>>อังกฤษ
        <option value="3" <?=$CRT[3]; ?>>จีนกลาง 
        <option value="4" <?=$CRT[4]; ?>>จีน (แต้จิ๋ว)
        <option value="5" <?=$CRT[5]; ?>>ฝรั่งเศษ
        <option value="6" <?=$CRT[6]; ?>>เยอรมัน
        <option value="7" <?=$CRT[7]; ?>>อิตาลี
        <option value="8" <?=$CRT[8]; ?>>สเปน
        <option value="9" <?=$CRT[9]; ?>>อาหรับ
        <option value="10" <?=$CRT[10]; ?>>เกาหลี
        <option value="11" <?=$CRT[11]; ?>>ญี่ปุ่น
      </select>	 </td>
      <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['listen1'] == $i)   {
		      $YA[$i] = "selected";
			                                               }
                                          }												  
?>	 	 
        <select name="listen1">
        <option  value="0" <?=$YA[0]; ?>>
        <option  value="1" <?=$YA[1]; ?>>ดีมาก
        <option  value="2" <?=$YA[2]; ?>>ดี
        <option  value="3" <?=$YA[3]; ?>>ปานกลาง
        <option  value="4" <?=$YA[4]; ?>>ไม่ค่อยดี
      </select>	 </td>
      <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['speak1'] == $i)   {
		      $YB[$i] = "selected";
			                                                }
                                          }												  
?>	
        <select name="speak1">
        <option  value="0" <?=$YB[0]; ?>> 
        <option  value="1" <?=$YB[1]; ?>>ดีมาก
        <option  value="2" <?=$YB[2]; ?>>ดี
        <option  value="3" <?=$YB[3]; ?>>ปานกลาง
        <option  value="4" <?=$YB[4]; ?>>ไม่ค่อยดี
      </select>	 </td>
      <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['read1'] == $i)   {
		      $YC[$i] = "selected";
			                                              }
                                          }												  
?>	 	
        <select name="read1">
        <option  value="0" <?=$YC[0]; ?>>
        <option  value="1" <?=$YC[1]; ?>>ดีมาก
        <option  value="2" <?=$YC[2]; ?>>ดี
        <option  value="3" <?=$YC[3]; ?>>ปานกลาง
        <option  value="4" <?=$YC[4]; ?>>ไม่ค่อยดี
        </select>	 </td>
	 <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['write1'] == $i)   {
		      $YD[$i] = "selected";
			                                              }
                                          }												  
?>	 		 
          <select name="write1">
          <option  value="0" <?=$YD[0]; ?>>
          <option  value="1" <?=$YD[1]; ?>>ดีมาก
          <option  value="2" <?=$YD[2]; ?>>ดี
          <option  value="3" <?=$YD[3]; ?>>ปานกลาง
          <option  value="4" <?=$YD[4]; ?>>ไม่ค่อยดี
          </select>      </td>
      </tr>
	 </table>	 </td>
    </tr>
    <tr>
      <td valign=top><font class="PD3"><font color="red">*</font> 2</font></td>
      <td colspan="10">
      <table border=0 align="left" cellpadding="0" cellspacing="0" width='70%'>
      <tr>
      <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['language2'] == $i)   {
		      $CAT[$i] = "selected";
			                                                     }
                                          }												  
?>	 	 
       <select  name="language2">
        <option value="0" <?=$CAT[0]; ?>>
        <option value="1" <?=$CAT[1]; ?>>ไทย
        <option value="2" <?=$CAT[2]; ?>>อังกฤษ
        <option value="3" <?=$CAT[3]; ?>>จีนกลาง 
        <option value="4" <?=$CAT[4]; ?>>จีน (แต้จิ๋ว)
        <option value="5" <?=$CAT[5]; ?>>ฝรั่งเศษ
        <option value="6" <?=$CAT[6]; ?>>เยอรมัน
        <option value="7" <?=$CAT[7]; ?>>อิตาลี
        <option value="8" <?=$CAT[8]; ?>>สเปน
        <option value="9" <?=$CAT[9]; ?>>อาหรับ
        <option value="10" <?=$CAT[10]; ?>>เกาหลี
        <option value="11" <?=$CAT[11]; ?>>ญี่ปุ่น
      </select>	 </td>
      <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['listen2'] == $i)   {
		      $RA[$i] = "selected";
			                                               }
                                        }												  
?>	 	 
        <select name="listen2">
        <option  value="0" <?=$RA[0]; ?>>
        <option  value="1" <?=$RA[1]; ?>>ดีมาก
        <option  value="2" <?=$RA[2]; ?>>ดี
        <option  value="3" <?=$RA[3]; ?>>ปานกลาง
        <option  value="4" <?=$RA[4]; ?>>ไม่ค่อยดี
        </select>	 </td>
      <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['speak2'] == $i)   {
		      $RB[$i] = "selected";
			                                                }
                                        }												  
?>	 		 
        <select name="speak2">
        <option  value="0" <?=$RB[0]; ?>> 
        <option  value="1" <?=$RB[1]; ?>>ดีมาก
        <option  value="2" <?=$RB[2]; ?>>ดี
        <option  value="3" <?=$RB[3]; ?>>ปานกลาง
        <option  value="4" <?=$RB[4]; ?>>ไม่ค่อยดี
        </select>	 </td>
      <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['read2'] == $i)   {
		      $RC[$i] = "selected";
			                                              }
                                        }												  
?>	 
        <select name="read2">
        <option  value="0" <?=$RC[0]; ?>>
        <option  value="1" <?=$RC[1]; ?>>ดีมาก
        <option  value="2" <?=$RC[2]; ?>>ดี
        <option  value="3" <?=$RC[3]; ?>>ปานกลาง
        <option  value="4" <?=$RC[4]; ?>>ไม่ค่อยดี
        </select>	 </td>
	 <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['write2'] == $i)   {
		      $RD[$i] = "selected";
			                                              }
                                        }												  
?>	 	 
          <select name="write2">
          <option  value="0" <?=$RD[0]; ?>>
          <option  value="1" <?=$RD[1]; ?>>ดีมาก
          <option  value="2" <?=$RD[2]; ?>>ดี
          <option  value="3" <?=$RD[3]; ?>>ปานกลาง
          <option  value="4" <?=$RD[4]; ?>>ไม่ค่อยดี
          </select>   	 </td>
      </tr>
	 </table>	 </td>
    </tr>

    <tr>
      <td valign=top><font class=PD3>&nbsp; 3</font></td>
      <td colspan="10">
      <table border=0 align="left" cellpadding="0" cellspacing="0" width='70%'>
      <tr>
      <td>
<?
     for ($i=0;$i<=11;$i++)   {
	      if  ($_SESSION['language3'] == $i)   {
		      $CKT[$i] = "selected";
                                                                    }
                                         }												  
?>	 	 
        <select  name="language3">
        <option value="0" <?=$CKT[0]; ?>>
        <option value="1" <?=$CKT[1]; ?>>ไทย
        <option value="2" <?=$CKT[2]; ?>>อังกฤษ
        <option value="3" <?=$CKT[3]; ?>>จีนกลาง 
        <option value="4" <?=$CKT[4]; ?>>จีน (แต้จิ๋ว)
        <option value="5" <?=$CKT[5]; ?>>ฝรั่งเศษ
        <option value="6" <?=$CKT[6]; ?>>เยอรมัน
        <option value="7" <?=$CKT[7]; ?>>อิตาลี
        <option value="8" <?=$CKT[8]; ?>>สเปน
        <option value="9" <?=$CKT[9]; ?>>อาหรับ
        <option value="10" <?=$CKT[10]; ?>>เกาหลี
        <option value="11" <?=$CKT[11]; ?>>ญี่ปุ่น
      </select>	 </td>
      <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['listen3'] == $i)   {
		      $JA[$i] = "selected";
                                                              }
                                         }												  
?>	 	 
        <select name="listen3">
        <option  value="0" <?=$JA[0]; ?>>
        <option  value="1" <?=$JA[1]; ?>>ดีมาก
        <option  value="2" <?=$JA[2]; ?>>ดี
        <option  value="3" <?=$JA[3]; ?>>ปานกลาง
        <option  value="4" <?=$JA[4]; ?>>ไม่ค่อยดี
        </select>	 </td>
      <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['speak3'] == $i)   {
		      $JB[$i] = "selected";
                                                               }
                                         }												  
?>	 
        <select name="speak3">
        <option  value="0" <?=$JB[0]; ?>> 
        <option  value="1" <?=$JB[1]; ?>>ดีมาก
        <option  value="2" <?=$JB[2]; ?>>ดี
        <option  value="3" <?=$JB[3]; ?>>ปานกลาง
        <option  value="4" <?=$JB[4]; ?>>ไม่ค่อยดี
      </select>	 </td>
      <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['read3'] == $i)   {
		      $JC[$i] = "selected";
                                                             }
                                         }												  
?>		 
        <select name="read3">
        <option  value="0" <?=$JC[0]; ?>>
        <option  value="1" <?=$JC[1]; ?>>ดีมาก
        <option  value="2" <?=$JC[2]; ?>>ดี
        <option  value="3" <?=$JC[3]; ?>>ปานกลาง
        <option  value="4" <?=$JC[4]; ?>>ไม่ค่อยดี
        </select>	 </td>
	 <td>
<?
     for ($i=0;$i<=4;$i++)   {
	      if  ($_SESSION['write3'] == $i)   {
		      $JD[$i] = "selected";
                                                             }
                                         }												  
?>		 
          <select name="write3">
          <option  value="0" <?=$JD[0]; ?>>
          <option  value="1" <?=$JD[1]; ?>>ดีมาก
          <option  value="2" <?=$JD[2]; ?>>ดี
          <option  value="3" <?=$JD[3]; ?>>ปานกลาง
          <option  value="4" <?=$JD[4]; ?>>ไม่ค่อยดี
          </select>   	 </td>
      </tr>
	 </table>	 </td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font>&nbsp; การพิมพ์ดีด</font></div></td>
      <td colspan="10"><div align=left><font class=PD3>ภาษาอังกฤษ &nbsp;
        <input  type=text name="typingen" size=3  class="PD3" value=<?echo $_SESSION['typingen'];?>>
        &nbsp; /นาที &nbsp; &nbsp; &nbsp; &nbsp; ภาษาไทย &nbsp;
        <input  type=text name="typingth" size=3  class="PD3"  value=<?echo $_SESSION['typingth'];?>>
        / นาที</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3><font color="red">*</font>&nbsp; ทักษะการใช้โปรแกรม</font></div></td>
      <td colspan=2><div align=left><iframe src="employee_choice_program.php" height="150"></iframe></div></td>
      <td colspan=8 valign="top"><div align=left><font class=PD3><font color="red">*</font>&nbsp; ให้เลือกอย่างน้อย 1 โปรแกรม แล้วกดปุ่มยืนยันที่อยู่บรรทัดท้ายสุดด้วย</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3><font color="red">*</font>&nbsp; ความสามารถพิเศษ หรือการใช้โปรแกรมอื่นๆ<br>
        &nbsp; &nbsp; </font></div></td>
      <td colspan="10">
	 <div align=left>
              <table border="0" cellpadding="0"  cellspacing="0">
              <tr>
                   <td><div align=center><font class=PD3><font color="red">*</font>&nbsp;1</font></div></td>
                   <td><div align=center><font class=PD3><font color="red">*</font>&nbsp;2</font></div></td>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;3</font></div></td>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;4</font></div></td>
             </tr>
              <tr>
                   <td><input  type="text" name="otherskill1" size="21"  class="PD3" value=<?echo $_SESSION['otherskill1'];?>></td>
                   <td><input  type="text" name="otherskill2" size="21"  class="PD3" value=<?echo $_SESSION['otherskill2'];?>></td>
                   <td><input  type="text" name="otherskill3" size="21"  class="PD3" value=<?echo $_SESSION['otherskill3'];?>></td>
                   <td><input  type="text" name="otherskill4" size="21"  class="PD3" value=<?echo $_SESSION['otherskill4'];?>></td>
             </tr>
              <tr>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;5</font></div></td>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;6</font></div></td>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;7</font></div></td>
                   <td><div align=center><font class=PD3>&nbsp;&nbsp;8</font></div></td>
             </tr>
              <tr>
                   <td><input  type="text" name="otherskill5" size="21"  class="PD3" value=<?echo $_SESSION['otherskill5'];?>></td>
                   <td><input  type="text" name="otherskill6" size="21"  class="PD3" value=<?echo $_SESSION['otherskill6'];?>></td>
                   <td><input  type="text" name="otherskill7" size="21"  class="PD3" value=<?echo $_SESSION['otherskill7'];?>></td>
                   <td><input  type="text" name="otherskill8" size="21"  class="PD3" value=<?echo $_SESSION['otherskill8'];?>></td>
             </tr>		   		   		   
             </table>
      </div>	 </td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td width="230"><div align="left"><font class="PD3">ประวัติการทำงาน (ล่าสุด)</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>วันที่เริ่ม-วันที่สิ้นสุด</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['tomonth1'] == $i)   {
		      $CAD[$i] = "selected";
			                                                    }
                                          }												  
?>	 	
        <select name="tomonth1">
        <option value="0" <?=$CAD[0]; ?>>เดือน
        <option value="1" <?=$CAD[1]; ?>>1
        <option value="2" <?=$CAD[2]; ?>>2
        <option value="3" <?=$CAD[3]; ?>>3
        <option value="4" <?=$CAD[4]; ?>>4
        <option value="5" <?=$CAD[5]; ?>>5
        <option value="6" <?=$CAD[6]; ?>>6
        <option value="7" <?=$CAD[7]; ?>>7
        <option value="8" <?=$CAD[8]; ?>>8
        <option value="9" <?=$CAD[9]; ?>>9
        <option value="10" <?=$CAD[10]; ?>>10
        <option value="11" <?=$CAD[11]; ?>>11
        <option value="12" <?=$CAD[12]; ?>>12
        </select>

        <select name="toyear1">
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;ปี
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['toyear1'] == $i+2499)      {   
                              $xxa[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$xxa[$i];  ?>>
          <?=$i+2499; ?>
          <?                                     }	  ?>
      </select>	 
      <font class="PD3">&nbsp;ถึง&nbsp;</font>
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['jtomonth1'] == $i)   {
		      $ABC[$i] = "selected";
                                                                   }
                                          }												  
?>	 	
        <select name="jtomonth1">
        <option value="0" <?=$ABC[0]; ?>>เดือน
        <option value="1" <?=$ABC[1]; ?>>1
        <option value="2" <?=$ABC[2]; ?>>2
        <option value="3" <?=$ABC[3]; ?>>3
        <option value="4" <?=$ABC[4]; ?>>4
        <option value="5" <?=$ABC[5]; ?>>5
        <option value="6" <?=$ABC[6]; ?>>6
        <option value="7" <?=$ABC[7]; ?>>7
        <option value="8" <?=$ABC[8]; ?>>8
        <option value="9" <?=$ABC[9]; ?>>9
        <option value="10" <?=$ABC[10]; ?>>10
        <option value="11" <?=$ABC[11]; ?>>11
        <option value="12" <?=$ABC[12];  ?>>12
      </select>

      <select name="jtoyear1">
      <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;ปี
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['jtoyear1'] == $i+2499)      {   
                              $xxb[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$xxb[$i];  ?>>
          <?=$i+2499; ?>
          <?                                           }	  ?>
      </select></div>	 </td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>ชื่อบริษัท</font></div></td>
      <td  colspan="10"><div align=left><input  type="text" name="company1" size="40" class="PD3" value=<?echo $_SESSION['company1'];?> >
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>ตำแหน่ง</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="position1" size="25" class="PD3" value=<?echo $_SESSION['position1'];?> >
      </div></td>
    </tr>
    <tr><?   if  ($_SESSION['showsalary1'] == "T")  {   $NNNG = "checked";  }  else  {   $NNNG = "";   }     ?>
      <td><div align=left><font class=PD3>เงินเดือน</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="salary1" size="8" class="PD3" value=<?echo $_SESSION['salary1'];?>>&nbsp;<input type="checkbox"  name="showsalary1" value="T"  <?=$NNNG;  ?>><font class=PD3>&nbsp;แสดงผลออกทาง resume</font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 1</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus1" size="55" class="PD3" value=<?echo $_SESSION['com1onus1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 2</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus2" size="55" class="PD3" value=<?echo $_SESSION['com1onus2'];?>>
      </div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 3</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus3" size="55" class="PD3" value=<?echo $_SESSION['com1onus3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 4</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus4" size="55" class="PD3" value=<?echo $_SESSION['com1onus4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 5</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus5" size="55" class="PD3" value=<?echo $_SESSION['com1onus5'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 6</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus6" size="55" class="PD3" value=<?echo $_SESSION['com1onus6'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 7</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus7" size="55" class="PD3" value=<?echo $_SESSION['com1onus7'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 8</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus8" size="55" class="PD3" value=<?echo $_SESSION['com1onus8'];?>>
      </div></td>
    </tr>            
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td width="230"><div align="left"><font class="PD3">ประวัติการทำงาน</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>วันที่เริ่ม-วันที่สิ้นสุด</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['tomonth2'] == $i)   {
		      $GAD[$i] = "selected";
			                                                    }
                                          }												  
?>	 	
        <select name="tomonth2">
        <option value="0" <?=$GAD[0]; ?>>เดือน
        <option value="1" <?=$GAD[1]; ?>>1
        <option value="2" <?=$GAD[2]; ?>>2
        <option value="3" <?=$GAD[3]; ?>>3
        <option value="4" <?=$GAD[4]; ?>>4
        <option value="5" <?=$GAD[5]; ?>>5
        <option value="6" <?=$GAD[6]; ?>>6
        <option value="7" <?=$GAD[7]; ?>>7
        <option value="8" <?=$GAD[8]; ?>>8
        <option value="9" <?=$GAD[9]; ?>>9
        <option value="10" <?=$GAD[10]; ?>>10
        <option value="11" <?=$GAD[11]; ?>>11
        <option value="12" <?=$GAD[12]; ?>>12
        </select>

        <select name="toyear2">
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;ปี
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['toyear2'] == $i+2499)      {   
                              $ziiir[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$ziiir[$i];  ?>>
          <?=$i+2499; ?>
          <?                                     }	  ?>
      </select>	 
      <font class="PD3">&nbsp;ถึง&nbsp;</font>
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['jtomonth2'] == $i)   {
		      $ABX[$i] = "selected";
                                                                   }
                                          }												  
?>	 	
        <select name="jtomonth2">
        <option value="0" <?=$ABX[0]; ?>>เดือน
        <option value="1" <?=$ABX[1]; ?>>1
        <option value="2" <?=$ABX[2]; ?>>2
        <option value="3" <?=$ABX[3]; ?>>3
        <option value="4" <?=$ABX[4]; ?>>4
        <option value="5" <?=$ABX[5]; ?>>5
        <option value="6" <?=$ABX[6]; ?>>6
        <option value="7" <?=$ABX[7]; ?>>7
        <option value="8" <?=$ABX[8]; ?>>8
        <option value="9" <?=$ABX[9]; ?>>9
        <option value="10" <?=$ABX[10]; ?>>10
        <option value="11" <?=$ABX[11]; ?>>11
        <option value="12" <?=$ABX[12];  ?>>12
        </select>

        <select name="jtoyear2">
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;ปี
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['jtoyear2'] == $i+2499)      {   
                              $zxxxw[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$zxxxw[$i];  ?>>
          <?=$i+2499; ?>
          <?                                           }	  ?>
      </select></div>	<?=$zxxxw[$i];  ?> </td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>ชื่อบริษัท</font></div></td>
      <td  colspan="10"><div align=left><input  type="text" name="company2" size="40" class="PD3" value=<?echo $_SESSION['company2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>ตำแหน่ง</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="position2" size="25" class="PD3" value=<?echo $_SESSION['position2'];?>>
      </div></td>
    </tr>
    <tr><?   if  ($_SESSION['showsalary2'] == "T")  {   $NNNK = "checked";  }  else  {   $NNNK = "";   }     ?>
      <td><div align=left><font class=PD3>เงินเดือน</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="salary2" size="8" class="PD3" value=<?echo $_SESSION['salary2'];?>>&nbsp;<input type="checkbox"  name="showsalary2" value="T"  <?=$NNNK;  ?>><font class=PD3>&nbsp;แสดงผลออกทาง resume</font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 1</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus1" size="55" class="PD3" value=<?echo $_SESSION['com2onus1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 2</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus2" size="55" class="PD3" value=<?echo $_SESSION['com2onus2'];?>>
      </div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 3</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus3" size="55" class="PD3" value=<?echo $_SESSION['com2onus3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 4</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus4" size="55" class="PD3" value=<?echo $_SESSION['com2onus4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 5</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus5" size="55" class="PD3" value=<?echo $_SESSION['com2onus5'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 6</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus6" size="55" class="PD3" value=<?echo $_SESSION['com2onus6'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 7</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus7" size="55" class="PD3" value=<?echo $_SESSION['com2onus7'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 8</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus8" size="55" class="PD3" value=<?echo $_SESSION['com2onus8'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td width="230"><div align="left"><font class="PD3">ประวัติการทำงาน</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>วันที่เริ่ม-วันที่สิ้นสุด</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['tomonth3'] == $i)   {
		      $YAD[$i] = "selected";
			                                                    }
                                          }												  
?>	 	
        <select name="tomonth3">
        <option value="0" <?=$YAD[0]; ?>>เดือน
        <option value="1" <?=$YAD[1]; ?>>1
        <option value="2" <?=$YAD[2]; ?>>2
        <option value="3" <?=$YAD[3]; ?>>3
        <option value="4" <?=$YAD[4]; ?>>4
        <option value="5" <?=$YAD[5]; ?>>5
        <option value="6" <?=$YAD[6]; ?>>6
        <option value="7" <?=$YAD[7]; ?>>7
        <option value="8" <?=$YAD[8]; ?>>8
        <option value="9" <?=$YAD[9]; ?>>9
        <option value="10" <?=$YAD[10]; ?>>10
        <option value="11" <?=$YAD[11]; ?>>11
        <option value="12" <?=$YAD[12]; ?>>12
        </select>

        <select name="toyear3">
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;ปี
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['toyear3'] == $i+2499)      {   
                              $rox[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$rox[$i];  ?>>
          <?=$i+2499; ?>
          <?                                     }	  ?>
      </select>	 
      <font class="PD3">&nbsp;ถึง&nbsp;</font>
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['jtomonth3'] == $i)   {
		      $PBC[$i] = "selected";
                                                                   }
                                          }												  
?>	 	
        <select name="jtomonth3">
        <option value="0" <?=$PBC[0]; ?>>เดือน
        <option value="1" <?=$PBC[1]; ?>>1
        <option value="2" <?=$PBC[2]; ?>>2
        <option value="3" <?=$PBC[3]; ?>>3
        <option value="4" <?=$PBC[4]; ?>>4
        <option value="5" <?=$PBC[5]; ?>>5
        <option value="6" <?=$PBC[6]; ?>>6
        <option value="7" <?=$PBC[7]; ?>>7
        <option value="8" <?=$PBC[8]; ?>>8
        <option value="9" <?=$PBC[9]; ?>>9
        <option value="10" <?=$PBC[10]; ?>>10
        <option value="11" <?=$PBC[11]; ?>>11
        <option value="12" <?=$PBC[12];  ?>>12
      </select>

	 <select name="jtoyear3">
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;ปี
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['jtoyear3'] == $i+2499)      {   
                              $hibb[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$hibb[$i];  ?>>
          <?=$i+2499; ?>
          <?                                           }	  ?>
      </select></div>	 </td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>ชื่อบริษัท</font></div></td>
      <td  colspan="10"><div align=left><input  type="text" name="company3" size="40" class="PD3" value=<?echo $_SESSION['company3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>ตำแหน่ง</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="position3" size="25" class="PD3" value=<?echo $_SESSION['position3'];?>>
      </div></td>
    </tr>
    <tr><?   if  ($_SESSION['showsalary3'] == "T")  {   $NNND = "checked";  }  else  {   $NNND = "";   }     ?>
      <td><div align=left><font class=PD3>เงินเดือน</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="salary3" size="8" class="PD3" value=<?echo $_SESSION['salary3'];?>>&nbsp;<input type="checkbox"  name="showsalary3" value="T"  <?=$NNND;  ?>><font class=PD3>&nbsp;แสดงผลออกทาง resume</font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 1</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus1" size="55" class="PD3" value=<?echo $_SESSION['com3onus1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 2</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus2" size="55" class="PD3" value=<?echo $_SESSION['com3onus2'];?>>
      </div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 3</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus3" size="55" class="PD3" value=<?echo $_SESSION['com3onus3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 4</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus4" size="55" class="PD3" value=<?echo $_SESSION['com3onus4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 5</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus5" size="55" class="PD3" value=<?echo $_SESSION['com3onus5'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 6</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus6" size="55" class="PD3" value=<?echo $_SESSION['com3onus6'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 7</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus7" size="55" class="PD3" value=<?echo $_SESSION['com3onus7'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>หน้าที่ 8</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus8" size="55" class="PD3" value=<?echo $_SESSION['com3onus8'];?>>
      </div></td>
    </tr>                         
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>    
      <td valign=top>&nbsp;</td>
      <td colspan="10"><div align="left"><input  type="submit"  name="gcontinue"  value="ดำเนินการต่อไป"><button onclick="Javascript: form.action = 'employee_choose_current.php'">กลับ</button></div>
      </div>	 </td>
    </tr>
  </form>
</table>
<br>
   
<?  echo  gfooter();  ?>
</body>
</html>
<?
     switch  ($_SESSION['return2alertclip'])     {
                 case  100  : echo  "<script>alert('ไม่ได้เลือกรูปประจำตัว')</script>";  break;
                 case  2  : echo  "<script>alert('ไม่ได้เลือกคำนำหน้า')</script>";  break;
                 case  3  : echo  "<script>alert('ไม่ได้ใส่ชื่อ')</script>";  break;
                 case  4  : echo  "<script>alert('ไม่ได้ใส่นามสกุล')</script>";  break;
                 case  5  : echo  "<script>alert('ไม่ได้เลือกเพศ')</script>";  break;
                 case  6  : echo  "<script>alert('ไม่ได้เลือกวันที่เกิด')</script>";  break;
                 case  7  : echo  "<script>alert('ไม่ได้เลือกเดือนเกิด')</script>";  break;
                 case  8  : echo  "<script>alert('ไม่ได้เลือกปีเกิด')</script>";  break;						   						   
                 case  9  : echo  "<script>alert('ไม่ได้ใส่รหัสบัตรประชาชน')</script>";  break;
                 case  10  : echo  "<script>alert('ใส่รหัสบัตรประชาชน ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  11  : echo  "<script>alert('ไม่ได้ใส่สัญชาติ')</script>";  break;						   						   						   						   						   
                 case  12 :  echo  "<script>alert('ไม่ได้ใส่สถานะการสมรส')</script>";  break;						   
                 case  13 :  echo  "<script>alert('ไม่ได้ใส่ที่อยู่')</script>";  break;
                 case  14 :  echo  "<script>alert('ไม่ได้เลือกจังหวัด')</script>";  break;						   
                 case  15 :  echo  "<script>alert('ไม่ได้ใส่รหัสไปรษณีย์')</script>";  break;
                 case  16  : echo  "<script>alert('ใส่รหัสไปรษณีย์ ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  17  : echo  "<script>alert('ไม่ได้ใส่อีเมลส์')</script>";  break;
                 case  18  : echo  "<script>alert('ใส่อีเมลส์ผิด')</script>";  break;
                 case  19  : echo  "<script>alert('ใส่เบอร์โทรศัพท์บ้าน ได้เฉพาะตัวเลข')</script>";  break;
                 case  20  : echo  "<script>alert('ไม่ได้ใส่เบอร์โทรศัพท์มือถือ')</script>";  break;
                 case  21  : echo  "<script>alert('ใส่เบอร์โทรศัพท์มือถือ ได้เฉพาะตัวเลข')</script>";  break;
                 case  22  : echo  "<script>alert('ใส่เบอร์โทรศัพท์ที่ทำงาน ได้เฉพาะตัวเลข')</script>";  break;
                 case  23  : echo  "<script>alert('ใส่เบอร์แฟกซ์ ได้เฉพาะตัวเลข')</script>";  break;
                 case  24  : echo  "<script>alert('ไม่ได้เลือกประเภทใบขับขี่')</script>";  break;
                 case  25  : echo  "<script>alert('ไม่ได้เลือกการมีรถส่วนบุคคล')</script>";  break;
                 case  26  : echo  "<script>alert('ไม่ได้ใส่อาชีพปัจจุบัน')</script>";  break;
                 case  27  : echo  "<script>alert('ไม่ได้ใส่ตำแหน่งงานที่สนใจ')</script>";  break;
                 case  28  : echo  "<script>alert('ไม่ได้ใส่เงินเดือนที่ต้องการ 1')</script>";  break;
                 case  29  : echo  "<script>alert('ใส่เงินเดือนที่ต้องการ 1 ได้เฉพาะตัวเลข')</script>";  break;
                 case  30  : echo  "<script>alert('ใส่เงินเดือนที่ต้องการ 2 ได้เฉพาะตัวเลข')</script>";  break;						   						   						   						   						   						   						   						   						   						   						   						   						   						   						   
                 case  31  : echo  "<script>alert('ใส่เงินเดือนที่ต้องการ 3 ได้เฉพาะตัวเลข')</script>";  break;
                 case  32  : echo  "<script>alert('ไม่ได้ใส่งานอดิเรก 1')</script>";  break;
                 case  33  : echo  "<script>alert('ไม่ได้ใส่งานอดิเรก 2')</script>";  break;
                 case  34  : echo  "<script>alert('ไม่ได้ใส่ปีที่เริ่มการศึกษา')</script>";  break;
                 case  35  : echo  "<script>alert('ใส่ปีที่เริ่มการศึกษา ได้เฉพาะตัวเลข')</script>";  break;
                 case  36  : echo  "<script>alert('ไม่ได้ใส่ปีที่สิ้นสุดการศึกษา')</script>";  break;
                 case  37  : echo  "<script>alert('ใส่ปีที่สิ้นสุดการศึกษา ได้เฉพาะตัวเลข')</script>";  break;			  
                 case  38  : echo  "<script>alert('ไม่ได้ใส่ชื่อสถานศึกษา')</script>";  break;
                 case  39  : echo  "<script>alert('ไม่ได้ใส่เกรดเฉลี่ย 1')</script>";  break;
                 case  40  : echo  "<script>alert('ใส่เกรดเฉลี่ย 1 ได้เฉพาะตัวเลข')</script>";  break;
                 case  41  : echo  "<script>alert('ไม่ได้เลือกระดับการศึกษา 1')</script>";  break;
                 case  42  : echo  "<script>alert('ไม่ได้ใส่คณะที่เรียน 1')</script>";  break;
                 case  43  : echo  "<script>alert('ใส่ปีที่เริ่มการศึกษา 2 ได้เฉพาะตัวเลข')</script>";  break;
                 case  44  : echo  "<script>alert('ใส่ปีที่สิ้นสุดการศึกษา 2 ได้เฉพาะตัวเลข')</script>";  break;
                 case  45  : echo  "<script>alert('ใส่เกรดเฉลี่ย 2 ได้เฉพาะตัวเลข')</script>";  break;
                 case  46  : echo  "<script>alert('ใส่ปีที่เริ่มการศึกษา 3 ได้เฉพาะตัวเลข')</script>";  break;
                 case  47  : echo  "<script>alert('ใส่ปีที่สิ้นสุดการศึกษา 3 ได้เฉพาะตัวเลข')</script>";  break;
                 case  48  : echo  "<script>alert('ใส่เกรดเฉลี่ย 3 ได้เฉพาะตัวเลข')</script>";  break;
                 case  49  : echo  "<script>alert('ใส่ปีที่เริ่มการศึกษา 4 ได้เฉพาะตัวเลข')</script>";  break;
                 case  50  : echo  "<script>alert('ใส่ปีที่สิ้นสุดการศึกษา 4 ได้เฉพาะตัวเลข')</script>";  break;
                 case  51  : echo  "<script>alert('ใส่เกรดเฉลี่ย 4 ได้เฉพาะตัวเลข')</script>";  break;
                 case  52  : echo  "<script>alert('ไม่ได้เลือกภาษาที่ช่อง 1')</script>";  break;
                 case  53  : echo  "<script>alert('ไม่ได้เลือกทักษะการฟังช่อง 1')</script>";  break;
                 case  54  : echo  "<script>alert('ไม่ได้เลือกทักษะการพูดช่อง 1')</script>";  break;
                 case  55  : echo  "<script>alert('ไม่ได้เลือกทักษะการอ่านช่อง 1')</script>";  break;
                 case  56  : echo  "<script>alert('ไม่ได้เลือกทักษะการเขียนช่อง 1')</script>";  break;
                 case  57  : echo  "<script>alert('ไม่ได้เลือกภาษา้ที่ช่อง 2')</script>";  break;
                 case  58  : echo  "<script>alert('ไม่ได้เลือกทักษะการฟังที่ช่อง 2')</script>";  break;
                 case  59  : echo  "<script>alert('ไม่ได้เลือกทักษะพูดช่อง 2')</script>";  break;
                 case  60  : echo  "<script>alert('ไม่ได้เลือกทักษะอ่านช่อง 2')</script>";  break;
                 case  61  : echo  "<script>alert('ไม่ได้เลือกทักษะการเขียนช่อง 2')</script>";  break;
                 case  62  : echo  "<script>alert('ไม่ได้ใส่จำนวนคำพิพม์ดีด ภาษาอังกฤษ')</script>";  break;
                 case  63  : echo  "<script>alert('ใส่จำนวนคำพิพม์ดีด ภาษาอังกฤษ ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  64  : echo  "<script>alert('ไม่ได้ใส่จำนวนคำพิพม์ดีด ภาษาไทย')</script>";  break;
                 case  65  : echo  "<script>alert('ใส่จำนวนคำพิพม์ดีด ภาษาไทย ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  66  : echo  "<script>alert('ไม่ได้เลือกทักษะการใช้โปรแกรม')</script>";  break;
                 case  67  : echo  "<script>alert('ไม่ได้ใส่ความสามารถพิเศษ หรือการใช้โปรแกรมภาษาอื่นๆ 1')</script>";  break;
                 case  68  : echo  "<script>alert('ไม่ได้ใส่ความสามารถพิเศษ หรือการใช้โปรแกรมภาษาอื่นๆ 2')</script>";  break;
                 case  69  : echo  "<script>alert('ใส่เงินเดือน 1 ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  70  : echo  "<script>alert('ใส่เงินเดือน 2 ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  71  : echo  "<script>alert('ใส่เงินเดือน 3 ได้เฉพาะตัวเลขเท่านั้น')</script>";  break;
                 case  72  : echo  "<script>alert('ไม่ได้เลือกประเภทงานของอาชีพปัจจุบัน')</script>";  break;
                 case  73  : echo  "<script>alert('ไม่ได้ใส่ประเภทงานที่สนใจ 1')</script>";  break;
                 case  81  : echo  "<script>alert('ใช้ได้เฉพาะไฟต์ JPG , PNG , GIF เท่านั้น')</script>";  break;				  						   						   						   						   						   						   						   						   						   						                                                        
                                                                		}
$_SESSION['return2alertclip'] = 0;
?>