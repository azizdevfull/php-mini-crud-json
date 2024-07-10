<?php
// Load existing users from JSON file
$users = json_decode(file_get_contents('users.json'), true);
var_dump($users);
die();
// Check if decoding was successful
if ($users === null) {
    echo "Error decoding JSON file.";
    exit;
}

// Display each user with edit and delete links
foreach ($users as $user) {
    echo "<li>{$user['username']} ";
    echo "<a href='edit.php?id={$user['id']}'>Edit</a> ";
    echo "<a href='delete.php?id={$user['id']}'>Delete</a></li>";
}