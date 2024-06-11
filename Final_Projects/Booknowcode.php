<?php
$a=$_POST['email'];
$b=$_POST['pass'];
$c=$_POST['name'];
$d=$_POST['mob'];
$e=$_POST['location'];
$f=$_POST['date'];
$g=$_POST['time'];
$h=$_POST['room'];

$conn=mysqli_connect("localhost","root","","project");
$ins="INSERT INTO book(email,pass,name,mob,location,date,time,room)
 VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";

 if(mysqli_query($conn,$ins)){
    echo "<script>window.location.href='Booknow.php';alert('data store')</script>";
    //  header("location:Booknow.php");
 }
 else{
    echo"not inserted";
 }

?>