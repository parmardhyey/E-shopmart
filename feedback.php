<?php
session_start();
	if(isset($_SESSION['u_name'])){	
	$us_name= $_SESSION['u_name'] ;		
	require_once "connect.php";
		require_once "header1.php";

							
  
?>
<?php
   	require_once "connect.php";
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $rating   = stripslashes($_REQUEST['rating']);
        $rating    = mysqli_real_escape_string($conn, $rating);
        $review = stripslashes($_REQUEST['review']);
        $review = mysqli_real_escape_string($conn, $review);
        $query    = "INSERT into `feedback` (username,rating,review)
                     VALUES ('$username','$rating','$review')";
        $result   = mysqli_query($conn, $query);
        if (!$result) {
            die(mysqli_error($conn));
         } else {
            echo "<script>window.alert('Feedback submited!'); 
                  window.location='index.php';
                  </script>";
                }
    } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <title> Feedback</title>
    <script src="https://kit.fontawesome.com/be7796383d.js" crossorigin="anonymous"></script>
 
</head>
<body>

  
      
        <hr>
        <div class="main"><br>
            <div class="Feedback">
                <h2>Feedback</h2>
            </div>
        
             <div class="form">
            <form method="Post">
            <div style="">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Username" maxlength="20" size="20" required value=><br><br>
            </div>
            
           

              <div >
              <label for="Rating">Rating:</label><br>
              <input type="range" min="0" max="10" step="0" value="0" name="rating" required ><p class="value">0</p><br><br>
              </div> 


              <div  class="Review">
            <label for="Review">Review:</label><br>
            <input type="text" id="Review" name="review" placeholder="Review" maxlength="100" size="100" required><br><br>
            </div>
            
            <input type="submit" value="Submit" id="select">
            </form>
            </div>
            
        </div>
       <script>
           var elem = document.querySelector('input[type="range"]');
            var rangeValue = function(){
             var newValue = elem.value;
            var target = document.querySelector('.value');
            target.innerHTML = newValue;
            }
            elem.addEventListener("input", rangeValue);
       </script>
     
</body>
</html>



<?php
 require_once "men_footer.php";
	}
?>
