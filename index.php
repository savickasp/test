<?php

session_start();
$_COOKIE['PHPSESSID'] ?? header('location:index.php');
$id = $_COOKIE['PHPSESSID'];

$count = ($_SESSION['visits'] ?? -1) + 1;
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
