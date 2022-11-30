<?php

$username = $_POST['username'];
$password = $_POST['password'];



// Checks if username entry is empty
if (strlen($username) == 0) {
    header("Location: /auth" . "?q=084");
    return;
}

// Checks if password entry is empty
if (strlen($password) == 0) {
    header("Location: /auth" . "?c=094");
    return;
}




$CorrectCred = False;

// TO-DO

// Connect to DB

// Get password where username matches the entered username

// Filters and compares the entered password



if ($CorrectCred) {
    echo("Logged in!");
}

else {
    header("Location: /auth" . "?c=093");
}


?>