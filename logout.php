<?php

session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['first_name']);
?>
<div class="container text-center" style="width: 40%;"> 
	<div class="alert alert-info card" role="alert">
		 You are Logout Please wait... your page is being redirected.
	</div>
</div>
<?php
	header('refresh:2 url=index.php');

?>