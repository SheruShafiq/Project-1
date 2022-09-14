<?php
session_start();
$servername = "127.0.0.1";
$username = 'cryptostalkers';
$password = 'LWCGkjvBcGDtR2n@';
$_SESSION['matches'] = 0;
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

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT username FROM users";
    $sqlp = "SELECT password FROM users";
    foreach ($conn->query($sql) as $row) {
        $array[] = $row['username'];
    }
    foreach ($conn->query($sqlp) as $rowp) {
        $arrayp[] = $rowp['password'];
    }
    for ($i = 0; $i < count($array); $i++) { 
        if ($user == $array[$i] && $pass == $arrayp[$i]) {
            $_SESSION['matches'] = $_SESSION['matches'] + 1;
        } 
    }
} else {
    echo "fuck";
}

if ($_SESSION['matches'] == 0) {
    $_SESSION['Error'] = 'Invalid Username or Password';
    header("Location: login.php");
} elseif ($_SESSION['matches'] > 0) {
    header("Location: fullindex.php");
}


?>
