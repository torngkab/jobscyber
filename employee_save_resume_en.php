<?session_start();?>
<?
include("Allfunction.inc");
$_SESSION['kgfirstname'] = $_POST['firstname'];
$_SESSION['kglastname'] = $_POST['lastname'];
$_SESSION['kgnationality'] = $_POST['nationality'];
$_SESSION['kgaddress'] = $_POST['address'];
$_SESSION['kgcareer'] = $_POST['career_en'];
$_SESSION['kgintposition1'] = $_POST['intposition1'];
$_SESSION['kgintposition2'] = $_POST['intposition2'];
$_SESSION['kgintposition3'] = $_POST['intposition3'];
$_SESSION['kghobby1'] = $_POST['hobby1'];
$_SESSION['kghobby2'] = $_POST['hobby2'];
$_SESSION['kghobby3'] = $_POST['hobby3'];
$_SESSION['kghobby4'] = $_POST['hobby4'];
$_SESSION['kghobby5'] = $_POST['hobby5'];
$_SESSION['kgintitude1'] = $_POST['institude1'];
$_SESSION['kgdegree1'] = $_POST['degree1'];
$_SESSION['kgfaculty1'] = $_POST['faculty1'];
$_SESSION['kgmajor1'] = $_POST['major1'];
$_SESSION['kgminor1'] = $_POST['minor1'];
$_SESSION['kgintitude2'] = $_POST['institude2'];
$_SESSION['kgdegree2'] = $_POST['degree2'];
$_SESSION['kgfaculty2'] = $_POST['faculty2'];
$_SESSION['kgmajor2'] = $_POST['major2'];
$_SESSION['kgminor2'] = $_POST['minor2'];
$_SESSION['kgintitude3'] = $_POST['institude3'];
$_SESSION['kgfaculty3'] = $_POST['faculty3'];
$_SESSION['kgmajor3'] = $_POST['major3'];
$_SESSION['kgminor3'] =$_POST['minor3'];
$_SESSION['kgintitude4'] = $_POST['institude4'];
$_SESSION['kgfaculty4'] = $_POST['faculty4'];
$_SESSION['kgmajor4'] = $_POST['major4'];
$_SESSION['kgminor4'] =  $_POST['minor4'];
$_SESSION['kgextracur1'] = $_POST['extracur1'];
$_SESSION['kgextracur2'] = $_POST['extracur2'];
$_SESSION['kgextracur3'] = $_POST['extracur3'];
$_SESSION['kgextracur4'] = $_POST['extracur4'];
$_SESSION['kgextracur5'] = $_POST['extracur5'];
$_SESSION['kgotherskill1'] = $_POST['otherskill1'];
$_SESSION['kgotherskill2'] = $_POST['otherskill2'];
$_SESSION['kgotherskill3'] = $_POST['otherskill3'];
$_SESSION['kgotherskill4'] = $_POST['otherskill4'];
$_SESSION['kgotherskill5'] = $_POST['otherskill5'];
$_SESSION['kgotherskill6'] = $_POST['otherskill6'];
$_SESSION['kgotherskill7'] = $_POST['otherskill7'];
$_SESSION['kgotherskill8'] = $_POST['otherskill8'];
$_SESSION['kgcompany1'] = $_POST['company1'];
$_SESSION['kgposition1'] = $_POST['position1'];
$_SESSION['kgcom1onus1'] = $_POST['com1onus1'];
$_SESSION['kgcom1onus2'] = $_POST['com1onus2'];
$_SESSION['kgcom1onus3'] = $_POST['com1onus3'];
$_SESSION['kgcom1onus4'] = $_POST['com1onus4'];
$_SESSION['kgcom1onus5'] = $_POST['com1onus5'];
$_SESSION['kgcom1onus6'] = $_POST['com1onus6'];
$_SESSION['kgcom1onus7'] = $_POST['com1onus7'];
$_SESSION['kgcom1onus8'] = $_POST['com1onus8'];
$_SESSION['kgcompany2'] = $_POST['company2'];
$_SESSION['kgposition2'] = $_POST['position2'];
$_SESSION['kgcom2onus1'] = $_POST['com2onus1'];
$_SESSION['kgcom2onus2'] = $_POST['com2onus2'];
$_SESSION['kgcom2onus3'] = $_POST['com2onus3'];
$_SESSION['kgcom2onus4'] = $_POST['com2onus4'];
$_SESSION['kgcom2onus5'] = $_POST['com2onus5'];
$_SESSION['kgcom2onus6'] = $_POST['com2onus6'];
$_SESSION['kgcom2onus7'] = $_POST['com2onus7'];
$_SESSION['kgcom2onus8'] = $_POST['com2onus8'];
$_SESSION['kgcompany3'] = $_POST['company3'];
$_SESSION['kgposition3'] = $_POST['position3'];
$_SESSION['kgcom3onus1'] = $_POST['com3onus1'];
$_SESSION['kgcom3onus2'] = $_POST['com3onus2'];
$_SESSION['kgcom3onus3'] = $_POST['com3onus3'];
$_SESSION['kgcom3onus4'] = $_POST['com3onus4'];
$_SESSION['kgcom3onus5'] = $_POST['com3onus5'];
$_SESSION['kgcom3onus6'] = $_POST['com3onus6'];
$_SESSION['kgcom3onus7'] = $_POST['com3onus7'];
$_SESSION['kgcom3onus8'] = $_POST['com3onus8'];
											    
if  ($_POST['firstname'] == "")   {
             $_SESSION['return2alert'] = 1;
                                                      }
else  if  ($_POST['lastname'] == "")  {
             $_SESSION['return2alert'] = 2;
	                                             }  
else  if  ($_POST['nationality'] == "")   {
             $_SESSION['return2alert'] = 3;
                                                                 }
else  if  ($_POST['address'] == "")   {
             $_SESSION['return2alert'] = 4;
                                                             }
else  if  ($_POST['career_en'] == "")   {
             $_SESSION['return2alert'] = 5;
                                                          }
else  if  ($_SESSION['dbintposition1'] != "" and $_POST['intposition1'] == "")   {
             $_SESSION['return2alert'] = 6;
                                                                                                                                   }
else  if  ($_SESSION['dbintposition2'] != "" and $_POST['intposition2'] == "")   {
             $_SESSION['return2alert'] = 7;
                                                                                                                                   }
else  if  ($_SESSION['dbintposition3'] != "" and $_POST['intposition3'] == "")   {
             $_SESSION['return2alert'] = 8;
                                                                                                                                   }
else  if  ($_POST['hobby1'] == "")   {
             $_SESSION['return2alert'] = 9;
                                                       }
else  if  ($_POST['hobby2'] == "")   {
             $_SESSION['return2alert'] = 10;
/*	                                                  }
else  if  ($_SESSION['dbhobby3'] != "" and $_POST['hobby3'] == "")  {
                  $_SESSION['return2alert'] = 11;
                                                                                                                       }
else  if  ($_SESSION['dbhobby4'] != "" and $_POST['hobby4'] == "")   {
             $_SESSION['return2alert'] = 12;
                                                                                                                         }
else  if  ($_SESSION['dbhobby5'] != "" and $_POST['hobby5'] == "")   {
             $_SESSION['return2alert'] = 13;
*/                                                                                                                        }
else  if  ($_POST['institude1'] == "")   {
             $_SESSION['return2alert'] = 14;
                                                                }
else  if  ($_POST['faculty1'] == "")   {
             $_SESSION['return2alert'] = 15;
                                                            }
else  if  ($_SESSION['dbedt1_major'] != ""  and  $_POST['major1'] == "")   {
             $_SESSION['return2alert'] = 16;
                                                           }																																													
else  if  ($_SESSION['dbedt1_minor'] != ""  and  $_POST['minor1'] == "")   {
             $_SESSION['return2alert'] = 17;
/*                                                   }
else  if  ($_SESSION['dbedt2_intitudename'] != ""  and  $_POST['institude2'] == "")   {
             $_SESSION['return2alert'] = 18;
                                                   }
else  if  ($_SESSION['dbedt2_faculty'] != ""  and  $_POST['faculty2'] == "")   {
             $_SESSION['return2alert'] = 19;
                                                   }
else  if  ($_SESSION['dbedt2_major'] != ""  and  $_POST['major2'] == "")   {
             $_SESSION['return2alert'] = 20;
                                                   }
else  if  ($_SESSION['dbedt2_minor'] != ""  and  $_POST['minor2'] == "")   {
             $_SESSION['return2alert'] = 21;
                                                   }
else  if  ($_SESSION['dbedt3_intitudename'] != ""  and  $_POST['institude3'] == "")   {
             $_SESSION['return2alert'] = 22;
                                                   }
else  if  ($_SESSION['dbedt3_faculty'] != ""  and  $_POST['faculty3'] == "")   {
             $_SESSION['return2alert'] = 23;
                                                   }
else  if  ($_SESSION['dbedt3_major'] != ""  and  $_POST['major3'] == "")   {
             $_SESSION['return2alert'] = 24;
                                                   }
else  if  ($_SESSION['dbedt3_minor'] != ""  and  $_POST['minor3'] == "")   {
             $_SESSION['return2alert'] = 25;
                                                   }
else  if  ($_SESSION['dbedt4_intitudename'] != ""  and  $_POST['institude4'] == "")   {
             $_SESSION['return2alert'] = 26;
                                                   }
else  if  ($_SESSION['dbedt4_faculty'] != ""  and  $_POST['faculty4'] == "")   {
             $_SESSION['return2alert'] = 27;
                                                   }
else  if  ($_SESSION['dbedt4_major'] != ""  and  $_POST['major4'] == "")   {
             $_SESSION['return2alert'] = 28;
                                                   }
else  if  ($_SESSION['dbedt4_minor'] != ""  and  $_POST['minor4'] == "")   {
             $_SESSION['return2alert'] = 29;
*/                                                   }
else  if  ($_SESSION[gd_ext1] != "" and $_POST['extracur1'] == "")   {
             $_SESSION['return2alert'] = 30;
  /*                                                         }
else  if  ($_SESSION[gd_ext2] != "" and $_POST['extracur2'] == "")   {
             $_SESSION['return2alert'] = 31;
                                                           }
else  if  ($_SESSION[gd_ext3] != "" and $_POST['extracur3'] == "")   {
             $_SESSION['return2alert'] = 32;
                                                           }
else  if  ($_SESSION[gd_ext4] != "" and $_POST['extracur4'] == "")   {
             $_SESSION['return2alert'] = 33;
                                                           }
else  if  ($_SESSION[gd_ext5] != "" and $_POST['extracur5'] == "")   {
             $_SESSION['return2alert'] = 34;
*/                                                           }
else  if  ($_POST['otherskill1'] == "")   {
             $_SESSION['return2alert'] = 35;
                                                                }
else  if  ($_POST['otherskill2'] == "")   {
             $_SESSION['return2alert'] = 36;
/*                                                                 }
else  if  ($_SESSION['gd_otherskill3'] != ""  and $_POST['otherskill3'] == "")   {
             $_SESSION['return2alert'] = 37;
                                                    }
else  if  ($_SESSION['gd_otherskill4'] != ""  and $_POST['otherskill4'] == "")   {
             $_SESSION['return2alert'] = 38;
                                                    }
else  if  ($_SESSION['gd_otherskill5'] != ""  and $_POST['otherskill5'] == "")   {
             $_SESSION['return2alert'] = 39;
                                                    }
else  if  ($_SESSION['gd_otherskill6'] != ""  and $_POST['otherskill6'] == "")   {
             $_SESSION['return2alert'] = 40;
                                                    }
else  if  ($_SESSION['gd_otherskill7'] != ""  and $_POST['otherskill7'] == "")   {
             $_SESSION['return2alert'] = 41;
                                                    }
else  if  ($_SESSION['gd_otherskill8'] != ""  and $_POST['otherskill8'] == "")   {
             $_SESSION['return2alert'] = 42;
*/                                                    }
else  {   

$SQL = "update employee_resume_en set firstname = '$_SESSION[kgfirstname]',lastname = '$_SESSION[kglastname]',xxxnationality = '$_SESSION[kgnationality]',xxxaddress = '$_SESSION[kgaddress]',careerobjective = '$_SESSION[kgcareer]',interestingposition1 = '$_SESSION[kgintposition1]',interestingposition2 = '$_SESSION[kgintposition2]',interestingposition3 = '$_SESSION[kgintposition3]',hobby1 = '$_SESSION[kghobby1]',hobby2 = '$_SESSION[kghobby2]',hobby3 = '$_SESSION[kghobby3]',hobby4 = '$_SESSION[kghobby4]',hobby5 = '$_SESSION[kghobby5]',edt1_intitudename = '$_SESSION[kgintitude1]',fffaculty1 = '$_SESSION[kgfaculty1]',edt1_major = '$_SESSION[kgmajor1]',edt1_minor = '$_SESSION[kgminor1]',edt2_intitudename = '$_SESSION[kgintitude2]',fffaculty2 = '$_SESSION[kgfaculty2]',mmmajor2 = '$_SESSION[kgmajor2]',mmminor2 = '$_SESSION[kgminor2]',edt3_intitudename = '$_SESSION[kgintitude3]',edt3_faculty = '$_SESSION[kgfaculty3]',edt3_major = '$_SESSION[kgmajor3]',edt3_minor = '$_SESSION[kgminor3]'";
$SQL =  $SQL.",edt4_intitudename = '$_SESSION[kgintitude4]',edt4_faculty = '$_SESSION[kgfaculty4]',edt4_major = '$_SESSION[kgmajor4]',edt4_minor = '$_SESSION[kgminor4]',extracur1 = '$_SESSION[kgextracur1]',extracur2 = '$_SESSION[kgextracur2]',extracur3 = '$_SESSION[kgextracur3]',extracur4 = '$_SESSION[kgextracur4]',extracur5 = '$_SESSION[kgextracur5]',ooootherskill1 = '$_SESSION[kgotherskill1]',xxxotherskill2 = '$_SESSION[kgotherskill2]',xxxotherskill3 = '$_SESSION[kgotherskill3]',xxxotherskill4 = '$_SESSION[kgotherskill4]',xxxotherskill5 = '$_SESSION[kgotherskill5]',xxxotherskill6 = '$_SESSION[kgotherskill6]',xxxotherskill7 = '$_SESSION[kgotherskill7]',xxxotherskill8 = '$_SESSION[kgotherskill8]',company1 = '$_SESSION[kgcompany1]',position1 = '$_SESSION[kgposition1]',com1onus1 = '$_SESSION[kgcom1onus1]',com1onus2 = '$_SESSION[kgcom1onus2]',com1onus3 = '$_SESSION[kgcom1onus3]',com1onus4 = '$_SESSION[kgcom1onus4]',com1onus5 = '$_SESSION[kgcom1onus5]',com1onus6 = '$_SESSION[kgcom1onus6]'";
$SQL =  $SQL.",com1onus7 = '$_SESSION[kgcom1onus7]',com1onus8 = '$_SESSION[kgcom1onus8]',cccompany2 = '$_SESSION[kgcompany2]',ppposition2 = '$_SESSION[kgposition2]',com2onus1 = '$_SESSION[kgcom2onus1]',com2onus2 = '$_SESSION[kgcom2onus2]',com2onus3 = '$_SESSION[kgcom2onus3]',com2onus4 = '$_SESSION[kgcom2onus4]',com2onus5 = '$_SESSION[kgcom2onus5]',com2onus6 = '$_SESSION[kgcom2onus6]',com2onus7 = '$_SESSION[kgcom2onus7]',com2onus8 = '$_SESSION[kgcom2onus8]',company3 = '$_SESSION[kgcompany3]',position3 = '$_SESSION[kgposition3]',com3onus1 = '$_SESSION[kgcom3onus1]',com3onus2 = '$_SESSION[kgcom3onus2]',com3onus3 = '$_SESSION[kgcom3onus3]',com3onus4 = '$_SESSION[kgcom3onus4]',com3onus5 = '$_SESSION[kgcom3onus5]',com3onus6 = '$_SESSION[kgcom3onus6]',com3onus7 = '$_SESSION[kgcom3onus7]',com3onus8 = '$_SESSION[kgcom3onus8]'"; 
$SQL =  $SQL."where idresume = '$_SESSION[resumeindex]'";  

mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL); 
//echo $_SESSION[resumeindex];
//echo "<br>".$SQL;
//$_SESSION['codereturn2'] = "T";    
//echo "<meta http-equiv=refresh content=0.1;url=employee_resumeform_th.php>";
echo "<script>window.location = 'employee_resumeform_th.php'</script>";
         }
if($_SESSION['return2alert']>=1&&$_SESSION['return2alert']<=100){
	//echo "<meta http-equiv=refresh content=0.1;url=employee_post_resume_th.php>";
	echo "<script>window.history.back(-1)</script>";
}
//echo $_SESSION[resumeindex];
//echo "<meta http-equiv=refresh content=0.1;url=employee_post_resume_en_new.php>";  

?>