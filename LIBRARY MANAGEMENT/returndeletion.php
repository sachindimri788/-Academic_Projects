<?php
 $size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
 $index="b".$j;
 if(isset($_POST[$index]))
   $bid[$i]=$_POST[$index];
 else
  $i--;	 
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bookrecord');

for($k=1;$k<=$size;$k++)
{$q="delete from issuebook where bookid=".$bid[$k];
 mysqli_query($con,$q);
}

mysqli_close($con);
?>
 
 
 <!doctype html>
 <html>
  <head>
   <title>DELETION</title>
  </head>
 <body>
  <h1>BOOK RECORD MANAGEMENT </h1>
  <p> <?php  
			echo "return successfully";
      ?>
  </p>

  <a href="home.html">HOME</a>
  
 </body>
</html> 