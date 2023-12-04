<?php
$username = $_POST['username'] ?? false;
$msg = $_POST['msg'] ?? false;

if ($username and $msg){

$db = new PDO("mysql:host=localhost;dbname=cacaotalk;charset=utf8", 'root', 'root');

$req = $db->prepare("INSERT INTO messages (username, msg) VALUES (:username, :msg)");
$req->execute([
    "username" => $username,
    "msg" => $msg
    
]);

header("Location: home.php"); 
} else {
    echo "All fields required";
}

?>