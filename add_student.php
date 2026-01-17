<?php require 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head><title>Thêm sinh viên</title></head>
<body>
    <h2>Thêm mới Sinh viên</h2>
    <form method="POST" action="">
        Họ tên: <input type="text" name="fullname" required><br><br>
        Mã SV: <input type="text" name="student_code" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit" name="btn_add">Thêm mới</button>
    </form>

    <?php
    if (isset($_POST['btn_add'])) {
        // 1. Lấy dữ liệu
        $name = $_POST['fullname'];
        $code = $_POST['student_code'];
        $email = $_POST['email'];

        // 2. Viết câu lệnh INSERT với Prepared Statement (?)
        $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";

        try {
            $stmt = $conn->prepare($sql);
            
            // 3. Thực thi (execute) và truyền tham số
            // Cách này tự động xử lý các ký tự đặc biệt như dấu nháy đơn '
            $stmt->execute([$name, $code, $email]);

            echo "<p style='color:green'>Thêm sinh viên thành công!</p>";
        } catch (PDOException $e) {
            echo "Lỗi thêm mới: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>