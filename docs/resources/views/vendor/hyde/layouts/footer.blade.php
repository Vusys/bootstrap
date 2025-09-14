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
        <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
        <p>Code licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <p><a href="http://glyphicons.com">Glyphicons Free</a> licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
        <ul class="footer-links">
            <li><a href="http://blog.getbootstrap.com">Blog</a></li>
            <li class="muted">&middot;</li>
            <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
            <li class="muted">&middot;</li>
            <li><a href="https://github.com/twbs/bootstrap/releases">Changelog</a></li>
        </ul>
    </div>
</footer>