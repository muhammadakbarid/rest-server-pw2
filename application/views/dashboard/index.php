<div class="page-title">
  <h3>Dashboard</h3>
  <p class="text-subtitle text-muted">Dashboard WikiMovieMedia</p>
</div>
<section class="section">
  <!-- if user is admin -->
  <?php if ($this->session->userdata('hak_akses') == 'admin') : ?>
    <div class="mb-2 row">
      <div class="col-12 col-md-4">
        <div class="card card-statistic">
          <div class="p-0 card-body">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Jumlah User</h3>
                <div class="card-right d-flex align-items-center">
                  <p> <?= $jumlah_user; ?></p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas1" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card card-statistic">
          <div class="p-0 card-body">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Jumlah Film</h3>
                <div class="card-right d-flex align-items-center">
                  <p>
                  <p> <?= $jumlah_film; ?></p>
                  </p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas2" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card card-statistic">
          <div class="p-0 card-body">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Jumlah Home Production</h3>
                <div class="card-right d-flex align-items-center">
                  <p> <?= $jumlah_homeproduction; ?></p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas3" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="mb-4 row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class='p-1 pl-3 card-heading'>Film Terbaru</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <table class="table mb-0">
                <?php foreach ($film as $film) : ?>
                  <tr>
                    <td>
                      <img src="<?= base_url('assets/img/') . $film['poster']; ?>" alt="" width="50">
                    </td>
                    <td>
                      <h4 class="text-light"><?= $film['judul']; ?></h4>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <div class="col-md-8 col-12">
              <canvas id="bar"></canvas>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class='p-1 pl-3 card-heading'>List Home Production</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <table class="table mb-0">
                <?php foreach ($homeproduction as $homeproduction) : ?>
                  <tr>
                    <td>
                      <img src="<?= base_url('assets/img/logo/') . $homeproduction['logo']; ?>" alt="" width="50">
                    </td>
                    <td>
                      <h4 class="text-light"><?= $homeproduction['nama']; ?></h4>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <div class="col-md-8 col-12">
              <canvas id="bar"></canvas>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>