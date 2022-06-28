<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style> th{
    color: rgb(255, 255, 255);
    padding: 5px;
    background-color: rgb(0, 0, 0);
    font-size: 20px;
    }
    body{ 
    background-image: url("https://wallpaperaccess.com/full/187161.jpg");
    }
    td{
    color: rgb(255, 255, 255);
    padding: 5px;
    background-color: rgb(14, 1, 1);
    font-size: 20px;
    }
    table{
    margin: auto;

    }</style>

</head>
<body>
<?php 
 $con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "burger");
$query = mysqli_query($con, "SELECT * FROM pizza") or 
die(mysqli_error());
?>
<table border=1>
<tr>
<th>Student ID</th>
<th>Last name</th>
<th>First name</th>
<th>Course</th>
<th>Year level</th>
<th>Username</th>
<th>Password</th>
<th>User Level</th>
<th>Status</th>
<th>Action</th>
<th>Action</th>
</tr>
<?php
while($row = mysqli_fetch_array($query)){
echo "
<tr>
<td>$row[Student_ID]</td>
<td>$row[First_Name]</td>
<td>$row[Last_Name]</td>
<td>$row[Course]</td>
<td>$row[Year_Level]</td>
<td>$row[Username]</td>
<td>$row[Password]</td>
<td>$row[User_level]</td>
<td>$row[status]</td>
<td align='center'><a style='text-decoration:none;' 
href='delete/?id=$row[Student_ID]'>X</a></td>
<td align='center'><a style='text-decoration:none;' 
href='update.php/?id=$row[Student_ID]'>Update</a></td>
</tr>
";
} 
?>
<button class= "logout"><a href="index.php">Logout</a></button>
</body>
</html>