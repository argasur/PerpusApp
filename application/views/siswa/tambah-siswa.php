<div class="container mt-5">
  <div class="card w-50 mx-auto">
      <h4 class="card-header">Form Tambah Siswa</h4>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="number" name="nis" class="form-control">
          <small class="form-text text-danger"><?= form_error('nis');?></small>
        </div>
        <div class="form-group">
          <label for="namaSiswa">Nama</label>
          <input type="text" name="namaSiswa" class="form-control">
          <small class="form-text text-danger"><?= form_error('namaSiswa');?></small>
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" class="form-control" >
          <small class="form-text text-danger"><?= form_error('kelas');?></small>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Jenis-Kelamin" value="Laki-Laki" checked>
                <label class="form-check-label" for="gridRadios1">
                    Laki-Laki
                </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Jenis-Kelamin" value="Perempuan">
                <label class="form-check-label" for="gridRadios2">
                    Perempuan
                </label>
                </div>
            </div>
            </div>
        </fieldset>
          <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
      </form>
    </div>
  </div>
</div>