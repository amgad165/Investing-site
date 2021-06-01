<?php
include_once 'database-php.php';
 ?>
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
  $query = "SELECT * FROM Admin WHERE username = 'admin' ";
  $run_query = mysqli_query($conn, $query);

  if(mysqli_num_rows($run_query) > 0){
  $error_msg = "Error: This User Alreaddy Exist";
  }
  else {
    // code...
    $query = "INSERT INTO Admin(username,password)
     VALUES('admin','admin')";
     $run_query = mysqli_query($conn, $query);

  }

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"select * from Admin where password='$password' AND username='$username'");
$row=mysqli_fetch_assoc($query);
$ID=$row['ID'];
$login_password=$row['pass'];

$_SESSION['ID']=$ID;


$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: admin.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
}
}
?>
