

<?php
require("functions.php");

check_login();
?>
<?php
require ("dasheader.php")
?>

<?php

if (isset($_GET['deleteid'])){
   $id = $_GET['deleteid'];

   $query = "delete from `users` where  id ='$id' limit 1";
   $result = mysqli_query($conn,$query);
   if ($result) {
      header("Location:dashcustomer.php");
   }else{
      die(mysqli_error($conn));
   }
}

?>

 <p> <span style="color:#f00;">Customer</span>Profiles </p>

<?php

 $sql = "select * from users ";
 $result = mysqli_query($conn,$sql);



 foreach($result as $data) {
   echo'
   
  






<!-- start card of products-->

<div class="card " style="width: 18rem;background:#0e151a; color:white; display:inline-block;margin-top:16px; margin:9px; border-radius:33%;">
   <img class="card-img-top" src="'.$data['image'].'" alt="Card image cap" style="border-radius:34%;">
   <div class="card-body">
     <h5 class="card-title">'.$data['username'].'</h5>
     <p class="card-text">'.$data['email'].'</p>
   </div>
   <!--<ul class="list-group list-group-flush">
     <li class="list-group-item"style="background:#0e151a;">Cras justo odio</li>
     <li class="list-group-item"style="background:#0e151a;">Dapibus ac facilisis in</li>
     <li class="list-group-item"style="background:#0e151a;">Vestibulum at eros</li>
   </ul>-->
   <div class="card-body" style="display:flex; padding-left:55px;">
   <a href="dashcustomer.php?deleteid='.$data['id'].'" class="card-link"> <button style="  cursor:pointer; width:30px;color:white; background:#f00;">Delete</button> </a>
   <!--<a href=" dashcustomer.php?updateid='.$data['id'].'" class="card-link"><button style="cursor:pointer;width:22px;color:white; background:#f00;">Edit</button></a>-->
 </div>
 </div> 
<!--end card here-->
 
   ';
 }?>

















<?php
require ("dashboard/footer.php")
?>
