<?php
require"database.php";

if(empty($_POST["name"])){
    die("name is required");
}
if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("valid email is required");
}
if(strlen($_POST["password"]) < 8){
    die("password must be at least 8 characters");
} 
if(!preg_match("/[a-z]/i",$_POST["password"])){
    die("password must contain atleast one letter");
}
if(!preg_match("/[0-9]/i",$_POST["password"])){
     die("password must contain atleast one number");
}
if($_POST["password"] !== $_POST["password_confirmation"])
die("passwords must match");
 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql)){
    die("SQL error:" . $mysqli->error);
}
$stmt->bind_param( "sss",$_POST["name"],
                        $_POST["email"],
                        $password_hash);
                        $stmt->execute();
 header("Location: login.php");
