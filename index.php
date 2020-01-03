<?php

session_start();

function generateID($length) {
    $ret = '';

    for ($i = 0; $i < $length; $i++){
        $ret .= rand(0, 9);
    }

    return $ret;
}
$id = $_SESSION['id'] ?? generateID(16);
$_SESSION['id'] = $id;

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
