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
			'title' => __(' General Settings', 'itsa'),
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
                'label'       => __( 'General', 'ista' ),
                'id'          => 'general',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_phone_online',
                'label'       => __( 'Số điện thoại', 'ista' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_mail_company',
                'label'       => __( 'Mail Công ty', 'ista' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_phone_address',
                'label'       => __( 'Địa chỉ', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_fb',
                'label'       => __( 'Đường dẫn trang facebook', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_ins',
                'label'       => __( 'Đường dẫn instagram', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_twitter',
                'label'       => __( 'Đường dẫn twitter', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_linkedin',
                'label'       => __( 'Đường dẫn linkedin', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'std'         => '',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_social_you',
                'label'       => __( 'Đường dẫn youtube', 'itsa' ),
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
                'label'       => __( 'List Mail', 'itsa' ),
                'id'          => 'list_mail',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'          => 'awe_email_to',
                'label'       => __( 'Email to (*)', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_email_cc_to',
                'label'       => __( 'CC to', 'itsa' ),
                'type'        => 'text',
                'section'     => 'general_setting',
                'desc'        => ' '
            ],
            [
                'id'          => 'awe_email_bcc_to',
                'label'       => __( 'BCC to', 'itsa' ),
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
                'label'       => __( 'Header', 'itsa' ),
                'id'          => 'header',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_header_logo',
                'label'   => __( 'Logo', 'itsa' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ]
        ];
        $this->setListSettings($settings);
    }

    public function footer() {
        $settings = [
            [
                'label'       => __( 'Footer', 'itsa' ),
                'id'          => 'footer',
                'type'        => 'tab',
                'section'     => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_logo',
                'label'   => __( 'Logo', 'itsa' ),
                'type'    => 'upload',
                'section' => 'general_setting',
            ],
            [
                'id'      => 'awe_footer_copyright',
                'label'   => __('Footer copyright', 'itsa'),
                'type'    => 'text',
                'section' => 'general_setting',
            ],
        ];
        $this->setListSettings($settings);
    }
}