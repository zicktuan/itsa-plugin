<div class="section bg-cover techwix-testimonial-section-02 techwix-testimonial-section-03 techwix-testimonial-section-05 section-padding" style="background-image: url(./assets/images/bg/testi-bg4.jpeg);">
    <div class="container">
        <div class="testimonial-wrap-02">
            <div class="section-title text-center">
                <h3 class="sub-title"><?php echo !empty($atts['itsa_fb__sub_title']) ? $atts['itsa_fb__sub_title'] : ''?></h3>
                <h2 class="title"><?php echo !empty($atts['itsa_fb__title']) ? $atts['itsa_fb__title'] : ''?></h2>
            </div>
            <div class="testimonial-content-wrap-02">
                <div class="swiper-container testimonial-02-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper">
                        <?php if(!empty($listItems[0])):?>
                        <?php foreach ($listItems as $item):?>
                        <div class="swiper-slide">
                            <div class="single-testimonial-02">
                                <div class="testimonial-thumb">
                                    <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/testi-icon.png'?>" alt="">
                                    <p><?php echo !empty($item['comment']) ? $item['comment'] : ''?> </p>
                                    <span class="name"><?php echo !empty($item['name']) ? $item['name'] : ''?> </span>
                                    <?php if(!empty($item['position'])): ?>
                                    <span class="designation"> / <?php echo $item['position']?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <?php endif; ?>
                        
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                        <span class="swiper-pagination-bullet"></span>
                        <span class="swiper-pagination-bullet"></span>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</div>