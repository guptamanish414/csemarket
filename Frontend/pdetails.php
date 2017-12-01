<?php
session_start();

if(isset($_GET['sessionPID']))
{
 $_SESSION['sessionPID']=$_GET['sessionPID'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>csEmarket</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
	<script type="text/javascript" src="js/boxOver.js"></script>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="#">Search</a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="images/search.gif" class="search_bt"/>
    </div>
    <div class="languages">
      <div class="lang_text">
	  	<!--<marquee direction="left"><img src="csEmarket_low.png" width="120" height="20" alt="csEmarket" /></marquee>-->
		<marquee direction="left">Welcome To <b>csEmarket</b></marquee>
	  </div>
     </div>
  </div>
  <div id="header">
       <div id="sliderFrame">
        <div id="slider">
            <img src="images/image-slider-1.jpg" alt="img1"/>
            <img src="images/image-slider-2.jpg" alt="img2"/>
            <img src="images/image-slider-3.jpg" alt="img3"/>
            <img src="images/image-slider-4.jpg" alt="img4"/>
            <img src="images/image-slider-5.jpg" alt="img5"/>
        </div>
    </div>

    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
        <li><a href="?cat=All" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="about.php" class="nav3">About Us</a></li>
        <li class="divider"></li>
        <li><a href="ccare.php" class="nav4">Customer Care</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav5">Contact Us</a></li>
        <li class="divider"></li>
		<li><a href="cregister.php" class="nav6">Register</a></li>
        <li class="divider"></li>
        <li><a href="clogin.php" class="nav7">Login</a></li>
        <li class="divider"></li>
		<li><a href="cart.php" class="nav8">Logout</a></li>
        <li class="divider"></li>
		<li><a href="../Backend/admin.php" class="nav9"></a></li>
        <li class="divider"></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
	
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
	
    <div class="left_content">
      <div class="title_box">Products</div>
      <ul class="left_menu">
        <li class="odd"><a href="index.php?cat=Laptops">Laptops</a></li>
        <li class="even"><a href="index.php?cat=Hard Drives">Hard Drives</a></li>
        <li class="odd"><a href="index.php?cat=Memory Cards">Memory Cards</a></li>
        <li class="even"><a href="index.php?cat=Pen Drives">Pen Drives</a></li>
        <li class="odd"><a href="index.php?cat=Printers">Printers</a></li>
        <li class="even"><a href="index.php?cat=Routers">Routers</a></li>
        <li class="odd"><a href="index.php?cat=Keyboads">Keyboads</a></li>
        <li class="even"><a href="index.php?cat=Mouse">Mouse</a></li>
        <li class="odd"><a href="index.php?cat=Monitors">Monitors</a></li>
        <li class="even"><a href="index.php?cat=Joysticks">Joysticks</a></li>
        <li class="odd"><a href="index.php?cat=PC Speakers">PC Speakers</a></li>
        <li class="even"><a href="index.php?cat=Laptop Cooling Pads">Laptop Cooling Pads</a></li>
      </ul>
	  
      <div class="title_box">Manufacturers</div>
      <div class="border_box">
      <ul class="left_menu">
        <li class="odd"><a href="#">Sony</a></li>
        <li class="even"><a href="#">Samsung</a></li>
        <li class="odd"><a href="#">HP</a></li>
        <li class="even"><a href="#">LG</a></li>
        <li class="odd"><a href="#">Dell</a></li>
        <li class="even"><a href="#">Seagate</a></li>
        <li class="odd"><a href="#">Phillips</a></li>
        <li class="even"><a href="#">Zebronics</a></li>
      </ul>
      </div>
	  
	  <div class="title_box">Price</div>
      <div class="border_box">
      <ul class="left_menu">
        <li class="odd"><a href="#">0 - 1000</a></li>
        <li class="even"><a href="#">1001 - 10000</a></li>
        <li class="odd"><a href="#">10001 - 100000</a></li>
      </ul>
      </div>
	  </div>

    <!-- end of left content -->
	
    <div class="center_content">  
	<form method="get"  name="saction" action="">
<?php
include ('connection.php');

if(isset($_GET["pid"])){
$pid=$_GET["pid"];
}
$query ="SELECT * FROM product WHERE pid='$pid'";
$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result) > 0) {

 while($info=mysql_fetch_assoc($result)) {?>  
	  
	        <div class="center_title_bar"><?php echo $info['pid']?> <?php echo $info['pname']?></div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="product_img_big"> <a href="images/big_pic.jpg" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="../Backend/uploads/<?php echo $info['pimg1']?>" alt="" border="0" /></a>
          </div>
          <div class="details_big_box">
            <div class="product_title_big"><?php echo $info['pname']?></div>
            <div class="specifications">Model: <span class="blue"><?php echo $info['pmodel']?></span><br />
              Description: <span class="blue"><?php echo $info['pdesc']?> </span><br />
              Category: <span class="blue"><?php echo $info['pcat']?></span><br />
              Manufacture: <span class="blue"><?php echo $info['pmfg']?></span><br />
			  Stock: <span class="blue"><?php echo $info['pstock']?></span><br />
			  Price: <span class="blue"><?php echo $info['pprice']?></span><br />
			  Product Image 1: <span class="blue"><?php echo $info['pimg1']?></span><br />
			  Product Image 2: <span class="blue"><?php echo $info['pimg2']?></span><br />
            </div>
            </div>
			
			<input type="hidden" name="sessionPID" value="<?php echo $info['pid']?>" />
			<input type="hidden" name="pid" value="<?php echo $_GET['pid']?>" />
			<input type="image" class="addtocart" src="images/addtocart.png" name="cart" value="add to cart"/>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
   <?php 
  }
 
} 
 else if (mysql_num_rows($result)== 0)
  {
  echo "NO RECODES FOUND";
  }
?>    
    </div>
	 </form>
    <!-- end of center content -->
	
	<!-- start of right content -->
	
	 <div class="right_content">
	<?php
	if(isset($_SESSION['sessionPID'])){
	$pid_session=$_SESSION['sessionPID'];

	$query_session ="Select * FROM product Where pid='$pid_session'";
	$result_session = mysql_query($query_session) or die(mysql_error());	
	$info=mysql_fetch_assoc($result_session)
	
	?>
   
      <div class="shopping_cart">
	  <div class="cart_details">
        <table bgcolor="#CADFDD" class="cart_table">
		<tr>
		<th colspan="2"><div class="cart_title">Shopping Cart<div class="cart_icon"><img src="images/cart.png" alt=""/></a></div></div></th>
        </tr>
		
		<tr>
		<td><b>Product</b></td><td><?php echo $info['pname']?></td>
		</tr>
        <tr>
		<td><b>Model</b></td><td><?php echo $info['pmodel']?></td>
		</tr>
		<tr>
		<td><b>Description</b></td><td><?php echo $info['pdesc']?></td>
		</tr>
		<tr>
		<td><b>Category</b></td><td><?php echo $info['pdesc']?></td>
		</tr>
        <tr>
		<td><b>Manufacture</b></td><td><?php echo $info['pmfg']?></td>
		</tr>
		<tr>
		<td><b>Stock</b></td><td><?php echo $info['pstock']?></td>
		<tr>
		<tr>
		<td><b>Price</b></td><td><?php echo $info['pprice']?></td>
		<tr>
		<td><b>Image</b></td><td></td>
		</tr>
		<tr>
		<td colspan="2"> <div class="order_icon"><a href="order.php"><img src="images/order-now.png" alt="s"/></a></div></td>
		</tr>
		</table>
		</div>
      </div>
	<?php 
	 }
	?>

	 <div class="clear"> </div>
      <div class="title_box">New Arrivals</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">cooler-master-sf-17</a></div>
        <div class="product_img"><a href="details.html"><img src="images/cooler-master-sf-17.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="price">&#8377;</span></div>
      </div>
	  
	  <div class="border_box">
        <div class="product_title"><a href="details.html">cooler-master-sf-17</a></div>
        <div class="product_img"><a href="details.html"><img src="images/cooler-master-sf-17.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="price">&#8377;</span></div>
      </div>
	 
	  <div class="border_box">
        <div class="product_title"><a href="details.html">cooler-master-sf-17</a></div>
        <div class="product_img"><a href="details.html"><img src="images/cooler-master-sf-17.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="price">&#8377;</span></div>
      </div>
	  <div class="border_box">
        <div class="product_title"><a href="details.html">cooler-master-sf-17</a></div>
        <div class="product_img"><a href="details.html"><img src="images/cooler-master-sf-17.jpg" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="price">&#8377;</span></div>
      </div>
	  <div class="banner_adds"> <a href="#"><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
	 </div>
    <!-- end of right content -->
	
  </div>
  <!-- end of main content -->
  
  <div class="footer">
    <div class="left_footer"> </div>
	<div class="center_footer"><img src="images/csEmarket.jpg" alt="csEmarket.jpg" width="570" height="49"/></div>
    <div class="right_footer"> <a href="index.html">Home</a> <a href="contact.html">Contact Us</a> <a href="about.php">About Us</a></div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
