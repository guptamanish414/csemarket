<style type="text/css">
h3
{
background:#0099FF;
font-family:Arial, Helvetica, sans-serif;
width:auto;
}
table, td, th
{
background:#CCFFFF;
border:1px solid black;
width:auto;
}
td
{
padding:5px;
}
th{
background:#CCCCCC;
}
</style>

<h3> <center>Product Quantity Management</center></h3>

<form  action="pquantity.php" method="post" style="color:#0033CC">
<input type="hidden" name="qaction" value="update"/>
<div id=up>
<center>
<b>Products:</b> <select name="pselect">
                                    <option value="">Please Choose</option>
									<option value="All">All</option>
                                    <option value="Laptops">Laptops</option>
                                    <option value="Hard Drives">Hard Drives</option>
                                    <option value="Memory Cards">Memory Cards</option>
									<option value="Pen Drives">Pen Drives</option>
									<option value="Printers">Printers</option>
									<option value="Routers">Routers</option>
									<option value="Keyboards">Keyboards</option>
									<option value="Mouse">Mouse</option>
									<option value="Monitors">Monitors</option>
									<option value="Joysticks">Joysticks</option>
									<option value="PC Spekers">PC Spekers</option>
									<option value="Laptop Cooling Pads">Laptop Cooling Pads</option>
									
                 </select>
<input  type="submit" value="search" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"/>
</center>
</div>
<br/>

<div id="middle">
<?php
include ('connection.php');

if(isset($_REQUEST['qaction']) && $_REQUEST['qaction']=='update'){
$ProductId=$_REQUEST["pid"];
$ProductQuantity=$_REQUEST["qty"];
//print_r ($ProductQuantity);
}

foreach ($ProductQuantity as $key => $value) {
$query="UPDATE product SET pqty= pqty + '$value' WHERE pid ='$key' ";
mysql_query($query);
}

if(mysql_query($query)){
//echo 'Database Updation Successfull';
}
else{
//echo 'Database Updation Failed';
}
?>
</div>
<br/>

<div id="down">
<table cellpadding="15px" border="2px" width="700px" height="10px">
<colgroup span=2 style="background:#FFFFFF"></colgroup>

<?php

include ('connection.php');

$ProductSelect=$_REQUEST["pselect"];

if($ProductSelect == 'All'){
$query1 ="SELECT * FROM product";
}
else{
$query1 ="SELECT * FROM product WHERE pcat='$ProductSelect'";
}
$result = mysql_query($query1) or die(mysql_error());
?>

  <tr>
	  <th>Product Id</th>
	  <th>Product Name</th>
	  <th>Product Price</th>
	  <th>Product Model</th>
	  <th>Product Description</th>
	  <th>Product Category</th>
	  <th>Product Manufacture</th>
	  <th>Product Stock</th>
	  <th>Product Image 1</th>
	  <th>Product Image 2</th>
	  <th>Product Quantity</th>
	  <th>Add Product</th>
  </tr>
 <? 

if(mysql_num_rows($result) > 0) {

 while($info=mysql_fetch_assoc($result)) {?>  
  <tr>
	  <td><?php echo $info['pid']?></td>
	  <td><?php echo $info['pname']?> </td>
	  <td><?php echo $info['pprice']?> </td>
	  <td> <?php echo $info['pmodel']?></td>
	  <td><?php echo $info['pdesc']?> </td>
	  <td> <?php echo $info['pcat']?></td>
	  <td><?php echo $info['pmfg']?> </td>
	  <td><?php echo $info['pstock']?> </td>
	  <td> <?php echo $info['pimg1']?></td>
	  <td><?php echo $info['pimg2']?> </td>
	  <td><?php echo $info['pqty']?> </td>
	  <td><input type="text" name="qty[<?php echo $info['pid']?>]"/></td>
  </tr>
<? 
  }
 
} 
 else if (mysql_num_rows($result)== 0)
  {
//  echo "NO RECODES FOUND";
  }
?>
  <tr>
  <td colspan="12" align="center" style="background-color:#CCCCCC"><input  type="submit" value="update" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"/></td>
  </tr>
</table>
</div>
<br/>

</form>