<?//unset($_SESSION['bufferlogin'])?>
<?session_start();?>
<?$_SESSION['bufferlogin']=""?>
<script>
	alert("Logout OK");
	window.location = 'firstpage.php';
</script>
