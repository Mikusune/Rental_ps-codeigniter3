<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data ps</h1>
        </div>

        <a href="<?php echo base_url('admin/data_ps/tambah_ps')?>" class="btn btn-primary mb-3">Tambah Data</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover table-striper table-bordered">
        	<thead>
                <tr>
            		<th>No</th>
    				<th>Gambar</th>
    				<th>Type</th>
    				<th>Merk</th>
    				<th>Ukuran Disk</th>
    				<th>Status</th>
    				<th>Aksi</th>
                </tr>
        	</thead>
        	<tbody>

        		<?php
        			$no = 1;
        			foreach ($ps as $mb) : ?>
                        <tr>
            				<td><?php echo $no++ ?></td>
            				<td>
                                <img height="50px" src="<?php echo base_url() . 'assets/upload/' . $mb->gambar ?>">            
                            </td>
            				<td><?php echo $mb->kode_type ?></td>
            				<td><?php echo $mb->merk ?></td>
            				<td><?php echo $mb->ukuran_disk ?></td>
            				<td><?php 
            					if($mb->status == "0"){
            						echo "<span class='badge badge-danger'> Tidak Tersedia </span>";
            					} else{
            						echo "<span class='badge badge-primary'> Tersedia </span>";
            					}
            				?></td>
            				<td>
            					<a href="<?php echo base_url('admin/data_ps/detail_ps/').$mb->id_ps ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
            					<a href="<?php echo base_url('admin/data_ps/delete_ps/').$mb->id_ps ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            					<a href="<?php echo base_url('admin/data_ps/update_ps/').$mb->id_ps ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
            				</td>
                        </tr>
        		<?php endforeach; ?>

        	</tbody>

        </table>
    </section>
</div>