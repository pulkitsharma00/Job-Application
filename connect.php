<?php
$firstname = $_POST['fisrtname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$sub_date = $_POST['sub_date'];
$linkedIn = $_POST['linkedIn'];
$drupal = $_POST['drupal'];
$position = $_POST['position'];
$Relocate = $_POST['Relocate'];
$City = $_POST['City'];
$starting_date = $_POST['starting_date'];
$org = $_POST['org'];
$cmmnt = $_POST['cmmnt'];

//Database connection

$conn = new mysqli('localhost','root','admin');
if($conn->connect_error){
	die('Connection Failed:'.$conn->connect_error);
}
else($stmt = $conn->prepar("insert into registration(firstname, lastname, email, phone, sub_date, linkedIn, drupal, position, Relocate, city,
starting_date, org, cmmnt)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute();
echo"Registration Sucessfull.....!";
$stmt->close();
$conn->close();



?>