<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    // Load existing users from JSON file
    $users = json_decode(file_get_contents('users.json'), true);

    // Add new user
    $users[] = ['id' => uniqid(), 'username' => $username];

    // Save updated user list back to JSON file
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    // Redirect back to index.php
    header('Location: index.php');
    exit;
}