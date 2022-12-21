<?php
require ("functions.php");
if(isset($_POST['user'])){
  $email =  addslashes ($_POST['email']);
  $password = addslashes ($_POST['password']);
  $date = date('Y-m-d H:i:s');

  $query= "select * from users where email = '$email'  && password = '$password' && usertype='user' limit 1";
  $result= mysqli_query($conn,$query);  
if(mysqli_num_rows($result) > 0)
{
 $row = mysqli_fetch_assoc($result);
    $_SESSION['info'] = $row;

 header("Location:user.php");        
  die;
}
else{
 $error = "wrong Email Or Password";
}


}



if(isset($_POST['admin'])){
  $email =  addslashes ($_POST['email']);
  $password = addslashes ($_POST['password']);
  $date = date('Y-m-d H:i:s');

  $query= "select * from users where email = '$email'  && password = '$password' && usertype='admin' limit 1";
  $result= mysqli_query($conn,$query);  
if(mysqli_num_rows($result) > 0)
{
 $row = mysqli_fetch_assoc($result);
    $_SESSION['info'] = $row;

 header("Location:profile.php");        
  die;
}
else{
 $error = "wrong Email Or Password";
}


}





 
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
}
?>
<?php 
require ("header.php");
?>
  <div class="login-box ">

  
  <?php
if (!empty($error))
 {
   echo "<div>" . $error . "</div>";
}

  ?>
     
     <a href="#" class="logo"> <span style="color:#f00;">BE</span>FIT </a>
        <h1><span style="color:#f00;">User</span>Login</h1>
            <form  method="Post">
            <p>Email</p>
            <input type="text" name="email" required placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password"  required placeholder="Enter Password">
            <button name="user">User Login</button> <button name="admin">Admin login</button>
           <p>Don't Have Account?</p> <a href="signup.php">signUp</a>    
            </form>
        
        
        </div>
<?php 
require ("footer.php");
?>
