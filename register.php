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
<a href="index.php">Log In</a>
</div>
<font size=8 face='Algerian' color=#660066 >
<img src="img/logo2.jpg" align=left height=128px width=135px>
<center><i>CROCHET SPOT</i><br></center>
</font>
<div align=right style="float:center" >
<a href="www.facebook.com"><img src=img/fb.png height=30px width=30px></a><a href="www.twitter.com"><img src=img/twitter.png height=30px width=30px></a><a href="www.instagram.com"><img src=img/insta.png height=30px width=30px></a>
<a href="www.google.com"><img src=img/google.png height=30px width=30px></a></div>
</div>
<div style="width:70%;height:80%; float:left;background-image:URL('img/fullblue.jpg');">
<br>
<h1 align=center>Registration</h1><font size=150px>
<center>
<form method="" action="" name="reg_form" onsubmit="return validate()">    
        <fieldset>
                
<legend></legend>
 
<table align=center width=60%>               
<tr><td>Full Name
 </td>               
<td><input type="text" name="txtnm" placeholder="E.g. mayuri patil" class="input-responsive" required id="nme">

                
</td></tr>
<tr><td>Phone Number</td>               
<td>                
<input type="tel" name="txtcon" placeholder="E.g. 9876xxxxxx" class="input-responsive" required id="mob">

                
</td></tr>
<tr><td>Email</td><td>
                
<input type="email" name="txtmail" placeholder="E.g. abc@gmail.com" class="input-responsive" required id="email">

                
</td></tr>
<tr><td>Address</td>  <td>              
<textarea name="txtadd" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required id="adrs">
</textarea>

 </td></tr>               
<tr><td>Username</td><td>
                
<input type="text" name="txtuser" placeholder="" class="input-responsive" required id="email">

                
</td></tr>
<tr><td>Password</td><td>
                
<input type="password" name="txtpass" placeholder="" class="input-responsive" required id="email">

                
</td></tr>

<tr><td><input type="button" id="submit" name="btnsub" value="Submit" class="btn btn-primary">
</td>
<td><input type="button" id="submit" name="reset" value="Cancel" class="btn btn-primary">
</td></tr>            
</fieldset>
           
        
</table>    
    </form>
<script>
var nm = document.getElementById("nme");
var mb = document.getElementById("mob");
var eml = document.getElementById("email");
var adr = document.getElementById("adrs");
var submit = document.getElementById("submit");

nm.onkeypress=function(e){
    if(e.key.match("[a-zA-Z ]")) return true;
alert("enter only characters");
    return false;
}

mb.onpaste=function(e){
    return false;
}
mb.onkeypress=function(e){
    if(e.key.match("[0-9]")){
        if(mb.value.length == 10){
            return false;
        }
        return true;
    }
    return false;
}

submit.onclick=function(){
    submit.setAttribute("type","button");
    let em = email.value;
    let chkr = 0;
    if(em.match("[a-zA-Z0-9.]+[@][a-z]+[.][a-z]")){        
        eml.style.background="none";
    }else{
        eml.style.background="pink";
        chkr = 1;
    }

    if(mb.value.length < 10){
        mb.style.background="pink";
        chkr = 1;        
    }else{
        mb.style.background="none";
    }

    if(adr.value.trim().length < 10){
        alert("too short address minimun 10 letter");
        adr.style.background="pink";
        chkr =1;
    }else{
        adr.style.background = "none";
    }

    if(nm.value.trim() == ""){
        nm.style.background="pink";
        chkr = 1;        
    }else{
        nm.style.background="none";
    }
        
    
    if(chkr == 0){
        submit.setAttribute("type","submit");
        submit.click();
    }
}
</script>

</center>
</font>
</div>
<div style="width:30%;height:80%; float:left;background-image:URL('img/fullblue.jpg');">
<center>
<h1><font size=6  face='Monotype Corsiva'>
GALLERY</font></h1><hr>
</center>
<center>
<br>
<br>
<h3><a href="mgallery1.php">1.Show Peaces</a></h3><br><br>
<h3><a href="wgallery1.php">2.Animals</a></h3><br><br>
<h3><a href="bgallery1.php">3.Baby Special</a></h3><br><br>

</center>
</div>
<div style="width:100%;height:5%; float:left;background-color:white;">
<marquee>
Thank You...Visit Again..
</marquee>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['btnsub']))
{
$num=$_POST['txtnm'];
$cn=$_POST['txtcon'];

$mail=$_POST['txtmail'];
$add=$_POST['txtadd'];
$u=$_POST['txtuser'];
$p=$_POST['txtpass'];

$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="insert into register values('$num','$cn','$mail','$add','$u','$p')";
mysql_query($q);
echo"<script>alert('registration is successfully');</script>";
mysql_close($cn);
}
?>
