<?php
//Database Connection 
$servername = "localhost";
$username = "ecommerceiq_Admin";
$password = "Pacideniro3838!!";
$databasename = "ecommerceiq_ClientData";

$connection = mysqli_connect($servername, $username, $password, $databasename);

if($connection == false){
	die("Connection failed: ".mysqli_connect_error());
}

$User_Mail = $_POST["User_Mail"];
$User_PW = $_POST["User_PW"];
$Phonenumber = $_POST["Phonenumber"];
$birthday = $_POST["birthday"];

$query = "insert into User (User_Mail, User_PW, Phonenumber, birthday)
VALUES ('$User_Mail', '$User_PW', '$Phonenumber', 'birthday');";

mysqli_query($connection, $query);

if($query){
	echo "Registration Complete";
}
else{
	echo "Error: " . mysqli_error($connection); 
}
?>
