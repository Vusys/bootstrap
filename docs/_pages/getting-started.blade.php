@extends('hyde::layouts.app')
@section('content')
@php($title = "Getting Started")
@php($navigation = ['priority' => 20])

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Getting started</h1>
        <p class="lead">Overview of the project, its contents, and how to get started with a simple template.</p>
    </div>
</header>


<div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav list-group bs-docs-sidenav">
                <li><a href="#download-bootstrap" class="list-group-item"><i class="icon-chevron-right"></i> Download</a></li>
                <li><a href="#file-structure" class="list-group-item"><i class="icon-chevron-right"></i> File structure</a></li>
                <li><a href="#contents" class="list-group-item"><i class="icon-chevron-right"></i> What's included</a></li>
                <li><a href="#html-template" class="list-group-item"><i class="icon-chevron-right"></i> HTML template</a></li>
                <li><a href="#what-next" class="list-group-item"><i class="icon-chevron-right"></i> What next?</a></li>
            </ul>
        </div>
        <div class="span9">



            <!-- Download
            ================================================== -->
            <section id="download-bootstrap">
                <div class="page-header">
                    <h1>1. Download</h1>
                </div>
                <p class="lead">Before downloading, be sure to have a code editor (we recommend <a href="http://sublimetext.com/2">Sublime Text 2</a>) and some working knowledge of HTML and CSS. We won't walk through the source files here, but they are available for download. We'll focus on getting started with the compiled Bootstrap files.</p>

                <div class="row-fluid">
                    <div class="span6">
                        <h2>Download compiled</h2>
                        <p><strong>Fastest way to get started:</strong> get the compiled and minified versions of our CSS, JS, images, and themes. No source files or build step required.</p>
                        <p><a class="btn btn-large btn-primary" href="https://github.com/Vusys/bootstrap/releases">Download Bootstrap</a></p>
                    </div>
                    <div class="span6">
                        <h2>Download source</h2>
                        <p>Get the Sass and JavaScript source, along with the build scripts, by downloading the latest version directly from GitHub.</p>
                        <p><a class="btn btn-large" href="https://github.com/Vusys/bootstrap/archive/refs/heads/master.zip">Download Bootstrap source</a></p>
                    </div>
                </div>
            </section>



            <!-- File structure
            ================================================== -->
            <section id="file-structure">
                <div class="page-header">
                    <h1>2. File structure</h1>
                </div>
                <p class="lead">Within the download you'll find the following file structure and contents, logically grouping common assets and providing both compiled and minified variations.</p>
                <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
                <pre class="prettyprint">
  bootstrap/
  ├── css/
  │   ├── bootstrap.css
  │   ├── bootstrap.min.css
  │   ├── bootstrap-responsive.css
  │   └── bootstrap-responsive.min.css
  ├── js/
  │   ├── bootstrap.js
  │   └── bootstrap.min.js
  ├── img/
  │   ├── glyphicons-halflings.png
  │   └── glyphicons-halflings-white.png
  └── themes/
      ├── amelia.css
      ├── amelia.min.css
      ├── amelia-responsive.css
      ├── amelia-responsive.min.css
      └── ... (20 themes, each with the same four files)
</pre>
                <p>This is the most basic form of Bootstrap: compiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>), each with a sourcemap alongside the minified file. The <code>themes/</code> folder holds 20 optional drop-in themes — see the <a href="https://github.com/Vusys/bootstrap#themes">readme</a> for the full list.</p>
                <p>Please note that all JavaScript plugins require jQuery to be included.</p>
            </section>



            <!-- Contents
            ================================================== -->
            <section id="contents">
                <div class="page-header">
                    <h1>3. What's included</h1>
                </div>
                <p class="lead">Bootstrap comes equipped with HTML, CSS, and JS for all sorts of things, but they can be summarized with a handful of categories visible at the top of the <a href="http://getbootstrap.com">Bootstrap documentation</a>.</p>

                <h2>Docs sections</h2>
                <h4><a href="http://twbs.github.com/bootstrap/scaffolding.html">Scaffolding</a></h4>
                <p>Global styles for the body to reset type and background, link styles, grid system, and two simple layouts.</p>
                <h4><a href="http://twbs.github.com/bootstrap/base-css.html">Base CSS</a></h4>
                <p>Styles for common HTML elements like typography, code, tables, forms, and buttons. Also includes <a href="http://glyphicons.com">Glyphicons</a>, a great little icon set.</p>
                <h4><a href="http://twbs.github.com/bootstrap/components.html">Components</a></h4>
                <p>Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.</p>
                <h4><a href="http://twbs.github.com/bootstrap/javascript.html">JavaScript plugins</a></h4>
                <p>Similar to Components, these JavaScript plugins are interactive components for things like tooltips, popovers, modals, and more.</p>

                <h2>List of components</h2>
                <p>Together, the <strong>Components</strong> and <strong>JavaScript plugins</strong> sections provide the following interface elements:</p>
                <ul>
                    <li>Button groups</li>
                    <li>Button dropdowns</li>
                    <li>Navigational tabs, pills, and lists</li>
                    <li>Navbar</li>
                    <li>Labels</li>
                    <li>Badges</li>
                    <li>Page headers and hero unit</li>
                    <li>Thumbnails</li>
                    <li>Alerts</li>
                    <li>Progress bars</li>
                    <li>Modals</li>
                    <li>Dropdowns</li>
                    <li>Tooltips</li>
                    <li>Popovers</li>
                    <li>Accordion</li>
                    <li>Carousel</li>
                    <li>Typeahead</li>
                </ul>
                <p>In future guides, we may walk through these components individually in more detail. Until then, look for each of these in the documentation for information on how to utilize and customize them.</p>
            </section>



            <!-- HTML template
            ================================================== -->
            <section id="html-template">
                <div class="page-header">
                    <h1>4. Basic HTML template</h1>
                </div>
                <p class="lead">With a brief intro into the contents out of the way, we can focus on putting Bootstrap to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the <a href="./getting-started.html#file-structure">File structure</a>.</p>
                <p>Now, here's a look at a <strong>typical HTML file</strong>:</p>
                <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;script src="http://code.jquery.com/jquery.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
                <p>To make this <strong>a Bootstrapped template</strong>, just include the appropriate CSS and JS files:</p>
                <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;!-- Bootstrap --&gt;
    &lt;link href="css/bootstrap.min.css" rel="stylesheet" media="screen"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;
    &lt;script src="http://code.jquery.com/jquery.js"&gt;&lt;/script&gt;
    &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
                <p><strong>And you're set!</strong> With those two files added, you can begin to develop any site or application with Bootstrap.</p>
            </section>



            <!-- Next
            ================================================== -->
            <section id="what-next">
                <div class="page-header">
                    <h1>What next?</h1>
                </div>
                <p class="lead">Head to the docs for information, examples, and code snippets on every component.</p>
                <a class="btn btn-large btn-primary" href="./scaffolding.html">Visit the Bootstrap docs</a>
            </section>




        </div>
    </div>

</div>

@endsection
