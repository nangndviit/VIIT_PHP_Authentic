<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>PHP - Authentic - Shoes</title>
    <meta name="title" content />

    <link rel="shortcut icon" href="https://png.pngtree.com/png-clipart/20220911/original/pngtree-letter-s-logo-vector-design-png-image_8545049.png" type="image/svg+xml" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/style.css" />
</head>

<?php
session_start();
include("connet.php");
?>

<body>

    <header class="header" data-header>
        <div class="container">
            <button class="menu--open" aria-label="toggle manu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>
            <button class="menu--close">
                <ion-icon name="close-outline" aria-label="true"></ion-icon>
            </button>

            <!-- logo -->
            <a href="#" class="logo">
                <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/ft-logo.webp" alt />
            </a>

            <nav class="navbar2" data-navbar>
                <ul class="navbar-list2">
                    <li class="sreach">
                        <form action="#" method="GET">
                            <div class="search-box">
                                <input type="text" name="search" placeholder="Tìm kiếm..." />
                                <button class="but-search" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </li>

                    <li class="navbar-item2">
                        <a href="#" class="navbar-link2" data-nav-link>GIÀY
                            JORDAN KHÁC <i class="fa-solid fa-chevron-right"></i></a>
                    </li>

                    <li class="navbar-item2">
                        <a href="#" class="navbar-link2" data-nav-link>GIÀY
                            SNEAKER <i class="fa-solid fa-chevron-right"></i></a>
                    </li>

                    <li class="navbar-item2">
                        <a href="#" class="navbar-link2" data-nav-link>
                            QUẦN ÁO<i class="fa-solid fa-chevron-right"></i></a>
                    </li>

                    <li class="navbar-item2">
                        <a href="#" class="navbar-link2" data-nav-link>PHỤ
                            KIỆN<i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                    <li class="navbar-item2">
                        <a href="#" class="navbar-link2" data-nav-link>NEWS</a>
                    </li>

                    <li class="navbar-item2">
                        <a href="#" class="navbar-link2" data-nav-link>LIÊN
                            HỆ</a>
                    </li>
                </ul>

            </nav>

            <!-- menu trên cung-->
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>TRANG
                            CHỦ</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>GIÀY<i class="fa-solid fa-angle-down"></i></a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>ÁO
                            QUẦN<i class="fa-solid fa-angle-down"></i></a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>PHỤ
                            KIỆN<i class="fa-solid fa-angle-down"></i></a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>SỰ
                            KIỆN - TIN TỨC</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>LIÊN
                            HỆ</a>
                    </li>
                </ul>
            </nav>

            <!-- tìm kiếm, đăng nhập và shop -->

            <div class="header-actions">
                <button class="action-btn-search" aria-label="Search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>

                <button class="activitithngang"></button>

                <button class="action-btn-cart" aria-label="cart">
                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>
        </div>
    </header>

    <main>
        <article>
            <!--- #giới thiệu-->
            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/Designer-Below-Retail-Apparel-an-2048x648.webp" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/BrandCampaign_LaunchBanners_Prim-1-2048x623.webp" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2024/01/AJ1_Yellow_Ochre_Release_DayPrim-2048x625.webp" class="d-block w-100" alt="..." />
                        </div>
                    </div>
                    <div class="click">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <div class="click-prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                            </div>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <div class="click-next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                            </div>
                        </button>
                    </div>
                </div>
            </section>

            <!-- hãng sản phẩm -->

            <section class="section brand">
                <div class="container">
                    <div class="wrapper">
                        <div class="button-container">
                            <p class="but">Giày</p>
                            <p class="but">Quần Áo</p>
                            <p class="but">Phụ Kiện</p>
                            <p class="but">Brand</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sản phẩm1-->

            <section class="section brand" aria-label="brand">
                <div class="container">
                    <h4>Giày chính hãng Nike 2023</h4>
                    <p class="thanhp">
                        Mẫu giày Nike Jordan 1, Air Force 1, các sản phẩm
                        bóng rổ,… mới
                        nhất 2023 với giá cực tốt
                    </p>

                    <ul class="grid-list">
                        <?php
                        include("./Product/product_nike.php");
                        ?>
                    </ul>
                    <div class="xem">
                        <button class="btnn">
                            <a>Xem Tất Cả</a><i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Thương hiệu -->

            <section class="section brand" aria-label="brand">
                <div class="container">
                    <h4>Thương Hiệu Nổi Bật</h4>
                    <p class="thanhp">Mặt hàng giày các thương hiệu nổi
                        bật</p>

                    <div class="bran__list">
                        <?php
                        include("brand.php");
                        ?>
                    </div>
                </div>
                <div class="image_res" style="overflow: hidden; max-height: 300px; height: 100%; display: flex; justify-content: center; align-items: center;">
                    <img style="width: 100%; height: 100%; object-fit: cover" src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/09/Adidas-Yeezy-Slide-2048x648.webp" alt />
                </div>
            </section>

            <!-- sản phẩm3 -->

            <section class="section brand" aria-label="brand">
                <div class="container">
                    <h4>Giày Sneaker nổi bật</h4>
                    <p class="thanhp">Mặt hàng giày các thương hiệu nổi
                        bật</p>

                    <ul class="grid-list">
                        <?php
                        include("./Product/product_sneaker.php");
                        ?>
                    </ul>

                    <div class="xem1">
                        <button class="btnn">
                            <b>Xem Tất Cả</b>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="image_res" style="overflow: hidden; max-height: 300px; height: 100%; display: flex; justify-content: center; align-items: center;">
                        <img style="width: 100%; height: 100%; object-fit: cover" src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/11/retro-4-olive-3-1-2048x1331.webp" alt />
                    </div>
                </div>

            </section>

            <!-- sản phẩm4 -->

            <section class="section brand" aria-label="brand">
                <div class="container">
                    <h4>Yeezy by Kanye West</h4>
                    <p class="thanhp">Yeezy 350 và dép Yeezy cho mùa hè
                        2023</p>

                    <ul class="grid-list">
                        <?php
                        include("./Product/product_adidas.php");
                        ?>
                    </ul>
                </div>
                <div class="xem1">
                    <button class="btnn">
                        <a>Xem Tất Cả</a>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
                <div class="image_res" style="overflow: hidden; max-height: 300px; height: 100%; display: flex; justify-content: center; align-items: center;">
                    <img style="width: 100%; height: 100%; object-fit: cover" src="https://bazaarvietnam.vn/wp-content/uploads/2022/09/top-3-thuong-hieu-giay-sneaker-noi-dia-duoc-long-gioi-tre-viet-8.jpg" alt />
                </div>
            </section>

            <!-- phụ kiện -->

            <section class="section brand" aria-label="brand">
                <div class="container">
                    <h4>Phụ kiện</h4>
                    <p class="thanhp">Mặt hàng phụ kiện các thương hiệu nổi
                        bật</p>

                    <ul class="grid-list">
                        <?php
                        include("./Product/product_pk.php");
                        ?>
                    </ul>
                    <div class="xem">
                        <button class="btnn">
                            <a>Xem Tất Cả</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!-- sự kiện -->

            <section class="section brand" aria-label="brand">
                <div class="container">
                    <h4>Tin Tức - Sự Kiện</h4>
                    <p class="thanhp">Tin tức phổ biến</p>

                    <div class="new__list">
                        <?php
                        include("news.php");
                        ?>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer-top section" id>
            <div class="container">
                <div class="footer-brand">
                    <a href="#" class="logo1">
                        <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/ft-logo.webp" alt />
                    </a>

                    <p class="footer-text">
                        Công Ty TNHH TM và Đầu Tư Quốc Tế Á Châu MST :
                        0109539054 <br>
                        Authentic Shoes - Nhà sưu tầm và phân phối chính
                        hãng các thương
                        hiệu thời trang quốc tế hàng đầu Việt Nam
                    </p>

                    <ul class="contact-list">
                        <li>
                            <p class="footer-list-title">
                                <b>HỆ THỐNG CỬA HÀNG</b>
                            </p>
                        </li>
                        <li class="contact-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="#" class="contact-link">
                                Cơ sở 1: 561 Nguyễn Đình Chiểu Phường 2 -
                                Quận 3 - TP. Hồ Chí
                                Minh</a>
                        </li>

                        <li class="contact-item">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+84823184076" class="contact-link">
                                Hotline : 0786665444</a>
                        </li>
                        <li class="contact-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="#" class="contact-link">
                                Cở sở 2 : 70-72 Tây Sơn - Đống Đa - Hà
                                Nội</a>
                        </li>

                        <li class="contact-item">
                            <i class="fa-solid fa-phone"></i>

                            <a href="tel:+84823184076" class="contact-link">Hotline :
                                0785499555</a>
                        </li>
                        <li class="contact-item">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="tel:+84823184076" class="contact-link">
                                Service@AutheticShoes.com</a>
                        </li>
                        <li class="contact-item" style="margin-left: 15px">
                            <a href="tel:+84823184076" class="contact-link">
                                ĐKKD: 01E8027929 - Cấp ngày: 01/06/2019 -
                                Nơi cấp: Hà Nội</a>
                        </li>
                    </ul>

                    <img style="width: 100px; height: 20px; margin-left: 15px" src="https://images.dmca.com/Badges/dmca-badge-w100-5x1-08.png?ID=9bda31ca-31ab-4a2d-b9df-8bced834801e" alt />
                </div>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title2">
                            <a href="#">Về Chúng Tôi</a>
                        </p>
                    </li>

                    <li class="contact-item">
                        <a href="#" class="contact-link"> Giới Thiệu</a>
                    </li>
                    <li class="contact-item">
                        <a href="#" class="contact-link"> Tuyển Dụng</a>
                    </li>

                    <li class="contact-item">
                        <a href="#" class="contact-link"> Dịch Vụ Spa, Sửa
                            Giày</a>
                    </li>
                    <li class="contact-item">
                        <a href="#" class="contact-link"> Tin Tức - Sự
                            Kiện</a>
                    </li>

                    <li>
                        <p class="footer-list-title2">
                            <a href="#">Kết Nối Với Chúng Tôi</a>
                        </p>
                    </li>
                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>
                    </ul>

                    <img style="margin-top: 10px; line-height: 26px" src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/04/thongbao.png" alt />
                </ul>

                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title2">
                            <a href="#">Hỗ Trợ Khách Hàng</a>
                        </p>
                    </li>

                    <li class="contact-item">
                        <a href="#" class="contact-link"> Hướng dẫn mua
                            hàng</a>
                    </li>
                    <li class="contact-item">
                        <a href="#" class="contact-link">
                            Chính sách đổi trả và bảo hành</a>
                    </li>

                    <li class="contact-item">
                        <a href="#" class="contact-link"> Chính sách thanh
                            toán</a>
                    </li>
                    <li class="contact-item">
                        <a href="#" class="contact-link"> Điều khoản trang
                            Web</a>
                    </li>
                    <li class="contact-item">
                        <a href="#" class="contact-link">
                            Chính sách bảo về thông tin người tiêu dùng</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy;
                    <a href="#" class="copyright-link">Bản quyền thuộc về
                        Authentic Shoes</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- icon cuối trang -->

    <div class="back-top-btn">
        <a href="#top" aria-label="Nhắn tin đến chúng tôi" data-back-top-btn>
            <i class="fa-brands fa-facebook-messenger"></i>
        </a>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="./assets/js/script.js" defer></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>