<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeAbout extends AbstractShortcode
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
            return 'itsa_home_about';
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
            include $this->parent->locateTemplate('home/shortcode-about.tpl.php');
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
                    'type'       => 'textfield',
                    'param_name' => 'itsa_home_about__sub_title',
                    'heading'    => esc_html__('Sub title', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_home_about__title',
                    'heading'    => esc_html__('Title', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_home_about__title_content',
                    'heading'    => esc_html__('Title content', 'itsa')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List Item', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'itsa')
                        )
                    )
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_home_about__img1',
                    'heading'    => esc_html__('Image 1', 'itsa')
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_home_about__img2',
                    'heading'    => esc_html__('Image 2', 'itsa')
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_home_about__img3',
                    'heading'    => esc_html__('Image 3', 'c')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_home_about__url',
                    'heading'    => esc_html__('Url read more', 'itsa')
                ),
            );

            return array(
                'name'        => esc_html__('About', 'itsa'),
                'description' => esc_html__('Home', 'itsa'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
