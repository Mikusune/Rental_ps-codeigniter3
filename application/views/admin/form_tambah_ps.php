<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Data ps</h1>
        </div>

        <div class="card">
        	<div class="card-body">
        		<form method="POST" action="<?php echo base_url('admin/data_ps/tambah_ps_aksi') ?>" enctype="multipart/form-data">
        		<div class="row">
        			<div class="col-md-6">
        				<div class="form-group">
        					<label>Type ps</label>
        					<select name="kode_type" class="form-control">
        						<option value="">--Pilih Type ps--</option>

        						<?php foreach ($type as $tp) :?>
        							<option value="<?php echo $tp->kode_type?>"><?php echo $tp->nama_type?></option>
        						<?php endforeach ?>
        					</select>
        					<?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Merk</label>
        					<input type="text" name="merk" class="form-control">
        					<?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Ukuran disk</label>
        					<input type="text" name="ukuran_disk" class="form-control">
        					<?php echo form_error('ukuran_disk','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Warna</label>
        					<input type="text" name="warna" class="form-control">
        					<?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
        				</div>

                        <div class="form-group">
                            <label>Kabel Hdmi</label>
                            <select name="kabel_hdmi" class="form-control">
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kabel power</label>
                            <select name="kabel_power" class="form-control">
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>controller</label>
                            <select name="controller" class="form-control">
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>game digital</label>
                            <select name="game" class="form-control">
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>

        			</div>
        			<div class="col-md-6">

                        <div class="form-group">
                            <label>Harga Sewa/Hari</label>
                            <input type="number" name="harga" class="form-control">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Denda</label>
                            <input type="number" name="denda" class="form-control">
                            <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                        </div>

        				<div class="form-group">
        					<label>Tahun</label>
        					<input type="number" name="tahun" class="form-control">
        					<?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
        				</div>

        				<div class="form-group">
        					<label>Status</label>
        					<select name="status" class="form-control">
        						<option value="">--Pilih Status--</option>
        						<option value="1">Tersedia</option>
        						<option value="0">Tidak Tersedia</option>
        					</select>
        					<?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
        				</div>

                        <div class="form-group">
                            <label>Pemilik Rental</label>
                            <select name="nama_rental" class="form-control">
                                <option value="">--Pilih Pemilik--</option>
                                <?php foreach ($nama_rental as $nr) :?>
                                    <option value="<?php echo $nr->nama_rental?>"><?php echo $nr->nama_rental?></option>
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
        	</div>
        </div>
    </section>
</div> 