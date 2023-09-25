
<div class="sidebar-widget">
    <div class="widget-title">
        <h3 class="title"><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h3>
    </div>
    <ul class="category">
        <?php if (!empty($listItems)) : ?>
            <?php foreach ($listItems as $category) : ?>
                <li class="cate-item">
                    <a href="<?php echo $category->url ?>">
                        <i class="flaticon-next"></i> <?php echo $category->title ?> 
                        <!-- <span class="post-count">3</span> -->
                    </a>
                </li>
            <?php endforeach ?>
        <?php endif ?>
    </ul>
</div>