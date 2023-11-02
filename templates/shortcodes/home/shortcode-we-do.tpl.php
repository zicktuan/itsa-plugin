<section>
    <div class="container">
        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
            <span class="sm-title"><?php echo !empty($atts['itsa_home_we_do__sub_title']) ? $atts['itsa_home_we_do__sub_title'] : '' ?></span>
            <h2 class="mb-0 h1"><?php echo !empty($atts['itsa_home_we_do__title']) ? $atts['itsa_home_we_do__title'] : '' ?></h2>
        </div>
        <div class="row mt-n1-9">
            <?php if($listItems[0]): ?>
            <?php foreach($listItems as $item): ?>
            <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn" data-wow-delay="200ms"
                style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                <div class="card card-style01 border-0 rounded-0">
                    <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="...">
                    <div class="title">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>">
                            <h4 class="h5 mb-0 ms-3">
                                <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>">
                                    <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                </a>
                            </h4>
                        </div>
                        <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>"><i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="overlay text-center">
                        <div>
                            <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>" class="mb-3" alt="...">
                            <h3 class="text-white h4 mb-3">
                                <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>"
                                    class="text-white text-primary-hover"><?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                </a>
                            </h3>
                            <p class="mb-0 text-white"><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
    </section>