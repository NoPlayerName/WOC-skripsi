<div class="container pt-3 " style="height: 520px;">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flashedit()
            ?>
        </div>
    </div>

    <div class="row mt-4  ">
        <div class="col-lg-6">
            <h3>Edit Data</h3>
            <form action="<?= BASEURL ?>/user/update/<?= $data['usr']['id']; ?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['usr']['nama']; ?>">
                </div>


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $data['usr']['username']; ?>">
                </div>

                <div class="form-group">
                    <?php
                    $datapswd = base64_decode($data['usr']['password']);
                    ?>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= $datapswd ?>"">
                </div>

                <div class=" form-group">
                    <label for="role">Hak Akses</label>
                    <select class="form-control" id="role" name="role">
                        <option><?= $data['usr']['role']; ?></option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>


                    </select>
                </div>
                <a href="<?= BASEURL ?>/user"><button type="button" class="btn btn-secondary">Kembali</button></a>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>


    </div>

</div>