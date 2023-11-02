<section class="pt-1-6 pt-md-9">
    <div class="position-relative">
        <div class="background-no-repeat position-absolute h-100 w-100 bg-img d-none d-lg-block wow fadeIn"
            data-wow-delay="200ms" data-background="<?php echo !empty($atts['itsa_about_choose_us__bg']) ? wp_get_attachment_url($atts['itsa_about_choose_us__bg']) : '' ?>"
            style="background-image: url(<?php echo !empty($atts['itsa_about_choose_us__bg']) ? wp_get_attachment_url($atts['itsa_about_choose_us__bg']) : '' ?>);">
        </div>
        <div class="row g-0 justify-content-end">
            <div class="col-lg-6 wow fadeIn">
                <div
                    class="bg-secondary pt-8 pt-lg-14 pt-xxl-18 pb-8 pb-xxl-13 px-2-2 px-xxl-11 position-relative z-index-9 why-chooseus">
                    <div class="me-xxl-15">
                        <div class="section-title left mb-4 white">
                            <span class="sm-title"><?php echo !empty($atts['itsa_about_choose_us__sub_title']) ? $atts['itsa_about_choose_us__sub_title'] : '' ?></span>
                            <h2 class="h1 mb-0 text-white"><?php echo !empty($atts['itsa_about_choose_us__title']) ? $atts['itsa_about_choose_us__title'] : '' ?></h2>
                        </div>
                        <p class="text-white mb-2-3 opacity9">
                            <?php echo !empty($atts['itsa_about_choose_us__desc']) ? $atts['itsa_about_choose_us__desc'] : '' ?>
                        </p>
                        <div class="row position-relative mt-n4 z-index-3">
                            <?php if(!empty($listItems[0])): ?>
                            <?php foreach ($listItems as $item): ?>
                            <div class="col-xl-4 col-6 mt-4">
                                <div class="why-choose-icon">
                                    <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>" class="mb-3" alt="...">
                                    <h5 class="mb-0 display-28 text-white"><?php echo !empty($item['title']) ? $item['title'] : '' ?></h5>
                                </div>
                            </div>
                            <?php endforeach; endif; ?>
                        </div>
                        <div class="position-absolute bottom-0 right z-index-1">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/bg-07.png'?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
