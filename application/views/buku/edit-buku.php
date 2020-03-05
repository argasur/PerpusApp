<div class="container mt-5">
  <div class="card w-50 mx-auto">
      <h4 class="card-header">Form Edit Buku</h4>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <input type="hidden" name="Id_Buku" value="<?= $buku['Id_Buku']?>">
        </div>
        <div class="form-group">
          <label for="judulBuku">Judul Buku</label>
          <input type="text" name="judulBuku" class="form-control" id="judulBuku" value="<?= $buku['Judul']?>">
        </div>
        <div class="form-group">
          <label for="namaPengarang">Pengarang</label>
          <input type="text" name="namaPengarang" class="form-control" id="namaPengarang" value="<?= $buku['Pengarang']?>">
        </div>
        <div class="form-group">
          <label for="tahunTerbit">Tahun</label>
          <input type="number" name="tahunTerbit" class="form-control" id="tahunTerbit" value="<?= $buku['Tahun']?>">
        </div>
        <div class="form-group">
          <label for="kategoriBuku">Kategori</label>
          <select class="form-control" name="kategoriBuku" id="kategoriBuku">
          <?php foreach($kategori as $k) : ?>
          <?php if($k == $buku['Kategori']):?>
            <option value="<?= $k;?>" selected><?= $k;?></option>
          <?php else:?>
            <option value="<?= $k;?>"><?= $k;?></option>
          <?php endif;?>
          <?php endforeach;?>
          </select>
        </div>
          <button type="submit" class="btn btn-info">Edit Data</button>
      </form>
    </div>
  </div>
</div>