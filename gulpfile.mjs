import { src, dest, series, parallel, watch as gulpWatch } from 'gulp';
import gulpSass from 'gulp-sass';
import * as dartSass from 'sass';
import sourcemaps from 'gulp-sourcemaps';
import cleanCSS from 'gulp-clean-css';
import rename from 'gulp-rename';
import plumber from 'gulp-plumber';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import { deleteAsync } from 'del';
import concat from 'gulp-concat';
import terser from 'gulp-terser';
import header from 'gulp-header';
import { createRequire } from 'module';

const require = createRequire(import.meta.url);
const pkg = require('./package.json');

const sass = gulpSass(dartSass);

const paths = {
    scss: {
        entries: [
            'scss/bootstrap.scss',
            'scss/bootstrap-responsive.scss',
        ],
        all: 'scss/**/*.scss',
    },
    js: {
        order: [
            'js/bootstrap-transition.js',
            'js/bootstrap-alert.js',
            'js/bootstrap-button.js',
            'js/bootstrap-carousel.js',
            'js/bootstrap-collapse.js',
            'js/bootstrap-dropdown.js',
            'js/bootstrap-modal.js',
            'js/bootstrap-tooltip.js',
            'js/bootstrap-popover.js',
            'js/bootstrap-scrollspy.js',
            'js/bootstrap-tab.js',
            'js/bootstrap-typeahead.js',
            'js/bootstrap-affix.js',
        ],
        all: 'js/**/*.js',
    },
    images: 'img/**/*.{png,svg,jpg,jpeg,gif,webp}',
    dist: {
        css: 'dist/css',
        js: 'dist/js',
        img: 'dist/img',
    }
};

function clean() {
    return deleteAsync(['dist']);
}

function stylesDist() {
    return src(paths.scss.entries, { allowEmpty: true })
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
        .pipe(postcss([autoprefixer({
            overrideBrowserslist: [
                'ie >= 7',
                'chrome >= 4',
                'safari >= 4',
                'ios_saf >= 4',
                'android >= 2.1',
                'firefox >= 3.6',
                'opera >= 10',
            ],
            remove: false,
        })]))
        .pipe(dest(paths.dist.css))
        .pipe(cleanCSS({
            compatibility: 'ie7',
            level: { 1: { specialComments: 'all' } },
        }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(paths.dist.css));
}

function images() {
    return src(paths.images, { allowEmpty: true, encoding: false, buffer: true })
        .pipe(dest(paths.dist.img));
}

function scriptsDist() {
    const banner = `/**\n* Bootstrap.js v${pkg.version} (Unofficial fork)\n* https://github.com/Vusys/bootstrap\n*\n* Licenced under MIT.\n* https://github.com/Vusys/bootstrap/blob/master/LICENCE \n*/\n`;

    return src(paths.js.order, { allowEmpty: true })
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(concat('bootstrap.js'))
        .pipe(header(banner))
        .pipe(dest(paths.dist.js))
        .pipe(rename({ basename: 'bootstrap', suffix: '.min' }))
        .pipe(terser({ ecma: 5 }))
        .pipe(header(banner))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(paths.dist.js));
}



function watchFiles() {
    gulpWatch(paths.scss.all, series(stylesDist ));
    gulpWatch(paths.js.all, series(scriptsDist ));
    gulpWatch(paths.images, series(images));
}

export const build = series(
    clean,
    parallel(stylesDist, images, scriptsDist),
);

export { clean };
export const styles = stylesDist;
export const scripts = scriptsDist;
export const watch = watchFiles;
export default build;


