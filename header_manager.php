<div id="top">
<?
		echo "<div id=top>";
		echo "<div id=name><a hef=#>Jobscyber</a></div>";
		echo "<div id=split></div>";
		echo "<div style=border-top:6px solid #7abb37; background-color:blue>";
		echo "<div id=slogan>Tel : 02-759-4851-2 , Mobile : 081-376-6528 , email : support@jobscyber.com , Support Hour : M - F 8:30 - 17:30</div></div>";
		echo "<span id='showuser'>ยังไม่ได้เข้าสู่ระบบ</span>";
?>
		<div id="contact_us"><a href="#">Thai</a> &nbsp; <a href="#">Eng</a></div>
        </div>
      </div>	
      <div id="logo">
      <div id="logo_text">
      Lorem ipsum dolor sit amet, consectetuer 
      adipiscing elit. Pellentesque lobortis nibh 
      eu mauris. Morbi arcu tortor, auctor et, 
      facilisis nec, egestas sit amet, enim.
	</div>
   
    <div id="menu">
        <a href="#">Home</a>|
        <a href="#">About Us</a>|
        <a href="#">Services</a>|
        <a href="#">Pricing</a>|
        <a href="#">Contacts</a>

    </div> 
	<script>
function Check(){
	document.getElementById('showuser').innerHTML = 'ผู้จัดการ  <?echo $_SESSION[rrrusername];?> | <a href="manager.php">ออกจากระบบ</a>';
}
</script>