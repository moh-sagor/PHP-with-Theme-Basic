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

                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 bg-gradient-deepblue">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">9526</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-cart fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Orders</p>
                                    <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-orange">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">$8323</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-dollar fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Revenue</p>
                                    <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">6200</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Visitors</p>
                                    <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white">5630</h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-envelope fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Messages</p>
                                    <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

                <!--end page wrapper -->
                <!--start overlay-->
                <div class="overlay toggle-icon"></div>
                <!--end overlay-->
                <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                        class='bx bxs-up-arrow-alt'></i></a>
                <!--End Back To Top Button-->
                <footer class="page-footer">
                    <p class="mb-0">Copyright © 2021. All right reserved.</p>
                </footer>
            </div>
            <!--end wrapper-->
            <!--start switcher-->
            <?php include('includes/switcher.php') ?>
            <?php include('includes/js.php') ?>
</body>

</html>