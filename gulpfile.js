var gulp = require('gulp');
//var svgSprite = require("gulp-svg-sprites");
var sass = require('gulp-ruby-sass');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');

// gulp.task('sprites', function () {
//     return gulp.src('assets/images/_svg-gulp/*.svg')
//         .pipe(svgSprite({
//             cssFile: "css/sprite.less",
//             mode: "symbols",
//             svg: {
//                 symbols: "images/symbols.svg"
//             },
//             preview: false
//         }))
//         .pipe(gulp.dest("assets/"));
// });

gulp.task('styles', function() {
	return gulp.src('assets/css/sass/*.scss')
		.pipe(sass({ style: 
			'compressed', 
			'sourcemap=none': true, 
		}))
		.on('error', function (err) {
			notify().write(err);
			this.emit('end');
		})
	    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 9', 'opera 12.1'))
	    .pipe(gulp.dest('assets/css'))
	    .pipe(notify('CSS Compiled!'))
	    ;
});


// Default task
gulp.task('default', ['styles'], function() {
});
 
// // Watch
gulp.task('watch', function() {
 
  // Watch .scss files
  gulp.watch('assets/css/sass/*.scss', ['styles']);
   
 
});