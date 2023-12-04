

<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$db = new PDO("mysql:host=localhost;dbname=cacaotalk;charset=utf8", 'root', 'root');

$req = $db->prepare("SELECT id, username, password FROM accounts WHERE username = :username");
$req->execute([
    'username' => $username
]);

$account = $req->fetch(PDO::FETCH_OBJ);
print_r($account);

if ($account and password_verify($password, $account->password)) {
    echo "test";
    session_start();
    $_SESSION['userid'] = $account->id;
    $_SESSION['username'] = $account->username;

    header("location: cacaotalk\index.php");
}

echo "does this work?";
print_r($account);
echo password_verify($password, $account->password);

?>