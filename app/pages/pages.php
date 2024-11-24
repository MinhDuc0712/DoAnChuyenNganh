<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="<?=ROOT?>/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>HOME - <?=APP_NAME?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="p-3 border-bottom">
        <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="pages" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
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

                <!-- <div class="text-end">
                    <button type="button" class="btn btn-warning me-2">
                        <a class="link-body-emphasis" href="login">Login</a></button>
                    <button type="button" class="btn btn-warning">
                    <a class="link-body-emphasis" href="signup">Sign-up</a></button>
                </div> -->

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                            class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="home">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Slider -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/slider/ism/css/my-slider.css">
    <script src="<?=ROOT?>/assets/slider/ism/js/ism-2.2.min.js"></script>

    <div class="ism-slider" data-transition-type="fade" id="my-slider" data-play_type="loop" width="100%">
        <ol>
            <li>
                <img src="<?=ROOT?>/assets/slider/ism/image/slides/banner_1.jpg">
            </li>
            <li>
                <img src="<?=ROOT?>/assets/slider/ism/image/slides/banner_2.jpg">
            </li>
            <li>
                <img src="<?=ROOT?>/assets/slider/ism/image/slides/banner_3.jpg">
            </li>
            <li>
                <img src="<?=ROOT?>/assets/slider/ism/image/slides/banner_4.jpg">
            </li>
        </ol>
    </div>
    <!-- End slider -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/promo.css">
    <div class="container">
        <div class="row promo-box">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="promo-item">
                    <div class="icon">
                        <img width="50" height="50" class="lazyload loaded"
                            src="https://cdn.shopvnb.com/themes/images/policy_image_2.svg"
                            data-src="https://cdn.shopvnb.com/themes/images/policy_image_2.svg"
                            alt="Vận chuyển toàn quốc" data-was-processed="true">
                    </div>
                    <div class="info">
                        Vận chuyển <span>TOÀN QUỐC</span> <br> Thanh toán khi nhận hàng
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="promo-item">
                    <div class="icon">
                        <img width="50" height="50" class="lazyload loaded"
                            src="https://cdn.shopvnb.com/themes/images/policy_image_1.svg"
                            data-src="https://cdn.shopvnb.com/themes/images/policy_image_1.svg" alt=""
                            data-was-processed="true">
                    </div>
                    <div class="info">
                        <span>Bảo đảm chất lượng</span> <br>Sản phẩm bảo đảm chất lượng.
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="promo-item">
                    <div class="icon">
                        <img width="50" height="50" class="lazyload loaded"
                            src="https://cdn.shopvnb.com/themes/images/thanh_toan.svg"
                            data-src="https://cdn.shopvnb.com/themes/images/thanh_toan.svg" alt=""
                            data-was-processed="true">
                    </div>
                    <div class="info">
                        Tiến hành <span>THANH TOÁN</span> <br> Với nhiều <span>PHƯƠNG THỨC</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="promo-item">
                    <div class="icon">
                        <img width="50" height="50" class="lazyload loaded"
                            src="https://cdn.shopvnb.com/themes/images/doi_san_pham.svg"
                            data-src="https://cdn.shopvnb.com/themes/images/doi_san_pham.svg" alt=""
                            data-was-processed="true">
                    </div>
                    <div class="info">
                        <span>Đổi sản phẩm mới</span><br> nếu sản phẩm lỗi
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/product.css">
    <?php
    // Mảng chứa thông tin sản phẩm mới
    $new_products = [
        [ 
            'id' => 1,
            'image' =>ROOT.'/assets/image/yonex/vot-cau-long-yonex-astrox-88d-tour-2024-chinh-hang_1710988619.jpg',
            'name' => 'Vợt cầu lông Yonex Astrox 88D Tour 2024',
            'price' => '2,929,000 VND'
        ],
        [
            'id' => 2,
            'image' =>ROOT.'/assets/image/lining/vot-cau-long-lining-axforce-90.jpg',
            'name' => 'Vợt cầu lông Lining AX Force 90',
            'price' => '2,500,000 VND'
        ],
    ];
    
    // Mảng chứa thông tin sản phẩm nổi bật
    $featured_products = [
        [
            'id' => 1,
            'image' =>ROOT.'/assets/image/yonex/vot-cau-long-yonex-duora-55-chinh-hang-khong-bao-hanh-1.webp',
            'name' => 'Vợt cầu lông Yonex Duora 55',
            'price' => '2,929,000 VND'
        ],
        [
            'id' => 2,
            'image' =>ROOT.'/assets/image/mizuno/vot-cau-long-mizuno-1.jpg',
            'name' => 'Vợt cầu lông Mizuno 1',
            'price' => '2,800,000 VND'
        ],
    ];
    
    // Mảng chứa thông tin sản phẩm bán chạy
    $best_selling_products = [
        [
            'id' => 1,
            'image' =>ROOT.'/assets/image/lining/set-vot-cau-long-lining-aypt059-phong-noi-dia-2.webp',
            'name' => 'Vợt cầu lông Lining AYPT059',
            'price' => '2,950,000 VND'
        ],
        [
            'id' => 2,
            'image' =>ROOT.'/assets/image/lining/set-vot-cau-long-lining-aypt061-lam-noi-dia-2.webp',
            'name' => 'Vợt cầu lông Lining AYPT061',
            'price' => '2,950,000 VND'
        ],
        [
            'id' => 3,
            'image' =>ROOT.'/assets/image/lining/set-vot-cau-long-lining-hoa-chinh-hang-1_1693168535.webp',
            'name' => 'Vợt cầu lông Lining AYPT063',
            'price' => '3,100,000 VND'
        ],
        [
            'id' => 4,
            'image' =>ROOT.'/assets/image/lining/set-vot-cau-long-lining-son-chinh-hang_1693168930.webp',
            'name' => 'Vợt cầu lông Lining AYPT065',
            'price' => '3,100,000 VND'
        ],
    ];
    ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Sản phẩm mới</h2>
        <div class="row">
            <?php foreach ($new_products as $product): ?>
            <div class="col-6 col-sm-6 col-md-3 mb-4">
                <a href="product-detail.php?id=<?php echo $product['id']; ?>" class="text-decoration-none">
                    <div class="product-card">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid">
                        <p class="text-left text-dark"><?php echo $product['name']; ?></p>
                        <p class="price text-left"><?php echo $product['price']; ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <h2 class="text-center mb-4">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php foreach ($featured_products as $product): ?>
            <div class="col-6 col-sm-6 col-md-3 mb-4">
                <a href="product-detail.php?id=<?php echo $product['id']; ?>" class="text-decoration-none">
                    <div class="product-card">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid">
                        <p class="text-left text-dark"><?php echo $product['name']; ?></p>
                        <p class="price text-left"><?php echo $product['price']; ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <h2 class="text-center mb-4">Sản phẩm bán chạy</h2>
        <div class="row">
            <?php foreach ($best_selling_products as $product): ?>
            <div class="col-6 col-sm-6 col-md-3 mb-4">
                <a href="product-detail.php?id=<?php echo $product['id']; ?>" class="text-decoration-none">
                    <div class="product-card">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid">
                        <p class="text-left text-dark"><?php echo $product['name']; ?></p>
                        <p class="price text-left"><?php echo $product['price']; ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
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
                            <p><strong>Với sứ mệnh:</strong> <em>"DK cam kết mang đến những sản phẩm, dịch vụ chất
                                    lượng tốt nhất phục vụ cho
                                    người chơi thể thao để nâng cao sức khỏe của chính mình."</em></p>
                            <p><strong>Tầm nhìn:</strong> <em>"Trở thành nhà phân phối và sản xuất thể thao lớn nhất
                                    Việt Nam."</em></p>
                        </div>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <h5 class="title-menu">THÔNG TIN LIÊN HỆ</h5>
                        <div class="list-menu toggle-mn">
                            <div class="content-contact clearfix">
                                <p><a style="color: #e95211; font-size: 16px; font-weight: bold;" href="#">Xem tất
                                        cả các cửa hàng DK</a></p>
                            </div>
                            <div class="content-contact clearfix">
                                <span class="list_footer">
                                    <strong>Email: </strong>
                                    <a title="info@shopDK.com" href="mailto:info@shopvnb.com">info@shopDK.com</a>
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
    </div>
    </main>
    <script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>