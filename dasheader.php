

<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="dashboard/css/style.css" type="text/css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
   
	<div id="mySidenav" class="sidenav" style="position: fixed;">
	<p class="logo"><span style="color:#f00;">BE</span>FIT</p>
  <a href="dashindex.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="dashcustomer.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <!--<a href="#"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Product</a>-->
  <a href="dashorder.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Placed-Orders</a>
  <!--<a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>-->
  <a href="dashinstore.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;InStore</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Blogs</a>

</div>
<div id="main" style="position: ;">

	<div class="head" style="">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6" style="">
	<div class="profile">

		<img src="<?= $_SESSION['info']['image']?>" class="pro-img" />
		<p style="color:white;"><?= $_SESSION['info']['username']?> <a href="dashboard/adminlogout.php"><span>LogOut</span></a></p>
		<a href="profile.php" style="color:white;"> view</a>
	</div>
</div>
	<div class="clearfix"></div>
</div>