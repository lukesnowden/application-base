var gulp 					= require('gulp'),
	autoprefixer 			= require('gulp-autoprefixer'),
	cache 					= require('gulp-cache'),
	clean 					= require('gulp-clean'),
	concat 					= require('gulp-concat'),
	minifyCSS 				= require('gulp-minify-css'),
	minifyHTML 				= require('gulp-minify-html');
	imagemin 				= require('gulp-imagemin'),
	plumber 				= require('gulp-plumber'),
	rename 					= require('gulp-rename'),
	sass 					= require('gulp-ruby-sass'),
	sequence 				= require('run-sequence'),
	sourcemaps 				= require('gulp-sourcemaps'),
	uglify 					= require('gulp-uglify');

gulp.task('styles', function()
{
	return gulp.src('scss/**/*.scss')
		.pipe(plumber())
    	.pipe(sass({sourcemap: true, sourcemapPath: './scss'}))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(gulp.dest('../css'))
		.pipe(rename({suffix: '.min'}))
		.pipe(minifyCSS())
		.pipe(gulp.dest('../css'))
});

gulp.task('scripts', function()
{
	return gulp.src([
		'js/app.js'
	])
	.pipe(plumber())
	.pipe(sourcemaps.init())
	.pipe(concat('bundle.js'))
	.pipe(sourcemaps.write({includeContent: false, sourceRoot: 'js'}))
	.pipe(gulp.dest('../js'))
	.pipe(rename({suffix: '.min'}))
	//.pipe(uglify())
	.pipe(gulp.dest('../js'))
});


gulp.task('clean', function()
{
	return gulp.src([
		'assets/css',
		'assets/js',
		'assets/images'
	], {read: false})
	.pipe(clean());
});


gulp.task('watch', function () {
	gulp.watch('scss/**/*.scss', ['styles']);
	gulp.watch('js/*.js', ['scripts']);
});


// DEFAULT TASK
gulp.task('default', ['clean'], function() {
  sequence( 'styles', 'scripts', 'watch' );
});
