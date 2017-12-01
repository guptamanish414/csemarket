<?php session_start(); ?>
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
            <img src="images/image-slider-1.jpg" alt="Laptops"/>
            <img src="images/image-slider-2.jpg" alt="Hard Drives"/>
            <img src="images/image-slider-3.jpg" alt="Memory Cards."/>
            <img src="images/image-slider-4.jpg" alt="Pen Drives."/>
            <img src="images/image-slider-5.jpg" alt="Printers."/>
			<img src="images/image-slider-6.jpg" alt="Routers."/>
            <img src="images/image-slider-7.jpg" alt="Keyboads."/>
            <img src="images/image-slider-8.jpg" alt="Mouse."/>
            <img src="images/image-slider-9.jpg" alt="Monitors."/>
            <img src="images/image-slider-10.jpg" alt="Joysticks."/>
			<img src="images/image-slider-11.jpg" alt="PC Speakers."/>
            <img src="images/image-slider-12.jpg" alt="Laptop Cooling Pads."/>
            <img src="images/image-slider-13.jpg" alt="Laptops."/>
            <img src="images/image-slider-14.jpg" alt="Hard Drives."/>
            <img src="images/image-slider-15.jpg" alt="Memory Cards."/>
			<img src="images/image-slider-16.jpg" alt="Pen Drives."/>
            <img src="images/image-slider-17.jpg" alt="Printers."/>
            <img src="images/image-slider-18.jpg" alt="Routers."/>
            <img src="images/image-slider-19.jpg" alt="Keyboads."/>
            <img src="images/image-slider-20.jpg" alt="Mouse."/>
			<img src="images/image-slider-21.jpg" alt="Monitors."/>
			<img src="images/image-slider-22.jpg" alt="Joysticks."/>
			<img src="images/image-slider-23.jpg" alt="PC Speakers."/>
			<img src="images/image-slider-24.jpg" alt="Laptop Cooling Pads."/>
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
		<li><a href="admin.php" class="nav9"></a></li>
        <li class="divider"></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
	
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
	
    <div class="left_content">
      <div class="title_box">Products</div>
      <ul class="left_menu">
        <li class="odd"><a href="?cat=Laptops">Laptops</a></li>
        <li class="even"><a href="?cat=Hard Drives">Hard Drives</a></li>
        <li class="odd"><a href="?cat=Memory Cards">Memory Cards</a></li>
        <li class="even"><a href="?cat=Pen Drives">Pen Drives</a></li>
        <li class="odd"><a href="?cat=Printers">Printers</a></li>
        <li class="even"><a href="?cat=Routers">Routers</a></li>
        <li class="odd"><a href="?cat=Keyboads">Keyboads</a></li>
        <li class="even"><a href="?cat=Mouse">Mouse</a></li>
        <li class="odd"><a href="?cat=Monitors">Monitors</a></li>
        <li class="even"><a href="?cat=Joysticks">Joysticks</a></li>
        <li class="odd"><a href="?cat=PC Speakers">PC Speakers</a></li>
        <li class="even"><a href="?cat=Laptop Cooling Pads">Laptop Cooling Pads</a></li>
      </ul>
	  
      <div class="title_box">Manufacturers</div>
      <div class="border_box">
      <ul class="left_menu">
        <li class="odd"><a href="?cat=Sony">Sony</a></li>
        <li class="even"><a href="?cat=Samsung">Samsung</a></li>
        <li class="odd"><a href="?cat=HP">HP</a></li>
        <li class="even"><a href="?cat=LG">LG</a></li>
        <li class="odd"><a href="?cat=Dell">Dell</a></li>
        <li class="even"><a href="?cat=Seagate">Seagate</a></li>
        <li class="odd"><a href="?cat=Phillips">Phillips</a></li>
        <li class="even"><a href="?cat=Zebronics">Zebronics</a></li>
      </ul>
      </div>
	  
	  <div class="title_box">Price</div>
      <div class="border_box">
      <ul class="left_menu">
        <li class="odd"><a href="?cat=low">0 - 1000</a></li>
        <li class="even"><a href="?cat=medium">1001 - 10000</a></li>
        <li class="odd"><a href="?cat=high">10001 - 100000</a></li>
      </ul>
      </div>
	  </div>

    <!-- end of left content -->
	
    <div class="center_content">
    <div class="center_title_bar">Customer Login</div>
	
	<?php
	include('connection.php');
	
	if(isset($_POST['submit']))
	{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
    $query="select * from customer where cemail='$email' and cpassword='$password'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	//print_r ($result);
	while($data=mysql_fetch_array($result))
	//echo"$data[name]";
		if($count!=0)
		{
		$_SESSION['email']="$email";
		$_SESSION['password']="$password";
		$_SESSION['cid']=$data['cid'];
		
		
		?>
		<script>
		window.location='index.php';
		</script>
		
		<?
		
		}
	}
	
	?>
	
	<form name="form2" method="post" action="">
    <table border="0" style="background-color:#F1F0F0; margin-top:50px ; width:500px; border:1px solid #999999; border-radius:5px; height:300px;" 		 	align="center">
	<tr>
	<td><table border="0" style="background-color:#F1F0F0; margin-top:10px ; width:400px; border:0px solid #999999; border-radius:5px; height:300px;"    align="center">
            <tr>
			<td style="color:#0099FF; font-size:20px;" colspan="2">Already A Customer</td>
			</tr>
			
            <tr>
			<td colspan="2">Please Login Below</td>
			</tr>
			
            <tr>
			<td colspan="2"><b>Email Address</b><br><input type="text" name="email" style="width:300px; height:25px;"></td>
			</tr>
			
            <tr>
			<td colspan="2"><b>Password</b><br><input type="password" name="password" style="width:300px; height:25px;"></td>
			</tr>
			
            <tr>
			<td><input type="submit" name="submit" value="submit" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"></td>
			<td><a href="cregister.php" style="text-decoration:none; color:#66CC00; font-size:20px;"><b>New Customer Register Here</b></a></td>
			</tr>
    </table></td>
	</tr>
	
	</table>
    </form>  
    </div>
    <!-- end of center content -->
	
	<!-- start of right content -->
    <div class="right_content">
      <div class="shopping_cart">
      

      </div>
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