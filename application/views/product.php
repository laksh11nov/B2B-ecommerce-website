


<main class="fix">
        <!-- breadcrumb-area 
        <section class="breadcrumb__area breadcrumb__bg" data-background="<?= $base_url ?>assets/img/bg/breadcrumb_bg.jpg">

        -->
        
<section class="breadcrumb__area breadcrumb__bg" data-background="<?= $base_url.'assets/img/products/'.$row->category_slug.'/1.webp' ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?= $row->category_name; ?></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='<?=$base_url?>home'>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="<?= $base_url ?>assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="<?= $base_url ?>assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
                <img src="<?= $base_url ?>assets/img/images/breadcrumb_shape03.png" alt="">
                <img src="<?= $base_url ?>assets/img/images/breadcrumb_shape04.png" alt="">
                <img src="<?= $base_url ?>assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- blog-area -->
        <section class="blog__area">
            <div class="container">

                <nav aria-label="breadcrumb" style="margin-left: 20px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href='<?= $base_url?>home'>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </nav>
                
                <div class="blog__inner-wrap">
                    <div class="row">
                    <div class="col-30">
                        <?php $this->load->view('category-sidebar') ?>       
                    </div>
                        <div class="col-70">
                            <div class="blog-post-wrap">
                                <div class="row gutter-24">
                                    <?php foreach ($result_product as $row_product) {
$slug=$row_product->category_slug.'/'.$row_product->product_slug;
$photo= $base_url.'assets/img/products/'. $row_product->category_slug.'/'.$row_product->product_image;



                                                    ?>
                                    <div class="col-md-4">
                                        <div class="blog__post-two shine-animate-item">
                                            <div class="blog__post-thumb-two">
<a class='shine-animate' href='<?= base_url("{$slug}"); ?>'>
        <img src="<?= $photo ?>" alt="">
</a>
                                            </div>
                                            <div class="blog__post-content-two" >
                                                <div class="blog-post-meta" >
                                                    <ul class="list-wrap">
                                                        <li>
                                                            <a class='blog__post-tag-two' href='<?= base_url("{$slug}"); ?>'>View Detail</a>

                                                            
                                                       
                                                        </li>
                                                        <li>
                                                    </li>
                                                    </ul>
                                                </div>
                                               
                                                <div class="blog-avatar" style="display: none;">
                                                    <div class="avatar-thumb">
                                                        <img src="<?= $base_url ?>assets/img/blog/blog_avatar01.png" alt="">
                                                    </div>
                                                    <div class="avatar-content">
                                                        <p>By <a href='blog-details.html'>Doman Smith</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                                }
                                     ?>
                
                                    
                                </div>
                                <div class="pagination-wrap mt-40" style="display: none">
                                    <nav aria-label="Page navigation example" style="display: none">
                                        <ul class="pagination list-wrap">
                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->
        <!-- call-back-area -->
        <section class="call-back-area" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call-back-content">
                            <div class="section-title white-title mb-10">
                                <h2 class="title">Request A Call Back</h2>
                            </div>
                            <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                            <div class="shape">
                                <img src="<?= $base_url ?>assets/img/images/call_back_shape.png" alt="" data-aos="fade-right" data-aos-delay="400">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-back-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" placeholder="E-mail *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="number" placeholder="Phone *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn">Send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-back-area-end -->
    </main>