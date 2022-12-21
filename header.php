<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>complete responsive fitness and gym website design</title>



    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />



    <!-- custom css file link  -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style123.css">



</head>

<body>

    

<!-- header section starts      -->



<header class="header ">



    <a href="#" class="logo"> <span>BE</span>FIT </a>



    <div id="menu-btn" class="fas fa-bars"></div>


    
    
    <nav class="navbar">

    



   <?php if (!empty($_SESSION['info'])):?>
       <div> <a href="index.php">Home</a></div>
      <div> <a href="features.php">Features+Products</a></div>
        <div><a href="blogs.php">blogs</a></div>
        <div><a href="user.php">profile</a></div>
        <div><a href="cart.php">cart</a></div>
         <div> <a href="logout.php">SignOut</a></div>
      <?php else: ?>
        <div> <a href="homepage.php">homepage</a></div>
        <div> <a href="product.php">Features+Products</a></div>
        <div><a href="#trainers">trainers</a></div>
        <div><a href="#pricing">pricing</a></div>
        <div><a href="#pricing">about</a></div>
        <div> <a href="login.php">Login</a></div>
        <div> <a href="signup.php">Sign up</a></div>
   
     

<?php endif; ?>
         </nav>    



</header>
<br>
<br>
<br><br><br><br>



<!-- header section ends     -->