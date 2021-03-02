<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Manajemen Administarsi</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container">

      <a class="navbar-brand" href="<?= BASEURL ?>/pencarian/index_user">WOC Manajemen Administarsi</a>


      <ul style="padding-left: 700px;" class="navbar-nav mr-auto">
        <li class="nav-item active dropdown">
          <a class="navbar-brand nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= @$_SESSION["username"] ?></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= BASEURL ?>/auth/logout/" onclick="return confirm('yakin untuk logout?')">Log out</a>
            <a class="dropdown-item" href="visimisi.html" data-toggle="modal" data-target="#formModal">Ubah Password</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>

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
          <form action="<?= BASEURL ?>/user/ubahpswd/<?= $_SESSION["id"] ?>" method="post">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>