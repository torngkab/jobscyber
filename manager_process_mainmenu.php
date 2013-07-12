<?
$gbmenu = $_POST['gbmenu'];
switch  ($gbmenu )   {
case  1 : echo "<meta http-equiv=refresh content='0.1;url=manager_create_login_customer.php'>";  break;
case  2 : echo "<meta http-equiv=refresh content='0.1;url=manager_call_bill.php'>";  break;
case  3 : echo "<meta http-equiv=refresh content='0.1;url=manager_edit_login.php'>";  break;
case  6 : echo "<meta http-equiv=refresh content='0.1;url=manager_statweb.php'>";  break;
case  7 : echo "<meta http-equiv=refresh content='0.1;url=manager_see_resume.php'>";  break;
case  8 : echo "<meta http-equiv=refresh content='0.1;url=manager_views.php'>";  break;
case  9 : echo "<meta http-equiv=refresh content='0.1;url=manager_proc_add.php'>";  break;
                                     }
?>