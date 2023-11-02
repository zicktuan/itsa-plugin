<section class="overflow-visible">
    <div class="container position-relative z-index-3">
        <div class="row align-items-center about-style-03">
            <div class="col-lg-6 wow fadeIn">
                <div class="pe-lg-1-9">
                    <div class="section-title mb-1-9">
                        <span class="sm-title"><?php echo !empty($atts['itsa_about_desc__sub_title']) ? $atts['itsa_about_desc__sub_title'] : '' ?></span>
                        <h2 class="mb-0 h1"><?php echo !empty($atts['itsa_about_desc__title']) ? $atts['itsa_about_desc__title'] : '' ?></h2>
                    </div>
                    <div class="mb-1-9">
                        <?php if(!empty($listItems[0])): ?>
                        <?php foreach ($listItems as $item): ?>
                        <div class="d-flex about-text mb-1-9">
                            <?php if (!empty($item['icon'])):?>
                            <div class="flex-shrink-0">
                                <i class="fa-brands fa-gitter"></i>
                            </div>
                            <?php endif ?>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5"><?php echo !empty($item['title']) ? $item['title'] : '' ?></h4>
                                <p class="mb-0"><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
                            </div>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn">
                <div class="ps-lg-2-9 position-relative text-center text-sm-start">
                    <img src="<?php echo !empty($atts['itsa_about_desc__img1']) ? wp_get_attachment_url($atts['itsa_about_desc__img1']) : '' ?>">
                    <div class="about-img d-none d-sm-block">
                        <img src="<?php echo !empty($atts['itsa_about_desc__img2']) ? wp_get_attachment_url($atts['itsa_about_desc__img2']) : '' ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <img src="img/bg/bg-06.png" class="position-absolute left bottom-5 opacity4" alt="..."> -->
</section>