<div class="container mt-5">
  <div class="card w-50 mx-auto">
      <h4 class="card-header">Form Tambah Buku</h4>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label for="judulBuku">Judul Buku</label>
          <input type="text" name="judulBuku" class="form-control" id="judulBuku">
          <small class="form-text text-danger"><?= form_error('judulBuku');?></small>
        </div>
        <div class="form-group">
          <label for="namaPengarang">Pengarang</label>
          <input type="text" name="namaPengarang" class="form-control" id="namaPengarang">
          <small class="form-text text-danger"><?= form_error('namaPengarang');?></small>
        </div>
        <div class="form-group">
          <label for="tahunTerbit">Tahun</label>
          <input type="number" name="tahunTerbit" class="form-control" id="tahunTerbit">
          <small class="form-text text-danger"><?= form_error('tahunTerbit');?></small>
        </div>
        <div class="form-group">
          <label for="kategoriBuku">Kategori</label>
          <select class="form-control" name="kategoriBuku" id="kategoriBuku">
          <?php foreach($kategori as $k) : ?>
            <option value="<?= $k;?>"><?= $k;?></option>
          <?php endforeach;?>
          </select>
        </div>
          <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
      </form>
    </div>
  </div>
</div>