<!DOCTYPE html>
<html lang="vi">
<head><title>Form POST</title></head>
<body>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
        <input type="password" name="password" placeholder="Mật khẩu" required><br>
        <button type="submit">Đăng ký</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = htmlspecialchars($_POST['username']);
        echo "<h3>Đã nhận thông tin của [$user]</h3>";
    }
    ?>
</body>
</html>
