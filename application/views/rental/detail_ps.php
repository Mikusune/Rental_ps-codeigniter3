<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail ps</h1>
        </div>

        <?php foreach ( $detail as $dt ) : ?>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-5">
                            <img width="400" src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">

                        </div>

                        <div class="col-md-7">
                            
                            <table class="table">
                                <tr>
                                    <td>Type ps</td>
                                    <td>
                                        <?php 
                                            if($dt->kode_type == "SDN"){
                                                echo "Sedan";
                                            }elseif($dt->kode_type == "HTB"){
                                                echo "Hatchback";
                                            }elseif($dt->kode_type == "MPV"){
                                                echo "Multi Purpose Vehicle";
                                            }else{
                                                echo "<span class='text-danger'> Tipe ps belum terdaftar </span>";
                                            }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Merk</td>
                                    <td><?php echo $dt->merk ?></td>
                                </tr>

                                <tr>
                                    <td>Ukaran Disk</td>
                                    <td><?php echo $dt->ukuran_disk ?></td>
                                </tr>

                                <tr>
                                    <td>Warna</td>
                                    <td><?php echo $dt->warna ?></td>
                                </tr>

                                <tr>
                                    <td>Tahun</td>
                                    <td><?php echo $dt->tahun?></td>
                                </tr>

                                <tr>
                                    <td>Harga</td>
                                    <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                                </tr>

                                <tr>
                                    <td>Denda</td>
                                    <td>Rp. <?php echo number_format($dt->denda,0,',','.')?></td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <?php 
                                            if($dt->status == "0"){
                                                echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                                            }else{
                                                echo "<span class='badge badge-primary'>Tersedia </span>";
                                            }
                                        ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kabel HDMI</td>
                                    <td>
                                        <?php 
                                            if($dt->kabel_hdmi== "0"){
                                                echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                                            }else{
                                                echo "<span class='badge badge-primary'>Tersedia </span>";
                                            }
                                        ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kabel Power</td>
                                    <td>
                                        <?php 
                                            if($dt->kabel_power == "0"){
                                                echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                                            }else{
                                                echo "<span class='badge badge-primary'>Tersedia </span>";
                                            }
                                        ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Controller</td>
                                    <td>
                                        <?php 
                                            if($dt->controller == "0"){
                                                echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                                            }else{
                                                echo "<span class='badge badge-primary'>Tersedia </span>";
                                            }
                                        ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Game Digital</td>
                                    <td>
                                        <?php 
                                            if($dt->game == "0"){
                                                echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
                                            }else{
                                                echo "<span class='badge badge-primary'>Tersedia </span>";
                                            }
                                        ?>    
                                    </td>
                                </tr>
                            </table>

                            <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('rental/data_ps') ?>">Kembali</a>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('rental/data_ps/update_ps/') . $dt->id_ps ?>">Update</a>
                        </div>

                    </div>
                </div>
            </div>

        <?php endforeach ?>

    </section>
</div>