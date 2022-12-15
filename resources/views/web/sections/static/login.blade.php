<ul class="nav nav-pills">
    @auth
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-dark" title="{{ __('messages.Manage account profile') }}">{{ Auth::user()->email }}</a>
        </li>
    @endauth

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle @if($active == 'beheer') active @endif " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="{{ __('messages.The administrator menu') }}">{{ __('messages.Manage') }}</a>
        <div class="dropdown-menu">
            @auth
                <a href="{{ route('dashboard') }}" class="dropdown-item @if($activePage == 'index') active @endif " title="{{ __('messages.Manage account profile') }}">{{ __('messages.Account') }}</a>
                <div class="dropdown-divider"></div>

                @auth {{-- Admin --}}
                    <p class="ml-2 text-muted font-italic font-weight-bold">{{ __('messages.Surfboards') }}</p>
                    <a href="{{ route('surfboards') }}" class="dropdown-item @if($activeSub == 'surfboards') active @endif " title="{{ __('messages.Manage surfboards') }}">{{ __('messages.Surfboards') }}</a>
                    <a href="{{ route('materials') }}" class="dropdown-item @if($activeSub == 'materials') active @endif " title="{{ __('messages.Manage surfboard materials') }}">{{ __('messages.Materials') }}</a>
                    <a href="{{ route('surfboard-model-types') }}" class="dropdown-item @if($activeSub == 'surfboard-model-types') active @endif " title="{{ __('messages.Manage surfboard model types') }}">{{ __('messages.Surfboard Model Types') }}</a>
                    <a href="{{ route('interested') }}" class="dropdown-item @if($activeSub == 'interested') active @endif " title="{{ __('messages.Manage interested') }}">{{ __('messages.Interested') }}</a>
                    <div class="dropdown-divider"></div>
                    <p class="ml-2 text-muted font-italic font-weight-bold">{{ __('messages.Newsletters') }}</p>
                    <a href="{{ route('newsletters') }}" class="dropdown-item @if($activeSub == 'newsletters') active @endif " title="{{ __('messages.Manage prepared newsletters') }}">{{ __('messages.Interested') }}</a>
                    <a href="{{ route('subscriptions') }}" class="dropdown-item @if($activeSub == 'subscriptions') active @endif " title="{{ __('messages.Manage newsletter subscriptions') }}">{{ __('messages.Subscriptions') }}</a>
                    <div class="dropdown-divider"></div>
                    <p class="ml-2 text-muted font-italic font-weight-bold">{{__('messages.Branches')}}</p>
                    <a href="{{ route('branches') }}" class="dropdown-item @if($activeSub == 'branches') active @endif " title="{{ __('messages.Manage branches and inventory') }}">{{ __('messages.Branches and inventory') }}</a>
                    <div class="dropdown-divider"></div>
                @endauth

                <form method="POST" action="{{ route('logout') }}" class="logoutButton">
                    @csrf

                    <x-auth.responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                           this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-auth.responsive-nav-link>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="dropdown-item" title="{{ __('messages.Login as admin') }}">{{ __('messages.Login') }}</a>
            @endguest
        </div>
    </li>
</ul>
