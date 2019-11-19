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
<?php
include 'footer.php';
?>