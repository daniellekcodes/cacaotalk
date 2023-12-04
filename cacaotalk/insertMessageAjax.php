<?php
$username = $_POST['username'] ?? false;
$msg = $_POST['msg'] ?? false;

if ($username and $msg) {

    $db = new PDO("mysql:host=localhost;dbname=cacaotalk;charset=utf8", 'root', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $req = $db->prepare("SELECT id FROM accounts WHERE username = ?");
    $req->execute([$username]);
    $account_id = $req->fetch()->id;

    $req = $db->prepare("INSERT INTO messages (account_id, msg) VALUES (:account_id, :msg)");
    $req->execute([
        "account_id" => $account_id,
        "msg" => $msg

    ]);
    //generate html for the new message

    $last = $db->lastInsertId();

    $response = $db->prepare("SELECT 
                                a.username, 
                                m.msg, 
                                m.date_created
                            FROM accounts a
                            INNER JOIN messages m
                            ON a.id = m.account_id 
                            WHERE m.id = ?");

    $response->execute([$last]);

    $messages = $response->fetch();

    include 'messageDisplay.php';
}
