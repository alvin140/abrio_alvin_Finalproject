<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="/css/style.css">
</head>

<body style="background-image: url('./waa.png');background-repeat:no-repeat;background-size:cover">  
<?php $con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "burger"); ?>
<br><br>
<div class= "registration">
<form action='register'>
<h1>REGISTRATION</h1>
<table>
<input type="text" name="Student_ID" placeholder="Student ID" required>
<input type="text" name="First_Name" placeholder="Firstname" required>
<input type="text" name="Last_Name" placeholder="Lastname" required>
<input type="text" name="Middle_Initial" placeholder="Middle_Initial"
required>
<input type="text" name="Course" placeholder="Course" required>
<input type="text" name="Year_Level" placeholder="YearLevel" required>
<input type="text" name="Username" placeholder="Username" required>
<input type="password" name="Password" placeholder="Password" required>
<td colspan="4">
<button>Register</button>
</table>
</form>
</div>
<div class= "login">
<h2>Login</h2>
<form action='login'>
<table>
<tr>
<td><input type="text" name="Username" placeholder="Username" required>
</td>
<td><input type="password" name="Password" placeholder="Password" required>
</td>
</tr><tr>
<td colspan="4">
<button>Login</button>
</td>
</table>
</form>
</div>
</body>
</html>