const gulp = require('gulp'),
      webpack = require('webpack'),
      browserSync = require('browser-sync').create(),
      postcss = require('gulp-postcss'),
      cssnano = require('gulp-cssnano'),
      rename = require('gulp-rename'),
      cleanCSS = require('gulp-clean-css'),
      rgba = require('postcss-hexrgba'),
      autoprefixer = require('autoprefixer'),
      cssvars = require('postcss-simple-vars'),
      nested = require('postcss-nested'),
      cssImport = require('postcss-import'),
      mixins = require('postcss-mixins'),
      colorFunctions = require('postcss-color-function');

const paths = {
  urlToPreview: 'http://oknacheb-dev',
  themeLocation: './wp-content/themes/oknacheb.ru/'
}

function reload() {
  browserSync.reload();
}

function style() {
  return (
    gulp
      .src(paths.themeLocation + 'css/style.css')
      .pipe(postcss([cssImport, mixins, cssvars, nested, rgba, colorFunctions, autoprefixer]))
      .pipe(cssnano())
      .pipe(cleanCSS())
      .on('error', (error) => console.log(error.toString()))
      .pipe(gulp.dest(paths.themeLocation))
      .pipe(browserSync.reload({ stream: true }))
  );
}

function media() {
  return (
    gulp
      .src(paths.themeLocation + 'css/media.css')
      .pipe(postcss([cssImport, mixins, cssvars, nested, rgba, colorFunctions, autoprefixer]))
      .pipe(cssnano())
      .pipe(cleanCSS())
      .pipe(rename({suffix: '.min', prefix : ''}))
      .on('error', (error) => console.log(error.toString()))
      .pipe(gulp.dest(paths.themeLocation + 'css'))
      .pipe(browserSync.reload({ stream: true }))
  );
}

function scripts(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
}

function watch() {
  browserSync.init({
    notify: false,
    proxy: paths.urlToPreview,
    ghostMode: false
  });

  gulp.watch(paths.themeLocation + 'css/style.css', style);
  gulp.watch(paths.themeLocation + 'css/media.css', media);
  gulp.watch([paths.themeLocation + 'js/modules/*.js', paths.themeLocation+ 'js/scripts.js'], gulp.parallel('waitForScripts'));
  gulp.watch('./**/*.php').on('change', browserSync.reload);
}

gulp.task('waitForScripts', gulp.series(scripts, function(cb) {
  browserSync.reload();
  cb()
}))

exports.style = style;
exports.media = media;
exports.scripts = scripts;
exports.watch = watch;
exports.default = watch;