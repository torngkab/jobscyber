<? session_start(); ?>
<? include ("Allfunction.inc");  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >
<script language=javascript src=Foption.js>
</script>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" >
</head>
<? include("functions/show_user.php"); ?>
<body onload="Javascrpit: Check();">
<? echo gheader(th,0,F); 

$SQL1 = "Select *  FROM  customerbuffer  WHERE username ='$_SESSION[bufferlogin]' and password ='$_SESSION[bufferpassword]'";
mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");
$result1= mysql_db_query($databasename,$SQL1);
while ($row1=mysql_fetch_array($result1)) {   //  start  while 1
$Xcompanyname= $row1['companyname'];
                                                                           }  //  end while 1

if   ($Xcompanyname != "")   {   //  start  if 1
$SQL2 = "Select *  FROM  customerbuffer  WHERE username ='$_SESSION[bufferlogin]' and password ='$_SESSION[bufferpassword]'";
$result2= mysql_db_query($databasename,$SQL2);
while ($row2=mysql_fetch_array($result2)) {   //  start  while 2
$_SESSION[idcompany] = $row2['idcompany'];
$_SESSION[companyname]= $row2['companyname'];
$_SESSION[address] = $row2['address'];
$_SESSION[moo] =  $row2['moo'];
$_SESSION[soi] = $row2['soi'];
$_SESSION[street] = $row2['street'];
$_SESSION[tambon] = $row2['tambon']; 
$_SESSION[umphur] = $row2['umphur']; 
$_SESSION[province] = $row2['province']; 
$_SESSION[postcode] = $row2['postcode']; 
$_SESSION[telephone] = $row2['tel']; 
$_SESSION[fax] = $row2['fax']; 
$_SESSION[email] = $row2['email']; 
$_SESSION[website] = $row2['website']; 
$_SESSION[jobpromotion] = $row2['jobpromotion'];
$_SESSION[description] = $row2['description'];
$_SESSION[contactname] = $row2['contactname'];
$_SESSION[howtoapply] = $row2['howtoapply55']; 
$_SESSION[companyname_EN] =  $row2['companyname_en'];
$_SESSION[address_EN] = $row2['address_en'];
$_SESSION[moo_EN] = $row2['moo_en'];
$_SESSION[soi_EN] = $row2['soi_en'];
$_SESSION[street_EN] = $row2['street_en'];
$_SESSION[tambon_EN] =$row2['tambon_en'];
$_SESSION[umphur_EN] = $row2['umphur_en'];
$_SESSION[province_EN] = $row2['province_en'];
$_SESSION[profile_EN] = $row2['profile_en'];
$_SESSION[contactname_EN] = $row2['contactname_en'];
                                                                       }  //  end while 2
                                                           }   //  end  if  1
                                                                  
$SQL3 = "Select *  FROM  product  WHERE idproduct ='$_SESSION[jobpromotion]'";
$result3= mysql_db_query($databasename,$SQL3);
while ($row3=mysql_fetch_array($result3)) {   //  start  while 3
$_SESSION[totalresume]= $row3['totalresume'];
                                                                           }   //  end  while 3


echo  main_program();
?>													   

<?   function  main_program ( )    {     ?>
<div align=center><br>

                        <TABLE cellSpacing=0 cellPadding=0 border=0>
                        <tr>
                        <td colspan=2><div align=center><font class="PD11"><b>�����ź���ѷ</b></font>&nbsp; &nbsp &nbsp <font class="PD3">(��ҵ�ͧ�����䢢������������ź��ͤ���������Ǿ����Ѻ����� ���ǡ������ѹ�֡)</font></div> </td>
                        <td></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp;&nbsp;<font class="PD3">Ἱ���</font></div></td><form enctype="multipart/form-data" action="functions/cus_upload.php" method="post">
                        <td>
                        <div align=left>
	      <?/*<input type="file" name="mapfile"  size="36">
	      <input type="submit" name="Fsubmit"  value="���͡"> &nbsp;<?  if  (empty($Var_map))  {  ?><a href=customershowimage.php><font class="PD3">���Ҿ</font></a>  <? } ?>*/?>
						<img border=1 src="functions/cus_image.php?idcompany=<?echo $_SESSION[idcompany];?>" width=100px height=100px></img><br />
						<? include('functions/cus_frm_upload.php'); ?>
						</div></td></form>
						</tr>
                        <tr>
                        <td width=130><div align=left><font class="PD2">*</font>&nbsp;<font class="PD3">���ͺ���ѷ</font></div></td><form action="customersaveoredit.php" method="post">
                        <td><div align=left><input type="text" class="PD3" name="companyname" size="25" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[companyname])  ?>> </div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>�������</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="address" size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[address])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp; <font class=PD3>����</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name=moo size=2 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[moo])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>���</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=soi size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[soi])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>���</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=street size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[street])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>�Ӻ�</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=tambon size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[tambon])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>�����</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=umphur size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[umphur]) ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>�ѧ��Ѵ</font></div></td>
                        <td><div align=left>
                        <?  for  ($i=1;$i<=77;$i++)    { 
                                       if    ($i==$_SESSION['province'])     {
                                              $Mpoint[$i] = "selected";
                                              break;
                                                                                      }
                                                                          }
                         ?>														 
				    
                          <select name="province">
                            <option value="0"></option>
                            <option value="1" &nbsp; <?=$Mpoint[1]; ?>>��ا෾��ҹ��</option> 
                            <option value="2" &nbsp; <?=$Mpoint[2]; ?>>��к��</option>
                            <option value="4" &nbsp; <?=$Mpoint[4]; ?>>�ҭ������</option>
                            <option value="5" &nbsp; <?=$Mpoint[5]; ?>>����Թ���</option>
                            <option value="6" &nbsp; <?=$Mpoint[6]; ?>>��ᾧྪ�</option>
                            <option value="7" &nbsp; <?=$Mpoint[7]; ?>>�͹��</option>
                            <option value="8" &nbsp; <?=$Mpoint[8]; ?>>�ѹ�����</option>
                            <option value="9" &nbsp; <?=$Mpoint[9]; ?>>���ԧ���</option>
                            <option value="10" &nbsp; <?=$Mpoint[10]; ?>>�ź���</option>
                            <option value="11" &nbsp; <?=$Mpoint[11]; ?>>��¹ҷ</option>
                            <option value="12" &nbsp; <?=$Mpoint[12]; ?>>�������</option>
                            <option value="13" &nbsp; <?=$Mpoint[13]; ?>>�����</option>
                            <option value="14" &nbsp; <?=$Mpoint[14]; ?>>��§���</option>
                            <option value="15" &nbsp; <?=$Mpoint[15]; ?>>��§����</option>
                            <option value="16" &nbsp; <?=$Mpoint[16]; ?>>��ѧ</option>
                            <option value="17" &nbsp; <?=$Mpoint[17]; ?>>��Ҵ</option>
                            <option value="18" &nbsp; <?=$Mpoint[18]; ?>>�ҡ</option>
                            <option value="19" &nbsp; <?=$Mpoint[19]; ?>>��ù�¡</option>
                            <option value="20" &nbsp; <?=$Mpoint[20]; ?>>��û��</option>
                            <option value="21" &nbsp; <?=$Mpoint[21]; ?>>��þ��</option>
                            <option value="22" &nbsp; <?=$Mpoint[22]; ?>>����Ҫ����</option>
                            <option value="23" &nbsp; <?=$Mpoint[23]; ?>>�����ո����Ҫ</option>
                            <option value="24" &nbsp; <?=$Mpoint[24]; ?>>������ä�</option>
                            <option value="25" &nbsp; <?=$Mpoint[25]; ?>>�������</option>
                            <option value="26" &nbsp; <?=$Mpoint[26]; ?>>��Ҹ����</option>
                            <option value="27" &nbsp; <?=$Mpoint[27]; ?>>��ҹ</option>
                            <option value="3" &nbsp; <?=$Mpoint[3]; ?>>�֧���</option>
                            <option value="28" &nbsp; <?=$Mpoint[28]; ?>>���������</option>
                            <option value="29" &nbsp; <?=$Mpoint[29]; ?>>�����ҹ�</option>
                            <option value="30" &nbsp; <?=$Mpoint[30]; ?>>��ШǺ���բѹ��</option>
                            <option value="31" &nbsp; <?=$Mpoint[31]; ?>>��Ҩչ����</option>
                            <option value="32" &nbsp; <?=$Mpoint[32]; ?>>�ѵ�ҹ�</option>
                            <option value="33" &nbsp; <?=$Mpoint[33]; ?>>��й�������ظ��</option>
                            <option value="34" &nbsp; <?=$Mpoint[34]; ?>>�����</option>
                            <option value="35" &nbsp; <?=$Mpoint[35]; ?>>�ѧ��</option>
                            <option value="36" &nbsp; <?=$Mpoint[36]; ?>>�ѷ�ا</option>
                            <option value="37" &nbsp; <?=$Mpoint[37]; ?>>�ԨԵ�</option>
                            <option value="38" &nbsp; <?=$Mpoint[38]; ?>>��ɳ��š</option>
                            <option value="39" &nbsp; <?=$Mpoint[39]; ?>>ྪú���</option>
                            <option value="40" &nbsp; <?=$Mpoint[40]; ?>>ྪú�ó�</option>
                            <option value="41" &nbsp; <?=$Mpoint[41]; ?>>���</option>
                            <option value="42" &nbsp; <?=$Mpoint[42]; ?>>����</option>
                            <option value="43" &nbsp; <?=$Mpoint[43]; ?>>�����ä��</option>
                            <option value="44" &nbsp; <?=$Mpoint[44]; ?>>�ء�����</option>
                            <option value="45" &nbsp; <?=$Mpoint[45]; ?>>�����ͧ�͹</option>
                            <option value="46" &nbsp; <?=$Mpoint[46]; ?>>��ʸ�</option>
                            <option value="47" &nbsp; <?=$Mpoint[47]; ?>>����</option>
                            <option value="48" &nbsp; <?=$Mpoint[48]; ?>>�������</option>
                            <option value="49" &nbsp; <?=$Mpoint[49]; ?>>�йͧ</option>
                            <option value="50" &nbsp; <?=$Mpoint[50]; ?>>���ͧ</option>
                            <option value="51" &nbsp; <?=$Mpoint[51]; ?>>�Ҫ����</option>
                            <option value="52" &nbsp; <?=$Mpoint[52]; ?>>ž����</option>
                            <option value="53" &nbsp; <?=$Mpoint[53]; ?>>�ӻҧ</option>
                            <option value="54" &nbsp; <?=$Mpoint[54]; ?>>�Ӿٹ</option>
                            <option value="55" &nbsp; <?=$Mpoint[55]; ?>>���</option>
                            <option value="56" &nbsp; <?=$Mpoint[56]; ?>>�������</option>
                            <option value="57" &nbsp; <?=$Mpoint[57]; ?>>ʡŹ��</option>
                            <option value="58" &nbsp; <?=$Mpoint[58]; ?>>ʧ���</option>
                            <option value="59" &nbsp; <?=$Mpoint[59]; ?>>ʵ��</option>
                            <option value="60" &nbsp; <?=$Mpoint[60]; ?>>��طû�ҡ��</option>
                            <option value="61" &nbsp; <?=$Mpoint[61]; ?>>��ط�ʧ����</option>
                            <option value="62" &nbsp; <?=$Mpoint[62]; ?>>��ط��Ҥ�</option>
                            <option value="63" &nbsp; <?=$Mpoint[63]; ?>>������</option>
                            <option value="64" &nbsp; <?=$Mpoint[64]; ?>>��к���</option>
                            <option value="65" &nbsp; <?=$Mpoint[65]; ?>>�ԧ�����</option>
                            <option value="66" &nbsp; <?=$Mpoint[66]; ?>>��⢷��</option>
                            <option value="67" &nbsp; <?=$Mpoint[67]; ?>>�ؾ�ó����</option>
                            <option value="68" &nbsp; <?=$Mpoint[68]; ?>>����ɮ��ҹ�</option>
                            <option value="69" &nbsp; <?=$Mpoint[69]; ?>>���Թ���</option>
                            <option value="70" &nbsp; <?=$Mpoint[70]; ?>>˹ͧ���</option>
                            <option value="71" &nbsp; <?=$Mpoint[71]; ?>>˹ͧ�������</option>
                            <option value="72" &nbsp; <?=$Mpoint[72]; ?>>��ҧ�ͧ</option>
                            <option value="73" &nbsp; <?=$Mpoint[73]; ?>>�ӹҨ��ԭ</option>
                            <option value="74" &nbsp; <?=$Mpoint[74]; ?>>�شøҹ�</option>
                            <option value="75" &nbsp; <?=$Mpoint[75]; ?>>�صôԵ��</option>
                            <option value="76" &nbsp; <?=$Mpoint[76]; ?>>�ط�¸ҹ�</option>
                            <option value="77" &nbsp; <?=$Mpoint[77]; ?>>�غ��Ҫ�ҹ�</option>
                          </select>
                        </div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class="PD2">*</font>&nbsp;<font class="PD3">������ɳ���</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="postcode" size="5"value=<?=ereg_replace(" ","&nbsp;",$_SESSION[postcode])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp; <font class=PD3>�������Ѿ��</font></div></td>
                        <td vlaign=middle><div align=left><input type="text" class="PD3" name="tel" size=30 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[telephone])  ?> ></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp; <font class="PD3">Fax</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="fax" size="12" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[fax])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class="PD2">*</font>&nbsp;<font class="PD3">E-mail</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="email" size="38" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[email])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp;<font class="PD3"> Website</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="website" size="45" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[website])  ?> ></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>��͸Ժ������ǡѺ����ѷ</font></div></td>
                        <td><div align=left><textarea class="PD3" name="description" cols="90" rows="12" wrap="off"><?=ereg_replace(" ","&nbsp;",$_SESSION[description])  ?></textarea></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>���ͼ��Դ���</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="contactname" size="45" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[contactname]) ?>></div></td>
                        </tr>
                        <!--<tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>�Ըա�õԴ���</font></div></td>
                        <?  /*switch  ($_SESSION[howtoapply])   {
                                             case 1 : { $xxx = "checked=checked";  break;  }
                                             case 2 : { $yyy = "checked=checked";  break;  }
                                             case 3 : { $zzz = "checked=checked";  break;  }
                                                                                              }
                        */ ?>

                        <td><div align=left><font class=PD3><input type="radio" name="howtoapply"  value="1" &nbsp; <?=$xxx;  ?> >�� resume ��� email ���Դ��� <?  if  ($_SESSION[totalresume] == "T")  {  echo "<input type=radio name=howtoapply  value=2"." ".$yyy.">�� resume ��� inbox ����ѷ <input type=radio name=howtoapply  value=3"." ".$zzz.">��� 2 ���ҧ";   }  ?></font></div></td>
                        </tr>-->
                        <tr>
                        <td colspan=2><div align=left><hr width="100%" color="white"></div></td>
                        </tr>
                        <tr>
                        <td colspan=2><div align=left><font class=PD4><b>Company data (��سҡ�͡������ �ѧ�����ҹ��)</b></font></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>Company name</font></div></td>
                        <td><div align=left><input name="companyname_EN" type="text" class="PD3" size="45" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[companyname_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>Address</font></div></td>
                        <td><div align=left><input name=address_EN type=text class="PD3" size="12" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[address_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp <font class=PD3>Moo</font></div></td>
                        <td><div align=left><input name=moo_EN type=text class="PD3" size="2" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[moo_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>Soi</font></div></td>
                        <td><div align=left><input name=soi_EN type=text class="PD3" size="12" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[soi_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>Street</font></div></td>
                        <td><div align=left><input name=street_EN type=text class="PD3" size="12" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[street_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>Tambon</font></div></td>
                        <td><div align=left><input name=tambon_EN type=text class="PD3" size="12" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[tambon_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>umphur</font></div></td>
                        <td><div align=left><input name=umphur_EN type=text class="PD3" size="12" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[umphur_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>Profile</font></div></td>
                        <td><div align=left><textarea name="profile_EN" cols="90" rows="12" class="PD3" wrap="none"><?=ereg_replace(" ","&nbsp;",$_SESSION[profile_EN])  ?></textarea></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp<font class=PD3>Contact name</font></div></td>
                        <td><div align=left><input  size="45" name="contactname_EN" type="text" class="PD3" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[contactname_EN])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130></td>
                        <td><div align=left><input type="submit"  name="submit" value="�ѹ�֡"><input type="reset" name="reset" value="¡��ԡ" ><!--<input type="submit"  name="xsubmit" value="���Թ�ҹ����">--></FORM></a></div></td>
                        </tr>
                        </TABLE>
                     

</div>
<br>
<br>
<? echo gfooter();  ?>
</body>
</html>
<?   if  ($_GET['returnmap']==2)   {    ?>
            <script>alert('��Ҵ俵���Թ 200K');</script>
<?		                                             }      
        else if  ($_GET['returnmap']==1)   {     ?>
	       <script>alert('����੾��俵� JPG , PNG ��� GIF ��ҹ��');</script>
<?                                                           }     ?>								   
											    
<?                              }       ?>

<?  switch ($_SESSION['returntoalert'])  {
                 case "1":  {  echo "<script>alert('����������� ����ѷ')</script>";
                                     break;
                                 }
                 case "2":  {  echo "<script>alert('��������������')</script>";
                                     break;
                                 }
                 case "3":  {  echo "<script>alert('����������ͫ��')</script>";
		 break;
                                 }
                 case "4":  {  echo "<script>alert('����������Ͷ��')</script>";
                                     break;
                                 }
                 case "5":  {  echo "<script>alert('����������͵Ӻ�')</script>";
		 break;
                                 }
                 case "6":  {  echo "<script>alert('����������������')</script>";
		 break;
                                 }	
                 case "7":  {  echo "<script>alert('��������͡�ѧ��Ѵ')</script>";
                                     break;
                                 }
                 case "8":  {  echo "<script>alert('��������������ɳ���')</script>";
                                     break;
                                 }
                 case "9":  {  echo "<script>alert('���������������Ѿ��')</script>";
		 break;
                                 }
                 case "10":{  echo "<script>alert('����������������')</script>";
                                     break;
                                 }
                 case "11":{  echo "<script>alert('���������͸Ժ������ǡѺ����ѷ')</script>";
		 break;
                                 }
                 case "12":{  echo "<script>alert('����������ͼ��Դ���')</script>";
		 break;
                                 }	
                 case "13":{  echo "<script>alert('��س������ͺ���ѷ ����ͧ Company name')</script>";
                                     break;
                                 }
                 case "14":{  echo "<script>alert('��س���������� ����ͧ Address')</script>";
                                     break;
                                 }
                 case "15":{  echo "<script>alert('��س������ͫ�� ����ͧ Soi')</script>";
		 break;
                                 }
                 case "16":{  echo "<script>alert('��س������Ͷ�� ����ͧ Street')</script>";
                                     break;
                                 }
                 case "17":{  echo "<script>alert('��س������͵Ӻ� ����ͧ Tambon')</script>";
		 break;
                                 }
                 case "18":{  echo "<script>alert('��س������������ ����ͧ Umphur')</script>";
		 break;
                                 }	
                 case "20":{  echo "<script>alert('��س��������ź���ѷ����ͧ Profile')</script>";
                                     break;
                                 }
                 case "21":{  echo "<script>alert('��س������ͼ���Ѻ��Ѥçҹ����ͧ Contact name')</script>";
	                   break;
                                 }
                 case "22":{  echo "<script>alert('��س����͡�Ը���Ѥçҹ')</script>";
	                   break;
                                 }
                                                       }
                $_SESSION['returntoalert'] = "0";
?>