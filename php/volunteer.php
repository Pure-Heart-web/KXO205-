<?php
// 引入数据库连接
include('../includes/db.php'); // 确保路径正确

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //打印POST内容，查看表单数据
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // 获取表单数据
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $event = isset($_POST['event']) ? htmlspecialchars($_POST['event']) : null;
    $timeslot = isset($_POST['timeslot']) ? htmlspecialchars($_POST['timeslot']) : null;

    // 数据验证
    if (empty($name) || empty($email) || empty($event) || empty($timeslot)) {
        echo "所有字段都是必填的！";
    } else {
        try {
            // 插入志愿者数据到数据库
            $sql = "INSERT INTO volunteers (name, email, event, timeslot) VALUES (:name, :email, :event, :timeslot)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'email' => $email, 'event' => $event, 'timeslot' => $timeslot]);

            echo "感谢您的报名！我们会尽快与您联系。";
        } catch (PDOException $e) {
            echo "插入数据失败：" . $e->getMessage();
        }
    }
}
?>
