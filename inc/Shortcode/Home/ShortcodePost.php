<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodePost extends AbstractShortcode
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
            return 'itsa_home_post';
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
            include $this->parent->locateTemplate('home/shortcode-post.tpl.php');
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
                    'param_name' => 'itsa_home_post__sub_title',
                    'heading'    => esc_html__('Sub title', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_home_post__title',
                    'heading'    => esc_html__('Title', 'itsa')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List item', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'bg',
                            'heading'    => esc_html__('Background', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'category',
                            'heading'    => esc_html__('Category', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'date_time',
                            'heading'    => esc_html__('Date time', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('Url post', 'itsa')
                        ),
                    )
                )
            );

            return array(
                'name'        => esc_html__('Post Home', 'itsa'),
                'description' => esc_html__('Home', 'itsa'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
