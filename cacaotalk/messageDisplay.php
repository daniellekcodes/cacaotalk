<?php
$msgUsername = $messages->username;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if ($username == $msgUsername) {

    $color = rand(0, 360);
?>
    <div class="mainuser sender">
        <div class="icon" style="background-color:hsla(<?= $color ?>, 100%, 50%, 1);"><?= substr($messages->username, 0, 2) ?></div>
        <div class="nametext">
            <div class="displayname"><?= $messages->username ?></div>
            <div class="textbox">
                <div class="text"><?= $messages->msg ?></div>
                <div class="date"><?= $messages->date_created ?></div>
            </div>

        </div>
    </div>

<?php
} else {
    $color = rand(0, 360);
?>
    <div class="subuser sender">
        <div class="icon" style="background-color:hsla(<?= $color ?>, 100%, 50%, 1);"><?= substr($messages->username, 0, 2) ?></div>
        <div class="nametext">
            <div class="displayname"><?= $messages->username ?></div>
            <div class="textbox">
                <div class="text"><?= $messages->msg ?></div>
                <div class="date"><?= $messages->date_created ?></div>
            </div>
        </div>
    </div>
<?php
}
?>