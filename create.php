<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    // JSON faylidan mavjud foydalanuvchilarni olamiz
    $users = json_decode(file_get_contents('users.json'), true);
    // yangi user qoshish
    $users[] = ['id' => uniqid(), 'username' => $username];
    // Yangilangan foydalanuvchilar roʻyxatini yana JSON fayliga saqlimiza
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
    // index.php ga qaytish
    header('Location: index.php');
    exit;
}