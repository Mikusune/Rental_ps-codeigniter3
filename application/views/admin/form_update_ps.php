<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data ps</h1>
        </div>

        <div class="card">
        	<div class="card-body">

        		<?php foreach ($ps as $mb) : ?>
        		<form method="POST" action="<?php echo base_url('admin/data_ps/update_ps_aksi') ?>" enctype="multipart/form-data">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-group">
        					<label>Type ps</label>
        					<input type="hidden" name="id_ps" value="<?php echo $mb->id_ps ?>">
        					<select name="kode_type" class="form-control">
        						<option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>

        						<?php foreach ($type as $tp) :?>
        							<option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
        						<?php endforeach ?>
        					</select>
        					<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Merk</label>
        					<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
        					<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Ukuran Disk</label>
        					<input type="text" name="ukuran_disk" class="form-control" value="<?php echo $mb->ukuran_disk ?>">
        					<?php echo form_error('ukuran_disk','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Warna</label>
        					<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
        					<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
        				</div>

                        <div class="form-group">
                            <label>Kabel HDMI</label>
                            <select name="kabel_hdmi" class="form-control">
                                <option <?php if($mb->kabel_hdmi== 1){echo "selected='selected'";}
                                    echo $mb->kabel_hdmi;?> value="1">Tersedia</option>

                                <option <?php if($mb->kabel_hdmi== 0){echo "selected='selected'";}
                                    echo $mb->kabel_hdmi;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('kabel_hdmi','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Kabel Power</label>
                            <select name="kabel_power" class="form-control">
                                <option <?php if($mb->kabel_power == 1){echo "selected='selected'";}
                                    echo $mb->kabel_power;?> value="1">Tersedia</option>

                                <option <?php if($mb->kabel_power == 0){echo "selected='selected'";}
                                    echo $mb->kabel_power;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('kabel_power','<div class="text-small text-danger">','</div>') ?>
                        </div>


                        <div class="form-group">
                            <label>Controller</label>
                            <select name="controller" class="form-control">
                                <option <?php if($mb->controller == 1){echo "selected='selected'";}
                                    echo $mb->controller;?> value="1">Tersedia</option>

                                <option <?php if($mb->controller == 0){echo "selected='selected'";}
                                    echo $mb->controller;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('controller','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Game Digital</label>
                            <select name="game" class="form-control">
                                <option <?php if($mb->game == 1){echo "selected='selected'";}
                                    echo $mb->game;?> value="1">Tersedia</option>

                                <option <?php if($mb->game == 0){echo "selected='selected'";}
                                    echo $mb->game;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('game','<div class="text-small text-danger">','</div>') ?>
                        </div>


                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option <?php if($mb->status == 1){echo "selected='selected'";}
                                    echo $mb->status;?> value="1">Tersedia</option>

                                <option <?php if($mb->status == 0){echo "selected='selected'";}
                                    echo $mb->status;?> value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                        </div>



        			</div>
        			<div class="col-md-6">

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>denda</label>
                            <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                            <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                        </div>

        				<div class="form-group">
        					<label>Tahun</label>
        					<input type="number" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
        					<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Status</label>
        					<select name="status" class="form-control">
        						<option <?php if($mb->status == 1){echo "selected='selected'";}
        							echo $mb->status;?> value="1">Tersedia</option>

        						<option <?php if($mb->status == 0){echo "selected='selected'";}
        							echo $mb->status;?> value="0">Tidak Tersedia</option>
        					</select>
        					<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
        				</div>

                        <div class="form-group">
                            <label>Pemilik Rental</label>
                            <select name="nama_rental" class="form-control">
                                <option value="<?php echo $mb->nama_rental?>"><?php echo $mb->nama_rental?></option>
                                <?php foreach ($nama_rental as $nr) :?>
                                    <?php if($mb->nama_rental != $nr->nama_rental) { ?>
                                        <option value="<?php echo $nr->nama_rental?>"><?php echo $nr->nama_rental?></option>
                                    <?php }else{?>
                                    <?php } ?>
                                <?php endforeach ?>

                            </select>
                            <?php echo form_error('nama_rental','<div class="text-small text-danger">','</div>') ?>
                        </div>


        				<div class="form-group">
        					<label>Gambar</label>
        					<input type="file" name="gambar" class="form-control">
        				</div>

        				<button type="submit" class="btn btn-primary">Simpan</button>
        				<button type="reset" class="btn btn-danger">Reset</button>
        			</div>
        		</div>
        		</form>
        	<?php endforeach; ?>
        	</div>
        </div>
    </section>
</div> 