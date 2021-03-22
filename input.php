<?php
require('mysqli_oop_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username']) || empty($_POST['message'])) {
        echo "<p class='text-center text-danger'>*Both fields are require</p>";
    } else {
        $username = $_POST['username'];
        $message = $_POST['message'];
        $q = "INSERT INTO messages VALUES(? , ?)";

        $st = $mysqli->prepare($q);

        $st->bind_param('ss', $username, $message);

        $username = strip_tags($_POST['username']);
        $messsage = strip_tags($_POST['message']);

        $st->execute();

        if ($st->affected_rows == 1) {
            echo "<p class='text-center text-success'>Message has been posted successfully.</p>";
        } else {
            echo '<p class="text-center text-danger">' . $st->error . '</p>';
        }
        $mysqli->close();
    }
}
?>