const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .setResourceRoot(process.env.APP_URL + `/${process.env.section}/`)
    .setPublicPath(`public/${process.env.section}`)
    .js(`resources/mixes/${process.env.section}/js/app.js`, `public/${process.env.section}/js`)
    .sass(`resources/mixes/${process.env.section}/scss/app.scss`, `public/${process.env.section}/css`)
;
