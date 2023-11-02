<?php 
if(!empty($_POST['image'])){
	if(file_put_contents(time().'.jpg', base64_decode($_POST['image']))){
		echo "success";
	} else {
		echo "Failed to upload image";
	}
} else {
	echo "No image found";
}
?>
