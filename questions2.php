<?php
// Initialize the session
require_once "unifriends/config.php";
session_start();
$username = $password = $confirm_password = $fname = $lname = $major = $gyear = $syear = "";
$username_err = $password_err = $confirm_password_err = ""; 
$error = "Please enter a FirstName.";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: unifriends/login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
//check the form has no blanks.

  $error = "Please enter a FirstName.";
  

}



?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ padding: 20px; }
    </style>
</head>
<body>
 <p><?php print($error);?></p>
<div class = "wrapper">
<span>
    <?php 
    echo $error;
    ?>
    </span>
<h1>Lets Get To Know You</h1>

<br>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<Label>What is your First Name?</Label> 
<input type="text" name="Fname">

</div>
<br>
<br>


What is your Last Name? 
<input type="text" name="Lname">
</form>

<br>


What is your Major? 
<input type="text" name="Major">
</form>

<br>
<br>
What is your Expected Graduation Year? 
<input type="text" name="GYear">

<br>
<br>


What is your Student Classification? 
<input type="text" name="Syear">

<br>

<p>Do you live On or Off campus?</p>
<select name = "campus">
	<option>Select your option</option>
    <option value=1>On Campus</option>
    <option value=0>Off Campus</option>
</select>



<p>What is your Social Media Preference?</p>
<ul>
  
</ul>
<body>
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


<table>
  <tr>
    <th>Social Media</th>
    <th>Username</th>
    
  </tr>
  <tr>
    <td>LinkedIn</td>
    <td><input type="text" name="linkedin"></td>
    
  </tr>
  <tr>
    <td>Instagram</td>
    <td><input type="text" name="instagram"></td>
    
  </tr>
  <tr>
    <td>Twitter</td>
    <td><input type="text" name="twitter"></td>
    
  </tr>
  <tr>
    <td>Facebook</td>
    <td><input type="text" name="facebook"></td>
    
  </tr>
  <tr>
    <td>Snapchat</td>
    <td><input type="text" name="snapchat"></td>
    
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="text" name="phone"></td>
    
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email"></td>
    
  </tr>
  </tr>
</table>
   
</body>
</html>



<br>
<br>

<input type="submit" class="btn btn-primary" value="Submit">
 <input type="reset" class="btn btn-secondary ml-2" value="Reset">
</form>
</body>
</html>



