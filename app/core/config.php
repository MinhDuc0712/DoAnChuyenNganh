<?php

// Định nghĩa đường dẫn gốc của ứng dụng
define('ROOT', 'http://localhost/ShopDK/public/');

// Tên ứng dụng
define('APP_NAME', "ShopDK");

// Thông tin kết nối cơ sở dữ liệu
define('DB_HOST', 'localhost');
define('DB_NAME', 'test'); 
define('DB_USER', 'root'); 
define('DB_PASS', ''); 

// Đường dẫn đến thư mục chứa ứng dụng
define('APP_PATH', dirname(__FILE__) . '/../');

// Đường dẫn đến thư mục chứa các tài nguyên tĩnh
define('ASSETS_PATH', ROOT . 'assets/');

// Đường dẫn đến thư mục chứa hình ảnh
define('IMAGE_PATH', ROOT . 'assets/image/');

// Đường dẫn đến thư mục chứa CSS
define('CSS_PATH', ROOT . 'assets/css/');

// Đường dẫn đến thư mục chứa JavaScript
define('JS_PATH', ROOT . 'assets/js/');

// Đường dẫn đến thư mục chứa các trang
define('PAGES_PATH', APP_PATH . 'pages/');

// Đường dẫn đến thư mục chứa các mô hình
define('MODELS_PATH', APP_PATH . 'models/');

// Thông tin về môi trường (có thể dùng để kiểm tra môi trường phát triển hay sản xuất)
define('ENVIRONMENT', 'development'); // Có thể thay đổi thành 'production' khi triển khai

// Thông tin về mail (nếu cần thiết)
// define('MAIL_HOST', 'smtp.example.com');
// define('MAIL_USER', 'your_email@example.com');
// define('MAIL_PASS', 'your_email_password');
// define('MAIL_PORT', 587);