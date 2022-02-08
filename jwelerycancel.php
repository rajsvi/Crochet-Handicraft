<?php
$pid=$_GET['txtpid'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="select * from jwelerybook where Productid='$pid'";
$rs=mysql_query($q);
$pid="";
$pnm="";
$pr="";
$qty="";

$nm="";
$co="";
$em="";
$add="";
$ct="";
$pqt="";
$py="";
if($a=mysql_fetch_array($rs))
{
$pid=$a['Productid'];
$pnm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantiy'];
$nm=$a['Name'];
$co=$a['Contact No'];
$em=$a['Email Id'];
$add=$a['Address'];
$ct=$a['City'];
$pqt=$a['Product Quantity'];
$py=$a['Payment'];

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
<body style=background-image:URL('img/pl.jpg');>
<a href="orderdisplay.php"><h2 align=left>BACK</h2></a>
<form name=f1 method=post >
<h1 align=center>ORDER CANCEL HERE</h1>
<table align=center width=50% height=100% border=1 style="border-collapse:collapse" cellpadding=10px bordercolor=black>
<tr>
<th align=right>Username</th>
<td><input type=text name=txtnm id=txtnm value="<?php echo $u; ?>" ></td>
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
<td><input type=text name=txtnm value="<?php echo $nm; ?>" ></td>
</tr>
<tr>
<th align=right>Contact No</th>
<td><input type=text name=txtcon value="<?php echo $co; ?>"></td>
</tr>
<tr>
<th align=right>Email ID</th>
<td><input type=text name=txtemail value="<?php echo $em; ?>"></td>
</tr>

<tr>
<th align=right>Address</th>
<td>
<input type=text name=txtadd value="<?php echo $add; ?>">
</td>
</tr>
<tr>
<tr>
<th align=right>City</th>
<td>
  <input type=text name=lstcity value="<?php echo $ct; ?>">
</td>
</tr>
<tr>
<th align=right>Product Quantity</th>
<td><input type=text name=txtpq value="<?php echo $pqt; ?>"></td>
</tr>

<tr>
<th align=right>Payment By</th>
<td>
  <input type=text name=payment value="<?php echo $py; ?>">
</td>
</tr>

<tr>
<th colspan=2><input type=submit name=btnok value="cancel order"></th>
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['btnok']))
{
$u2=$_POST['txtnm'];
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
$q="insert into cancel values('$u2','$pid1','$pnm1','$pr1','$qty1','$un1','$co1','$em1','$add1','$ct1','$qt1','$py1')";
mysql_query($q);
$q1="delete from jwelerybook where Productid='$pid1' and  username='$u'";
mysql_query($q1);

mysql_close($cn);
echo "<script>alert( 'your booking order cancel sucessfully')</script>";
}
?>
