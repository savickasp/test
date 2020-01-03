<?php
function generateID($leght) {
    $ret = '';
    for ($i = 0; $i < $leght; $i++){
        $ret .= rand(0, 9);
    }
    return $ret;
}

if(!isset($_COOKIE['userID'])) {
    setcookie('userID', generateID(16), time() + 3600);
}

$count = ($_COOKIE['visits'] ?? 0) + 1;
setcookie('visits', $count, time() + 3600);

$h1 = $_COOKIE['userID'];
$h2 = $count;
?>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>
