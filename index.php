<?php
require_once "dbc.php";
$conn = conn();
include "pageHead.php";

echo "<a href='generateUser.php'>Generate User</a>";

include "pagination.php";

include "pageFoot.php";