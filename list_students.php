<?php require 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Danh sách sinh viên</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Danh sách Sinh viên</h2>
    
    <?php
    // 1. Viết câu lệnh SELECT
    $sql = "SELECT * FROM students";
    
    // 2. Chuẩn bị và thực thi
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    // 3. Lấy dữ liệu về dạng mảng
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Mã SV</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $sv): ?>
            <tr>
                <td><?php echo $sv['id']; ?></td>
                <td><?php echo htmlspecialchars($sv['fullname']); ?></td>
                <td><?php echo htmlspecialchars($sv['student_code']); ?></td>
                <td><?php echo htmlspecialchars($sv['email']); ?></td>
                <td>
                    <a href="#">Sửa</a> | <a href="#">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>