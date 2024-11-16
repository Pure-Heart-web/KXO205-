<?php
// 引入数据库连接
include('db.php');

// 获取所有捐赠记录
$donationsQuery = "SELECT * FROM donations";
$donationsStmt = $pdo->query($donationsQuery);

// 获取所有志愿者报名记录
$volunteersQuery = "SELECT * FROM volunteers";
$volunteersStmt = $pdo->query($volunteersQuery);
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理员后台</title>
</head>
<body>
    <h1>管理员后台</h1>

    <h2>捐赠记录</h2>
    <table border="1">
        <thead>
            <tr>
                <th>捐赠者</th>
                <th>捐赠金额</th>
                <th>捐赠目的</th>
                <th>时间</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $donationsStmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['donor_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['amount']); ?></td>
                    <td><?php echo htmlspecialchars($row['cause']); ?></td>
                    <td><?php echo htmlspecialchars($row['donation_time']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>志愿者报名记录</h2>
    <table border="1">
        <thead>
            <tr>
                <th>姓名</th>
                <th>电子邮件</th>
                <th>活动</th>
                <th>时间段</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $volunteersStmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['event']); ?></td>
                    <td><?php echo htmlspecialchars($row['timeslot']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>
