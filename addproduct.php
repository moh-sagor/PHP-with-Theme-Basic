<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include 'includes/css.php';
    ?>
    <title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <?php
        include 'includes/sidebar.php';
        ?>
        <!--end sidebar wrapper -->
        <!--start header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="col-md-7 offset-2">
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                    </div>
                                    <h5 class="mb-0 text-info">User Registration</h5>
                                </div>
                                <hr />
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEnterYourName"
                                            placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPhoneNo2"
                                            placeholder="Phone No">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email
                                        Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmailAddress2"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Choose
                                        Password</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputChoosePassword2"
                                            placeholder="Choose Password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm
                                        Password</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="inputAddress4" rows="3"
                                            placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck4">
                                            <label class="form-check-label" for="gridCheck4">Check me out</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-info px-5">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--end wrapper-->

        <?php include('includes/switcher.php') ?>
        <?php include('includes/js.php') ?>
</body>

</html>