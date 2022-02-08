<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
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
<div id=header style="left:10px;top:20px;width:100%;height:20%;background-image:URL('clgimg/bg1.jpg');vsapce=300">
<center>
<h2>Our Team Provide Two Types Of Exchange Policy</h2>
<ul>
<li>Via Social Link</li>
<br>
<li>Visit To Shop</li>
</ul>
</center>
</div>



<div id=sidebar1 style="height:80%;width:30%;background-image:URL('images/b43.jpg');float:left;border:4px dotted blue">
<center>
<br>
<img src="img/contactimg.jpg" height=150px width=200px><br><br>
<font size=6 face='Modern No. 20' color=#000033>
Exchange Policy
</font><br>
<font size=4 face='Lucida Bright' color=black>
<b>Customer contact to shop for exchange product from social-sites.</b>
<ul>
<li>E-mail</li>
<li>Phone Contact</li>
</ul>
Note: Bill is mandatory when employee visit your home.

</font>
</center>
</div>


<div id=sidebar2 style="height:80%;width:30%;background-image:URL('images/b43.jpg');float:right;border:4px dotted blue">
<center>
<br>
<img src="img/ex2.jpeg" height=150px width=200px><br><br>
<font size=6 face='Modern No. 20' color=#000033>
Exchange Policy
</font>
<br><br>
<font size=4 face='Lucida Bright' color=black>
<b>Customer visit to the shop and exhange the Product.</b><br><br><br>
<b>Note: Bill is mandatory while exchanging product.</b>
<br><br>
</font>
</center>
</div>

<center>
<div id=middel style="height:80%;width:37%;background-image:URL('img/ls.jpg');border:4px dotted blue">
<form name=f1 class=rfrm method="post" enctype="multipart/form-data"><br>
<br><br>

<table width=60% height=78% style="border-collapse:collapse" cellpadding=10px border=2px">

<tr>

<th align=center>Name</th>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=txtnm id=txtnm placeholder="Enter Name Here" pattern="\D+" required></td>
</tr>

<tr><th align=center>Bill No</th>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type=tel name=txtbill id=txttel placeholder="Enter bill no Here"></td>
</tr>



<tr>
<th align=center>ContactNo</th>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type=tel name=txtcon id=txttel placeholder="Enter Contact Here" pattern="\d{10}" required></td>
</tr>

<tr>
<th align=center>Email ID</th>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=txtemi id=txtemi placeholder="Enter Email Here"></td>
</tr>

<tr>
<th align=center>Reason of return product</th>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;<textarea name=txtre id=txtre placeholder="Enter Reason Here"></textarea>
</td>
</tr>


<tr>
<th align=center>Where do you need the service?</th>
<td>
 &nbsp;&nbsp;&nbsp;&nbsp;<select name=lstservice id=lstadd>
<option value="">--select--</option>
<option value=Doorstep>Doorstep</option>
<option value=Service Center>Service Center</option>
</select>
</td>
</tr>

<tr>
<td colspan=2><h6 align=center><input type=submit name=btnsub value="Submit" class="btn1"></h6></td>
</tr>
</center>

</form>
</table>
</div>


</div>
</body>
</html>
<?php
if(isset($_POST['btnsub']))
{
$nm=$_POST['txtnm'];
$bil=$_POST['txtbill'];

$con=$_POST['txtcon'];
$em=$_POST['txtemi'];
$re=$_POST['txtre'];
$ser=$_POST['lstservice'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="insert into enquiry values('$nm','$bil','$con','$em','$re','$ser')";
mysql_query($q);
echo "<script>alert('Your enquiry has been delivered to us,we will get back to you shortly')</script>";
mysql_close($cn);	
}
?>

