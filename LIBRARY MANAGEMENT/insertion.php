<?php
 $title=$_POST['title'];
 $price=$_POST['price'];
 $author=$_POST['author'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'bookrecord');
 
 $q="INSERT INTO book (title,price,author) values('$title',$price,'$author')";
 $status=mysqli_query($con,$q);
 mysqli_close($con);
 ?>
 
 <!DOCTYPE html>
 <html>
  <head>
    <title>Insertion</title>
  </head>
   <body>
    <h1>BOOK RECORD MANAGEMENT </h1>
	<p> 
	   <?php 
	    if($status==1) echo"Record inserted"; 
	    else echo "Insertion failed" 
	   ?> 
	</p>
	
	<a href="insertForm.php"> CLICK HERE TO INSERT MORE </a><BR>
	<a href="home.html"> HOME PAGE </a>
   </body>
 </html>