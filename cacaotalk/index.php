<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="scrollDown.js"></script>
    <script defer src="ajax.js"></script>
    <title>Cacaotalk</title>
    <style>
        html {
            --bg-color: black;
            --container-bg-color: rgb(66, 66, 66);
            --form-bg-color: rgb(33, 33, 33);
            --text-color: white;
            --text-standout: rgb(255, 98, 0);
            --border-radius: 0.5rem;
        }

        body {
            overflow: hidden;
            box-sizing: border-box;
        }

        .main {
            width: 100vh;
            margin: 0 auto;
            background-color: var(--container-bg-color);
            color: var(--text-color);
            font-size: 14px;

        }

        .chatbox {
            overflow: scroll;
            overflow-x: hidden;
            display: inline-block;
            width: 100%;
            height: 80vh;
            justify-content: space-between;
        }

        .messagebox {
            width: 100%;
            background-color: black;
            height: 10vh;
        }

        form {
            padding-left: 20px;
            padding-right: 20px;
            /* background-color: white; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            gap: 10px;
        }

        #username {
            width: 20%;
            height: 60%;

        }

        #msg {
            width: 65%;
            height: 60%;

        }

        button {
            width: 15%;
            background-color: orange;
            height: 60%;
        }


        .subuser {
            flex-direction: row-reverse;

        }

        .sender {
            margin: 30px;
            gap: 5px;
            display: flex;

        }

        .icon {
            outline: 0.5px solid rgb(66, 66, 66);
            border-radius: 0.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            padding: 10px;
            background-color: lightblue;


        }

        .nametext {
            display: flex;
            flex-direction: column;
        }

        .mainuser .displayname {
            display: flex;
            justify-content: left;

        }

        .subuser .displayname {
            display: flex;
            justify-content: right;

        }

        .subuser .textbox {
            display: flex;
            flex-direction: row-reverse;
        }

        .mainuser .textbox {
            display: flex;
            flex-direction: row;
        }

        .text {
            background-color: var(--form-bg-color);
            padding: 8px;
            border-radius: 0.5rem;
        }

        .date {
            font-size: 10px;
            display: flex;
            align-items: end;

        }
    </style>
</head>

<body>
    <div class="main">

        <div class="chatbox" id="chatbox">
            <?php
            $db = new PDO("mysql:host=localhost;dbname=cacaotalk;charset=utf8", 'root', 'root');
            $response = $db->query("SELECT 
                                    a.username, 
                                    m.msg, 
                                    m.date_created
                                FROM accounts a
                                INNER JOIN messages m
                                ON a.id = m.account_id");

            while ($messages = $response->fetch(PDO::FETCH_OBJ)) {
                include 'messageDisplay.php';
            };
            ?>
        </div>

        <div class="messagebox">
            <form action="" method="POST" id="formy">
                <input type="text" id="username" name="username" value="<?= $_SESSION['username'] ?>" disabled>
                <input type="text" id="msg" name="msg" placeholder="message">
                <button type="submit">Send</button>
            </form>
        </div>

    </div>
</body>

</html>