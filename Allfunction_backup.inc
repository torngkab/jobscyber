<?
$host = "localhost";
$user = "root"; 
$password = "mitoferrarimr2";
$databasename = "jobdatabase";

Function gheader ($xg,$viewpage,$checkbanner) {  //  $xg คือค่าของภาษา , $viewpage คือค่าของหน้าเว็บ , $checkbanner คือ ค่าที่มาจาก banner หน้าแรก
      echo "<div id=top>";
      echo "<div id=name><a hef=#>Jobscyber</a></div>";
      echo "<div id=split></div>";
      echo "<div style=border-top:6px solid #7abb37; background-color:blue>";
      echo "<div id=slogan>Tel : 02-759-4851-2 , Mobile : 081-376-6528 , email : support@jobscyber.com , Support Hour : M - F 8:30 - 17:30</div></div>";
      switch ($viewpage)  {
                   case 1 : {   echo "<div id=contact_us><a href=firstpage.php?lang=th&atpage=1>ไทย</a> &nbsp; <a href=firstpage.php?lang=en&atpage=1>Eng</a></div></div></div>"; break;  }  // -----> index.php
                   case 2 : {   if  ($checkbanner == "T")   {
                                           echo "<div id=contact_us><a href=jobshow.php?lang=th&jjcustomer=$_GET[jjcustomer]&key=T&atpage=2&thisbanner=T>ไทย</a> &nbsp; <a href=jobshow.php?lang=en&jjcustomer=$_GET[jjcustomer]&key=T&atpage=2&thisbanner=T>Eng</a></div></div></div>"; break;
                                                                                     }
                                      else  {   echo "<div id=contact_us><a href=jobshow.php?lang=th&gdepartment=$_GET[gdepartment]&atpage=2&sendpage=$_GET[sendpage]>ไทย</a> &nbsp; <a href=jobshow.php?lang=en&gdepartment=$_GET[gdepartment]&atpage=2&sendpage=$_GET[sendpage]>Eng</a></div></div></div>"; break;
                                                    
                                               }    // -----> jobshow.php
                                  }
                   case 3 : {   echo "<div id=contact_us><a href=jobshowpage.php?lang=th&jjcustomer=$_GET[jjcustomer]&jjobnumber=$_GET[jjobnumber]&atpage=3>ไทย</a> &nbsp; <a href=jobshowpage.php?lang=en&jjcustomer=$_GET[jjcustomer]&jjobnumber=$_GET[jjobnumber]&atpage=3>Eng</a></div></div></div>"; break;  }  // -------> jobshowpage.php
                   case 4 : {   echo "<div id=contact_us><a href=jobsearch.php?lang=th&searchname=$_GET[searchname]&gdepartment=$_GET[gdepartment]&atpage=4&sendpage=$_GET[sendpage]>ไทย</a> &nbsp; <a href=jobsearch.php?lang=en&searchname=$_GET[searchname]&gdepartment=$_GET[gdepartment]&atpage=4&sendpage=$_GET[sendpage]>Eng</a></div></div></div>"; break;  }  // -------> jobsearch.php
                   case 5 : {   echo "<div id=contact_us><a href=customerpreview.php?lang=th&jjobnumber=$_GET[jjobnumber]&jjcustomer=$_GET[jjcustomer]&atpage=5>ไทย</a> &nbsp; <a href=customerpreview.php?lang=en&jjobnumber=$_GET[jjobnumber]&jjcustomer=$_GET[jjcustomer]&atpage=5>Eng</a></div></div></div>"; break;  }  // -------> customerpreview.php
  	 default : {   echo "<div id=contact_us></div></div></div>";  }
                                         }
      echo "<div id=logo>";
      if   ($xg=="th")   {
      echo "<div id=logo_text>หางานง่าย สะดวก รวดเร็วทันใจด้วย  Jobscyber</div>";
                                  }
      else  {  echo "<div id=logo_text>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque lobortis nibh eu mauris. Morbi arcu tortor, auctor et, facilisis nec, egestas sit amet, enim.</div>";   }
      echo "<div id=menu><a href=firstpage.php?lang=th&atpage=1>หน้าแรก</a>|<a href=employee_login_page.php>ผู้สมัครงาน</a>|<a href=customer.php>ผู้ประกอบการ</a>|<a href=adperpay.php>อัตราโฆษณา</a>|<a href=contactus.php>ติดต่อเรา</a></div>"; 
}


Function  gfooter ( )  {
     echo "<div id=footer><div id=left_footer>&copy  Copyright 2013 <b>Miracle e-bessiness Co., Ltd</b></div><div id=right_footer></div></div></div>";
}


Function  checkblankstring($aa)  {     //   ตรวจเช็คว่าเป็นตัวอักษรว่างหรือไม่ โดยถ้าเป็นตัวอักษรว่างทั้งหมดจะให้ค่า true ออกมา
       $countstringlen = strlen($aa);
       $gg = "true";
       $i = 0;
       while (($i<=$countstringlen-1) and ($countstringlen != 0)) {
              if  (substr($aa,$i,1) == " ") {
                   $i++;
                   continue;
                                                           }
             else  {   $gg = "false";  $i = $countstringlen + 200;   }

                                                                       }
        return $gg;
}            


Function encodemonth_en($xim)   {     
         switch  ($xim)  {
                        case 1 : $gatt ="Jan"; break;
                        case 2 : $gatt ="Feb"; break;
                        case 3 : $gatt ="Mar"; break;
                        case 4 : $gatt ="Apr"; break;
                        case 5 : $gatt ="May"; break;
                        case 6 : $gatt ="Jun"; break;
                        case 7 : $gatt ="Jul"; break;
                        case 8 : $gatt ="Aug"; break;
                        case 9 : $gatt ="Sep"; break;
                        case 10 : $gatt ="Octy"; break;
                        case 11 : $gatt ="Nov"; break;
                        case 12 : $gatt ="Dec"; break;
                                      }
           return  $gatt;
}


Function  changedate($xixxax)   {     
                  $fijonyear =substr($xixxax,0,4);
                  $fijonmonth =substr($xixxax,5,2);
                  $fijonday =substr($xixxax,8,2);
                  $xombie = $fijonday."-".$fijonmonth."-".$fijonyear;
                  return  $xombie;
}


Function  exchangedate($xixxax)   {     
                  $fijonyear =substr($xixxax,0,4);
                  $fijonmonth =substr($xixxax,4,2);
                  $fijonday =substr($xixxax,6,2);
                  if  ($xixxax != 0)  {
                       $xombie = $fijonday."-".$fijonmonth."-".$fijonyear;
                                                }
                  else  {   $xombie = "";  }
                  return  $xombie;
}


Function  encodeprogramname ($mipp)  {
switch  ($mipp)  {
case 0 : $gaa ="ABAP"; break;
case 1 : $gaa ="Action script"; break;
case 2 : $gaa ="Ajax"; break;
case 3 : $gaa ="Applet"; break;
case 4 : $gaa ="ASP"; break;
case 5 : $gaa ="ASP.NET"; break;
case 6 : $gaa ="Assembler"; break;
case 7 : $gaa ="C"; break;
case 8 : $gaa ="C#"; break;
case 9 : $gaa ="C++"; break;
case 10 : $gaa ="CFML"; break;
case 11 : $gaa ="Cobol"; break;
case 12 : $gaa ="CSS"; break;
case 13 : $gaa ="Delphi"; break;
case 14 : $gaa ="Direct X"; break;
case 15 : $gaa ="eMbedded Visual Basic"; break;
case 16 : $gaa ="Forthan"; break;
case 17 : $gaa ="HTML"; break;
case 18 : $gaa ="iPhone SDK"; break;
case 19 : $gaa ="J builder"; break;
case 20 : $gaa ="J2EE"; break;
case 21 : $gaa ="J2ME"; break;
case 22 : $gaa ="J2SE"; break;
case 23 : $gaa ="JAVA"; break;
case 24 : $gaa ="Java Bean"; break;
case 25 : $gaa ="JavaScript"; break;
case 26 : $gaa ="JSP"; break;
case 27 : $gaa ="Lap View"; break;
case 28 : $gaa ="Miva Script"; break;
case 29 : $gaa ="Palm CodeWarrior"; break;
case 30 : $gaa ="Perl"; break;
case 31 : $gaa ="PHP"; break;
case 32 : $gaa ="Power builder"; break;
case 33 : $gaa ="PSP (Pascal Server Page)"; break;
case 34 : $gaa ="Python"; break;
case 35 : $gaa ="RPG"; break;
case 36 : $gaa ="Ruby"; break;
case 37 : $gaa ="Servlet"; break;
case 38 : $gaa ="SHTML"; break;
case 39 : $gaa ="Turbo Pascal"; break;
case 40 : $gaa ="UML"; break;
case 41 : $gaa ="Vbscript"; break;
case 42 : $gaa ="Visual Basic 2005"; break;
case 43 : $gaa ="Visual Basic 2008"; break;
case 44 : $gaa ="Visual Basic 6"; break;
case 45 : $gaa ="Visual Basic.NET"; break;
case 46 : $gaa ="Visual C#"; break;
case 47 : $gaa ="Visual C# 2005"; break;
case 48 : $gaa ="Visual C# 2008"; break;
case 49 : $gaa ="Visual C#.NET"; break;
case 50 : $gaa ="Visual C++"; break;
case 51 : $gaa ="Visual C++ 2005"; break;
case 52 : $gaa ="Visual C++ 2008"; break;
case 53 : $gaa ="Visual C++.Net"; break;
case 54 : $gaa ="Visual Dbase"; break;
case 55 : $gaa ="Visual Foxpro 6"; break;
case 56 : $gaa ="Visual J 6"; break;
case 57 : $gaa ="Visual J#"; break;
case 58 : $gaa ="Visual J++"; break;
case 59 : $gaa ="Visual Studio 2005"; break;
case 60 : $gaa ="Visual Studio 2008"; break;
case 61 : $gaa ="WAP"; break;
case 62 : $gaa ="WMLScript"; break;
case 63 : $gaa ="WPF"; break;
case 64 : $gaa ="X++"; break;
case 65 : $gaa ="XHTML"; break;
case 66 : $gaa ="XML"; break;
case 67 : $gaa ="XSL"; break;
case 68 : $gaa ="XSLT"; break;
case 69 : $gaa ="Zend Engine"; break;
case 70 : $gaa ="DB2"; break;
case 71 : $gaa ="Crystal Report"; break;
case 72 : $gaa ="Dbase"; break;
case 73 : $gaa ="ETL"; break;
case 74 : $gaa ="Informix"; break;
case 75 : $gaa ="iReport"; break;
case 76 : $gaa ="Jasper Report"; break;
case 77 : $gaa ="Microsoft Access"; break;
case 78 : $gaa ="Microsoft SQL Server"; break;
case 79 : $gaa ="My SQL"; break;
case 80 : $gaa ="Oracle"; break;
case 81 : $gaa ="PostgreSQL"; break;
case 82 : $gaa ="RDBMS"; break;
case 83 : $gaa ="Sybase"; break;
case 84 : $gaa ="Coldfusion"; break;
case 85 : $gaa ="Dreamweaver"; break;
case 86 : $gaa ="Editplus"; break;
case 87 : $gaa ="Frontpage"; break;
case 88 : $gaa ="GoLive"; break;
case 89 : $gaa ="Homesite"; break;
case 90 : $gaa ="Jasper"; break;
case 91 : $gaa ="Joomla"; break;
case 92 : $gaa ="Magento"; break;
case 93 : $gaa ="Mambo"; break;
case 94 : $gaa ="Nemo"; break;
case 95 : $gaa ="NetObject Fusion"; break;
case 96 : $gaa ="Pentaho"; break;
case 97 : $gaa ="PHP Nuke"; break;
case 98 : $gaa ="Sugar CRM"; break;
case 99 : $gaa ="UltraDev"; break;
case 100 : $gaa ="vTiger CRM"; break;
case 101 : $gaa ="3D Studio Max"; break;
case 102 : $gaa ="AutoCAD"; break;
case 103 : $gaa ="Corel Draw"; break;
case 104 : $gaa ="Director"; break;
case 105 : $gaa ="Firework"; break;
case 106 : $gaa ="Flash"; break;
case 107 : $gaa ="iLLustrator"; break;
case 108 : $gaa ="Pagemaker"; break;
case 109 : $gaa ="Photoshop"; break;
case 110 : $gaa ="Swish Max"; break;
case 111 : $gaa ="Acobat"; break;
case 112 : $gaa ="Apache"; break;
case 113 : $gaa ="AppServ"; break;
case 114 : $gaa ="ATM"; break;
case 115 : $gaa ="Cisso"; break;
case 116 : $gaa ="DNS"; break;
case 117 : $gaa ="Edura Pro"; break;
case 118 : $gaa ="Email Server"; break;
case 119 : $gaa ="Fire Fox"; break;
case 120 : $gaa ="Firewall"; break;
case 121 : $gaa ="IBM webshpere"; break;
case 122 : $gaa ="IIS"; break;
case 123 : $gaa ="Internet Exploer"; break;
case 124 : $gaa ="Jakata Tomcat"; break;
case 125 : $gaa ="LAN / WAN"; break;
case 126 : $gaa ="MS Biz Talk"; break;
case 127 : $gaa ="MS Exchange"; break;
case 128 : $gaa ="MS Outlook"; break;
case 129 : $gaa ="Netscape Navigator"; break;
case 130 : $gaa ="OmniHTTPd"; break;
case 131 : $gaa ="Opera"; break;
case 132 : $gaa ="Outlook Express"; break;
case 133 : $gaa ="PABX"; break;
case 134: $gaa ="Personal Web Server"; break;
case 135 : $gaa ="PHPMyadmin"; break;
case 136 : $gaa ="Security"; break;
case 137 : $gaa ="SSI"; break;
case 138 : $gaa ="SSL"; break;
case 139 : $gaa ="TCP/IP"; break;
case 140 : $gaa ="Window Live Messenger"; break;
case 141 : $gaa ="Linux"; break;
case 142 : $gaa ="Mac"; break;
case 143 : $gaa ="Unix"; break;
case 144 : $gaa ="Window / NT / Server"; break;
case 145 : $gaa ="Baan"; break;
case 146 : $gaa ="SAP"; break;
case 147 : $gaa ="PeopleSoft"; break;
case 148 : $gaa ="Siebel"; break;
case 149 : $gaa ="AS400"; break;
case 150 : $gaa ="CamFrog"; break;
case 151 : $gaa ="Cognos"; break;
case 152 : $gaa ="CuteFTP"; break;
case 153 : $gaa ="Lotus Notes"; break;
case 154 : $gaa ="Mainframe"; break;
case 155 : $gaa ="MS Excel"; break;
case 156 : $gaa ="MS Powerpoint"; break;
case 157 : $gaa ="MS Project"; break;
case 158 : $gaa ="MS Word"; break;
case 159 : $gaa ="Nero Burn Rom"; break;
case 160 : $gaa ="SDLC"; break;
case 161 : $gaa ="Skype"; break;
case 162 : $gaa ="SPSS"; break;
case 163 : $gaa ="Visio"; break;
case 164 : $gaa ="Win Rar"; break;
case 165 : $gaa ="Win Zip"; break;
case 166 : $gaa ="WS FTP"; break;
                                   }
return  $gaa;
}


Function  encodecomputerskill ($hiw)  {  // input : $hiw  คือค่า  computer skill  |  output : คือชื่อโปรแกรมที่ถนัด
                   $vccb = 0;  $totalcount = 0;
                   $punus = "";
                   $bufferstring = explode(":",$hiw);
                   for  ($p=0;$p<=166;$p++)                         {     //   หาจำนวนโปรแกรมที่เลือกทั้งหมด
                            if   ($bufferstring[$p] == "T")     {
                                  $totalcount++;
                                                                                 }
                                                                                            }                

                   for  ($i=0;$i<=166;$i++)    {     //    start  loop
                            if  ($bufferstring[$i] == "T")        {     //   start  if 1  
                                 $vccb++;
                                 if    (($vccb % 6) == 0)   {
                                          $seep = "<br>";
                                                                             }
                                 elseif    ($vccb == $totalcount)   {
                                                 $seep = "";
                                                                                              }
                                 else   {   $seep = "<font color=#FFFFFF>"."&nbsp / &nbsp"."</font>";   }
                                 $punus = $punus.encodeprogramname($i).$seep;
                                                                                     }     //  end  if 1
                                                                   }      // end  loop
                    return $punus; 

}


Function  encodedeegree ($miy)  {  // input : $miy  คือค่า  ชื่อตำแหน่งทางการศึกษา   |  output : คือชื่อตำแหน่งทางการศึกษา ในภาษาอังกฤษ
                   switch  ($miy)  {
                                            case 0 : $iqq = ""; break;
                                            case 1 : $iqq = "Elementary Eduducation"; break;
                                            case 2 : $iqq = "Junior High School";  break; 
                                            case 3 : $iqq = "Senior High School"; break;
                                            case 4 : $iqq = "Vocational Certificate"; break;
                                            case 5 : $iqq = "High Vocational Certificate"; break;
                                            case 6 : $iqq = "Diploma";  break;
                                            case 7 : $iqq = "Bachelor's Degree"; break;
                                            case 8 : $iqq = "Master's Degree";  breaK;
                                            case 9 : $iqq = "Doctor's Degree"; break;
                                               }
                    return  $iqq;
}


Function  encodedeegree_th ($miy)  {  // input : $miy  คือค่า  ชื่อตำแหน่งทางการศึกษา  |  output : คือชื่อตำแหน่งทางการศึกษา ในภาษาไทย
                   switch  ($miy)  {
                                            case 0 : $iqq = ""; break;
                                            case 1 : $iqq = "ประถม"; break;
                                            case 2 : $iqq = "มัธยมต้น";  break; 
                                            case 3 : $iqq = "มัธยมปลาย"; break;
                                            case 4 : $iqq = "ปวช."; break;
                                            case 5 : $iqq = "ปวส."; break;
                                            case 6 : $iqq = "อนุปริญญา";  break;
                                            case 7 : $iqq = "ปริญญาตรี"; break;
                                            case 8 : $iqq = "ปริญญาโท";  breaK;
                                            case 9 : $iqq = "ปริญญาเอก"; break;
                                               }
                    return  $iqq;
}


Function encodedriver_en($a,$b,$c) {  //  input : $a , $b , $c  คือค่า "T" และ "F" 
     if ($a=="T") { return 1; }
     else if ($b=="T") { return 2; }
     else if ($c=="T") { return 3; }
     else { return 0; }
}


Function  encodejobtype_th($GF)  {  //  output :  แสดงชนิดงานเป็นภาษาไทย
      switch ($GF) {
           case 1: {$LG = "งานประจำ"; break; }
           case 2: {$LG = "งานชั่วคราว"; break; }
           case 3: {$LG = "งานอิสระ"; break; }
           case 4: {$LG = "งานฝึกหัด"; break; }
                               }
     return $LG;
}


Function  encodejobtype_en($PF)  {    //  output :  แสดงชนิดงานเป็นภาษา อังกฤษ
      switch ($PF) {
            case 1: {$KG = "Full Time"; break; }
            case 2: {$KG = "Part Time"; break; }
            case 3: {$KG = "Freelance"; break; }
            case 4: {$KG = "Training"; break; }
                              }
       return $KG;
}


Function  encodegender_en($ip)  {  //  output : แสดงเพศภาษาอังกฤษ
      switch ($ip) {
           case 1: {$LG = "Male"; break; }
           case 2: {$LG = "Female"; break; }
                             }
     return $LG;
}


Function  encodegender_th($ip)  {  //  output : แสดงเพศภาษาไทย
      switch ($ip) {
           case 1: {$LG = "ชาย"; break; }
           case 2: {$LG = "หญิง"; break; }
                             }
     return $LG;
}


Function  encodetitle_en($ip)  {     //   output : แสดงคำนำหน้า เป็นภาษาอังกฤษ
      switch ($ip) {
           case 1: {$LG = "Mr."; break; }
           case 2: {$LG = "Mrs"; break; }
           case 3: {$LG = "Ms"; break; }
                             }
     return $LG;
}  


Function  encodetitle_th($ip)  {     //   output : แสดงคำนำหน้า เป็นภาษาอังกฤษ
      switch ($ip) {
           case 1: {$LG = "นาย."; break; }
           case 2: {$LG = "นาง"; break; }
           case 3: {$LG = "นางสาว"; break; }
                             }
     return $LG;
}  


Function  encodemarital_en($PF)  {    //  output : แสดงสถานะภาพการแต่งงาน
      switch ($PF) {
            case 1: {$KG = "Single"; break; }
            case 2: {$KG = "Married"; break; }
            case 3: {$KG = "Divorce"; break; }
            case 4: {$KG = "Widow"; break; }
            case 5: {$KG = "Not Specified"; break; }
                               }
      return $KG;
}


Function  encodemarital_th($PF)  {    //  output : แสดงสถานะภาพการแต่งงาน
      switch ($PF) {
            case 1: {$KG = "โสด"; break; }
            case 2: {$KG = "แต่งงานแล้ว"; break; }
            case 3: {$KG = "หย่า"; break; }
            case 4: {$KG = "เป็นม่าย"; break; }
            case 5: {$KG = "ไม่ระบุ"; break; }
                               }
      return $KG;
}


Function  encodemilitary_en($ip)  {   // output : แสดงสถานะภาพทางการเป็นทหาร
      switch ($ip) {
           case 0: $MG = "-"; break;
           case 1: $MG = "Conscripted"; break;
           case 2: $MG = "Not yet in Military Service"; break;
           case 3: $MG = "Exempted"; break;
                             }
     return $MG;
}


Function  encodemilitary_th($ip)  {   // output : แสดงสถานะภาพทางการเป็นทหาร
      switch ($ip) {
           case 0: $MG = "-"; break;
           case 1: $MG = "เกณฑ์ทหารแล้ว"; break;
           case 2: $MG = "ยังไม่เกณฑ์ทหาร"; break;
           case 3: $MG = "ได้รับการยกเว้น"; break;
                             }
     return $MG;
}


Function  encodedistrict_en($ip)  {  // output : ชื่อตำบลใน กรุงเทพฯ
      switch ($ip) {
           case 0: { $LG = "-"; break; }
           case 38: { $LG = "Bangbon"; break; }
           case 2: { $LG = "Bangkapi"; break; }
           case 1: { $LG = "Bangkhae"; break; }
           case 3: { $LG = "Bangkhen"; break; }
           case 7: { $LG = "Bangkholaem"; break; }
           case 4: { $LG = "Bangkhunthian"; break; }
           case 5: { $LG = "Bangkoknoi"; break; }
           case 6: { $LG = "Bangkokyai"; break; }
           case 8: { $LG = "Bangna"; break; }
           case 9: { $LG = "Bangphlat"; break; }
           case 10: { $LG = "Bangrak"; break; }
           case 11: { $LG = "Bangsue"; break; }
           case 12: { $LG = "Buengkum"; break; }
           case 16: { $LG = "Chatuchak"; break; }
           case 17: { $LG = "Chomthong"; break; }
           case 39: { $LG = "Dindaeng"; break; }
           case 13: { $LG = "Donmueang"; break; }
           case 14: { $LG = "Dusit"; break; }
           case 15: { $LG = "Huaikhwang"; break; }
           case 40: { $LG = "Khannayao"; break; }
           case 41: { $LG = "Khlongsamwa"; break; }
           case 18: { $LG = "Khlongsan"; break; }
           case 42: { $LG = "Khlongtoei"; break; }
           case 43: { $LG = "Laksi"; break; }
           case 19: { $LG = "Latkrabang"; break; }
           case 20: { $LG = "Latprao"; break; }
           case 21: { $LG = "Minburi"; break; }
           case 22: { $LG = "Nongchok"; break; }
           case 23: { $LG = "Nongkhaem"; break; }
           case 25: { $LG = "Pathumwan"; break; }
           case 24: { $LG = "Phasicharoen"; break; }
           case 30: { $LG = "Phayathai"; break; }
           case 27: { $LG = "Phrakhanong"; break; }
           case 28: { $LG = "Phranakhon"; break; }
           case 26: { $LG = "Pomprapsattruphai"; break; }
           case 29: { $LG = "Prawet"; break; }
           case 32: { $LG = "Ratburana"; break; }
           case 31: { $LG = "Ratchathewi"; break; }
           case 44: { $LG = "Saimai"; break; }
           case 33: { $LG = "Samphanthawong"; break; }
           case 45: { $LG = "Saphansung"; break; }
           case 34: { $LG = "Sathon"; break; }
           case 36: { $LG = "Suanluang"; break; }
           case 35: { $LG = "Talingchan"; break; }
           case 47: { $LG = "Thawiwatthana"; break; }
           case 36: { $LG = "Thonburi"; break; }
           case 48: { $LG = "Thungkhru"; break; }
           case 49: { $LG = "Wangthonglang"; break; }
           case 50: { $LG = "Watthana"; break; }
           case 37: { $LG = "Yannawa"; break; }
                        }
     return $LG;
}


Function  encodedistrict_th($ip)  {  // output : ชื่อตำบลใน กรุงเทพฯ
      switch ($ip) {
case 1: { $LG = คลองเตย; break;  }
case 2: { $LG = คลองสามวา; break;  }
case 3: { $LG = คลองแสน; break;  }
case 4: { $LG = คันนายาว; break;  }
case 5: { $LG = จัตตุจักร; break;  }
case 6: { $LG = ชุมทอง; break;  }
case 7: { $LG = ดอนเมือง; break;  }
case 8: { $LG = ดินแดง; break;  }
case 9: { $LG = ดูสิต; break;  }
case 10: { $LG = ตลิ่งชัน; break;  }
case 11: { $LG = ทวีวัฒนา; break;  }
case 12: { $LG = ทุ่งครุ; break;  }
case 13: { $LG = ธนบุรี; break;  }
case 14: { $LG = บางกอกน้อย; break;  }
case 15: { $LG = บางกอกใหญ; break;  }
case 16: { $LG = บางกะปิ; break;  }
case 17: { $LG = บางขุนเทียน; break;  }
case 18: { $LG = บางเขน; break;  }
case 19: { $LG = บางคอแหลม; break;  }
case 20: { $LG = บางแค; break;  }
case 21: { $LG = บางซัว; break;  }
case 22: { $LG = บางนา; break;  }
case 23: { $LG = บางบอน; break;  }
case 24: { $LG = บางพลัด; break;  }
case 25: { $LG = บางรัก; break;  }
case 26: { $LG = บึงกุม; break;  }
case 27: { $LG = ปทุมวัน; break;  }
case 28: { $LG = ประเวศ; break;  }
case 29: { $LG = ป้อมปราบศัตรูพ่าย; break;  }
case 30: { $LG = พญาไท; break;  }
case 31: { $LG = พระโขนง; break;  }
case 32: { $LG = พระนคร; break;  }
case 33: { $LG = ภาษีเจริญ; break;  }
case 34: { $LG = มีนบุรี; break;  }
case 35: { $LG = ยานนาวา; break;  }
case 36: { $LG = ราชเทวี; break;  }
case 37: { $LG = ราษฏร์บูรณะ; break;  }
case 38: { $LG = ลาดกระบัง; break;  }
case 39: { $LG = ลาดพร้าว; break;  }
case 40: { $LG = วังทองหลาง; break;  }
case 41: { $LG = วัฒนา; break;  }
case 42: { $LG = สวนหลวง; break;  }
case 43: { $LG = สะพานสูง; break;  }
case 44: { $LG = สัมพันธวงศ์; break;  }
case 45: { $LG = สาทร; break;  }
case 46: { $LG = สายใหม่; break;  }
case 47: { $LG = หนองแขม; break;  }
case 48: { $LG = หนองชุก; break;  }
case 49: { $LG = หลักสี่; break;  }
case 50: { $LG = ห้วยขวาง; break;  }
                        }
     return $LG;
} 


Function  inthaiPV($RD) {    //  output : แสดงชื่อจังหวัด
       switch ($RD) {  
            case "1"; {$LG = "กรุงเทพฯ";  break; }
            case "2"; {$LG = "กระบี่"; break; }
            case "3"; {$LG = "บึงกาฬ"; break; }
            case "4"; {$LG = "กาญจนบุรี"; break; }
            case "5"; {$LG = "กาฬสินธุ์"; break; }
            case "6"; {$LG = "กำแพงเพชร"; break; }
            case "7"; {$LG = "ขอนแก่น"; break; }                     
            case "8"; {$LG = "จันทบุรี"; break; }
            case "9"; {$LG = "ฉะเชิงเทรา"; break; }
            case "10"; {$LG = "ชลบุรี"; break; }
            case "11"; {$LG = "ชัยนาท"; break; }
            case "12"; {$LG = "ชัยภูมิ"; break; }
            case "13"; {$LG = "ชุมพร"; break; }
            case "14"; {$LG = "เชียงราย"; break; }
            case "15"; {$LG = "เชียงใหม่"; break; }
            case "16"; {$LG = "ตรัง"; break; }
            case "17"; {$LG = "ตราด"; break; }
            case "18"; {$LG = "ตาก"; break; }
            case "19"; {$LG = "นครนายก"; break; }
            case "20"; {$LG = "นครปฐม"; break; }
            case "21"; {$LG = "นครพนม"; break; }
            case "22"; {$LG = "นครราชสีมา"; break; }
            case "23"; {$LG = "นครสีธรรมราช"; break; }
            case "24"; {$LG = "นครสวรรค์"; break; }
            case "25"; {$LG = "นนทบุรี"; break; }
            case "26"; {$LG = "นราธิวาส"; break; }
            case "27"; {$LG = "น่าน"; break; }
            case "28"; {$LG = "บุรีรัมย์"; break; }
            case "29"; {$LG = "ปทุมธานี"; break; }
            case "30"; {$LG = "ประจวบคีรีขันธ์"; break; }
            case "31"; {$LG = "ปราจีนบุรี"; break; }
            case "32"; {$LG = "ปัตตานี"; break; }
            case "33"; {$LG = "พระนครศรีอยุธยา"; break; } 
            case "34"; {$LG = "พะเยาว"; break; }
            case "35"; {$LG = "พังงา"; break; }
            case "36"; {$LG = "พัทลุง"; break; }
            case "37"; {$LG = "พิจิตร"; break; }
            case "38"; {$LG = "พิษณุโลก"; break; }
            case "39"; {$LG = "เพชรบุรี"; break; }
            case "40"; {$LG = "เพชรบูรณ์"; break; }
            case "41"; {$LG = "แพร่"; break; }
            case "42"; {$LG = "ภูเก็ต"; break; }
            case "43"; {$LG = "มหาสารคาม"; break; }
            case "44"; {$LG = "มุกดาหาร"; break; }
            case "45"; {$LG = "แม่ฮ่องสอน"; break; }
            case "46"; {$LG = "ยโสธร"; break; }
            case "47"; {$LG = "ยะลา"; break; }
            case "48"; {$LG = "ร้อยเอ็ด"; break; }
            case "49"; {$LG = "ระนอง"; break; }
            case "50"; {$LG = "ระยอง"; break; }
            case "51"; {$LG = "ราชบุรี"; break; }
            case "52"; {$LG = "ลพบุรี"; break; }
            case "53"; {$LG = "ลำปาง"; break; }
            case "54"; {$LG = "ลำพูน"; break; }
            case "55"; {$LG = "เลย"; break; }
            case "56"; {$LG = "ศรีษเกษ"; break; }
            case "57"; {$LG = "สกลนคร"; break; }
            case "58"; {$LG = "สงขลา"; break; }
            case "59"; {$LG = "สตูน"; break; }
            case "60"; {$LG = "สมุทรปราการ"; break; }
            case "61"; {$LG = "สมุทรสงคราม"; break; }
            case "62"; {$LG = "สมุทรสาคร"; break; }
            case "63"; {$LG = "สระแก้ว"; break; }
            case "64"; {$LG = "สระบุรี"; break; }
            case "65"; {$LG = "สิงห์บุรี"; break; }
            case "66"; {$LG = "สุโขทัย"; break; }
            case "67"; {$LG = "สุพรรณบุรี"; break; }
            case "68"; {$LG = "สุราษฎร์ธานี"; break; }
            case "69"; {$LG = "สุรินทร์"; break; }
            case "70"; {$LG = "หนองคาย"; break; }
            case "71"; {$LG = "หนองบัวลำภู"; break; }
            case "72"; {$LG = "อ่างทอง"; break; }
            case "73"; {$LG = "อำนาจเจริญ"; break; }
            case "74"; {$LG = "อุดรธาณี"; break; }
            case "75"; {$LG = "อุตรดฺิษ"; break; }
            case "76"; {$LG = "อุทัยธานี"; break; }
            case "77"; {$LG = "อุบลราชธานี"; break; }

     }
    return $LG;
}


Function  encodeprovince_en($dt)  {   //  output : แสดงชื่อจังหวัด ภาษาอังกฤษ
       switch  ($dt)  {
                     case "0" : $PHH = "-";  break;
                     case "1" : $PHH = "Bangkok"; break;
                     case "2" : $PHH = "Krabi"; break;
                     case "3" : $PHH = "BhungKan"; break;
                     case "4" : $PHH = "Kanchanaburi"; break;
                     case "5" : $PHH = "Kalasin"; break;
                     case "6" : $PHH = "Kampaeng Pet"; break;
                     case "7" : $PHH = "Korn Kaen"; break;
                     case "8" : $PHH = "Chantaburi"; break;
                     case "9" : $PHH = "Chachuengsao"; break;
                     case "10" : $PHH = "Chonburi"; break;
                     case "11" : $PHH = "Chainat"; break;
                     case "12" : $PHH = "Chaiyaphum"; break;
                     case "13" : $PHH = "Chumphon"; break;
                     case "14" : $PHH = "Chiang Rai"; break;
                     case "15" : $PHH = "Chiang Mai"; break;
                     case "16" : $PHH = "Trang"; break;
                     case "17" : $PHH = "Trad"; break;
                     case "18" : $PHH = "Tak"; break;
                     case "19" : $PHH = "Nakorn Nayok"; break;
                     case "20" : $PHH = "Nakorn Phatom"; break;
                     case "21" : $PHH = "Nakorn Phanom"; break;
                     case "22" : $PHH = "Nakorn Ratchasima"; break;
                     case "23" : $PHH = "Nakorn Si Thamarat"; break;
                     case "24" : $PHH = "Nakorn Sawan"; break;
                     case "25" : $PHH = "Nonthaburi"; break;
                     case "26" : $PHH = "Narathiwat"; break;
                     case "27" : $PHH = "Nan"; break;
                     case "28" : $PHH = "Buriram"; break;
                     case "29" : $PHH = "Patum Thani"; break;
                     case "30" : $PHH = "Prachuap Khilikhan"; break;
                     case "31" : $PHH = "Prachinburi"; break;
                     case "32" : $PHH = "Pattani"; break;
                     case "33" : $PHH = "Phra Nakhon Si Ayudhya"; break;
                     case "34" : $PHH = "Phayao"; break;
                     case "35" : $PHH = "Phangnga"; break;
                     case "36" : $PHH = "Phatthalung"; break;
                     case "37" : $PHH = "Phichit"; break;
                     case "38" : $PHH = "Phisanulok"; break;
                     case "39" : $PHH = "Phetchaburi"; break;
                     case "40" : $PHH = "Phetchabun"; break;
                     case "41" : $PHH = "Phrae"; break;
                     case "42" : $PHH = "Phuket"; break;
                     case "43" : $PHH = "Maha Sarakham"; break;
                     case "44" : $PHH = "Mukdahan"; break;
                     case "45" : $PHH = "Mae Hong Son"; break;
                     case "46" : $PHH = "Yasothon"; break;
                     case "47" : $PHH = "Yala"; break;
                     case "48" : $PHH = "Roi Et"; break;
                     case "49" : $PHH = "Ranong"; break;
                     case "50" : $PHH = "Rayong"; break;
                     case "51" : $PHH = "Ratchaburi"; break;
                     case "52" : $PHH = "Lopburi"; break;
                     case "53" : $PHH = "Lampang"; break;
                     case "54" : $PHH = "Lamphun"; break;
                     case "55" : $PHH = "Loeit"; break;
                     case "56" : $PHH = "Sisaket"; break;
                     case "57" : $PHH = "Sakon Nakhon"; break;
                     case "58" : $PHH = "Songkhla"; break;
                     case "59" : $PHH = "Satun"; break;
                     case "60" : $PHH = "Samut Prakarn"; break;
                     case "61" : $PHH = "Samut Songkham"; break;
                     case "62" : $PHH = "Samut Sakhon"; break;
                     case "63" : $PHH = "Sa Kaeo"; break;
                     case "64" : $PHH = "Saraburi"; break;
                     case "65" : $PHH = "Singburi"; break;
                     case "66" : $PHH = "Sukhothai"; break;
                     case "67" : $PHH = "Suphanburi"; break;
                     case "68" : $PHH = "Sura Thani"; break;
                     case "69" : $PHH = "Surin"; break;
                     case "70" : $PHH = "Nong Kai"; break;
                     case "71" : $PHH = "Nong Bau Lamphu"; break;
                     case "72" : $PHH = "Ang Thong"; break;
                     case "73" : $PHH = "Amnat Charoen"; break;
                     case "74" : $PHH = "Udon Thani"; break;
                     case "75" : $PHH = "Uttaradit"; break;
                     case "76" : $PHH = "Uthai Thani"; break;
                     case "77" : $PHH = "Ubon Ratchathani"; break;
                              } 
                     return $PHH;                          
                                                             }                                                                                       


Function  encodelanguage_en($tpm)   {
                  switch  ($tpm)   {
                                 case 0 : $FFX = ""; break;
                                 case 1 : $FFX = "Thai"; break;
                                 case 2 : $FFX = "English"; break;
                                 case 3 : $FFX = "Mandarin"; break;
                                 case 4 : $FFX = "Chinese(Taejiw)"; break;
                                 case 5 : $FFX = "French"; break;
                                 case 6 : $FFX = "German"; break;
                                 case 7 : $FFX = "Italian"; break;
                                 case 8 : $FFX = "Spanish"; break;
                                 case 9 : $FFX = "Arabic"; break;
                                 case 10 : $FFX = "Korean"; break;
                                 case 11 : $FFX = "Japanese"; break;
                                                  }
                   return $FFX;
}


Function  encodelanguage_th($tpm)   {
                  switch  ($tpm)   {
                                 case 0 : $FFX = ""; break;
                                 case 1 : $FFX = "ไทย"; break;
                                 case 2 : $FFX = "อังกฤษ"; break;
                                 case 3 : $FFX = "จีนกลาง"; break;
                                 case 4 : $FFX = "จีนแต้จิ๋ว"; break;
                                 case 5 : $FFX = "ฝรั่งเศส"; break;
                                 case 6 : $FFX = "เยอรมัน"; break;
                                 case 7 : $FFX = "อิตาเลียน"; break;
                                 case 8 : $FFX = "สเปญ"; break;
                                 case 9 : $FFX = "อาหรับ"; break;
                                 case 10 : $FFX = "เกาหลี"; break;
                                 case 11 : $FFX = "ญี่ป่น"; break;
                                                  }
                   return $FFX;
}


Function  encodelavel_en($cgm)   {
                  switch  ($cgm)   {
                               case 0 : $VXL = ""; break;
                               case 1 : $VXL = "Excellent"; break;
                               case 2 : $VXL = "Good"; break;
                               case 3 : $VXL = "Fair"; break;
                               case 4 : $VXL = "Slightly Good"; break;
                                                 }
                   return $VXL;
}


Function  encodelavel_th($cgm)   {
                  switch  ($cgm)   {
                               case 0 : $VXL = ""; break;
                               case 1 : $VXL = "ดีมาก"; break;
                               case 2 : $VXL = "ดี"; break;
                               case 3 : $VXL = "ปานกลาง"; break;
                               case 4 : $VXL = "ไม่ดี"; break;
                                                 }
                   return $VXL;
}



Function thaimoney ($PK)    {    //  output : เปลี่ยนค่าเงินตัวเลขเป็นตัวอักษร
      $Dlen = strlen($PK);  
      For  ($i=0;$i<=$Dlen-1;$i++)   {  
               $Yim[$i+1] = substr($PK,$i,1);  
                                                              }  

      switch ($Dlen)   {
                   case "7";    {   
                                             switch ($Yim[1])    {   
                                                        case  "1"; { $MD = "หนึ่งล้าน";  break;  }  
                                                        case  "2"; { $MD = "สองล้าน";  break;  }
                                                        case  "3"; { $MD = "สามล้าน";  break;  }
                                                        case  "4"; { $MD = "สี่ล้าน";  break;  }
                                                        case  "5"; { $MD = "ห้าล้าน";  break;  }
                                                        case  "6"; { $MD = "หกล้าน";  break;  }
                                                        case  "7"; { $MD = "เจ็ดล้าน";  break;  }
                                                        case  "8"; { $MD = "แปดล้าน";  break;  }
                                                        case  "9"; { $MD = "เก้าล้าน";  break;  }
                                                                                }
                                             switch ($Yim[2])    {   
                                                        case  "0"; { $MD = $MD; break;  }
                                                        case  "1"; { $MD = $MD . "หนี่งแสน"; break;  }
                                                        case  "2"; { $MD = $MD . "สองแสน";  break;  }
                                                        case  "3"; { $MD = $MD . "สามแสน";  break;  }
                                                        case  "4"; { $MD = $MD . "สี่แสน";  break;  }
                                                        case  "5"; { $MD = $MD . "ห้าแสน";  break;  }
                                                        case  "6"; { $MD = $MD . "หกแสน";  break;  }
                                                        case  "7"; { $MD = $MD . "เจ็ดแสน"; break;  }
                                                        case  "8"; { $MD = $MD . "แปดแสน";  break;  }
                                                        case  "9"; { $MD = $MD . "เก้าแสน";  break;  }
                                                                                } 
                                             switch  ($Yim[3])   {   
                                                        case  "0"; { $MD = $MD; break;  }
                                                        case  "1"; { $MD = $MD . "หนี่งหมื่น"; break;  }  
                                                        case  "2"; { $MD = $MD . "สองหมื่น"; break;  }  
                                                        case  "3"; { $MD = $MD . "สามหมื่น"; break;  }  
                                                        case  "4"; { $MD = $MD . "สี่หมื่น"; break;  }  
                                                        case  "5"; { $MD = $MD . "ห้าหมื่น"; break;  }  
                                                        case  "6"; { $MD = $MD . "หกหมื่น"; break;  }  
                                                        case  "7"; { $MD = $MD . "เจ็ดหมื่น"; break;  }  
                                                        case  "8"; { $MD = $MD . "แปดหมื่น"; break;  } 
                                                        case  "9"; { $MD = $MD . "เก้าหมื่น"; break;  }
                                                                                }  
                                             switch  ($Yim[4])   {  
                                                       case  "0"; { $MD = $MD; break;  }  
                                                       case  "1"; { $MD = $MD . "หนึ่งพัน"; break;  } 
                                                       case  "2"; { $MD = $MD . "สองพัน"; break;  }  
                                                       case  "3"; { $MD = $MD . "สามพัน"; break;  }  
                                                       case  "4"; { $MD = $MD . "สี่พัน"; break;  }  
                                                       case  "5"; { $MD = $MD . "ห้าพัน"; break;  }  
                                                       case  "6"; { $MD = $MD . "หกพัน"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดพัน"; break;  }  
                                                       case  "8"; { $MD = $MD . "แปดพัน"; break;  }  
                                                       case  "9"; { $MD = $MD . "เก้าพัน"; break;  }   
                                                                                }  
                                            switch ($Yim[5])     {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "หนึ่งร้อย";  break;  }
                                                       case  "2"; { $MD = $MD . "สองร้อย";  break;  }
                                                       case  "3"; { $MD = $MD . "สามร้อย";  break;  }
                                                       case  "4"; { $MD = $MD . "สี่ร้อย";  break;  }
                                                       case  "5"; { $MD = $MD . "ห้าร้อย";  break;  }
                                                       case  "6"; { $MD = $MD . "หกร้อย";  break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ดร้อย"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดร้อย"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้าร้อย";  break;  }
                                                                                }  
                                           switch ($Yim[6])      {  
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "สิบ"; break;  }  
                                                       case  "2"; { $MD = $MD . "ยี่สิบ"; break;  } 
                                                       case  "3"; { $MD = $MD . "สามสิบ"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่สิบ"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้าสิบ"; break;  }
                                                       case  "6"; { $MD = $MD . "หกสิบ"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดสิบ"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดสิบ"; break;  } 
                                                       case  "9"; { $MD = $MD . "เก้าสิบ"; break;  }
                                                                                }  
                                           switch ($Yim[7])      {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "เอ็ด"; break;  }
                                                       case  "2"; { $MD = $MD . "สอง"; break;  }
                                                       case  "3"; { $MD = $MD . "สาม"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้า"; break;  }
                                                       case  "6"; { $MD = $MD . "หก"; break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ด"; break;  }
                                                       case  "8"; { $MD = $MD . "แปด"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้า"; break;  }
                                                                                }
                                           break;
                                         }    
                   case "6";    {   
                                             switch ($Yim[1])    {   
                                                         case  "0"; { $MD = $MD; break;  }
                                                         case  "1"; { $MD = $MD . "หนี่งแสน"; break;  }
                                                         case  "2"; { $MD = $MD . "สองแสน";  break;  }
                                                         case  "3"; { $MD = $MD . "สามแสน";  break;  }
                                                         case  "4"; { $MD = $MD . "สี่แสน";  break;  }
                                                         case  "5"; { $MD = $MD . "ห้าแสน";  break;  }
                                                         case  "6"; { $MD = $MD . "หกแสน";  break;  }
                                                         case  "7"; { $MD = $MD . "เจ็ดแสน"; break;  }
                                                         case  "8"; { $MD = $MD . "แปดแสน";  break;  }
                                                         case  "9"; { $MD = $MD . "เก้าแสน";  break;  }
                                                                                } 
                                             switch  ($Yim[2])   {   
                                                        case  "0"; { $MD = $MD; break;  }
                                                        case  "1"; { $MD = $MD . "หนี่งหมื่น"; break;  }  
                                                        case  "2"; { $MD = $MD . "สองหมื่น"; break;  }  
                                                        case  "3"; { $MD = $MD . "สามหมื่น"; break;  }  
                                                        case  "4"; { $MD = $MD . "สี่หมื่น"; break;  }  
                                                        case  "5"; { $MD = $MD . "ห้าหมื่น"; break;  }  
                                                        case  "6"; { $MD = $MD . "หกหมื่น"; break;  }  
                                                        case  "7"; { $MD = $MD . "เจ็ดหมื่น"; break;  }  
                                                        case  "8"; { $MD = $MD . "แปดหมื่น"; break;  } 
                                                        case  "9"; { $MD = $MD . "เก้าหมื่น"; break;  }
                                                                                }  
                                             switch  ($Yim[3])   {  
                                                       case  "0"; { $MD = $MD; break;  }  
                                                       case  "1"; { $MD = $MD . "หนึ่งพัน"; break;  } 
                                                       case  "2"; { $MD = $MD . "สองพัน"; break;  }  
                                                       case  "3"; { $MD = $MD . "สามพัน"; break;  }  
                                                       case  "4"; { $MD = $MD . "สี่พัน"; break;  }  
                                                       case  "5"; { $MD = $MD . "ห้าพัน"; break;  }  
                                                       case  "6"; { $MD = $MD . "หกพัน"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดพัน"; break;  }  
                                                       case  "8"; { $MD = $MD . "แปดพัน"; break;  }  
                                                       case  "9"; { $MD = $MD . "เก้าพัน"; break;  }   
                                                                                }  
                                            switch ($Yim[4])     {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "หนึ่งร้อย";  break;  }
                                                       case  "2"; { $MD = $MD . "สองร้อย";  break;  }
                                                       case  "3"; { $MD = $MD . "สามร้อย";  break;  }
                                                       case  "4"; { $MD = $MD . "สี่ร้อย";  break;  }
                                                       case  "5"; { $MD = $MD . "ห้าร้อย";  break;  }
                                                       case  "6"; { $MD = $MD . "หกร้อย";  break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ดร้อย"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดร้อย"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้าร้อย";  break;  }
                                                                                }  
                                           switch ($Yim[5])      {  
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "สิบ"; break;  }  
                                                       case  "2"; { $MD = $MD . "ยี่สิบ"; break;  } 
                                                       case  "3"; { $MD = $MD . "สามสิบ"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่สิบ"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้าสิบ"; break;  }
                                                       case  "6"; { $MD = $MD . "หกสิบ"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดสิบ"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดสิบ"; break;  } 
                                                       case  "9"; { $MD = $MD . "เก้าสิบ"; break;  }
                                                                                }  
                                           switch ($Yim[6])      {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "เอ็ด"; break;  }
                                                       case  "2"; { $MD = $MD . "สอง"; break;  }
                                                       case  "3"; { $MD = $MD . "สาม"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้า"; break;  }
                                                       case  "6"; { $MD = $MD . "หก"; break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ด"; break;  }
                                                       case  "8"; { $MD = $MD . "แปด"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้า"; break;  }
                                                                                }
                                           break;
                                         }    
                   case "5";    { 
                                           switch  ($Yim[1])   {   
                                                        case  "0"; { $MD = $MD; break;  }
                                                        case  "1"; { $MD = $MD . "หนี่งหมื่น"; break;  }  
                                                        case  "2"; { $MD = $MD . "สองหมื่น"; break;  }  
                                                        case  "3"; { $MD = $MD . "สามหมื่น"; break;  }  
                                                        case  "4"; { $MD = $MD . "สี่หมื่น"; break;  }  
                                                        case  "5"; { $MD = $MD . "ห้าหมื่น"; break;  }  
                                                        case  "6"; { $MD = $MD . "หกหมื่น"; break;  }  
                                                        case  "7"; { $MD = $MD . "เจ็ดหมื่น"; break;  }  
                                                        case  "8"; { $MD = $MD . "แปดหมื่น"; break;  } 
                                                        case  "9"; { $MD = $MD . "เก้าหมื่น"; break;  }
                                                                                }  
                                             switch  ($Yim[2])   {  
                                                       case  "0"; { $MD = $MD; break;  }  
                                                       case  "1"; { $MD = $MD . "หนึ่งพัน"; break;  } 
                                                       case  "2"; { $MD = $MD . "สองพัน"; break;  }  
                                                       case  "3"; { $MD = $MD . "สามพัน"; break;  }  
                                                       case  "4"; { $MD = $MD . "สี่พัน"; break;  }  
                                                       case  "5"; { $MD = $MD . "ห้าพัน"; break;  }  
                                                       case  "6"; { $MD = $MD . "หกพัน"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดพัน"; break;  }  
                                                       case  "8"; { $MD = $MD . "แปดพัน"; break;  }  
                                                       case  "9"; { $MD = $MD . "เก้าพัน"; break;  }   
                                                                                }  
                                            switch ($Yim[3])     {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "หนึ่งร้อย";  break;  }
                                                       case  "2"; { $MD = $MD . "สองร้อย";  break;  }
                                                       case  "3"; { $MD = $MD . "สามร้อย";  break;  }
                                                       case  "4"; { $MD = $MD . "สี่ร้อย";  break;  }
                                                       case  "5"; { $MD = $MD . "ห้าร้อย";  break;  }
                                                       case  "6"; { $MD = $MD . "หกร้อย";  break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ดร้อย"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดร้อย"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้าร้อย";  break;  }
                                                                                }  
                                           switch ($Yim[4])      {  
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "สิบ"; break;  }  
                                                       case  "2"; { $MD = $MD . "ยี่สิบ"; break;  } 
                                                       case  "3"; { $MD = $MD . "สามสิบ"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่สิบ"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้าสิบ"; break;  }
                                                       case  "6"; { $MD = $MD . "หกสิบ"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดสิบ"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดสิบ"; break;  } 
                                                       case  "9"; { $MD = $MD . "เก้าสิบ"; break;  }
                                                                                }  
                                           switch ($Yim[5])      {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "เอ็ด"; break;  }
                                                       case  "2"; { $MD = $MD . "สอง"; break;  }
                                                       case  "3"; { $MD = $MD . "สาม"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้า"; break;  }
                                                       case  "6"; { $MD = $MD . "หก"; break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ด"; break;  }
                                                       case  "8"; { $MD = $MD . "แปด"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้า"; break;  }
                                                                                }
                                           break; 
                                         }
                   case "4";    {
                                           switch  ($Yim[1])   {  
                                                       case  "0"; { $MD = $MD; break;  }  
                                                       case  "1"; { $MD = $MD . "หนึ่งพัน"; break;  } 
                                                       case  "2"; { $MD = $MD . "สองพัน"; break;  }  
                                                       case  "3"; { $MD = $MD . "สามพัน"; break;  }  
                                                       case  "4"; { $MD = $MD . "สี่พัน"; break;  }  
                                                       case  "5"; { $MD = $MD . "ห้าพัน"; break;  }  
                                                       case  "6"; { $MD = $MD . "หกพัน"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดพัน"; break;  }  
                                                       case  "8"; { $MD = $MD . "แปดพัน"; break;  }  
                                                       case  "9"; { $MD = $MD . "เก้าพัน"; break;  }  
                                                                                }  
                                          switch ($Yim[2])     {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "หนึ่งร้อย";  break;  }
                                                       case  "2"; { $MD = $MD . "สองร้อย";  break;  }
                                                       case  "3"; { $MD = $MD . "สามร้อย";  break;  }
                                                       case  "4"; { $MD = $MD . "สี่ร้อย";  break;  }
                                                       case  "5"; { $MD = $MD . "ห้าร้อย";  break;  }
                                                       case  "6"; { $MD = $MD . "หกร้อย";  break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ดร้อย"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดร้อย"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้าร้อย";  break;  }
                                                                                }  
                                           switch ($Yim[3])      {  
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "สิบ"; break;  }  
                                                       case  "2"; { $MD = $MD . "ยี่สิบ"; break;  } 
                                                       case  "3"; { $MD = $MD . "สามสิบ"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่สิบ"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้าสิบ"; break;  }
                                                       case  "6"; { $MD = $MD . "หกสิบ"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดสิบ"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดสิบ"; break;  } 
                                                       case  "9"; { $MD = $MD . "เก้าสิบ"; break;  }
                                                                                }  
                                           switch ($Yim[4])      {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "เอ็ด"; break;  }
                                                       case  "2"; { $MD = $MD . "สอง"; break;  }
                                                       case  "3"; { $MD = $MD . "สาม"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้า"; break;  }
                                                       case  "6"; { $MD = $MD . "หก"; break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ด"; break;  }
                                                       case  "8"; { $MD = $MD . "แปด"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้า"; break;  }
                                                                                }
                                           break;                         
                                         }
                   case "3";    {
                                          switch ($Yim[1])     {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "หนึ่งร้อย";  break;  }
                                                       case  "2"; { $MD = $MD . "สองร้อย";  break;  }
                                                       case  "3"; { $MD = $MD . "สามร้อย";  break;  }
                                                       case  "4"; { $MD = $MD . "สี่ร้อย";  break;  }
                                                       case  "5"; { $MD = $MD . "ห้าร้อย";  break;  }
                                                       case  "6"; { $MD = $MD . "หกร้อย";  break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ดร้อย"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดร้อย"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้าร้อย";  break;  }
                                                                                }  
                                          switch ($Yim[2])      {  
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "สิบ"; break;  }  
                                                       case  "2"; { $MD = $MD . "ยี่สิบ"; break;  } 
                                                       case  "3"; { $MD = $MD . "สามสิบ"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่สิบ"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้าสิบ"; break;  }
                                                       case  "6"; { $MD = $MD . "หกสิบ"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดสิบ"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดสิบ"; break;  } 
                                                       case  "9"; { $MD = $MD . "เก้าสิบ"; break;  }
                                                                                }  
                                          switch ($Yim[3])      {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "เอ็ด"; break;  }
                                                       case  "2"; { $MD = $MD . "สอง"; break;  }
                                                       case  "3"; { $MD = $MD . "สาม"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้า"; break;  }
                                                       case  "6"; { $MD = $MD . "หก"; break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ด"; break;  }
                                                       case  "8"; { $MD = $MD . "แปด"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้า"; break;  }
                                                                                }
                                          break;
                                         }
                   case "2";    {
                                          switch ($Yim[1])      {  
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "สิบ"; break;  }  
                                                       case  "2"; { $MD = $MD . "ยี่สิบ"; break;  } 
                                                       case  "3"; { $MD = $MD . "สามสิบ"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่สิบ"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้าสิบ"; break;  }
                                                       case  "6"; { $MD = $MD . "หกสิบ"; break;  }  
                                                       case  "7"; { $MD = $MD . "เจ็ดสิบ"; break;  }
                                                       case  "8"; { $MD = $MD . "แปดสิบ"; break;  } 
                                                       case  "9"; { $MD = $MD . "เก้าสิบ"; break;  }
                                                                                }  
                                          switch ($Yim[2])      {   
                                                       case  "0"; { $MD = $MD; break;  }
                                                       case  "1"; { $MD = $MD . "เอ็ด"; break;  }
                                                       case  "2"; { $MD = $MD . "สอง"; break;  }
                                                       case  "3"; { $MD = $MD . "สาม"; break;  }
                                                       case  "4"; { $MD = $MD . "สี่"; break;  }
                                                       case  "5"; { $MD = $MD . "ห้า"; break;  }
                                                       case  "6"; { $MD = $MD . "หก"; break;  }
                                                       case  "7"; { $MD = $MD . "เจ็ด"; break;  }
                                                       case  "8"; { $MD = $MD . "แปด"; break;  }
                                                       case  "9"; { $MD = $MD . "เก้า"; break;  }
                                                                                }   
                                          break;
                                         }   
                               }  
       return  $MD . "บาทถ้วน";
}


Function  CheckEnglishwordonly($XP)  {
       $Y[1] = "a";
       $Y[2] = "b";
       $Y[3] = "c";
       $Y[4] = "d";
       $Y[5] = "e";
       $Y[6] = "f";
       $Y[7] = "g";
       $Y[8] = "h";
       $Y[9] = "i";
       $Y[10] = "j";
       $Y[11] = "k";
       $Y[12] = "l";
       $Y[13] = "m";
       $Y[14] = "n";
       $Y[15] = "o";
       $Y[16] = "p";
       $Y[17] = "q";
       $Y[18] = "r";
       $Y[19] = "s";
       $Y[20] = "t";
       $Y[21] = "u";
       $Y[22] = "v";
       $Y[23] = "w";
       $Y[24] = "x";
       $Y[25] = "y";
       $Y[26] = "z";
       $Y[27] = "A";
       $Y[28] = "B";
       $Y[29] = "C";
       $Y[30] = "D";
       $Y[31] = "E";
       $Y[32] = "F";
       $Y[33] = "G";
       $Y[34] = "H";
       $Y[35] = "I";
       $Y[36] = "J";
       $Y[37] = "K";
       $Y[38] = "L";
       $Y[39] = "M";
       $Y[40] = "N";
       $Y[41] = "O";
       $Y[42] = "P";
       $Y[43] = "Q";
       $Y[44] = "R";
       $Y[45] = "S";
       $Y[46] = "T";
       $Y[47] = "U";
       $Y[48] = "V";
       $Y[49] = "W";
       $Y[50] = "X";
       $Y[51] = "Y";
       $Y[52] = "Z";
       $Y[53] = "1";
       $Y[54] = "2";
       $Y[55] = "3";
       $Y[56] = "4";
       $Y[57] = "5";
       $Y[58] = "6";
       $Y[59] = "7";
       $Y[60] = "8";
       $Y[61] = "9";
       $Y[62] = "0";
       $Y[63] = "!";
       $Y[64] = "@";
       $Y[65] = "#";
       $Y[66] = "$";
       $Y[67] = "*";
       $Y[68] = "-";
       $Y[69] = "_";
       $Y[70] = "+";
       $Y[71] = "/";
       $Y[72] = chr(92);
       $Y[73] = "&";
       $Y[74] = "%";
       $Y[75] = "^";
       $Y[76] = '(';
       $Y[77] = ')';
       $Y[78] = '=';
       $Y[79] = '{';
       $Y[80] = '}';
       $Y[81] = '[';
       $Y[82] = ']';
       $Y[83] = ':';
       $Y[84] = ';';
       $Y[85] = '.';
       $Y[86] = '?';
       $Y[87] = '<';
       $Y[88] = '>';
       $Y[89] = "'";
       $Y[90] = chr(32);
       $Y[91] = chr(160);
       $Y[92] = ',';
       $Y[93] = chr(10);
       $Y[94] = Chr(13);  

       $HK = "F";
        for  ($i=0;$i<=strlen($XP)-1;$i++)                  {
               $Haxx = substr($XP,$i,1);
               $Waxx = 0;
                           for  ($j=1;$j<=94;$j++)  {
                                    if  ($Haxx != $Y[$j])    {
                                         $Waxx = $Waxx +1;
                                                                            }
                                                                      }
              if  ($Waxx == 94)  { $HK="T";  break;   }          
                                                                                    }    
        return $HK;                                                      
}  


Function  CheckThaiwordonly($XP)  {
       $Y[1] = "a";
       $Y[2] = "b";
       $Y[3] = "c";
       $Y[4] = "d";
       $Y[5] = "e";
       $Y[6] = "f";
       $Y[7] = "g";
       $Y[8] = "h";
       $Y[9] = "i";
       $Y[10] = "j";
       $Y[11] = "k";
       $Y[12] = "l";
       $Y[13] = "m";
       $Y[14] = "n";
       $Y[15] = "o";
       $Y[16] = "p";
       $Y[17] = "q";
       $Y[18] = "r";
       $Y[19] = "s";
       $Y[20] = "t";
       $Y[21] = "u";
       $Y[22] = "v";
       $Y[23] = "w";
       $Y[24] = "x";
       $Y[25] = "y";
       $Y[26] = "z";
       $Y[27] = "A";
       $Y[28] = "B";
       $Y[29] = "C";
       $Y[30] = "D";
       $Y[31] = "E";
       $Y[32] = "F";
       $Y[33] = "G";
       $Y[34] = "H";
       $Y[35] = "I";
       $Y[36] = "J";
       $Y[37] = "K";
       $Y[38] = "L";
       $Y[39] = "M";
       $Y[40] = "N";
       $Y[41] = "O";
       $Y[42] = "P";
       $Y[43] = "Q";
       $Y[44] = "R";
       $Y[45] = "S";
       $Y[46] = "T";
       $Y[47] = "U";
       $Y[48] = "V";
       $Y[49] = "W";
       $Y[50] = "X";
       $Y[51] = "Y";
       $Y[52] = "Z";

       $HK = "F";

                 for  ($j=1;$j<=52;$j++)  {
                         if  (strstr($XP,$Y[$j]) != "")   {
                             $HK="T";
                             break;
                                                                             }    

                                                            }   //  end  for
  
        return $HK;                                                      
}  


Function  checknumber($XP)   {
        $Y[1] ="1";
        $Y[2] ="2";
        $Y[3] ="3";
        $Y[4] ="4";
        $Y[5] ="5";
        $Y[6] ="6";
        $Y[7] ="7";
        $Y[8] ="8";
        $Y[9] ="9";
        $Y[10] ="0";
        $Y[11] =".";
        $Y[12] = ",";
        $HK = "F";
        for  ($i=0;$i<=strlen($XP)-1;$i++)                  {
               $Haxx = substr($XP,$i,1);
               $Waxx = 0;
                           for  ($j=1;$j<=12;$j++)  {
                                    if  ($Haxx != $Y[$j])    {
                                         $Waxx = $Waxx +1;
                                                                            }
                                                                      }
              if  ($Waxx == 12)  { $HK="T";  break;   }          
                                                                                    }    
        return $HK;                                            
}


Function Replaceblank($YT)  {
         $CC_companyname = "";
         for($i=0;$i<=strlen($YT);$i++)  { 
               if  ((ord(substr($YT,$i,1)) == 160) or (ord(substr($YT,$i,1)) == 32))  {  
                   $CC_companyname = $CC_companyname . Chr(43);
                                                                                                                                            }  
              else  {  
                   $CC_companyname = $CC_companyname . substr($YT,$i,1);
                         } 
                                                                }
         return $CC_companyname;
}


Function Replaceplus($MT) {
          $MM_companyname = "";
          for ($i=0;$i<=strlen($MT);$i++) { 
                 if  (ord(substr($MT,$i,1)) == 43) {  
                     $MM_companyname = $MM_companyname . Chr(160);
                                                                    }
                 else {  
                     $MM_companyname = $MM_companyname . substr($MT,$i,1);
                           }
                                                                    }

           return $MM_companyname;
}
?>
