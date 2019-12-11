const { mix } = require('laravel-mix');

mix.setPublicPath('assets');
mix.setResourceRoot('../');

mix.combine(['assets/js/**/*.js'], 'assets/dist/app.js');
mix.sass('assets/scss/app.scss', 'assets/dist/app.css');
