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

<div align="center"><font class="PD9">��Ѥ���Ҫԡ Jobscyber</font></div><br />
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font><----- ��ͧ�ѧ�Ѻ</font></div></td>
      <td colspan="10">&nbsp;</td>
    </tr>
    <tr>
      <td width="550"><div align="left"><font class=PD3>&nbsp; &nbsp; �ٻ�����Ѥ�</font></div></td>
      <td colspan="10"><form action="functions/upload.php" enctype="multipart/form-data" method="post">
	   <div align="left">
       <?/*
	   <input  type="file" name="uploadimage" size=50 class="PD3">
	   <input  type="submit" name="gsubmit" value="�Ѿ��Ŵ">&nbsp; <a href=employee_show_image.php?resumeindex=<?=$_SESSION[resumeindex];  ?>><font class=PD3>���Ҿ</font></a>
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
      <td><div align="left"><font class=PD3><font color="red">* &nbsp;</font>�ӹ�˹��</font></div></td>
     <form action="employee_save_resume_th.php" method="post">
      <td colspan="10"><div align="left">
        <select  name="title">
          <option value="0" <?=$NH0; ?>>
          <option value="1" <?=$NH1; ?>>���
          <option value="2" <?=$NH2; ?>>�ҧ
          <option value="3" <?=$NH3; ?>>�ҧ���
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>����</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="firstname" size=12 class="PD3" value=<?echo $_SESSION['firstname'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>���ʡ��</font></div></td>
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
      <td><div align="left"><font class=PD3><font color="red">*</font> &nbsp; ��</font></div></td>
      <td colspan="10"><div align="left">
        <select  name="gender">
          <option value="0" <?=$gd0; ?>>
          <option value="1" <?=$gd1; ?>>���
          <option value="2" <?=$gd2; ?>>˭ԧ
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>�ѹ����Դ</font></div></td>
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
        &nbsp; <font class=PD3>�ѹ/��͹/��</font> </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; ���˹ѡ</font></div></td>
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
        <font class=PD3> &nbsp; &nbsp; ���š���</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; �����٧</font></div></td>
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
        <font class=PD3> &nbsp; &nbsp; �繵�����</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;���ʺѵû�ЪҪ�</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="idcard" size=15  class="PD3" value=<?echo $_SESSION['passpostid'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;�ѭ�ҵ�</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="nationality" size=8  class="PD3" value=<?echo $_SESSION['nationality'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* </font>&nbsp;ʶҹ��Ҿ�������</font></div></td>
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
          <option value=1 <?=$ab[1]; ?>>�ʴ
          <option value=2 <?=$ab[2]; ?>>�觧ҹ����
          <option value=3 <?=$ab[3]; ?>>���� 
          <option value=4 <?=$ab[4]; ?>>������
          <option value=5 <?=$ab[5]; ?>>���੾����Ш�
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp;&nbsp;���ࡳ�����</font></div></td>
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
          <option  value=1 &nbsp; <?=$ac[1]; ?>>�١ࡳ�����
          <option  value=2 &nbsp; <?=$ac[2]; ?>>�ѧ����ҹ���ࡳ�����
          <option  value=3 &nbsp; <?=$ac[3]; ?>>���Ѻ���¡���
        </select>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color=red>* &nbsp;</font>�������㹡�õԴ���</font></div></td>
      <td colspan="10"><div align="left">
        <input name="address" type="text" class="PD3" size="60"  value=<?echo $_SESSION['address'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp; ࢵ</font></div></td>
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
          <option value=1 &nbsp; <?=$ad[1]; ?>>��ͧ��
          <option value=2 &nbsp; <?=$ad[2]; ?>>��ͧ�����
          <option value=3 &nbsp; <?=$ad[3]; ?>>��ͧ�ʹ
          <option value=4 &nbsp; <?=$ad[4]; ?>>�ѹ�����
          <option value=5 &nbsp; <?=$ad[5]; ?>>�ѵ�بѡ�
          <option value=6 &nbsp; <?=$ad[6]; ?>>����ͧ
          <option value=7 &nbsp; <?=$ad[7]; ?>>�͹���ͧ
          <option value=8 &nbsp; <?=$ad[8]; ?>>�Թᴧ
          <option value=9 &nbsp; <?=$ad[9]; ?>>���Ե
          <option value=10 &nbsp; <?=$ad[10]; ?>>���觪ѹ
          <option value=11 &nbsp; <?=$ad[11]; ?>>����Ѳ��
          <option value=12 &nbsp; <?=$ad[12]; ?>>��觤��
          <option value=13 &nbsp; <?=$ad[13]; ?>>������
          <option value=14 &nbsp; <?=$ad[14]; ?>>�ҧ�͡����
          <option value=15 &nbsp; <?=$ad[15]; ?>>�ҧ�͡�˭
          <option value=16 &nbsp; <?=$ad[16]; ?>>�ҧ�л�
          <option value=17 &nbsp; <?=$ad[17]; ?>>�ҧ�ع��¹
          <option value=18 &nbsp; <?=$ad[18]; ?>>�ҧࢹ
          <option value=19 &nbsp; <?=$ad[19]; ?>>�ҧ������
          <option value=20 &nbsp; <?=$ad[20]; ?>>�ҧ�
          <option value=21 &nbsp; <?=$ad[21]; ?>>�ҧ���
          <option value=22 &nbsp; <?=$ad[22]; ?>>�ҧ��
          <option value=23 &nbsp; <?=$ad[23]; ?>>�ҧ�͹
          <option value=24 &nbsp; <?=$ad[24]; ?>>�ҧ��Ѵ
          <option value=25 &nbsp; <?=$ad[25]; ?>>�ҧ�ѡ
          <option value=26 &nbsp; <?=$ad[26]; ?>>�֧���
          <option value=27 &nbsp; <?=$ad[27]; ?>>�����ѹ
          <option value=28 &nbsp; <?=$ad[28]; ?>>������
          <option value=29 &nbsp; <?=$ad[29]; ?>>������Һ�ѵ�پ���
          <option value=30 &nbsp; <?=$ad[30]; ?>>����
          <option value=31 &nbsp; <?=$ad[31]; ?>>���⢹�
          <option value=32 &nbsp; <?=$ad[32]; ?>>��й��
          <option value=33 &nbsp; <?=$ad[33]; ?>>������ԭ
          <option value=34 &nbsp; <?=$ad[34]; ?>>�չ����
          <option value=35 &nbsp; <?=$ad[35]; ?>>�ҹ����
          <option value=36 &nbsp; <?=$ad[36]; ?>>�Ҫ���
          <option value=37 &nbsp; <?=$ad[37]; ?>>��ɯ���ó�
          <option value=38 &nbsp; <?=$ad[38]; ?>>�Ҵ��кѧ
          <option value=39 &nbsp; <?=$ad[39]; ?>>�Ҵ�����
          <option value=40 &nbsp; <?=$ad[40]; ?>>�ѧ�ͧ��ҧ
          <option value=41 &nbsp; <?=$ad[41]; ?>>�Ѳ��
          <option value=42 &nbsp; <?=$ad[42]; ?>>�ǹ��ǧ
          <option value=43 &nbsp; <?=$ad[43]; ?>>�оҹ�٧
          <option value=44 &nbsp; <?=$ad[44]; ?>>����ѹ�ǧ��
          <option value=45 &nbsp; <?=$ad[45]; ?>>�ҷ�
          <option value=46 &nbsp; <?=$ad[46]; ?>>�������
          <option value=47 &nbsp; <?=$ad[47]; ?>>˹ͧ��
          <option value=48 &nbsp; <?=$ad[48]; ?>>˹ͧ�ء
          <option value=49 &nbsp; <?=$ad[49]; ?>>��ѡ���
          <option value=50 &nbsp; <?=$ad[50]; ?>>���¢�ҧ
        </select>
        <font class=PD3> &nbsp; &nbsp; ੾���ࢵ��ا෾෾� ��ҹ��</font> </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color=red>* &nbsp;</font>�ѧ��Ѵ</font></div></td>
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
          <option value="1" &nbsp; <?=$Mpoint[1]; ?>>��ا෾��ҹ��
          <option value="2" &nbsp; <?=$Mpoint[2]; ?>>��к��
          <option value="3" &nbsp; <?=$Mpoint[3]; ?>>�ҭ���
          <option value="4" &nbsp; <?=$Mpoint[4]; ?>>�ҭ������
          <option value="5" &nbsp; <?=$Mpoint[5]; ?>>����Թ���
          <option value="6" &nbsp; <?=$Mpoint[6]; ?>>��ᾧྪ�
          <option value="7" &nbsp; <?=$Mpoint[7]; ?>>�͹��
          <option value="8" &nbsp; <?=$Mpoint[8]; ?>>�ѹ�����
          <option value="9" &nbsp; <?=$Mpoint[9]; ?>>���ԧ���
          <option value="10" &nbsp; <?=$Mpoint[10]; ?>>�ź���
          <option value="11" &nbsp; <?=$Mpoint[11]; ?>>��¹ҷ
          <option value="12" &nbsp; <?=$Mpoint[12]; ?>>�������
          <option value="13" &nbsp; <?=$Mpoint[13]; ?>>�����
          <option value="14" &nbsp; <?=$Mpoint[14]; ?>>��§���
          <option value="15" &nbsp; <?=$Mpoint[15]; ?>>��§����
          <option value="16" &nbsp; <?=$Mpoint[16]; ?>>��ѧ
          <option value="17" &nbsp; <?=$Mpoint[17]; ?>>��Ҵ
          <option value="18" &nbsp; <?=$Mpoint[18]; ?>>�ҡ
          <option value="19" &nbsp; <?=$Mpoint[19]; ?>>��ù�¡
          <option value="20" &nbsp; <?=$Mpoint[20]; ?>>��û��
          <option value="21" &nbsp; <?=$Mpoint[21]; ?>>��þ��
          <option value="22" &nbsp; <?=$Mpoint[22]; ?>>����Ҫ����
          <option value="23" &nbsp; <?=$Mpoint[23]; ?>>�����ո����Ҫ
          <option value="24" &nbsp; <?=$Mpoint[24]; ?>>������ä�
          <option value="25" &nbsp; <?=$Mpoint[25]; ?>>�������
          <option value="26" &nbsp; <?=$Mpoint[26]; ?>>��Ҹ����
          <option value="27" &nbsp; <?=$Mpoint[27]; ?>>��ҹ
          <option value="28" &nbsp; <?=$Mpoint[28]; ?>>���������
          <option value="29" &nbsp; <?=$Mpoint[29]; ?>>�����ҹ�
          <option value="30" &nbsp; <?=$Mpoint[30]; ?>>��ШǺ���բѹ��
          <option value="31" &nbsp; <?=$Mpoint[31]; ?>>��Ҩչ����
          <option value="32" &nbsp; <?=$Mpoint[32]; ?>>�ѵ�ҹ�
          <option value="33" &nbsp; <?=$Mpoint[33]; ?>>��й�������ظ��
          <option value="34" &nbsp; <?=$Mpoint[34]; ?>>�����
          <option value="35" &nbsp; <?=$Mpoint[35]; ?>>�ѧ��
          <option value="36" &nbsp; <?=$Mpoint[36]; ?>>�ѷ�ا
          <option value="37" &nbsp; <?=$Mpoint[37]; ?>>�ԨԵ�
          <option value="38" &nbsp; <?=$Mpoint[38]; ?>>��ɳ��š
          <option value="39" &nbsp; <?=$Mpoint[39]; ?>>ྪú���
          <option value="40" &nbsp; <?=$Mpoint[40]; ?>>ྪú�ó�
          <option value="41" &nbsp; <?=$Mpoint[41]; ?>>���
          <option value="42" &nbsp; <?=$Mpoint[42]; ?>>����
          <option value="43" &nbsp; <?=$Mpoint[43]; ?>>�����ä��
          <option value="44" &nbsp; <?=$Mpoint[44]; ?>>�ء�����
          <option value="45" &nbsp; <?=$Mpoint[45]; ?>>�����ͧ�͹
          <option value="46" &nbsp; <?=$Mpoint[46]; ?>>��ʸ�
          <option value="47" &nbsp; <?=$Mpoint[47]; ?>>����
          <option value="48" &nbsp; <?=$Mpoint[48]; ?>>�������
          <option value="49" &nbsp; <?=$Mpoint[49]; ?>>�йͧ
          <option value="50" &nbsp; <?=$Mpoint[50]; ?>>���ͧ
          <option value="51" &nbsp; <?=$Mpoint[51]; ?>>�Ҫ����
          <option value="52" &nbsp; <?=$Mpoint[52]; ?>>ž����
          <option value="53" &nbsp; <?=$Mpoint[53]; ?>>�ӻҧ
          <option value="54" &nbsp; <?=$Mpoint[54]; ?>>�Ӿٹ
          <option value="55" &nbsp; <?=$Mpoint[55]; ?>>���
          <option value="56" &nbsp; <?=$Mpoint[56]; ?>>�������
          <option value="57" &nbsp; <?=$Mpoint[57]; ?>>ʡŹ��
          <option value="58" &nbsp; <?=$Mpoint[58]; ?>>ʧ���
          <option value="59" &nbsp; <?=$Mpoint[59]; ?>>ʵ��
          <option value="60" &nbsp; <?=$Mpoint[60]; ?>>��طû�ҡ��
          <option value="61" &nbsp; <?=$Mpoint[61]; ?>>��ط�ʧ����
          <option value="62" &nbsp; <?=$Mpoint[62]; ?>>��ط��Ҥ�
          <option value="63" &nbsp; <?=$Mpoint[63]; ?>>������
          <option value="64" &nbsp; <?=$Mpoint[64]; ?>>��к���
          <option value="65" &nbsp; <?=$Mpoint[65]; ?>>�ԧ�����
          <option value="66" &nbsp; <?=$Mpoint[66]; ?>>��⢷��
          <option value="67" &nbsp; <?=$Mpoint[67]; ?>>�ؾ�ó����
          <option value="68" &nbsp; <?=$Mpoint[68]; ?>>����ɮ��ҹ�
          <option value="69" &nbsp; <?=$Mpoint[69]; ?>>���Թ���
          <option value="70" &nbsp; <?=$Mpoint[70]; ?>>˹ͧ���
          <option value="71" &nbsp; <?=$Mpoint[71]; ?>>˹ͧ�������
          <option value="72" &nbsp; <?=$Mpoint[72]; ?>>��ҧ�ͧ
          <option value="73" &nbsp; <?=$Mpoint[73]; ?>>�ӹҨ��ԭ
          <option value="74" &nbsp; <?=$Mpoint[74]; ?>>�شøҹ�
          <option value="75" &nbsp; <?=$Mpoint[75]; ?>>�صôԵ��
          <option value="76" &nbsp; <?=$Mpoint[76]; ?>>�ط�¸ҹ�
          <option value="77" &nbsp; <?=$Mpoint[77]; ?>>�غ��Ҫ�ҹ�
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> <font color="red">*</font>&nbsp; ������ɳ���</font></div></td>
      <td colspan="10"><div align="left">
        <input  type="text" name="postcode" size=10 class="PD3" value=<?echo $_SESSION['postcode'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; �����</font></div></td>
      <td colspan="10"><div align="left">
        <select  name="country">
          <option value=1>��
        </select>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp;<font color="red">*</font>&nbsp; �������</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="email" size=32 class="PD3" value=<?echo $_SESSION['email'];?>>
        <font class=PD3> &nbsp; &nbsp; 1 ������ҹ��</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; �����Ţ�Դ���</font></div></td>
      <td colspan="10"><div align="left"><font class="PD3">������ҡ���� 1 ��������蹴�������ͧ���� , ���������ä</font></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ����ҹ</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="home" size=16  class="PD3"  value=<?echo $_SESSION['home'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font color="red">*</font>&nbsp; ��Ͷ��</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="mobile" size=16  class="PD3"  value=<?echo $_SESSION['mobile'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ���ӧҹ</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="office" size=16  class="PD3"  value=<?echo $_SESSION['office'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ῡ��</font></div></td>
      <td colspan="10"><div align="left">
        <input  type=text name="fax" size=16  class="PD3"  value=<?echo $_SESSION['fax'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align="left"><font class=PD3><font color="red">*</font>&nbsp; 㺢Ѻ���</font></div></td>
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
        <font class=PD3> &nbsp; ������䫴�</font>
        <input  type=checkbox name="driver2" value="T"  <?=$ppb; ?>>
        <font class=PD3> &nbsp; ö¹��</font>
        <input  type=checkbox name="driver3" value="T"  <?=$ppc; ?>>
        <font class=PD3> &nbsp; ö��÷ء ��� ����</font>
	   </div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color="red">*</font>&nbsp; ��ö¹����ǹ����������</font></div></td>
      <td colspan="10"><div align="left">
<?
      switch ($_SESSION['personal_car'])   {
                  case  "T" : $ans = "checked";  break;
                  case  "F" : $ang = "checked";  break;			   
                                                                  }  	        
?>	 	 
        <input  type=radio name="personal_car" value="T"  <?=$ans; ?>>
        <font class=PD3> &nbsp; ��</font> &nbsp;
        <input  type=radio name="personal_car" value="F"  <?=$ang; ?>>
        <font class=PD3> &nbsp; ���</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign="top" colspan="4"><div align="left"><font class="PD3"><font color="red">*</font>&nbsp; ����繹ѡ�֡�Ҩ����� ���� ���ѧ�֡������������͡�������ҹ���� ������㹪�ͧ���ͧҹ��� �ѡ�֡�Ҩ����� ���� ���ѧ�֡������ ���ʺ��ó� 0 �դ�Ѻ</font></div></td>
      <td><div align="left"><font class="PD3">&nbsp;</font></div></td>
      <td><div align="left"><font class="PD3">&nbsp;</font></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3><font color="red">*</font> &nbsp;�Ҫվ�Ѩ�غѹ</font></div></td>
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
<td><div align="left"><font class=PD3>���ʺ��ó�&nbsp; &nbsp; &nbsp; <select name="yearexp">
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
</select>&nbsp; ��
</font></div></td>
    </tr>
   <tr>
      <td><div align="left"><font class=PD3> &nbsp; &nbsp; ���˹觧ҹ���ʹ�</font></div></td>
      <td colspan="10">
	 <div align="left">
              <table border=0 cellpadding="0" cellspacing="0">
              <tr>
              <td width="278"><div align="center"><font class="PD3">�������ҹ</font></div></td>
              <td width="220"><div align="center"><font class="PD3">���˹觧ҹ</font></div></td>
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
              <td><input  type=text name="intsalary1" size="5"  class="PD3"  value=<?echo $_SESSION['intsalary1'];?>><font class="PD3"><font color=white>&nbsp;<--</font> �Թ��͹����ͧ���</font></td>
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
              <td><input  type=text name="intsalary2" size="5"  class="PD3"  value=<?echo $_SESSION['intsalary2'];?>><font class="PD3"><font color=white>&nbsp;<--</font> �Թ��͹����ͧ���</font></td>
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
              <td><input  type=text name="intsalary3" size="5"  class="PD3"  value=<?echo $_SESSION['intsalary3'];?>><font class="PD3"><font color=white>&nbsp;<--</font> �Թ��͹����ͧ���</font></td>
              </tr>
              </table>
      </div>	 </td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align="left"><font class=PD3> &nbsp; &nbsp; �ҹʹ��á</font></div></td>
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
      <td colspan=10><div align="left"><font class=PD3> &nbsp; &nbsp; ����ö�ӧҹ��ҧ�ѧ��Ѵ���������</font></div></td>
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
        <font class=PD3> &nbsp; ��</font> &nbsp;
        <input  type="radio" name="outbkk"  value=F &nbsp;  <?=$dwz; ?>>
        <font class=PD3> &nbsp; �����</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td colspan=10><div align="left"><font class=PD3> &nbsp; &nbsp; ����ö�ӧҹ�͡��������������</font></div></td>
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
        <font class=PD3> &nbsp; ��</font> &nbsp;
        <input  type="radio" name="outth" value="F"   <?=$dmd; ?>>
        <font class=PD3> &nbsp; �����</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=left><font class="PD3">�дѺ����֡�� (�٧�ش)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font> &nbsp;�ҡ</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="from1" size=4   class="PD3"  value=<?echo $_SESSION['from1'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; �֧</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="to1" size=4   class="PD3"  value=<?echo $_SESSION['to1'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; ����ʶҹ�֡��</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="institude1" size=40  class="PD3"  value=<?echo $_SESSION['institude1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; �ô�����</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="gpa1" size=4  class="PD3"  value=<?echo $_SESSION['gpa1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; �дѺ����֡��</font></div></td>
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
          <option value=1 &nbsp; <?=$Qpoint[1]; ?>>��ж�
          <option value=2 &nbsp; <?=$Qpoint[2]; ?>>�Ѹ����
          <option value=3 &nbsp; <?=$Qpoint[3]; ?>>�Ѹ������ 
          <option value=4 &nbsp; <?=$Qpoint[4]; ?>>�Ǫ
          <option value=5 &nbsp; <?=$Qpoint[5]; ?>>���
          <option value=6 &nbsp; <?=$Qpoint[6]; ?>>͹ػ�ԭ��
          <option value=7 &nbsp; <?=$Qpoint[7]; ?>>��ԭ�ҵ��
          <option value=8 &nbsp; <?=$Qpoint[8]; ?>>��ԭ���
          <option value=9 &nbsp; <?=$Qpoint[9]; ?>>��ԭ���͡
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> <font color="red">*</font>&nbsp; ���</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="faculty1" size=30  class="PD3" value=<?echo $_SESSION['faculty1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �͡�Ԫ�</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="major1" size=30  class="PD3" value=<?echo $_SESSION['major1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ��Ԫ�</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="minor1" size=30  class="PD3"  value=<?echo $_SESSION['minor1'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �ҡ</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="from2" size=4  class="PD3"  value=<?echo $_SESSION['from2'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �֧</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=to2 size=4  class="PD3"  value=<?echo $_SESSION['to2'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ����ʶҹ�֡��</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=institude2 size=40 class="PD3"  value=<?echo $_SESSION['institude2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �ô�����</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=gpa2 size=4 class="PD3"  value=<?echo $_SESSION['gpa2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �дѺ����֡��</font></div></td>
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
          <option value=1 &nbsp; <?=$Apoint[1]; ?>>��ж�
          <option value=2 &nbsp; <?=$Apoint[2]; ?>>�Ѹ����
          <option value=3 &nbsp; <?=$Apoint[3]; ?>>�Ѹ������ 
          <option value=4 &nbsp; <?=$Apoint[4]; ?>>�Ǫ
          <option value=5 &nbsp; <?=$Apoint[5]; ?>>���
          <option value=6 &nbsp; <?=$Apoint[6]; ?>>͹ػ�ԭ��
          <option value=7 &nbsp; <?=$Apoint[7]; ?>>��ԭ�ҵ��
          <option value=8 &nbsp; <?=$Apoint[8]; ?>>��ԭ���
          <option value=9 &nbsp; <?=$Apoint[9]; ?>>��ԭ���͡
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ���</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=faculty2 size=30 class="PD3" value=<?echo $_SESSION['faculty2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �Ԫ��͡</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=major2 size=30 class="PD3"  value=<?echo $_SESSION['major2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ��Ԫ� </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=minor2 size=30 class="PD3"  value=<?echo $_SESSION['minor2'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �ҡ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=from3 size=4 class="PD3"  value=<?echo $_SESSION['from3'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �֧ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=to3 size=4 class="PD3" value=<?echo $_SESSION['to3'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ����</font>ʶҹ�֡��</div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=institude3 size=40 class="PD3"  value=<?echo $_SESSION['institude3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �ô�����</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=gpa3 size=4 class="PD3" value=<?echo $_SESSION['gpa3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �дѺ����֡��</font></div></td>
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
          <option value=1 &nbsp; <?=$Bpoint[1]; ?>>��ж�
          <option value=2 &nbsp; <?=$Bpoint[2]; ?>>�Ѹ����
          <option value=3 &nbsp; <?=$Bpoint[3]; ?>>�Ѹ������ 
          <option value=4 &nbsp; <?=$Bpoint[4]; ?>>�Ǫ
          <option value=5 &nbsp; <?=$Bpoint[5]; ?>>���
          <option value=6 &nbsp; <?=$Bpoint[6]; ?>>͹ػ�ԭ��
          <option value=7 &nbsp; <?=$Bpoint[7]; ?>>��ԭ�ҵ��
          <option value=8 &nbsp; <?=$Bpoint[8]; ?>>��ԭ���
          <option value=9 &nbsp; <?=$Bpoint[9]; ?>>��ԭ���͡
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ��� </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=faculty3 size=30 class="PD3"  value=<?echo $_SESSION['faculty3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �Ԫ��͡ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=major3 size=30 class="PD3"  value=<?echo $_SESSION['major3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �Ԫ�� </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=minor3 size=30 class="PD3"  value=<?echo $_SESSION['minor3'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �ҡ</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=from4 size=4 class="PD3"  value=<?echo $_SESSION['from4'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �֧ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=to4 size=4 class="PD3"  value=<?echo $_SESSION['to4'];?>>
        &nbsp;<font class=PD3>(��)</font></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ����ʶҹ�֡�� </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=institude4 size=40 class="PD3"  value=<?echo $_SESSION['institude4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �ô�����</font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=gpa4 size=4 class="PD3"  value=<?echo $_SESSION['gpa4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �дѺ����֡��</font></div></td>
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
          <option value=1 &nbsp; <?=$Cpoint[1]; ?>>��ж�
          <option value=2 &nbsp; <?=$Cpoint[2]; ?>>�Ѹ����
          <option value=3 &nbsp; <?=$Cpoint[3]; ?>>�Ѹ������ 
          <option value=4 &nbsp; <?=$Cpoint[4]; ?>>�Ǫ
          <option value=5 &nbsp; <?=$Cpoint[5]; ?>>���
          <option value=6 &nbsp; <?=$Cpoint[6]; ?>>͹ػ�ԭ��
          <option value=7 &nbsp; <?=$Cpoint[7]; ?>>��ԭ�ҵ��
          <option value=8 &nbsp; <?=$Cpoint[8]; ?>>��ԭ���
          <option value=9 &nbsp; <?=$Cpoint[9]; ?>>��ԭ���͡
        </select>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; ��� </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=faculty4 size=30 class="PD3"  value=<?echo $_SESSION['faculty4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �Ԫ��͡ </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name=major4 size=30  class="PD3"  value=<?echo $_SESSION['major4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3> &nbsp; &nbsp; �Ԫ�� </font></div></td>
      <td colspan="10"><div align=left>
        <input  type=text name="minor4" size=30  class="PD3"  value=<?echo $_SESSION['minor4'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3> &nbsp; &nbsp; �Ԩ�����͡��ѡ�ٵ�</font></div></td>
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
      <td valign=top><div align=left> <font color="red" class=PD3></font><font class=PD3>&nbsp; &nbsp; ���������</font></div></td>
      <!--<td colspan="10"><div align=left>&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3">����</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3">�ѧ</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="PD3">�ٴ</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3">��ҹ</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="PD3"> ��¹ </span></div></td>-->
	  <td colspan=10>
	  <table border=0 cellpadding="0" cellspacing="0" width='69%'>
	  <tr>
		  <td align='center' width=20%><span class="PD3">����</span></td>
		  <td align='center' width=20%><span class="PD3">�ѧ</span></td>
		  <td align='center' width=20%><span class="PD3">�ٴ</span></td>
		  <td align='center' width=20%><span class="PD3">��ҹ</span></td>
		  <td align='center' width=20%><span class="PD3">��¹</span></td>
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
        <option value="1" <?=$CRT[1]; ?>>��
        <option value="2" <?=$CRT[2]; ?>>�ѧ���
        <option value="3" <?=$CRT[3]; ?>>�չ��ҧ 
        <option value="4" <?=$CRT[4]; ?>>�չ (�����)
        <option value="5" <?=$CRT[5]; ?>>�������
        <option value="6" <?=$CRT[6]; ?>>�����ѹ
        <option value="7" <?=$CRT[7]; ?>>�Ե���
        <option value="8" <?=$CRT[8]; ?>>�໹
        <option value="9" <?=$CRT[9]; ?>>����Ѻ
        <option value="10" <?=$CRT[10]; ?>>�����
        <option value="11" <?=$CRT[11]; ?>>�����
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
        <option  value="1" <?=$YA[1]; ?>>���ҡ
        <option  value="2" <?=$YA[2]; ?>>��
        <option  value="3" <?=$YA[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$YA[4]; ?>>�����´�
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
        <option  value="1" <?=$YB[1]; ?>>���ҡ
        <option  value="2" <?=$YB[2]; ?>>��
        <option  value="3" <?=$YB[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$YB[4]; ?>>�����´�
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
        <option  value="1" <?=$YC[1]; ?>>���ҡ
        <option  value="2" <?=$YC[2]; ?>>��
        <option  value="3" <?=$YC[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$YC[4]; ?>>�����´�
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
          <option  value="1" <?=$YD[1]; ?>>���ҡ
          <option  value="2" <?=$YD[2]; ?>>��
          <option  value="3" <?=$YD[3]; ?>>�ҹ��ҧ
          <option  value="4" <?=$YD[4]; ?>>�����´�
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
        <option value="1" <?=$CAT[1]; ?>>��
        <option value="2" <?=$CAT[2]; ?>>�ѧ���
        <option value="3" <?=$CAT[3]; ?>>�չ��ҧ 
        <option value="4" <?=$CAT[4]; ?>>�չ (�����)
        <option value="5" <?=$CAT[5]; ?>>�������
        <option value="6" <?=$CAT[6]; ?>>�����ѹ
        <option value="7" <?=$CAT[7]; ?>>�Ե���
        <option value="8" <?=$CAT[8]; ?>>�໹
        <option value="9" <?=$CAT[9]; ?>>����Ѻ
        <option value="10" <?=$CAT[10]; ?>>�����
        <option value="11" <?=$CAT[11]; ?>>�����
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
        <option  value="1" <?=$RA[1]; ?>>���ҡ
        <option  value="2" <?=$RA[2]; ?>>��
        <option  value="3" <?=$RA[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$RA[4]; ?>>�����´�
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
        <option  value="1" <?=$RB[1]; ?>>���ҡ
        <option  value="2" <?=$RB[2]; ?>>��
        <option  value="3" <?=$RB[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$RB[4]; ?>>�����´�
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
        <option  value="1" <?=$RC[1]; ?>>���ҡ
        <option  value="2" <?=$RC[2]; ?>>��
        <option  value="3" <?=$RC[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$RC[4]; ?>>�����´�
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
          <option  value="1" <?=$RD[1]; ?>>���ҡ
          <option  value="2" <?=$RD[2]; ?>>��
          <option  value="3" <?=$RD[3]; ?>>�ҹ��ҧ
          <option  value="4" <?=$RD[4]; ?>>�����´�
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
        <option value="1" <?=$CKT[1]; ?>>��
        <option value="2" <?=$CKT[2]; ?>>�ѧ���
        <option value="3" <?=$CKT[3]; ?>>�չ��ҧ 
        <option value="4" <?=$CKT[4]; ?>>�չ (�����)
        <option value="5" <?=$CKT[5]; ?>>�������
        <option value="6" <?=$CKT[6]; ?>>�����ѹ
        <option value="7" <?=$CKT[7]; ?>>�Ե���
        <option value="8" <?=$CKT[8]; ?>>�໹
        <option value="9" <?=$CKT[9]; ?>>����Ѻ
        <option value="10" <?=$CKT[10]; ?>>�����
        <option value="11" <?=$CKT[11]; ?>>�����
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
        <option  value="1" <?=$JA[1]; ?>>���ҡ
        <option  value="2" <?=$JA[2]; ?>>��
        <option  value="3" <?=$JA[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$JA[4]; ?>>�����´�
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
        <option  value="1" <?=$JB[1]; ?>>���ҡ
        <option  value="2" <?=$JB[2]; ?>>��
        <option  value="3" <?=$JB[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$JB[4]; ?>>�����´�
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
        <option  value="1" <?=$JC[1]; ?>>���ҡ
        <option  value="2" <?=$JC[2]; ?>>��
        <option  value="3" <?=$JC[3]; ?>>�ҹ��ҧ
        <option  value="4" <?=$JC[4]; ?>>�����´�
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
          <option  value="1" <?=$JD[1]; ?>>���ҡ
          <option  value="2" <?=$JD[2]; ?>>��
          <option  value="3" <?=$JD[3]; ?>>�ҹ��ҧ
          <option  value="4" <?=$JD[4]; ?>>�����´�
          </select>   	 </td>
      </tr>
	 </table>	 </td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3><font color="red">*</font>&nbsp; ��þ����մ</font></div></td>
      <td colspan="10"><div align=left><font class=PD3>�����ѧ��� &nbsp;
        <input  type=text name="typingen" size=3  class="PD3" value=<?echo $_SESSION['typingen'];?>>
        &nbsp; /�ҷ� &nbsp; &nbsp; &nbsp; &nbsp; ������ &nbsp;
        <input  type=text name="typingth" size=3  class="PD3"  value=<?echo $_SESSION['typingth'];?>>
        / �ҷ�</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3><font color="red">*</font>&nbsp; �ѡ�С���������</font></div></td>
      <td colspan=2><div align=left><iframe src="employee_choice_program.php" height="150"></iframe></div></td>
      <td colspan=8 valign="top"><div align=left><font class=PD3><font color="red">*</font>&nbsp; ������͡���ҧ���� 1 ����� ���ǡ������׹�ѹ��������÷Ѵ�����ش����</font></div></td>
    </tr>
    <tr>
      <td colspan=10><div center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td valign=top><div align=left><font class=PD3><font color="red">*</font>&nbsp; ��������ö����� ���͡�������������<br>
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
      <td width="230"><div align="left"><font class="PD3">����ѵԡ�÷ӧҹ (����ش)</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>�ѹ��������-�ѹ�������ش</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['tomonth1'] == $i)   {
		      $CAD[$i] = "selected";
			                                                    }
                                          }												  
?>	 	
        <select name="tomonth1">
        <option value="0" <?=$CAD[0]; ?>>��͹
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
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;��
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['toyear1'] == $i+2499)      {   
                              $xxa[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$xxa[$i];  ?>>
          <?=$i+2499; ?>
          <?                                     }	  ?>
      </select>	 
      <font class="PD3">&nbsp;�֧&nbsp;</font>
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['jtomonth1'] == $i)   {
		      $ABC[$i] = "selected";
                                                                   }
                                          }												  
?>	 	
        <select name="jtomonth1">
        <option value="0" <?=$ABC[0]; ?>>��͹
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
      <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;��
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['jtoyear1'] == $i+2499)      {   
                              $xxb[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$xxb[$i];  ?>>
          <?=$i+2499; ?>
          <?                                           }	  ?>
      </select></div>	 </td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>���ͺ���ѷ</font></div></td>
      <td  colspan="10"><div align=left><input  type="text" name="company1" size="40" class="PD3" value=<?echo $_SESSION['company1'];?> >
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>���˹�</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="position1" size="25" class="PD3" value=<?echo $_SESSION['position1'];?> >
      </div></td>
    </tr>
    <tr><?   if  ($_SESSION['showsalary1'] == "T")  {   $NNNG = "checked";  }  else  {   $NNNG = "";   }     ?>
      <td><div align=left><font class=PD3>�Թ��͹</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="salary1" size="8" class="PD3" value=<?echo $_SESSION['salary1'];?>>&nbsp;<input type="checkbox"  name="showsalary1" value="T"  <?=$NNNG;  ?>><font class=PD3>&nbsp;�ʴ����͡�ҧ resume</font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 1</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus1" size="55" class="PD3" value=<?echo $_SESSION['com1onus1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 2</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus2" size="55" class="PD3" value=<?echo $_SESSION['com1onus2'];?>>
      </div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 3</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus3" size="55" class="PD3" value=<?echo $_SESSION['com1onus3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 4</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus4" size="55" class="PD3" value=<?echo $_SESSION['com1onus4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 5</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus5" size="55" class="PD3" value=<?echo $_SESSION['com1onus5'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 6</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus6" size="55" class="PD3" value=<?echo $_SESSION['com1onus6'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 7</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus7" size="55" class="PD3" value=<?echo $_SESSION['com1onus7'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 8</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com1onus8" size="55" class="PD3" value=<?echo $_SESSION['com1onus8'];?>>
      </div></td>
    </tr>            
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td width="230"><div align="left"><font class="PD3">����ѵԡ�÷ӧҹ</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>�ѹ��������-�ѹ�������ش</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['tomonth2'] == $i)   {
		      $GAD[$i] = "selected";
			                                                    }
                                          }												  
?>	 	
        <select name="tomonth2">
        <option value="0" <?=$GAD[0]; ?>>��͹
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
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;��
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['toyear2'] == $i+2499)      {   
                              $ziiir[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$ziiir[$i];  ?>>
          <?=$i+2499; ?>
          <?                                     }	  ?>
      </select>	 
      <font class="PD3">&nbsp;�֧&nbsp;</font>
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['jtomonth2'] == $i)   {
		      $ABX[$i] = "selected";
                                                                   }
                                          }												  
?>	 	
        <select name="jtomonth2">
        <option value="0" <?=$ABX[0]; ?>>��͹
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
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;��
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['jtoyear2'] == $i+2499)      {   
                              $zxxxw[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$zxxxw[$i];  ?>>
          <?=$i+2499; ?>
          <?                                           }	  ?>
      </select></div>	<?=$zxxxw[$i];  ?> </td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>���ͺ���ѷ</font></div></td>
      <td  colspan="10"><div align=left><input  type="text" name="company2" size="40" class="PD3" value=<?echo $_SESSION['company2'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>���˹�</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="position2" size="25" class="PD3" value=<?echo $_SESSION['position2'];?>>
      </div></td>
    </tr>
    <tr><?   if  ($_SESSION['showsalary2'] == "T")  {   $NNNK = "checked";  }  else  {   $NNNK = "";   }     ?>
      <td><div align=left><font class=PD3>�Թ��͹</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="salary2" size="8" class="PD3" value=<?echo $_SESSION['salary2'];?>>&nbsp;<input type="checkbox"  name="showsalary2" value="T"  <?=$NNNK;  ?>><font class=PD3>&nbsp;�ʴ����͡�ҧ resume</font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 1</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus1" size="55" class="PD3" value=<?echo $_SESSION['com2onus1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 2</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus2" size="55" class="PD3" value=<?echo $_SESSION['com2onus2'];?>>
      </div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 3</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus3" size="55" class="PD3" value=<?echo $_SESSION['com2onus3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 4</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus4" size="55" class="PD3" value=<?echo $_SESSION['com2onus4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 5</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus5" size="55" class="PD3" value=<?echo $_SESSION['com2onus5'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 6</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus6" size="55" class="PD3" value=<?echo $_SESSION['com2onus6'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 7</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus7" size="55" class="PD3" value=<?echo $_SESSION['com2onus7'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 8</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com2onus8" size="55" class="PD3" value=<?echo $_SESSION['com2onus8'];?>>
      </div></td>
    </tr>
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>
    <tr>
      <td width="230"><div align="left"><font class="PD3">����ѵԡ�÷ӧҹ</font></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>�ѹ��������-�ѹ�������ش</font></div></td>
      <td colspan="10"><div align="left">
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['tomonth3'] == $i)   {
		      $YAD[$i] = "selected";
			                                                    }
                                          }												  
?>	 	
        <select name="tomonth3">
        <option value="0" <?=$YAD[0]; ?>>��͹
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
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;��
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['toyear3'] == $i+2499)      {   
                              $rox[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$rox[$i];  ?>>
          <?=$i+2499; ?>
          <?                                     }	  ?>
      </select>	 
      <font class="PD3">&nbsp;�֧&nbsp;</font>
<?
     for ($i=0;$i<=12;$i++)   {
	      if  ($_SESSION['jtomonth3'] == $i)   {
		      $PBC[$i] = "selected";
                                                                   }
                                          }												  
?>	 	
        <select name="jtomonth3">
        <option value="0" <?=$PBC[0]; ?>>��͹
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
        <option value="0">&nbsp;&nbsp;&nbsp;&nbsp;��
          <?   for ($i=1;$i<=60;$i++)	  {
                        if   ($_SESSION['jtoyear3'] == $i+2499)      {   
                              $hibb[$i] = "selected";                             }	?>	
        <option value="<?=$i+2499;  ?>" <?=$hibb[$i];  ?>>
          <?=$i+2499; ?>
          <?                                           }	  ?>
      </select></div>	 </td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>���ͺ���ѷ</font></div></td>
      <td  colspan="10"><div align=left><input  type="text" name="company3" size="40" class="PD3" value=<?echo $_SESSION['company3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>���˹�</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="position3" size="25" class="PD3" value=<?echo $_SESSION['position3'];?>>
      </div></td>
    </tr>
    <tr><?   if  ($_SESSION['showsalary3'] == "T")  {   $NNND = "checked";  }  else  {   $NNND = "";   }     ?>
      <td><div align=left><font class=PD3>�Թ��͹</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="salary3" size="8" class="PD3" value=<?echo $_SESSION['salary3'];?>>&nbsp;<input type="checkbox"  name="showsalary3" value="T"  <?=$NNND;  ?>><font class=PD3>&nbsp;�ʴ����͡�ҧ resume</font>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 1</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus1" size="55" class="PD3" value=<?echo $_SESSION['com3onus1'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 2</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus2" size="55" class="PD3" value=<?echo $_SESSION['com3onus2'];?>>
      </div></td>
    </tr>    
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 3</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus3" size="55" class="PD3" value=<?echo $_SESSION['com3onus3'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 4</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus4" size="55" class="PD3" value=<?echo $_SESSION['com3onus4'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 5</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus5" size="55" class="PD3" value=<?echo $_SESSION['com3onus5'];?>>
      </div></td>
    </tr>
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 6</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus6" size="55" class="PD3" value=<?echo $_SESSION['com3onus6'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 7</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus7" size="55" class="PD3" value=<?echo $_SESSION['com3onus7'];?>>
      </div></td>
    </tr> 
    <tr>
      <td><div align=left><font class=PD3>˹�ҷ�� 8</font></div></td>
      <td  colspan="10"><div align="left"><input  type="text" name="com3onus8" size="55" class="PD3" value=<?echo $_SESSION['com3onus8'];?>>
      </div></td>
    </tr>                         
    <tr>
      <td colspan=10><div align=center><hr width="100%" color="white"></div></td>
    </tr>    
      <td valign=top>&nbsp;</td>
      <td colspan="10"><div align="left"><input  type="submit"  name="gcontinue"  value="���Թ��õ���"><button onclick="Javascript: form.action = 'employee_choose_current.php'">��Ѻ</button></div>
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
                 case  100  : echo  "<script>alert('��������͡�ٻ��Шӵ��')</script>";  break;
                 case  2  : echo  "<script>alert('��������͡�ӹ�˹��')</script>";  break;
                 case  3  : echo  "<script>alert('�����������')</script>";  break;
                 case  4  : echo  "<script>alert('����������ʡ��')</script>";  break;
                 case  5  : echo  "<script>alert('��������͡��')</script>";  break;
                 case  6  : echo  "<script>alert('��������͡�ѹ����Դ')</script>";  break;
                 case  7  : echo  "<script>alert('��������͡��͹�Դ')</script>";  break;
                 case  8  : echo  "<script>alert('��������͡���Դ')</script>";  break;						   						   
                 case  9  : echo  "<script>alert('�����������ʺѵû�ЪҪ�')</script>";  break;
                 case  10  : echo  "<script>alert('������ʺѵû�ЪҪ� ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  11  : echo  "<script>alert('���������ѭ�ҵ�')</script>";  break;						   						   						   						   						   
                 case  12 :  echo  "<script>alert('��������ʶҹС������')</script>";  break;						   
                 case  13 :  echo  "<script>alert('��������������')</script>";  break;
                 case  14 :  echo  "<script>alert('��������͡�ѧ��Ѵ')</script>";  break;						   
                 case  15 :  echo  "<script>alert('��������������ɳ���')</script>";  break;
                 case  16  : echo  "<script>alert('���������ɳ��� ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  17  : echo  "<script>alert('���������������')</script>";  break;
                 case  18  : echo  "<script>alert('����������Դ')</script>";  break;
                 case  19  : echo  "<script>alert('����������Ѿ���ҹ ��੾�е���Ţ')</script>";  break;
                 case  20  : echo  "<script>alert('���������������Ѿ����Ͷ��')</script>";  break;
                 case  21  : echo  "<script>alert('����������Ѿ����Ͷ�� ��੾�е���Ţ')</script>";  break;
                 case  22  : echo  "<script>alert('����������Ѿ����ӧҹ ��੾�е���Ţ')</script>";  break;
                 case  23  : echo  "<script>alert('�������ῡ�� ��੾�е���Ţ')</script>";  break;
                 case  24  : echo  "<script>alert('��������͡������㺢Ѻ���')</script>";  break;
                 case  25  : echo  "<script>alert('��������͡�����ö��ǹ�ؤ��')</script>";  break;
                 case  26  : echo  "<script>alert('���������Ҫվ�Ѩ�غѹ')</script>";  break;
                 case  27  : echo  "<script>alert('����������˹觧ҹ���ʹ�')</script>";  break;
                 case  28  : echo  "<script>alert('���������Թ��͹����ͧ��� 1')</script>";  break;
                 case  29  : echo  "<script>alert('����Թ��͹����ͧ��� 1 ��੾�е���Ţ')</script>";  break;
                 case  30  : echo  "<script>alert('����Թ��͹����ͧ��� 2 ��੾�е���Ţ')</script>";  break;						   						   						   						   						   						   						   						   						   						   						   						   						   						   						   
                 case  31  : echo  "<script>alert('����Թ��͹����ͧ��� 3 ��੾�е���Ţ')</script>";  break;
                 case  32  : echo  "<script>alert('��������ҹʹ��á 1')</script>";  break;
                 case  33  : echo  "<script>alert('��������ҹʹ��á 2')</script>";  break;
                 case  34  : echo  "<script>alert('��������շ�����������֡��')</script>";  break;
                 case  35  : echo  "<script>alert('���շ�����������֡�� ��੾�е���Ţ')</script>";  break;
                 case  36  : echo  "<script>alert('��������շ������ش����֡��')</script>";  break;
                 case  37  : echo  "<script>alert('���շ������ش����֡�� ��੾�е���Ţ')</script>";  break;			  
                 case  38  : echo  "<script>alert('�����������ʶҹ�֡��')</script>";  break;
                 case  39  : echo  "<script>alert('���������ô����� 1')</script>";  break;
                 case  40  : echo  "<script>alert('����ô����� 1 ��੾�е���Ţ')</script>";  break;
                 case  41  : echo  "<script>alert('��������͡�дѺ����֡�� 1')</script>";  break;
                 case  42  : echo  "<script>alert('�������褳з�����¹ 1')</script>";  break;
                 case  43  : echo  "<script>alert('���շ�����������֡�� 2 ��੾�е���Ţ')</script>";  break;
                 case  44  : echo  "<script>alert('���շ������ش����֡�� 2 ��੾�е���Ţ')</script>";  break;
                 case  45  : echo  "<script>alert('����ô����� 2 ��੾�е���Ţ')</script>";  break;
                 case  46  : echo  "<script>alert('���շ�����������֡�� 3 ��੾�е���Ţ')</script>";  break;
                 case  47  : echo  "<script>alert('���շ������ش����֡�� 3 ��੾�е���Ţ')</script>";  break;
                 case  48  : echo  "<script>alert('����ô����� 3 ��੾�е���Ţ')</script>";  break;
                 case  49  : echo  "<script>alert('���շ�����������֡�� 4 ��੾�е���Ţ')</script>";  break;
                 case  50  : echo  "<script>alert('���շ������ش����֡�� 4 ��੾�е���Ţ')</script>";  break;
                 case  51  : echo  "<script>alert('����ô����� 4 ��੾�е���Ţ')</script>";  break;
                 case  52  : echo  "<script>alert('��������͡���ҷ���ͧ 1')</script>";  break;
                 case  53  : echo  "<script>alert('��������͡�ѡ�С�ÿѧ��ͧ 1')</script>";  break;
                 case  54  : echo  "<script>alert('��������͡�ѡ�С�þٴ��ͧ 1')</script>";  break;
                 case  55  : echo  "<script>alert('��������͡�ѡ�С����ҹ��ͧ 1')</script>";  break;
                 case  56  : echo  "<script>alert('��������͡�ѡ�С����¹��ͧ 1')</script>";  break;
                 case  57  : echo  "<script>alert('��������͡��������ͧ 2')</script>";  break;
                 case  58  : echo  "<script>alert('��������͡�ѡ�С�ÿѧ����ͧ 2')</script>";  break;
                 case  59  : echo  "<script>alert('��������͡�ѡ�оٴ��ͧ 2')</script>";  break;
                 case  60  : echo  "<script>alert('��������͡�ѡ����ҹ��ͧ 2')</script>";  break;
                 case  61  : echo  "<script>alert('��������͡�ѡ�С����¹��ͧ 2')</script>";  break;
                 case  62  : echo  "<script>alert('��������ӹǹ�ӾԾ��մ �����ѧ���')</script>";  break;
                 case  63  : echo  "<script>alert('���ӹǹ�ӾԾ��մ �����ѧ��� ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  64  : echo  "<script>alert('��������ӹǹ�ӾԾ��մ ������')</script>";  break;
                 case  65  : echo  "<script>alert('���ӹǹ�ӾԾ��մ ������ ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  66  : echo  "<script>alert('��������͡�ѡ�С���������')</script>";  break;
                 case  67  : echo  "<script>alert('���������������ö����� ���͡����������������� 1')</script>";  break;
                 case  68  : echo  "<script>alert('���������������ö����� ���͡����������������� 2')</script>";  break;
                 case  69  : echo  "<script>alert('����Թ��͹ 1 ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  70  : echo  "<script>alert('����Թ��͹ 2 ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  71  : echo  "<script>alert('����Թ��͹ 3 ��੾�е���Ţ��ҹ��')</script>";  break;
                 case  72  : echo  "<script>alert('��������͡�������ҹ�ͧ�Ҫվ�Ѩ�غѹ')</script>";  break;
                 case  73  : echo  "<script>alert('��������������ҹ���ʹ� 1')</script>";  break;
                 case  81  : echo  "<script>alert('����੾��俵� JPG , PNG , GIF ��ҹ��')</script>";  break;				  						   						   						   						   						   						   						   						   						   						                                                        
                                                                		}
$_SESSION['return2alertclip'] = 0;
?>