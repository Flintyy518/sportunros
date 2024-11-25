// Подключаем зависимости
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

// Путь к вашим SCSS и CSS файлам
const paths = {
    scss: './assets/scss/**/*.scss',
    css: './assets/css'
};

// Задача для компиляции SCSS в CSS
gulp.task('sass', function () {
    return gulp.src(paths.scss)
        .pipe(sass().on('error', sass.logError))  // Компиляция SCSS в CSS
        .pipe(gulp.dest(paths.css))               // Выгружаем CSS в папку
        .pipe(browserSync.stream());              // Автообновление браузера
});

// Задача для запуска BrowserSync
gulp.task('serve', function () {
    // Инициализация локального сервера через BrowserSync
    browserSync.init({
        proxy: "sportunros.local",               // Прокси вашего PHP сервера
        notify: false                            // Отключить уведомления о перезагрузке
    });

    // Наблюдение за изменениями SCSS файлов
    gulp.watch(paths.scss, gulp.series('sass'));  // Компиляция при изменении SCSS

    // Наблюдение за изменениями PHP и JS файлов
    gulp.watch('**/*.php').on('change', browserSync.reload);
    gulp.watch('**/*.js').on('change', browserSync.reload);
});

// Задача по умолчанию
gulp.task('default', gulp.series('sass', 'serve'));
