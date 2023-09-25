<?php
namespace MyPlugin\Widgets;

class WidgetsFooterServices extends AbstractWidget
{
    function __construct()
    {
        // Instantiate the parent object
        parent::__construct(false, 'Awesome Footer Services');
    }

    function widget($args, $instance)
    {
        include $this->locateTemplate('widgetFooter/WidgetsFooterServices.tpl.php');
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['sv1'] = sanitize_text_field($new_instance['sv1']);
        $instance['sv2'] = sanitize_text_field($new_instance['sv2']);
        $instance['sv3'] = sanitize_text_field($new_instance['sv3']);
        $instance['sv4'] = sanitize_text_field($new_instance['sv4']);

        return $instance;
    }

    function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : '';

        $sv1 = !empty($instance['sv1']) ? $instance['sv1'] : '';
        $sv2 = !empty($instance['sv2']) ? $instance['sv2'] : '';
        $sv3 = !empty($instance['sv3']) ? $instance['sv3'] : '';
        $sv4 = !empty($instance['sv4']) ? $instance['sv4'] : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('sv1'); ?>"><?php _e('Service 1:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('sv1'); ?>"
                   name="<?php echo $this->get_field_name('sv1'); ?>" type="text"
                   value="<?php echo esc_attr($sv1); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('sv2'); ?>"><?php _e('Service 2:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('sv2'); ?>"
                   name="<?php echo $this->get_field_name('sv2'); ?>" type="text"
                   value="<?php echo esc_attr($sv2); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('sv3'); ?>"><?php _e('Service 3:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('sv3'); ?>"
                   name="<?php echo $this->get_field_name('sv3'); ?>" type="text"
                   value="<?php echo esc_attr($sv3); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('sv4'); ?>"><?php _e('Service 4:', 'bookawesome'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('sv4'); ?>"
                   name="<?php echo $this->get_field_name('sv4'); ?>" type="text"
                   value="<?php echo esc_attr($sv4); ?>"/>
        </p>

        <?php
    }

}
