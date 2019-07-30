<?php


// Database Connection Constrains
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'gallery_db');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if ($conn) {
//     echo "true";
// }