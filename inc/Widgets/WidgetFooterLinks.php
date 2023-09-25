<?php 
namespace MyPlugin\Widgets;

class WidgetFooterLinks extends AbstractWidget
{
	function __construct() {
		// Instantiate the parent object
		parent::__construct( false, 'Awesome Footer Useful Links' );
	}

	function widget( $args, $instance ) {
        $post = $instance['post'];

        if ( ! $post ) {
            return;
        }
        $listItems = wp_get_nav_menu_items($post);

        include $this->locateTemplate('widget-categories.tpl.php');
	}

	function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title']    = sanitize_text_field( $new_instance['title'] );
        if ( ! empty( $new_instance['nav_menu'] ) ) {
            $instance['nav_menu'] = (int) $new_instance['nav_menu'];
        }

        return $instance;
	}

	function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'awetour' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <div class="awetour_w_travel_style_wrap">
            <label><?php _e( 'Travel Styles:', 'awetour' ); ?></label>

            <div class="awetour_w_travel_style_list">
                <?php
                if (!empty($travel)) {
                    foreach ($travel as $key => $value) {
                        ?>
                        <div class="awe-widget-travel-items awetour_w_travel_travel_item_<?php echo esc_attr($key) ?>">
                            <span class="awetour_w_travel_style_item_remove"><span class="dashicons dashicons-trash"></span></span>
                            <div class="awetour_w_travel_style_item_parent">
                                <label><?php _e( 'Parent Item', 'awetour' ); ?>:</label>
                                <div class="awe-widget-field">
                                    <select class="awetour_w_travel_travel_item_select" name="<?php echo $this->get_field_name( 'travelStyle' ); ?>[<?php echo $key ?>][parent]">
                                        <?php
                                            // foreach ($terms as $termItem) {
                                            //    echo '<option '.selected($value['parent'], $termItem->term_id).' value="'.esc_attr($termItem->term_id).'">'.esc_html($termItem->name).'</option>';
                                            // }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <p>
                                <label><?php _e('Enable/Disable Sub Items', 'awetour') ?></label>
                                <select class="widefat awetour_w_travel_travel_on_sub" name="<?php echo $this->get_field_name( 'travelStyle' ); ?>[<?php echo $key ?>][sub_active]">
                                    <option <?php echo selected($value['sub_active'], 'off') ?> value="off" selected="selected"><?php _e('Disable', 'awetour') ?></option>
                                    <option <?php echo selected($value['sub_active'], 'on') ?> value="on"><?php _e('Enable', 'awetour') ?></option>
                                </select>
                            </p>

                            <div class="awetour_w_travel_style_item_sub" style="<?php echo ('off' === $value['sub_active']) ? 'display: none;' : ''; ?>">
                                <label><?php _e('Sub Items', 'awetour') ?>:</label>
                                <div class="awe-widget-field">
                                    <ul class="awe-widget-inline awe-widget-sortable">
                                        <?php
                                        if (!empty( $value['items'] ) ) {
                                            $subTerms = explode(',', $value['items']);
                                            foreach ($subTerms as $itemId) {
                                                $termData = get_term($itemId);
                                            ?>
                                                <li class="awe-widget-data" data-id="<?php echo esc_attr($itemId); ?>">
                                                    <span class="awe-widget-label">
                                                        <a><?php echo esc_html( $termData->name ); ?></a>
                                                    </span>
                                                    <a class="awe-widget-item-remove"><span class="dashicons dashicons-trash"></span></a>
                                                </li>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <input type="text" class="widefat awe-widget-search-input" placeholder="Click here and start typing...">
                                    <ul class="awe-widget-list"> </ul>
                                    <input type="hidden" name="<?php echo $this->get_field_name( 'travelStyle' ); ?>[<?php echo $key ?>][items]" class="awe-widget-value" value="<?php echo esc_attr($value['items']); ?>">
                                    <textarea class="awe-widget-data-args"><?php //echo esc_textarea( json_encode( $argsItem ) ); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <textarea class="awetour_w_travel_style_data" style="display: none"><?php //echo esc_textarea( json_encode( $argsItem ) ); ?></textarea>
            <a class="awetour_w_travel_style_add_item" data-name="<?php echo $this->get_field_name( 'travelStyle' ); ?>">[+] <?php _e("Add Travel Style", "awetour"); ?></a>
        </div>
        <?php

    }
}
