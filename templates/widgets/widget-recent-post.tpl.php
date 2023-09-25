
<div class="sidebar-widget">
    <div class="widget-title">
        <h3 class="title"><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h3>
    </div>
    <div class="recent-posts">
        <ul>
            <?php if (!empty($listPost)) : ?>
            <?php foreach ($listPost as $value) : 
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),'itsa-thumbnail-70x70',false, '' );
                $thumb = $thumb[0];    
            ?>
                <li>
                    <a class="post-link" href="<?php echo get_the_permalink($value->ID)?>">
                        <div class="post-thumb" style="width: 70px; height:70px">
                            <img src="<?php echo $thumb ?>" alt="<?php echo !empty($value->post_title) ? $value->post_title : '' ?>" style="width: 100%; height:100%; object-fit:cover">
                        </div>
                        <div class="post-text">
                            <h4 class="title"><?php echo !empty($value->post_title) ? $value->post_title : '' ?></h4>
                            <span class="post-meta"><i class="far fa-calendar-alt"></i> <?php echo date('F j, Y', strtotime($value->post_date)) ?></span>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        <?php endif ?>
        </ul>
    </div>
</div>
