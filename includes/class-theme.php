<?php

class Theme
{
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'support'));
        add_action('wp_enqueue_scripts', array($this, 'scripts'));
        add_action('init', array($this, 'navigation'));
        add_action('init', array($this, 'optionPage'));
        add_filter('the_content', array($this, 'theContent'));
        add_action('wp_head', array($this, 'jsGlobal'));
    }

    public function support()
    {
        add_theme_support('custom-logo');
    }

    public function scripts()
    {
        $themeJs = (WP_DEBUG === true) ? 'app.js' : 'app.min.js';

        wp_enqueue_style('theme', get_stylesheet_directory_uri().'/assets/dist/app.css', array(), THEME_VER);
        wp_enqueue_script('theme', get_stylesheet_directory_uri().'/assets/dist/'.$themeJs, array('jquery'), THEME_VER, true);
    }

    public function navigation()
    {
        register_nav_menus(array(
            'main-navigation' => 'Main navigation'
        ));
    }

    public function optionPage()
    {
        if (function_exists('acf_add_options_page')) {
        	acf_add_options_page(['page_title' => 'Theme options']);
        }
    }

    public function theContent($content) {
        $content = str_replace('wp-block-columns', 'row', $content);
        $content = str_replace('wp-block-column', 'col', $content);

        return $content;
    }

    public function jsGlobal()
    {
        $appJsGlobal = json_encode([
            'ajaxUrl' => admin_url('admin-ajax.php')
        ]);

        echo '<script>window.app = '.$appJsGlobal.'</script>';
    }
}

new Theme();
