<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $newUsername = $_POST['username'];

    // Load existing users from JSON file
    $users = json_decode(file_get_contents('users.json'), true);

    // Find user by ID and update username
    foreach ($users as $key => $user) {
        if ($user['id'] === $id) {
            $users[$key]['username'] = $newUsername;
            break;
        }
    }

    // Save updated user list back to JSON file
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    // Redirect back to index.php
    header('Location: index.php');
    exit;
}