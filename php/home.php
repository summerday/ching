

<?php 
  session_start();
  include 'header.php' 
?>

  <div id="header"> 
	<div id="logo">
	  <a href="#">
	    <img id="logoImg" src="../images/xkc.jpg" alt="Xinkeco Global Logo" />
	  </a>
	</div>  <!-- closes logo -->
	<div id="cart">
	  <div class="heading">
 	    <h4>Shopping Cart</h4>
		<a><span id="cart-total">0 item(s) - $0.00</span></a>
	  </div>
	  <div class="content">
	    <div class="empty"> Your Shopping cart is Empty!</div>
	  </div>
	</div>  <!-- closes cart -->
	
	<div id="search">
	  <div class="button-search"></div>
	  <input type="text" name="filter_name" value="Search" 
	    onclick="doSearch();" />
	</div>  <!-- closes search -->
	
	<div id="welcome">
	  Welcome! you can <a href="home.php?rType=Login"> Login </a>
	  or 
	  <a href="home.php?rType=register">Create an account</a>
	</div>
	
	<div id="tlinks">
	  <a href="home.php"> Your Account </a>
	  <a href="home.php?rType=cart"> Shopping Cart </a>
	  <a href="home.php?rType=wish"> Wish List </a>
	  <a href="home.php?rType=checkout"> Checkout </a>
	</div>
	
 </div>  <!-- closes header -->
 
  <div id="menu">
	  <ul id="navMenu">
	    <li><a href="about_us.php?route=AboutUs">Home</a>
		</li>
	    <li><a href="get_category.php?route=Product">Products</a>
		</li>
	    <li><a href="welcome.php?name=Blog">Blog</a></li>
	    <li><a href="welcome.php?name=ContactUs">Contact Us</a></li>
	  </ul> <!-- closes navMenu -->
  </div>  <!-- closes menu -->

<?php 
    if (isset($_GET["rType"]) && $_GET["rType"] == "Login") {
		include 'login.php';
?>
  
<?php
	}	
	else {
	  include 'main_content.php';
?>
  
  
 
  
<?php
  }
?>
  
  
<?php include 'footer.php' ?>

	