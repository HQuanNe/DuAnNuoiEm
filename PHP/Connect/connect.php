<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duannuoiem_db";

// Tạo kết nối bằng MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối CSDL thất bại: " . $conn->connect_error);
}

// Thiết lập font chữ UTF-8 để không bị lỗi tiếng Việt
$conn->set_charset("utf8mb4");
?>
