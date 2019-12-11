<?php

function getThemeSvg(string $filename, string $classes = '')
{
    $path = get_template_directory().'/assets/images/'.$filename.'.svg';

    if (file_exists($path)) {
        $svg = file_get_contents($path);

        if (!empty($classes)) {
            $svg = str_replace('<svg ', '<svg class="'.$classes.'" ', $svg);
        }

        return $svg;
    }

    return false;
}
