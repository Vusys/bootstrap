# [Bootstrap v2.4.0](https://vusys.github.io/bootstrap)

Bryan's esoteric fork of [Bootstrap 2.3.2](https://getbootstrap.com/2.3.2/) (via bootstrap-sass), rebuilt in 2025 with modern tooling — Dart Sass, Gulp 5, ESLint, Stylelint, Prettier — while the compiled CSS still targets the same legacy browsers Bootstrap 2 did (IE7+, old Android, old iOS Safari). If you need to support ancient browsers but don't want to hand-maintain a 2013-era build chain, this is for that.

[![Lint and Format](https://github.com/Vusys/bootstrap/actions/workflows/lint.yml/badge.svg)](https://github.com/Vusys/bootstrap/actions/workflows/lint.yml) [![Docs](https://github.com/Vusys/bootstrap/actions/workflows/docs.yml/badge.svg)](https://vusys.github.io/bootstrap)

## Quick start

**Download a build:** grab the latest zip from the [Releases](https://github.com/Vusys/bootstrap/releases) page. It contains compiled and minified CSS, JS, images, and every theme — no build step required.

**Build from source:**

```sh
git clone https://github.com/Vusys/bootstrap.git
cd bootstrap
npm ci
npm run build
```

Output lands in `dist/`: `dist/css`, `dist/js`, `dist/img`, and `dist/themes`, each with plain and minified (`.min`) versions plus sourcemaps.

This isn't published to npm or any other package registry — there's no `bootstrap-legacy` package to `npm install`. The `npm` scripts above are only used to build the project from its own source; distribution is via the [Releases](https://github.com/Vusys/bootstrap/releases) zip or a plain git clone.

## Compiling CSS and JavaScript

The build is a small Gulp pipeline (`gulpfile.mjs`):

| Command                                       | What it does                                                 |
| --------------------------------------------- | ------------------------------------------------------------ |
| `npm run build`                               | Clean `dist/`, then compile CSS, themes, JS, and copy images |
| `npm run watch`                               | Rebuild on file change                                       |
| `npm run clean`                               | Remove `dist/`                                               |
| `npm run lint` / `npm run fix`                | ESLint over `js/**` (check / autofix)                        |
| `npm run lint:scss` / `npm run lint:scss:fix` | Stylelint over `scss/**` (check / autofix)                   |
| `npm run fmt` / `npm run fmt:check`           | Prettier over `js/**`                                        |

SCSS is compiled with Dart Sass, run through Autoprefixer, then minified with clean-css in `ie7`-compatibility mode. JavaScript is concatenated in dependency order and minified with Terser targeting ES5. See [Browser support](#browser-support) for the exact target list.

## Browser support

The compiled CSS is autoprefixed and minified against Bootstrap 2's original browser matrix:

- Internet Explorer 7+
- Chrome 4+, Firefox 3.6+, Opera 10+, Safari 4+
- Android 2.1+, iOS Safari 4+

This is a hard constraint on any CSS change to `scss/bootstrap/**` or `scss/themes/**` — new Sass features are fine to author with (`@use`, `color.adjust()`, etc.), but their *compiled output* has to stay parseable by that matrix. See `gulpfile.mjs` for the exact Autoprefixer/clean-css config.

## Themes

20 drop-in themes live in `dist/themes/`, each with a plain and `-responsive` variant:

**Ported from [Bootswatch v2.3.2](https://github.com/thomaspark/bootswatch/releases/tag/v2.3.2)** (Apache License 2.0): Amelia, Cerulean, Cosmo, Cyborg, Flatly, Journal, Readable, Simplex, Slate, Spacelab, Spruce, Superhero, United.

**Original to this fork** (MIT, same as the rest of the project): Aurora, Candy, Midnight, Minimal, Neon, Sunset, Vintage.

## Documentation

Full component and usage docs: **[https://vusys.github.io/bootstrap](https://vusys.github.io/bootstrap)**

The docs site is still largely the original Bootstrap 2.3.2 documentation and hasn't been fully reworked for this fork yet — expect some rough edges and stale references. A pass to clean this up is planned for the next release.

## Roadmap

- Finish reworking the docs site for this fork (planned for v2.5.0)
- Remove the `no-descending-specificity` stylelint suppression

## Copyright and licence

Bootstrap v2.3.2 was originally released under the Apache License v2.0. bootstrap-sass was released under the MIT License.

The Amelia, Cerulean, Cosmo, Cyborg, Flatly, Journal, Readable, Simplex, Slate, Spacelab, Spruce, Superhero, and United themes were adapted from Bootswatch v2.3.2, licensed under the Apache License 2.0.

This fork includes code from both projects. Attribution is preserved in file headers where required. See the [NOTICE](NOTICE) file for details of original authors and licenses.

All new modifications in this repository — including the Aurora, Candy, Midnight, Minimal, Neon, Sunset, and Vintage themes — are licensed under the MIT License.
