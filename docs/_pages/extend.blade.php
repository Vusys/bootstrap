@extends('hyde::layouts.app')
@section('content')
@php($title = "Extend")

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Extending Bootstrap</h1>
        <p class="lead">Extend Bootstrap to take advantage of included styles and components, as well as Sass variables and mixins.</p>
        <div>
</header>

<div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav list-group bs-docs-sidenav">
                <li><a href="#built-with-sass" class="list-group-item"><i class="icon-chevron-right"></i> Built with Sass</a></li>
                <li><a href="#compiling" class="list-group-item"><i class="icon-chevron-right"></i> Compiling Bootstrap</a></li>
                <li><a href="#static-assets" class="list-group-item"><i class="icon-chevron-right"></i> Use as static assets</a></li>
            </ul>
        </div>
        <div class="span9">



            <!-- BUILT WITH SASS
            ================================================== -->
            <section id="built-with-sass">
                <div class="page-header">
                    <h1>Built with Sass</h1>
                </div>

                <p class="lead">This fork's source is Sass, compiled with <a href="https://sass-lang.com/dart-sass/">Dart Sass</a>. The original Bootstrap 2 was built with LESS; this fork migrated the whole <code>scss/</code> tree over when it moved to modern tooling, so anything you'd customize used to be a <code>.less</code> file and is now a <code>.scss</code> partial.</p>

                <h3>Why Sass?</h3>
                <ul>
                    <li>LESS's own reference implementation (lessc) has been effectively unmaintained for years; Dart Sass is the actively developed reference implementation of Sass.</li>
                    <li>The rest of this project's tooling — Gulp, ESLint, Stylelint — is npm-native, so a Node-based Sass compiler fits the same pipeline without a separate toolchain.</li>
                    <li>Sass's module system (<code>@@use</code>/<code>@@forward</code>) gives the theme system in this fork proper namespacing, which LESS's <code>@@import</code> never had.</li>
                </ul>

                <h3>What's included?</h3>
                <p>As an extension of CSS, Sass includes variables, mixins for reusable snippets of code, operations for simple math, nesting, and colour functions — the same category of features LESS offered, just with different syntax.</p>

                <h3>Learn more</h3>
                <p>Visit the official website at <a href="https://sass-lang.com">https://sass-lang.com</a> to learn more.</p>
            </section>



            <!-- COMPILING SASS AND BOOTSTRAP
            ================================================== -->
            <section id="compiling">
                <div class="page-header">
                    <h1>Compiling Bootstrap with Sass</h1>
                </div>

                <p class="lead">Since our CSS is written with Sass and utilizes variables and mixins, it needs to be compiled for final production implementation. Here's how.</p>

                <div class="alert alert-info">
                    <strong>Note:</strong> If you're submitting a pull request to GitHub with modified CSS, you <strong>must</strong> recompile the CSS via any of these methods.
                </div>

                <h2>Tools for compiling</h2>

                <h3>Command line</h3>
                <p>Clone the repo and build it with the Gulp pipeline:</p>
                <pre class="prettyprint">
git clone https://github.com/Vusys/bootstrap.git
cd bootstrap
npm ci
npm run build
</pre>
                <p><code>npm run build</code> cleans <code>dist/</code>, then compiles <code>scss/bootstrap.scss</code> and every theme in <code>scss/themes/</code> with Dart Sass, runs them through Autoprefixer against the project's legacy browser matrix, and minifies with clean-css. Use <code>npm run watch</code> during development to rebuild on every file change. See the <a href="https://github.com/Vusys/bootstrap#compiling-css-and-javascript">readme</a> for the full list of npm scripts.</p>

                <h3>Editor and IDE plugins</h3>
                <p>Most editors have a Sass/SCSS extension that can watch and compile <code>.scss</code> files on save — handy for quick experiments, but not a substitute for running the project's own Gulp build, which also handles Autoprefixer and minification.</p>

            </section>



            <!-- Static assets
            ================================================== -->
            <section id="static-assets">
                <div class="page-header">
                    <h1>Use as static assets</h1>
                </div>
                <p class="lead"><a href="./getting-started.html">Quickly start</a> any web project by dropping in the compiled or minified CSS and JS. Layer on custom styles separately for easy upgrades and maintenance moving forward.</p>

                <h3>Setup file structure</h3>
                <p>Download the latest compiled Bootstrap and place into your project. For example, you might have something like this:</p>
                <pre>
  <span class="icon-folder-open"></span> app/
      <span class="icon-folder-open"></span> layouts/
      <span class="icon-folder-open"></span> templates/
  <span class="icon-folder-open"></span> public/
      <span class="icon-folder-open"></span> css/
          <span class="icon-file"></span> bootstrap.min.css
      <span class="icon-folder-open"></span> js/
          <span class="icon-file"></span> bootstrap.min.js
      <span class="icon-folder-open"></span> img/
          <span class="icon-file"></span> glyphicons-halflings.png
          <span class="icon-file"></span> glyphicons-halflings-white.png
</pre>

                <h3>Utilize starter template</h3>
                <p>Copy the following base HTML to get started.</p>
                <pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="public/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;script src="public/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

                <h3>Layer on custom code</h3>
                <p>Work in your custom CSS, JS, and more as necessary to make Bootstrap your own with your own separate CSS and JS files.</p>
                <pre class="prettyprint linenums">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="public/css/bootstrap.min.css" rel="stylesheet"&gt;
    &lt;!-- Project --&gt;
    &lt;link href="public/css/application.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;script src="public/js/bootstrap.min.js"&gt;&lt;/script&gt;
    &lt;!-- Project --&gt;
    &lt;script src="public/js/application.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

            </section>

        </div>
    </div>

</div>


@endsection
