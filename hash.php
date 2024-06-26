<?php
// Password to be hashed
$password = 'braham';

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//
echo  $hashed_password;
?>