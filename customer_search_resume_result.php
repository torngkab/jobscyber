<?
session_start();
if  ($_SESSION['promotion'] == "T")   {
include ("Allfunction.inc");
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");

$_SESSION[zdepartment] = $_GET[department];
$_SESSION[zgender] = $_GET[gender];
$_SESSION[zdegree] = $_GET[degree];
$_SESSION[zprovince] = $_GET[province];
$_SESSION[zumphur] = $_GET[umphur];
$_SESSION[zexperinece] = $_GET[experinece];
$_SESSION[zexpyear] = $_GET[expyear];
$_SESSION[zsalary] = $_GET[salary];
$_SESSION[zsalaryvalue] = $_GET[salaryvalue];
$_SESSION[zsearchname] = $_GET[searchname];
$_SESSION[zsendpage] = $_GET[sendpage];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
function  returnpage()
{
document.gegee.method = "GET";	
document.gegee.action = "customer_search_resume_result.php";
document.gegee.submit( );
}
function Check(){
	document.getElementById('showuser').innerHTML = '<?echo $_SESSION['bufferlogin'] . " " ."���ѧ��ҹ���� ";?><a href="firstpage.php">�͡�ҡ�к�</a>';
};
</script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title>jobscyber</title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body onload="Javascript: Check();">
<? echo gheader($_GET[lang],$_GET[atpage],$_GET[thisbanner]);  ?>
<div align=center><br><br>
<font class="PD14">���Ҥ��ӧҹ</font>
<table cellspacing="0" cellpadding="0" border="0" width="85%">
<tr height="25">
<td valign="top"><hr size=0 width="100%" color="white"></td>
</tr>
<tr><form name="gegee">
<td><div  align="left"><font class="PD3">�������ҹ&nbsp;</font> <select name="department" class="PD3">
<option value="0">�ء������
<?
for ($i=1;$i<=25;$i++)  {
      if  ($_SESSION[zdepartment] == $i)   {
           $Dpoint[$i] = "selected";
                                                                        }
                                       }
$BSQL = "Select *  FROM  department order by id asc";
$resultB= mysql_query($BSQL);
$j = 1; 
while ($rowb=mysql_fetch_array($resultB))    {    //   start while B   ?>
<option value=<?=$rowb['id'];  ?> &nbsp; <?=$Dpoint[$j];  ?>><?=$rowb['departmentname'];  ?>
<?    $j++;                                                              }   // end while B  ?>
</select>
<?  switch ($_SESSION['zgender'])  {
                  case "0" : $NH0="selected"; break;
                  case "1" : $NH1="selected"; break;
                  case "2" : $NH2="selected"; break;
                                                                }
?>
<font class="PD3">��&nbsp;</font>
<select name="gender" class="PD3">
<option value="0" <?=$NH0;  ?>>������
<option value="1" <?=$NH1;  ?>>���
<option value="2" <?=$NH2;  ?>>˭ԧ
</select>
<?  switch ($_SESSION['zdegree'])  {
                  case "0" : $MF0="selected"; break;
                  case "1" : $MF1="selected"; break;
                  case "2" : $MF2="selected"; break;
                  case "3" : $MF3="selected"; break;
                  case "4" : $MF4="selected"; break;
                  case "5" : $MF5="selected"; break;
                  case "6" : $MF6="selected"; break;
                  case "7" : $MF7="selected"; break;
                  case "8" : $MF8="selected"; break;
                  case "9" : $MF9="selected"; break;
                                                                }
?>
<font class="PD3">�дѺ����֡���٧�ش&nbsp;</font>
<select  name="degree" class="PD3">
<option value=0 &nbsp; <?=$MF0; ?>>������
<option value=1 &nbsp; <?=$MF1; ?>>��ж�
<option value=2 &nbsp; <?=$MF2; ?>>�Ѹ����
<option value=3 &nbsp; <?=$MF3; ?>>�Ѹ������ 
<option value=4 &nbsp; <?=$MF4; ?>>�Ǫ
<option value=5 &nbsp; <?=$MF5; ?>>���
<option value=6 &nbsp; <?=$MF6; ?>>͹ػ�ԭ��
<option value=7 &nbsp; <?=$MF7; ?>>��ԭ�ҵ��
<option value=8 &nbsp; <?=$MF8; ?>>��ԭ���
<option value=9 &nbsp; <?=$MF9; ?>>��ԭ���͡
</select>
<?
     for ($i=0;$i<=77;$i++)   {
            if  ($_SESSION['zprovince'] == $i)   {
                 $Mpoint[$i] = "selected";
	                                                        }
                                              }												  
?>

<font class="PD3">�ѧ��Ѵ&nbsp;</font>
          <select  name="province" class="PD3" onchange="returnpage();">
          <option value="0" &nbsp; <?=$Mpoint[0]; ?>>�ء�ѧ��Ѵ
          <option value="1" &nbsp; <?=$Mpoint[1]; ?>>��ا෾��ҹ��
          <option value="2" &nbsp; <?=$Mpoint[2]; ?>>��к��
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
          <option value="3" &nbsp; <?=$Mpoint[3]; ?>>�֧���
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
<?//�ʴ�ࢵ?>
<?
     for ($i=0;$i<=51;$i++)   {
            if  ($_SESSION['zumphur'] == $i)   {
                 $Apoint[$i] = "selected";
	                                                        }
                                              }												  
?>

<script>
function test(){
	var e = document.getElementById("umphur").value;
	//alert(e);
	//document.gegee.method = "GET";	
	//document.gegee.action = "customer_search_resume_result.php";
	document.gegee.submit( );
	}
</script>
<font class="PD3">ࢵ&nbsp;</font>
<select  name="umphur" id="umphur" class="PD3" onchange="test();">
<?
$CSQL = "Select *  FROM  umphur where id_index = '".$_GET[province]."'order by id,name_th asc";
$resultC= mysql_query($CSQL);
$j = 0;
while ($rowc=mysql_fetch_array($resultC))    {      //   start while C   
?>
<option value=<?=$rowc['id'];  ?>&nbsp; <?=$Apoint[$j]; ?>><?=$rowc['name_th'];  ?>
<?   $j++;                                                               }      //   end while C    ?>
</select>


</div>
</td>
</tr>
<tr>
<td>
<div align="left">
<?  switch ($_SESSION['zexperinece'])  {
                  case "0" : $BG0="selected"; break;
                  case "1" : $BG1="selected"; break;
                  case "2" : $BG2="selected"; break;
                  case "3" : $BG3="selected"; break;
                                                                      }
?>
<font class="PD3">���ʺ��ó�&nbsp;</font>
<select  name="experinece" class="PD3">
<option value="0" <?=$BG0;  ?>>
<option value="1" <?=$BG1;  ?>>��ҡѺ
<option value="2" <?=$BG2;  ?>>�ҡ������ҡѺ
<option value="3" <?=$BG3;  ?>>���¡�����ҡѺ
</select>

<?
     for ($i=0;$i<=15;$i++)   {
            if  ($_SESSION['zexpyear'] == $i)   {
                 $Bpoint[$i] = "selected";
	                                                        }
                                              }												  
?>

<select  name="expyear" class="PD3">
<?  for ($i=0;$i<=15;$i++)  {  ?>
<option value=<?=$i; ?> &nbsp; <?=$Bpoint[$i]; ?>><?=$i; ?>
<?                                          } ?>
</select>
<font class="PD3">��&nbsp;</font>

<?  switch ($_SESSION['zsalary'])  {
                  case "0" : $CG0="selected"; break;
                  case "1" : $CG1="selected"; break;
                  case "2" : $CG2="selected"; break;
                  case "3" : $CG3="selected"; break;
                                                                      }
?>

<font class="PD3">�дѺ�Թ��͹ &nbsp;��ҡѺ</font>

<?
     for ($i=2;$i<=100;$i++)   {
            if  ($_SESSION['zsalaryvalue'] == $i*1000)   {
                 $Cpoint[$i*1000] = "selected";
	                                                            }
                                               }												  

     for ($k=110;$k<=200;$k++)   {
            if  ($_SESSION['zsalaryvalue'] == $k*1000)   {
                 $Cpoint[$k*1000] = "selected";
	                                                              }  
                                                       }
												  
?>
<select  name="salaryvalue" class="PD3">
<option value=0>
<?  for ($i=2;$i<=100;$i++)  {  ?>
<option value=<?=$i*1000; ?> &nbsp; <?=$Cpoint[$i*1000];  ?>><?=$i*1000; ?>
<?                                            } ?>

<?   
$i=110;
while ($i<=200)  {  ?>
<option value=<?=$i*1000; ?> &nbsp; <?=$Cpoint[$i*1000];  ?>><?=$i*1000; ?>
<?    $i=$i+10;    }  ?>

</select>
<font class="PD3">�ҷ&nbsp;</font>
<font class="PD3">�ӷ�������&nbsp;</font>
<input type="text" name="searchname" size="33" class="PD3" value=<?=eregi_replace(" ","&nbsp;",$_SESSION[zsearchname]);  ?>>
<input type="submit" name="gsubmit" value="����" onclick="returnpage()">
</form>
</div>
</td>
</tr>
<tr height="25">
<td valign="bottom"><hr size=0 width="100%" color="white"></td>

</tr>
</table>
<?
$perpage = 20;
if  ($_GET['sendpage']=="")  {
    $HPG=0;                                
                                                     }
else {  $HPG=$_GET['sendpage'];  }

if  ($_GET[gender] == 0)  {
	$sign1 = "<>";
                                   }
else  {  $sign1 = "=";   }

if  ($_GET[degree] == 0)  {
	$sign2 = "<>";
                                   }
else  {  $sign2 = "=";   }

if  ($_GET[province] == 0)  {
	$sign3 = "<>";
                                   }
else  {  $sign3 = "=";   }
                                   
if  ($_GET[umphur] == 0)  {
	$sign4 = "<>";
                                   }
else  {  $sign4 = "=";   }

switch  ($_GET[experinece])   {
	       case 0 : { $sign5 = "<>"; break;  }
	       case 1 : { $sign5 = "="; break; }
	       case 2 : { $sign5 = ">="; break;  }
	       case 3 : { $sign5 = "<="; break; }
                                           }  //  end switch
                                           
if  ($_GET[experinece] = 0 and $_GET[expyear] >= 0)  {
	$sign5 = "<>";
                                                                          }

$geek6 = "=";

if  ($_GET[salaryvalue] == 0)  {
	$geek6 = "<>";
                                   }

$geek1 = "=";

if  ($_GET[department] == 0)  {
     $geek1 = "<>";
                                                     }

if   ($_GET[reversename] != "")   {
$xname = $_GET[reversename];
$buffername = explode("+",$xname);  
}
else  {
$xname = $_GET[searchname];    
$buffername = explode(" ",$xname);
         }
$maxcount = count($buffername);
$ASQL = "Select *  FROM  employee_resume_th where (departmentid".$geek1."'$_GET[department]') and gender".$sign1."'$_GET[gender]' and edt1_degree".$sign2."'$_GET[degree]' and province".$sign3."'$_GET[province]' and district".$sign4."'$_GET[umphur]' and yearexp".$sign5."'$_GET[expyear]' and (intsalary1".$geek6."'$_GET[salaryvalue]' or intsalary2".$geek6."'$_GET[salaryvalue]' or intsalary3".$geek6."'$_GET[salaryvalue]')";
if   (checkblankstring($_GET[searchname]) == "true")   {
     $GSQL = "Select *  FROM  employee_resume_th where (departmentid".$geek1."'$_GET[department]') and gender".$sign1."'$_GET[gender]' and edt1_degree".$sign2."'$_GET[degree]' and province".$sign3."'$_GET[province]' and district".$sign4."'$_GET[umphur]' and yearexp".$sign5."'$_GET[expyear]' and (intsalary1".$geek6."'$_GET[salaryvalue]' or intsalary2".$geek6."'$_GET[salaryvalue]' or intsalary3".$geek6."'$_GET[salaryvalue]') order by resumeupdate desc limit $HPG,$perpage";
     $resultA= mysql_query($ASQL);
    $totalrec = mysql_num_rows($resultA);   	
                                                                          }
else  {  $BuffSQL = "";
	       for($i=0;$i<=$maxcount-1;$i++)  {  //  start for loop
	            if  ($i == 0)  {
		            $BuffSQL= $BuffSQL."and careerobjective like '%$buffername[$i]%' or interestingposition1 like '%$buffername[$i]%' or interestingposition2 like '%$buffername[$i]%' or interestingposition3 like '%$buffername[$i]%'";
	                             }
	            else  {  $BuffSQL = $BuffSQL."or careerobjective like '%$buffername[$i]%' or interestingposition1 like '%$buffername[$i]%' or interestingposition2 like '%$buffername[$i]%' or interestingposition3 like '%$buffername[$i]%'";   }                 
	            
	                                                     }  // end for loop
	       $MSQL= $ASQL.$BuffSQL;
	       $GSQL= $MSQL."order by resumeupdate desc limit $HPG,$perpage";
	       $resultM= mysql_query($MSQL);
           $totalrec = mysql_num_rows($resultM);   
        }

$resultG= mysql_query($GSQL);                                                                                                                        
                   
while ($rowa=mysql_fetch_array($resultG))    {  ?> 
                                                                  
<table cellspacing="0" cellpadding="0" border="0" width="85%">
<tr>
<td rowspan="5" width="100"><a href="customer_search_resumeform_th.php?resumeindex=<?=$rowa[idresume];  ?>"><?  if  (!empty($_SESSION['image']))  { ?><img border=1 src="functions/image.php?idresume=<?echo $rowa[idresume];?>" width=185px height=180px></img><!--<img src="employee_show_image.php?resumeindex=<?=$rowa[idresume];  ?>" border="0" width="100" height="110">--><?  } elseif ($rowa["gender"] == 1)  { ?><img src="images/man.png" border="0" width="185" height="180"><?  } else { ?><img src="images/woman.png" border="0" width="185" height="180"><?  }   ?></a></td>
<td width="65%"><div align="left"><a href="customer_search_resumeform_th.php?resumeindex=<?=$rowa[idresume];  ?>"><font class="PD3">&nbsp; ���� <?=$rowa['firstname'];  ?> ���ʡ�� <?=$rowa['lastname'];  ?></font></a></div></td>
<?
$strbufferdate = strval($rowa['resumesignup']);
$bufferyear = substr($strbufferdate,0,4);
$buffermonth = substr($strbufferdate,4,2);
$bufferdate = substr($strbufferdate,6,2);
?>
<td><div align="left"><?=$bufferdate."/".$buffermonth."/".$bufferyear; ?></div></td>
</tr>

<tr>
<td><div align="left"><font class="PD3">&nbsp; �� <?=encodegender_th($rowa['gender']);  ?> ���� 28 �� �زԡ���֡���٧�ش <?=encodedeegree_th($rowa['edt1_degree']);  ?> �Ң� <?=$rowa['edt1_faculty'];  ?> ���ʺ��ó� <?=$rowa['yearexp'];  ?> ��</font></div></td>
</tr>

<tr>
<td>
<div align="left"><font class="PD3">&nbsp; ʹ�㹵��˹� 1.) <?=$rowa['interestingposition1'];  ?> �Թ��͹����ͧ��� <?=$rowa['intsalary1'];  ?> �ҷ</font></div>
<div align="left"><?  if  ($rowa['interestingposition2'] != "")  {  ?><font class="PD3">&nbsp; ʹ�㹵��˹� 2.) <?=$rowa['interestingposition2'];  ?> �Թ��͹����ͧ��� <?=$rowa['intsalary2'];  ?> �ҷ</font></div><?  }  ?>
<div align="left"><?  if  ($rowa['interestingposition3'] != "")  {  ?><font class="PD3">&nbsp; ʹ�㹵��˹� 3.) <?=$rowa['interestingposition3'];  ?> �Թ��͹����ͧ��� <?=$rowa['intsalary3'];  ?> �ҷ</font></div><?  }  ?>
</td>
</tr>

</table>
<?//echo $_GET[umphur]. " " .$sign4;?>
<hr size="0" width="85%" color="white">

<?       }      ?>



<?
$bctotalpage = bcdiv($totalrec,$perpage);
if  ($totalrec <= $perpage)  {
    $totalpage = 0;  
                                            }
elseif  (($totalrec % $perpage) != 0)  {											    
             $totalpage = $bctotalpage;
		                                                }
else { $totalpage = $bctotalpage-1;  }											   																   
?>
<br>
<?  $_SESSION[nicksend] = eregi_replace(" ","+",$_SESSION[zsearchname]);  ?>
<? if  ($_GET[thisbanner]  != "T")   {     ?>
<form action="customer_search_resume_result.php" method="get">
<input type="hidden" value=<?=$_GET[atpage];  ?>  name="atpage">
<input type="hidden" value="F" name="key">
<input type="hidden" value=<?=$_GET[lang];  ?> name="lang">
<input type="hidden" name="gdepartment"  value=<?=$_GET[gdepartment];  ?>>
<input type="hidden" name="gender"  value=<?=$_GET[gender];  ?>>
<input type="hidden" name="degree"  value=<?=$_GET[degree];  ?>>
<input type="hidden" name="province"  value=<?=$_GET[province];  ?>>
<input type="hidden" name="umphur"  value=<?=$_GET[umphur];  ?>>
<input type="hidden" name="reversename"  value=<?=$_SESSION[nicksend];  ?>>
<input type="hidden" name="searchname"  value=<?=eregi_replace(" ","+",$_SESSION[zsearchname]);  ?>>

<font class=pd3>˹�ҷ��</font>&nbsp;
<select name=sendpage>
<? for ($i=0;$i<=$totalpage;$i++)    {  ?>
<option value=<?=$i * $perpage;  ?>><?=$i+1 ?></option>
<? } ?>
</select>
<input type=submit name=submit value=��ŧ>
</form>
<?   }    ?>


<br>
<br>
<? echo gfooter( );  ?>
</body>
</html>
<?  switch ($_SESSION['alert_xb'])  { 
               case 1 : {  echo "<script>alert('��Ѵ�����ɳ����س���º�������Ǥ�Ѻ')</script>"; break;  }  
               case 2 : {  echo "<script>alert('�¹Ѵ��������Ǥ�Ѻ')</script>";  break;  }
			   case 3 : {  echo "<script>alert('����ѹ����ӡ����ѹ�Ѩ�غѹ��Ѻ')</script>"; break; }
                                                 }
$_SESSION['alert_xb'] = 500;                                                 
?>                                                                 
<?    }
else  {
	      $_SESSION['alert_xa'] = 1;
	      echo "<meta http-equiv=refresh content='0.1;url=customer_menu.php'>";
       }
?>       	        