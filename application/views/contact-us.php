<main class="fix">
        <!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg" data-background="<?= $base_url ?>assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='<?= $base_url ?>home'>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact__form-wrap">
                            <h2 class="title">Give Us a Message</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <form action="<?= $base_url ?>contact-us" method="post">
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="text" name="fullname" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="number" name="mobile" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="message" required=""></textarea>
                                </div> 
                                <div class="form-grp">
                                    <div class="g-recaptcha" data-sitekey="6Lda0Z4pAAAAAH0WcLxdDUc-Cfv7wmcS4TWtDMz7"></div>
                                </div>  
                                <button type="submit" class="btn">SUBMIT</button>
                            </form>
                            <!-- <p class="ajax-response mb-0"></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
        <!-- call-back-area -->
        <section class="call-back-area" style="display: none">
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

    </main>