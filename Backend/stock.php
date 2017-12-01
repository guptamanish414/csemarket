<html>
<head>
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
</head>

<body>
<h3><center>Products</center></h3>

<?php

include ('connection.php');

$query ="SELECT * FROM product";
$result = mysql_query($query) or die(mysql_error());
?>

<center>
<table border="1">
  <tr>
	  <th>Product Id</th>
	  <th>Product Name</th>
	  <th>Product Price</th>
	  <th>Product Model</th>
	  <th>Product Description</th>
	  <th>Product Category</th>
	  <th>Product Manufacture</th>
	  <th>Current Stock Quantity</th>
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
	  <td><?php $s_query ="SELECT * FROM porder where pid=31";?> </td>
  </tr>
  
<? 
  }
 
} 
 else if (mysql_num_rows($result)== 0)
  {
  echo "NO RECODES FOUND";
  }
?>  
  </table> 
  </center>
</body>
</html>
