<?php

require_once "db.php";
require_once "functions.php";

$value = CheckyThingy("123");

if ($value === true) {
    echo "The value is a valid integer.";
} else {
    echo "The value is not a valid integer.";
}

/*$user = getUserById($pdo, 1);
if ($user === false) {
    echo "User not found.";
} else {
    echo "ID: " . $user["id"] . "<br>" . "Username: " . $user["username"] . "<br>" . "Age: " . $user["age"] . "<br>";
}*/
    
?>