// including plugins
var gulp = require('gulp')
, path = require('path')
, cssmin = require('gulp-cssmin')
, gutil = require('gulp-util')
, less = require("gulp-less");

gulp.task('prod', ['compile-less', 'uglify-js'], function() {
  return gutil.log('[Stage] Gulp is running completed!')
});

// task
gulp.task('compile-less', function () {
    return gulp.src('./less/site.less')
    .pipe(less({}))
    .on('error', onError)
    .pipe(cssmin().on('error', onError))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
  gulp.watch('./less/**/*.less', ['compile-less']);
});

function onError(err) {
  console.log(err);
  this.emit('end');
}
