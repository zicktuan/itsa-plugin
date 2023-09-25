<div class="section bg-cover techwix-testimonial-section-02 techwix-testimonial-section-03 section-padding" style="background-image: url(<?php echo !empty($atts['itsa_home_fb__bg']) ? wp_get_attachment_url($atts['itsa_home_fb__bg']) : '' ?>);">
    <div class="container">
        <!-- Testimonial Wrap Start  -->
        <div class="testimonial-wrap-02">
            <div class="section-title text-center">
                <h3 class="sub-title"><?php echo !empty($atts['itsa_home_fb__sub_title']) ? $atts['itsa_home_fb__sub_title'] : ''?></h3>
                <h2 class="title"><?php echo !empty($atts['itsa_home_fb__title']) ? $atts['itsa_home_fb__title'] : ''?></h2>
            </div>
            <div class="testimonial-content-wrap-02">
                <div class="swiper-container testimonial-02-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-faf7f4e9a1332379" aria-live="polite" style="transform: translate3d(-1426px, 0px, 0px); transition-duration: 0ms;">
                        
                    <?php if(!empty($listItems[0])): 
                        $className = 'swiper-slide-duplicate swiper-slide-duplicate-next';
                    ?>
                        <?php foreach ($listItems as $key => $item): 
                            switch ($item['key']) {
                                case 0:
                                    $className = 'swiper-slide-active';
                                    break;
                                case 1:
                                    $className = 'swiper-slide-duplicate swiper-slide-duplicate-next';
                                    break;
                                case 2:
                                    $className = 'swiper-slide-duplicate swiper-slide-prev';
                                    break;
                            }
                        ?>
                        <div class="swiper-slide <?php echo $className ?>" data-swiper-slide-index="<?php echo $item['key'] ?>" style="width: 583px; margin-right: 130px;" role="group" aria-label="<?php echo $key + 1 ?> / <?php echo count($listItems)?>">
                            <div class="single-testimonial-02">
                                <div class="testimonial-thumb">
                                    <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/testi-icon.png'?>" alt="">
                                    <p><?php echo !empty($item['comment']) ? $item['comment'] : ''?> </p>
                                    <span class="name"><?php echo !empty($item['title']) ? $item['title'] : ''?> </span>
                                    <?php if(!empty($item['name'])): ?>
                                    <span class="designation"> / <?php echo $item['name']?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                        

                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
        <!-- Testimonial Wrap End  -->
    </div>
</div>