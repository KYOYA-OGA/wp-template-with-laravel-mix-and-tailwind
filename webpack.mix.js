const mix = require('laravel-mix')

// const THEME_DIR = './wp-content/themes/Template'

mix
  .js('./src/js/main.js', './dist/js')
  .css('./src/css/style.css', './dist/css')
  .options({
    processCssUrls: false,
    postCss: [require('tailwindcss')],
  })
  .browserSync({
    proxy: 'http://test.local/',
    files: [`./**/*.php`, `./**/*.js`, `./**/*.css`],
    notify: false,
  });
