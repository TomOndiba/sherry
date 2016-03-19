<?php
$link = mysqli_connect("sql7.freemysqlhosting.net", "sql7111401", "GmslwgEXpK", "sql7111401");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>