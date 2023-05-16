<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bookrecord');

$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!doctype html>
<html>
 <head> 
  <title> View Book Records</title> 
  
  <link rel="stylesheet" href="./css/viewStyle.css" />
  
 </head>

  <body>
   <h1> BOOK RECORD MANAGEMENT </h1>
   <table id="viewtable">
    <tr>
      <th>BOOK ID</th>
	  <th> TITLE </th>
	  <th>PRICE</th>
	  <th>AUTHOR</th>
	  </tr>
	  <?php
	    for($i=1;$i<=$num;$i++) 
	    {
			$row=mysqli_fetch_array($result); 
		?>
       <tr>
	   <td><?php echo $row['bookid'];?></td>
	   <td><?php echo $row['title'];?> </td>
	   <td><?php echo $row['price'];?> </td>
	   <td><?php echo $row['author'];?></td>
	   </tr>
       <?php
		}
	  
	  
	  ?>
	  </table>
	  
	  <a href="home.html"> HOME PAGE </a>
	  </body>
	  </html>
	  