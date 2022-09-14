<?php
session_start();
$servername = "127.0.0.1";
$username = 'cryptostalkers';
$password = 'LWCGkjvBcGDtR2n@';

try {
    $conn = new PDO("mysql:host=localhost;dbname=cryptostalkers", $username, $password) or die('Unable to connect');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e . getMessage();   
}
function getMessage() 
{
    "fuck";
}


$name = $_POST['username'];
$password =  $_POST['password'];
$email  = $_POST['email'];

$sql = "
INSERT INTO `users` (`username`, `password`, `email`) VALUES
('$name', '$password', '$email')";

$stmt = $conn->prepare($sql);
$stmt->execute();

    $_SESSION['matches'] = 0;
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT username FROM users";
    foreach ($conn->query($sql) as $row) {
        $array[] = $row['username'];
    }
   
    $_SESSION['Success'] = 'Account Created Succesfully, Sign in to continue';    
    header("Location: signup.php");
       


?>
