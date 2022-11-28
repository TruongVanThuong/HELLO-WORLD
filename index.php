<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./CONTENT/CSS/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container_full">


        <!-- ================== NAVIGATION ================= -->
        <div class="container-fluid navigation">

            <!-- TOP  ==================================== -->
            <div class="row top">
                <div class="mini-nav">
                    <p>col-1</p>
                </div>
                <div class="col-2 bg-primary logo-nav">
                    <div class="wrap-logo">
                        <a href="./index.php">
                            <img class="logo-img" src="//theme.hstatic.net/200000247969/1000814323/14/logo.png?v=68" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 bg-success search-nav">
                    <div class="box-search">
                        <form class="form-search" action="">
                            <div class="search-inner">
                                <input type="text" name="" id="" placeholder="Tìm kiếm sản phẩm...">
                            </div>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-search" viewBox="-5 -5 25 25">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-3 bg-secondary action-nav">
                    <div class="account-nav">
                        <div class="account-action">
                            <a class="account-link" href="#">
                                <span class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </span>

                                <span class="box-text">
                                    Đăng nhập / Đăng ký
                                    <span class="txtbl">Tài khoản của tôi <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="cart-nav">
                        <div class="cart-action">
                            <a href="#" class="cart-link">
                                <span class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#fff" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </span>

                                <span class="box-text">
                                    <span class="txtbl">Giỏ hàng</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOT  ==================================== -->
            <div class="bot">
                <div class="nav-menu">
                    <div class="wrap-menu">
                        <ul class="menu-list">
                            <li>
                                <a href="/" title="Trang chủ">
                                    Trang chủ
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Danh Mục Sản Phẩm">
                                    Danh Mục Sản Phẩm
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Tin tức &amp; sự kiện">
                                    Tin tức &amp; sự kiện
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Giới thiệu">
                                    Giới thiệu
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Liên hệ">
                                    Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- =================== HEADER ===================== -->
        <header>

            <div class="header" style="position: relative;">
                <div class="slideShow">

                    <img id="anh" name="imgs" src="./CONTENT/image/slide_1_img.jpeg" alt="">
                    <button class="prev" onclick="Prev()">❮</button>
                    <button class="next" onclick="Next()">❯</button>
                </div>
            </div>

        </header>


        <!-- =================== CONTENT ===================== -->
        <div class="content">

            <!-- ============ ========================= ============ -->
            <section class="sectionCollection sectionCollection-category">
                <div class="row listCollection-category">

                    <div class="category-block col-md-5 col-sm-7 col-xs-12">
                        <div class="video-responsive">
                            <iframe width="1600" height="900" src="https://www.youtube.com/embed/gi1rp_yAZXU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>

                    <div class="category-block col-md-3 col-sm-6 col-xs-12">
                        <a class="category-block--link" href="#">
                            <div class="category-block--image">
                                <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/categorybanner_2_img.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/categorybanner_2_img.jpg?v=68" alt="THỜI TRANG THỂ THAO">
                            </div>
                            <div class="category-block--body">
                                <p></p>
                                <h3>THỜI TRANG THỂ THAO</h3>
                                <hr>
                                <p class="action"><span class="button">Xem ngay</span></p>
                            </div>
                        </a>
                    </div>

                    <div class="category-block col-md-3 col-sm-6 col-xs-12">
                        <a class="category-block--link" href="#">
                            <div class="category-block--image">
                                <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/categorybanner_3_img.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/categorybanner_3_img.jpg?v=68" alt="PHỤ KIỆN THỂ THAO">
                            </div>
                            <div class="category-block--body">
                                <p></p>
                                <h3>PHỤ KIỆN THỂ THAO</h3>
                                <hr>
                                <p class="action"><span class="button">Xem ngay</span></p>
                            </div>
                        </a>
                    </div>

                </div>
            </section>


            <!-- ============ ========================= ============ -->
            <section class="sectionCollection-2">
                <!-- <div class="container"> -->
                <h2 class="hTitle">
                    <a href="">
                        SẢN PHẨM MỚI
                    </a>
                </h2>
                <div class="wraplist-container">
                    <div class="row listProduct-row listProduct-resize">

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-arca-nu" title="Bộ Quần Áo Bóng Đá ARCA Nữ">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/trang-truoci_5dd8b0b0443c4de08154e40fb5ae5563_large.jpg" alt=" Bộ Quần Áo Bóng Đá ARCA Nữ " src="//product.hstatic.net/200000247969/product/trang-truoci_5dd8b0b0443c4de08154e40fb5ae5563_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">

                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/trang-phai_64d73899a0414ac2a3a5889ac7f0a6ee_large.jpg" alt=" Bộ Quần Áo Bóng Đá ARCA Nữ " src="//product.hstatic.net/200000247969/product/trang-phai_64d73899a0414ac2a3a5889ac7f0a6ee_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-arca-nu">Bộ Quần Áo Bóng Đá ARCA Nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">145,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-arca-nam-1" title="Bộ Quần Áo Bóng Đá ARCA Nam">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/trangnam-truoc_c124eebd7dad4c49957fee7a629ae92a_large.jpg" alt=" Bộ Quần Áo Bóng Đá ARCA Nam " src="//product.hstatic.net/200000247969/product/trangnam-truoc_c124eebd7dad4c49957fee7a629ae92a_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/trangnam-phai_d7ad3a18231a4da9925ee11be906682e_large.jpg" alt=" Bộ Quần Áo Bóng Đá ARCA Nam " src="//product.hstatic.net/200000247969/product/trangnam-phai_d7ad3a18231a4da9925ee11be906682e_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-arca-nam-1">Bộ Quần Áo Bóng Đá ARCA Nam</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">145,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-trang-phuc-thu-dong-cao-cap-egan-01" title="Bộ trang phục Thu Đông cao cấp Egan - 01">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/duong-truoc_242552bf8afa4456a12792c85919581f_large.jpg" alt=" Bộ trang phục Thu Đông cao cấp Egan - 01 " src="//product.hstatic.net/200000247969/product/duong-truoc_242552bf8afa4456a12792c85919581f_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/duong-trai_cd71a06c6db940fba048c6e1da7600a1_large.jpg" alt=" Bộ trang phục Thu Đông cao cấp Egan - 01 " src="//product.hstatic.net/200000247969/product/duong-trai_cd71a06c6db940fba048c6e1da7600a1_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-trang-phuc-thu-dong-cao-cap-egan-01">Bộ trang phục Thu Đông cao cấp Egan - 01</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">530,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/ao-lot-body-the-thao-hyper-fit2" title="Áo Lót Body Thể Thao Hyper-fit2">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/z3848921343533_c21bcbc8e2676e28f6345a8623e2a6fc_fa80630d7eef4114922fd3bd53ad4804_large.jpg" alt=" Áo Lót Body Thể Thao Hyper-fit2 " src="//product.hstatic.net/200000247969/product/z3848921343533_c21bcbc8e2676e28f6345a8623e2a6fc_fa80630d7eef4114922fd3bd53ad4804_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/z3848767845183_796f19f7928e05209d5a78ed8e88d41d_66e6ca6af4cf4768b850d8c5ba98c941_large.jpg" alt=" Áo Lót Body Thể Thao Hyper-fit2 " src="//product.hstatic.net/200000247969/product/z3848767845183_796f19f7928e05209d5a78ed8e88d41d_66e6ca6af4cf4768b850d8c5ba98c941_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/ao-lot-body-the-thao-hyper-fit2">Áo Lót Body Thể Thao Hyper-fit2</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">185,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-savia-nam" title="Bộ Quần Áo Bóng Chuyền SAVIA Nam">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/1_02796da770d946a9aae9ce67bd0477b4_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền SAVIA Nam " src="//product.hstatic.net/200000247969/product/1_02796da770d946a9aae9ce67bd0477b4_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/2_89d7df0e32f84918b592aaf8fc39697e_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền SAVIA Nam " src="//product.hstatic.net/200000247969/product/2_89d7df0e32f84918b592aaf8fc39697e_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-savia-nam">Bộ Quần Áo Bóng Chuyền SAVIA Nam</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">170,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-savia-nu" title="Bộ Quần Áo Bóng Chuyền SAVIA Nữ">
                                        <picture class="first-image">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/114_f8a0bcaa6f8d4b20b87e803bac91218c_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền SAVIA Nữ " src="//product.hstatic.net/200000247969/product/114_f8a0bcaa6f8d4b20b87e803bac91218c_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/115_274e3ffedcb7484e90c75e0cbe368e91_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền SAVIA Nữ " src="//product.hstatic.net/200000247969/product/115_274e3ffedcb7484e90c75e0cbe368e91_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-savia-nu">Bộ Quần Áo Bóng Chuyền SAVIA Nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">170,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-victor" title="Bộ Quần Áo Bóng Đá VICTOR">
                                        <picture class="first-image">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/5_1ec19a816b1243e9b43bc47487ba3c3b_large.jpg" alt=" Bộ Quần Áo Bóng Đá VICTOR " src="//product.hstatic.net/200000247969/product/5_1ec19a816b1243e9b43bc47487ba3c3b_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/6_920cd0850a914479a57869b2d8c0b08f_large.jpg" alt=" Bộ Quần Áo Bóng Đá VICTOR " src="//product.hstatic.net/200000247969/product/6_920cd0850a914479a57869b2d8c0b08f_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-victor">Bộ Quần Áo Bóng Đá VICTOR</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">270,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6 product-loop">

                            <div class="product-inner product-resize fixheight" style="height: 357px;">
                                <div class="proloop-image image-resize" style="height: 273px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-nitro" title="Bộ Quần Áo Bóng Đá NITRO">
                                        <picture class="first-image">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/den__1__23d3726f0f554e90bb05817e24764562_large.jpg" alt=" Bộ Quần Áo Bóng Đá NITRO " src="//product.hstatic.net/200000247969/product/den__1__23d3726f0f554e90bb05817e24764562_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/den__3__d15d500c09c64c05b05af7a2ea60b783_large.jpg" alt=" Bộ Quần Áo Bóng Đá NITRO " src="//product.hstatic.net/200000247969/product/den__3__d15d500c09c64c05b05af7a2ea60b783_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-da-nitro">Bộ Quần Áo Bóng Đá NITRO</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">170,000₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wrapimage-container">
                    <figure class="groupbanner_image">
                        <a class="groupbanner_image_link" href="#">
                            <!--href="/collections/san-pham-moi">-->
                            <div class="groupbanner_image_block">
                                <img class="lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/home_collection_1_banner.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/home_collection_1_banner.jpg?v=68" alt="SẢN PHẨM MỚI">
                            </div>
                        </a>
                    </figure>
                </div>

            </section>


            <!-- ============ ========================= ============ -->
            <section class="sectionLookbooks ">

                <h2 class="hTitle">Combo thời trang thể thao</h2>

                <div class="row lookbooks-container owlCarousel-style" data-carousel="true">

                    <div class="col-md-4 col-sm-12 col-xs-12 lookbooks-column ">
                        <div class="lookbooks-banner  lookbooks-banner-1">
                            <div class="lookbooks-banner__photo">
                                <img class="" src="//theme.hstatic.net/200000247969/1000814323/14/lookbooks_one_image.jpg?v=68" alt="Set thể thao thu đông">
                            </div>
                            <div class="lookbooks-banner__detail">
                                <p class="lookbooks--title">Set thể thao thu đông</p>
                                <div class="lookbooks--button">
                                    <button type="button" class="button btn-lookbooks " data-combo="1077397023,1077399347">
                                        Mua Combo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 lookbooks-column">
                        <div class="lookbooks-banner  lookbooks-banner-2">
                            <div class="lookbooks-banner__photo">
                                <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/lookbooks_two_image.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/lookbooks_two_image.jpg?v=68" alt="Set thể thao dạo phố">
                            </div>

                            <div class="lookbooks-banner__detail">
                                <p class="lookbooks--title">Set thể thao dạo phố</p>
                                <div class="lookbooks--button">
                                    <button type="button" class="button btn-lookbooks  ">Mua Combo</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 lookbooks-column">
                        <div class="lookbooks-banner  lookbooks-banner-3">
                            <div class="lookbooks-banner__photo">
                                <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/lookbooks_three_image.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/lookbooks_three_image.jpg?v=68" alt="">
                            </div>

                            <div class="lookbooks-banner__detail">
                                <p class="lookbooks--title">Set tập luyện thể thao</p>
                                <div class="lookbooks--button">
                                    <button type="button" class="button btn-lookbooks " data-combo="1077396428">Mua Combo</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>


            <!-- ============ ========================= ============ -->
            <section class="sectionCollection-3">
                <div class="container">
                    <h2 class="hTitle">
                        <a href="#">
                            Trang phục bóng đá
                        </a>
                    </h2>
                    <div class="wraplist-container">

                        <div class="row listProduct-row" id="homeCollection-slide-1">
                            <div class="owlCarousel-collection owlCarousel-style">

                                <div class="col-xs-12 col-sm-12 col-md-3 product-colmnloop">

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3 product-colmnloop">

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3 product-colmnloop">

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3 product-colmnloop">

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-xs-12 product-loop product-horizontal">
                                        <div class="product-inner product-resize">
                                            <div class="proloop-image image-resize">
                                                <a href="#" class="quickview-product" data-handle="" title="Bộ Quần Áo Bóng Đá ALPHA">
                                                    <picture class="first-image">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-bich_5074c842fc524077b4d2e586e865c9b3_large.jpg">
                                                    </picture>

                                                    <picture class="second-image hidden-xs">

                                                        <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg" alt=" Bộ Quần Áo Bóng Đá ALPHA " src="//product.hstatic.net/200000247969/product/alpha-chuoi_abce46a528094dea93a7f9f6b04849e3_large.jpg">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-da-alpha-egan-hoa-tiet-camo-thoang-mat-de-mac-phu-hop-luyen-tap-the-thao-td04">Bộ Quần Áo Bóng Đá ALPHA</a></h3>
                                                <p class="proloop--price">
                                                    <span class="price">315,000₫</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row wrapimage-container">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <figure class="groupbanner_image">
                                <a class="groupbanner_image_link" href="https://cp-sport.vn/collections/trang-phuc-chay-bo">
                                    <div class="groupbanner_image_block">
                                        <picture>
                                            <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/home_groupbanner_banner1.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/home_groupbanner_banner1.jpg?v=68" alt="Trang phục chạy bộ">
                                        </picture>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <figure class="groupbanner_image">
                                <a class="groupbanner_image_link" href="https://cp-sport.vn/collections/trang-phuc-bong-da">
                                    <div class="groupbanner_image_block">
                                        <picture>
                                            <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/home_groupbanner_banner2.jpg?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/home_groupbanner_banner2.jpg?v=68" alt="Trang phục bóng đá">
                                        </picture>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>

            </section>


            <!-- ============ ========================= ============ -->
            <section class="sectionCollection-4">
                <h2 class="hTitle">
                    <a href="#">
                        Trang phục bóng chuyền
                    </a>
                </h2>
                <div class="wraplist-container">

                    <div class="row listProduct-row listProduct-resize-1">

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-bong-chuyen-harry-nam" title="Bộ Quần Áo Bóng Chuyền HARRY nam">
                                        <picture class="first-image">

                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/d1_06fa03f0b7d846f4944503973674b69a_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền HARRY nam " src="//product.hstatic.net/200000247969/product/d1_06fa03f0b7d846f4944503973674b69a_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/d1_9f8c227c0c70421884021d11fa3ef3b4_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền HARRY nam " src="//product.hstatic.net/200000247969/product/d1_9f8c227c0c70421884021d11fa3ef3b4_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-bong-chuyen-harry-nam">Bộ Quần Áo Bóng Chuyền HARRY nam</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">170,000₫</span>

                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-savia-nu" title="Bộ Quần Áo Bóng Chuyền SAVIA Nữ">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/114_f8a0bcaa6f8d4b20b87e803bac91218c_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền SAVIA Nữ " src="//product.hstatic.net/200000247969/product/114_f8a0bcaa6f8d4b20b87e803bac91218c_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/115_274e3ffedcb7484e90c75e0cbe368e91_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền SAVIA Nữ " src="//product.hstatic.net/200000247969/product/115_274e3ffedcb7484e90c75e0cbe368e91_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-savia-nu">Bộ Quần Áo Bóng Chuyền SAVIA Nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">170,000₫</span>

                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-harry-nu" title="Bộ Quần Áo Bóng Chuyền HARRY nữ">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/d2_ede954472cca4734a9846a2279ad3597_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền HARRY nữ " src="//product.hstatic.net/200000247969/product/d2_ede954472cca4734a9846a2279ad3597_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/d2_6e3066a0f94b47ac9abfe44672bbb600_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền HARRY nữ " src="//product.hstatic.net/200000247969/product/d2_6e3066a0f94b47ac9abfe44672bbb600_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-harry-nu">Bộ Quần Áo Bóng Chuyền HARRY nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">170,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <div class="pro-soldout"><span>Hết hàng</span></div>
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nam-zentiga-cp-sport-bc05-thiet-ke-nang-dong-hien-dai-phu-hop-tap-luyen-the-thao-vui-choi" title="Bộ Quần Áo Bóng Chuyền ZENTIGA nam">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/do__14__3114bb38ce644cdeb4e17c73431f4fd1_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ZENTIGA nam " src="//product.hstatic.net/200000247969/product/do__14__3114bb38ce644cdeb4e17c73431f4fd1_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/do__11__51fcc26461504a08b148798146e70d20_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ZENTIGA nam " src="//product.hstatic.net/200000247969/product/do__11__51fcc26461504a08b148798146e70d20_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nam-zentiga-cp-sport-bc05-thiet-ke-nang-dong-hien-dai-phu-hop-tap-luyen-the-thao-vui-choi">Bộ Quần Áo Bóng Chuyền ZENTIGA nam</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">155,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <div class="pro-soldout"><span>Hết hàng</span></div>
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nu-zentiga-cp-sport-bc05-thiet-ke-tinh-te-hien-dai-nang-dong-phu-hop-tap-luyen-the-thao-vui-choi" title="Bộ Quần Áo Bóng Chuyền ZENTIGA nữ">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/do__9__8e95d96cd9d948b6b18f52cc2ab1e96e_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ZENTIGA nữ " src="//product.hstatic.net/200000247969/product/do__9__8e95d96cd9d948b6b18f52cc2ab1e96e_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/do__15__6af364f4f85e47c5a4013b98d3b242d0_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ZENTIGA nữ " src="//product.hstatic.net/200000247969/product/do__15__6af364f4f85e47c5a4013b98d3b242d0_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nu-zentiga-cp-sport-bc05-thiet-ke-tinh-te-hien-dai-nang-dong-phu-hop-tap-luyen-the-thao-vui-choi">Bộ Quần Áo Bóng Chuyền ZENTIGA nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">155,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <div class="pro-soldout"><span>Hết hàng</span></div>
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nam-galvin-cp-sport-bc03-thiet-ke-hien-dai-nang-dong-phu-hop-tap-luyen-the-thao-van-dong-manh" title="Bộ Quần Áo Bóng Chuyền GALVIN nam">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/bich__8__f54c81bf6bd84813bff2c05524ef6844_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền GALVIN nam " src="//product.hstatic.net/200000247969/product/bich__8__f54c81bf6bd84813bff2c05524ef6844_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/bich__7__cd5c423022424ecbace49eaa29e0a4dd_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền GALVIN nam " src="//product.hstatic.net/200000247969/product/bich__7__cd5c423022424ecbace49eaa29e0a4dd_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nam-galvin-cp-sport-bc03-thiet-ke-hien-dai-nang-dong-phu-hop-tap-luyen-the-thao-van-dong-manh">Bộ Quần Áo Bóng Chuyền GALVIN nam</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">145,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <div class="pro-soldout"><span>Hết hàng</span></div>
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nu-galvin-cp-sport-bc03-thiet-ke-tinh-te-nang-dong-phu-hop-tap-luyen-the-thao-van-dong-manh" title="Bộ Quần Áo Bóng Chuyền GALVIN nữ">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/bich__12__2ef63052b1bf43cdb6431d52af387172_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền GALVIN nữ " src="//product.hstatic.net/200000247969/product/bich__12__2ef63052b1bf43cdb6431d52af387172_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop lazyloaded" data-src="//product.hstatic.net/200000247969/product/bich__10__53e0c199753b48a1956474139be499b9_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền GALVIN nữ " src="//product.hstatic.net/200000247969/product/bich__10__53e0c199753b48a1956474139be499b9_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-the-thao-bong-chuyen-nu-galvin-cp-sport-bc03-thiet-ke-tinh-te-nang-dong-phu-hop-tap-luyen-the-thao-van-dong-manh">Bộ Quần Áo Bóng Chuyền GALVIN nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">145,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-chuyen-enzo-cp-sport-chat-lieu-vai-me-soc-tham-hut-mo-hoi-thoai-mai-hoat-dong-bc04" title="Bộ Quần Áo Bóng Chuyền ENZO nam">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/enzo-bich_55d4abc0485a4ed5b488f26786755367_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ENZO nam " src="//product.hstatic.net/200000247969/product/enzo-bich_55d4abc0485a4ed5b488f26786755367_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/enzo-do_cbf6a1beee404bcda83fddaa4cc6574f_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ENZO nam " src="//product.hstatic.net/200000247969/product/enzo-do_cbf6a1beee404bcda83fddaa4cc6574f_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/quan-ao-bong-chuyen-enzo-cp-sport-chat-lieu-vai-me-soc-tham-hut-mo-hoi-thoai-mai-hoat-dong-bc04">Bộ Quần Áo Bóng Chuyền ENZO nam</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">160,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-4 col-xs-4 product-loop product-small">

                            <div class="product-inner product-resize fixheight" style="height: 259px;">
                                <div class="proloop-image image-resize" style="height: 177px;">
                                    <div class="pro-soldout"><span>Hết hàng</span></div>
                                    <a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-nu-enzo-cp-sport-bc04-chat-lieu-vai-me-soc-tham-hut-mo-hoi-thoai-mai-hoat-dong" title="Bộ Quần Áo Bóng Chuyền ENZO nữ">
                                        <picture class="first-image">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/bich__16__3beec5adc2594af3a99f0328bc7e2ca3_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ENZO nữ " src="//product.hstatic.net/200000247969/product/bich__16__3beec5adc2594af3a99f0328bc7e2ca3_large.jpg">
                                        </picture>

                                        <picture class="second-image hidden-xs">
                                            <img class="img-loop ls-is-cached lazyloaded" data-src="//product.hstatic.net/200000247969/product/bich__15__ad3ac00bb3f34a5181561bc1f2fc1344_large.jpg" alt=" Bộ Quần Áo Bóng Chuyền ENZO nữ " src="//product.hstatic.net/200000247969/product/bich__15__ad3ac00bb3f34a5181561bc1f2fc1344_large.jpg">
                                        </picture>
                                    </a>
                                </div>
                                <div class="proloop-detail">
                                    <h3><a href="#" class="quickview-product" data-handle="/products/bo-quan-ao-bong-chuyen-nu-enzo-cp-sport-bc04-chat-lieu-vai-me-soc-tham-hut-mo-hoi-thoai-mai-hoat-dong">Bộ Quần Áo Bóng Chuyền ENZO nữ</a></h3>
                                    <p class="proloop--price">
                                        <span class="price">160,000₫</span>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>
        </div>


        <!-- ============ FOOTER ========================= ============ -->

        <footer class="mainFooter   mainFooter-toolbar  ">
            <div class="footer-container">
                <div class="container">
                    <p class="expand-title">
                        Thông tin thêm
                        <span class="arrow-up"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </p>
                    <div class="expand-collapsed row">

                        <div class="col-md-6 col-sm-12 col-xs-12 widget-footer">
                            <h4 class="title-footer">Về CP Sport</h4>
                            <div class="content-footer block-collapse row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>Trang mua sắm trực tuyến của thương hiệu thể thao CP SPORT, trang phục thi đấu, phụ kiện, thời trang thể thao giúp bạn tiếp cận xu hướng thời trang thể thao mới nhất.</p>

                                    <div class="logo-footer hidden-xs">
                                        <a href="http://online.gov.vn/Home/WebDetails/85556" target="_blank" rel="noreferrer">
                                            <img class=" lazyloaded" data-src="//theme.hstatic.net/200000247969/1000814323/14/footer_logobct_img.png?v=68" src="//theme.hstatic.net/200000247969/1000814323/14/footer_logobct_img.png?v=68" alt="Bộ Công Thương">
                                        </a>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="address-footer">
                                        <ul>
                                            <li class="contact-1"><b>Địa chỉ:</b> 766A/30-32 Lạc Long Quân, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</li>
                                            <li class="contact-2"><b>Điện thoại:</b> 0926.682.682</li>
                                            <li class="contact-4"><b>Email:</b> info@cp-sport.vn</li>
                                        </ul>
                                    </div>

                                    <div class="logo-footer visible-xs">
                                        <a href="http://online.gov.vn/Home/WebDetails/85556" target="_blank" rel="noreferrer">
                                            <img class="lazyload" data-src="//theme.hstatic.net/200000247969/1000814323/14/footer_logobct_img.png?v=68" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Bộ Công Thương">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 widget-footer">
                            <h4 class="title-footer">Hỗ trợ khách hàng</h4>
                            <div class="content-footer block-collapse">
                                <ul class="fList-link">

                                    <li class="item">
                                        <a href="#" title="Thông tin tuyển dụng">Thông tin tuyển dụng</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Tìm kiếm">Tìm kiếm</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Giới thiệu">Giới thiệu</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Chính sách Cộng tác viên &amp; Đại lý">Chính sách Cộng tác viên &amp; Đại lý</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                                    </li>

                                    <li class="item">
                                        <a href="#" title="Hướng dẫn cách thanh toán và áp dụng Voucher trên REEPAY">Hướng dẫn cách thanh toán và áp dụng Voucher trên REEPAY</a>
                                    </li>

                                </ul>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 widget-footer">
                            <h4 class="title-footer">Fanpage Facebook</h4>
                            <div class="content-footer block-collapse">
                                <div class="footer-static-content">
                                    <div class="fb-page fb_iframe_widget lazyloaded" data-href="https://www.facebook.com/CongtythethaoCPSPORT" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=263&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCongtythethaoCPSPORT&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false"><span style="vertical-align: bottom; width: 263px; height: 130px;"><iframe name="fa3063b40c7c58" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v11.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2abcd53c84f6ac%26domain%3Dcp-sport.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fcp-sport.vn%252Ff314a8fa9367028%26relation%3Dparent.parent&amp;container_width=263&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCongtythethaoCPSPORT&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 263px; height: 130px;" class=""></iframe></span></div>
                                </div>
                                <div style="clear:both;"></div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="container btnsan">
                    <a class="btnft groove" href="https://shopee.vn/shop/456267622/" target="_blank" title="Mua hàng trên Shopee">Shopee</a>
                    <a class="btnft flicker" href="https://www.lazada.vn/shop/egan-official-store?path=index.htm&amp;langFlag=vi&amp;lang=vi&amp;pageTypeId=1" target="_blank" title="Mua hàng trên Lazada">Lazada</a>
                    <a class="btnft squeeze" href="https://tiki.vn/cua-hang/egan-official-store" target="_blank" title="Mua hàng trên Tiki">Tiki</a>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <div class="container">
                    <p>
                        CÔNG TY TNHH THỂ THAO CP<br>
                        Mã số doanh nghiệp: 0313091407 Do Sở Kế Hoạch Và Đầu Tư TP.HCM cấp ngày 13/01/2015, sửa đổi bổ sung ngày 19/12/2019<br>
                        Người đại diện: Trần Văn Hoàn
                    </p>
                    <p>Copyright © 2022 <a href="https://cp-sport.vn"> Công ty TNHH Thể thao CP</a>.
                    </p>
                </div>
            </div>
        </footer>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./CONTENT/JS/style.js"></script>
</body>

</html>