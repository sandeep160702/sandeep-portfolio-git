<?php 
$con=mysqli_connect("127.0.0.1","root","") or die("connection error");
mysqli_select_db($con,"portfolio_queries") or die("database selection error");
$a=$_REQUEST["name"];
$b=$_REQUEST["email"];
$c=$_REQUEST["work"];
$d=$_SESSION["message"];

mysqli_query($con,"insert into clients
(name,email,work,message) 
values('$a','$b','$c','$d')");   
header("location:Index.html");    
?>