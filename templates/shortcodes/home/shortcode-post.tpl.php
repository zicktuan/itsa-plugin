<section class="pt-lg-0">
    <div class="container">
        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms"
            style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
            <span class="sm-title"><?php echo !empty($atts['itsa_home_post__sub_title']) ? $atts['itsa_home_post__sub_title'] : '' ?></span>
            <h2 class="mb-0 h1"><?php echo !empty($atts['itsa_home_post__title']) ? $atts['itsa_home_post__title'] : '' ?></h2>
        </div>
        <div class="row g-xl-5 mt-n2-2">
            <?php if($listItems[0]): ?>
            <?php foreach ($listItems as $item): 
                $url = !empty($item['url']) ? $item['url'] : '#';    
            ?>
            <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp">
                <article class="card card-style-04 h-100 rounded-0">
                    <div class="blog-img position-relative overflow-hidden">
                        <img src="<?php echo !empty($item['bg']) ? wp_get_attachment_url($item['bg']) : '' ?>">
                        <div class="card-list">
                            <a href="#">
                            <?php echo !empty($item['category']) ? $item['category'] : '' ?>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-1-9">
                        <span class="text-primary d-block mb-2 font-weight-600"><?php echo !empty($item['date_time']) ? $item['date_time'] : '' ?></span>
                        <h3 class="h4 mb-0">
                            <a href="<?php echo $url ?>">
                                <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                            </a>
                        </h3>
                    </div>
                    <div
                        class="d-flex fw-bold border-top px-1-9 py-3 border-color-light-black justify-content-between">
                        <a href="<?php echo $url ?>">Read more</a>
                        <a href="<?php echo $url ?>"><i class="ti-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <?php endforeach; endif;?>
        </div>
    </div>
</section>