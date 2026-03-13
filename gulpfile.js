import gulp, { src, dest, watch, series, parallel } from "gulp";
import gulpSass from "gulp-sass";
import * as sass from "sass";
import autoprefixer from "gulp-autoprefixer";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";
import imagemin, { mozjpeg } from 'gulp-imagemin';
import pngquant from 'imagemin-pngquant';
import { rm } from 'node:fs/promises';
import browserSync from "browser-sync";
import "dotenv/config";

// 変更を保存した際自動でリロードする
// .envファイル記載のローカルのurlをlocalhostでクローンする
const browserSyncOption = {
	notify: false,
	proxy: process.env.LOCAL_URL,
}
const browserSyncInit = () => {
	browserSync.init(browserSyncOption);
}
const browserSyncReload = (done) => {
	browserSync.reload();
	done();
}

// SCSSコンパイラーの読み込み
const sassCompiler = gulpSass(sass);

// 画像とscssの読み込み先
const paths = {
	css: "src/scss/**/*.scss",
	img: "src/images/**/*",
	phpHTML: "./**/*.{php,html}",
}

// 圧縮した画像とcssの移動先（フォルダ自動生成）
const destinations = {
	css: "css/",
	img: "images/",
}

// SCSSファイルからcss.minファイルを自動生成
function scssCompressor() {
	return gulp
		.src("src/scss/style.scss")
		.pipe(sourcemaps.init())
		.pipe(sassCompiler().on("error", sassCompiler.logError))
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(sourcemaps.write("."))
		.pipe(gulp.dest("css"));
}

// 画像ファイルを自動圧縮
function imageCompressor() {
	return gulp.src(paths.img, { encoding: false })
		.pipe(imagemin([
			mozjpeg({ progressive: true }),
			pngquant({ optimizationLevel: 5 })
		]))
		.pipe(gulp.dest(destinations.img))
};

// 重複する画像を自動で削除
const delPath = {
	img: "./images/"
}
async function cleanImages() {
	await rm("images", { force: true, recursive: true });
}

// scssファイルと画像フォルダーへの変更を検知して対応する関数を実行（自動リロード）
function watchFiles() {
	watch(paths.css, series(scssCompressor, browserSyncReload));
	watch(paths.img, series(series(cleanImages, imageCompressor, browserSyncReload)));
	// PHP, HTMLファイルが変更された時自動リロード
	watch(paths.phpHTML, browserSyncReload);
}

// npx gulpで実行する関数
export default series(
	series(cleanImages, scssCompressor, imageCompressor),
	parallel(browserSyncInit, watchFiles));
