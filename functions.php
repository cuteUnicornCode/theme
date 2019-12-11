<?php

const THEME_VER    = '0.0.1';
const THEME_DOMAIN = 'theme';

// Template functions
require_once get_template_directory().'/includes/template-functions.php';

// Theme setup
require_once get_template_directory().'/includes/class-theme.php';

// ACF blocks
require_once get_template_directory().'/includes/class-acf-block.php';
