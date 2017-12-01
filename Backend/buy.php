<?php
session_start();
//print_r ($_SESSION);
if(isset($_GET['sessionPID']))
{
 $_SESSION['sessionPID']=$_GET['sessionPID'];
}

?>
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

<div id="center">
<?php
include('connection.php');
if(isset($_REQUEST['buy']) && $_REQUEST['buy']=='ok')
{
 $ProductId=$_SESSION['sessionPID'];
 $CID=$_SESSION['cid'];
 $PRICE=$_SESSION['productPrice'];
 $query ="insert into porder(pid, cid, pprice) values('$ProductId', '$CID', '$PRICE' )";
 //$update= "update pqty where pid=
?>


<?php
$pid_session=$_SESSION['sessionPID'];
$query ="SELECT * FROM product where pid='$pid_session'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result) > 0) {
while($info=mysql_fetch_assoc($result)) {
?>

<table cellpadding="15px" border="2px" width="700px" height="10px" align="center">
<colgroup span=2 style="background:#FFFFFF"></colgroup>

<tr>
<th colspan="2"><h2 align="center" style="color:#0033FF">Order Placed<h2></th>
</tr>

<tr>
<td><b>Product Name</b></td><td><?php echo $info['pname']?></td>
</tr>

<tr>
<td><b>Product Price</b></td><td><?php echo $info['pprice']?></td>
</tr>

<tr>
<td><b>Product Model</b></td><td><?php echo $info['pmodel']?></td>
</tr>

<tr>
<td colspan="2" align="center">
<b><?php	if(mysql_query($query)){
	echo 'Successfully Placed order';
	}
	else{
	echo 'Failed!! Placed order';
	}
}?></b>
</td>
</tr>

<tr>
<td colspan="2" align="center"> <form action="../Frontend/index.php" method="get"><input type="submit" name="buy" value="ok" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"/> </form></td>
</tr>

</table>
<?php
  }
} 
?>
</div>


</body>
</html>
