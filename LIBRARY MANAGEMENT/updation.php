<?php
$size=sizeof($_POST);
$records=$size/4;

echo "$records";

for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
    
	
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	
	
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	
	
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
}


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bookrecord');
for($i=1;$i<=$records;$i++)
{
$q="update book SET title='$title[$i]', price=$price[$i],author='$author[$i]' where bookid=$bookid[$i]";
mysqli_query($con,$q);
}
mysqli_close($con);
?>


 <!doctype html>
 <html>
  <head>
   <title>UPDATION</title>
  </head>
 <body>
  <h1>BOOK RECORD MANAGEMENT </h1>
  <p> <?php  
			echo "update successfully";
      ?>
  </p>
  <a href="updateForm.php">Click here for more updation</a> <br>
  <a href="home.html">HOME</a>
  
 </body>
</html> 