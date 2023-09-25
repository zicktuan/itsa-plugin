<div class="section techwix-solution-section section-padding">
    <div class="container">
        <div class="solution-wrap">
            <div class="section-title text-center">
                <h3 class="sub-title"> <?php echo !empty($atts['itsa_home_post__sub_title']) ? $atts['itsa_home_post__sub_title'] : '' ?></h3>
                <h2 class="title"><?php echo !empty($atts['itsa_home_post__title']) ? $atts['itsa_home_post__title'] : '' ?></h2>
            </div>
            <div class="solution-content-wrap">
                <div class="row">
                    <?php if(!empty($listItems[0])): ?>
                        <div class="col-lg-7">
                            <div class="solution-item solution-item-big">
                                <div class="solution-img">
                                    <a href="<?php echo !empty($listItems[0]['url']) ? $listItems[0]['url'] : '#' ?>">
                                        <img src="<?php echo !empty($listItems[0]['bg']) ? wp_get_attachment_url($listItems[0]['bg']) : '' ?>" alt="">
                                    </a>
                                </div>
                                <div class="solution-content">
                                    <div class="solution-title">
                                        <h4 class="sub-title"><?php echo !empty($listItems[0]['sub_title']) ? $listItems[0]['sub_title'] : '' ?></h4>
                                        <h3 class="title">
                                            <a href="<?php echo !empty($listItems[0]['url']) ? $listItems[0]['url'] : '' ?>">
                                                <?php echo !empty($listItems[0]['title']) ? $listItems[0]['title'] : '' ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <a class="play-btn popup-video" href="<?php echo !empty($listItems[0]['url_video']) ? $listItems[0]['url_video'] : '' ?>"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    
                    <div class="col-lg-5">
                        <div class="row">
                            <?php if(!empty($listItems)):
                                unset($listItems[0])
                            ?>
                                <?php foreach ($listItems as $val): ?>
                                <div class="col-lg-12">
                                    <div class="solution-item solution-item-sm">
                                        <div class="solution-img">
                                            <a href="<?php echo !empty($val['url']) ? $val['url'] : '#' ?>">
                                                <img src="<?php echo !empty($val['bg']) ? wp_get_attachment_url($val['bg']) : '' ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="solution-content">
                                            <div class="solution-title">
                                                <h4 class="sub-title"><?php echo !empty($val['sub_title']) ? $val['sub_title'] : '' ?></h4>
                                                <h3 class="title">
                                                    <a href="<?php echo !empty($val['url']) ? $val['url'] : '#' ?>">
                                                        <?php echo !empty($val['title']) ? $val['title'] : '' ?>
                                                    </a>
                                                </h3>
                                            </div>
                                            <a class="play-btn popup-video" href="<?php echo !empty($val['url_video']) ? $val['url_video'] : '#' ?>"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>