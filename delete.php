<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Load existing users from JSON file
    $users = json_decode(file_get_contents('users.json'), true);

    // Find user by ID and remove from array
    foreach ($users as $key => $user) {
        if ($user['id'] === $id) {
            unset($users[$key]);
            break;
        }
    }

    // Save updated user list back to JSON file
    file_put_contents('users.json', json_encode(array_values($users), JSON_PRETTY_PRINT));

    // Redirect back to index.php
    header('Location: index.php');
    exit;
}