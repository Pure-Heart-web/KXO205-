<?php
// 数据库连接配置
$db_host = '127.0.0.1'; // MySQL 主机
$db_user = 'root';      // MySQL 用户名
$db_password = 'root';  // MySQL 密码
$db_db = 'charity_platform'; // 数据库名称
$db_port = 8889;        // MySQL 端口（MAMP 默认是 8889）

// 使用 mysqli 连接数据库
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno . '<br>';
    echo 'Error: ' . $mysqli->connect_error . '<br>';
    exit();
} else {
    echo 'Success: A proper connection to MySQL was made using MySQLi.<br>';
    echo 'Host information: ' . $mysqli->host_info . '<br>';
    echo 'Protocol version: ' . $mysqli->protocol_version . '<br>';
}

// 使用 PDO 连接数据库
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_db;port=$db_port", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Success: A proper connection to MySQL was made using PDO.<br>';
} catch (PDOException $e) {
    die("数据库连接失败：" . $e->getMessage());
}

// 关闭 MySQLi 连接（如果需要）
$mysqli->close();
?>
