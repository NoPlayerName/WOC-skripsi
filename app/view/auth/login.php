<div class="container ">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-4">

      <div class="card o-hidden border-0 shadow-lg my-5 bg-light">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login</h1>
                </div>
                <div class="row">
                  <div class="">
                    <?php Flasher::flashlogin() ?>
                  </div>
                </div>
                <form class="user" action="<?= BASEURL ?>/auth" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Username" id="username" name="username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" placeholder="Password" id="password" name="password" required>
                  </div>
                  <button class="btn btn-primary btn-user btn-block" type="submit">
                    Login
                  </button>
                  <br>
                  <div class="text-center">
                    <a class="small">Untuk pembuatan account silahan hubungi admin!</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>