<div class="page-title">
  <h3>Dashboard</h3>
  <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
</div>
<section class="section">
  <div class="mb-2 row">
    <div class="col-12 col-md-3">
      <div class="card card-statistic">
        <div class="p-0 card-body">
          <div class="d-flex flex-column">
            <div class='px-3 py-3 d-flex justify-content-between'>
              <h3 class='card-title'>BALANCE</h3>
              <div class="card-right d-flex align-items-center">
                <p>$50 </p>
              </div>
            </div>
            <div class="chart-wrapper">
              <canvas id="canvas1" style="height:100px !important"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="card card-statistic">
        <div class="p-0 card-body">
          <div class="d-flex flex-column">
            <div class='px-3 py-3 d-flex justify-content-between'>
              <h3 class='card-title'>Revenue</h3>
              <div class="card-right d-flex align-items-center">
                <p>$532,2 </p>
              </div>
            </div>
            <div class="chart-wrapper">
              <canvas id="canvas2" style="height:100px !important"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="card card-statistic">
        <div class="p-0 card-body">
          <div class="d-flex flex-column">
            <div class='px-3 py-3 d-flex justify-content-between'>
              <h3 class='card-title'>ORDERS</h3>
              <div class="card-right d-flex align-items-center">
                <p>1,544 </p>
              </div>
            </div>
            <div class="chart-wrapper">
              <canvas id="canvas3" style="height:100px !important"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3">
      <div class="card card-statistic">
        <div class="p-0 card-body">
          <div class="d-flex flex-column">
            <div class='px-3 py-3 d-flex justify-content-between'>
              <h3 class='card-title'>Sales Today</h3>
              <div class="card-right d-flex align-items-center">
                <p>423 </p>
              </div>
            </div>
            <div class="chart-wrapper">
              <canvas id="canvas4" style="height:100px !important"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mb-4 row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class='p-1 pl-3 card-heading'>Sales</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="pl-3">
                <h1 class='mt-5'>$21,102</h1>
                <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> than last month</p>
                <div class="legends">
                  <div class="flex-row legend d-flex align-items-center">
                    <div class='w-3 h-3 mr-2 rounded-full bg-info'></div><span class='text-xs'>Last Month</span>
                  </div>
                  <div class="flex-row legend d-flex align-items-center">
                    <div class='w-3 h-3 mr-2 rounded-full bg-blue'></div><span class='text-xs'>Current Month</span>
                  </div>
                </div>
              </div>
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