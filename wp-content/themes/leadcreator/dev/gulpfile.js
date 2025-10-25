const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const gulp = require('gulp');
const gulpAutoprefixer = require('gulp-autoprefixer');
const path = require('path');
const plumber = require('gulp-plumber');
const purgeSourcemaps = require('gulp-purge-sourcemaps');
const rename = require('gulp-rename');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const TerserPlugin = require('terser-webpack-plugin');
const uglify = require('gulp-uglify');
const webpack = require('webpack-stream');
require('dotenv').config({path: './../.env'});

const phpSources = '../**/*.php';
const jsMainFile = './js/index.js';
const jsOutDir = '../js';
const jsSrcDir = './js/**/*.js';
const sassOutDir = '../';
const sassSrcDir = ['./scss/**/*.css', './scss/**/*.sass', './scss/**/*.scss'];

// PostCSS
var postcss = require('gulp-postcss');
var postcsspxv = require('postcss-pxv');

const webpackConfig = {
  entry: jsMainFile,
  mode: 'production',
  output: {
    filename: `index.js`,
  },
  optimization: {
    minimizer: [
      new TerserPlugin({
        extractComments: false,
      }),
    ],
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        resolve: {
          alias: {
            ScrollMagic: path.resolve(
              'node_modules',
              'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'
            ),
            'debug.addIndicators': path.resolve(
              'node_modules',
              'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js'
            ),
          },
        },
      },
      {
        test: /\.json$/,
        loader: 'json-loader',
      },
    ],
  },
};

gulp.task('browser-sync', function () {
  browserSync.init({
    open: false,
    notify: false,
    port: 1111,
    proxy: process.env.PROXY_URL,
  });

  gulp.watch(phpSources).on('change', browserSync.reload);
  gulp.watch(sassSrcDir).on('change', browserSync.reload);
  gulp.watch(jsSrcDir).on('change', browserSync.reload);
});

gulp.task('build-js', async function () {
  return await gulp
    .src(jsMainFile)
    .pipe(plumber())
    .pipe(concat(jsMainFile))
    .pipe(webpack(webpackConfig))
    .pipe(sourcemaps.write())
    .pipe(
      uglify({
        mangle: true,
        output: {
          comments: false,
        },
      })
    )
    .pipe(gulp.dest(jsOutDir));
});

gulp.task('build-sass', async function () {
  return await gulp
    .src(sassSrcDir)
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(purgeSourcemaps())
    .pipe(plumber())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename((path) => (path.basename = 'style')))
    .pipe(gulpAutoprefixer())
    .pipe(sourcemaps.write())
    .pipe(postcss([postcsspxv]))
    .pipe(gulp.dest(sassOutDir));
});

gulp.task('watch-js', async function () {
  return await gulp.watch(jsSrcDir, gulp.series('build-js'));
});

gulp.task('watch-sass', async function () {
  return await gulp.watch(sassSrcDir, gulp.series('build-sass'));
});

gulp.task('build', gulp.series('build-js', 'build-sass'));
gulp.task(
  'default',
  gulp.series(
    'watch-js',
    'watch-sass',
    'build-js',
    'build-sass',
    'browser-sync'
  )
);
