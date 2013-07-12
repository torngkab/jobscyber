<? session_start(); ?>
<?  include ("Allfunction.inc");  ?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" >

<?
session_start(); 
$_SESSION[companyname]= $_POST['companyname'];
$_SESSION[address] = $_POST['address'];
$_SESSION[moo] =  $_POST['moo'];
$_SESSION[soi] = $_POST['soi'];
$_SESSION[street] = $_POST['street'];
$_SESSION[tambon] = $_POST['tambon']; 
$_SESSION[umphur] = $_POST['umphur']; 
$_SESSION[province] = $_POST['province']; 
$_SESSION[postcode] = $_POST['postcode']; 
$_SESSION[telephone] = $_POST['tel']; 
$_SESSION[fax] = $_POST['fax']; 
$_SESSION[email] = $_POST['email']; 
$_SESSION[website] = $_POST['website']; 
$_SESSION[description] = $_POST['description'];
$_SESSION[contactname] = $_POST['contactname'];
$_SESSION[howtoapply] = $_POST['howtoapply'];
$_SESSION[companyname_EN] =  $_POST['companyname_EN'];
$_SESSION[address_EN] = $_POST['address_EN'];
$_SESSION[moo_EN] = $_POST['moo_EN'];
$_SESSION[soi_EN] = $_POST['soi_EN'];
$_SESSION[street_EN] = $_POST['street_EN'];
$_SESSION[tambon_EN] = $_POST['tambon_EN'];
$_SESSION[umphur_EN] = $_POST['umphur_EN'];
$_SESSION[province_EN] = $_POST['province_EN'];
$_SESSION[profile_EN] = $_POST['profile_EN'];
$_SESSION[contactname_EN] = $_POST['contactname_EN'];
// $_SESSION[signuptime] = $_SESSION['signuptime']; 
$Xdate = date("Y")+543;
$Xtime = $Xdate.date("m").date("d");
$thistime = intval($Xtime);

if  ($_POST['submit'] == "บันทึก")         {
    $_SESSION['checkbuttonsave'] = "true";    
                                                                 }


if  ($_POST[companyname]== "")   {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 1;
                                          }
elseif  ($_POST[address]== "")   {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 2;    
                                      }
elseif  ($_POST[soi] =="")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 3;    
                               }
elseif  ($_POST[street] == "")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 4;    
                                    }
elseif  ($_POST[tambon] == "")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 5;    
                                       }
elseif  ($_POST[umphur] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 6;    
                                         }
elseif  ($_POST[province] == "0")   {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 7;    
                                          }
elseif  ($_POST[postcode] == "")   {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 8;    
                                         }
elseif  ($_POST[tel] == "")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 9;    
                               }
elseif  ($_POST[email] == "")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 10;    
                               }						 
elseif  ($_POST[description]== "")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 11;    
                                            }
elseif  ($_POST[contactname] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 12;    
                                          }
elseif  ($_POST['howtoapply'] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 22;    
                                          }
elseif  ($_POST[companyname_EN] == "")    {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 13;    
	                                                    }
elseif  ($_POST[address_EN]  == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 14;    
	                                            }
elseif  ($_POST[soi_EN] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 15;    
                                        }
elseif  ($_POST[street_EN] == "")       {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 16;    
	                                          }
elseif  ($_POST[tambon_EN] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 17;    
	                                           }
elseif  ($_POST[umphur_EN] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 18;    
                                               }
elseif  ($_POST['profile_EN'] == "")     {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 20;    
                                                    }
elseif  ($_POST[contactname_EN] == "")  {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuilddata.php> ";
    $_SESSION['returntoalert'] = 21;    
                                                          }
elseif  ($_POST['xsubmit'] == "ดำเนินงานต่อไป")  {
    echo "<meta http-equiv=refresh content=0.1;url=customerbuildjob.php> ";
                                                                                 }

else    {  // start else
      if    ($_SESSION['checkbuttonsave'] == "true")    {     //   start  if
             $SQL1 = "update customer  set companyname = '$_SESSION[companyname]',address = '$_SESSION[address]',moo = '$_SESSION[moo]',soi = '$_SESSION[soi]',street = '$_SESSION[street]',tambon = '$_SESSION[tambon]',umphur = '$_SESSION[umphur]',province = '$_SESSION[province]',postcode = '$_SESSION[postcode]',tel = '$_SESSION[telephone]',fax = '$_SESSION[fax]',email = '$_SESSION[email]',website = '$_SESSION[website]',description = '$_SESSION[description]',contactname = '$_SESSION[contactname]',howtoapply55 = '$_SESSION[howtoapply]',companyname_en = '$_SESSION[companyname_EN]',address_en = '$_SESSION[address_EN]',moo_en = '$_SESSION[moo_EN]',soi_en = '$_SESSION[soi_EN]',street_en = '$_SESSION[street_EN]',tambon_en = '$_SESSION[tambon_EN]',umphur_en = '$_SESSION[umphur_EN]',profile_en = '$_SESSION[profile_EN]',contactname_en = '$_SESSION[contactname_EN]',companyname_en = '$_SESSION[companyname_EN]'  where idcompany = '$_SESSION[idcompanyvalue]'";
             $SQL2 = "update customerbuffer  set companyname = '$_SESSION[companyname]',address = '$_SESSION[address]',moo = '$_SESSION[moo]',soi = '$_SESSION[soi]',street = '$_SESSION[street]',tambon = '$_SESSION[tambon]',umphur = '$_SESSION[umphur]',province = '$_SESSION[province]',postcode = '$_SESSION[postcode]',tel = '$_SESSION[telephone]',fax = '$_SESSION[fax]',email = '$_SESSION[email]',website = '$_SESSION[website]',description = '$_SESSION[description]',contactname = '$_SESSION[contactname]',howtoapply55 = '$_SESSION[howtoapply]',companyname_en = '$_SESSION[companyname_EN]',address_en = '$_SESSION[address_EN]',moo_en = '$_SESSION[moo_EN]',soi_en = '$_SESSION[soi_EN]',street_en = '$_SESSION[street_EN]',tambon_en = '$_SESSION[tambon_EN]',umphur_en = '$_SESSION[umphur_EN]',profile_en = '$_SESSION[profile_EN]',contactname_en = '$_SESSION[contactname_EN]',companyname_en = '$_SESSION[companyname_EN]'  where idcompany = '$_SESSION[idcompanyvalue]'"; 
             mysql_connect($host,$user,$password);
             mysql_query("SET NAMES TIS620");
             $result1= mysql_db_query($databasename,$SQL1);
             $result2= mysql_db_query($databasename,$SQL2);
             $_SESSION['checkbuttonsave'] = "false";
                                                                                             }  //  end  if
                                                         
                                       }  
?>
<meta http-equiv=refresh content="0.1;url=customerbuilddata.php">



