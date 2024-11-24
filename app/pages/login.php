
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?=ROOT?>/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Đăng nhập - <?=APP_NAME?></title>

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
        <img class="mb-4 d-block mx-auto" src="<?=ROOT?>/assets/image/logo.jpg" alt="" width="115" height="65" style="object-fit: cover;">
        </a>
        <h1 class="h3 mb-3 fw-normal text-center">Đăng nhập</h1>
        <?php 
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $loginInput = trim($_POST['login_input']);
              $password = trim($_POST['password']);
              echo password_hash($password, PASSWORD_DEFAULT);

              // Lấy thông tin người dùng từ cơ sở dữ liệu
              $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? OR user_name = ?");
              $stmt->execute([$loginInput, $loginInput]);
              $user = $stmt->fetch();

              if ($user && password_verify($password, $user['password'])) {
                      echo "Đăng nhập thành công!";
                      session_start();
                      $_SESSION['user_id'] = $user['id'];
                      $_SESSION['role'] = $user['role'];
                      
                      if ($user['role'] == 'admin') {
                          header("Location: admin");
                      } else {
                          header("Location: pages");
                      }
                      exit();
                  } else {
                      echo "<p class=\"alert alert-danger\" role=\"alert\">Tên đăng nhập hoặc mật khẩu không đúng.</p>";
                  }
              }
        ?>
        <div class="form-floating">
          <input type="text" name="login_input" class="form-control" id="floatingInput" placeholder="Tên đăng nhập hoặc Email" required>
          <label for="floatingInput">Tên đăng nhập hoặc Email</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>

        <div class="my-2">
          Chưa có tài khoản?<a class="text-primary text-decoration-none" href="signup"> Đăng kí tại đây</a>
        </div>
        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Nhớ tài khoản
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Đăng nhập</button>
        <p class="mt-5 mb-3 text-body-secondary text-center">&copy; <?php echo date('Y'); ?></p>
      </form>
    </main>
    <script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
