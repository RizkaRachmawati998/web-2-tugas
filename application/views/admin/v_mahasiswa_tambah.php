<!-- isi file index -->

      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header" style="background-color: blue"><?php echo $sub_judul; ?></div>
          <div class="card-body">
          <form action="<?php echo site_url('admin/mahasiswa/proses_tambah'); ?>" method="post">
            <div class="form-group">
              <label>NIM</label>
              <input class="form-control" name="nim"></input>
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input class="form-control" name="nama_mahasiswa"></input>
            </div>
            <div class="form-group">
              <label>Program Studi</label>
              <select class="form-control" name="program_studi">
              <option value="D3 MI">D3 MI</option>
              <option value="D3 TI">D3 TI</option>
              <option value="S1 TI">S1 TI</option>
              </select>
            </div>
            <div class="form-group">
            <input type="submit" name="submit" value="simpan" class="btn btn-success">
            <a href="<?php echo site_url('admin/mahasiswa'); ?>" class="btn btn-danger">Batal</a>
            </div>
          </form> 
          </div>
        </div>
      </div>
   
