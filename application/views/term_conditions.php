<?php include('include/header_top.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.min.css">
<?php include('include/header.php'); ?>
        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header" style="height: 180px;">
                <div class="container">
                    <h1 class="page-title mb-0">Terms & Conditions</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>Terms & Conditions</li>
                    </ul>
                </div>
            </nav>
        </main>



        <div class="page-content contact-us">
            <div class="container">
                <?php echo $tnc['terms_condition_content'];?>
            </div>
        </div>            


<?php include('include/footer.php'); ?>
<?php include('include/footer_bottom.php'); ?>
