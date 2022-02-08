<?php
$pid=$_GET['txtpid'];
$cn=mysql_connect("localhost","root");
$db=mysql_select_db("crochet",$cn);
$q="delete from rukhwat where Productid='$pid'";
mysql_query($q);
mysql_close($cn);
echo"<script>alert('record deleted');
window.location='rdelete.php';</script>";
?>
