var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');

var paths = {
	scripts:  : 'js/**/*.js',
	scss      : 'scss/**/*.scss'
};

gulp.task('clean', function(cb) {
  	del(['build'], cb);
});

gulp.task('scripts', ['clean'], function() {
	return gulp.src(paths.scripts)
	.pipe(sourcemaps.init())
	.pipe(uglify())
	.pipe(concat('scrips.min.js'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('../js'));
});

gulp.task('scss', ['clean'], function() {
	return gulp.src(paths.scss)
	.pipe(sass())
	.pipe(sourcemaps.init())
	.pipe(uglify())
	.pipe(concat('styles.css'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('../css'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
	gulp.watch(paths.scripts, ['scripts']);
	gulp.watch(paths.scss, ['scss']);
});

gulp.task('default', ['watch', 'scripts', 'scss']);