<?php 

# database
define("dsn","mysql:host=localhost;dbname=android");
define("user","root");
define("passwd","");

$pdo    = new PDO(dsn, user, passwd);

$user_id = $_POST['user_id'];
$image = $_POST['image'];
$file_name = 'img/'.time().'.jpg';

if(!empty($image)){
	if(file_put_contents($file_name, base64_decode($image))){
		echo "success";
		$query = "UPDATE user SET photo=? WHERE user_id=?";
		$s1   = $pdo->prepare($query);
      	$s1->execute([$file_name,$user_id]);
	} else {
		echo "Failed to upload image";
	}
} else {
	echo "No image found";
}
?>