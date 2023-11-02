<section class="bg-dark">
    <div class="container position-relative z-index-3">
        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms"
            style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
            <span class="sm-title"><?php echo !empty($atts['itsa_home_service__sub_title']) ? $atts['itsa_home_service__sub_title'] : '' ?></span>
            <h2 class="mb-0 h1 text-white"><?php echo !empty($atts['itsa_home_service__title']) ? $atts['itsa_home_service__title'] : '' ?></h2>
        </div>
        <div class="row mt-n2-9">
            <?php if($listItems[0]): ?>
            <?php foreach ($listItems as $item): ?>
            <div class="col-md-6 col-xl-4 mt-2-9 wow fadeIn">
                <div class="card-style-02 h-100">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="card-icon">
                                <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>">
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3 ms-lg-4">
                            <h3 class="h5 mb-3">
                                <a href="<?php echo !empty($item['url']) ? $item['url'] : '' ?>" class="text-white">
                                    <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                </a>
                            </h3>
                            <p class="mb-3 text-white opacity7"><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
                            <?php if(!empty($item['url'])):?>
                            <a href="<?php echo $item['url']?>" class="text-white">Read more <i
                                    class="ti-arrow-right align-middle ms-1"></i></a>
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
    <!-- <img src="./Solutic - IT Solutions and Services HTML Template_files/bg-01.png"
        class="position-absolute bottom-0 left" alt="..."> -->
</section>