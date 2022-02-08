<html>
<head>
<link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
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
<div id=profilee style="background-image:URL('img/ls.jpg');">
<center><table hspace=5px vspace=0px>
<tr>
<td>
<a href="animal.php"><img src=animal/panda3.jpg height=130px width=140px></a>
</td>

<td>
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
<a href="kids.php"><img src=kids/kid3.jpg height=130px width=130px></a>
</td>
<td>
<a href="ladies.php"><img src=ladies/p1.jpg height=130px width=130px></a>
</td>
<td>
<a href="homedecor.php"><img src=homedecor/toran1.jpg height=130px width=130px></a>
</td>


</tr>
<tr>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;Animals</td>
<td id=profile>&nbsp;&nbsp;&nbsp;Wedding Special</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finger puppet</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jwellery</td>

<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Baby</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids</td>
<td id=profile>&nbsp;&nbsp;&nbsp;Ladies Special</td>
<td id=profile>&nbsp;&nbsp;&nbsp;&nbsp;Show peaces</td>
</tr>
<tr>
<td> <a href="aniupdatedisplay.php"><input type=button  value=Update ></a></td>
<td> &nbsp;&nbsp;&nbsp;<a href="rupdate.php"><input type=button  value=Update ></a></td>
<td> &nbsp;&nbsp;<a href="ppetupdate.php"><input type=button  value=Update ></a></td>
<td> &nbsp;&nbsp;<a href="jweleryupdate.php"><input type=button  value=Update ></a></td>
<td> &nbsp;&nbsp;<a href="babyupdate.php"><input type=button  value=Update ></a></td>
<td> &nbsp;&nbsp;<a href="kidupdate.php"><input type=button  value=Update ></a></td>
<td>&nbsp;&nbsp; <a href="ladiesupdate.php"><input type=button  value=Update ></a></td>
<td> &nbsp;&nbsp;<a href="showupdate.php"><input type=button  value=Update ></a></td>

</tr>


</table>



</center>

  </div>
</div>
</body>
</html>