<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php $this->load->view('common/head'); ?>
</head>
<body>
    <!--Preloader-->
    <div id="preloader" style="display: none;">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="<?= base_url(); ?>assets/img/logo/preloader.png" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->
    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <?php 
        $this->load->view('common/header');
        $this->load->view($main_content); 
        $this->load->view('common/footer');     
        $this->load->view('common/script'); 
    ?>
</body>
</html>