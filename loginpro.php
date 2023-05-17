<?php
//ob_start(); // needs to be added here
//error_reporting(0);
include('./db/db.php');
// Date command
date_default_timezone_set('Asia/Kolkata');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $uname = $_POST['uname'];
    // $password = $_POST['pass'];
    $uname = 'demo';
    $pass = 'demo';

$sql = "SELECT * FROM user where pwd='".$password."' and username='".$uname."'" ;
    //$sql = "SELECT * FROM user WHERE pwd=? AND username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $pass, $uname); // Bind parameters
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $uname = $row["username"];
        $cname = $row["name"];

        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $cname;

        header("Location: ./user/index.php");
        exit();
    } else {
        header("Location: ./index.php");
    }
    //$conn->close();
}
?>
