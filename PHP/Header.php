<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web từ thiện</title>
</head>
<body>
    <header>
    <div class="top-bar">
            <div class="logo">
                <a href="index.php"><h2>Mầm Non Mai Động</h2></a>
            </div>
            
            <div class="search-box">
                <form action="search.php" method="GET">
                    <input type="text" name="keyword" placeholder="Tìm kiếm vật phẩm...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="right-actions">
                <div class="quick-icons">
                    <!-- <a href="donate.php" class="icon-btn">
                        <span class="icon"><i class="fa-solid fa-arrow-up-short-wide"></i></span>
                        <span class="tooltip">Quyên góp sản phẩm</span>
                    </a> -->
                    <a href="receive.php" class="icon-btn">
                        <span class="icon"><i class="fa-solid fa-arrow-down-wide-short"></i></span>
                        <span class="tooltip">Nhận sản phẩm</span>
                    </a>
                </div>

                <div class="auth-links">
                    <a href="index.php?type=Login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Đăng nhập</a> | 
                    <a href="index.php?type=Register"><i class="fa-solid fa-person-circle-plus"></i> Đăng ký</a>
                </div>
            </div>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="active">Trang chủ</a></li>
                <li><a href="index.php?type=VeChungToi">Về chúng tôi</a></li>
                <li class="dropdown">
                    <a href="">Sản phẩm từ thiện <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?type=QuanAo">Quần áo</a></li>
                        <li><a href="index.php?id=2">Sách vở</a></li>
                        <li><a href="index.php?id=3">Nhu yếu phẩm</a></li>
                    </ul>
                </li>
                <li><a href="index.php?type=NoiQuy">Nội quy</a></li>
                <li><a href="index.php?type=LienHe">Liên hệ</a></li>
            </ul>
        </nav>
    </header>
    <script src="../JS/scripts.js"></script>
</body>
</html>