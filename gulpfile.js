const { series, watch } = require('gulp');

const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat')
const cleanCSS = require('gulp-clean-css');


sass.compiler = require('node-sass');

var sourcemaps = require('gulp-sourcemaps');

watch('./src/estilos/scss/**/*.scss', watch_sass);

function watch_sass() {
 return gulp.src('./src/estilos/scss/**/*.scss')
  .pipe(concat('../scss/all.min.css'))
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write('./maps'))
  .pipe(cleanCSS())
  .pipe(gulp.dest('./src/estilos/css'));
}

exports.default = watch_sass;
