<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Lets Get To Know You</h1>

<br>

<form>
What is your First Name? 
<input type="text" name="Fname">

<br>
<br>


What is your Last Name? 
<input type="text" name="Fname">
</form>

<br>


What is your Major? 
<input type="text" name="Fname">
</form>

<br>
<br>


What is your Expected Graduation Year? 
<input type="text" name="Fname">

<br>
<br>


What is your Student Classification? 
<input type="text" name="Fname">

<br>

<p>Do you live On or Off campus?</p>
<select>
	<option value="">Select your option</option>
    <option value="hurr">On Campus</option>
    <option value="hurr">Off Campus</option>
</select>

</form>


<p>What is your Social Media Preference?</p>
<ul>
  
</ul>

<head>
<style>

table {
 
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Social Media</th>
    <th>Username</th>
    
  </tr>
  <tr>
    <td>LinkedIn</td>
    <td><input type="text" name="Fname"></td>
    
  </tr>
  <tr>
    <td>Instagram</td>
    <td><input type="text" name="Fname"></td>
    
  </tr>
  <tr>
    <td>Twitter</td>
    <td><input type="text" name="Fname"></td>
    
  </tr>
  <tr>
    <td>Facebook</td>
    <td><input type="text" name="Fname"></td>
    
  </tr>
  <tr>
    <td>Snapchat</td>
    <td><input type="text" name="Fname"></td>
    
  </tr>
 
    
  </tr>
</table>

</body>
</html>



<br>
<br>

<input type="submit" value="Submit">

</body>
</html>



