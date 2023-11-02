<section class="pt-0">
    <div class="container position-relative z-index-3">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="400ms"
                style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                <div class="position-relative text-center pb-sm-22 me-xl-1-9">
                    <img src="<?php echo !empty($atts['itsa_home_about__img1']) ? wp_get_attachment_url($atts['itsa_home_about__img1']) : '' ?>" class="position-relative z-index-2">
                    <img src="<?php echo !empty($atts['itsa_home_about__img2']) ? wp_get_attachment_url($atts['itsa_home_about__img2']) : '' ?>" class="position-absolute bottom bottom-sm-10 left z-index-3 d-none d-sm-block">
                    <img src="<?php echo !empty($atts['itsa_home_about__img3']) ? wp_get_attachment_url($atts['itsa_home_about__img3']) : '' ?>" class="position-absolute bottom-0 right z-index-1 d-none d-sm-block">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-2-9">
                    <div class="section-title wow fadeIn" data-wow-delay="100ms"
                        style="visibility: hidden; animation-delay: 100ms; animation-name: none;">
                        <span class="sm-title"><?php echo !empty($atts['itsa_home_about__sub_title']) ? $atts['itsa_home_about__sub_title'] : '' ?></span>
                        <h2 class="h1 mb-1-9"><?php echo !empty($atts['itsa_home_about__title']) ? $atts['itsa_home_about__title'] : '' ?></h2>
                    </div>
                    <p class="mb-1-9 wow fadeInUp" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                        <?php echo !empty($atts['itsa_home_about__title_content']) ? $atts['itsa_home_about__title_content'] : '' ?>    
                    </p>
                    <div class="d-sm-flex align-items-center mb-2-9">
                        <div class="ps-sm-1-9">
                            <ul class="list-style2 mb-0">
                                <?php if($listItems[0]): ?>
                                <?php foreach ($listItems as $item): ?>
                                <li class="wow fadeInUp" data-wow-delay="300ms" style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                                    <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php if (!empty($atts['itsa_home_about__url'])):?>
                    <a href="<?php echo $atts['itsa_home_about__url'] ?>" class="btn-style1 wow fadeIn" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                        <span>Read more</span>
                    </a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <img src="./Solutic - IT Solutions and Services HTML Template_files/bg-05.png" class="position-absolute bottom-0 right" alt="..."> -->
</section>