<?php
require("functions.php");

check_login();
?>
<?php
require ("dasheader.php")
?>
<?php
           $id= $_GET['updateid'];
          $query= "select* from `posts` where id=$id";
          
   $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);
   $post =$row ['post'];
   $image =$row ['image'];
   $productname = $row['productname'];
   $location = $row['location'];
   $instagram = $row['instagram'];
   $whatsapp = $row['whatsapp'];
   $currency = $row['currency'];
   $price = $row['price'];

if (isset($_POST['updateid'])) {
   $post = addslashes($_POST['post']);
   $productname = addslashes($_POST['productname']);
   $location = addslashes($_POST['location']);
   $instagram = addslashes($_POST['instagram']);
   $whatsapp = addslashes($_POST['whatsapp']);
   $currency = addslashes($_POST['currency']);
   $price = addslashes($_POST['price']);

   $sql ="update `posts` set id='$id' , post='$post',productname='$productname',location='$location',instagram='$instagram',whatsapp='$whatsapp',currency='$currency',price='$price' limit 1";
  $result = mysqli_query($conn,$sql);
   if ($result) {
   $query ="insert into `posts` where id='$id' , post='$post',productname='$productname',location='$location',instagram='$instagram',whatsapp='$whatsapp',currency='$currency',price='$price'";

   }else{
      die(mysqli_error($conn));
   }
}
?>
<div class="login-box" style="">
   <a href="#" class="logo"> <span style="color:#f00;">BE</span>FIT </a>
        <h1 style=""><span style="color:#f00;"> </span><span style="color:white;"> Post</span><span style="color:#f00;">Product</span> </h1>
        <form  method="Post" enctype="multipart/form-data">
          choose image: <input type="file" name="image"><br>
          <p>Product Name</p>
          <input type="text"value="<?= $productname ?>" name="productname" placeholder="Enter product Name">
          <p>Product Decription</p>
              <textarea name="post"value="<?= $post?>" id="" rows="10" placeholder="What's In Mind!" style=" color:black;background:whitesmoke; margin: 4px;padding: 8px;width: 300px;border: none;outline: none;resize: none;height: 50px;overflow: hidden;border-radius: 16px; font-size: 15px;">  
              </textarea>
              <p>Location</p>
              <input type="text"value="<?= $location?>" name="location" placeholder="Enter Location">
              <p>Instagram Link</p>
              <input type="text"value="<?= $instagram?>" name="instagram" placeholder="Enter instagram link">
              <p><i class="fa fa-whatsapp" aria-hidden="true">Whatsapp</i></p>
              <input type="text"value="<?= $whatsapp?>" name="whatsapp" placeholder="Enter Whatapp phone Or Link">
            <p>currency</p>
            <input type="text"value="<?= $currency?>" name="currency"  placeholder="Enter  currency">
            <p>Price</p>
            <input type="text"value="<?= $price?>" name="price" placeholder="Enter Product Price">
            <button type="submit" style="display: flex; position: relative; left: ; top:x;" name="updateid">Publish</button>
            </form>
        </div>



<?php
require ("dashboard/footer.php")
?>