<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web Từ Thiện</title>
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>

    <header>
        <div class="top-bar">
            <div class="logo">
                <a href="index.php"><h2>Tâm Nguyện</h2></a>
            </div>
            
            <div class="search-box">
                <form action="search.php" method="GET">
                    <input type="text" name="keyword" placeholder="Tìm kiếm vật phẩm...">
                    <button type="submit">[Icon Tìm kiếm]</button>
                </form>
            </div>

            <div class="auth-links">
                <a href="login.php">[Icon Đăng nhập] Đăng nhập</a> | 
                <a href="register.php">[Icon Đăng ký] Đăng ký</a>
            </div>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="active">Trang chủ</a></li>
                <li><a href="about.php">Về chúng tôi</a></li>
                <li class="dropdown">
                    <a href="products.php">Sản phẩm từ thiện [Icon Dropdown]</a>
                    <ul class="dropdown-menu">
                        <li><a href="category.php?id=1">Quần áo</a></li>
                        <li><a href="category.php?id=2">Sách vở</a></li>
                        <li><a href="category.php?id=3">Nhu yếu phẩm</a></li>
                    </ul>
                </li>
                <li><a href="news.php">Tin tức</a></li>
                <li><a href="contact.php">Liên hệ</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Chung tay sẻ chia, lan tỏa yêu thương</h1>
                <p>Nơi kết nối những tấm lòng vàng với những hoàn cảnh khó khăn.</p>
                <a href="products.php" class="btn">Xem vật phẩm quyên góp</a>
            </div>
        </section>

        <section class="categories-section">
            <h2 class="section-title">Danh mục quyên góp</h2>
            <div class="category-grid">
                
                <div class="category-card">
                    <div class="category-img">[Ảnh Quần áo]</div>
                    <h3>Quần áo</h3>
                    <a href="category.php?type=quan-ao" class="btn-outline">Xem chi tiết</a>
                </div>

                <div class="category-card">
                    <div class="category-img">[Ảnh Chăn]</div>
                    <h3>Chăn</h3>
                    <a href="category.php?type=chan" class="btn-outline">Xem chi tiết</a>
                </div>

                <div class="category-card">
                    <div class="category-img">[Ảnh Mũ len]</div>
                    <h3>Mũ len</h3>
                    <a href="category.php?type=mu-len" class="btn-outline">Xem chi tiết</a>
                </div>

                <div class="category-card">
                    <div class="category-img">[Ảnh Váy]</div>
                    <h3>Váy</h3>
                    <a href="category.php?type=vay" class="btn-outline">Xem chi tiết</a>
                </div>

                <div class="category-card">
                    <div class="category-img">[Ảnh Dép]</div>
                    <h3>Dép</h3>
                    <a href="category.php?type=dep" class="btn-outline">Xem chi tiết</a>
                </div>

                <div class="category-card">
                    <div class="category-img">[Ảnh Giày]</div>
                    <h3>Giày</h3>
                    <a href="category.php?type=giay" class="btn-outline">Xem chi tiết</a>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>Về Tâm Nguyện</h3>
                <p>Nền tảng kết nối và chia sẻ vật phẩm từ thiện nhanh chóng, minh bạch.</p>
            </div>
            <div class="footer-col">
                <h3>Liên kết nhanh</h3>
                <ul>
                    <li><a href="about.php">Về chúng tôi</a></li>
                    <li><a href="products.php">Danh sách vật phẩm</a></li>
                    <li><a href="news.php">Tin tức hoạt động</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Thông tin liên hệ</h3>
                <p>[Icon Địa chỉ] Hà Nội, Việt Nam</p>
                <p>[Icon Điện thoại] 0123 456 789</p>
                <p>[Icon Email] contact@tamnguyen.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Website Từ Thiện. Phát triển bởi bạn.</p>
        </div>
    </footer>

    <script src="../JS/scripts.js"></script>
</body>
</html>