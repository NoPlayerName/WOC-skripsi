<div class="container pt-3 " style="height: 520px;">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash()
            ?>
        </div>
    </div>

    <div class="row mt-4  ">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data User
            </button>

            <br><br>
            <h3>Daftar User</h3>
            <ul class="list-group">
                <?php foreach ($data['usr'] as $usr) : ?>
                    <li class="list-group-item ">
                        <?= $usr['nama']; ?>
                        <a href="<?= BASEURL; ?>/user/hapus/<?= $usr['id']; ?>" class="badge badge-danger float-right ml-1 " onclick="return confirm('yakin untuk menghapus user?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/user/edit/<?= $usr['id']; ?>" class="badge badge-primary float-right ml-1 ">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>

    </div>

</div>


<!-- Modal 1 -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/user/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>


                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="role">Hak Akses</label>
                        <select class="form-control" id="role" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>


                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>