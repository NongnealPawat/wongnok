<?php
$servername = "localhost"; // ชื่อ server ในการเชื่อมต่อ database
$username = "root"; // ชื่อ username ในการเชื่อมต่อ database
$password = ""; // ชื่อ รหัสผ่าน ในการเชื่อมต่อ database

try {
  $conn = new PDO("mysql:host=$servername;dbname=food_app", $username, $password); // ทำการเชื่อมต่อไปยังฐานข้อมูล
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage(); // เมื่อเกิด error ในการเชื่อมต่อฐานข้อมูล จะแสดงผลไปยังหน้าจอว่าเกิด error อะไร
}
