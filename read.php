<?php
// JSON faylidan mavjud foydalanuvchilarni yuklash
$users = json_decode(file_get_contents('users.json'), true);
// Dekodlash muvaffaqiyatli bo'lganligini tekshirish
if ($users === null) {
    echo "Error decoding JSON file.";
    exit;
}
// Har bir foydalanuvchini tahrirlash va oʻchirish link-i bilan koʻrsating
foreach ($users as $user) {
    echo "<li>{$user['username']} ";
    echo "<a href='edit.php?id={$user['id']}'>Edit</a> ";
    echo "<a href='delete.php?id={$user['id']}'>Delete</a></li>";
}