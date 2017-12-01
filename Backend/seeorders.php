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
<h3><center>Orders</center></h3>

<?php
include ('connection.php');
//if(isset($_REQUEST['or1']) && $_REQUEST['or1']=='ok'){

$query ="SELECT * FROM porder";
$result = mysql_query($query) or die(mysql_error());
?>

<center>
<table border="1">
  <tr>
  	  <th>Order Id</th>
	  <th>Product Id</th>
	  <th>Customer Id</th>
	  <th>Product Price</th>
  </tr>
<? 

if(mysql_num_rows($result) > 0) {

 while($info=mysql_fetch_assoc($result)) {?>  
  <tr>
	  <td><?php echo $info['oid']?></td>
	  <td><?php echo $info['pid']?> </td>
	  <td> <?php echo $info['cid']?></td>
	  <td><?php echo $info['pprice']?> </td>
  </tr>
<? 
  }
 
} 
 else if (mysql_num_rows($result)== 0)
  {
  echo "NO RECODES FOUND";
  }
?> 
    <tr>
	<td align="center" colspan="4"> <form action="admin.php" method="get"><input type="submit" name="or1" value="ok" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"></form></td>
	</tr>
  </table> 
 </center>
 <?php
// }
?>
</body>
</html>
