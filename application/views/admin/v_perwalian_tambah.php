<!-- isi file index -->

      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header"><?php echo $sub_judul; ?></div>
          <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input class="form-control" name="nama_mahasiswa"></input>
            </div>
            <div class="form-group">
              <label>Program Studi</label>
              <select class="form-control" name="program_studi">
              <option value="S1 TI">S1 TI</option>
              <option value="D3 TI">D3 TI</option>
              <option value="D3 MI">D3 MI</option>
             <!--  <option value="">Sistem Informasi Manajemen</option>
              <option value="">e- commers</option> -->
              </select>
            </div>
            <div class="form-group">
              <label>Nama Wali</label>
              <input class="form-control" name="alamat_wali"></input>
            </div>
            <div class="form-group">
              <label>Alamat Wali</label>
              <input class="form-control" name="alamat_wali"></input>
            
            </div>
            
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </form> 
          </div>
        </div>
      </div>
   
