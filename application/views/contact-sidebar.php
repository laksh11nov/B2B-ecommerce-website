<aside class="blog__sidebar" style="margin: 0">
    <div class="sidebar__widget sidebar__widget-two">
        <div class="sidebar__search">
            <form action="#">
                <input type="text" placeholder="Search . . .">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                        <path d="M19.0002 19.0002L14.6572 14.6572M14.6572 14.6572C15.4001 13.9143 15.9894 13.0324 16.3914 12.0618C16.7935 11.0911 17.0004 10.0508 17.0004 9.00021C17.0004 7.9496 16.7935 6.90929 16.3914 5.93866C15.9894 4.96803 15.4001 4.08609 14.6572 3.34321C13.9143 2.60032 13.0324 2.01103 12.0618 1.60898C11.0911 1.20693 10.0508 1 9.00021 1C7.9496 1 6.90929 1.20693 5.93866 1.60898C4.96803 2.01103 4.08609 2.60032 3.34321 3.34321C1.84288 4.84354 1 6.87842 1 9.00021C1 11.122 1.84288 13.1569 3.34321 14.6572C4.84354 16.1575 6.87842 17.0004 9.00021 17.0004C11.122 17.0004 13.1569 16.1575 14.6572 14.6572Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    
 <div class="sidebar__widget">
                                    <h4 class="sidebar__widget-title">Ask For Quote</h4>
                                    <div class="sidebar__cat-list">
                                        <form action="<?= $base_url ?>contact-sidebar" method="POST">
                                        <ul class="list-wrap">
                                            <li>
                                               <input type="text" name="name" placeholder="Name" class="form-control"  required="">
                                            </li>
                                            <li>
                                               <input type="text" name="mobile_no" placeholder="Mobile No." class="form-control" required="">
                                            </li>
                                            <li>
                                               <input type="text" name="message" placeholder="Message" class="form-control"  required="">
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                    <input class="btn" type="submit" value="Send">
                                                </a>
                                            </li>
                                        </ul>
                                        </form>
                                    </div>
                                </div>    
    <div class="sidebar__widget" style="display: none;">
        <h4 class="sidebar__widget-title">Latest Posts</h4>
        <div class="sidebar__post-list">
            <div class="sidebar__post-item">
                <div class="sidebar__post-thumb">
                    <a href='blog-details.html'><img src="<?= $base_url ?>assets/img/blog/sb_post01.jpg" alt=""></a>
                </div>
                <div class="sidebar__post-content">
                    <h5 class="title"><a href='blog-details.html'>deno weuine easiure and praising</a></h5>
                    <span class="date"><i class="flaticon-time"></i>Sep 15, 2024</span>
                </div>
            </div>
            <div class="sidebar__post-item">
                <div class="sidebar__post-thumb">
                    <a href='blog-details.html'><img src="<?= $base_url ?>assets/img/blog/sb_post02.jpg" alt=""></a>
                </div>
                <div class="sidebar__post-content">
                    <h5 class="title"><a href='blog-details.html'>know how to pursue pleasure rationally</a></h5>
                    <span class="date"><i class="flaticon-time"></i>Sep 15, 2024</span>
                </div>
            </div>
            <div class="sidebar__post-item">
                <div class="sidebar__post-thumb">
                    <a href='blog-details.html'><img src="<?= $base_url ?>assets/img/blog/sb_post03.jpg" alt=""></a>
                </div>
                <div class="sidebar__post-content">
                    <h5 class="title"><a href='blog-details.html'>there anyone who loves</a></h5>
                    <span class="date"><i class="flaticon-time"></i>Sep 15, 2024</span>
                </div>
            </div>
            <div class="sidebar__post-item">
                <div class="sidebar__post-thumb">
                    <a href='blog-details.html'><img src="<?= $base_url ?>assets/img/blog/sb_post04.jpg" alt=""></a>
                </div>
                <div class="sidebar__post-content">
                    <h5 class="title"><a href='blog-details.html'>deno weuine easiure and praising</a></h5>
                    <span class="date"><i class="flaticon-time"></i>Sep 15, 2024</span>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar__widget" style="display: none;">
        <h4 class="sidebar__widget-title">Tags</h4>
        <div class="sidebar__tag-list">
            <ul class="list-wrap">
                <li><a href="#">Finance</a></li>
                <li><a href="#">Data</a></li>
                <li><a href="#">Agency</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Development</a></li>
                <li><a href="#">Consultancy</a></li>
            </ul>
        </div>
    </div>
</aside>