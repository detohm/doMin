var gulp = require('gulp'),
	less = require('gulp-less'),
	cssmin = require('gulp-cssmin');

gulp.task('build-less',function(){
	return gulp.src('./src/less/site.less').pipe(less()).pipe(cssmin()).pipe(gulp.dest('./build/css'));
});

gulp.task('build-js',function(){
	return gulp.src('./src/js/**/*.js').pipe(gulp.dest('./build/js'));
});

gulp.task('build-php',function(){
	return gulp.src('./src/**/*.php').pipe(gulp.dest('./build'));
});

gulp.task('build-main-style',function(){
	return gulp.src('./src/style.css').pipe(gulp.dest('./build'));
});

gulp.task('build',['build-php','build-main-style','build-less','build-js']);

gulp.task('watch',function(){
	return gulp.watch(['./src/**/*.*'],['build']);
});
