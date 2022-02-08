</div>

<footer>
  <div class="clearfix mb-0 footer text-muted">
    <div class="float-left">
      <p><?php echo date('Y') ?> &copy; WikiMovieMedia</p>
    </div>
    <div class="float-right">
      <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="<?= base_url('/'); ?>">Akbar - Nazzilla</a></p>
    </div>
  </div>
</footer>
</div>
</div>
<script src="<?= base_url('/'); ?>assets/js/feather-icons/feather.min.js"></script>
<script src="<?= base_url('/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('/'); ?>assets/js/app.js"></script>

<!-- <script src="<?= base_url('/'); ?>assets/vendors/chartjs/Chart.min.js"></script> -->
<!-- <script src="<?= base_url('/'); ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('/'); ?>assets/js/pages/dashboard.js"></script> -->

<script src="<?= base_url('/'); ?>assets/js/main.js"></script>

<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>
  // if href == url then li active
  var url = window.location.href;
  // get href sidebar-link
  // check all sidebar-link
  $('.sidebar-link').each(function() {
    var href = $(this).attr('href');
    if (url == href) {
      $(this).parent().addClass('active');
    }
  });
</script>
</body>

</html>