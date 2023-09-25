<div class="section techwix-skill-section-02 section-padding" style="background-image: url(<?php echo !empty($atts['itsa_choose_preminent_solution__bg']) ? wp_get_attachment_url($atts['itsa_choose_preminent_solution__bg']) : '' ?>);">
    <div class="container">
        <div class="skill-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Skill Left Start -->
                    <div class="skill-left">
                        <div class="section-title">
                            <h2 class="title"><?php echo !empty($atts['itsa_choose_preminent_solution__title']) ? $atts['itsa_choose_preminent_solution__title'] : '' ?></h2>
                        </div>
                        <div class="experience-wrap">
                            <?php if(!empty($atts['itsa_choose_preminent_solution__exp'])):?>
                            <div class="experience">
                                <h2 class="number"><?php echo $atts['itsa_choose_preminent_solution__exp'] ?></h2>
                                <span>Years of <br> experience</span>
                            </div>
                            <?php endif ?>
                            <div class="experience-text">
                                <p><?php echo !empty($atts['itsa_choose_preminent_solution__desc']) ? $atts['itsa_choose_preminent_solution__desc'] : '' ?></p>
                                <a class="learn-more" href="<?php echo !empty($atts['itsa_choose_preminent_solution__url']) ? $atts['itsa_choose_preminent_solution__url'] : '#' ?>">
                                <?php echo !empty($atts['itsa_choose_preminent_solution__text_btn']) ? $atts['itsa_choose_preminent_solution__text_btn'] : '' ?> <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Skill Left End -->
                </div>
                <div class="col-lg-6">
                    <!-- Skill Right Start -->
                    <div class="skill-right">
                        <div class="counter-bar">
                            <?php if (!empty($listItems[0])): ?>
                                <?php foreach ($listItems as $val): ?>
                                <div class="skill-item">
                                    <span class="title"><?php echo !empty($val['title']) ? $val['title'] : '' ?></span>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line color-1" data-width="<?php echo !empty($val['percent']) ? $val['percent'] : 0 ?>" style="width: <?php echo !empty($val['percent']) ? $val['percent'] : 0 ?>%;">
                                            <span class="skill-percent"><span class="counter"><?php echo !empty($val['percent']) ? $val['percent'] : 0 ?></span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </div>
                    </div>
                    <!-- Skill Right End -->
                </div>
            </div>
        </div>
    </div>
</div>