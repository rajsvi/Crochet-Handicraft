<?php
$pid=$_GET['txtpid'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="select * from showpcs where Productid='$pid'";
$rs=mysql_query($q);
$pid="";
$pnm="";
$pr="";
$qty="";

if($a=mysql_fetch_array($rs))
{
$pid=$a['Productid'];
$pnm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
}
?>
<?php
session_start();
if(!isset($_SESSION['username']))
{
}
$u=$_SESSION['username'];
?>
<html>
<body background="img/t1.jpg" alink=white vlink=white link=white>
<a href="index.php"><h1 align=left>BACK</h1></a>
<form name=f1 method=post >
<h1 align=center>BOOK HERE</h1>
<table align=center width=40% height=100% border=1 style="border-collapse:collapse;" cellpadding=10px bordercolor=black bgcolor=EEEBEB>
<tr>
<th align=right>Username</th>
<td><input type=text name=txtunm id=txtnm value="<?php echo $u; ?>" pattern="\D+" required ></td>
</tr>

<tr>
<th align=right>Product Id</th>
<td><input type=text name=txtpid value="<?php echo $pid; ?>"></td>
</tr>


<tr>
<th align=right>Product Name</th>
<td><input type=text name=txtpname value="<?php echo $pnm; ?>"></td>
</tr>

<tr>
<th align=right>Product Price</th>
<td><input type=text name=txtprice value="<?php echo $pr; ?>"></td>
</tr>

<tr>
<th align=right>Product Quantity</th>
<td><input type=text name=txtqty value="<?php echo $qty; ?>"></td>
</tr>

<tr>
<th align=right>Name</th>
<td><input type=text name=txtnm id=txtnm pattern="\D+" required></td>
</tr>
<tr>
<th align=right>Contact No</th>
<td><input type=text name=txtcon id=txtcon pattern="\d{10}" required></td>
</tr>
<tr>
<th align=right>Email ID</th>
<td><input type=text name=txtemail id=txtemail></td>
</tr>

<tr>
<th align=right>Address</th>
<td>
<textarea name=txtadd id=txtadd>
</textarea>
</td>
</tr>
<tr>
<tr>
<th align=right>City</th>
<td>
  <select name=lstcity id=lstcity>
<option value="">--select--</option>
<option value="satara">Satara</option>
<option value="pune">Pune</option>
<option value="Mumbai">Mumbai</option>
<option value="Sangli">Sangli</option>

</select>
</td>
</tr>
<tr>
<th align=right>Product Quantity</th>
<td><input type=text name=txtpq id=txtad></td>
</tr>

<tr>
<th align=right>Payment By</th>
<td>
  <select name=payment id=lstcity>
<option value="">--select--</option>
<option value="cash">Cash on Delivery</option>
<option value="debit card">By Debit Card</option>
<option value="credit card">By Credit Card</option>
<option value="paytm">By Paytm</option>

</select>
</td>
</tr>

<tr>
<th align=center colspan=2><input type=checkbox name=chkacc id=chkacc onclick="enablebtn()">I accept the terms and conditions.</th>
</tr>
<tr>
<th align=right><input type=submit name=btnsub value=submit ></th>
<td><input type=reset name=btnres value=Reset >
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['btnsub']))
{
$u2=$_POST['txtunm'];
$pid1=$_POST['txtpid'];
$pnm1=$_POST['txtpname'];
$pr1=$_POST['txtprice'];
$qty1=$_POST['txtqty'];
$un1=$_POST['txtnm'];
$co1=$_POST['txtcon'];
$em1=$_POST['txtemail'];
$add1=$_POST['txtadd'];
$ct1=$_POST['lstcity'];
$qt1=$_POST['txtpq'];
$py1=$_POST['payment'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="insert into showpcsbook values('$u2','$pid1','$pnm1','$pr1','$qty1','$un1','$co1','$em1','$add1','$ct1','$qt1','$py1')";
mysql_query($q);
mysql_close($cn);
echo "<script>alert( 'your booking order accept')</script>";
}
?>
