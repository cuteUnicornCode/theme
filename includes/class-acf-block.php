<?php

class AcfBlock
{
    public function __construct()
    {
        add_action('init', array($this, 'register'));
    }

    public function render($block)
    {
        $slug = str_replace('acf/', '', $block['name']);

        if (file_exists(get_template_directory()."/template-parts/acf-blocks/block-{$slug}.php")) {
            include (get_template_directory()."/template-parts/acf-blocks/block-{$slug}.php");
        }
    }

    public function register()
    {
        if (function_exists('acf_register_block')) {
            acf_register_block(array(
                'name'              => 'example',
                'title'             => __('Example'),
                'description'       => __('A example block.'),
                'render_callback'   => array($this, 'render'),
                'mode'              => 'edit'
            ));
        }
    }
}

new AcfBlock();
