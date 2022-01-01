var gulp = require('gulp');
var path = require('path');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var open = require('gulp-open');

var Paths = {
  HERE: './',
  DIST: 'dist/',
  CSS: './assets/css/',
  SCSS_TOOLKIT_SOURCES: './assets/scss/black-dashboard.scss',
  SCSS: './assets/scss/**/**'
};

gulp.task('compile-scss',gulp.series(function(done) {
  return gulp.src(Paths.SCSS_TOOLKIT_SOURCES)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write(Paths.HERE))
    .pipe(gulp.dest(Paths.CSS));
    done()
}));

gulp.task('watch',gulp.series( function(done) {
  gulp.watch(Paths.SCSS, gulp.series('compile-scss'));
  done();
}));

gulp.task('open',gulp.series( function(done) {
  gulp.src('index.html')
    .pipe(open());
    done()
}));

gulp.task('open-app', gulp.series('open', 'watch'));