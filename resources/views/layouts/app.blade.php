@include('layouts.partials.head')

<body>
    @include('layouts.partials.nav')
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>