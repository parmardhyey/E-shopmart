<?php
require_once "admin_connect.php";

if(isset($_POST["submit"])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];
	$model = $_POST['model'];
	$brand = $_POST['brand'];
	$des = $_POST['des'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

		$insert = $conn->query("REPLACE into i_new_product VALUES ($id,'$imgContent','$name',$price,$qty,'$model','$brand','$des')");
       



	   if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

header('Location: admin_up_all.php');
?>