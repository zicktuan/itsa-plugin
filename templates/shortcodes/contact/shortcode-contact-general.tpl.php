<div class="section contact-info-section section-padding-02">
            <div class="container">
                <!-- Contact Info Wrap Start -->
                <div class="contact-info-wrap">
                    <div class="row">

                        <?php if (!empty($listItems[0])): ?>
                        <?php foreach ($listItems as $item):?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title"><?php echo !empty($item['title']) ? $item['title'] : '' ?> </h5>
                                    <?php echo !empty($item['info']) ? '<p>'.$item['info'].'</p>' : ''?>
                                    <?php echo !empty($item['info1']) ? '<p>'.$item['info1'].'</p>' : ''?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif ?>
                    </div>
                </div>
                <!-- Contact Info Wrap End -->
            </div>
        </div>