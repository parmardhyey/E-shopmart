
<?php
	include 'sup_connect.php';
	$admin_name = $_POST['sup_name'];
	$password = $_POST['password'];

	
	//USER LOGIN VALIDATION, 09-04-2018, Prabhat Chandra	
	$sql=mysqli_query($conn,"SELECT sup_name, password FROM sup_ver WHERE sup_name='$sup_name' && password='$password'");  
   
   
  
	$retval = mysqli_num_rows($sql);
   
   
   if(!$retval){
	   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; sup_login.php">' ;
		
   } else {
	   
	   session_start();
		$_SESSION['sup_name'] = $sup_name;
		
		
									
	    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; sup.php">' ;
			
   }   
?>