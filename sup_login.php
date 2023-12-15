<?php
include "sup_connect.php";


session_start();
	if(isset($_SESSION['sup_name'])){	
	
	echo '
			<script type = "text/javascript">
				alert("ALREADY LOGED-IN");
				window.location = "sup.php";
			</script>
		';
} else {
	require_once "header.php";
?>
<!--header//-->
<div class="login">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="sup.php">Home</a></li>
		  <li class="active">please provide details</li>
		 </ol>
		 <h2>sup Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the following details to continue.</p>
				 <form action="sup_validation.php" method="POST">
					 <h5>User Name:</h5>	
					 <input type="text" value="" name="admin_name" required="">
					 <h5>Password:</h5>
					 <input type="password" value="" name="password" required=""  >					
					 <input type="submit" value="Login">
					  
				 </form>				 
		 </div>
		 
		 <div class="clearfix"></div>		 
		 
	 </div>
</div>
<!--fotter-->
<?php
require_once "footer.php";

?>
<!--fotter//-->	
</body>
</html>

<?php

 }
?>
		