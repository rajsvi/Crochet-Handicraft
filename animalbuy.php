<html>
<head>
<link rel="stylesheet" href="styles.css">
<style>
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

#lt
{
width:40%;
height:60%;
float:left;
margin:30px 30px;

}
#rt
{
width:40%;
height:60%;
background-color:pink;
float:right;
padding:10px 10px;
border:solid 2px black;
border-radius:5px;
margin: 60px 60px;
font-weight:bold;

}
.button 
{
border:30%;
border-spacing:30%;
font-family:Arial;
text-transform:uppercase;
width:15%;
height:7%;
border-radius:20px;
}
a
{
float:center;
}
</style>
</head>
<body>
<div style="height:10%; width:100%; background-color:pink">
<h1 align=center> Animals</h1>
</div>
<div style="height:90%; width:100%;">

<?php
$pid=$_GET['txtpid'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="select * from animal where Productid='$pid'";
$rs=mysql_query($q);
if($a=mysql_fetch_array($rs))
{
$pid=$a['Productid'];
$pnm=$a['Productname'];
$pr=$a['Productprice'];
$qty=$a['Productquantity'];
$im=$a['Image'];
echo "<div id=rt>ProductId=$pid<br><br><br>ProductName=$pnm<br><br><br>Price=$pr<br><br><br>
Quantity=$qty<br><br><br>";
}
mysql_close($cn);
?>
<div>
<?php
echo "<a class=bu href=animalbook.php?txtpid=$pid>BOOK</a>";
?>
</div>

</div>
<div id=lt>
<?php
echo "<img src=animal/$im height=500px width=450px border=1px>";
?>
</div>

</div>




</body>
</html>