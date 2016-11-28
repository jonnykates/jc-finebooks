'use strict';

var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();

gulp.task('compile', function() {
	console.log('compiling...');
	return gulp.src('./scss/main.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer("last 5 versions"))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./css/'))
		.pipe(browserSync.reload({
			stream: true
		}));
});

gulp.task('serve', ['compile'], function() {
	browserSync.init({
		server: {
			baseDir: './'
		}
	});
	gulp.watch('./scss/*.scss', ['compile']);
	gulp.watch('./css/main.css').on('change', browserSync.reload);
	gulp.watch('./*.html').on('change', browserSync.reload);
});