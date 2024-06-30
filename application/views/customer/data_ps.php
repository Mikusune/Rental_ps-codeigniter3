<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
<div class="container">

    <div class="row">
        <!-- Page Title Start -->
        <div class="col-lg-12">
            <div class="section-title  text-center">
                <h2>Pilihan ps</h2>
                <span class="title-line"><i class="fa fa-gamepad"></i></span>
                <p>Berbagai ps terbaik untuk kebutuhan anda</p>
            </div>
        </div>
        <!-- Page Title End -->
    </div>
</div>
</section>
<!--== Page Title Area End ==-->

<!--==  List Area Start ==-->
<section id="car-list-area" class="section-padding">
<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
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