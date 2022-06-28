<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "burger"); 

echo"<pre>";
print_r($_POST);
echo"</pre>";
$_POST[('Student_ID')]= $_GET[('Student_ID')];
$_POST[('First_Name')]= $_GET[('First_Name')];
$_POST[('Last_Name')]= $_GET[('Last_Name')];
$_POST[('Middle_Initial')]= $_GET[('Middle_Initial')];
$_POST[('Course')]= $_GET[('Course')];
$_POST[('Year_Level')]= $_GET[('Year_Level')];
$_POST[('Username')]= $_GET[('Username')];
$_POST[('Password')]= $_GET[('Password')];
$query = mysqli_query($con,"INSERT INTO pizza (Student_ID, First_Name, 
Last_Name,Middle_Initial, Course,Year_Level, Username, Password) VALUES
('$_POST[Student_ID]','$_POST[First_Name]','$_POST[Last_Name]','$_POST[Middle_Initial]','$_POST[Course]','
$_POST[Year_Level]','$_POST[Username]','$_POST[Password]')") or 
die(mysql_error());
if(!$query){
echo "Alert! Student not added.";
}
else{
echo "Student successfully added!";
}
echo "<a href='http://127.0.0.1:8000/'><input type='button' value='Back'/></a>";
?>
