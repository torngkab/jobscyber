<script>
function Check(){
	<?if($_SESSION['bufferlogin']!=""){?>
		document.getElementById('showuser').innerHTML = '<?echo $_SESSION['bufferlogin'] . " " ."���ѧ��ҹ���� ";?><a href="logout.php">�͡�ҡ�к�</a>';
	<?}else{?>
		document.getElementById('showuser').innerHTML = "�ѧ������������к�";
	<?}?>
};
</script>