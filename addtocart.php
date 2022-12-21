<?php 
require ("functions.php");

check_login();
?>

<?php

if (isset($_POST['addtocart'])) {

   
  $query = "select * from `posts`";
  $results = mysqli_query($conn,$query);

  if ($results) {
   $productname = addslashes($_POST['productname']);
   $currency= addslashes($_POST['currency']);
   $price = addslashes($_POST['price']);
   $product_id = $_SESSION['info']['user_id']; 


   $query = "insert into orders where (product_id,productname ,currency,price) values( '$productname','$product_id','$currency','$price')";
  $result = mysqli_query($conn,$query);

   header("Location:features.php");
  }
}

?>



<?php require("footer.php"); ?>