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
<meta charset="utf-8">
<style type="text/css">
h1,h2,h3,h4,h5,h6 {
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
}
body,td,th {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-style: inherit;
	font-weight: 300;
	color: #000000;
	font-size: 18px;
}
h1 {
	color: #BB1114;
}
h2 {
	color: #000000;
}
h3 {
	color: #000000;
}
h4 {
	color: #000000;
}
h5 {
	color: #000000;
}
h6 {
	color: #000000;
}
</style>
</head>
<body text="#BB1114">
<div style="text-align: center;">&nbsp;
<h1><img src="../../Users/Stephanie/Downloads/Uni (1).png" width="400" height="400" alt=""/>
<p> Let's Get To Know You</h1>
<br>

<form>
  <p>What is your First Name?  </p>
  <p><br>

    <input type="text" name="Fname">
   
	 <br>
    <br>
    
    
  What is your Last Name?</p>
   <br>
  <input type="text" name="Fname">
 
  
</form>

<p><br>
  
  
What is your Major?</p>
<p> <br>
  <input type="text" name="Fname">
  </form>
  
  <br>
  <br>
  
  
What is your Expected Graduation Year?
<p> <br>
  <input type="text" name="Fname">
  
  <br>
  <br>
  
  
What is your Student Classification?
<p> <br>
  <input type="text" name="Fname">
  
  <br>
<p>Do you live On or Off campus?</p>
<select>
	<option value="">Select your option</option>
    <option value="hurr">On Campus</option>
    <option value="hurr">Off Campus</option>
</select>

</form>


<p>Link your social media </p>
<ul>
<span dir="ltr">
  <p><br>
  </p>
  </span>
  
</ul>

<head>
<p>
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
  <body><div style="text-align: center;">&nbsp;

 </p>

<table style="margin-left:auto;margin-right:auto;">
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



