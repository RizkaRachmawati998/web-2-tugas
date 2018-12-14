 <div class="col-md-12">
        <div class="card">
          <div class="card-header " style="background-color: blue"  ><?php echo $sub_judul; ?></div>
          <div class="card-body">
            
            <?php

            if ($this->session->flashdata('info')) {
               echo "<div class='alert alert-primary'>".$this->session->flashdata('info')."</div>";
             } 

             ?>

            <a href="<?php echo site_url('admin/pengumuman/tambah'); ?>" 
              class="btn btn-primary">Tambah Data</a>

              <br> <br>

          	<?php
          	foreach ($isi_tabel as $value):
          	 ?>

          	<div style="border: 1px solid  red;padding: 15px; margin-bottom: 10px">

          <div class="row">
          	<div class="col-sm-1">
          		<img src="<?= base_url('assets/rizka.JPG') ?>" class="img-thumbnail">
          	</div>

          	<div class="col-sm-4">
          		Penulis : <?= $value->penulis; ?> <br>
          		<small><?= $value->created_at; ?></small>
          	</div>

            <div class="col-sm-7">
              <a href="<?= site_url('admin/pengumuman/hapus/'.$value->id); ?>" class="btn btn-danger" onclick= "return confirm('Anda yakin:?')">Hapus</a>
              <a href="<?= site_url('admin/pengumuman/edit/'.$value->id); ?>" class="btn btn-warning">Edit</a>
            </div>
            
          </div>
          <div class="row">
          	<div class="col-sm-12">
          		<h4><?= $value->judul; ?></h4>
          		<p><?= $value->isi; ?></p>
          		</div>
          	</div>

          </div><!-- border stop-->
          <?php endforeach; ?>

          </div>
        </div>
      </div>