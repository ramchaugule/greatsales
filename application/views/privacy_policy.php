<?php include('include/header_top.php'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.min.css">
<?php include('include/header.php'); ?>
        <!-- Start of Main -->
<style type="text/css">
    .privacy h2{
        color: #333;
    }

</style>
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header" style="height: 180px;">
                <div class="container">
                    <h1 class="page-title mb-0">Privacy Policy</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </nav>
        </main>

        <div class="page-content contact-us">
            <div class="container">
                <div class="privacy">
                    <?php echo $pp['privacy_policy_content'];?>
                </div>
            </div>
        </div>    
        


<?php include('include/footer.php'); ?>
