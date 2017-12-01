<?php
include('connection.php');
if(isset($_REQUEST['action']) && $_REQUEST['action']=='insert')
{
//$ProductId=$_REQUEST["id"];
$ProductName=$_REQUEST["name"];
$ProductPrice=$_REQUEST["price"];
$ProductModel=$_REQUEST["model"];
$ProductDescription=$_REQUEST["description"];
$ProductCategory=$_REQUEST["category"];
$ProductManufacturer=$_REQUEST["manufacture"];
$ProductStock=$_REQUEST["stock"];
$ProductImage1='';
$ProductImage2='';

$uploaddir = 'uploads/';
$uploadfile = basename($_FILES['img1']['name']);
$uploadfile_path=$uploaddir . $uploadfile;
if (move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile_path)) {
$ProductImage1=$uploadfile;
}

$uploaddir = 'uploads/';
$uploadfile = basename($_FILES['img2']['name']);
$uploadfile_path=$uploaddir . $uploadfile;
if (move_uploaded_file($_FILES['img2']['tmp_name'], $uploadfile_path)){
$ProductImage2=$uploadfile;
}

$query ="insert into product(pname, pprice, pmodel, pdesc, pcat, pmfg, pstock, pimg1, pimg2) values('$ProductName','$ProductPrice','$ProductModel','$ProductDescription','$ProductCategory','$ProductManufacturer','$ProductStock','$ProductImage1','$ProductImage2')";

	if(mysql_query($query)){
	echo 'Successfully Inserted';
	?>
	<script>
	window.location='pview.php';
	</script>
	<?php }
	else{
	echo 'Failed!! Not Inserted';
	}
}
?>