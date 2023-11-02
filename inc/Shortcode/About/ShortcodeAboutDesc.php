<?php
    namespace MyPlugin\Shortcode\About;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeAboutDesc extends AbstractShortcode
    {
        public function __construct($self = null) {
            $this->parent = $self;
            add_shortcode($this->get_name(), array($this, 'render'));
            vc_lean_map($this->get_name(), array($this, 'map'));
        }

        /**
         * Get ShortCode name.
         *
         * @return string
         */
        public function get_name() {
            return 'itsa_desc_about';
        }

        /**
         * ShortCode handler.
         *
         * @param array $atts ShortCode attributes.
         *
         * @return string ShortCode output.
         */
        public function render($atts) {
            $atts = vc_map_get_attributes($this->get_name(), $atts);
            $atts = array_map('trim', $atts);

            $listItems = vc_param_group_parse_atts( $atts['items'] );

            ob_start();
            include $this->parent->locateTemplate('about/shortcode-about-desc.tpl.php');
            return ob_get_clean();
        }

        /**
         * Get shortCode settings.
         *
         * @return array
         *
         * @see vc_lean_map()
         */
        public function map() {
            $params = array(
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_about_desc__img1',
                    'heading'    => esc_html__('Image 1', 'itsa')
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_about_desc__img2',
                    'heading'    => esc_html__('Image 2', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_about_desc__sub_title',
                    'heading'    => esc_html__('Sub title', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_about_desc__title',
                    'heading'    => esc_html__('Title', 'itsa')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List Item', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'icon',
                            'heading'    => esc_html__('Icon', 'itsa'),
                            'std'        => '<i class="fa-brands fa-gitter"></i>'
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'itsa')
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'desc',
                            'heading'    => esc_html__('Desc', 'itsa'),
                        ),
                    )
                ),
            );

            return array(
                'name'        => esc_html__('About Us', 'itsa'),
                'description' => esc_html__('About', 'itsa'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
