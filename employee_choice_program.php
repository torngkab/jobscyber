<?session_start();?>
<?
include("Allfunction.inc");
$SQL = "update employee_resume_th set computerskill = '$_SESSION[dcomputerskill]'";
$SQL = $SQL."where idresume = '$_SESSION[resumeindex]'"; 
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
?>
<?
    if  ($_POST['xubmit'] == "ดูรายการที่เลือก")   {    //  start  if  1
         $subbuffer = explode(":",$_SESSION[dcomputerskill]);
         for  ($i=0;$i<=166;$i++)    {   //  start  for  1
                 if  ($subbuffer[$i] == "T")    {   //  start  if  2
                      $sacc[$i] = "checked";
                                                                }  //  end  if  2
                                                      }  //   end  for  1

                                                                                     }  //  end  if  1
    else  {   //   start  else 1
                       for ($i=0;$i<=166;$i++)   {    //   start for 2
                              $kkk = "h".$i;
                              if  ($_SESSION[$kkk] == "T")   {
                                   //$sacc[$i] = "checked";
                                                                                    }
                                                                  }	//   end  for 2
             }   //   end  else  1											  
?>
<style type="text/css">
body,td,th {
	color: #0099FF;
}
body {
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
}
.GX1 {
	font-family: "Microsoft Sans Serif";
	font-size: 9.5pt;
	font-weight: normal;
	color: #0099FF;
}
.VXL {
                     font-family: "Arial";
                     font-weight: normal;
                     color: #000000;
	font-size: 10pt;
}
</style>
  <body>
  <form action="employee_choice_program.php" method="post" name="birdbird">
  <input type="submit" name="xubmit" value="ดูรายการที่เลือก">
  </form> <form action="employee_decoder_program_value.php" method="post">
  <font class="GX1">
  <left><font class="VXL">&nbsp;Programming Skills</font></left>
  <br><input type="hidden" name="fromcomputerskill"  value="T">
  <input type=checkbox value=T name=h0 &nbsp; <?=$sacc[0];  ?>> 
  ABAP<br>
  <input type=checkbox value=T name=h1 &nbsp; <?=$sacc[1];  ?>> 
  Action script<br>
  <input type=checkbox value=T name=h2 &nbsp; <?=$sacc[2];  ?>> 
  Ajax<br>
  <input type=checkbox value=T name=h3 &nbsp; <?=$sacc[3];  ?>> 
  Applet<br>
  <input type=checkbox value=T name=h4 &nbsp; <?=$sacc[4];  ?>> 
  ASP<br>
  <input type=checkbox value=T name=h5 &nbsp; <?=$sacc[5];  ?>> 
  ASP.NET<br>
  <input type=checkbox value=T name=h6 &nbsp; <?=$sacc[6];  ?>> 
  Assembler<br>
  <input type=checkbox value=T name=h7 &nbsp; <?=$sacc[7];  ?>> 
  C<br>
  <input type=checkbox value=T name=h8 &nbsp; <?=$sacc[8];  ?>> 
  C#<br>
  <input type=checkbox value=T name=h9 &nbsp; <?=$sacc[9];  ?>> 
  C++<br>
  <input type=checkbox value=T name=h10 &nbsp; <?=$sacc[10];  ?>> 
  CFML<br>
  <input type=checkbox value=T name=h11 &nbsp; <?=$sacc[11];  ?>> 
  Cobol<br>
  <input type=checkbox value=T name=h12 &nbsp; <?=$sacc[12];  ?>> 
  CSS<br>
  <input type=checkbox value=T name=h13 &nbsp; <?=$sacc[13];  ?>> 
  Delphi<br>
  <input type=checkbox value=T name=h14 &nbsp; <?=$sacc[14];  ?>> 
  Direct X<br>
  <input type=checkbox value=T name=h15 &nbsp; <?=$sacc[15];  ?>> 
  eMbedded Visual Basic<br>
  <input type=checkbox value=T name=h16 &nbsp; <?=$sacc[16];  ?>> 
  Forthan<br>
  <input type=checkbox value=T name=h17 &nbsp; <?=$sacc[17];  ?>> 
  HTML<br>
  <input type=checkbox value=T name=h18 &nbsp; <?=$sacc[18];  ?>> 
  iPhone SDK<br>
  <input type=checkbox value=T name=h19 &nbsp; <?=$sacc[19];  ?>> 
  J builder<br>
  <input type=checkbox value=T name=h20 &nbsp; <?=$sacc[20];  ?>> 
  J2EE<br>
  <input type=checkbox value=T name=h21 &nbsp; <?=$sacc[21];  ?>> 
  J2ME<br>
  <input type=checkbox value=T name=h22 &nbsp; <?=$sacc[22];  ?>> 
  J2SE<br>
  <input type=checkbox value=T name=h23 &nbsp; <?=$sacc[23];  ?>> 
  JAVA<br>
  <input type=checkbox value=T name=h24 &nbsp; <?=$sacc[24];  ?>> 
  Java Bean<br>
  <input type=checkbox value=T name=h25 &nbsp; <?=$sacc[25];  ?>> 
  JavaScript<br>
  <input type=checkbox value=T name=h26 &nbsp; <?=$sacc[26];  ?>> 
  JSP<br>
  <input type=checkbox value=T name=h27 &nbsp; <?=$sacc[27];  ?>> 
  Lap View<br>
  <input type=checkbox value=T name=h28 &nbsp; <?=$sacc[28];  ?>> 
  Miva Script<br>
  <input type=checkbox value=T name=h29 &nbsp; <?=$sacc[29];  ?>> 
  Palm CodeWarrior<br>
  <input type=checkbox value=T name=h30 &nbsp; <?=$sacc[30];  ?>> 
  Perl<br>
  <input type=checkbox value=T name=h31 &nbsp; <?=$sacc[31];  ?>> 
  PHP<br>
  <input type=checkbox value=T name=h32 &nbsp; <?=$sacc[32];  ?>> 
  Power builder<br>
  <input type=checkbox value=T name=h33 &nbsp; <?=$sacc[33];  ?>> 
  PSP (Pascal Server Page)<br>
  <input type=checkbox value=T name=h34 &nbsp; <?=$sacc[34];  ?>> 
  Python	<br>
  <input type=checkbox value=T name=h35 &nbsp; <?=$sacc[35];  ?>> 
  RPG<br>
  <input type=checkbox value=T name=h36 &nbsp; <?=$sacc[36];  ?>> 
  Ruby<br>
  <input type=checkbox value=T name=h37 &nbsp; <?=$sacc[37];  ?>> 
  Servlet	<br>
  <input type=checkbox value=T name=h38 &nbsp; <?=$sacc[38];  ?>> 
  SHTML<br>
  <input type=checkbox value=T name=h39 &nbsp; <?=$sacc[39];  ?>> 
  Turbo Pascal	<br>
  <input type=checkbox value=T name=h40 &nbsp; <?=$sacc[40];  ?>> 
  UML<br>
  <input type=checkbox value=T name=h41 &nbsp; <?=$sacc[41];  ?>> 
  Vbscript<br>
  <input type=checkbox value=T name=h42 &nbsp; <?=$sacc[42];  ?>> 
  Visual Basic 2005<br>
  <input type=checkbox value=T name=h43 &nbsp; <?=$sacc[43];  ?>> 
  Visual Basic 2008<br>
  <input type=checkbox value=T name=h44 &nbsp; <?=$sacc[44];  ?>> 
  Visual Basic 6<br>
  <input type=checkbox value=T name=h45 &nbsp; <?=$sacc[45];  ?>> 
  Visual Basic.NET<br>
  <input type=checkbox value=T name=h46 &nbsp; <?=$sacc[46];  ?>> 
  Visual C#<br>
  <input type=checkbox value=T name=h47 &nbsp; <?=$sacc[47];  ?>> 
  Visual C# 2005<br>
  <input type=checkbox value=T name=h48 &nbsp; <?=$sacc[48];  ?>> 
  Visual C# 2008<br>
  <input type=checkbox value=T name=h49 &nbsp; <?=$sacc[49];  ?>> 
  Visual C#.NET<br>
  <input type=checkbox value=T name=h50 &nbsp; <?=$sacc[50];  ?>> 
  Visual C++<br>
  <input type=checkbox value=T name=h51 &nbsp; <?=$sacc[51];  ?>> 
  Visual C++ 2005<br>
  <input type=checkbox value=T name=h52 &nbsp; <?=$sacc[52];  ?>> 
  Visual C++ 2008<br>
  <input type=checkbox value=T name=h53 &nbsp; <?=$sacc[53];  ?>> 
  Visual C++.Net<br>
  <input type=checkbox value=T name=h54 &nbsp; <?=$sacc[54];  ?>> 
  Visual Dbase<br>
  <input type=checkbox value=T name=h55 &nbsp; <?=$sacc[55];  ?>> 
  Visual Foxpro 6<br>
  <input type=checkbox value=T name=h56 &nbsp; <?=$sacc[56];  ?>> 
  Visual J 6<br>
  <input type=checkbox value=T name=h57 &nbsp; <?=$sacc[57];  ?>> 
  Visual J#<br>
  <input type=checkbox value=T name=h58 &nbsp; <?=$sacc[58];  ?>> 
  Visual J++<br>
  <input type=checkbox value=T name=h59 &nbsp; <?=$sacc[59];  ?>> 
  Visual Studio 2005<br>
  <input type=checkbox value=T name=h60 &nbsp; <?=$sacc[60];  ?>> 
  Visual Studio 2008<br>
  <input type=checkbox value=T name=h61 &nbsp; <?=$sacc[61];  ?>> 
  WAP<br>
  <input type=checkbox value=T name=h62 &nbsp; <?=$sacc[62];  ?>> 
  WMLScript<br>
  <input type=checkbox value=T name=h63 &nbsp; <?=$sacc[63];  ?>> 
  WPF<br>
  <input type=checkbox value=T name=h64 &nbsp; <?=$sacc[64];  ?>> 
  X++<br>
  <input type=checkbox value=T name=h65 &nbsp; <?=$sacc[65];  ?>> 
  XHTML<br>
  <input type=checkbox value=T name=h66 &nbsp; <?=$sacc[66];  ?>> 
  XML<br>
  <input type=checkbox value=T name=h67 &nbsp; <?=$sacc[67];  ?>> 
  XSL<br>
  <input type=checkbox value=T name=h68 &nbsp; <?=$sacc[68];  ?>> 
  XSLT<br>
  <input type=checkbox value=T name=h69 &nbsp; <?=$sacc[69];  ?>> 
  Zend Engine<br>
  <left><font class="VXL">&nbsp;Database Skills</font></left>
  <br>
  <input type=checkbox value=T name=h70 &nbsp; <?=$sacc[70];  ?>> 
  DB2<br>
  <input type=checkbox value=T name=h71 &nbsp; <?=$sacc[71];  ?>> 
  Crystal Report<br>
  <input type=checkbox value=T name=h72 &nbsp; <?=$sacc[72];  ?>> 
  Dbase<br>
  <input type=checkbox value=T name=h73 &nbsp; <?=$sacc[73];  ?>> 
  ETL<br>
  <input type=checkbox value=T name=h74 &nbsp; <?=$sacc[74];  ?>> 
  Informix	<br>
  <input type=checkbox value=T name=h75 &nbsp; <?=$sacc[75];  ?>> 
  iReport<br>
  <input type=checkbox value=T name=h76 &nbsp; <?=$sacc[76];  ?>> 
  Jasper Report<br>
  <input type=checkbox value=T name=h77 &nbsp; <?=$sacc[77];  ?>> 
  Microsoft Access<br>
  <input type=checkbox value=T name=h78 &nbsp; <?=$sacc[78];  ?>> 
  Microsoft SQL Server<br>
  <input type=checkbox value=T name=h79 &nbsp; <?=$sacc[79];  ?>> 
  My SQL<br>
  <input type=checkbox value=T name=h80 &nbsp; <?=$sacc[80];  ?>> 
  Oracle<br>
  <input type=checkbox value=T name=h81 &nbsp; <?=$sacc[81];  ?>> 
  PostgreSQL<br>
  <input type=checkbox value=T name=h82 &nbsp; <?=$sacc[82];  ?>> 
  RDBMS<br>
  <input type=checkbox value=T name=h83 &nbsp; <?=$sacc[83];  ?>> 
  Sybase<br>
  <left><font class="VXL">&nbsp;Web Editor Tools</font></left>
  <br>
  <input type=checkbox value=T name=h84 &nbsp; <?=$sacc[84];  ?>> 
  Coldfusion<br>
  <input type=checkbox value=T name=h85 &nbsp; <?=$sacc[85];  ?>> 
  Dreamweaver<br>
  <input type=checkbox value=T name=h86 &nbsp; <?=$sacc[86];  ?>> 
  Editplus<br>
  <input type=checkbox value=T name=h87 &nbsp; <?=$sacc[87];  ?>> 
  Frontpage<br>
  <input type=checkbox value=T name=h88 &nbsp; <?=$sacc[88];  ?>> 
  GoLive<br>
  <input type=checkbox value=T name=h89 &nbsp; <?=$sacc[89];  ?>> 
  Homesite<br>
  <input type=checkbox value=T name=h90 &nbsp; <?=$sacc[90];  ?>> 
  Jasper<br>
  <input type=checkbox value=T name=h91 &nbsp; <?=$sacc[91];  ?>> 
  Joomla<br>
  <input type=checkbox value=T name=h92 &nbsp; <?=$sacc[92];  ?>> 
  Magento<br>
  <input type=checkbox value=T name=h93 &nbsp; <?=$sacc[93];  ?>> 
  Mambo<br>
  <input type=checkbox value=T name=h94 &nbsp; <?=$sacc[94];  ?>> 
  Nemo<br>
  <input type=checkbox value=T name=h95 &nbsp; <?=$sacc[95];  ?>> 
  NetObject Fusion<br>
  <input type=checkbox value=T name=h96 &nbsp; <?=$sacc[96];  ?>> 
  Pentaho<br>
  <input type=checkbox value=T name=h97 &nbsp; <?=$sacc[97];  ?>> 
  PHP Nuke<br>
  <input type=checkbox value=T name=h98 &nbsp; <?=$sacc[98];  ?>> 
  Sugar CRM<br>
  <input type=checkbox value=T name=h99 &nbsp; <?=$sacc[99];  ?>> 
  UltraDev<br>
  <input type=checkbox value=T name=h100 &nbsp; <?=$sacc[100];  ?>> 
  vTiger CRM<br>
  <left><font  class="VXL">&nbsp;Graphic / Multimedia Tools</font></left>
  <br>
  <input type=checkbox value=T name=h101 &nbsp; <?=$sacc[101];  ?>> 
  3D Studio Max<br>
  <input type=checkbox value=T name=h102 &nbsp; <?=$sacc[102];  ?>> 
  AutoCAD<br>
  <input type=checkbox value=T name=h103 &nbsp; <?=$sacc[103];  ?>> 
  Corel Draw<br>
  <input type=checkbox value=T name=h104 &nbsp; <?=$sacc[104];  ?>> 
  Director<br>
  <input type=checkbox value=T name=h105 &nbsp; <?=$sacc[105];  ?>> 
  Firework<br>
  <input type=checkbox value=T name=h106 &nbsp; <?=$sacc[106];  ?>> 
  Flash<br>
  <input type=checkbox value=T name=h107 &nbsp; <?=$sacc[107];  ?>> 
  iLLustrator<br>
  <input type=checkbox value=T name=h108 &nbsp; <?=$sacc[108];  ?>> 
  Pagemaker<br>
  <input type=checkbox value=T name=h109 &nbsp; <?=$sacc[109];  ?>> 
  Photoshop<br>
  <input type=checkbox value=T name=h110 &nbsp; <?=$sacc[110];  ?>> 
  Swish Max<br>
  <left><font class="VXL">&nbsp;Internet / Network</font></left>
  <br>
  <input type=checkbox value=T name=h111 &nbsp; <?=$sacc[111];  ?>> 
  Acobat<br>
  <input type=checkbox value=T name=h112 &nbsp; <?=$sacc[112];  ?>> 
  Apache<br>
  <input type=checkbox value=T name=h113 &nbsp; <?=$sacc[113];  ?>> 
  AppServ<br>
  <input type=checkbox value=T name=h114 &nbsp; <?=$sacc[114];  ?>> 
  ATM<br>
  <input type=checkbox value=T name=h115 &nbsp; <?=$sacc[115];  ?>> 
  Cisso<br>
  <input type=checkbox value=T name=h116 &nbsp; <?=$sacc[116];  ?>> 
  DNS<br>
  <input type=checkbox value=T name=h117 &nbsp; <?=$sacc[117];  ?>> 
  Edura Pro<br>
  <input type=checkbox value=T name=h118 &nbsp; <?=$sacc[118];  ?>> 
  Email Server<br>
  <input type=checkbox value=T name=h119 &nbsp; <?=$sacc[119];  ?>> 
  Fire Fox<br>
  <input type=checkbox value=T name=h120 &nbsp; <?=$sacc[120];  ?>> 
  Firewall<br>
  <input type=checkbox value=T name=h121 &nbsp; <?=$sacc[121];  ?>> 
  IBM webshpere<br>
  <input type=checkbox value=T name=h122 &nbsp; <?=$sacc[122];  ?>> 
  IIS<br>
  <input type=checkbox value=T name=h123 &nbsp; <?=$sacc[123];  ?>> 
  Internet Exploer<br>
  <input type=checkbox value=T name=h124 &nbsp; <?=$sacc[124];  ?>> 
  Jakata Tomcat<br>
  <input type=checkbox value=T name=h125 &nbsp; <?=$sacc[125];  ?>> 
  LAN / WAN<br>
  <input type=checkbox value=T name=h126 &nbsp; <?=$sacc[126];  ?>> 
  MS Biz Talk<br>
  <input type=checkbox value=T name=h127 &nbsp; <?=$sacc[127];  ?>> 
  MS Exchange<br>
  <input type=checkbox value=T name=h128 &nbsp; <?=$sacc[128];  ?>> 
  MS Outlook<br>
  <input type=checkbox value=T name=h129 &nbsp; <?=$sacc[129];  ?>> 
  Netscape Navigator<br>
  <input type=checkbox value=T name=h130 &nbsp; <?=$sacc[130];  ?>> 
  OmniHTTPd<br>
  <input type=checkbox value=T name=h131 &nbsp; <?=$sacc[131];  ?>> 
  Opera<br>
  <input type=checkbox value=T name=h132 &nbsp; <?=$sacc[132];  ?>> 
  Outlook Express<br>
  <input type=checkbox value=T name=h133 &nbsp; <?=$sacc[133];  ?>> 
  PABX<br>
  <input type=checkbox value=T name=h134 &nbsp; <?=$sacc[134];  ?>> 
  Personal Web Server<br>
  <input type=checkbox value=T name=h135 &nbsp; <?=$sacc[135];  ?>> 
  PHPMyadmin<br>
  <input type=checkbox value=T name=h136 &nbsp; <?=$sacc[136];  ?>> 
  Security<br>
  <input type=checkbox value=T name=h137 &nbsp; <?=$sacc[137];  ?>> 
  SSI<br>
  <input type=checkbox value=T name=h138 &nbsp; <?=$sacc[138];  ?>> 
  SSL<br>
  <input type=checkbox value=T name=h139 &nbsp; <?=$sacc[139];  ?>> 
  TCP/IP<br>
  <input type=checkbox value=T name=h140 &nbsp; <?=$sacc[140];  ?>> 
  Window Live Messenger<br>
  <left><font class="VXL">&nbsp;Operating System</font></left>
  <br>
  <input type=checkbox value=T name=h141 &nbsp; <?=$sacc[141];  ?>> 
  Linux<br>
  <input type=checkbox value=T name=h142 &nbsp; <?=$sacc[142];  ?>> 
  Mac<br>
  <input type=checkbox value=T name=h143 &nbsp; <?=$sacc[143];  ?>> 
  Unix<br>
  <input type=checkbox value=T name=h144 &nbsp; <?=$sacc[144];  ?>> 
  Window / NT / Server<br>
  <left><font class="VXL">&nbsp;ERP (Enterprise Solution)</font></left>
  <br>
  <input type=checkbox value=T name=h145 &nbsp; <?=$sacc[145];  ?>> 
  Baan<br>
  <input type=checkbox value=T name=h146 &nbsp; <?=$sacc[146];  ?>> 
  SAP<br>
  <input type=checkbox value=T name=h147 &nbsp; <?=$sacc[147];  ?>> 
  PeopleSoft<br>
  <input type=checkbox value=T name=h148 &nbsp; <?=$sacc[148];  ?>> 
  Siebel<br>
  <left><font class="VXL">&nbsp;Software / Application / Others</font></left>
  <br>
  <input type=checkbox value=T name=h149 &nbsp; <?=$sacc[149];  ?>> 
  AS400<br>
  <input type=checkbox value=T name=h150 &nbsp; <?=$sacc[150];  ?>> 
  CamFrog<br>
  <input type=checkbox value=T name=h151 &nbsp; <?=$sacc[151];  ?>> 
  Cognos<br>
  <input type=checkbox value=T name=h152 &nbsp; <?=$sacc[152];  ?>> 
  CuteFTP<br>
  <input type=checkbox value=T name=h153 &nbsp; <?=$sacc[153];  ?>> 
  Lotus Notes<br>
  <input type=checkbox value=T name=h154 &nbsp; <?=$sacc[154];  ?>> 
  Mainframe<br>
  <input type=checkbox value=T name=h155 &nbsp; <?=$sacc[155];  ?>> 
  MS Excel<br>
  <input type=checkbox value=T name=h156 &nbsp; <?=$sacc[156];  ?>> 
  MS Powerpoint<br>
  <input type=checkbox value=T name=h157 &nbsp; <?=$sacc[157];  ?>> 
  MS Project<br>
  <input type=checkbox value=T name=h158 &nbsp; <?=$sacc[158];  ?>> 
  MS Word<br>
  <input type=checkbox value=T name=h159 &nbsp; <?=$sacc[159];  ?>> 
  Nero Burn Rom<br>
  <input type=checkbox value=T name=h160 &nbsp; <?=$sacc[160];  ?>> 
  SDLC<br>
  <input type=checkbox value=T name=h161 &nbsp; <?=$sacc[161];  ?>> 
  Skype<br>
  <input type=checkbox value=T name=h162 &nbsp; <?=$sacc[162];  ?>> 
  SPSS<br>
  <input type=checkbox value=T name=h163 &nbsp; <?=$sacc[163];  ?>> 
  Visio<br>
  <input type=checkbox value=T name=h164 &nbsp; <?=$sacc[164];  ?>> 
  Win Rar<br>
  <input type=checkbox value=T name=h165 &nbsp; <?=$sacc[165];  ?>> 
  Win Zip<br>
  <input type=checkbox value=T name=h166 &nbsp; <?=$sacc[166];  ?>> 
  WS FTP<br>
  </font>
  <input type="image" src=images/confirmbt.png name=gsubmit>
</form>
</body>
