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
<a href="index.php">Home</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback1.php">Feedback</a>
</div>
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo2.jpg" align=left height=128px width=135px>
<center><i>CROCHET SPOT</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a></div>
</div>
<div style="width:50%;height:75%; float:left;background-image:URL('img/bgfeed.jpg');">
<br><br><br><br><center><h1>Your Feedback  Matter... </h1></center>
<center><form name=f1 id=f1 method="post" action="">
<fieldset style="border-radius:7px;width:70%">
<legend><h2> Give Feedback..</h2></legend>
<br><input type=text name=txtmail placeholder="enter your email id..." required pattern="\D+"><br><br>
<input type=text name=txtnm id=txtnm placeholder="enter your username..." pattern="\D+" required ><br><br>


<input type=text name=txtbk id=txtbk rows="10" placeholder="enter your feedback..." pattern="\D+" required ><br><br>
<input type=submit value=submit class=submit name=btnsub><br><br>
</fieldset>
</form>
</center>



</div>
<div style="width:50%;height:75%; float:left;background-image:URL('img/fullblue.jpg');overflow:scroll;">
<img src="img/doct.png" height=30% width=20%  align=right>
<center>
<?php
{
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="select * from feedback";
mysql_query($q);
$result=mysql_query($q);
?>
<fieldset style="border-radius:5px;width:40%">
<legend><h1>Comments</h1></legend>
<table align=center   border=0px dotted #4d0026>
<?php
while($a=mysql_fetch_array($result))
{
$num=$a['username'];
$bk=$a['feedback'];
echo"<tr>";
echo"<td>&nbsp;<h3>$num</h3></td><td>&nbsp;</td>";
echo"</tr>";
echo"<tr>";
echo" <td>&nbsp;</td><td><h3>$bk</h3></td>";
echo"</tr>";
}
echo"</table>";

echo"</fieldset>";
mysql_close($cn);
}
?>
</center>
</div>

</div>
</body>
</html>
<?php
if(isset($_POST['btnsub']))
{
$em=$_POST['txtmail'];
$num=$_POST['txtnm'];

$bk=$_POST['txtbk'];

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="insert into feedback values('$em','$num','$bk')";
mysql_query($q);
echo "<script>alert('feedback submitted successfully')</script>";
mysql_close($cn);	
}
?>
