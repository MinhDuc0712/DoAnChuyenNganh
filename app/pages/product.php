<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="<?=ROOT?>/assets/css/product.css" rel="stylesheet">
</head>

<body>
    <header class="p-3 border-bottom">
        <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="home" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img class="bi me-2" role="img" src="<?=ROOT?>/assets/image/logo.jpg" width="60" height="40"
                        style="object-fit: cover;">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home" class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
                    <li><a href="product" class="nav-link px-2 link-body-emphasis">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-warning me-2">
                        <a class="link-body-emphasis" href="login">Login</a></button>
                    <button type="button" class="btn btn-warning">
                    <a class="link-body-emphasis" href="signup">Sign-up</a></button>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-body-emphasis" href="home">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vợt Cầu Lông</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Sidebar for filters -->
            <div class="col-md-3">
                <div class="card p-3 mb-3">
                    <h5>Chọn Mức Giá</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="price1">
                        <label class="form-check-label" for="price1">Giá dưới 500.000đ</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="price2">
                        <label class="form-check-label" for="price2">500.000đ - 1 triệu</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="price3">
                        <label class="form-check-label" for="price3">1 triệu - 2 triệu</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="price4">
                        <label class="form-check-label" for="price4">2 triệu - 3 triệu</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="price5">
                        <label class="form-check-label" for="price5">Trên 3 triệu</label>
                    </div>
                </div>

                <div class="card p-3 mb-3">
                    <h5>Thương Hiệu</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="brand1">
                        <label class="form-check-label" for="brand1">Mizuno</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="brand2">
                        <label class="form-check-label" for="brand2">Yonex</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="brand2">
                        <label class="form-check-label" for="brand2">Victor</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="brand2">
                        <label class="form-check-label" for="brand2">Lining</label>
                    </div>
                </div>

                <div class="card p-3 mb-3">
                    <h5>Chi Nhánh</h5>
                    <input type="text" class="form-control mb-2" placeholder="Tìm chi nhánh">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="branch1">
                        <label class="form-check-label" for="branch1">DK PREMIUM Quận 1</label>
                    </div>
                    <!-- Add more branches as needed -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Vợt Cầu Lông</h3>
                    <!-- Sort By Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="sortDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sắp xếp: Mặc định
                        </button>
                        <div class="dropdown-menu" aria-labelledby="sortDropdown">
                            <a class="dropdown-item" href="?sort=default">Mặc định</a>
                            <a class="dropdown-item" href="?sort=low-to-high">Giá thấp đến cao</a>
                            <a class="dropdown-item" href="?sort=high-to-low">Giá cao đến thấp</a>
                        </div>
                    </div>
                </div>
                <?php
                $products = [
                    [
                        'id' => 1,
                        'name' => 'Vợt Yonex NanoFlare 700',
                        'price' => 2200000,
                        'image' => ROOT .'/assets/image/victor/set-vot-cau-long-victor-spider-man-limited-noi-dia-trung_1724888412.jpg',
                        'is_premium' => true,
                    ],
                    [
                        'id' => 2,
                        'name' => 'Vợt Victor Thruster K',
                        'price' => 1900000,
                        'image' => ROOT .'/assets/image/victor/set-vot-cau-long-victor-iron-man-gb-chinh-hang_1716162575.webp',
                        'is_premium' => false,
                    ],
                    // Thêm sản phẩm khác
                ];
                ?>
                <div class="row">
                    <?php foreach ($products as $product): ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="product-detail.php?id=<?php echo $product['id']; ?>" class="text-decoration-none">
                            <div class="product-card">
                                <!-- Premium Badge -->
                                <?php if ($product['is_premium']): ?>
                                <div class="premium-badge">Premium</div>
                                <?php endif; ?>

                                <!-- Product Image -->
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" 
                                    class="product-image">

                                <!-- Product Name -->
                                <p class="text-left text-dark product-name"><?php echo $product['name']; ?></p>

                                <!-- Product Price -->
                                <p class="price text-left">
                                    <?php echo number_format($product['price'], 0, ',', '.'); ?> đ
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/footer.css">
        <div class="mid-footer">
            <div class="container">
                <div class="row">
                    <!-- General Information Section -->
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <h5 class="title-menu">Thông tin chung</h5>
                        <div class="des_foo">
                            <p><strong>DK Sports</strong> là hệ thống cửa hàng cầu lông, cung cấp
                                sỉ và lẻ các mặt hàng dụng cụ cầu lông từ phong trào tới chuyên nghiệp.</p>
                            <p><strong>Với sứ mệnh:</strong> <em>"DK cam kết mang đến những sản phẩm, dịch
                                    vụ chất
                                    lượng tốt nhất phục vụ cho
                                    người chơi thể thao để nâng cao sức khỏe của chính mình."</em></p>
                            <p><strong>Tầm nhìn:</strong> <em>"Trở thành nhà phân phối và sản xuất thể thao
                                    lớn nhất
                                    Việt Nam."</em></p>
                        </div>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <h5 class="title-menu">THÔNG TIN LIÊN HỆ</h5>
                        <div class="list-menu toggle-mn">
                            <div class="content-contact clearfix">
                                <span class="list_footer">
                                    <strong>Hệ thống cửa hàng: </strong>
                                    <a href="#" title="Hệ thống cửa hàng">5 shop Premium và 65 cửa
                                        hàng trên toàn quốc</a>
                                </span>
                                <p><a style="color: #e95211; font-size: 16px; font-weight: bold;" href="#">Xem tất
                                        cả các cửa hàng DK</a></p>
                            </div>
                            <div class="content-contact clearfix">
                                <span class="list_footer">
                                    <strong>Email: </strong>
                                    <a title="info@shopvnb.com" href="mailto:info@shopvnb.com">info@shopvnb.com</a>
                                </span>
                            </div>


                        </div>
                        <!-- Social Media Links -->
                        <div class="social-footer">
                            <div class="social toggle-mn">
                            </div>
                        </div>
                    </div>

                    <!-- Policies Section -->
                    <div class="col-xs-12 col-md-4 col-lg-3 footer-click">
                        <h5 class="title-menu clicked">Chính sách</h5>
                        <ul class="list-menu toggle-mn hidden-mob">
                            <li class="li_menu"><a href="#">Chính sách đổi trả, hoàn tiền</a></li>
                            <li class="li_menu"><a href="#">Chính sách bảo hành</a></li>
                            <li class="li_menu"><a href="#">Chính sách xử lý khiếu nại</a></li>
                            <li class="li_menu"><a href="#">Chính sách vận chuyển</a></li>
                            <li class="li_menu"><a href="#">Điều khoản sử dụng</a></li>
                            <li class="li_menu"><a href="#">Chính Sách Bảo Mật Thông Tin</a></li>
                            <li class="li_menu"><a href="#">Chính sách nhượng quyền</a></li>
                        </ul>
                    </div>

                    <!-- Guides Section -->
                    <div class="col-xs-12 col-md-4 col-lg-3 footer-click">
                        <h5 class="title-menu clicked">Hướng dẫn</h5>
                        <ul class="list-menu toggle-mn hidden-mob">
                            <li class="li_menu"><a href="#">Hướng dẫn cách
                                    chọn vợt cầu lông cho người mới chơi</a></li>
                            <li class="li_menu"><a href="#">Hướng dẫn thanh toán</a></li>
                            <li class="li_menu"><a href="#">Kiểm tra bảo hành</a></li>
                            <li class="li_menu"><a href="#">Kiểm tra đơn hàng</a></li>
                            <li class="li_menu"><a href="#">HƯỚNG DẪN MUA HÀNG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-footer-bottom copyright clearfix">
            <div class="container">
                <div class="row tablet">
                    <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                        <span class="wsp">
                            <span class="mobile">&copy; CÔNG TY TNHH DK SPORTS
                            </span>
                            <br>
                            <span class="opacity1">Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8,
                                TPHCM</span>
                            <br>
                        </span>
                    </div>
                </div>
                <a href="#" class="backtop show" title="Lên đầu trang"><i class="icon-up"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
