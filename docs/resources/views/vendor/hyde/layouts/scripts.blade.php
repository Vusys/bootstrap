{{-- The compiled Laravel Mix scripts --}}
{{--@if(Asset::hasMediaFile('app.js'))--}}
{{--    <script defer src="{{ Asset::mediaLink('app.js') }}"></script>--}}
{{--@endif--}}

{{-- Alpine.js --}}
{{--<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" integrity="sha256-gOkV4d9/FmMNEkjOzVlyM2eNAWSUXisT+1RbMTTIgXI=" crossorigin="anonymous"></script>--}}

{{--<script>--}}
{{--    function toggleTheme() {--}}
{{--        if (localStorage.getItem('color-theme') === 'dark' || !('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {--}}
{{--            document.documentElement.classList.remove("dark");--}}
{{--            localStorage.setItem('color-theme', 'light');--}}
{{--            document.getElementById('meta-color-scheme').setAttribute('content', 'light');--}}
{{--        } else {--}}
{{--            document.documentElement.classList.add("dark");--}}
{{--            localStorage.setItem('color-theme', 'dark');--}}
{{--            document.getElementById('meta-color-scheme').setAttribute('content', 'dark');--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" integrity="sha512-jGR1T3dQerLCSm/IGEGbndPwzszJBlKQ5Br9vuB0Pw2iyxOy+7AK+lJcCC8eaXyz/9du+bkCy4HXxByhxkHf+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ Asset::mediaLink('js/bootstrap.js') }}"></script>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/1.9/holder.min.js" integrity="sha512-6eV3XDgL/hvgNSJO5F1oSeUNa0Xp5Xbl74BwCQkfeyESKK97ZJW8LD3C6HNHfFz1ZvrT4wYtclNulQQ/5UKI3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--<script src="assets/js/google-code-prettify/prettify.js"></script>--}}
<script src="{{ Asset::mediaLink('js/google-code-prettify/prettify.js') }}"></script>
<script src="{{ Asset::mediaLink('js/application.js') }}"></script>
<script src="{{ Asset::mediaLink('js/theme-switcher.js') }}"></script>

{{--<script src="assets/js/application.js"></script>--}}


{{-- Add any extra scripts to include before the closing <body> tag --}}
@stack('scripts')

{{-- If the user has defined any custom scripts, render them here --}}
{!! config('hyde.scripts') !!}
{!! Includes::html('scripts') !!}
