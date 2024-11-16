<?php
// 数据库连接配置
$host = 'localhost';    // 数据库主机
$dbname = 'charity_platform'; // 数据库名称
$username = 'root';     // 数据库用户名（默认是root）
$password = 'root';         // 数据库密码（默认是空）

// 尝试连接到数据库
try {
    // 使用 PDO 连接到 MySQL 数据库
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // 设置 PDO 错误模式为异常
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "数据库连接成功！";  // 如果连接成功，输出成功信息
} catch (PDOException $e) {
    // 如果连接失败，捕获异常并显示错误信息
    echo "数据库连接失败: " . $e->getMessage();
}
?>
