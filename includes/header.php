<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>Inventory System</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
<!-- extra css add  -->
<link rel="stylesheet" href="custom/css/mian.css" />
</head>
<body>


	<nav class="navbar ">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <!-- delete code here -->





      <!-- delete code end  -->



      <!-- new code here  -->
      <header id="header">
      <div class="logo pull-left"> Inventory System</div>
      <div class="header-content">
<!-- <div class="header-date pull-left">
        <strong>November 27, 2022, 8:12 pm</strong>
      </div>       -->
      <div class="pull-right">
        
      <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">    
			<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>
            <li id="topNavUser"><a href="user.php"> <i class="glyphicon glyphicon-wrench"></i> Add User</a></li>
<?php } ?>              
            <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
          </ul>
        </li>  








     </div>
    </header>
    <div class="sidebar">
              <!-- admin menu -->
      <ul>
  <li>
    <a href="admin.php">
      
      <span>
      <li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-home"></i>  Dashboard</a></li>        
        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="navBrand"><a href="brand.php"><i class="glyphicon glyphicon-btc"></i>  Brand</a></li>        
		<?php } ?>
      </span>
    </a>
  </li>
  <li>
    
     
      <span>
      <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i> Category</a></li>        
		<?php } ?>
      </span>
    </a>
    
  </li>
  <li>
    <a href="categorie.php" >
   
      <span>
      <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-ruble"></i> Product </a></li> 
		<?php } ?>
      </span>
    </a>
  </li>
  <!-- <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Products</span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php">Manage Products</a> </li>
       <li><a href="add_product.php">Add Products</a> </li>
   </ul>
  </li> -->
  <!-- <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span></span>
    </a>
  </li> -->


  <li class="dropdown" id="navOrder">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
          role="button" aria-haspopup="true" aria-expanded="false"> 
          <i class="glyphicon glyphicon-usd"></i> Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Add Orders</a></li>            
            <li id="topNavManageOrder"><a href="orders.php?o=manord"> <i class="glyphicon glyphicon-edit"></i> Manage Orders</a></li>            
          </ul>
        </li>
  <li>
  <?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="navReport"><a href="report.php"> <i class="glyphicon glyphicon-check"></i> Report </a></li>
		<?php } ?>
  </li>
  <!-- <li>
  <?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="importbrand"><a href="importbrand.php"> <i class="glyphicon glyphicon-check"></i> Import Brand </a></li>
		<?php } ?> 
  </li> -->

  





</ul>

      
   </div>

<div class="page">
  <div class="container-fluid">

<div class="row">
   <div class="col-md-6">
        </div>
</div>
  
	

	

	

  
  
  
   
 
 

  



      <!-- new code end  -->





