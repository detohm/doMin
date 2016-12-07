var gulp = require('gulp');

gulp.task('build',function(){
	return gulp.src('./src/**/*.php').pipe(gulp.dest('./build'));
});

