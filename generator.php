<?php
require_once "dbc.php";
include "generateUser.inc.php";

$conn = conn();
$user = user();

$stmt = $conn->query("INSERT INTO users01 (fn, ln, c, p) 
VALUES ('$user->fName', '$user->lName', '$user->country', '$user->pass')");

$rows = $conn->query("SELECT * FROM users01")->rowCount();

echo "List have $rows user/s";

