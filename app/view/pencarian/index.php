<section class="Search text-center mt-5 " id="Search">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">

        <?php Flasher::flashubhpswd()
        ?>

      </div>
    </div>
  </div>
  <div class="row justify-content-md-center ">
    <?php
    if ($_SESSION["role"] == "admin") {
      echo '<form action="' . BASEURL . '/pencarian/cari" method="post" class="form-inline">
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="" name="keyword" id="keyword" required>
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit" id="tombol cari">cari</button>
      </div>
    </div>
  </form>';
    } else {
      echo '<form action="' . BASEURL . '/pencarian/cari_user" method="post" class="form-inline">
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="" name="keyword" id="keyword" required>
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit" id="tombol cari">cari</button>
      </div>
    </div>
  </form>';
    }

    ?>
  </div>
</section>


<section class="Show Data bg-light " id="showdata">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>SOM (Service Order Manager)</h2>
      </div>
    </div>

    <div class="row">
      <div class="col data1">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ORDERID</th>
              <th scope="col">TASK</th>
              <th scope="col">STATE</th>
              <th scope="col">WFM</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['osm'] as $osm) : ?>
              <tr>
                <td><?= $osm['nosom']; ?></td>
                <td><?= $osm['tasksom']; ?></td>
                <td><?= $osm['statesom']; ?></td>
                <td><?= $osm['wfm']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<section class="Show Data bg-white " id="showdata">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>TOM (Technical Order Manager)</h2>
      </div>
    </div>

    <div class="row ">
      <div class="col data2  ">
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">ORDERID</th>
              <th scope="col">TASK</th>
              <th scope="col">STATE</th>
              <th scope="col">WFM</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['osm2'] as $osm2) : ?>
              <tr>
                <td><?= $osm2['notom']; ?></td>
                <td><?= $osm2['tasktom']; ?></td>
                <td><?= $osm2['statetom']; ?></td>
                <td><?= $osm2['wfm']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>


</div>