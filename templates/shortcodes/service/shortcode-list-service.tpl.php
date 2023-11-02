<section>
            <div class="container">
                <div class="section-title mb-1-9 mb-md-6 text-center wow fadeInUp">
                    <span class="sm-title"><?php echo !empty($atts['itsa_service__sub_title']) ? $atts['itsa_service__sub_title'] : '' ?></span>
                    <h2 class="mb-0 h1"><?php echo !empty($atts['itsa_service__title']) ? $atts['itsa_service__title'] : '' ?></h2>
                </div>
                <?php if ($listItems[0]): ?>
                <div class="row mt-n2-9">
                    <?php foreach ($listItems as $item): ?>
                    <div class="col-md-6 col-xl-4 mt-2-9 wow fadeInUp">
                        <div class="card-style-02 h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="card-icon">
                                        <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3 ms-lg-4">
                                    <h3 class="h5 mb-3">
                                        <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>">
                                        <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                        </a>
                                    </h3>
                                    <p class="mb-3"><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
                                    <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>">Read more <i
                                            class="ti-arrow-right align-middle ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <?php endif ?>
            </div>
        </section>