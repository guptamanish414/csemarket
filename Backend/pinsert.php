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
<h3><center>Add Product</center></h3>

<form action="insert.php" name="P1" method="post" enctype="multipart/form-data">
<input type="hidden" name="action" value="insert"/>
<div id="left">
<table cellpadding="15px" border="2px" width="700px" height="10px" align="center">
<colgroup span=2 style="background:#FFFFFF"></colgroup>

<tr>
<th colspan="2"><h2 align="center" style="color:#0033FF">Add Product Detail<h2></th>
</tr>

<tr>
<td><b>Product Name</b></td><td><input type="text" name="name"/></td>
</tr>

<tr>
<td><b>Product Price</b></td><td><input type="text" name="price"/></td>
</tr>

<tr>
<td><b>Product Model</b></td><td><input type="text" name="model"/></td>
</tr>

<tr>
<td><b>Product Description</b></td><td><input type="text" name="description"/></td>
</tr>

<tr>
<td><b>Product Category</b></td>
<td>
<select name="category"><option>Laptops</option><option>Hard Drives</option><option>Memory Cards</option><option>Pen Drives</option><option>Printers</option><option>Routers</option><option>Keyboards</option><option>Mouse</option><option>Monitors</option><option>Joysticks</option><option>PC Spekers</option><option>Laptop Cooling Pads</option></select>
</td>
</tr>

<tr>
<td><b>Product Manufacturer</b></td>
<td>
<select name="manufacture"><option>Sony</option><option>Samsung</option><option>HP</option><option>LG</option><option>Dell</option><option>Seagate</option><option>Phillips</option><option>Zebronics</option></select>
</td>
</tr>

<tr>
<td><b>Product Stock</b></td>
<td><input type="radio" name="stock" value="yes"/>Yes<input type="radio"  name="stock" value="no"/>No</td>
</tr>

<tr>
<td><b>Product Image 1</td>
<td>
<input type="file" name="img1"/>
</td>
</tr>

<tr>
<td><b>Product Image 2</b></td>
<td>
<input type="file" name="img2"/>
</td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="insert" style="border:0px solid #000000; border-radius:5px; background-color:#269FB2; height:25px; color:#FFFFFF;"/></td>
</tr>

</table>
</div>
</form>

</body>
</html>
