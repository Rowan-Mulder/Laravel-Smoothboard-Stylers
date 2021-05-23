@php
    $active = $active ?? '';
    $activeSub = $activeSub ?? '';
    $activePage = $activePage ?? '';
@endphp
<!DOCTYPE html>
<html lang="nl">
    @include('web.layouts.head')

    <body>
        @include('web.layouts.header')

        <main class="container" role="main">
            <div class="pb-3">
                @yield('content')
            </div>
        </main>

        @include('web.layouts.footer')
    </body>
</html>
