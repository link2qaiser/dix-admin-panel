<?php
include 'header.php';
?>  
      <!-- Page Items Start -->
      <div class="container-fluid">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                Navbar Search
              </div>
              <div class="card-body">
                <nav class="navbar navbar-light bg-light">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                Brand
              </div>
              <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                Forms
              </div>
              <div class="card-body">
                <nav class="navbar navbar-light bg-light">
                  <a class="navbar-brand">Navbar</a>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                Color schemes
              </div>
              <div class="card-body">
                <nav class="navbar navbar-dark bg-dark">
                  <!-- Navbar content -->
                </nav>
                <nav class="navbar navbar-dark bg-primary">
                  <!-- Navbar content -->
                </nav>
                <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                  <!-- Navbar content -->
                </nav>
              </div>
            </div>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>        
            <div class="card">
              <div class="card-header">
                Toggler
              </div>
              <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Hidden brand</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-sm-12  col-md-12 col-lg-6">
            <br><br>
            <div class="card">
              <div class="card-header">
                External content
              </div>
              <div class="card-body">
                <div class="pos-f-t">
                  <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                      <h5 class="text-white h4">Collapsed content</h5>
                      <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                  </div>
                  <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Items Ends  -->
<?php
include 'footer.php';
?>  