<?session_start();?>
<? include ("Allfunction.inc");
$_SESSION['returntoalert'] = 0;

$_SESSION['check_button_addnew'] = "poweron"; 
$_SESSION['check_button_edit'] = "poweroff";
$_SESSION['checknumsave'] = "OFF_OFF_OFF";

$_SESSION['idjob'] = $_POST['id_job'];
$num_job = $_SESSION['idjob']; 
$SQL1 = "Select *  FROM  jobother  WHERE  idcustomer = '$_SESSION[idcompanyvalue]' order by jobname asc";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL1);
$_SESSION[totalrecord] = mysql_num_rows($result);	
$vb=0;
while ($row=mysql_fetch_array($result))                     {    
          $_SESSION['jvalue'][$vb] = $row[jobnumber];
          $_SESSION['jname'][$vb] = $row[jobname];
          $vb++;
		                                                       }

$SQL21 = "Select *  FROM  department order by id asc";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$resultxx= mysql_query($SQL21);
$_SESSION['numrowrecord'] = mysql_num_rows($resultxx);
$mt = 0;
         while ($row=mysql_fetch_array($resultxx)) {
                   $_SESSION['iddepartment'][$mt] = $row['id'];
                   $_SESSION['departmentname'][$mt] = $row['departmentname'];
                   $mt++;
                                                                                   }
if   ($_POST['Fsizz'] == "Preview" and $_SESSION[totalrecord] !=0 )    {   //  start  if  00
     echo  "<meta http-equiv=refresh content='0.1;url=customerpreview.php?lang=th&jjobnumber=$num_job&jjcustomer=$_SESSION[idcompanyvalue]'>";
                                              }

if   ($_POST['bsizz'] == "���͡��")    {   //  start  if  01
          $SQL8 = "Select *  FROM  jobother  WHERE  jobnumber ='$_SESSION[idjob]'";
          mysql_connect($host,$user,$password);mysql_select_db($databasename);
          mysql_query("SET NAMES TIS620");
          $result= mysql_query($SQL8);
          while ($row=mysql_fetch_array($result)) {
                    $_SESSION['Xjobdepartment'] = $row['jobdepartment'];
                    $_SESSION['Xjobname'] = $row['jobname'];
                    $_SESSION['Xqualification'] = $row['qualification'];
                    $_SESSION['Xjobdepartment'] =  $row['jobdepartment'];
                    $_SESSION['Xyearexp'] =  $row['yearexp'];
                    $_SESSION['Xjobdescription'] = $row['jobdescription'];
                    $_SESSION['Xlocationofwork'] = $row['locationofwork'];
                    $_SESSION['Xnumberofposition'] = $row['numberofposition']; 
                    $_SESSION['Xsalary'] = $row['salary']; 
                    $_SESSION['Xbenefit'] = $row['benefit']; 
                    $_SESSION['Xjobname_en']=$row['jobname_en'];
                    $_SESSION['Xqualification_en'] = $row['qualification_en'];
                    $_SESSION['Xjobdescription_en'] = $row['jobdescription_en'];
                    $_SESSION['Xlocationofwork_en'] = $row['locationofwork_en'];
                    $_SESSION['Xbenefit_en'] = $row['benefit_en']; 
                                                                                  }     
		  }   //  end  if  01
							  
if   ($_POST['msizz'] == "��䢵��˹觧ҹ")    {   //  start  if  02
          $_SESSION['check_button_edit'] = "poweron";													   
          $SQL9 = "Select *  FROM  jobother  WHERE  jobnumber ='$_SESSION[idjob]'";
          mysql_connect($host,$user,$password);mysql_select_db($databasename);
          mysql_query("SET NAMES TIS620");
          $result9= mysql_query($SQL9);
          while ($rows=mysql_fetch_array($result9)) {
                    $_SESSION['Xjobdepartment'] = $rows['jobdepartment'];
                    $_SESSION['Xjobname'] = $rows['jobname'];
                    $_SESSION['Xqualification'] = $rows['qualification'];
                    $_SESSION['Xjobdepartment'] =  $rows['jobdepartment'];
                    $_SESSION['Xyearexp'] =  $rows['yearexp'];
                    $_SESSION['Xjobdescription'] = $rows['jobdescription'];
                    $_SESSION['Xlocationofwork'] = $rows['locationofwork'];
                    $_SESSION['Xnumberofposition'] = $rows['numberofposition']; 
                    $_SESSION['Xsalary'] = $rows['salary']; 
                    $_SESSION['Xbenefit'] = $rows['benefit']; 
                    $_SESSION['Xjobname_en']=$rows['jobname_en'];
                    $_SESSION['Xqualification_en'] = $rows['qualification_en'];
                    $_SESSION['Xjobdescription_en'] = $rows['jobdescription_en'];
                    $_SESSION['Xlocationofwork_en'] = $rows['locationofwork_en'];
                    $_SESSION['Xbenefit_en'] = $rows['benefit_en']; 
			                           }                                   
                                                        }   //  end  if  02								  
							  					   
if   ($_POST['$qsizz'] ==  "�������˹觧ҹ�����")    {   //  start  if  03
          $_SESSION['check_button_addnew'] = "poweron";
          mysql_connect($host,$user,$password);mysql_select_db($databasename);
          mysql_query("SET NAMES TIS620");
          $RTSQL = "select * from  jobother  where  idcustomer ='$_SESSION[idcompanyvalue]'";
          $YSQL = "select * from  customerbuffer  where  idcompany ='$_SESSION[idcompanyvalue]'";
          $ycresult = mysql_query($RTSQL);	
          $result2 = mysql_query($YSQL);
          $totalrecord = mysql_num_rows($ycresult);
          while ($row=mysql_fetch_array($result2))           {
                     $Xjobpromotion = $row['jobpromotion'];
          }
          $KSQL = "select * from  product  where  idproduct ='$Xjobpromotion'";
          $result3 = mysql_query($KSQL);
          while ($rowy=mysql_fetch_array($result3))         {
                    $Xposition = $rowy['position'];
          }          
          	
		   if   ($totalrecord  != $Xposition)     {  
				 $_SESSION['checknumsave'] = "OFF_OFF_OFF";
																	   }
		   else  {   
				 $_SESSION['checknumsave'] = "ON_ON_ON";
				 $_SESSION['returncomment'] = 20;
				 echo  "<meta http-equiv=refresh content='0.1;url=customerbuildjob.php'>";
			 }    
															}     //  end  if  03

if   ($_POST['poooll'] == "clear ˹�Ҩ��Ҿ")    {   //  start  if  04
           $_SESSION['Xjobdepartment'] = "";
           $_SESSION['Xjobname'] = "";
           $_SESSION['Xqualification'] = "";
           $_SESSION['Xjobdepartment'] =  "";
           $_SESSION['Xyearexp'] =  "";
           $_SESSION['Xjobdescription'] = "";
           $_SESSION['Xlocationofwork'] = "";
           $_SESSION['Xnumberofposition'] = "";
           $_SESSION['Xsalary'] = ""; 
           $_SESSION['Xbenefit'] = "";
           $_SESSION['Xjobname_en']= "";
           $_SESSION['Xqualification_en'] = "";
           $_SESSION['Xjobdescription_en'] = "";
           $_SESSION['Xlocationofwork_en'] = "";
           $_SESSION['Xbenefit_en'] = "";
	
                                                            }   //  end  if  04										
?>

<?   if  ($_SESSION['statuswebsite'] != "open_program_jobitcity")   {
           echo "<meta http-equiv=refresh content='0.1;url=customer.php'>";
                                                                                                        }
       else     {   echo  main_program ( );    }  

?>	

<?    function   main_program ()    {      ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
<script>
function Check(){
	document.getElementById('showuser').innerHTML = '<?echo $_SESSION['bufferlogin'] . " " ."���ѧ��ҹ���� ";?><a href="firstpage.php">�͡�ҡ�к�</a>';
	document.getElementById("menu").style.marginTop="-1%";
};
</script>
</head>
<body onload="Javascrpit: Check();">

<?  echo gheader(th,0,F);   ?>

<div align=center><br>
<table cellspacing="0" cellpadding="0" border="0">
    <tr>
      <td colspan="2"><div align="center"><font class="PD11"><b>�����ż���Ѻ��Ѥ�</b></font><br>
        </div></td>
      <td height=50></td>
    </tr>
    <tr>
      <td width="130"><div align="left">&nbsp; <span class="PD3">&nbsp;���͡���˹觧ҹ</span></div></td>
      <td><div align="left">
<form name='frm1' action="customerbuildjob.php"  method="post">
          <select name='id_job'>
<?   if  ($_SESSION['totalrecord'] == 0)   {   ?>
           <option>�ѧ����յ��˹觧ҹ
<?
           $_SESSION['Xjobdepartment'] = "";
           $_SESSION['Xjobname'] = "";
           $_SESSION['Xqualification'] = "";
           $_SESSION['Xjobdepartment'] =  "";
           $_SESSION['Xyearexp'] =  "";
           $_SESSION['Xjobdescription'] = "";
           $_SESSION['Xlocationofwork'] = "";
           $_SESSION['Xnumberofposition'] = "";
           $_SESSION['Xsalary'] = ""; 
           $_SESSION['Xbenefit'] = "";
           $_SESSION['Xjobname_en']= "";
           $_SESSION['Xqualification_en'] = "";
           $_SESSION['Xjobdescription_en'] = "";
           $_SESSION['Xlocationofwork_en'] = "";
           $_SESSION['Xbenefit_en'] = "";
?>
<?                                                                  }   ?>
    
<?                   for ($gp=0;$gp<$_SESSION[totalrecord];$gp++) {    ?>
                         <option value=<?=$_SESSION['jvalue'][$gp];   ?> <?  if  ($_SESSION[jvalue][$gp] == $_SESSION[idjob])  {  echo "Selected";  }  ?>><?=$_SESSION['jname'][$gp];  ?></option>
<?                                                           }    ?>


          </select>
<input type=submit  value="���͡��"  name="bsizz">
<input type=submit  value="Preview"  name="Fsizz">
      </div></td>
    </tr>  
    <tr>
      <td width="130"></div></td>
      <td><div align="left">

<input type=submit value="clear ˹�Ҩ��Ҿ"  name=poooll><input type=submit value="�������˹觧ҹ�����"  name=qsizz onclick="<script>document.getElementById('status').style.visibility='visible';</script>"><input type="submit" name="msizz" value="��䢵��˹觧ҹ" onclick="<script>document.getElementById('status').style.visibility='visible';</script>">

      </div></td>
    </tr></form>
    <tr><Form name='frm2' action="customerinserteditjob.php" method="post">
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">�Ңҧҹ</span></div></td>
      <td><div align="left">
          <select name="iddepartment">
          <option selected>
<?                   for ($gp=0;$gp<$_SESSION['numrowrecord'];$gp++) {    ?>
                         <option value=<?=$_SESSION['iddepartment'][$gp];   ?> <?  if ($_SESSION['iddepartment'][$gp] == $_SESSION['Xjobdepartment'])  { echo "selected";  }  ?>><?=$_SESSION['departmentname'][$gp];  ?></option>
<?                                                           }    ?>


          </select>
<?    if   ( $_SESSION['check_button_edit'] == "poweron" )   {  echo "<span id='status'><font class=PD10>&nbsp; &nbsp; &nbsp; �����ʶҹ���䢢�������</font></span>";  }    
        elseif   ( $_SESSION['check_button_addnew'] == "poweron" )   {  echo "<span id='status'><font class=PD10>&nbsp; &nbsp; &nbsp; �����ʶҹ���������������</font></span>";  }     
			else {$_SESSION['check_button_edit']='poweroff';
				  $_SESSION['check_button_addnew']='poweroff';	
			} ?>
	  </div>
      </td>
    </tr>
     <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">���ͧҹ</span></div></td>
      <td><div align="left"><input type="hidden" value=<?=$_SESSION['idjob'];  ?>  name="jobindexnumber" />
          <input type=text class="PD3" name="jobname" size="59" value=<?echo $_SESSION[Xjobname]; ?>>
      </div>
    </td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">�س���ѵԼ����Ѥ�</span></div></td>
      <td valign="top"><div align="left">
          <textarea name="qualification" cols="65" rows="12" class="PD3" ><?echo $_SESSION[Xqualification];  ?></textarea>
     </td>
     <td valign="TOP">
     <font class="PD3"><div align="left">
     <font class="PD2"> &nbsp; &nbsp; &nbsp; &nbsp;*</font>&nbsp;&nbsp;<font class="PD3">�Ը���ҹ<br>
          &nbsp;&nbsp; - ������͡�� ���˹觧ҹ���ѹ�֡����� ������͡���˹觧ҹ<br>
          &nbsp;&nbsp; ����ͧ��ôٷ���ͧ���˹觧ҹ  ���ǡ��������͡��<br>
          &nbsp;&nbsp; �л�ҡ������Ţ����<br>
          &nbsp;&nbsp; - ����������˹觧ҹ���� ��顴������ clear ˹�Ҩ��Ҿ 1 ��<br>
          &nbsp;&nbsp; ���ǡ����� �������˹觧ҹ���� �л�ҡ����ͤ����բ�Ǣ��<br>
          &nbsp;&nbsp; ����͡�͡����������������顴�������ѹ�ա ���ѹ�������º����<br>
          &nbsp;&nbsp; - �����䢵��˹觧ҹ ������͡���˹觧ҹ����ͧ ���͡���˹觧ҹ<br>
          &nbsp;&nbsp; ��������͡����������顴������ ��䢵��˹觧ҹ �л�ҡ���ͤ���<br>
          &nbsp;&nbsp; �͡ʶҹ��բ���Դ��� �������䢢��������º����������顴��� �ѹ�֡�ա����<br>
          &nbsp;&nbsp; �����ѹ���º����
     </font></div>
     </td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">�ѡɳЧҹ</span></div></td>
      <td><div align="left">
	           <?  for  ($i=1;$i<=4;$i++)    { 
                               if    ($i==$_SESSION[Xjobtype])     {
		  $Mpoint[$i] = "selected";
		  break;
                                                                                             }
                                                                           }
                             ?>
          <select name="jobtype">
            <option value="1" &nbsp; <?=$Mpoint[1]; ?>  selected>�ҹ��Ш�</option>
            <option value="2" &nbsp; <?=$Mpoint[2]; ?>>�ҹ�͡����</option>
            <option value="3" &nbsp; <?=$Mpoint[3]; ?>>�ҹ�����</option>
            <option value="4" &nbsp; <?=$Mpoint[4]; ?>>�֡�ҹ</option>
          </select>
      </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">���ʺ��ó�</span></div></td>
      <td><div align="left">
      <?  for  ($i=0;$i<=16;$i++)    { 
                     if    ($i==$_SESSION[Xyearexp])     {
                            $DDpoint[$i] = "selected";
                            break;
                                                                                    }
                                                       }
       ?>
      <select name = "yearexp">
      <option value="0" <?=$DDpoint[0]; ?>>0
      <option value="1" <?=$DDpoint[1]; ?>>1
      <option value="2" <?=$DDpoint[2]; ?>>2
      <option value="3" <?=$DDpoint[3]; ?>>3
      <option value="4" <?=$DDpoint[4]; ?>>4
      <option value="5" <?=$DDpoint[5]; ?>>5
      <option value="6" <?=$DDpoint[6]; ?>>6
      <option value="7" <?=$DDpoint[7]; ?>>7
      <option value="8" <?=$DDpoint[8]; ?>>8
      <option value="9" <?=$DDpoint[9]; ?>>9
      <option value="10" <?=$DDpoint[10]; ?>>10
      <option value="11" <?=$DDpoint[11]; ?>>11
      <option value="12" <?=$DDpoint[12]; ?>>12
      <option value="13" <?=$DDpoint[13]; ?>>13
      <option value="14" <?=$DDpoint[14]; ?>>14
      <option value="15" <?=$DDpoint[15]; ?>>15
      <option value="16" <?=$DDpoint[16]; ?>>>15
      </select>&nbsp; <span class="PD3">��</span>
      </div>
      </td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">��������´�ͧ�ҹ</span></div></td>
      <td><div align="left">
      <textarea name="jobdescription" cols="65" rows="10"  class="PD3"><?echo $_SESSION[Xjobdescription]; ?></textarea>
      </div>
      </td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">ʶҹ��軯Ժѵԧҹ</span></div></td>
      <td><div align="left">
          <input name="locationofwork" type="text" class="PD3"  size="45"  value=<?echo $_SESSION[Xlocationofwork]; ?>>
      </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">�ѵ��</span></div></td>
      <td><div align="left">
          <input name="numberofposition" type="text" class="PD3"  size="3" value=<?=$_SESSION[Xnumberofposition]; ?>>
        &nbsp; <font class="PD3">��</font> </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">�Թ��͹</span></div></td>
      <td><div align="left">
	           <?  switch   ($_SESSION[Xsalary])    { 
                                    case  "0";  $Npoint[0] = "selected";  break; 
                                    case  "6000";  $Npoint[1] = "selected";  break; 
                                    case  "7000";  $Npoint[2] = "selected";  break; 
                                    case  "8000";  $Npoint[3] = "selected";  break; 
                                    case  "9000";  $Npoint[4] = "selected";  break;							                                        
                                    case  "10000";  $Npoint[5] = "selected";  break;  
                                    case  "11000";  $Npoint[6] = "selected";  break;  
                                    case  "12000";  $Npoint[7] = "selected";  break;  
                                    case  "13000";  $Npoint[8] = "selected";  break;
                                    case  "14000";  $Npoint[9] = "selected";  break;
                                    case  "15000";  $Npoint[10] = "selected";  break;	
                                    case  "16000";  $Npoint[11] = "selected";  break;
                                    case  "17000";  $Npoint[12] = "selected";  break;							                                        
                                    case  "18000";  $Npoint[13] = "selected";  break;
                                    case  "19000";  $Npoint[14] = "selected";  break;
                                    case  "20000";  $Npoint[15] = "selected";  break;
                                    case  "21000";  $Npoint[16] = "selected";  break;
                                    case  "22000";  $Npoint[17] = "selected";  break;
                                    case  "23000";  $Npoint[18] = "selected";  break;
                                    case  "24000";  $Npoint[19] = "selected";  break;
                                    case  "25000";  $Npoint[20] = "selected";  break;	
                                    case  "26000";  $Npoint[21] = "selected";  break;
                                    case  "27000";  $Npoint[22] = "selected";  break;							                                        
                                    case  "28000";  $Npoint[23] = "selected";  break;
                                    case  "29000";  $Npoint[24] = "selected";  break;
                                    case  "30000";  $Npoint[25] = "selected";  break;
                                    case  "31000";  $Npoint[26] = "selected";  break;
                                    case  "32000";  $Npoint[27] = "selected";  break;
                                    case  "33000";  $Npoint[28] = "selected";  break;
                                    case  "34000";  $Npoint[29] = "selected";  break;
                                    case  "35000";  $Npoint[30] = "selected";  break;	
                                    case  "36000";  $Npoint[31] = "selected";  break;
                                    case  "37000";  $Npoint[32] = "selected";  break;							                                        
                                    case  "38000";  $Npoint[33] = "selected";  break;
                                    case  "39000";  $Npoint[34] = "selected";  break;
                                    case  "40000";  $Npoint[35] = "selected";  break;
                                    case  "41000";  $Npoint[36] = "selected";  break;
                                    case  "42000";  $Npoint[37] = "selected";  break;							 							 
                                    case  "43000";  $Npoint[38] = "selected";  break;	
                                    case  "44000";  $Npoint[39] = "selected";  break;
                                    case  "45000";  $Npoint[40] = "selected";  break;							                                        
                                    case  "46000";  $Npoint[41] = "selected";  break;
                                    case  "47000";  $Npoint[42] = "selected";  break;
                                    case  "48000";  $Npoint[43] = "selected";  break;
                                    case  "49000";  $Npoint[44] = "selected";  break;
                                    case  "50000";  $Npoint[45] = "selected";  break;
                                    case  "55000";  $Npoint[46] = "selected";  break;
                                    case  "60000";  $Npoint[47] = "selected";  break;
                                    case  "65000";  $Npoint[48] = "selected";  break;	
                                    case  "70000";  $Npoint[49] = "selected";  break;
                                    case  "75000";  $Npoint[50] = "selected";  break;							                                        
                                    case  "80000";  $Npoint[51] = "selected";  break;
                                    case  "85000";  $Npoint[52] = "selected";  break;
                                    case  "90000";  $Npoint[53] = "selected";  break;
                                    case  "95000";  $Npoint[54] = "selected";  break;
                                    case  "100000";  $Npoint[55] = "selected";  break;	
                                    case  "150000";  $Npoint[56] = "selected";  break;
                                    case  "200000";  $Npoint[57] = "selected";  break;							                                        
                                    case  "250000";  $Npoint[58] = "selected";  break;
                                    case  "300000";  $Npoint[59] = "selected";  break;
                                    case  "350000";  $Npoint[60] = "selected";  break;
                                    case  "400000";  $Npoint[61] = "selected";  break;
                                    case  "450000";  $Npoint[62] = "selected";  break;
                                    case  "500000";  $Npoint[63] = "selected";  break;
                                                               }
                 ?>	 
          <select name="salary">
            <option value="0" &nbsp; <?=$Npoint[0]; ?>>����к�</option>		  
            <option value="6000" &nbsp; <?=$Npoint[1]; ?>>6,000</option>
            <option value="7000" &nbsp; <?=$Npoint[2]; ?>>7,000</option>
            <option value="8000" &nbsp; <?=$Npoint[3]; ?>>8,000</option>
            <option value="9000" &nbsp; <?=$Npoint[4]; ?>>9,000</option>
            <option value="10000" &nbsp; <?=$Npoint[5]; ?>>10,000</option>
            <option value="11000" &nbsp; <?=$Npoint[6]; ?>>11,000</option>
            <option value="12000" &nbsp; <?=$Npoint[7]; ?>>12,000</option>
            <option value="13000" &nbsp; <?=$Npoint[8]; ?>>13,000</option>
            <option value="14000" &nbsp; <?=$Npoint[9]; ?>>14,000</option>
            <option value="15000" &nbsp; <?=$Npoint[10]; ?>>15,000</option>
            <option value="16000" &nbsp; <?=$Npoint[11]; ?>>16,000</option>
            <option value="17000" &nbsp; <?=$Npoint[12]; ?>>17,000</option>
            <option value="18000" &nbsp; <?=$Npoint[13]; ?>>18,000</option>
            <option value="19000" &nbsp; <?=$Npoint[14]; ?>>19,000</option>
            <option value="20000" &nbsp; <?=$Npoint[15]; ?>>20,000</option>
            <option value="21000" &nbsp; <?=$Npoint[16]; ?>>21,000</option>
            <option value="22000" &nbsp; <?=$Npoint[17]; ?>>22,000</option>
            <option value="23000" &nbsp; <?=$Npoint[18]; ?>>23,000</option>
            <option value="24000" &nbsp; <?=$Npoint[19]; ?>>24,000</option>
            <option value="25000" &nbsp; <?=$Npoint[20]; ?>>25,000</option>
            <option value="26000" &nbsp; <?=$Npoint[21]; ?>>26,000</option>
            <option value="27000" &nbsp; <?=$Npoint[22]; ?>>27,000</option>
            <option value="28000" &nbsp; <?=$Npoint[23]; ?>>28,000</option>
            <option value="29000" &nbsp; <?=$Npoint[24]; ?>>29,000</option>
            <option value="30000" &nbsp; <?=$Npoint[25]; ?>>30,000</option>
            <option value="31000" &nbsp; <?=$Npoint[26]; ?>>31,000</option>
            <option value="32000" &nbsp; <?=$Npoint[27]; ?>>32,000</option>
            <option value="33000" &nbsp; <?=$Npoint[28]; ?>>33,000</option>
            <option value="34000" &nbsp; <?=$Npoint[29]; ?>>34,000</option>		  		  		  		  
            <option value="35000" &nbsp; <?=$Npoint[30]; ?>>35,000</option>
            <option value="36000" &nbsp; <?=$Npoint[31]; ?>>36,000</option>
            <option value="37000" &nbsp; <?=$Npoint[32]; ?>>37,000</option>
            <option value="38000" &nbsp; <?=$Npoint[33]; ?>>38,000</option>
            <option value="39000" &nbsp; <?=$Npoint[34]; ?>>39,000</option>		  		  		  		  		  
            <option value="40000" &nbsp; <?=$Npoint[35]; ?>>40,000</option>
            <option value="41000" &nbsp; <?=$Npoint[36]; ?>>41,000</option>
            <option value="42000" &nbsp; <?=$Npoint[37]; ?>>42,000</option>
            <option value="43000" &nbsp; <?=$Npoint[38]; ?>>43,000</option>
            <option value="44000" &nbsp; <?=$Npoint[39]; ?>>44,000</option>		  		  		  		  
            <option value="45000" &nbsp; <?=$Npoint[40]; ?>>45,000</option>
            <option value="46000" &nbsp; <?=$Npoint[41]; ?>>46,000</option>
            <option value="47000" &nbsp; <?=$Npoint[42]; ?>>47,000</option>
            <option value="48000" &nbsp; <?=$Npoint[43]; ?>>48,000</option>
            <option value="49000" &nbsp; <?=$Npoint[44]; ?>>49,000</option>		  
            <option value="50000" &nbsp; <?=$Npoint[45]; ?>>50,000</option>
            <option value="55000" &nbsp; <?=$Npoint[46]; ?>>55,000</option>		  
            <option value="60000" &nbsp; <?=$Npoint[47]; ?>>60,000</option>
            <option value="65000" &nbsp; <?=$Npoint[48]; ?>>65,000</option>		  
            <option value="70000" &nbsp; <?=$Npoint[49]; ?>>70,000</option>
            <option value="75000" &nbsp; <?=$Npoint[50]; ?>>75,000</option>		  
            <option value="80000" &nbsp; <?=$Npoint[51]; ?>>80,000</option>
            <option value="85000" &nbsp; <?=$Npoint[52]; ?>>85,000</option>		  
            <option value="90000" &nbsp; <?=$Npoint[53]; ?>>90,000</option>
            <option value="95000" &nbsp; <?=$Npoint[54]; ?>>95,000</option>		  
            <option value="100000" &nbsp; <?=$Npoint[55]; ?>>100,000</option>
            <option value="150000" &nbsp; <?=$Npoint[56]; ?>>150,000</option>
            <option value="200000" &nbsp; <?=$Npoint[57]; ?>>200,000</option>
            <option value="250000" &nbsp; <?=$Npoint[58]; ?>>250,000</option>
            <option value="300000" &nbsp; <?=$Npoint[59]; ?>>300,000</option>
            <option value="350000" &nbsp; <?=$Npoint[60]; ?>>350,000</option>
            <option value="400000" &nbsp; <?=$Npoint[61]; ?>>400,000</option>
            <option value="450000" &nbsp; <?=$Npoint[62]; ?>>450,000</option>
            <option value="500000" &nbsp; <?=$Npoint[63]; ?>>500,000</option>
          </select>
        &nbsp; <font class="PD3">�ҷ</font> </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">���ʴԡ��</span></div></td>
      <td><div align="left">

          <textarea name="benefit" cols="65" rows="8" class="PD3" ><?echo $_SESSION[Xbenefit]; ?></textarea>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left">
        <hr color="white" width="100%" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="left"><font class="PD4"><b>Company data (English)</b></font></div></td>
    </tr>
    <tr>
      <td width="130">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="130"><div align="left"><font class="PD2">*</font>&nbsp;<span class="PD3">Job name</span></div></td>
      <td><div align="left">
          <input type=text name="jobname_en" size="59" class="PD3" value=<?echo $_SESSION[Xjobname_en]; ?>>
      </div></td>
    </tr>    
    <tr>
      <td width="130"><div align="left"><span class="PD2">*</span> <span class="PD3">Qualifications</span> </div></td>
      <td><div align="left">
        <textarea name="qualification_en" cols="65" rows="10" class="PD3"><?echo $_SESSION[Xqualification_en]; ?></textarea>
      </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><span class="PD2">*</span> <span class="PD3">Job Description</span> </div></td>
      <td><div align="left">
        <textarea name="jobdescription_en" cols="65" rows="10" class="PD3" ><?echo $_SESSION[Xjobdescription_en]; ?></textarea>
      </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><span class="PD2">*</span> <span class="PD3">Location of work</span> </div></td>
      <td><div align="left">
        <input name="locationofwork_en" type="text" class="PD3"  size="45" value=<?echo $_SESSION[Xlocationofwork_en]; ?>>
      </div></td>
    </tr>
    <tr>
      <td width="130"><div align="left"><span class="PD2">*</span> <span class="PD3">Benefits </span></div></td>
      <td><div align="left">
        <textarea name="benefit_en" cols="65" rows="8" class="PD3" ><?echo $_SESSION[Xbenefit_en]; ?></textarea>
      </div></td>
    </tr>
    <tr>
      <td width="130"></td>
      <td>
          <div align="left">
		  <? if  ($_SESSION['check_button_addnew'] == "poweron")  {   ?>
		  <input type="hidden" name="cgicommand"  value="insertmode">
		  <?                                                                                                     } 
		  else if  ($_SESSION['check_button_edit'] == "poweron")      {   ?>
		  <input type="hidden" name="cgicommand"  value="editmode">	
                                      <?                                                                                                    }  ?>
																					 
		  <?  if  (($_SESSION['check_button_addnew'] == "poweron" or ($_SESSION['checknumsave'] != "ON_ON_ON") or ($_SESSION['check_button_edit'] == "poweron")))  {     ?>
            <input type="submit"  name="submit" value="�ѹ�֡������" >          
            <input type="reset" name="reset" value="¡��ԡ" >
            </FORM> 
		  <?                                                                                             }     ?>     
          </div></td>
    </tr>
  </table>

</div>
<br>
<br>

<?      switch ($_SESSION['returncomment'])   {
                       case  1;  {  echo "<script>alert('����������ͧҹ');</script>";
                                          $_SESSION['returncomment'] = 0;    				   
		      break;
                                      }
                       case  2;  {  echo "<script>alert('��������س���ѵԼ����Ѥ�');</script>";
                                          $_SESSION['returncomment'] = 0;				   
		      break;
                                      }
                       case  3;  {  echo "<script>alert('��������͡�ѡɳЧҹ');</script>";
                                          $_SESSION['returncomment'] = 0;				   
		      break;
                                      }
                       case  4;  {  echo "<script>alert('����������������´�ͧ�ҹ');</script>";
                                          $_SESSION['returncomment'] = 0;				   
		      break;
                                      }
                       case  5;  {  echo "<script>alert('��������ʶҹ��軮Ժѵԧҹ');</script>";
                                          $_SESSION['returncomment'] = 0;				   
		      break;
                                      }
                       case  6;  {  echo "<script>alert('��������ӹǹ�ѵ��');</script>";
                                          $_SESSION['returncomment'] = 0;				   
		      break;
                                      }
                       case  8;  {  echo "<script>alert('���������ͤ���㹪�ͧ ���ʴԡ��');</script>";
                                          $_SESSION['returncomment'] = 0;				   				   
		      break;
                                      }
                       case  9;  {  echo "<script>alert('���������ͤ���㹪�ͧ �Ը���Ѥ�');</script>";
                                          $_SESSION['returncomment'] = 0;				   
		      break;
                                      }							   
                       case  11;  {  echo "<script>alert('���������ͤ�������ͧ job name');</script>";
                                            $_SESSION['returncomment'] = 0; 				   
                                            break;
                                        }
                       case  12;  {  echo "<script>alert('���������͵���㹪�ͧ qualification');</script>";
                                            $_SESSION['returncomment'] = 0;				   
                                            break;
                                        }
                       case  13;  {  echo "<script>alert('��������͡�ѡɳЧҹ㹪�ͧ job type');</script>"; 
                                            $_SESSION['returncomment'] = 0;
                                            break;
                                        }
                       case  14;  {  echo "<script>alert('���������ͤ���㹪�ͧ job description');</script>";
                                            $_SESSION['returncomment'] = 0;
                                            break;
                                        }
                       case  15;  {  echo "<script>alert('��������ʶҹ��軮Ժѵԧҹ 㹪�ͧ location of work');</script>";
                                            $_SESSION['returncomment'] = 0; 				   
	                          break;
                                        }
                       case  18;  {  echo "<script>alert('���������ͤ���㹪�ͧ benefit');</script>";
                                            $_SESSION['returncomment'] = 0; 
                                            break;
                                        }
                       case  19;  {  echo "<script>alert('���������ͤ���㹪�ͧ how to apply');</script>";
                                            $_SESSION['returncomment'] = 0;
                                            break;
                                        }
                       case  20;  {  echo "<script>alert('�������ö�ʧҹ�� ������� package ���Ǥ�Ѻ');</script>";
                                            $_SESSION['returncomment'] = 0;
                                            break;
                                        }
                                                                            }
$_SESSION['Xjobname'] = "";
$_SESSION['Xqualification'] = "";
$_SESSION['Xjobdepartment'] =  "";
$_SESSION['Xyearexp'] =  "";
$_SESSION['Xjobdescription'] = "";
$_SESSION['Xlocationofwork'] = "";
$_SESSION['Xnumberofposition'] = "";
$_SESSION['Xsalary'] = ""; 
$_SESSION['Xbenefit'] = "";
$_SESSION['Xhowtoapply'] = "";
$_SESSION['Xjobname_en']= "";
$_SESSION['Xqualification_en'] = "";
$_SESSION['Xjobdescription_en'] = "";
$_SESSION['Xlocationofwork_en'] = "";
$_SESSION['Xbenefit_en'] = "";
$_SESSION['Xhowtoapply_en'] = "";
 
$_SESSION['returncheckbutton'] = "F";
?>
<?   echo  gfooter();   ?>    

</body>
</html>
<?                                                        }         ?>