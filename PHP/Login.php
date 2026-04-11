<link rel="stylesheet" href="../CSS/index.css">

<main class="auth-page">
    <div class="auth-container">
        <h2>Đăng nhập</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email hoặc Tên đăng nhập</label>
                <input type="text" id="email" name="email" required placeholder="Nhập email của bạn">
            </div>
            
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required placeholder="Nhập mật khẩu">
            </div>
            
            <button type="submit" class="btn auth-btn">Đăng nhập</button>
        </form>
        
        <p class="auth-switch">Chưa có tài khoản? <a href="index.php?type=Register">Đăng ký ngay</a></p>
    </div>
</main>