@props(['linenums' => true])

@php
    $dom = \Dom\HTMLDocument::createFromString( $slot, LIBXML_NOERROR|LIBXML_HTML_NOIMPLIED, "UTF-8" );
    $formatter = new Edent\PrettyPrintHtml\PrettyPrintHtml();
@endphp

<div class="bs-docs-example">{{ $slot }}</div>
<pre class="prettyprint{{ $linenums ? ' linenums' : '' }}">{{ $formatter->serializeHtml( $dom, rawAttributes: false ) }}</pre>