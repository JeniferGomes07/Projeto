<?php
$username = 'root';
$password = 'admin';

try {
  $conn = new PDO('mysql:host=localhost;dbname=banco', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>