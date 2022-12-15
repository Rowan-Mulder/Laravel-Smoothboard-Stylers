<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">{{ __('messages.Smoothboard Stylers') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
            <ul class="nav nav-pills flex-grow-1">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if(/*request()->routeIs('home')*/ $active == 'shop') active @endif " title="{{ __('messages.Go to the homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop') }}" class="nav-link @if($active == 'shop') active @endif " title="{{ __('messages.View our surfboards here') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link @if($active == 'faq') active @endif " title="{{ __('messages.Look here to possibly get a quick answer to your question') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link @if($active == 'contact') active @endif " title="{{ __('messages.Ask a question here, which will be answered in the FAQ') }}">Contact</a>
                </li>
            </ul>
            @include('web.sections.static.login')
        </div>
    </div>
</nav>
