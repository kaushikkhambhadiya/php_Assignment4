<?php

require('mysqli_oop_connect.php');

//run the query using object oriented php
$q = "SELECT * from messages";
$r = $mysqli->query($q);

$mysqli->close();
?>
