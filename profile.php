<?php
require ("functions.php");

check_login();


if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['action']) && $_POST['action'] == 'delete') 
{
   //delete your profile
   $id = $_SESSION['info']['id'];
   $query = "DELETE FROM users WHERE id = '$id' limit 1";
   $result= mysqli_query($conn,$query); 
   
   if (file_exists($_SESSION['info']['image'])) 
   {
     unlink($_SESSION['info']['image']);
    }
    header("Location:logout.php");        
    die;
  }
  elseif ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['username'])) 
  
  {
    //profile image
  $image_added = false;
  if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) /* yu can add this code here if you wnt the user to upload only jpg image type file
    && $_FILES['image']['type'] == jpg*/ 
  {
  //filewas uploaded
  $folder = "uploads/";
  if (!file_exists($folder) ) 
  {
    mkdir($folder,0777,true);
  }
  $image= $folder . $_FILES['image']['name'];

  move_uploaded_file($_FILES['image']['tmp_name'], $image);

  if (file_exists($_SESSION['info']['image'])) {
    unlink($_SESSION['info']['image']);
  }
  $image_added=true;
}
$username = addslashes ($_POST['username']);
$email =  addslashes ($_POST['email']);
$password = addslashes ($_POST['password']);
$id = $_SESSION['info']['id'];
if ($image_added == true) 
{
  $query ="update users set username = '$username', email ='$email', password = '$password', image = '$image' WHERE id = '$id' limit 1";
}else{
  $query ="update users set username = '$username', email ='$email', password = '$password' WHERE id = '$id' limit 1";

}
     $result= mysqli_query($conn,$query); 
     $query = "select * from users where id='$id' "; 
     $result= mysqli_query($conn,$query); 
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['info'] =$row;
}
     header("Location:profile.php");        
  die;
}

elseif ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['post']) && !empty($_POST['location'])&& !empty($_POST['productname'])&& !empty($_POST['instagram'])&& !empty($_POST['whatsapp'])&& !empty($_POST['currency'])&& !empty($_POST['price'])) {
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
require ("dasheader.php");
?>
 <div class="formm">
  <?php if (!empty($_GET['action']) && $_GET['action'] == 'edit'):?>
    <div class="formm" >
  <h2></h2>
    <!---->
    <div class="login-box">
      <a href="#" class="logo"> <span style="color:#f00;">BE</span>FIT </a>
      <h1 style=""><span style="color:#f00;"> </span><span style="color:white;"> Edit</span><span style="color:#f00;"> Profile</span> </h1>
      <form  method="Post"  enctype="multipart/form-data">
          <img src="<?php echo $_SESSION['info']['image']?>" alt="" style= "width:150px ; height:150px; object-fit:cover; margin:auto; display:block;">
          <input value= ""type="file" name="image" id="">
            <p>Username</p>
            <input  value="<?php echo $_SESSION['info']['username']?>" type="text" name="username" placeholder="Enter Username" required>
            <p>Email</p>
            <input    value="<?php echo $_SESSION['info']['email']?>" type="text" name="email" placeholder="Enter Email" required>
            <p>Password</p>
            <input   value="<?php echo $_SESSION['info']['password']?>" type="password" name="password" placeholder="Enter Password" required>
            <button>Save</button>
            <a href="profile.php">
            <button type="button">Cancel</button>
          </a>
         </form>
        </div>
  <?php elseif (!empty($_GET['action']) && $_GET['action'] == 'delete'):?>

    <div class="formm" >
  <h2 style="text-align: center;" style="color:#818181;"><span style="color:#818181;">are you sure you want to delete your profile?</span> <br> <span style="color:#818181;">when you press on Delete Button All Your Products You were Posted</span> <br> <span style="color:#818181;"> it Will Disappear Forever!</span></h2>
  <div style="text-align: center;">  
      <form method="POST">
    <img src="<?php echo $_SESSION['info']['image']?>" alt="" style= "width:150px ; height:150px; object-fit:cover; margin:auto; display:block; border-radius: 15%;">
      <div style="color:#818181;"><?php echo $_SESSION['info']['username']?></div>
      <div style="color:#818181;"><?php echo $_SESSION['info']['email']?> </div>
      <input type="hidden" name="action" value="delete">
      <button style="display:flex;">delete</button>
      <a href="profile.php">
      <button type="button" style=" display: flex;">Cancel</button>
    </a>
    </form>
  </div>

</div>
    <?php else: ?>

    <h2> <span  style="color:#f00;">Admin</span> <span  style="color:#818181; font-size: 25px;">profile</span></h2>
    <div class="table">
      <div class="tr">
        <td><img src="<?php echo $_SESSION['info']['image']?>" alt="" style= "width:150px ; height:150px; object-fit:cover; border-radius: 10px;"></td>
      </div>
      <div class="tr tt" style="color:#818181;  font-size: 20px;">
       <td ><?php echo $_SESSION['info']['username']?></td>
      </div>
      <div class="tr tt ttt" style="color:#818181;  font-size: 20px;">
        <td><?php echo $_SESSION['info']['email']?></td>
      </div>
  <div style="text-align: center;">  

      <a href="profile.php?action=edit" class=" tr tt">
      <button class=" tr tt">Edit Profile</button>
     </a>
     <a href="profile.php?action=delete" class=" tr tt">
      <button class=" tr tt">delete Profile</button>
     </a>
     
     <!-- <button>Update</button>-->
    </div>
    </div>
    <hr>
    <h4 style="line-height40px; margin-top:12px; color:white; font-size: 25px;">create a Product</h4>
    <div class="login-box" style="">
   <a href="#" class="logo"> <span style="color:#f00;">BE</span>FIT </a>
        <h1 style=""><span style="color:#f00;"> </span><span style="color:white;"> Post</span><span style="color:#f00;">Product</span> </h1>
        <form  method="Post" enctype="multipart/form-data">
          choose image: <input type="file" name="image"><br>
          <p>Product Name</p>
          <input type="text" name="productname" placeholder="Enter product Name">
          <p>Product Decription</p>
              <textarea name="post" id="" rows="10" placeholder="What's In Mind!" style="background:whitesmoke; margin: 4px;padding: 8px;width: 300px;border: none;outline: none;resize: none;height: 50px;overflow: hidden;border-radius: 16px; font-size: 15px;">  
              </textarea>
              <p>Location</p>
              <input type="text" name="location" placeholder="Enter Location">
              <p>Instagram Link</p>
              <input type="text" name="instagram" placeholder="Enter instagram link">
              <p><i class="fa fa-whatsapp" aria-hidden="true">Whatsapp</i></p>
              <input type="text" name="whatsapp" placeholder="Enter Whatapp phone Or Link">
            <p>currency</p>
            <input type="text" name="currency"  placeholder="Enter  currency">
            <p>Price</p>
            <input type="text" name="price" placeholder="Enter Product Price">
            <button style="display: flex; position: relative; left: ; top:x;">Publish</button>
            </form>
        </div>
  </div>
  <?php endif;?>
  <br><br><br><br><br><br><br><br><br>
  <?php 
require ("dashboard/footer.php");
?>
