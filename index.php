<?php

session_start();

$id = $_COOKIE['PHPSESSID'];

$count = ($_SESSION['visits'] ?? 0) + 1;
$_SESSION['visits'] = $count;

?>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <h1><?php print $id; ?></h1>
        <h2><?php print $count; ?></h2>
    </body>
</html>
