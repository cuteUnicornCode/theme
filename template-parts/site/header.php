<div class="logo">
<?php
if (function_exists('the_custom_logo')) {
    the_custom_logo();
}
?>
</div>

<div class="menu-desktop-container">
    <?php wp_nav_menu(['menu' => 'main-navigation', 'container_class' => 'menu-main-navigation-container', 'menu_class' => 'menu']) ;?>
</div>
