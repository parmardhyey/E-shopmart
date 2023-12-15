<html>
<?php
	session_start();
		if(isset($_SESSION['sup_name'])){	
		$admin_name= $_SESSION['sup_name'] ;	
		require_once "sup_connect.php";
		require_once "header.php";
		require_once "admin_head.php";
?>

		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                    					  
					  <h1>Welcome Merchant !!!</h1>
					
					</div>
					  
                </div>
            </div>
		</div>
	</div>

</div>
</div>

<?php

require_once "footer.php";
		} else {
				
				echo'
			<script type = "text/javascript">
				alert("Sign In First!!!");
				window.location = "sup_login.php";
			</script>
		';
		}
?>
</body>
</html>