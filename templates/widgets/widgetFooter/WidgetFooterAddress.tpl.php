

    <div class="footer-widget">
        <h4 class="footer-widget-title"><?php echo (isset($instance['title']) && !empty($instance['title'])) ? $instance['title'] : '' ?></h4>

        <div class="widget-info">
            <ul>
                <?php if(isset($instance['phone']) && !empty($instance['phone'])): ?>
                <li>
                    <div class="info-icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <div class="info-text">
                        <span><a href="#"><?php echo $instance['phone'] ?></a></span>
                    </div>
                </li>
                <?php endif ?>

                <?php if(isset($instance['email']) && !empty($instance['email'])): ?>
                <li>
                    <div class="info-icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="info-text">
                        <span><a href="#"><?php echo $instance['email'] ?></a></span>
                    </div>
                </li>
                <?php endif ?>

                <?php if(isset($instance['address']) && !empty($instance['address'])): ?>
                <li>
                    <div class="info-icon">
                        <i class="flaticon-pin"></i>
                    </div>
                    <div class="info-text">
                        <span><?php echo $instance['address'] ?></span>
                    </div>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <!-- Footer Widget End -->
