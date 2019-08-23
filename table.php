<?php
$page = 'table';
include 'header.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title float-left">Edit Profile</h4>
                <div class="float-right">
                    <button class="btn btn-fill btn-round btn-primary" data-toggle="modal" data-target="#myModal1" href="#pablo">Create</button>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                            <td>
                                <div class="table-col-action dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="false" aria-expanded="false">
                                        <i class="nc-icon nc-bullet-list-67"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td>Sinaai-Waas</td>
                            <td>
                                <div class="table-col-action dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="false" aria-expanded="false">
                                        <i class="nc-icon nc-bullet-list-67"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td>Baileux</td>
                            <td>
                                <div class="table-col-action dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="false" aria-expanded="false">
                                        <i class="nc-icon nc-bullet-list-67"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td>Overland Park</td>
                            <td>
                                <div class="table-col-action dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="false" aria-expanded="false">
                                        <i class="nc-icon nc-bullet-list-67"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Doris Greene</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                            <td>
                                <div class="table-col-action dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="false" aria-expanded="false">
                                        <i class="nc-icon nc-bullet-list-67"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                            <td>
                                <div class="table-col-action dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="false" aria-expanded="false">
                                        <i class="nc-icon nc-bullet-list-67"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>