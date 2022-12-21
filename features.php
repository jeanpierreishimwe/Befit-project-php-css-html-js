<?php 
require_once ("functions.php");

check_login();
?>
<?php 
require_once ("header.php");
?>
<section class="trainers" id="trainers">
    
    <h1 class="heading"> <span>Products</span> </h1>
<div class="box-container" style=" display: -sm-grid;
  display: grid;
  -ms-grid-columns: (minmax(29rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(29rem, 1fr));
  gap: 0px; ">
<?php
/*$id =  $_SESSION['info']['id']; where user_id = '$id'*/
$query = "select * from posts order by rand() ";
$result= mysqli_query($conn,$query);

if ($result) {
   while($row = mysqli_fetch_assoc($result))
{
    $id = $row ['id'];
   $post =$row ['post'];
   $image =$row ['image'];
   $productname = $row['productname'];
   $location = $row['location'];
   $instagram = $row['instagram'];
   $whatsapp = $row['whatsapp'];
   $currency = $row['currency'];
   $price = $row['price'];
  


   
    
	
        $user_id = $row['user_id'];
       $query = "select username,image from users where id = '$user_id' limit 1";
      $result2= mysqli_query($conn,$query);
      $user_row = mysqli_fetch_assoc ($result2);
       
   
	
	
        echo'
        
   
        <div class="box" style="border-radius:4px; width:77.4%;margin-bottom:20px;  ">
            <img src="'.$image.'" alt="">
            <div class="content" style="top:30%; zoom:90%;">
                <a href="cart.php?id='.$id.'"class="btn" style="" name="id">Add To Cart</a>
                <span style="">'.$productname.'</span> 
                <h3 style="font-size:16px;">'.$post.'</h3>
                <div class="share">
                <a href="#" class="fab fa-instagram" style="color:#d11958;"></a>
                <a href="#" class="fab fa-whatsapp"style="color:#2bb962;"></a>
              <a href="profile.php"><img src='.$user_row['image'].' alt="" style=" height:50px; width:50px; border-radius:50%; float:right; "></a>

                </div>
            </div>
        </div>
';
}}?>  

    </div> <br> <br>
	
</section>


<!-- trainers section ends -->




<?php

require("footer.php")
?>