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
        <div id="content">

<?php
include 'head.php';
?>

       <!-- Page Items Start -->

       
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">



<div class="container-fluid">
  <div class="row-fluid">
        <div class="span8">
          <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
      </div>
      
        <div class="span4">
        <h2>Snail mail</h2>
        <address>
          <strong>Hythe Window Cleaning</strong><br>
          15 Springfield Way<br>
          Hythe<br>
          Kent<br>
          United Kingdon<br>
          CT21 5SH<br>
          <abbr title="Phone">P:</abbr> 01234 567 890
        </address>
      </div>
    </div>
</div>



</div>
</div>




<br><br>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">



<div class="container-fluid">
<h1 class="text-center">Contact Address</h1>
<hr>
  <div class="row">
    <div class="col-sm-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="col-sm-4" id="contact2">
        <h3>Sedi e Contatti</h3>
        <hr align="left" width="50%">
        <h4 class="pt-2">Sede operativa</h4>
        <i class="fas fa-globe" style="color:#000"></i> address<br>
        <h4 class="pt-2">Contatti</h4>
        <i class="fas fa-phone" style="color:#000"></i> <a href="#"> 123456 </a><br>
        <i class="fab fa-whatsapp" style="color:#000"></i><a href="#"> 123456 </a><br>
        <h4 class="pt-2">Email</h4>
        <i class="fa fa-envelope" style="color:#000"></i> <a href="#">test@test.com</a><br>
      </div>
  </div>
</div>



<br><br>

       
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
</body>

</html>