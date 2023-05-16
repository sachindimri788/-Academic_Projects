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
  <title> Update Book Records</title> 
  
  <link rel="stylesheet" href="./css/viewStyle.css" />
  
 </head>

  <body>
   <h1> BOOK RECORD MANAGEMENT </h1>
   <form action="updation.php" method="post">
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
	   <td><?php echo $row['bookid'];?> <input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid'];?>"/>  </td>
	   <td><input type="text" name="title<?php echo $i;?>"  value="<?php echo $row['title'];?>"/> </td>
	   <td><input type="text" name="price<?php echo $i;?>"  value="<?php echo $row['price'];?>"/> </td>
	   <td><input type="text" name="author<?php echo $i;?>"  value="<?php echo $row['author'];?>"/></td>
	   </tr>
       <?php
		}
	  
	  
	  ?>
	  </table>
	  <input type="submit" value="update"/>
	  </form>
	  <a href="home.html"> HOME PAGE </a>
	  </body>
	  </html>
	  