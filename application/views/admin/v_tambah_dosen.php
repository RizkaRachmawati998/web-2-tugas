<!-- isi file index -->

      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header"><?php echo $sub_judul; ?></div>
          <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label>NIK</label>
              <input class="form-control" name="nik"></input>
            </div>
            <div class="form-group">
              <label>Nama Dosen</label>
              <input class="form-control" name="nama_dosen"></input>
            </div>
            <div class="form-group">
              <label>Matakuliah yang di Ampu</label>
              <select class="form-control" name="matakuliah_yg_diampu">
              <option value="">Sistem Operasi</option>
              <option value="">Pemrograman Web 1</option>
              <option value="">Sistem Basis Data</option>
              <option value="">Sistem Informasi Manajemen</option>
              <option value="">e- commers</option>
              </select>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </form> 
          </div>
        </div>
      </div>
   
