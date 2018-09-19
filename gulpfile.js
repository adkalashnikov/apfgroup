var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    plugins = require('gulp-load-plugins')(),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('scripts', function () {
    return gulp.src([
        './js/script.js'
    ])
        .pipe(sourcemaps.init())
        .pipe(concat('lib.js'))
        .pipe(uglify()) //Minify libs.js
        .pipe(rename({suffix: '.min', prefix: ''}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./js/'));
});

gulp.task('buildJs', function () {
    return gulp.src([
        './js/script.js'
    ])
        .pipe(concat('lib.js'))
        .pipe(uglify()) //Minify libs.js
        .pipe(rename({suffix: '.min', prefix: ''}))
        .pipe(gulp.dest('./js/'));
});

gulp.task('styles', function () {
    return gulp.src('./sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: require('node-bourbon').includePaths
        }).on('error', sass.logError))
        .pipe(rename({suffix: '.min', prefix: ''}))
        .pipe(autoprefixer({browsers: ['last 5 versions'], cascade: false}))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./css/'))
});

gulp.task('buildCss', function () {
    return gulp.src('./sass/*.scss')
        .pipe(sass({
            includePaths: require('node-bourbon').includePaths
        }).on('error', sass.logError))
        .pipe(rename({suffix: '.min', prefix: ''}))
        .pipe(autoprefixer({browsers: ['last 5 versions'], cascade: false}))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./css/'))
});

gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', ['styles']);
    // gulp.watch('./js/script*.js', ['scripts']);
});

gulp.task('build',['buildCss']);

gulp.task('default', ['watch']);
