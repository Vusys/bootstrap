<!DOCTYPE html>
<html lang="{{ config('hyde.language', 'en') }}">
<head>
    @include('hyde::layouts.head')
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
{{--    @include('hyde::components.skip-to-content-button')--}}
    @include('hyde::layouts.navigation')

{{--    <section>--}}
        @yield('content')
{{--    </section>--}}

    @include('hyde::layouts.footer')

    @include('hyde::layouts.scripts')
</body>
</html>
