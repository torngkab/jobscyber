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
                        <td colspan=2><div align=center><font class="PD11"><b>ข้อมูลบริษัท</b></font>&nbsp; &nbsp &nbsp <font class="PD3">(ถ้าต้องการแก้ไขข้อมูลใหม่ให้ลบข้อความเก่าแล้วพิมพ์ทับได้เลย แล้วกดปุ่มบันทึก)</font></div> </td>
                        <td></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp;&nbsp;<font class="PD3">แผนที่</font></div></td><form enctype="multipart/form-data" action="functions/cus_upload.php" method="post">
                        <td>
                        <div align=left>
	      <?/*<input type="file" name="mapfile"  size="36">
	      <input type="submit" name="Fsubmit"  value="เลือก"> &nbsp;<?  if  (empty($Var_map))  {  ?><a href=customershowimage.php><font class="PD3">ดูภาพ</font></a>  <? } ?>*/?>
						<img border=1 src="functions/cus_image.php?idcompany=<?echo $_SESSION[idcompany];?>" width=100px height=100px></img><br />
						<? include('functions/cus_frm_upload.php'); ?>
						</div></td></form>
						</tr>
                        <tr>
                        <td width=130><div align=left><font class="PD2">*</font>&nbsp;<font class="PD3">ชื่อบริษัท</font></div></td><form action="customersaveoredit.php" method="post">
                        <td><div align=left><input type="text" class="PD3" name="companyname" size="25" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[companyname])  ?>> </div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>ที่อยู่</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="address" size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[address])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left>&nbsp;&nbsp; <font class=PD3>หมู่</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name=moo size=2 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[moo])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>ซอย</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=soi size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[soi])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>ถนน</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=street size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[street])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>ตำบล</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=tambon size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[tambon])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>อำเภอ</font></div></td>
                        <td><div align=left><input type=text class="PD3" name=umphur size=12 value=<?=ereg_replace(" ","&nbsp;",$_SESSION[umphur]) ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>จังหวัด</font></div></td>
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
                            <option value="1" &nbsp; <?=$Mpoint[1]; ?>>กรุงเทพมหานคร</option> 
                            <option value="2" &nbsp; <?=$Mpoint[2]; ?>>กระบี่</option>
                            <option value="4" &nbsp; <?=$Mpoint[4]; ?>>กาญจนบุรี</option>
                            <option value="5" &nbsp; <?=$Mpoint[5]; ?>>กาฬสินธุ์</option>
                            <option value="6" &nbsp; <?=$Mpoint[6]; ?>>กำแพงเพชร</option>
                            <option value="7" &nbsp; <?=$Mpoint[7]; ?>>ขอนแก่น</option>
                            <option value="8" &nbsp; <?=$Mpoint[8]; ?>>จันทบุรี</option>
                            <option value="9" &nbsp; <?=$Mpoint[9]; ?>>ฉะเชิงเทรา</option>
                            <option value="10" &nbsp; <?=$Mpoint[10]; ?>>ชลบุรี</option>
                            <option value="11" &nbsp; <?=$Mpoint[11]; ?>>ชัยนาท</option>
                            <option value="12" &nbsp; <?=$Mpoint[12]; ?>>ชัยภูมิ</option>
                            <option value="13" &nbsp; <?=$Mpoint[13]; ?>>ชุมพร</option>
                            <option value="14" &nbsp; <?=$Mpoint[14]; ?>>เชียงราย</option>
                            <option value="15" &nbsp; <?=$Mpoint[15]; ?>>เชียงใหม่</option>
                            <option value="16" &nbsp; <?=$Mpoint[16]; ?>>ตรัง</option>
                            <option value="17" &nbsp; <?=$Mpoint[17]; ?>>ตราด</option>
                            <option value="18" &nbsp; <?=$Mpoint[18]; ?>>ตาก</option>
                            <option value="19" &nbsp; <?=$Mpoint[19]; ?>>นครนายก</option>
                            <option value="20" &nbsp; <?=$Mpoint[20]; ?>>นครปฐม</option>
                            <option value="21" &nbsp; <?=$Mpoint[21]; ?>>นครพนม</option>
                            <option value="22" &nbsp; <?=$Mpoint[22]; ?>>นครราชสีมา</option>
                            <option value="23" &nbsp; <?=$Mpoint[23]; ?>>นครศรีธรรมราช</option>
                            <option value="24" &nbsp; <?=$Mpoint[24]; ?>>นครสวรรค์</option>
                            <option value="25" &nbsp; <?=$Mpoint[25]; ?>>นนทบุรี</option>
                            <option value="26" &nbsp; <?=$Mpoint[26]; ?>>นราธิวาส</option>
                            <option value="27" &nbsp; <?=$Mpoint[27]; ?>>น่าน</option>
                            <option value="3" &nbsp; <?=$Mpoint[3]; ?>>บึงกาฬ</option>
                            <option value="28" &nbsp; <?=$Mpoint[28]; ?>>บุรีรัมย์</option>
                            <option value="29" &nbsp; <?=$Mpoint[29]; ?>>ปทุมธานี</option>
                            <option value="30" &nbsp; <?=$Mpoint[30]; ?>>ประจวบคีรีขันธ์</option>
                            <option value="31" &nbsp; <?=$Mpoint[31]; ?>>ปราจีนบุรี</option>
                            <option value="32" &nbsp; <?=$Mpoint[32]; ?>>ปัตตานี</option>
                            <option value="33" &nbsp; <?=$Mpoint[33]; ?>>พระนครศรีอยุธยา</option>
                            <option value="34" &nbsp; <?=$Mpoint[34]; ?>>พะเยา</option>
                            <option value="35" &nbsp; <?=$Mpoint[35]; ?>>พังงา</option>
                            <option value="36" &nbsp; <?=$Mpoint[36]; ?>>พัทลุง</option>
                            <option value="37" &nbsp; <?=$Mpoint[37]; ?>>พิจิตร</option>
                            <option value="38" &nbsp; <?=$Mpoint[38]; ?>>พิษณุโลก</option>
                            <option value="39" &nbsp; <?=$Mpoint[39]; ?>>เพชรบุรี</option>
                            <option value="40" &nbsp; <?=$Mpoint[40]; ?>>เพชรบูรณ์</option>
                            <option value="41" &nbsp; <?=$Mpoint[41]; ?>>แพร่</option>
                            <option value="42" &nbsp; <?=$Mpoint[42]; ?>>ภูเก็ต</option>
                            <option value="43" &nbsp; <?=$Mpoint[43]; ?>>มหาสารคาม</option>
                            <option value="44" &nbsp; <?=$Mpoint[44]; ?>>มุกดาหาร</option>
                            <option value="45" &nbsp; <?=$Mpoint[45]; ?>>แม่ฮ่องสอน</option>
                            <option value="46" &nbsp; <?=$Mpoint[46]; ?>>ยโสธร</option>
                            <option value="47" &nbsp; <?=$Mpoint[47]; ?>>ยะลา</option>
                            <option value="48" &nbsp; <?=$Mpoint[48]; ?>>ร้อยเอ็ด</option>
                            <option value="49" &nbsp; <?=$Mpoint[49]; ?>>ระนอง</option>
                            <option value="50" &nbsp; <?=$Mpoint[50]; ?>>ระยอง</option>
                            <option value="51" &nbsp; <?=$Mpoint[51]; ?>>ราชบุรี</option>
                            <option value="52" &nbsp; <?=$Mpoint[52]; ?>>ลพบุรี</option>
                            <option value="53" &nbsp; <?=$Mpoint[53]; ?>>ลำปาง</option>
                            <option value="54" &nbsp; <?=$Mpoint[54]; ?>>ลำพูน</option>
                            <option value="55" &nbsp; <?=$Mpoint[55]; ?>>เลย</option>
                            <option value="56" &nbsp; <?=$Mpoint[56]; ?>>ศรีสะเกษ</option>
                            <option value="57" &nbsp; <?=$Mpoint[57]; ?>>สกลนคร</option>
                            <option value="58" &nbsp; <?=$Mpoint[58]; ?>>สงขลา</option>
                            <option value="59" &nbsp; <?=$Mpoint[59]; ?>>สตูล</option>
                            <option value="60" &nbsp; <?=$Mpoint[60]; ?>>สมุทรปราการ</option>
                            <option value="61" &nbsp; <?=$Mpoint[61]; ?>>สมุทรสงคราม</option>
                            <option value="62" &nbsp; <?=$Mpoint[62]; ?>>สมุทรสาคร</option>
                            <option value="63" &nbsp; <?=$Mpoint[63]; ?>>สระแก้ว</option>
                            <option value="64" &nbsp; <?=$Mpoint[64]; ?>>สระบุรี</option>
                            <option value="65" &nbsp; <?=$Mpoint[65]; ?>>สิงห์บุรี</option>
                            <option value="66" &nbsp; <?=$Mpoint[66]; ?>>สุโขทัย</option>
                            <option value="67" &nbsp; <?=$Mpoint[67]; ?>>สุพรรณบุรี</option>
                            <option value="68" &nbsp; <?=$Mpoint[68]; ?>>สุราษฎร์ธานี</option>
                            <option value="69" &nbsp; <?=$Mpoint[69]; ?>>สุรินทร์</option>
                            <option value="70" &nbsp; <?=$Mpoint[70]; ?>>หนองคาย</option>
                            <option value="71" &nbsp; <?=$Mpoint[71]; ?>>หนองบัวลำภู</option>
                            <option value="72" &nbsp; <?=$Mpoint[72]; ?>>อ่างทอง</option>
                            <option value="73" &nbsp; <?=$Mpoint[73]; ?>>อำนาจเจริญ</option>
                            <option value="74" &nbsp; <?=$Mpoint[74]; ?>>อุดรธานี</option>
                            <option value="75" &nbsp; <?=$Mpoint[75]; ?>>อุตรดิตถ์</option>
                            <option value="76" &nbsp; <?=$Mpoint[76]; ?>>อุทัยธานี</option>
                            <option value="77" &nbsp; <?=$Mpoint[77]; ?>>อุบลราชธานี</option>
                          </select>
                        </div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class="PD2">*</font>&nbsp;<font class="PD3">รหัสไปรษณีย์</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="postcode" size="5"value=<?=ereg_replace(" ","&nbsp;",$_SESSION[postcode])  ?>></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp; <font class=PD3>เบอร์โทรศัพท์</font></div></td>
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
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>คำอธิบายเกี่ยวกับบริษัท</font></div></td>
                        <td><div align=left><textarea class="PD3" name="description" cols="90" rows="12" wrap="off"><?=ereg_replace(" ","&nbsp;",$_SESSION[description])  ?></textarea></div></td>
                        </tr>
                        <tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>ชื่อผู้ติดต่อ</font></div></td>
                        <td><div align=left><input type="text" class="PD3" name="contactname" size="45" value=<?=ereg_replace(" ","&nbsp;",$_SESSION[contactname]) ?>></div></td>
                        </tr>
                        <!--<tr>
                        <td width=130><div align=left><font class=PD2>*</font>&nbsp;<font class=PD3>วิธีการติดต่อ</font></div></td>
                        <?  /*switch  ($_SESSION[howtoapply])   {
                                             case 1 : { $xxx = "checked=checked";  break;  }
                                             case 2 : { $yyy = "checked=checked";  break;  }
                                             case 3 : { $zzz = "checked=checked";  break;  }
                                                                                              }
                        */ ?>

                        <td><div align=left><font class=PD3><input type="radio" name="howtoapply"  value="1" &nbsp; <?=$xxx;  ?> >ส่ง resume เข้า email ผู้ติดต่อ <?  if  ($_SESSION[totalresume] == "T")  {  echo "<input type=radio name=howtoapply  value=2"." ".$yyy.">ส่ง resume เข้า inbox บริษัท <input type=radio name=howtoapply  value=3"." ".$zzz.">ทั้ง 2 อย่าง";   }  ?></font></div></td>
                        </tr>-->
                        <tr>
                        <td colspan=2><div align=left><hr width="100%" color="white"></div></td>
                        </tr>
                        <tr>
                        <td colspan=2><div align=left><font class=PD4><b>Company data (กรุณากรอกเป็นภาษา อังกฤษเท่านั้น)</b></font></div></td>
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
                        <td><div align=left><input type="submit"  name="submit" value="บันทึก"><input type="reset" name="reset" value="ยกเลิก" ><!--<input type="submit"  name="xsubmit" value="ดำเนินงานต่อไป">--></FORM></a></div></td>
                        </tr>
                        </TABLE>
                     

</div>
<br>
<br>
<? echo gfooter();  ?>
</body>
</html>
<?   if  ($_GET['returnmap']==2)   {    ?>
            <script>alert('ขนาดไฟต์่เกิน 200K');</script>
<?		                                             }      
        else if  ($_GET['returnmap']==1)   {     ?>
	       <script>alert('ใช้ได้เฉพาะไฟต์ JPG , PNG และ GIF เท่านั้น');</script>
<?                                                           }     ?>								   
											    
<?                              }       ?>

<?  switch ($_SESSION['returntoalert'])  {
                 case "1":  {  echo "<script>alert('ไม่ได้ใส่ชื่อ บริษัท')</script>";
                                     break;
                                 }
                 case "2":  {  echo "<script>alert('ไม่ได้ใส่ที่อยู่')</script>";
                                     break;
                                 }
                 case "3":  {  echo "<script>alert('ไม่ได้ใส่ชื่อซอย')</script>";
		 break;
                                 }
                 case "4":  {  echo "<script>alert('ไม่ได้ใส่ชื่อถนน')</script>";
                                     break;
                                 }
                 case "5":  {  echo "<script>alert('ไม่ได้ใส่ชื่อตำบล')</script>";
		 break;
                                 }
                 case "6":  {  echo "<script>alert('ไม่ได้ใส่ชื่ออำเภอ')</script>";
		 break;
                                 }	
                 case "7":  {  echo "<script>alert('ไม่ได้เลือกจังหวัด')</script>";
                                     break;
                                 }
                 case "8":  {  echo "<script>alert('ไม่ได้ใส่รหัสไปรษณีย์')</script>";
                                     break;
                                 }
                 case "9":  {  echo "<script>alert('ไม่ได้ใส่เบอร์โทรศัพท์')</script>";
		 break;
                                 }
                 case "10":{  echo "<script>alert('ไม่ได้ใส่อีเมลส์์')</script>";
                                     break;
                                 }
                 case "11":{  echo "<script>alert('ไม่ได้ใส่คำอธิบายเกี่ยวกับบริษัท')</script>";
		 break;
                                 }
                 case "12":{  echo "<script>alert('ไม่ได้ใส่ชื่อผู้ติดต่อ')</script>";
		 break;
                                 }	
                 case "13":{  echo "<script>alert('กรุณาใส่ชื่อบริษัท ที่ช่อง Company name')</script>";
                                     break;
                                 }
                 case "14":{  echo "<script>alert('กรุณาใส่ที่อยู่ ที่ช่อง Address')</script>";
                                     break;
                                 }
                 case "15":{  echo "<script>alert('กรุณาใส่ชื่อซอย ที่ช่อง Soi')</script>";
		 break;
                                 }
                 case "16":{  echo "<script>alert('กรุณาใส่ชื่อถนน ที่ช่อง Street')</script>";
                                     break;
                                 }
                 case "17":{  echo "<script>alert('กรุณาใส่ชื่อตำบล ที่ช่อง Tambon')</script>";
		 break;
                                 }
                 case "18":{  echo "<script>alert('กรุณาใส่ชื่ออำเภอ ที่ช่อง Umphur')</script>";
		 break;
                                 }	
                 case "20":{  echo "<script>alert('กรุณาใส่ข้อมูลบริษัทที่ช่อง Profile')</script>";
                                     break;
                                 }
                 case "21":{  echo "<script>alert('กรุณาใส่ชื่อผู้รับสมัครงานที่ช่อง Contact name')</script>";
	                   break;
                                 }
                 case "22":{  echo "<script>alert('กรุณาเลือกวิธีสมัครงาน')</script>";
	                   break;
                                 }
                                                       }
                $_SESSION['returntoalert'] = "0";
?>