<script>
function Check(){
	<?if($_SESSION['bufferlogin']!=""){?>
		document.getElementById('showuser').innerHTML = '<?echo $_SESSION['bufferlogin'] . " " ."กำลังใช้งานอยู่ ";?><a href="logout.php">ออกจากระบบ</a>';
	<?}else{?>
		document.getElementById('showuser').innerHTML = "ยังไม่ได้เข้าสู่ระบบ";
	<?}?>
};
</script>