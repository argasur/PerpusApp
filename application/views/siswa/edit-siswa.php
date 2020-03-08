<div class="container mt-5">
  <div class="card w-50 mx-auto">
      <h4 class="card-header">Form Ubah Siswa</h4>
    <div class="card-body">
      <form action="" method="post">
      <div class="form-group">
          <input type="hidden" name="Id_Buku" value="<?= $siswa['Id_Siswa']?>">
        </div>
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="number" name="nis" class="form-control" value="<?= $siswa['NIS']?>">
          <small class="form-text text-danger"><?= form_error('nis');?></small>
        </div>
        <div class="form-group">
          <label for="namaSiswa">Nama</label>
          <input type="text" name="namaSiswa" class="form-control" value="<?= $siswa['Nama']?>">
          <small class="form-text text-danger"><?= form_error('namaSiswa');?></small>
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" class="form-control" value="<?= $siswa['Kelas']?>">
          <small class="form-text text-danger"><?= form_error('kelas');?></small>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
            <?php foreach($JK as $jk) :?>
            <?php if($jk == $siswa['Jenis_Kelamin']) : ?>
            <div class="col-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Jenis-Kelamin" value="<?= $jk; ?>" checked>
                <label class="form-check-label" for="gridRadios1">
                    <?=$jk;?>
                </label>
                
                </div>
            </div>
            <?php else : ?>
            <div class="col-sm-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Jenis-Kelamin" value="<?= $jk; ?>">
                <label class="form-check-label" for="gridRadios1">
                    <?=$jk;?>
                </label>
                
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </fieldset>
          <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
      </form>
    </div>
  </div>
</div>