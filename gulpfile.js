const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');

// Пути для файлов
const paths = {
    scss: 'assets/scss/**/*.scss',
    css: 'assets/css',
    html: '*.html',
    php: '*.php',
    js: 'assets/js/**/*.js'
};

// Компиляция SCSS в CSS
function compileSass() {
    return gulp.src(paths.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.css))
        .pipe(browserSync.stream()); // Обновление стилей без перезагрузки
}

// Запуск browserSync и отслеживание изменений
function watchFiles() {
    browserSync.init({
        proxy: "http://localhost:3000",  // Твой локальный сайт
        notify: false
    });

    gulp.watch(paths.scss, compileSass);    // Отслеживание SCSS
    gulp.watch(paths.html).on('change', browserSync.reload);  // Отслеживание HTML
    gulp.watch(paths.php).on('change', browserSync.reload);   // Отслеживание PHP
    gulp.watch(paths.js).on('change', browserSync.reload);    // Отслеживание JS
}

// Экспортируем задачи
exports.compileSass = compileSass;
exports.watch = gulp.series(compileSass, watchFiles);
