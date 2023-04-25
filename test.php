<?php
$start_time = microtime(true);

$password = "mysecurepassword";

$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

$end_time = microtime(true);

$duration_ms = ($end_time - $start_time) * 1000;

echo "Hashing took $duration_ms ms";
?>