<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?=ROOT?>/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Đăng kí - <?=APP_NAME?></title>

<link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/login.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
      <form method="post">
        <a href="home">
        <img class="mb-4 mx-auto d-block" src="<?=ROOT?>/assets/image/logo.jpg" alt="" width="115" height="65" style="object-fit: cover;">
        </a>
        <h1 class="h3 mb-3 fw-normal text-center">Đăng kí tài khoản</h1>
        <?php
          require_once '../app/core/config.php'; // Đảm bảo đường dẫn đúng

          $errors = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Lấy dữ liệu từ biểu mẫu và làm sạch
              $username = trim($_POST['username']);
              $email = trim($_POST['email']);
              $password = $_POST['password'];
              $retypePassword = $_POST['retype-password'];
              $phone = trim($_POST['phone']); // Thêm trường số điện thoại
              $address = trim($_POST['address']); // Thêm trường địa chỉ
              $role = 'user'; // Mặc định vai trò là user

              // Kiểm tra xem mật khẩu có khớp không
              if ($password !== $retypePassword) {
                $errors = "Mật khẩu không khớp.";
              }
              elseif (strlen($password) < 8) {
                $errors = "Mật khẩu phải có ít nhất 8 ký tự.";
              }

              // Kiểm tra định dạng email
              elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors = "Định dạng email không hợp lệ.";
              }
              else{
                // Mã hóa mật khẩu
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);    
                try {
                // Kiểm tra xem email đã tồn tại chưa
                  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
                  $stmt->execute([$email]);
                  if ($stmt->rowCount() > 0) {
                      $errors = "Email đã tồn tại.";
                  }else{
                     // Kiem tra xem username da ton tai chua
                      $stmt = $pdo->prepare("SELECT * FROM users WHERE user_name = ?");
                      $stmt->execute([$username]);
                      if ($stmt->rowCount() > 0) {
                          $errors = "Username đã tồn tại.";
                      }
                      else{
                        // Thêm người dùng mới
                        $stmt = $pdo->prepare("INSERT INTO users (user_name, password, role, created_at, updated_at, phone, email, address) VALUES (?, ?, ?, NOW(), NOW(), ?, ?, ?)");
                        $stmt->execute([$username, $hashedPassword, $role, $phone, $email, $address]);
                        header("Location: login");
                        exit();
                      }
                  }
                } catch (PDOException $e) {
                  $errors = "Lỗi: " . $e->getMessage();
              }
            }
          }
        ?>
        <?php if ($errors): ?>
          <div class="alert alert-danger"><?php echo htmlspecialchars($errors); ?></div>
        <?php endif; ?>
        <div class="form-floating">
          <input name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="Username" required>
          <label for="floatingInput">Tên đăng nhập (*)</label>
        </div>
        <div class="form-floating">
          <input name="email" type="email" class="form-control mb-2" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Email (*)</label>
        </div>
        <div class="form-floating">
          <input name="password" type="password" class="form-control " id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Mật khẩu (*)</label>
        </div>
        <div class="form-floating">
          <input name="retype-password" type="password" class="form-control" id="floatingPassword" placeholder="RetypePassword" required>
          <label for="floatingPassword">Xác nhận mật khẩu (*)</label>
        </div>
        <div class="form-floating">
          <input name="phone" type="text" class="form-control mb-2" id="floatingPhone" placeholder="Số điện thoại" required>
          <label for="floatingPhone">Số điện thoại (*)</label>
        </div>
        <div class="form-floating">
          <input name="address" type="text" class="form-control mb-2" id="floatingAddress" placeholder="Địa chỉ" required>
          <label for="floatingAddress">Địa chỉ (*)</label>
        </div>
        <div class="my-2">
          Đã có tài khoản?<a href="login" class="text-primary text-decoration-none"> Đăng nhập</a>
        </div>
        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Chấp nhận các điều khoản và điều kiện
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Đăng kí</button>
        <p class="mt-5 mb-3 text-body-secondary text-center">&copy; <?php echo date('Y'); ?></p>
      </form>
    </main>
    <script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
