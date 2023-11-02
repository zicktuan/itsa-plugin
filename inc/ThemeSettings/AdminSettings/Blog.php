<?php

namespace MyPlugin\ThemeSettings\AdminSettings;

use MyPlugin\ThemeSettings\SettingFactory;

/**
 * @author lookawesome team
 * @version 1.0
 * @package AdminSettings
 * 
 * Setting General theme setting for theme bookawesome
 */

class Blog extends SettingFactory
{

    public function section()
    {
        return array(
            'id'          => 'blog_setting',
            'title' => __(' Blog', 'itsa'),
            'icon'  => '<span class="dashicons dashicons-book-alt"></span>'
        );
    }

    public function settings()
    {
        $this->Blog();
        $this->SingleBlog();
        return $this->fieldsSettings;
    }


    public function Blog() {
        $setting = [
            [
                'label'       => __( 'General', 'itsa' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'blog_setting',
            ],
            [
                'id'      => 'blog_bg',
                'label'   => __('Background', 'itsa'),
                'type'    => 'upload',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'blog_header_title_bg',
                'label'   => __( 'Header Title Background', 'itsa' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
        ];
        $this->setListSettings($setting);
    }

    public function SingleBlog() {
        $setting = [
            [
                'label'       => __( 'Single Blog', 'itsa' ),
                'id'          => 'single-blog',
                'type'        => 'tab',
                'section'     => 'blog_setting',
            ],
            [
                'id'      => 'single_blog_bg',
                'label'   => __('Background', 'itsa'),
                'type'    => 'upload',
                'section' => 'blog_setting',
            ],
            [
                'id'      => 'single_blog_header_title_bg',
                'label'   => __( 'Header Title Background', 'itsa' ),
                'type'    => 'text',
                'section' => 'blog_setting',
            ],
        ];
        $this->setListSettings($setting);
    }
}
