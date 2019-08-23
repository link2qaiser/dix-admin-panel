<?php
$page = 'user';
include 'header.php';
?>
<div class="card btn-round">
    <div class="card-header">
        <h4 class="card-title">Edit Profile</h4>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-6 px-1">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control btn-round" placeholder="Username" value="michael23">
                    </div>
                </div>
                <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control btn-round" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control btn-round" placeholder="Company" value="Mike">
                    </div>
                </div>
                <div class="col-md-6 pl-1">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control btn-round" placeholder="Last Name" value="Andrew">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control btn-round" placeholder="City" value="Mike">
                    </div>
                </div>
                <div class="col-md-4 px-1">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control btn-round" placeholder="Country" value="Andrew">
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control btn-round" placeholder="ZIP Code">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control btn-round" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" class="form-control btn-round" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
<?php
include 'footer.php';