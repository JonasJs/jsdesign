var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

// task para o sass
gulp.task('sass', function () {
 return gulp.src('source/sass/*.scss')
   .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
   .pipe(gulp.dest('assets/style'));
});

// task para watch
gulp.task('watch', function(){
	gulp.watch('source/sass/**/*.scss', ['sass']);
});

// task default gulp
gulp.task('default', ['sass', 'watch']);