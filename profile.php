
<html>
<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
		require_once "header1.php";

							
  
?>
<div class="about">
		<div class="container">
		<div class="row">
			 <ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Profile</li>
				 </ol>
				    <div class="panel panel-default">
						   <div class="panel-body">
							  <div class="col-md-3 col-sm-5 col-lg-40">
								
								
								<?php
									$sql = $conn->query("SELECT * FROM i_new_user_details WHERE u_name='$us_name'
																")
																	or die(mysqli_error($conn)) ;
																	while($fimpo = $sql->fetch_array()){		
										
								
								 
								
								
								?>
					 </div>
							  <div class="col-md-10 col-sm-20 col-lg-40" >
								  <div class="container" >
								<h1><?php echo $fimpo['u_name']; ?></h1>
									
								  
							   
							  </div>
							   <hr>
							  <ul class="container details" >
								<li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><b><?php echo $fimpo['u_name']; ?></p></li>
								<li><p><span class="glyphicon glyphicon-phone one" style="width:50px;"></span><?php echo $fimpo['mobile_num']; ?></p></li>										
							
							  </ul>
							  <hr>
							  
						  </div>
						  <?php
																	}
						  ?>
						  
						  
								  </div>
					  
						  
					  </div>
					     
					</div>
            
 
    <script>
              $(function() {
					$('#profile-image1').on('click', function() {
						$('#profile-image-upload').click();
					});
				});       
	 </script> 
          
          </div>
    </div>
</div>
</body>

<?php
 require_once "men_footer.php";
	}
?>

</html>