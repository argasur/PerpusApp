<div class="container">
    <?php if($this->session->flashdata('flash')):?>
    <div class="mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Buku <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <?php endif;?>
        <div class="mt-3">
            <a class="btn btn-success" href="<?= base_url();?>buku/tambah" role="button">Tambah Buku</a>
                <div class="d-flex bd-highlight">
                    <div class="mr-auto p-2 bd-highlight">
                        <h3>Daftar Buku</h3>
                    </div>
                    <div class="p-2 bd-highlight">
                        <form action="" method="post">
                            <div class="input-group mt-2">
                                    <input type="text" class="form-control" placeholder="Cari data buku.." name ="kataKunci">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>             
            </div>
        <div class="row mt-2">
        
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Nama Pengarang</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        foreach($query as $row ){
                            $no++;
                            ?>
                        <tr>
                        <th scope="row"><?= $no?></th>
                        <td><?= $row['Judul'] ?></td>
                        <td><?= $row['Pengarang'] ?></td>
                        <td><?= $row['Tahun'] ?></td>
                        <td><?= $row['Kategori'] ?></td>
                        <td> <a class="badge badge-primary" href="<?= base_url();?>buku/edit/<?=$row['Id_Buku'];?>">edit</a>
                        <a class="badge badge-danger" onclick="return confirm('yakin?');" href="<?= base_url();?>buku/hapus/<?=$row['Id_Buku'];?>">delete</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <?php if(empty($query)) : ?>
                    <div class="alert alert-danger" role="alert">
                        data buku tidak ditemukan.
                    </div>
                <?php endif;?>
            </div>    
        </div>    
    </div>
</div>