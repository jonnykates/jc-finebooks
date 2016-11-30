'use strict';

var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();

gulp.task('compile', function() {
	console.log('compiling...');
	return gulp.src('./assets/scss/main.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer("last 5 versions"))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(browserSync.reload({
			stream: true
		}));
});

gulp.task('watch', ['compile'], function() {
	gulp.watch('./assets/scss/*.scss', ['compile']);
	gulp.watch('./assets/css/main.css').on('change', browserSync.reload);
});