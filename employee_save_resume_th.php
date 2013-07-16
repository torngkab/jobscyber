<?session_start();?>
<?//$_SESSION['codereturn1'] = "F"?>
<?
include("Allfunction.inc");
$SQL = "Select *  FROM  employee_resume_th  WHERE  idresume ='$_SESSION[resumeindex]'";
mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
while ($row=mysql_fetch_array($result))             {
          $check_image = $row[imageemployee];
                                                                                   } 

$_SESSION['birthdate'] = $_POST['birthdate'];
$_SESSION['birthmonth'] = $_POST['birthmonth'];
$_SESSION['birthyear'] = $_POST['birthyear'];
$_SESSION['birthofdate'] = ($_POST['birthyear'] *10000) + ($_POST['birthmonth'] * 100) + $_POST['birthdate'];
$_SESSION['title'] = $_POST['title'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['weight'] = $_POST['weight'];
$_SESSION['height'] = $_POST['height'];
$_SESSION['passpostid'] = $_POST['idcard'];
$_SESSION['nationality'] = $_POST['nationality'];
$_SESSION['marital'] = intval($_POST['marital']);
$_SESSION['military'] = intval($_POST['military']);
$_SESSION['address'] = $_POST['address'];
$_SESSION['district'] = $_POST['district'];
$_SESSION['province'] = $_POST['province'];
$_SESSION['postcode'] = $_POST['postcode'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['home'] = $_POST['home'];
$_SESSION['mobile'] = $_POST['mobile'];
$_SESSION['office'] = $_POST['office'];
$_SESSION['fax'] = $_POST['fax'];
$_SESSION['driver1'] = $_POST['driver1'];
$_SESSION['driver2'] = $_POST['driver2'];
$_SESSION['driver3'] = $_POST['driver3'];
$_SESSION['personal_car'] = $_POST['personal_car'];
$_SESSION['careerdepartment'] = $_POST['careerdepartment'];
$_SESSION['career'] = $_POST['career'];
$_SESSION['yearexp'] = $_POST['yearexp'];
$_SESSION['intdepartment1'] = $_POST['intdepartment1'];
$_SESSION['intposition1'] = $_POST['intposition1'];
$_SESSION['intdepartment2'] = $_POST['intdepartment2'];
$_SESSION['intposition2'] = $_POST['intposition2'];
$_SESSION['intdepartment3'] = $_POST['intdepartment3'];
$_SESSION['intposition3'] = $_POST['intposition3'];
$_SESSION['intsalary1'] = $_POST['intsalary1'];
$_SESSION['intsalary2'] = $_POST['intsalary2'];
$_SESSION['intsalary3'] = $_POST['intsalary3'];
$_SESSION['hobby1'] = $_POST['hobby1'];
$_SESSION['hobby2'] = $_POST['hobby2'];
$_SESSION['hobby3'] = $_POST['hobby3'];
$_SESSION['hobby4'] = $_POST['hobby4'];
$_SESSION['hobby5'] = $_POST['hobby5'];
$_SESSION['xxoutbangkok'] = $_POST['outbkk'];
$_SESSION['xxoutthailand'] = $_POST['outth'];
$_SESSION['from1']= $_POST['from1'];
$_SESSION['to1'] = $_POST['to1'];
$_SESSION['institude1'] = $_POST['institude1'];
$_SESSION['gpa1'] = $_POST['gpa1'];
$_SESSION['degree1'] = $_POST['degree1'];
$_SESSION['faculty1'] = $_POST['faculty1'];
$_SESSION['major1'] = $_POST['major1'];
$_SESSION['minor1'] = $_POST['minor1'];
$_SESSION['from2'] = $_POST['from2'];
$_SESSION['to2'] = $_POST['to2'];
$_SESSION['institude2'] = $_POST['institude2'];
$_SESSION['gpa2'] = $_POST['gpa2'];
$_SESSION['degree2'] = $_POST['degree2'];
$_SESSION['faculty2'] = $_POST['faculty2'];
$_SESSION['major2'] = $_POST['major2'];
$_SESSION['minor2'] = $_POST['minor2'];
$_SESSION['from3'] = $_POST['from3'];
$_SESSION['to3'] = $_POST['to3'];
$_SESSION['institude3'] = $_POST['institude3'];
$_SESSION['gpa3'] = $_POST['gpa3'];
$_SESSION['degree3'] = $_POST['degree3'];
$_SESSION['faculty3'] = $_POST['faculty3'];
$_SESSION['major3'] = $_POST['major3'];
$_SESSION['minor3'] =$_POST['minor3'];
$_SESSION['from4'] = $_POST['from4'];
$_SESSION['to4'] = $_POST['to4'];
$_SESSION['institude4'] = $_POST['institude4'];
$_SESSION['gpa4'] = $_POST['gpa4'];
$_SESSION['degree4'] = $_POST['degree4'];
$_SESSION['faculty4'] = $_POST['faculty4'];
$_SESSION['major4'] = $_POST['major4'];
$_SESSION['minor4'] =  $_POST['minor4'];
$_SESSION['extracur1'] = $_POST['extracur1'];
$_SESSION['extracur2'] = $_POST['extracur2'];
$_SESSION['extracur3'] = $_POST['extracur3'];
$_SESSION['extracur4'] = $_POST['extracur4'];
$_SESSION['extracur5'] = $_POST['extracur5'];
$_SESSION['extracur6'] = $_POST['extracur6'];
$_SESSION['extracur7'] = $_POST['extracur7'];
$_SESSION['extracur8'] = $_POST['extracur8'];
$_SESSION['language1'] = $_POST['language1'];
$_SESSION['listen1'] = $_POST['listen1'];
$_SESSION['speak1'] = $_POST['speak1'];
$_SESSION['read1'] = $_POST['read1'];
$_SESSION['write1'] =  $_POST['write1'];
$_SESSION['language2'] = $_POST['language2'];
$_SESSION['listen2'] = $_POST['listen2'];
$_SESSION['speak2'] = $_POST['speak2'];
$_SESSION['read2'] = $_POST['read2'];
$_SESSION['write2'] = $_POST['write2'];
$_SESSION['language3'] = $_POST['language3'];
$_SESSION['listen3'] = $_POST['listen3'];
$_SESSION['speak3'] = $_POST['speak3'];
$_SESSION['read3'] =$_POST['read3'];
$_SESSION['write3'] = $_POST['write3'];
$_SESSION['typingen'] = $_POST['typingen'];
$_SESSION['typingth'] = $_POST['typingth'];
$_SESSION['otherskill1'] = $_POST['otherskill1'];
$_SESSION['otherskill2'] = $_POST['otherskill2'];
$_SESSION['otherskill3'] = $_POST['otherskill3'];
$_SESSION['otherskill4'] = $_POST['otherskill4'];
$_SESSION['otherskill5'] = $_POST['otherskill5'];
$_SESSION['otherskill6'] = $_POST['otherskill6'];
$_SESSION['otherskill7'] = $_POST['otherskill7'];
$_SESSION['otherskill8'] = $_POST['otherskill8'];
$_SESSION['tomonth1'] = $_POST['tomonth1'];
$_SESSION['toyear1'] = $_POST['toyear1'];
$_SESSION['jtomonth1'] = $_POST['jtomonth1'];
$_SESSION['jtoyear1'] = $_POST['jtoyear1'];
$_SESSION['company1'] = $_POST['company1'];
$_SESSION['position1'] = $_POST['position1'];
$_SESSION['showsalary1'] = $_POST['showsalary1'];
$_SESSION['salary1'] = $_POST['salary1'];
$_SESSION['com1onus1'] = $_POST['com1onus1'];
$_SESSION['com1onus2'] = $_POST['com1onus2'];
$_SESSION['com1onus3'] = $_POST['com1onus3'];
$_SESSION['com1onus4'] = $_POST['com1onus4'];
$_SESSION['com1onus5'] = $_POST['com1onus5'];
$_SESSION['com1onus6'] = $_POST['com1onus6'];
$_SESSION['com1onus7'] = $_POST['com1onus7'];
$_SESSION['com1onus8'] = $_POST['com1onus8'];
$_SESSION['tomonth2'] = $_POST['tomonth2'];
$_SESSION['toyear2'] = $_POST['toyear2'];
$_SESSION['jtomonth2'] = $_POST['jtomonth2'];
$_SESSION['jtoyear2'] = $_POST['jtoyear2'];
$_SESSION['company2'] = $_POST['company2'];
$_SESSION['position2'] = $_POST['position2'];
$_SESSION['showsalary2'] = $_POST['showsalary2'];
$_SESSION['salary2'] = $_POST['salary2'];
$_SESSION['com2onus1'] = $_POST['com2onus1'];
$_SESSION['com2onus2'] = $_POST['com2onus2'];
$_SESSION['com2onus3'] = $_POST['com2onus3'];
$_SESSION['com2onus4'] = $_POST['com2onus4'];
$_SESSION['com2onus5'] = $_POST['com2onus5'];
$_SESSION['com2onus6'] = $_POST['com2onus6'];
$_SESSION['com2onus7'] = $_POST['com2onus7'];
$_SESSION['com2onus8'] = $_POST['com2onus8'];
$_SESSION['tomonth3'] = $_POST['tomonth3'];
$_SESSION['toyear3'] = $_POST['toyear3'];
$_SESSION['jtomonth3'] = $_POST['jtomonth3'];
$_SESSION['jtoyear3'] = $_POST['jtoyear3'];
$_SESSION['company3'] = $_POST['company3'];
$_SESSION['position3'] = $_POST['position3'];
$_SESSION['showsalary3'] = $_POST['showsalary3'];
$_SESSION['salary3'] = $_POST['salary3'];
$_SESSION['com3onus1'] = $_POST['com3onus1'];
$_SESSION['com3onus2'] = $_POST['com3onus2'];
$_SESSION['com3onus3'] = $_POST['com3onus3'];
$_SESSION['com3onus4'] = $_POST['com3onus4'];
$_SESSION['com3onus5'] = $_POST['com3onus5'];
$_SESSION['com3onus6'] = $_POST['com3onus6'];
$_SESSION['com3onus7'] = $_POST['com3onus7'];
$_SESSION['com3onus8'] = $_POST['com3onus8'];
											    
if  ($check_image == "500")    {
     $_SESSION['return2alertclip'] = 1;
                                                }
else if  ($_POST['title'] == "0")   {
            $_SESSION['return2alertclip'] = 2;
                                                  }
else  if  ($_POST['firstname'] == "")   {
             $_SESSION['return2alertclip'] = 3;
                                                          }
else  if  ($_POST['lastname'] == "")  {
             $_SESSION['return2alertclip'] = 4;
	                                                    }  
else  if  ($_POST['gender'] == "0")   {
             $_SESSION['return2alertclip'] = 5;
                                                         }
else  if  ($_POST['birthdate'] == 0)   {
             $_SESSION['return2alertclip'] = 6;
                                                         }
else  if  ($_POST['birthmonth'] == 0)   {
             $_SESSION['return2alertclip'] = 7;
                                                            }
else  if  ($_POST['birthyear'] == 0)   {
             $_SESSION['return2alertclip'] = 8;
                                                         }
else  if  ($_POST['idcard'] == "")   {
             $_SESSION['return2alertclip'] = 9;
                                                      }   
else  if  (checknumber($_POST['idcard']) == "T")   {
             $_SESSION['return2alertclip'] =10;
                                                                               }													
else  if  ($_POST['nationality'] == "")   {
             $_SESSION['return2alertclip'] =11;
                                                           }
else  if  ($_POST['marital'] == "0")   {
             $_SESSION['return2alertclip'] =12;
                                                        }											 
else  if  ($_POST['address'] == "")   {
             $_SESSION['return2alertclip'] =13;
                                                      }
else  if  ($_POST['province'] == "0")   {
             $_SESSION['return2alertclip'] =14;
                                                           }
else  if  ($_POST['postcode'] == "")   {
             $_SESSION['return2alertclip'] =15;
                                                          }	
else  if  (checknumber($_POST['postcode']) == "T")   {
             $_SESSION['return2alertclip'] =16;
                                                          }												   										    													
else  if  ($_POST['email'] == "")   {
             $_SESSION['return2alertclip'] =17;
                                                    }
else  if  (strpos($_POST['email'],"@") == ""  or  CheckEnglishwordonly($_POST['email']) == "T")   {
             $_SESSION['return2alertclip'] =18;
                                                                       }
else if  ($_POST['home'] != ""  and  checknumber($_POST['home']) == "T")  {
            $_SESSION['return2alertclip'] = 19;
		                                                                                                                   }														 
else  if  ($_POST['mobile'] == "")   {
             $_SESSION['return2alertclip'] = 20;
                                                      }
else  if  (checknumber($_POST['mobile']) == "T")   {
             $_SESSION['return2alertclip'] = 21;
                                                      }
else if  ($_POST['office'] != ""  and  checknumber($_POST['office']) == "T")  {
            $_SESSION['return2alertclip'] = 22;
		                                                                                                                   }
else if  ($_POST['fax'] != ""  and  checknumber($_POST['fax']) == "T")  {
            $_SESSION['return2alertclip'] = 23;
		                                                                                                                   }																																			    										    
else  if  ($_POST['driver1'] == ""  and  $_POST['driver2'] == ""  and  $_POST['driver3'] == "")   {
             $_SESSION['return2alertclip'] = 24;
                                                                                                                                                                                                  }
else  if  ($_POST['personal_car'] == "")   {
             $_SESSION['return2alertclip'] = 25;
                                                                      }
else  if  ($_POST['careerdepartment'] == 0)   {
             $_SESSION['return2alertclip'] = 72;
                                                                              }
else  if  ($_POST['career'] =="")   {
             $_SESSION['return2alertclip'] = 26;
                                                         }
else  if  ($_POST['intdepartment1'] == 0)   {
             $_SESSION['return2alertclip'] = 73;
                                                                         }
else  if  ($_POST['intposition1'] == "")   {
             $_SESSION['return2alertclip'] = 27;
                                                                   }
else  if  ($_POST['intsalary1'] == "")   {
             $_SESSION['return2alertclip'] = 28;
                                                               }
else  if  (checknumber($_POST['intsalary1']) == "T")   {
             $_SESSION['return2alertclip'] = 29;
/*                                                                                     }
else  if  (checknumber($_POST['intsalary2']) == "T")   {
             $_SESSION['return2alertclip'] = 30;
                                                                                     }
else  if  (checknumber($_POST['intsalary3']) == "T")   {
             $_SESSION['return2alertclip'] = 31;
*/                                                                                     }																																		
else  if  ($_POST['hobby1'] == "")   {
             $_SESSION['return2alertclip'] = 32;
                                                       }
else  if  ($_POST['hobby2'] == "")   {
             $_SESSION['return2alertclip'] = 33;
	                                                  }
else  if  ($_POST['from1'] == "")   {
             $_SESSION['return2alertclip'] = 34;
                                                    }
else  if  (checknumber($_POST['from1']) == "T")   {
             $_SESSION['return2alertclip'] = 35;
                                                                              }											
else  if  ($_POST['to1'] == "")   {
             $_SESSION['return2alertclip'] = 36;
                                                }
else  if  (checknumber($_POST['to1']) == "T")   {
             $_SESSION['return2alertclip'] = 37;
                                                                           }
else  if  ($_POST['institude1'] == "")   {
             $_SESSION['return2alertclip'] = 38;
                                                           }																																													
else  if  ($_POST['gpa1'] == "")   {
             $_SESSION['return2alertclip'] = 39;
                                                   }
else  if  (checknumber($_POST['gpa1']) == "T")   {
             $_SESSION['return2alertclip'] = 40;
                                                                             }												
else  if  ($_POST['degree1'] == "0")   {
             $_SESSION['return2alertclip'] = 41;
                                                           }
else  if  ($_POST['faculty1'] == "")   {
             $_SESSION['return2alertclip'] = 42;
                                                        }
else  if  ($_POST['from2'] != "" and  checknumber($_POST['from2']) == "T" )   {
             $_SESSION['return2alertclip'] = 43;
                                                    }
else  if  ($_POST['to2'] != ""  and  checknumber($_POST['to2']) == "T")   {
             $_SESSION['return2alertclip'] = 44;
                                                }
else  if  ($_POST['gpa2'] != ""  and  checknumber($_POST['gpa2']) == "T")   {
             $_SESSION['return2alertclip'] = 45;
/*                                                    }	
else  if  ($_POST['from3'] != ""  and  checknumber($_POST['from3']) == "T")   {
             $_SESSION['return2alertclip'] = 46;
                                                     }
else  if  ($_POST['to3'] != ""  and  checknumber($_POST['to3']) == "T")   {
             $_SESSION['return2alertclip'] = 47;
                                                }
else  if  ($_POST['gpa3'] != ""  and  checknumber($_POST['gpa3']) == "T")   {
             $_SESSION['return2alertclip'] = 48;
                                                   }	
else  if  ($_POST['from4'] != ""  and  checknumber($_POST['from4']) == "T")   {
             $_SESSION['return2alertclip'] = 49;
                                                    }
else  if  ($_POST['to4'] != ""  and  checknumber($_POST['to4']) == "T")  {
             $_SESSION['return2alertclip'] = 50;
                                                }
else  if  ($_POST['gpa4'] != ""  and  checknumber($_POST['gpa4']) == "T")   {
             $_SESSION['return2alertclip'] = 51;
*/                                                    }	
else  if  ($_POST['language1'] == "0")   {
             $_SESSION['return2alertclip'] = 52;
                                                              }
else  if  ($_POST['listen1'] == "0")   {
             $_SESSION['return2alertclip'] = 53;
                                                        }
else  if  ($_POST['speak1'] == "0")   {
             $_SESSION['return2alertclip'] = 54;
                                                         }
else  if  ($_POST['read1'] == "0")   {
             $_SESSION['return2alertclip'] = 55;
                                                      }
else  if  ($_POST['write1'] == "0")   {
             $_SESSION['return2alertclip'] = 56;
                                                       }
else  if  ($_POST['language2'] == "0")   {
             $_SESSION['return2alertclip'] = 57;
                                                              }
else  if  ($_POST['listen2'] == "0")   {
             $_SESSION['return2alertclip'] = 58;
                                                       }
else  if  ($_POST['speak2'] == "0")   {
             $_SESSION['return2alertclip'] = 59;
                                                         }
else  if  ($_POST['read2'] == "0")   {
             $_SESSION['return2alertclip'] = 60;
                                                       }
else  if  ($_POST['write2'] == "0")   {
             $_SESSION['return2alertclip'] = 61;
                                                       }
else  if  ($_POST['typingen'] == "")   {
             $_SESSION['return2alertclip'] = 62;
                                                         }
else  if  (checknumber($_POST['typingen']) == "T")   {
             $_SESSION['return2alertclip'] = 63;
                                                                                   }											  
else  if  ($_POST['typingth'] == "")   {
             $_SESSION['return2alertclip'] = 64;
                                                        }
else  if  (checknumber($_POST['typingth']) == "T")   {
             $_SESSION['return2alertclip'] = 65;
                                                                                  }
else  if  ($_SESSION['checkblankitem'] == "T")   {
             $_SESSION['return2alertclip'] = 66;
                                                                           }
else  if  ($_POST['otherskill1'] == "")   {
             $_SESSION['return2alertclip'] = 67;
                                                           }
else  if  ($_POST['otherskill2'] == "")   {
             $_SESSION['return2alertclip'] = 68;
                                                           }
else if  ($_POST['salary1'] != ""  and  checknumber($_POST['salary1']) == "T")  {
            $_SESSION['return2alertclip'] = 69;
		                                                                                                     }
else if  ($_POST['salary2'] != ""  and  checknumber($_POST['salary2']) == "T")  {
            $_SESSION['return2alertclip'] = 70;
                                                                                                                                        }
else if  ($_POST['salary3'] != ""  and  checknumber($_POST['salary3']) == "T")  {
            $_SESSION['return2alertclip'] = 71;
                                                                                                                                        }
else  {   
$mtoday = getdate();
$eday = $mtoday[mday];
$emonth = $mtoday[mon]*100;
$eyear = ($mtoday[year] + 543)*10000;
$dateupdate = $eyear+$emonth+$eday;

$SQL = "update employee_resume_th set firstname = '$_SESSION[firstname]',lastname = '$_SESSION[lastname]',title = '$_SESSION[title]',gender = '$_SESSION[gender]',bbbday = '$_SESSION[birthofdate]',weight = '$_SESSION[weight]',height = '$_SESSION[height]',passpostid = '$_SESSION[passpostid]',nationality = '$_SESSION[nationality]',kkkmarital = '$_SESSION[marital]',kkkmilitary = '$_SESSION[military]',contactaddress = '$_SESSION[address]',district = '$_SESSION[district]',province = '$_SESSION[province]',postcode = '$_SESSION[postcode]',country = '$_SESSION[country]',emailaddress = '$_SESSION[email]',homenumber = '$_SESSION[home]',mobile = '$_SESSION[mobile]',office = '$_SESSION[office]',fax = '$_SESSION[fax]',motorcyclebill = '$_SESSION[driver1]',carbill = '$_SESSION[driver2]',truckbill = '$_SESSION[driver3]',personalvehicle = '$_SESSION[personal_car]',departmentid = '$_SESSION[careerdepartment]',careerobjective = '$_SESSION[career]',yearexp = '$_SESSION[yearexp]'";
$SQL = $SQL.",intdepartment1 = '$_SESSION[intdepartment1]',interestingposition1 = '$_SESSION[intposition1]',intdepartment2 = '$_SESSION[intdepartment2]',interestingposition2 = '$_SESSION[intposition2]',intdepartment3 = '$_SESSION[intdepartment3]',interestingposition3 = '$_SESSION[intposition3]',intsalary1 = '$_SESSION[intsalary1]',intsalary2 = '$_SESSION[intsalary2]',intsalary3 = '$_SESSION[intsalary3]',hobby1 = '$_SESSION[hobby1]',hobby2 = '$_SESSION[hobby2]',hobby3 = '$_SESSION[hobby3]',hobby4 = '$_SESSION[hobby4]',hobby5 = '$_SESSION[hobby5]',outsidebkk = '$_SESSION[xxoutbangkok]',outth = '$_SESSION[xxoutthailand]',edt1_from = '$_SESSION[from1]',edt1_to = '$_SESSION[to1]',edt1_intitudename = '$_SESSION[institude1]',edt1_gpa = '$_SESSION[gpa1]',edt1_degree = '$_SESSION[degree1]',edt1_faculty = '$_SESSION[faculty1]',edt1_major = '$_SESSION[major1]',edt1_minor = '$_SESSION[minor1]',edt2_from = '$_SESSION[from2]',to2 = '$_SESSION[to2]',edt2_intitudename = '$_SESSION[institude2]',edt2_gpa = '$_SESSION[gpa2]'";
$SQL = $SQL.",edt2_degree = '$_SESSION[degree2]',fffaculty2 = '$_SESSION[faculty2]',mmmajor2 = '$_SESSION[major2]',mmminor2 = '$_SESSION[minor2]'";
$SQL = $SQL.",edt3_from = '$_SESSION[from3]',edt3_to = '$_SESSION[to3]',edt3_intitudename = '$_SESSION[institude3]',edt3_gpa = '$_SESSION[gpa3]',edt3_degree = '$_SESSION[degree3]',edt3_faculty = '$_SESSION[faculty3]',edt3_major = '$_SESSION[major3]',edt3_minor = '$_SESSION[minor3]',edt4_from = '$_SESSION[from4]',edt4_to = '$_SESSION[to4]',edt4_intitudename = '$_SESSION[institude4]',edt4_gpa = '$_SESSION[gpa4]',edt4_degree = '$_SESSION[degree4]',edt4_faculty = '$_SESSION[faculty4]',edt4_major = '$_SESSION[major4]',edt4_minor = '$_SESSION[minor4]',extracur1 = '$_SESSION[extracur1]',extracur2 = '$_SESSION[extracur2]',extracur3 = '$_SESSION[extracur3]',extracur4 = '$_SESSION[extracur4]',extracur5 = '$_SESSION[extracur5]',language1 = '$_SESSION[language1]',listen1 = '$_SESSION[listen1]',speak1 = '$_SESSION[speak1]',read1 = '$_SESSION[read1]',write1 = '$_SESSION[write1]',language2 = '$_SESSION[language2]',listen2 = '$_SESSION[listen2]',speak2 = '$_SESSION[speak2]'";
$SQL = $SQL.",read2 = '$_SESSION[read2]',write2 = '$_SESSION[write2]',language3 = '$_SESSION[language3]',listen3 = '$_SESSION[listen3]',speak3 = '$_SESSION[speak3]',read3 = '$_SESSION[read3]',write3 = '$_SESSION[write3]',englishpermin = '$_SESSION[typingen]',thaipermin = '$_SESSION[typingth]',otherskill1 = '$_SESSION[otherskill1]',otherskill2 = '$_SESSION[otherskill2]',otherskill3 = '$_SESSION[otherskill3]',otherskill4 = '$_SESSION[otherskill4]',otherskill5 = '$_SESSION[otherskill5]',otherskill6 = '$_SESSION[otherskill6]',otherskill7 = '$_SESSION[otherskill7]',otherskill8 = '$_SESSION[otherskill8]',startmonth1 = '$_SESSION[tomonth1]',startyear1 = '$_SESSION[toyear1]',endmonth1 = '$_SESSION[jtomonth1]',endyear1 = '$_SESSION[jtoyear1]',company1 = '$_SESSION[company1]',position1 = '$_SESSION[position1]',salary1 = '$_SESSION[salary1]',showsalary1 = '$_SESSION[showsalary1]',com1onus1 = '$_SESSION[com1onus1]',com1onus2 = '$_SESSION[com1onus2]'";
$SQL = $SQL.",com1onus3 = '$_SESSION[com1onus3]',com1onus4 = '$_SESSION[com1onus4]',com1onus5 = '$_SESSION[com1onus5]',com1onus6 = '$_SESSION[com1onus6]',com1onus7 = '$_SESSION[com1onus7]',com1onus8 = '$_SESSION[com1onus8]',startmonth2 = '$_SESSION[tomonth2]',startyear2 = '$_SESSION[toyear2]',endmonth2 = '$_SESSION[jtomonth2]',endyear2 = '$_SESSION[jtoyear2]',cccompany2 = '$_SESSION[company2]',ppposition2 = '$_SESSION[position2]',xalary222 = '$_SESSION[salary2]',ssshowsalary2 = '$_SESSION[showsalary2]',com2onus1 = '$_SESSION[com2onus1]',com2onus2 = '$_SESSION[com2onus2]',com2onus3 = '$_SESSION[com2onus3]',com2onus4 = '$_SESSION[com2onus4]',com2onus5 = '$_SESSION[com2onus5]',com2onus6 = '$_SESSION[com2onus6]',com2onus7 = '$_SESSION[com2onus7]',com2onus8 = '$_SESSION[com2onus8]',startmonth3 = '$_SESSION[tomonth3]',startyear3 = '$_SESSION[toyear3]',endmonth3 = '$_SESSION[jtomonth3]',endyear3 = '$_SESSION[jtoyear3]',company3 = '$_SESSION[company3]',position3 = '$_SESSION[position3]'";
$SQL = $SQL.",xalary333 = '$_SESSION[salary3]',showsalary3 = '$_SESSION[showsalary3]',com3onus1 = '$_SESSION[com3onus1]',com3onus2 = '$_SESSION[com3onus2]',com3onus3 = '$_SESSION[com3onus3]',com3onus4 = '$_SESSION[com3onus4]',com3onus5 = '$_SESSION[com3onus5]',com3onus6 = '$_SESSION[com3onus6]',com3onus7 = '$_SESSION[com3onus7]',com3onus8 = '$_SESSION[com3onus8]',resumeupdate = '$dateupdate'";
$SQL = $SQL."where idresume = '$_SESSION[resumeindex]'"; 

//computerskill = '$_SESSION[dcomputerskill]',

mysql_connect($host,$user,$password);mysql_select_db($databasename);
mysql_query("SET NAMES TIS620");
$result= mysql_query($SQL);
$_SESSION['codereturn2'] = "T";
//echo "<meta http-equiv=refresh content=0.1;url=employee_post_resume_en_new.php>";     
echo "<script>window.location = 'employee_post_resume_en_new.php'</script>";
        }  
if($_SESSION['return2alertclip']>=1&&$_SESSION['return2alertclip']<=100){
	//echo "<meta http-equiv=refresh content=0.1;url=employee_post_resume_th.php>";
	echo "<script>window.history.back(-1)</script>";
}

//echo "<meta http-equiv=refresh content=0.1;url=employee_post_resume_th.php>";
?>