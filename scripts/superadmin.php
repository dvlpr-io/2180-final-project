<?php
require_once "dbconnect.php";

$cleanedfname = filter_var('Super', FILTER_SANITIZE_SPECIAL_CHARS);
$cleanedlname = filter_var('User', FILTER_SANITIZE_SPECIAL_CHARS);
$cleanedemail= filter_var('admin@project2.com', FILTER_VALIDATE_EMAIL);
$pass = password_hash('password123', PASSWORD_DEFAULT);
$cleanedrole = filter_var('admin', FILTER_SANITIZE_SPECIAL_CHARS);
$datejoined = date('Y/m/d H:i:s');

$prep = $conn -> prepare("INSERT INTO Users (firstname, lastname, password, email, role, created_at) 
VALUES ( :firstname, :lastname, :pass, :email, :role, :created_at)");

$prep->bindParam(':firstname', $cleanedfname);
$prep->bindParam(':lastname', $cleanedlname);
$prep->bindParam(':pass', $pass);
$prep->bindParam(':email', $cleanedemail);
$prep->bindParam(':role', $cleanedrole);
$prep->bindParam(':created_at', $datejoined);

if ($prep -> execute()){
    echo "Inserted";
}




