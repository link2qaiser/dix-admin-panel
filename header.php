<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/light-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="./assets/css/custom-styles.css " rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <section>
        <div class="sidebar sidebar-collapsed" data-color="blue">

            <div class="sidebar-wrapper" >
                <div class="logo">
                    <a href="./dashboard.php" class="simple-text">
                       <h5 style="padding-top: 20px;"><b>Admin Panel</b></h5>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="toggle-wrap">
                            <span class="toggle"><i class="fa fa-xs fa-bars" aria-hidden="true"></i></span>
                        </div>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item <?php echo (!empty($page) && @$page=='dashboard')?'active':''; ?>">
                        <a class="nav-link" href="./dashboard.php">
                            <p>Dashboard</p>
                            <i class="nc-icon nc-chart-pie-35"></i>
                        </a>
                    </li>
                    <li class="nav-item <?php echo (!empty($page) && @$page=='user')?'active':''; ?>">
                        <a class="nav-link " href="./user.php">
                            <p>User Profile</p>
                            <i class="nc-icon nc-circle-09"></i>
                        </a>
                    </li>
                    <li class="nav-item <?php echo (!empty($page) && @$page=='table')?'active':''; ?>">
                        <a class="nav-link" href="./table.php">
                            <p>Table List</p>
                            <i class="nc-icon nc-notes"></i>
                        </a>
                    </li>
                    <li class="nav-item <?php echo (!empty($page) && @$page=='typography')?'active':''; ?>">
                        <a class="nav-link" href="./typography.php">
                            <p>Typography</p>
                            <i class="nc-icon nc-paper-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            <p>Icons</p>
                            <i class="nc-icon nc-atom"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link toggle-accordion" href="javascript:void(0);">
                            <p>Maps</p>
                            <i class="nc-icon nc-pin-3"></i>
                        </a>
                        <ul class="inner accordion-li" style="display:none">
                           
                                <li class="nav-item"> 
                             <a class="nav-link toggle-accordion" href="javascript:void(0);">
                               <p>Option 1</p>
                                <i class="nc-icon nc-atom"></i>
                              </a>
                          </li>
                            <li> 
                              <a class="nav-link toggle-accordion" href="javascript:void(0);">
                                <p>Option 2</p>
                               <i class="nc-icon nc-atom"></i>
                              </a>
                          </li>
                            <li> 
                               <a class="nav-link toggle-accordion" href="javascript:void(0);">
                                <p>Option 2</p>
                               <i class="nc-icon nc-atom"></i>
                            </a>
                          </li>
                
                        </ul>
                    </li>

                    <li>
                        <a class="nav-link toggle-accordion" href="javascript:void(0);">
                            <p>Notifications</p>
                            <i class="nc-icon nc-bell-55"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </section>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid mb-5">