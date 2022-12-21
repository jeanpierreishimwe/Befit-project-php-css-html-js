<?php 
require_once ("functions.php");

check_login();
?>
<?php 
require_once ("header.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['post']) && !empty($_POST['location'])&& !empty($_POST['productname'])&& !empty($_POST['instagram'])&& !empty($_POST['whatsapp'])&& !empty($_POST['currency'])&& !empty($_POST['price'])) {
  //adding post 
  $image ="";
if(!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0 )
{
  //file was uploaded
  $folder = "upload/";
  if(!file_exists($folder)) 
  {
   mkdir($folder,0777,true);
  }
  $image = $folder . $_FILES['image']['name']; 
  move_uploaded_file($_FILES['image']['tmp_name'],$image);
}
$post = addslashes($_POST['post']);
$productname = addslashes($_POST['productname']);
$location = addslashes($_POST['location']);
$instagram = addslashes($_POST['instagram']);
$whatsapp = addslashes($_POST['whatsapp']);
$currency = addslashes($_POST['currency']);
$price = addslashes($_POST['price']);
$user_id = $_SESSION['info']['id'];
$date = date('Y:m:d H:i:s');

$query = "insert into posts (	user_id,currency,price,location,post,image,date,productname,instagram,whatsapp) values(	'$user_id','$currency','$price','$location','$post','$image','$date','$productname','$instagram','$whatsapp')";
$result = mysqli_query($conn,$query);

header("Location:profile.php");
die;
}
?>





<?php

require("footer.php")
?>