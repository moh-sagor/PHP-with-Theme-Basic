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
            <!--end wrapper-->

            <?php include('includes/switcher.php') ?>
            <?php include('includes/js.php') ?>
</body>

</html>


