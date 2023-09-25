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

class General extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'general_setting',
			'title' => __(' General Settings', 'bookawesome'),
            'icon'  => '<div class="dashicons dashicons-admin-generic"></div>'
	    );
	}

	public function settings(){
	    $this->general();
	    $this->listMail();
		$this->header();
		$this->footer();
		return $this->fieldsSettings;
	}

	public function general() {
        $settings = [
            [
                'label'       => __( 'General', 'bookawesome' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_phone_online',
                'label'       => __( 'Số điện thoại online', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_fb',
                'label'       => __( 'Đường dẫn trang facebook', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_ins',
                'label'       => __( 'Đường dẫn instagram', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_twitter',
                'label'       => __( 'Đường dẫn twitter', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_linkedin',
                'label'       => __( 'Đường dẫn linkedin', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_you',
                'label'       => __( 'Đường dẫn youtube', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],

        ];
        $this->setListSettings($settings);
    }

    public function listMail() {
        $settings = [
            [
                'label'       => __( 'List Mail', 'bookawesome' ),
                'id'          => 'list_mail',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_email_to',
                'label'       => __( 'Email to (*)', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_email_cc_to',
                'label'       => __( 'CC to', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_email_bcc_to',
                'label'       => __( 'BCC to', 'bookawesome' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],

        ];
        $this->setListSettings($settings);
    }

	public function header() {
        $settings = [
            [
                'label'       => __( 'Header', 'bookawesome' ),
                'id'          => 'header',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_header_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ]
        ];
        $this->setListSettings($settings);
    }

    public function footer() {
        $settings = [
            [
                'label'       => __( 'Footer', 'bookawesome' ),
                'id'          => 'footer',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_logo',
                'label'   => __( 'Logo', 'bookawesome' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_slogan',
                'label'   => __( 'Slogan', 'bookawesome' ),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_copyright',
                'label'   => __('Footer copyright', 'bookawesome'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}