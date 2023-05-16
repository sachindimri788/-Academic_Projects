<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bookrecord');

$q="select * from student";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

?>
  
<!doctype html>
<html>
 <head>
  <title>   </title>
   <link rel="stylesheet" href="./css/viewStyle.css" />
 </head>
  
 <body>
  <h1> BOOK RECORD MANAGEMENT </H1>
  
  <form action="studentdeletion.php" method="post">
  <table id="viewtable">
   <tr>
    <th>Student Id</th>
	<th>Student Name</th>
	<th>Select to delete</th>
   </tr>
   
   <?php
   for($i=1;$i<=$num;$i++)
   {
	   $row=mysqli_fetch_array($result);
	   ?>
	   <tr>
	    <td><?php echo $row['sid']; ?> </td>
		<td><?php echo $row['sname']; ?> </td>
		
		<td><input type="checkbox" value="<?php echo $row['sid'];?>"  name="b<?php echo$i ?>"/> </td>
       </tr>
	   <?php
   }
   ?>
   <tr>
   <td colspan="5"><input type="submit" value="DELETE"/></td>
   </tr>
   </table>
   </form>
   </body>
   </html>
		
   