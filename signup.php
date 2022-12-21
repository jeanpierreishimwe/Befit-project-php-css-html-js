<?php
require ("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
$username = addslashes ($_POST['username']);
$email =  addslashes ($_POST['email']);
$password = addslashes ($_POST['password']);
$date = date('Y-m-d H:i:s');
$usertype="user";

$query= "insert INTO users (username,email,password,usertype,date)
                        values('$username','$email','$password','$usertype','$date')";
     $result= mysqli_query($conn,$query);  
     header("Location: login.php"); 
            
  
}
?>
<?php
require("header.php");
?>
<div class="login-box">
   <a href="#" class="logo"> <span style="color:#f00;">BE</span>FIT </a>
        <h1 style=""><span style="color:#f00;"> </span><span style="color:white;"> Sign</span><span style="color:#f00;">Up</span> </h1>
            <form  method="Post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button>SignUp</button> <br>
            <p>Already have account!  <span style="color:#f00;">continue To</span></p> <a href="login.php">Login</a>    
            </form>
        </div><br>
<?php
require("footer.php");
?>
