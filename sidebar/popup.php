<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style4.css">
  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar  -->
    <?php
    include 'sider.php';
    ?>
    <!-- Page Content  -->
    <div style="width: 100%; min-height: 100vh; transition: all 0.3s;">
      <?php
      include 'head.php';
      ?>
      <!-- Page Items Start -->
      <div class="container-fluid">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                Colors
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
              </div>
            </div>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                Growing Spinner
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on top
                </button>
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on right
                </button>
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on bottom
              </button>
              <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on left
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-12  col-md-12 col-lg-6">
          <br><br>
          <div class="card">
            <div class="card-header">
             Flex
           </div>
           <div class="card-body">
            <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
          </div>
        </div>
      </div>
      <div class="col-sm-12  col-md-12 col-lg-6">
        <br><br>
        <div class="card">
          <div class="card-header">
            Loading
          </div>
          <div class="card-body">
            <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
              <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Items Ends  -->
</div>
</div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    });
  });
</script>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
  });
</script>
</body>
</html>