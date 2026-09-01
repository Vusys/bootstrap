# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this project is

A 2025 fork of Bootstrap 2.3.2 (originally via bootstrap-sass), rebuilt on modern tooling — Dart Sass, Gulp 5, ESLint 9, Stylelint 16, Prettier — while the **compiled output must keep working in the same legacy browsers Bootstrap 2 targeted**: IE7+, Android 2.1+, iOS Safari 4+, Firefox 3.6+, Opera 10+, Safari 4+, Chrome 4+. Modern Sass features (`@use`, `color.adjust()`, module system, etc.) are fine to *author* with, since Dart Sass compiles them away — the constraint is on the CSS that comes out the other end. See `readme.md` for the full browser matrix and user-facing docs.

The docs site (`docs/`) is still largely unmodified original Bootstrap 2.3.2 documentation and has known rough edges (stale links, leftover marketing copy, inconsistent formatting) — a cleanup pass is planned for a future release, not this one. Don't assume its content reflects the current project.

## Commands

```sh
npm ci                  # install (npm ci, not npm install, to match package-lock.json)
npm run build           # clean dist/, compile CSS + themes + JS + images
npm run watch           # rebuild on file change
npm run clean           # remove dist/

npm run lint            # eslint js/**/*.js
npm run fix             # eslint --fix
npm run lint:scss       # stylelint scss/**/*.scss
npm run lint:scss:fix   # stylelint --fix
npm run fmt             # prettier --write js/**/*.js
npm run fmt:check       # prettier --check js/**/*.js

npm run docs:copy       # copy dist/{css,js,img,themes} into docs/_media (for the docs site)
```

There is no test suite (`npm test` is a stub). CI (`.github/workflows/lint.yml`) runs `fmt:check`, `lint`, and `lint:scss` on every PR touching JS/SCSS — run the same three before committing.

## Architecture

**Build pipeline** (`gulpfile.mjs`, plain functions composed with `series`/`parallel`, no task-runner magic beyond that):

- `stylesDist` — compiles `scss/bootstrap.scss` and `scss/bootstrap-responsive.scss` with Dart Sass, runs Autoprefixer with an explicit `overrideBrowserslist` (the legacy target list — this is the actual enforcement point for browser support, edit it here if the matrix ever changes), then emits both plain and `clean-css`-minified (`compatibility: 'ie7'`) output with sourcemaps.
- `stylesThemes` — same pipeline for every file in `scss/themes/*.scss`, plus a `tap()` step that rewrites the banner comment in each compiled theme file to reflect its display name and the current `package.json` version.
- `scriptsDist` — concatenates the JS plugins in a fixed dependency order (see `paths.js.order` in `gulpfile.mjs`; `bootstrap-transition.js` must stay first, others depend on it), prepends a license banner, and minifies with Terser targeting ES5. Plugins are plain jQuery plugins written as ES5 — the ESLint config (`eslint.config.mjs`) enforces `ecmaVersion: 5` / `sourceType: script` for everything under `js/`.
- `images` — copies `img/**` straight to `dist/img`.

**SCSS layout**:

- `scss/bootstrap/` — the core framework, one partial per component (`_buttons.scss`, `_navbar.scss`, `_modals.scss`, etc.), assembled by `scss/bootstrap/bootstrap.scss` and `scss/bootstrap/responsive.scss`. Partials use `@use`/`@forward`, not `@import` — the fork migrated off `@import` (see git history) and new partials should follow suit.
- `scss/themes/` — 20 drop-in themes, each `<name>.scss` + `<name>-responsive.scss` entry point that pulls in a per-theme `config.scss` (variable overrides) and `bootswatch.scss`/ `_bootswatch.scss` (component-level overrides), then the core `bootstrap` partials. 13 are ports of official Bootswatch v2.3.2 themes (Apache-2.0, attributed in `NOTICE`); 7 (Aurora, Candy, Midnight, Minimal, Neon, Sunset, Vintage) are original to this fork (MIT). Keep that distinction in mind before touching theme headers or licence text.

**Docs site** (`docs/`): a [HydePHP](https://hydephp.com/) static site, deployed to GitHub Pages by `.github/workflows/docs.yml` on every push to `master`. `docs/config/hyde.php` derives the displayed site version from `package.json`'s `version` field at build time (override via `SITE_VERSION` env). Compiled CSS/JS/img/theme assets are vendored into `docs/_media/` via `npm run docs:copy` rather than built by Hyde itself — after a `npm run build`, re-run `docs:copy` if you need the docs site to pick up the change locally.

## Release process

Pushing a `v*` tag that's an ancestor of `master` triggers `.github/workflows/release.yml`: installs, `npm run build`, zips `dist/` as `bootstrap-legacy-<tag>.zip`, and creates a GitHub Release with generated notes (`prerelease: true` if the tag name contains a hyphen, e.g. `v2.5.0-beta.1`). Tags that aren't reachable from `master` are silently skipped. There's no separate version-bump step — update `version` in `package.json` before tagging, since the docs site and theme banners both read it at build time.
