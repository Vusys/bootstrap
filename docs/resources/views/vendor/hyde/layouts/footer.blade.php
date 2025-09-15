{{--@if(config('hyde.footer') !== false)--}}
{{--    <footer aria-label="Page footer" class="flex py-4 px-6 w-full text-center mt-auto bg-slate-100 dark:bg-gray-800">--}}
{{--        <div class="prose dark:prose-invert text-center mx-auto">--}}
{{--            {!! \Hyde\Support\Includes::markdown('footer', config('hyde.footer', 'Site proudly built with [HydePHP](https://github.com/hydephp/hyde) 🎩')) !!}--}}
{{--        </div>--}}
{{--        <a href="#app" aria-label="Go to top of page" class="float-right">--}}
{{--            <button title="Scroll to top">--}}
{{--                <svg width="1.5rem" height="1.5rem" role="presentation" class="fill-current text-gray-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </a>--}}
{{--    </footer>--}}
{{--@endif--}}

<footer class="footer">
    <div class="container">
        <p>Maintained by Vusys. An esoteric fork of Bootstrap v2.3.2.</p>
        <p>
            Includes original work from <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> (Apache‑2.0),
            <a href="https://github.com/twbs/bootstrap-sass/tree/061ef3280711a36580f278da889658c6a79416e7" target="_blank">Bootstrap for Sass</a> (MIT),
            <a href="https://github.com/thomaspark/bootswatch/tree/a9aab510f11515c7dec294e7b24e838ff583e15a" target="_blank">Bootswatch</a> (Apache‑2.0).
        </p>
        <p><a href="https://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
            <li><a href="https://vusys.github.io/bootstrap">Home</a></li>
            <li class="muted">&middot;</li>
            <li><a href="https://github.com/vusys/bootstrap/issues">Issues</a></li>
            <li class="muted">&middot;</li>
            <li><a href="https://github.com/vusys/bootstrap/releases">Releases</a></li>
        </ul>
    </div>
</footer>