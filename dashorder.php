

<?php
require("functions.php");

check_login();
?>


<?php
require("dasheader.php");
?>



<!---table start here-->


<table class=" headeer table table-dark" style="zoom:200%; margin-top: 30px;">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">image</th>
       <th scope="col">Productname</th>
       <th scope="col">Price</th>
       <th scope="col">Payment</th>
     </tr>
   </thead>
 <tbody>
     <?php

    $query = "select * from `orders`";
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
  </tbody>
     </table>
     <!--<tr>
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
require ("dashboard/footer.php")
?>
