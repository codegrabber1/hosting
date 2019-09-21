"use strict";
const gulp      = require('gulp');
const postcss   = require('gulp-postcss');
const sass      = require('gulp-sass');
const concat    = require('gulp-concat');
const mltp      = require('multipipe');
const autopref  = require('autoprefixer');
const cssnano   = require('cssnano');
const notify    = require('gulp-notify');
const serverBs  = require('browser-sync').create();
const php       = require('gulp-connect-php7');
const paths     = { php: './*.php' };
const del       = require('del');

/*=== SERVER ===*/
gulp.task('server', function(){
    serverBs.init({
        proxy: 'http://127.0.0.1:8000',
        keepalive: true
    });
    // Serve files from the root of this project

    serverBs.watch('server').on('change', serverBs.reload);

});

/*=== SCSS ===*/
gulp.task('sass', function () {
    var processors = [
        autopref(),
        cssnano()
    ];
    return mltp(
        gulp.src('resources/sass/app.scss', {since: gulp.lastRun('sass')}),
        sass().on('error', sass.logError),
        postcss(processors),
        concat('app.css'),
        gulp.dest('public/hosting/css/'),
        serverBs.stream()
    ).on('error', notify.onError())
});

gulp.task('del', function(){
    return del('app.css');
});

/*=== WATCH ===*/
gulp.task('watch', function(){
    gulp.watch('resources/sass/**/*.scss', gulp.parallel('sass')).on('change',serverBs.reload);
    gulp.watch('resources/views/hosting/**/*.blade.php').on('change',serverBs.reload);

});

/*==== BUILD ====*/
gulp.task('build', gulp.series('del', gulp.parallel('sass')));

gulp.task('default', gulp.series('build', gulp.parallel('watch','server')));
