<!DOCTYPE html>
<html lang="nl">
    @include('web.layouts.head')

    <body>
        @yield('header')

        <main class="container" role="main">
            <div class="pb-3">
                @yield('content')
            </div>
        </main>

        @yield('footer')
    </body>
</html>
