<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bom_egypt";

$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    $mypassword = md5($mypassword);
    $sql = "SELECT id FROM user WHERE Username = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
       header('location:myProfile.php');
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}