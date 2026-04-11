<link rel="stylesheet" href="../CSS/index.css">

<main class="auth-page">
    <div class="auth-container">
        <h2>Đăng ký tài khoản</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">Họ và tên</label>
                <input type="text" id="fullname" name="fullname" required placeholder="Nhập họ và tên">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Nhập email của bạn">
            </div>
            
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required placeholder="Tạo mật khẩu">
            </div>

            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Nhập lại mật khẩu">
            </div>
            
            <button type="submit" class="btn auth-btn">Đăng ký</button>
        </form>
        
        <p class="auth-switch">Đã có tài khoản? <a href="index.php?type=Login">Đăng nhập</a></p>
    </div>
</main>