<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from thewebmax.org/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 18:28:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url();?>public/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>public/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Modern Template | Home Page Style 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('topcss.php'); ?>

</head>

<body>
	<div class="page-wraper">
        <?php include('header.php'); ?>
        <?php include('home.php'); ?>
        <?php include('footer.php'); ?>
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
    </div>

<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <svg id="triangle" width="140px" height="140px" viewBox="0 0 100 100">
            <polygon fill="#FF0061" stroke="#000" stroke-width="1" points="100 100, 90 100, 90 20, 50 45, 10 20, 10 100, 0 100, 0 0, 50 30, 100 0"></polygon>
        </svg>
    </div>
</div>

    <?php include('script.php'); ?>
</body>
</html>
