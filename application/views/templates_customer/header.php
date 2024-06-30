<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Rental PS</title>

    <link href="<?php echo base_url() ?>assets/assets_shop/css/contact.css" rel="stylesheet">
    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/responsive.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets_shop/vendor/animate.css/animate.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets_shop/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets_shop/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets_shop/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets_shop/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assets_shop/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

       
        a{
            text-decoration:none
        }
        h1 {
        text-align: left;
        }
        .section-title {
	
	    text-align: center !important;
}

        #topbar {
        background: #444444;
        font-size: 15px;
        height: 40px;
        padding: 0;
        }
        
        #topbar .contact-info a {
        line-height: 0;
        color: #fbfbfb;
        transition: 0.3s;
        }
        
        #topbar .contact-info a:hover {
        color:#5DADE2;
        }
        
        #topbar .contact-info i {
        color: #5DADE2;
        line-height: 0;
        margin-right: 5px;
        }
        
        #topbar .contact-info .phone-icon {
        margin-left: 15px;
        }
        
        #topbar .social-links a {
        color: #fbfbfb;
        padding: 4px 12px;
        display: inline-block;
        line-height: 1px;
        transition: 0.3s;
        }
        
        #topbar .social-links a:hover {
        color: #5DADE2;
        }

        .banner_section {
            width: 100%;
            float: left;
            background-color:#333333 ;
            background-image: <?php echo base_url() ?>('assets/assets_shop/img/banner-bg.png');
            height: auto;
            padding-top: 200px;
            padding-bottom: 150px;
            background-size: cover;
        }
        .image_1 {
            width: 80%;
            float: center;
            margin-top: -10%;
            padding-left: 50px;
            
        }

        .video_text{
            font-family: 'Arial, Helvetica, sans-serif', Sans-serif;
            width: 100%;
            float: left;
            font-size: 50px;
            color: #fefeff;
            font-weight: 300;
            text-transform: uppercase;

        }
        .controller_text {
            font-family: Arial, sans-serif;
            width: 100%;
            float: left;
            font-size: 70px;
            color: #599ee9;
            font-weight: 600;
            text-transform: uppercase;
            word-spacing:50px;
            
    
        }
        .banner_text {
            width: 100%;
            float: left;
            font-size: 16px;
            color: #fefeff;
            font-weight: 500;
            margin-left: 0px;
            padding-top: 50px;
            text-align: left;
        }


        .contact .info {
        border-top: 3px solid #5DADE2;
        border-bottom: 3px solid #5DADE2;
        }
        .contact .php-email-form {
        border-top: 3px solid #5DADE2;
        border-bottom: 3px solid #5DADE2;
        }
        .contact .php-email-form button[type=submit] {
        background-color: #5DADE2;
        }
        .contact .php-email-form button[type=submit]:hover {
        background: #307aac;
        }
        .contact .info i {

        color: #5DADE2;
        
        }

        .contact .info h4 {
        color: #222222;
        }

        .contact .info p {

        color: #555555;
        }

        .contact .info .social-links {
        padding-left: 60px;
        }

        .contact .info .social-links a {

        background: #333;
        color: #fff;
        }

        .contact .info .social-links a:hover {
        background: #5DADE2;
        color: #fff;
        }

        .contact .info .email:hover i,
        .contact .info .address:hover i,
        .contact .info .phone:hover i {
        background: #5DADE2;
        color: #fff;
        }



        .contact .php-email-form .error-message {
        color: #fff;
        background: #ed3c0d;
        }



        .contact .php-email-form .sent-message {
        color: #fff;
        background: #307aac;
        
        }

        .contact .php-email-form .loading {
        background: #fff;
        }

        .contact .php-email-form .loading:before {
        
        border: 3px solid #307aac;
        border-top-color: #eee;
        }


        .contact .php-email-form textarea:focus {
        border-color: #5DADE2;
        }

        button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        padding: 0;
        font-size: inherit;
        font-family: inherit;
        }

        button.learn-more {
        width: 12rem;
        height: auto;
        float:left;
        }

        button.learn-more .circle {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: relative;
        display: block;
        margin: 0;
        width: 3rem;
        height: 3rem;
        background: #5DADE2;
        border-radius: 1.625rem;
        }

        button.learn-more .circle .icon {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background: #fff;
        }

        button.learn-more .circle .icon.arrow {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        left: 0.625rem;
        width: 1.125rem;
        height: 0.125rem;
        background: none;
        }

        button.learn-more .circle .icon.arrow::before {
        position: absolute;
        content: "";
        top: -0.29rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.625rem;
        border-top: 0.125rem solid #fff;
        border-right: 0.125rem solid #fff;
        transform: rotate(45deg);
        }

        button.learn-more .button-text {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0.75rem 0;
        margin: 0 0 0 1.85rem;
        color: white;
        font-weight: 700;
        line-height: 1.6;
        text-align: center;
        text-transform: uppercase;
        }

        button:hover .circle {
        width: 100%;
        }

        button:hover .circle .icon.arrow {
        background: #fff;
        transform: translate(1rem, 0);
        }

        button:hover .button-text {
        color: #fff;
        }

    </style>
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
            <div class="loader"></div>
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <section id="topbar" class="d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">layanan@rentalps.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +62 895 3080 7615
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
            </div>
        </section>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="<?php echo base_url() ?>" class="logo">
                            <img src="<?php echo base_url() ?>assets/assets_shop/img/logops.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="<?php echo base_url('customer/dashboard') ?>">Home</a></li>

                                <li><a href="<?php echo base_url('customer/data_ps') ?>">Console</a></li>

                                <li><a href="<?php echo base_url('customer/contact') ?>">Contact</a></li>
                                
                                <?php if($this->session->userdata('nama')) { ?>

                                    <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>

                                <?php }else{ ?>

                                <?php } ?>

                                
                                <?php if($this->session->userdata('nama')) { ?>
                          
                                    <li><a href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>

                                    <li><a class="text-warning">Halo, <?php echo $this->session->userdata('nama') ?></a></li>

                                    <li><a href="<?php echo base_url('auth/logout') ?>">| LOGOUT</a></li>
                                <?php }else{ ?>
                                    <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                                    <li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
                                <?php } ?>
                                
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
