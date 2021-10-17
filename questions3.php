<?php 

require_once "unifriends/config.php";
session_start();
$username = $password = $confirm_password = $firstname = $lastname = $major = $gradyear = "";
$username_err = $password_err = $confirm_password_err = ""; 
$id = "";
$error = "";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: unifriends/login.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
//check the form has no blanks.

$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$major = trim($_POST["major"]);
$gradyear = trim($_POST["gradyear"]);
$location = trim($_POST["location"]);
$_SESSION["id"] = $id;
if($firstname == "")
{$error = " Please enter a firstname.";
  }
elseif($lastname == "")
{$error = " Please enter a lastname.";}
elseif($major == "")
{$error = " Please enter a major.";}
elseif($gradyear == "")
{$error = " Please enter a year.";}
elseif($location == "")
{$error = " Please enter a location.";}
else
{
if(empty($error)){
    $sql = "INSERT INTO users_info values (?,?,?,?,?,?);";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssis", $param_firstname, $param_lastname,$param_major, $param_gradyear, $param_id,$param_location);
    
    // Set parameters
    $param_firstname = $firstname;
    $param_lastname = $lastname; 
    $param_major = $major;
    $param_gradyear = $gradyear;
    $param_id = $id;
    $param_location = $location;
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        header("location: unifriends/welcome.php");
    } else{
        echo "Oops! Something went wrong. Please try again later.";
        echo var_dump($stmt);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
}
}


    
}

?>
<!DOCTYPE html>


<html>
<head>
<title>Welcome</title>
</head>
<body>
<div class="row">
<?php
if ($error != "") 
{
    echo "<span style='color:red'>$error</span>";
}
?>
</div>    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group row">
    <label for="firstname" class="col-4 col-form-label">First Name</label> 
    <div class="col-8">
      <input id="firstname" name="firstname" placeholder="First Name" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="lastname" class="col-4 col-form-label">Last Name</label> 
    <div class="col-8">
      <input id="lastname" name="lastname" placeholder="Last Name" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="gradyear" class="col-4 col-form-label">Expected Graduation Year</label> 
    <div class="col-8">
      <input id="gradyear" name="gradyear" placeholder="Expected Graduation Year" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="major" class="col-4 col-form-label">Major</label> 
    <div class="col-8">
      <select id="major" name="major" class="custom-select">
        <option value="Information Systems & Technology">Information Systems & Technology</option>
        <option value="Business Administration">Business Administration</option>
        <option value="English">English</option>
        <option value="Accounting">Accounting</option>
        <option value="Economics">Economics</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Biology">Biology</option>
        <option value="Political Science">Political Science</option>
        <option value="Physics">Physics</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="location" class="col-4 col-form-label">Location</label> 
    <div class="col-8">
      <input id="location" name="location" placeholder="Location" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>
