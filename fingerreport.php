<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.print
{

margin-left:600px;
}
input[type=button]
{
height:10%;
width:120px;
font-size:15px;
}
.bt
{
padding:10px;
border-radius:5px;
background-color:#990000;
color:white;
font-weight:bold;

}

input[type=submit]
{
height:35px;
width:120px;
font-size:15px;
align:center;
}

#img
{
opacity:0.3;
}
img:hover
{
opacity:1.0;
border-radius:80px;
}

</style>

</head>
<script>
function openNav()
{
document.getElementById("mysidenav").style.width="250px";
}

function closeNav()
{
document.getElementById("mysidenav").style.width="0px";
}
</script>

<body>
<div style="width:100%;height:100%;">
<div style="left:10px;top:20px;width:100%;height:20%;background-image:URL('img/bg1.jpg');vsapce=300">
<span style="font-size:30px;cursor:pointer" onClick="openNav()">&#9776;</span>
<div id="mysidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
<a href="admin.php">Admin Login</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback.php">Feedback</a>
</div>
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo2.jpg" align=left height=130px width=135px>
<center><i>CROCHET SPOT</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a></div>
</div>
<div  style="width:100%;height:20%;vsapce=300 ">
<hr><h3><center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="animalreport.php">Animal </a>&nbsp;&nbsp;
<a href="rukhwatreport.php">Wedding Special</a>&nbsp;
<a href="fingerreport.php">Finger Puppet</a>&nbsp;
<a href="jwelleryreport.php">Jwellery</a>&nbsp;
<a href="babyreport.php">Baby</a>&nbsp;
<a href="kidsreport.php">Kids</a>&nbsp;
<a href="ladiesreport.php">ladies special</a>&nbsp;
<a href="showreport.php">Show Peaces</a>&nbsp;
<a href="enquiryreport.php">Enquiry</a>&nbsp;
<a href="cancelreport.php">Cancel Order</a>&nbsp;



</center></h3><hr>
<h1 align=center>Animals REPORT </h1>
<table border=1px solid black align=center cellspacing=2px cellpadding=10px>
<tr>
<th>Product Id</th>
<th>Product Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Name</th>
<th>Contact No</th>
<th>Email Id</th>
<th>Address</th>
<th>City</th>
<th>Product Quantity</th>
<th>Payment</th>
</tr>

<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="select * from puppetbook";
$rs=mysql_query($q);
while($a=mysql_fetch_array($rs))
{
$pid=$a['Productid'];
$pnm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantiy'];
$nm=$a['Name'];
$con=$a['Contact No'];
$em=$a['Email Id'];
$add=$a['Address'];
$ci=$a['City'];
$pq=$a['Product Quantity'];
$pb=$a['Payment'];

echo "
<tr>
<td>$pid</td>
<td>$pnm</td>
<td>$pr</td>
<td>$qty</td>
<td>$nm</td>
<td>$con</td>
<td>$em</td>
<td>$add</td>
<td>$ci</td>
<td>$pq</td>
<td>$pb</td>
</tr>";

}
?>
</table>
<br><br><form>
<input type=submit value=Print name=btnclick class=print Onclick="window.print();">
</form>

</div>

</div>
</body>
</html>