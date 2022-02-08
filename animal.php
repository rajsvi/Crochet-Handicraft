<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.pr
{
float:left;
padding:10px 10px;
border:solid 1px grey;
border-radius:5px;
margin:10px 10px;
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
.bu
{
background-color:grey;
margin:10px 5px;
fint-size:10px;
color:white;
padding:5px 20px;
text-decoration:none;
border-radius:5px;
}
.bu:hover
{
background-color:maroon;
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
<a href="index.php">Home</a>
<a href="about.php">About Us</a>
<a href="service.php">Services</a>
<a href="feedback.php">Feedback</a>
</div>
<font size=4 face='Algerian' color=#660066 >
<img src="img/logo2.jpg" align=left height=130px width=145px>
<center>
<a href="product2.php"><img style="float:right;margin-right:30px;" src=img/user1.png height=50px width=50px></a>

<?php
session_start();
if(!isset($_SESSION['username']))
{
echo header("location:index.php");
}
?>
<h1>Welcome 
<?php
echo $_SESSION['username'];
echo " To CROCHET SPOT";
?>
</h1>
</center>

</font>
</div>
<div id=profilee style="background-image:URL('img/ls.jpg');">
<center><table hspace=5px vspace=0px><br>
<tr>
<td>
<a href="animal.php"><img src=animal/panda3.jpg height=130px width=140px></a>
</td>

<td align=center>
<a href="rukhwat.php"><img src=rukhwat/r11.jpg height=130px width=155px></a>
</td>
<td>
<a href="finger.php"><img src=finger/puppet3.png height=130px width=130px></a>
</td>
<td>
<a href="jwellery.php"><img src=jwellery/j18.png height=130px width=130px></a>
</td>
<td>
<a href="baby.php"><img src=baby/bshwal1.jpg height=130px width=130px></a>
</td>
<td>
<a href="kid.php"><img src=kids/kid3.jpg height=130px width=130px></a>
</td>
<td>
<a href="ladies.php"><img src=ladies/p1.jpg height=130px width=130px></a>
</td>
<td>
<a href="home.php"><img src=homedecor/toran1.jpg height=130px width=130px></a>
</td>


</tr>
<tr>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Animals</font></td>
<td id=profile>&nbsp;&nbsp;&nbsp;<font size=5>Wedding Special</font></td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Finger puppet</font></td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Jwellery</font></td>

<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Baby</font></td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Kids</font></td>
<td id=profile>&nbsp;&nbsp;&nbsp;<font size=5>Ladies Special</font></td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;<font size=5>Show peaces</font></td>
</tr>

</table>



</center>
</div>
<div id=product>



<div id=content style="left:10px;top:20px;width:100%;height:100%;overflow:scroll;" ><br>
<?php
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="select * from animal";
$rs=mysql_query($q);
$i=0;
while($a=mysql_fetch_array($rs))
{
$pid=$a['Productid'];
$pnm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];

echo "<div class=pr><img class=im src=animal/$im width=150 height=170>
<br>ProductNo=$pid<br>ProductName=$pnm<br>Price=$pr<br>Quantity=$qty<br><br>
<a class=bu href=animalbuy.php?txtpid=$pid>Buy</a></div>";
$i++;
if($i==6)
{
$i=0;
echo "<br style='clear:left'>";
}
}
?>
</div>
</div>
</div>
</body>
</html>