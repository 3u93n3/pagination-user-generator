<?php
require_once "dbc.php";

include "pageHead.php";
include "generateUser.inc.php";
echo "<a href='index.php'>Home</a>";
echo "<br />";
echo "<button id='btn'>Generate user</button> <br>";
echo "<p id=display></p>";


include "pageFoot.php";