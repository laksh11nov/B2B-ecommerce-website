<main class="fix">
        <!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg" data-background="<?= $base_url.'assets/img/products/'.$category_slug.'/1.webp' ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?= $row->category_name ?></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='<?= $base_url ?>home'>Home</a></li>
                                    <li class="breadcrumb-item">
                                        <a href='<?= $base_url ?>'>
                                            <?= $row->category_name ?>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <?= $row->product_name ?>
                                    </li>
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
                        <li class="breadcrumb-item"><a href='<?= $base_url ?>'>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                    </ol>
                </nav>

                <div class="blog__inner-wrap">

                    <div class="row">
                        <div class="col-30">
                            <?php $this->load->view('category-sidebar')  ?>
                        </div>
                        <div class="col-70">
                            

<div class="team__detailsd-area">
            <div class="contaidner">
                <h2 class="title"> <?= $row->category_name ?>
                    
                    :

                    <?= $row->product_id ?>
                </h2>
                <div class="team__details-inner">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="team__details-img">
<img src="<?= $base_url ?>assets/img/products/<?= $row->category_slug; ?>/<?= $row->product_image; ?>" alt="" style="border: 1px solid #cfdde2;">
                            </div>
                        </div>

                        <div class="col-12">

                            <p>
                                <h4 class="sidebar__widget-title">Description</h4>
                                <?= $row->product_desc ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
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