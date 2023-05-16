<?php
 $sid=$_POST['sid'];
 $bookid=$_POST['bookid'];
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'bookrecord');
 
 $q="INSERT INTO issuebook (sid,bookid) values('$sid','$bookid')";
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
	    if($status==1) echo"BOOK ISSUED"; 
	    else echo "failed" 
	   ?> 
	</p>
	
	<a href="home.html"> HOME PAGE </a>
   </body>
 </html>