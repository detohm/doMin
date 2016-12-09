var gulp = require('gulp');

gulp.task('build-php',function(){
	return gulp.src('./src/**/*.php').pipe(gulp.dest('./build'));
});

gulp.task('build-main-style',function(){
	return gulp.src('./src/style.css').pipe(gulp.dest('./build'));
});

gulp.task('build',['build-php','build-main-style']);

