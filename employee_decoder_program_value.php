<?session_start();?>
<?
$_SESSION['dcomputerskill'] = "";
$dummyload = 0;
$k=":";
for ($i=0;$i<=166;$i++)   {  //   start  for
      $j="h".$i;
       if  ($_POST[$j] == "T")   {    //  start  if  1
            $dummyload = $dummyload + 1;
                                                }  //  end   if   1
	 if  ($i==167)  {  //  start  if  2
	      $k="";
                           }  //  end  if  2
      $_SESSION['dcomputerskill'] = $_SESSION['dcomputerskill'].$_POST[$j].$k;
      $_SESSION[$j] = $_POST[$j];
      if  ($dummyload != 0)   {  //  start  if 3 
            $_SESSION['checkblankitem'] = "F";
                                              }
      else  {   $_SESSION['checkblankitem'] = "T";   }
                                        }  //  end  for
?>							  
<meta http-equiv=refresh content=0.1;url=employee_choice_program.php>