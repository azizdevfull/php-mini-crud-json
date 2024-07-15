<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $newUsername = $_POST['username'];
    // JSON faylidan mavjud foydalanuvchilarni olamiz 
    $users = json_decode(file_get_contents('users.json'), true);
    // ID bo'yicha foydalanuvchini topamiz va foydalanuvchi username-ini yangilimiz
    foreach ($users as $key => $user) {
        if ($user['id'] === $id) {
            $users[$key]['username'] = $newUsername;
            break;
        }
    }
    // Yangilangan foydalanuvchilar roʻyxatini yana JSON fayliga saqlimiza 
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
    // index.php ga qaytamiz 
    header('Location: index.php');
    exit;
}