
<?php
require("functions.php");

check_login();
?>
<?php
require ("dasheader.php")
?>
	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p><?php 
			$query = "select * from users";
			if ($result = mysqli_query($conn,$query)) {
				$rowcount = mysqli_num_rows($result);
			
				echo $rowcount;
			}
			?><br/><span>Customers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p> <?php 
			$query = "select * from posts";
			if ($result = mysqli_query($conn,$query)) {
				$rowcount = mysqli_num_rows($result);
			
				echo $rowcount;
			}
			?>  <br/><span>Products</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php 
			$query = "select * from orders";
			if ($result = mysqli_query($conn,$query)) {
				$rowcount = mysqli_num_rows($result);
			
				echo $rowcount;
			}
			?><br/><span>-users-carts</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>-<br/><span>Blogs</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box" style="overflow:auto;">
			<p>Recent Products In users Carts<span>Sell All</span></p>
			<br/>
		<!---table start here-->


<table  style="overflow:visible;">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">image</th>
       <th scope="col">Productname</th>
       <th scope="col">Price</th>
       <th scope="col">Payment</th>
     </tr>
   </thead>
 <tbody >
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
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total Sale <span>Sell All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>
<?php
require ("dashboard/footer.php")
?>
