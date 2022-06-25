<!DOCTYPE html>
<html>
<head>
<title>REGISTER @HSV</title>
<?php include_once 'header2.php';?>
</head>
<body>
<div class="wrapper3">
<table>
   <h1>Register to compete</h1>
   <form action="insert.php" method="post">
   <tr><tbody>
      <td class="name"><label for="fname">First Name: </label></td>
      <td><input type="text" name="fname" id="fname"></td>
   </tr>
   <tr>
      <td  class="name"><label for="lname">Last Name: </label></td>
      <td><input type="text" name="lname" id="lname"></td>
   </tr>
   <tr>
      <td  class="name"><label for="club">DoB: </label></td>
      <td><input type="date" name="dob" id="dob"></td>
   </tr>
   <tr>
      <td  class="name"><label for="club">Club: </label></td>
      <td><input type="text" name="club" id="club"></td>
   </tr>
   <tr>
      <td  class="name"><label for="club">Gender: </label></td>
      <td><input type="text" name="sex" id="sex"></td>
   </tr>
   <tr>
      <td  class="name"><label for="club">Event: </label></td>
      <td><input type="text" name="event" id="event"></td>
   </tr>
      <td></td>
      <td><input type="submit" value="REGISTER"></td>
</tbody>
</table>
</form>
</div>
</body>
</html>
