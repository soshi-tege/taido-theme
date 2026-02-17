import gulp from "gulp";
import gulpSass from "gulp-sass";
import * as sass from "sass";
import autoprefixer from "gulp-autoprefixer";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";

const sassCompiler = gulpSass(sass);

function styles() {
  return gulp
    .src("src/scss/style.scss")
    .pipe(sourcemaps.init())
    .pipe(sassCompiler().on("error", sassCompiler.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("css"));
}

function watchFiles() {
  gulp.watch("src/scss/**/*.scss", styles);
}

export const build = styles;
export const watch = gulp.series(styles, watchFiles);
export default gulp.series(styles, watchFiles);
