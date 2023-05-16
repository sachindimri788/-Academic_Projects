<!doctype html>

<html>
<head>
<title>Insetion Form</title>
</head>

<body>
<h1> BOOK RECORD MANAGEMENT</h1>

<form action="insertion.php" method="post">
<table>
 <tr>
   <th>Title</th>
   <td><input type="text" name="title" required /></td>
 </tr>
 <tr>
    <th> Price </th>
     <td><input type="text"	name="price" /></td>
</tr>	 
<tr>
  <th> Author </th>
   <td> <input type="text" name="author" required /></td>
   
</tr>
<tr>
<th></th>
<td><input type="submit" value="insert"/> </td>
</tr>
</table>
</form>
</body>
</html>
    