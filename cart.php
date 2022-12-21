<?php 
require_once ("functions.php");

check_login();
?>
<?php 
require_once ("header.php");
?>


<!-- start card of products-->
<?php
      $customer= $_SESSION['info']['id'];
    $query = "select * from `orders` where  customerid='$customer'";
    $result=mysqli_query($conn,$query);
 if ($result) {
   while ($data = mysqli_fetch_assoc($result)) {
     $id = $data['id'];
     $image = $data['image'];
     $productname = $data['productname'];
     $currency = $data['currency'];
     $price = $data['price'];
     echo '
     <div class="card " style="width:18rem ;background:#0e151a; color:white; display:inline-block;margin-top:16px; margin:9px; ">
     <img class="card-img-top" src="'.$image.'" alt="Image Is Not Available Now!!">
     <div class="card-body">
       <h5 class="card-title">'.$productname.'</h5>
     </div>
     <ul class="list-group list-group-flush" >
       <li class="list-group-item"style="background:#0e151a;">'.$currency.'</li>
       <li class="list-group-item" style="background:#0e151a;">'.$price.'</li>
     </ul>
     <div class="card-body" style="display:flex;  ">
       <a href="userpayment.php?userpayid='.$id.'" class="card-link"> <button style=" cursor:pointer; width:60px;color:white; background:#f00; border-radius:5px;">Proceed Payments</button> </a>
       <a href="userremove.php?userproductremoveid='.$id.'" class="card-link"><button style="cursor:pointer;width:40px;color:white; background:#f00;border-radius:5px;"">Remove</button></a>
     </div>
     </div> 
             
 ';
}
}

?>
<!--end card here-->

<!---table start here-->
<table class=" headeer table table-dark" style="zoom:200%; margin-top: 30px;">
   <thead>
     <tr>
       <th scope="col">product-id</th>
       <th scope="col">product-image</th>
       <th scope="col">Product-name</th>
       <th scope="col">Price</th>
       <th scope="col">Payment</th>
     </tr>
   </thead>
   <?php
   
   $id=isset($_POST['id']);
if (isset($_GET['id'])) {
/*$id =  $_SESSION['info']['id']; where user_id = '$id'*/

 $id=$_GET['id'];
  $query = "select * from `posts` where id=$id";
  $results = mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc ($results);
  if ($results) {
      $id= $_GET['id'];
      $price=$row['price'];
      $productname=$row['productname'];
      $currency=$row['currency'];
      $image=$row['image'];
      $seller_id =$row['user_id'];
      $customer= $_SESSION['info']['id'];
       $query = "INSERT INTO `orders`(`seller_id`, customerid,`productname`,`currency`, `price`, `image`) VALUES ('$seller_id','$customer','$productname','$currency','$price',' $image')";
       $result=mysqli_query($conn,$query);
       echo'
        <tr>
        <th scope="row">'.$id.'</th>
        <td>#</td>
        <td>"'.$productname.'"</td>
        <td>'.$currency.' '.$price.'</td>
        <td><button type="button" class="btn-danger" style=" height: 3vh;outline: none;">Proceed</button></td>
      </tr>
    </tbody>'; 
  
  }}
  ?>
 <?php
 $customer = $_SESSION['info']['id'];
    $query = "select * from `orders` where  customerid='$customer'";
    $result=mysqli_query($conn,$query);
 if ($result) {
   while ($data = mysqli_fetch_assoc($result)) {
     $id = $data['id'];
     $image = $data['image'];
     $productname = $data['productname'];
     $currency = $data['currency'];
     $price = $data['price'];
     echo '
   <tr>
   <th scope="row">' . $id . '</th>
   <td><img src="'.$image.'" alt="image Not Available!!" style="width:30px; height:30px;></td>
   <td>"' . $productname . '"</td>
   <td>"' . $productname . '"</td>
   <td>' . $currency. ''  . $price . '</td>
   <td><button type="button" class="btn-danger" style=" height: 3vh;outline: none;">Proceed</button></td>
 </tr>
   
   ';
   }
 }

?>
  
</table>
  <!-- <tbody>
     <tr>
       <th scope="row">1</th>
       <td>??</td>
       <td>protein Shake</td>
       <td>FRW 15,000</td>
       <td><button type="button" class="btn-danger" style=" height: 3vh; outline: none;">Proceed</button></td>
     </tr>
     <tr>
       <th scope="row">2</th>
       <td>??</td>
       <td>protein Shake</td>
       <td>FRW 15,000</td>
       <td><button type="button" class=" btn-danger" style=" height: 3vh ; outline: none;">Proceed</button><td>
     </tr>
     <tr>
       <th scope="row">3</th>
       <td>??</td>
       <td>protein Shake</td>
       <td>FRW 15,000</td>
       <td><button type="button" class="btn-danger" style=" height: 3vh;outline: none;">Proceed</button></td>
     </tr>
   </tbody>
 </table>-->


<!-- tabe end here-->






<?php

require("footer.php")
?>