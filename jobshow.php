<?session_start();?>
<? include ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
<? include("functions/show_user.php"); ?>
</head>
<body onload='Check();'>
<? echo gheader($_GET[lang],$_GET[atpage],$_GET[thisbanner]);  ?>
<div align=center><br>
<table cellspacing="0" cellpadding="0" border="0" width="85%">
<tr bgcolor="#000066" height="30">
<td width="18%" align='center'><font class="PD10">ตำแหน่งงาน</font></td>
<td width="20%" align='center'><font class="PD10">สถานที่ทำงาน</font></td>
<td width="32%" align='center'><font class="PD10">ที่อยู่</font></td>
<td width="10%" align='center'><font class="PD10">จังหวัด</font></td>
<td width="7%" align='center'><font class="PD10">เงินเดือน</font></td>
<td width="4%" align='center'><font class="PD10">อัตรา</font></td>
<td width="9%" align='center'><font class="PD10">วันที่</font></td>
</tr>
<?
$perpage = 30;
if  ($_GET['sendpage']=="")  {
    $HPG=0;                                
                                                  }
else {  $HPG=$_GET['sendpage'];  }
$lang = $_GET['lang']; 
$year1=date("Y")+543;
$month1=date("m");
$day1=date("d");
$bmcounter = 0;
$timetoday = ($year1*10000) + ($month1*100) + $day1; 																	
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$BSQL = "Select *  FROM  customerbuffer order by idcompany";
$resultB= mysql_query($BSQL);
while ($rowb=mysql_fetch_array($resultB))    {    //   start while B

           $CSQL = "Select *  FROM  dateappear where idcompany = '$rowb[idcompany]' order by idcompany";
           $resultC= mysql_query($CSQL);
           $maxtime = 0;
           while ($rowc=mysql_fetch_array($resultC))    {    //   start while C
                     if   ($maxtime  < $rowc[showdate])   {
                           $maxtime = $rowc[showdate];
                                                                                    }

                                                                                    
                                                                                          }    //   end  while C
                                                      

            if   ($timetoday > $maxtime)  {
                 $DSQL = "Delete   FROM  customerbuffer where idcompany = '$rowb[idcompany]'";
                 $resultD= mysql_query($DSQL);
                 $FSQL = "Delete   FROM  jobother where idcustomer = '$rowb[idcompany]'";
                 $resultF= mysql_query($FSQL);


                                                             }                

                                                                               }   //  end  while B
$ASQL = "Select *  FROM  jobother  LEFT JOIN customerbuffer  ON jobother.idcustomer = customerbuffer.idcompany where jobother.jobdepartment = '$_GET[gdepartment]' order by jobother.idcustomer";
$resultA= mysql_query($ASQL);
$totalrec = mysql_num_rows($resultA);
while ($rowkk=mysql_fetch_array($resultA))   {        //   start while 100
$idcompanyvalue = "";
$ISQL = "Select *  FROM  customerbuffer  WHERE idcompany ='$rowkk[idcustomer]'";
$resultI= mysql_query($ISQL);
while ($rowbb=mysql_fetch_array($resultI)) {      //   start while 200
$idcompanyvalue = $rowbb['idcompany'];
                                                            }      //    end while 200


$JSQL = "Select *  FROM  dateappear where idcompany = '$idcompanyvalue' order by idcompany,showdate asc";                                                          
$resultJ= mysql_query($JSQL);

$ii = 1;
while ($rowjj=mysql_fetch_array($resultJ)) { 
           $bufferdate[$ii] = strval($rowjj['showdate']);
           $ii++;
                                                       } 
$maxx = $ii;

$bufferappeardate = "";
$todaytime = ((date('Y')+543) * 10000) + (date('m') * 100) + date('d');
for ($jj=1;$jj<=$maxx;$jj++)  {   //   start for loop
if  (($todaytime >= $bufferdate[$jj]) and ($todaytime <= $bufferdate[$jj+1]))  { //   start if AZ
       $bufferappeardate=$bufferdate[$jj];   }
else  {   continue;   }
                                        }  //  end for loop
if  ($bufferappeardate != "")  {  //  start if AA
     $DSQL = "update customerbuffer set signuptime = '$bufferappeardate' where idcompany =  '$idcompanyvalue'";
                                       }
else  {         $DSQL = "update customerbuffer set signuptime = 0 where idcompany =  '$idcompanyvalue'";    }                                     
$resultD= mysql_query($DSQL);
                                                          }       //    end while 100  
if  ($_GET[key] == "T")  {
    $SQL1 = "Select *  FROM  jobother  LEFT JOIN customerbuffer  ON jobother.idcustomer = customerbuffer.idcompany where jobother.idcustomer = '$_GET[jjcustomer]' order by signuptime desc , idcustomer asc  limit $HPG,$perpage";

                                         }
else  {
            $SQL1 = "Select *  FROM  jobother  LEFT JOIN customerbuffer  ON jobother.idcustomer = customerbuffer.idcompany where jobother.jobdepartment = '$_GET[gdepartment]' order by signuptime desc , idcustomer asc limit $HPG,$perpage";

         }
$result= mysql_query($SQL1);
while ($row=mysql_fetch_array($result))   {        //   start while 1
if   (($bmcounter % 2) == 0)  {  $Ncolor = "#005500";   }  else  {   $Ncolor = "#009900";    } 
   
$idcompanyvalue = "";
$SQL3 = "Select *  FROM  customerbuffer  WHERE idcompany ='$row[idcustomer]'";
$result3= mysql_query($SQL3);
while ($rowx=mysql_fetch_array($result3)) {      //   start while B
$jobpromotionvalue = $rowx['jobpromotion'];
$signuptime = $rowx['signuptime'];		
$idcompanyvalue = $rowx['idcompany'];

                                                          }       //    end while B


     if   ($lang == "th")               {           //   start  if  1       ?> 
<tr bgcolor=<?=$Ncolor;  ?>  height="41">
<td><div align="left"><a href=jobshowpage.php?lang=th&jjobnumber=<?=$row['jobnumber'];  ?>&jjcustomer=<?=$row['idcustomer'];  ?>&atpage=3><font class="PD10">&nbsp; &nbsp;<?=$row['jobname'];  ?></font></a></div></td>
<td><div align="left"><font class="PD10">&nbsp; &nbsp;<?=$row['companyname'];  ?></font></div></td>
<td><div align="left"><font class="PD10">&nbsp; &nbsp;<?=$row['address']." หมู่ ".$row['moo']." ซอย ".$row['soi']." ถนน ".$row['street']." ตำบล ".$row['tambon']." อำเภอ ".$row['umphur'];  ?></font></div></td>
<td><div align="left"><font class="PD10">&nbsp; &nbsp;<?=inthaiPV($row['province']);  ?></font></div></td>
<td><div align="right"><font class="PD10"><?  if  ($row['salary'] == 0)  {  echo "ไม่ระบุ";  }  else  {  echo $row['salary'];   }  ?>&nbsp; &nbsp;</font></td>
<td><div align="right"><font class="PD10"><?=$row['numberofposition'];  ?>&nbsp; &nbsp;</font></td>
<td><div align="right"><font class="PD10"><?=exchangedate($row['signuptime']);  ?>&nbsp; &nbsp;</font></td>
</tr>
<?      $bmcounter++;             } 
else   {    ?>
<tr bgcolor=<?=$Ncolor;  ?>  height="35">
<td><div align="left"><a href=jobshowpage.php?lang=en&jjobnumber=<?=$row['jobnumber'];  ?>&jjcustomer=<?=$row['idcustomer'];  ?>&atpage=3><font class="PD10">&nbsp; &nbsp;<?=$row['jobname_en'];  ?></font></a></div></td>
<td><div align="left"><font class="PD10">&nbsp; &nbsp;<?=$row['companyname_en'];  ?></font></div></td>
<td><div align="left"><font class="PD10">&nbsp; &nbsp;<?=$row['address']." moo ".$row['moo_en']." soi ".$row['soi_en']." street ".$row['street_en']." tambon ".$row['tambon_en']." umphur ".$row['umphur_en'];  ?></font></div></td>
<td><div align="left"><font class="PD10">&nbsp; &nbsp;<?=encodeprovince_en($row['province']);  ?></font></div></td>
<td><div align="right"><font class="PD10"><?=$row['salary'];  ?>&nbsp; &nbsp;</font></td>
<td><div align="right"><font class="PD10"><?=$row['numberofposition'];  ?>&nbsp; &nbsp;</font></td>
<td><div align="right"><font class="PD10"><?=exchangedate($row['signuptime']);  ?>&nbsp; &nbsp;</font></td>
</tr>
<?      $bmcounter++;              }        //   end  if  1
                                                                                    }    //   end  while 1         ?>
</table>

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

<? if  ($_GET[thisbanner]  != "T")   {     ?>
<form name='frmpage' action='jobshow.php'>
<font class=pd3>หน้าที่</font>&nbsp;
<select name='sendpage'>
<? for ($i=0;$i<=$totalpage;$i++)    {  ?>
	
    <option value=<?=$i * $perpage;?>><?=$i * $perpage+1;?></option>
	<?/*<a href=jobshow.php?sendpage=<?=$i * $perpage;  ?>&atpage=<?=$_GET[atpage];  ?>&lang=<?=$_GET[lang];  ?>&gdepartment=<?=$_GET[gdepartment];  ?>&key=F><?=$i+1; ?></a><? if  ($i != $totalpage)  {  echo "&nbsp|"; }  ?>*/?>
<? } ?>
</select>
<input type='hidden' name='atpage' value=<?echo $_GET[atpage];?> />
<input type='hidden' name='lang' value=<?echo $_GET[lang];?> />
<input type='hidden' name='gdepartment' value=<?echo $_GET[gdepartment];?> />
<input type='hidden' name='key' value='F' />
<input type='submit' value='ตกลง' /></form>
<?   }    ?>
</div>

<br>
<br>
<? echo gfooter( );  ?>
</body>
</html>