<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<HTML>
<HEAD>
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=windows-874">
<TITLE></TITLE>
<STYLE>
<!-- 
BODY,DIV,TABLE,THEAD,TBODY,TFOOT,TR,TH,TD,P { font-family:"Tahoma"; font-size:x-small }
 -->
</STYLE>
</HEAD>
<BODY TEXT="#000000">
<?
include("Allfunction.inc");

$SQL2 = "select *  from  customer where idcompany = '$_GET[idcompanylist]'";
mysql_connect($host,$user,$password);
mysql_query("SET NAMES TIS620");
$result2= mysql_db_query($databasename,$SQL2);
while ($row=mysql_fetch_array($result2)) {  
             $namecompany = $row['companyname'];
             $addresslist = $row['address'];
             $moolist = $row['moo'];
             $soilist = $row['soi'];
             $streetlist = $row['street'];
             $tambonlist = $row['tambon'];
             $umphurlist = $row['umphur'];
             $provincelist = $row['province'];
             $postcodelist = $row['postcode'];
             $signuptimelist = $row['signuptime'];
             $tellist = $row['tel'];
             $faxlist = $row['fax'];
             $jobtypelist = $row['jobpromotion'];
                                                                           }
?>



<TABLE FRAME=BORDER CELLSPACING=0 COLS=48 RULES=NONE BORDER=0>
	<COLGROUP><COL WIDTH=16><COL WIDTH=16>
	<TBODY>
		<TR>
			<TD COLSPAN=30 WIDTH=503 HEIGHT=36 ALIGN=LEFT><B><FONT FACE="Arial" SIZE=6>Miracle e-bussiness Co., Ltd</FONT></B></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=10><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=10><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=18><BR></TD>
			<TD WIDTH=10><BR></TD>
		</TR>
		<TR>
			<TD COLSPAN=18 HEIGHT=25 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=4>����ѷ ������� �պ���� �ӡѴ</FONT></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD COLSPAN=36 HEIGHT=22 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>83/55 ������ 20 �.�ҧ���-�ҧ����� �.�ҧ����˭� �.�ҧ���  �.��طû�ҡ�� 10540</FONT></TD>
			<TD><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9 ROWSPAN=2 ALIGN=CENTER VALIGN=MIDDLE><B><FONT SIZE=4>㺡ӡѺ����</FONT></B></TD>
			<TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD COLSPAN=19 HEIGHT=20 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>Tel : 02-759-4851-2 Fax : 02-759-4425</FONT></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD COLSPAN=18 HEIGHT=22 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>Email : support@jobscyber.com</FONT></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" size=3>����</FONT></TD>
			<TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD HEIGHT=19><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=30 HEIGHT=21><FONT FACE="Microsoft Sans Serif" SIZE=3>���� &nbsp; <?=$namecompany;  ?></font></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; �ѹ��� &nbsp;<?=exchangedate($_GET[signup]);  ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=9><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; �Ţ��� &nbsp;<?=$_GET[idcompanylist];  ?></FONT></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=30 HEIGHT=21><FONT FACE="Microsoft Sans Serif" SIZE=3>������� &nbsp;<?=$addresslist;  ?><?  if  ($moolist != "")  {  echo "&nbsp;"."����"."&nbsp;".$moolist;   }   ?><?  if  ($soilist != "")   {  echo "&nbsp;"."�."."&nbsp;".$soilist;  }   ?>&nbsp;<?=$streetlist;  ?>&nbsp; <?=$tambonlist;  ?>&nbsp; <?=$umphurlist;  ?>&nbsp; <?=inthaiPV($provincelist);  ?>&nbsp; <?=$postcodelist;  ?> </font></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
                                                      <TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
                                                      <TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=30 HEIGHT=21><FONT FACE="Microsoft Sans Serif" SIZE=3>Tel : <?=$tellist;  ?>&nbsp; Fax : <?=$faxlist;  ?></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 HEIGHT=21 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" SIZE=3>�����Թ���</FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=24 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" SIZE=3>��¡��</FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" SIZE=3>�ӹǹ</FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" SIZE=3>�Ҥ�</FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" SIZE=3>���Թ</FONT></TD>
			</TR>
		<!--��ǹ�����-->
		<?
		
		?>
		<TR>
			<TD STYLE="border-left: 1px solid #000000" HEIGHT=20><BR></TD>
			<TD colspan=4><FONT FACE="Microsoft Sans Serif" SIZE=2><?echo $_GET[idproduct];?></font></TD>
			<!--
			<TD><br></TD>
			<TD><br></TD>
			<TD><br></TD>
			-->
			<TD STYLE="border-right: 1px solid #000000"><br></TD>
			<TD colspan=23><FONT FACE="Microsoft Sans Serif" SIZE=2><?echo $_GET[pdname];?></font></TD>
			<!--
			<TD><br></TD>
			<TD><br></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><br></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><br></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			-->
			<TD STYLE="border-right: 1px solid #000000"></TD>
			<TD colspan=5 align='center'><FONT FACE="Microsoft Sans Serif" SIZE=2><?echo "1";?></font></TD>
			<!--
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			-->
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD colspan=5 align='center'><FONT FACE="Microsoft Sans Serif" SIZE=2><?echo $_GET[price];?></font></TD>
			<!--
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			-->
			<?$x = ($_GET[price])*1;?>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD colspan=5 align='center'><FONT FACE="Microsoft Sans Serif" SIZE=2><?echo $x;?></font></TD>
			<!--
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			-->
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 HEIGHT=20 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp;<?//=idproductofjobtype($jobtypelist);  ?></FONT></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=24 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; <?//=productnameofjobtype($jobtypelist);  ?></FONT></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6 ALIGN=right><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; </FONT></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6 ALIGN=right><FONT FACE="Microsoft Sans Serif" SIZE=3><?//=moneyofjobtype($jobtypelist);  ?> &nbsp; </FONT></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6 ALIGN=right><FONT FACE="Microsoft Sans Serif" SIZE=3><?//=moneyofjobtype($jobtypelist);  ?> &nbsp; </FONT></TD>
			</TR>
		<TR>
			<TD STYLE="border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 HEIGHT=20><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=24><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6><BR></TD>
			</TR>
		<TR>
			<TD STYLE="border-left: 1px solid #000000" HEIGHT=20><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD><BR></TD>
			<TD STYLE="border-right: 1px solid #000000"><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000" HEIGHT=20><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><br></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000"><BR></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000"><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=30 ROWSPAN=2 HEIGHT=41><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=12 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; ���Թ</FONT></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6 ALIGN=RIGHT SDVAL="1000" SDNUM="1054;"><FONT FACE="Microsoft Sans Serif" SIZE=3><?echo $_GET[price];?><?//=moneyofjobtype($jobtypelist);  ?>&nbsp;</FONT></TD>
			</TR>
		<TR>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=12 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; ������Ť������</FONT></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=6 ALIGN=RIGHT SDVAL="70" SDNUM="1054;"><FONT FACE="Microsoft Sans Serif" SIZE=3><?echo $_GET[price]*0.07;?><?//=moneyofjobtype($jobtypelist) * 0.07;  ?>&nbsp;</FONT></TD>
			</TR>
		<?$y = $_GET[price]+($_GET[price]*0.07);?>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=30 HEIGHT=20 ALIGN=CENTER><FONT FACE="Microsoft Sans Serif" SIZE=3><?echo thaimoney($y);?><?//=thaimoney(moneyofjobtype($jobtypelist)+ (moneyofjobtype($jobtypelist)*0.07));  ?></FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=12 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; �ʹ�ط��</FONT></TD>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=6 ALIGN=RIGHT SDVAL="1070" SDNUM="1054;"><FONT FACE="Microsoft Sans Serif" SIZE=3><?echo $y;?><?//=moneyofjobtype($jobtypelist) + (moneyofjobtype($jobtypelist)*0.07);  ?>&nbsp;</FONT></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=30 ROWSPAN=3 HEIGHT=65><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=18><BR></TD>
			</TR>
		<TR>
			<TD STYLE="border-right: 1px solid #000000" COLSPAN=18 ALIGN=LEFT><FONT FACE="Microsoft Sans Serif" SIZE=3>&nbsp; ���͹��ѵ� ...............................................</FONT></TD>
			</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000; border-right: 1px solid #000000" COLSPAN=18><BR></TD>
			</TR>
	</TBODY>
</TABLE>
</BODY>
</HTML>
