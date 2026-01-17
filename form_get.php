<!DOCTYPE html>
<html lang="vi">
<head><title>Form GET</title></head>
<body>
    <form method="GET" action="">
        <input type="text" name="keyword" placeholder="Nhập từ khóa...">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        $key = htmlspecialchars($_GET['keyword']); // Xử lý an toàn hiển thị
        echo "<h3>Bạn đang tìm kiếm từ khóa: [$key]</h3>";
    }
    ?>
</body>
</html>
