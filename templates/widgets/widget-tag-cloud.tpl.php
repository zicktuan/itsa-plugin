
<div class="sidebar-widget">
    <div class="widget-title">
        <h3 class="title"><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h3>
    </div>
    <ul class="sidebar-tag">
        <?php foreach ($listCloud as $value) : ?>
            <li>
                <a href="<?php echo site_url() . '/tag/' . $value->slug; ?>"><?php _e($value->name, 'bookawesome') ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>