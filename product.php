<?php 
require_once ("functions.php");


?>
<?php
require ("header.php");
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
                <a href="#" class="btnn"> '.$currency.' '.$price.'</a>
                <a href="cart.php" class="btn" style="">Add To Cart</a>
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




<!-- pricing section starts  -->







<section class="pricing" id="pricing">







   <div class="information">



       <span>pricing plan</span>



       <h3>affordable pricing plan for your</h3>



       <p>Text here 30</p>



       <p> <i class="fas fa-check"></i> cardio exercise </p>



       <p> <i class="fas fa-check"></i> weight lifting </p>



       <p> <i class="fas fa-check"></i> diet plans </p>



       <p> <i class="fas fa-check"></i> overall results </p>



       <a href="#" class="btn">all pricing</a>



   </div>







   <div class="plan basic">



       <h3>basic plan</h3>



       <div class="price"><span>FRW</span>30,000<span>/mo</span></div>



      <div class="list">



       <p> <i class="fas fa-check"></i> personal training </p>



       <p> <i class="fas fa-check"></i> cardio exercise </p>



       <p> <i class="fas fa-check"></i> weight lifting </p>



      </div>



      <a href="#" class="btn">get started</a>



   </div>







   <div class="plan">



       <h3>premium plan</h3>



       <div class="price"><span>FRW</span>50,000<span>/mo</span></div>



      <div class="list">



       <p> <i class="fas fa-check"></i> personal training </p>



       <p> <i class="fas fa-check"></i> cardio exercise </p>



       <p> <i class="fas fa-check"></i> weight lifting </p>



       <p> <i class="fas fa-check"></i> diet plans </p>



       <p> <i class="fas fa-check"></i> overall results </p>



      </div>



      <a href="#" class="btn">get started</a>



   </div>







   <div class="plan">



       <h3>Premium Plus+ plan</h3>



       <div class="price"><span>FRW</span>140,000<span>/3mo</span></div>



      <div class="list">



       <p> <i class="fas fa-check"></i> personal training </p>



       <p> <i class="fas fa-check"></i> cardio exercise </p>



       <p> <i class="fas fa-check"></i> weight lifting </p>



       <p> <i class="fas fa-check"></i> diet plans </p>



       <p> <i class="fas fa-check"></i> overall results </p>



       <p> <i class="fas fa-check"></i> Protein Shake </p>











      <a href="#" class="btn">get started</a>



      </div>







</section>







<!-- pricing section ends -->



<!-- blogs section starts  -->







<section class="blogs" id="blogs">







    <h1 class="heading"> <span>Recomanded Products</span> </h1>

 

 

 

    <div class="swiper blogs-slider">

 

 

 

        <div class="swiper-wrapper">

 

 

 

            <div class="swiper-slide slide">

 

                <div class="image">

 

                    <img src="images/product-9.JPG" alt="">

 

                </div>

 

               -<div class="content">

                <a href="#" class="btnn">FRW 15,000</a>

                <a href="#" class="btn">Add To Cart</a>

                <div class="link"> <a href="#"></a> <span>C4;Pre-Workout is a workout supplement line from Cellucor that people may take before exercise to help increase energy, alertness, and strength. They contain caffeine and creatine, which may help increase the effectiveness of a workout.</span> <a href="#"></a> </div>

                  

 

                    <!--  <h3></h3>

 

                    <p></p>

 

                    <a href="#" class="btn"></a>-->

 

                </div>

 

            </div>

 

            

 

            <div class="swiper-slide slide">

 

                <div class="image">

 

                    <img src="images/product-10.JPG" alt="">

 

                </div>

 

                <div class="content">

                <a href="#" class="btnn">FRW 8,000</a>

                <a href="#" class="btn">Add To Cart</a>

                <div class="link"> <a href="#"></a> <span>Gym Gloves;Weight-lifting gloves are gloves meant to be worn while using pull-up bars, kettlebells, dumbbells, and barbells. Most people wear them to prevent calluses that are common with heavy weight lifting.</span> <a href="#"></a> </div>



 

                   <!-- <h3></h3>

 

                    <p></p>

 

                    <a href="#" class="btn"></a>-->

 

                </div>

 

            </div>

 

 

 

            <div class="swiper-slide slide">

 

                <div class="image">

 

                    <img src="images/product-11.WEBP" alt="">

 

                </div>



 

               <div class="content">

                <a href="#" class="btnn">FRW 6,000</a>

                <a href="#" class="btn">Add To Cart</a>

                

                <h3></h3>

                

                  <div class="link"> <a href="#"></a> <span>Protein Shake bottle. It helps you mix your protein powder in case you don't have blender. These bottles come with an airtight lid and a mixing ball at the bottom, which breaks apart the powders and extra ingredients poured inside.</span> <a href="#"></a> </div>

 

                   <!-- <a href="#" class="btn"></a>-->

 

                </div>

 

            </div>

 

 

 

            <div class="swiper-slide slide">

 

                <div class="image">

 

                    <img src="images/product-12.PNG" alt="">

 

                </div>

 

                <div class="content">

                <a href="#" class="btnn">FRW 3,000</a>

                <a href="#" class="btn">Add To Cart</a>

                <div class="link"> <a href="#"></a> <span>Whether you're joining a Pilates class, planning on upping your treadmill time, or hitting the squat rack to make some gains, a water bottle is a must-have in your gym bag. Not only do they keep your liquids cold, but they serve as gentle reminders to hydrate throughout your workout.</span> <a href="#"></a> </div>

                 

                      <!--<h3></h3>

 

                    <p></p>

 

                    <a href="#" class="btn"></a>-->

 

                </div>

 

            </div>

 

 

 

            <div class="swiper-slide slide">

 

                <div class="image">

 

                    <img src="images/product-13.JPG" alt="">

 

                </div>

 

              <div class="content">

                <a href="#" class="btnn">FRW 18,000</a>

                <a href="#" class="btn">Add To Cart</a>

                  <div class="link"> <a href="#"></a> <span>Yoga Mat helps practitioners to keep their hold strong on the surface due to its anti-slipping nature. It also provides a sort of insulation between the human body and the ground. </span> <a href="#"></a> </div>

                    

 

                     <!--<h3></h3>

 

                    <p></p>

 

                    <a href="#" class="btn"></a>-->

 

                </div>

 

            </div>

 

 

 

        </div>

 

 

 

        <div class="swiper-pagination"></div>

 

 

 

    </div>

 

 

 

 </section>

 

 

 

 

 <!--REcomended products EMDS HERE-->

 <?php
 require("footer.php");
 ?>
