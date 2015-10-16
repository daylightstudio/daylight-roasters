var gulp = require('gulp');
//var svgSprite = require("gulp-svg-sprites");
var sass = require('gulp-ruby-sass');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('styles', function() {
	return sass('assets/css/sass/*.scss', { style: 'expanded', sourcemap: true})
		.on('error', function (err) {
			notify().write(err);
			this.emit('end');
		})
	    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 9'))
	    .pipe(sourcemaps.write())
	    .pipe(gulp.dest('assets/css'))
	    .pipe(notify('CSS Compiled!'))
	    ;
});

///TODO: write a Gulp task that will get stuff ready for prod
//wont have sourcemap


// Default task
gulp.task('default', ['styles'], function() {
});
 
// // Watch
gulp.task('watch', function() {
  // Watch .scss files
  gulp.watch('assets/css/sass/**/*.scss', ['styles']);
});