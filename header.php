<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= get_bloginfo(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="master">
        <div id="page-header">
            <?php get_template_part('template-parts/site/header'); ?>
        </div>
        <div id="page-wrapper" class="container">
