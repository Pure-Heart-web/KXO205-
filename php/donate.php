<!-- 示例： donate.php -->
<?php
include('.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $donorName = htmlspecialchars($_POST['donorName']);
    $amount = htmlspecialchars($_POST['amount']);
    $cause = htmlspecialchars($_POST['cause']); // 捐赠目的

    // 插入捐赠数据到数据库
    $sql = "INSERT INTO donations (donor_name, amount, cause) VALUES (:donor_name, :amount, :cause)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['donor_name' => $donorName, 'amount' => $amount, 'cause' => $cause]);

    echo "感谢您的捐赠！";
}
?>

