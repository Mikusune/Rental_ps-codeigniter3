    <!--== SlideshowBg Area Start ==-->
     <!-- banner section start -->
        <!--== SlideshowBg Area Start ==-->
        <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Welcome to</h1>
                <h1 class="controller_text">Rental </h1>
                <h1 class="controller_text"> PlayStation</h1>
                <p class="banner_text">Mulai Petualangan Gaming Anda dengan Layanan Sewa PlayStation - Hadirkan Konsol dan Game Terbaru ke Rumah Anda, Memberikan Kesenangan yang Tak Tertandingi untuk Semua Jenis Gamer</p>
                <div class="shop_bt"><a href="<?php echo base_url('customer/data_ps') ?>">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="<?php echo base_url() ?>assets/assets_shop/img/ps4.png"></div>
            </div>
          </div>
          </div>
         
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner section end -->
    <!--== SlideshowBg Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->

                        <?php foreach ($type as $ty) : ?>
                            <div class="single-partner">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <!-- <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT"> -->
                                        <h5><?php echo $ty->nama_type ?></h5>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <!-- Single Partner End -->

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_customer ?></span>+</p>
                                        <h4>CUSTOMER</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-gamepad"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_ps ?></span>+</p>
                                        <h4>CONSOLE TERSEDIA</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>

                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $total_rental ?></span>+</p>
                                        <h4>PENYEDIA RENTAL</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h3>Pilih Console Anda</h3>
                        <span class="title-line"><i class="fa fa-gamepad"></i></span>
                        <p>Console Game Pilihan Terbaik Untuk Memberikan Anda Kenyamanan</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->

                                <div class="home2-car-filter">
                                    <a href="#" data-filter="*" class="active">all</a>

                                    <?php foreach ($type as $tp ) : ?>
                                        <a href="#" data-filter=".<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Content-wrap -->
                                <div class="row popular-car-gird">

                                    <?php foreach ($ps as $mb ) : ?>
                                        <!-- Single Popular Start -->
                                        <div class="col-lg-6 col-md-6 <?php echo $mb->kode_type ?>">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="<?php echo base_url('assets/upload/' . $mb->gambar) ?>">
                                                        <img style="height: 300px"src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" alt="<?php echo $mb->merk ?>">
                                                    </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="<?php echo base_url('customer/data_ps/detail_ps/') . $mb->id_ps ?>"><?php echo $mb->merk ?></a>
                                                        <span class="price"><i class="fa fa-tag"></i>Rp. <?php echo number_format($mb->harga,0,',','.') ?>/Hari</span>
                                                    </h3>

                                                    <h5><?php echo $mb->nama_rental ?></h5>

                                                    <div class="p-car-feature">
                                                        <?php if($mb->kabel_hdmi== '1') { ?>
                                                            <a>Kabel HDMI</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->kabel_power == '1') { ?>
                                                            <a>Kabel Power</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->controller == '1') { ?>
                                                            <a>Controller</a>
                                                        <?php } else { ?>
                                                        <?php } ?>

                                                        <?php if($mb->game == '1') { ?>
                                                            <a>Game Digital</a>
                                                        <?php } else { ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular End -->

                                    <?php endforeach; ?>
                                    
                                </div>
                                <!-- Choose Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->

     

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h3>Contact</h3>
          <span class="title-line"><i class="fa fa-comments"></i></span>
          <p>Hubungi kami untuk mengetahui lebih banyak. Dapatkan layanan terbaik dan prioritas dari kami.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Margonda No.8, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>layanan@rentalps.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 895 3080 7615</p>
              </div>

              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Universitas+Bina+Sarana+Informatika+Kampus+Margonda+(UBSI+Margonda)" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="<?php echo base_url(); ?>Admin/Contact/simpan_post/" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="txtName" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="txtEmail" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Your Phone Number</label>
                <input type="text" class="form-control" name="txtPhone" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="txtMsg" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <br><br>
