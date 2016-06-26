<?php
$link = mysqli_connect("sql5.freemysqlhosting.net", "sql5125470", "cWpaIFWe5C", "sql5125470");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
