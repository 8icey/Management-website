<?php
$password = "amine";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

echo $hashedPassword;
