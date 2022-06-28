<link rel="stylesheet" href="/css/style.css">
<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "burger"); 
$Username = $_GET['Username']; 
$Password = $_GET['Password']; 
$Username = stripcslashes($Username); 
$Password = stripcslashes($Password); 
$Username = mysqli_real_escape_string($con, $Username); 
$Password = mysqli_real_escape_string($con, $Password); 
$sql = "select * from pizza where Username = '$Username' and 
Password = '$Password'"; 
$result = mysqli_query($con, $sql)or die( mysqli_error($con)); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$count = mysqli_num_rows($result); 
if($count == 1){ 
echo "<h1><center> Login successful </center></h1>"; 
echo "<a href='alvin'><input type='button' value=' --->  Please Click to here continue'/></a>";
} 
else{ 
echo "<h1> Login failed. Invalid username or password.</h1>"; 
echo "<a href='./index.php'><input type='button' value='Back'/></a>";
} 
?>
