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
<div style="width:100%;height:75%; float:left;background-image:URL('img/fullblue.jpg');">
<br><center><h1>Welcome Crochet Spot </h1></center>
<center><form name=f1 id=f1 method="post" action="">
<fieldset style="border-radius:7px;width:70%">
<legend><h2>Admin Login Here</h2></legend>
<br><input type=text name=txtnm id=txtnm placeholder="enter your name" pattern="\D+" required ><br><br>
<input type=password name=txtps id=txtps placeholder="enter your password" required ><br><br>
<input type=submit value=login class=button name=btnlog><br><br>
</fieldset>
</form>
</center>

<br>


</div>
</div>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
if(isset($_POST["btnlog"]))
{
$u=$_POST["txtnm"];
$p=$_POST["txtps"];
$q="select * from admin where adminnm='$u' and password='$p'";
$result=mysql_query($q);
if($a=mysql_fetch_array($result))
{
$_SESSION['username']='$u';
echo"<script>window.location='product.php'</script>";
}
else
{
echo"<script>alert('Incorrect Username or Password')</script>";
mysql_close($cn);
}
}
?>