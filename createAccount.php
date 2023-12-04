
<?php
//VALIDATION 

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$passwordConfirm = $_REQUEST['passwordConfirm'];

$usernameValid = false;

if (preg_match("/^[a-z0-9_\-]{2,30}$/i", $username)) {
    $usernameValid = true;
} else {
    echo "Invalid username format";
}


$emailValid = false;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailValid = true;
} else {
    echo "Invalid email format";
}


$passwordValid = false;
if (preg_match("/^[a-z0-9!@#$%\^&*]{6,30}$/i", $password)) {
    $passwordValid = true;
} else {
    echo "Invalid password format";
}

$passwordConfirmValid = false;
if ($passwordConfirm === $password) {
    $passwordConfirmValid = true;
} else {
    echo "Password does not match";
}

if ($usernameValid and $emailValid and $passwordValid and $passwordConfirmValid) {

    $password = password_hash($password, PASSWORD_DEFAULT);
    $db = new PDO("mysql:host=localhost;dbname=cacaotalk;charset=utf8", 'root', 'root');

    $req = $db->prepare("INSERT INTO accounts (username, email, password) VALUES (:username, :email, :password)");
    $req->execute([
        'username' => $username,
        'email' => $email,
        'password' => $password

    ]);

    header("Location: signIn.php");
}

?>