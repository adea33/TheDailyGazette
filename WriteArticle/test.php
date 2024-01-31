<?php
require_once 'dbConnectNews.php';

$db = new dbConnectNews();
$conn = $db->connectDB();

if ($conn instanceof PDO) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}
?>