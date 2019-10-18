const gulp = require('gulp');
const tinify = require('gulp-tinify');
const jsmin = require('gulp-jsmin');

/* Перенеси CSS файлы */
gulp.task('move-css', () => {
    return gulp.src('src/css/*.css')
    .pipe(gulp.dest('project/css/'))
});
/* Перени файлы MIN JS */
gulp.task('move-js', () => {
    return gulp.src('src/js/*.js')
    .pipe(gulp.dest('project/js/'))
});
/* Перени файлы JS */
gulp.task('minify-js', () => {
    return gulp.src(['src/js/*.js', '!src/js/*.min.js'])
    .pipe(jsmin())
    .pipe(gulp.dest('project/js/'))
});

/* Перенести файлы IMG */
gulp.task('imagemin', () => {
    return gulp.src('src/img/**/*.*')
    .pipe(tinify('bqvNq6gqG4JWbsKqLSHRt4l2JZ5xhsH1'))
    .pipe(gulp.dest('project/img/'))
});
/* Перенести файлы FONTS*/
gulp.task('move-fonts', () => {
    return gulp.src('src/fonts/*/*.*')
    .pipe(gulp.dest('project/fonts/'))
});
/* Перенести файлы HTML */
gulp.task('move-html', () => {
    return gulp.src('src/*.html')
    .pipe(gulp.dest('project/'))
});

gulp.task('move-php', () => {
    return gulp.src('src/*.php')
        .pipe(gulp.dest('project/'))
});
gulp.task('move-mail-php', () => {
    return gulp.src('src/phpmailer/*.php')
        .pipe(gulp.dest('project/phpmailer//'))
});