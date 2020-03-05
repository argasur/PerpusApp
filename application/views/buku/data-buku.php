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
            <h3>Daftar Buku</h3>
            <nav class="navbar">
            <a class="btn btn-success" href="<?= base_url();?>buku/tambah" role="button">Tambah Buku</a>
            <form class="form-inline justify-content-end">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
            </form>
            </nav>
            </div>
        <div class="row mt-2">
            <div class="table-responsive">
                <table class="table table-hover">
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
            </div>    
        </div>    
    </div>
</div>