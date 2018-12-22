<!-- isi file index -->

      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header"><?php echo $sub_judul; ?></div>
          <div class="card-body">
             <form action="<?php echo site_url('admin/dosen/proses_edit'); ?>" method="post">
            <div class="form-group">
              <label>NIK</label>
              <input class="form-control" name="nik"  value="<?php echo $isi_data->nik; ?>"></input>
            </div>
            <div class="form-group">
              <label>Nama Dosen</label>
              <input class="form-control" name="nama_dosen"  value="<?php echo $isi_data->nama_dosen; ?>"></input>
            </div>
            <div class="form-group">
              <label>Matakuliah yang di Ampu</label>
              <select class="form-control" name="matakuliah_yg_diampu"  value="<?php echo $isi_data->matakuliah_yg_diampu; ?>">
              <option value="Sistem Operasi">Sistem Operasi</option>
              <option value="Pemrograman Web 1">Pemrograman Web 1</option>
              <option value="Sistem Basis Data">Sistem Basis Data</option>
              <option value="Sistem Informasi Manajemen">Sistem Informasi Manajemen</option>
              <option value="e-commers">e-commers</option>
              </select>
            </div>
            <div class="form-group">
             <input type="submit" name="submit" value="simpan" class="btn btn-success">
            <a href="<?php echo site_url('admin/dosen'); ?>" class="btn btn-danger">Batal</a>
           
            </div>
          </form> 
          </div>  
        </div>
      </div>
   
