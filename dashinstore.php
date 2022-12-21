<?php
require("functions.php");

check_login();
?>


<?php
require("dasheader.php");
?>

<?php

if (isset($_GET['deleteid'])){
   $id = $_GET['deleteid'];

   $query = "delete from `posts` where  id ='$id' limit 1";
   $result = mysqli_query($conn,$query);
   if ($result) {
      header("Location:dashinstore.php");
   }else{
      die(mysqli_error($conn));
   }
}

?>
<?php

/*$id =  $_SESSION['info']['id'];where user_id = '$id'*/

$query = "select * from posts  order by id asc ";
$result= mysqli_query($conn,$query);

if ($result) {
   while($row = mysqli_fetch_assoc($result))
{
    
   $post =$row ['post'];
   $image =$row ['image'];
   $id=$row ['id'];
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
        
   
<div class="card " style="width: 18rem;background:#0e151a; color:white; display:inline-block;margin-top:16px; margin:9px; ">
<img class="card-img-top" src="'.$image.'" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">'.$productname.'</h5>
  <p class="card-text">'.$post.'</p>
</div>
<ul class="list-group list-group-flush" >
  <li class="list-group-item"style="background:#0e151a;">'.$currency.'</li>
  <li class="list-group-item" style="background:#0e151a;">'.$price.'</li>
</ul>
<div class="card-body" style="display:flex; ">
  <a href="dashinstore.php?deleteid='.$id.'" class="card-link"> <button style=" cursor:pointer; width:30px;color:white; background:#f00;">Delete</button> </a>
  <a href="dashedit.php?updateid='.$id.'" class="card-link"><button style="cursor:pointer;width:22px;color:white; background:#f00;">Edit</button></a>
</div>
</div> 
        
';
}}?>





<?php
require("dashboard/footer.php");
?>




