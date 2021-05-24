<ul class="nav nav-pills">
    @auth
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-dark" title="Beheren van accountprofiel">{{ Auth::user()->email }}</a>
        </li>
    @endauth

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle @if($active == 'Beheer') active @endif " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Het menu voor beheerders">Beheer</a>
        <div class="dropdown-menu">
            @auth
                <a href="/dashboard" class="dropdown-item @if($activePage == 'Index') active @endif " title="Beheren van accountprofiel">Account</a>
                <div class="dropdown-divider"></div>

                @auth{{--('Beheerder')--}}
                    <p class="ml-2 text-muted font-italic font-weight-bold">Surfboards</p>
                    <a href="/Surfboards" class="dropdown-item @if($activeSub == 'Surfboards') active @endif " title="Beheren van surfboards">Surfboards</a>
                    <a href="/Materialen" class="dropdown-item @if($activeSub == 'Materialen') active @endif " title="Beheren van surfboard materialen">Materialen</a>
                    <a href="/SurfboardModelTypes" class="dropdown-item @if($activeSub == 'SurfboardModelTypes') active @endif " title="Beheren van surfboard model types">Surfboard Model Types</a>
                    <a href="/Geïnteresseerden" class="dropdown-item @if($activeSub == 'Geïnteresseerden') active @endif " title="Beheren van geïnteresseerden">Geïnteresseerden</a>
                    <div class="dropdown-divider"></div>
                    <p class="ml-2 text-muted font-italic font-weight-bold">Nieuwsbrieven</p>
                    <a href="/Nieuwsbrieven" class="dropdown-item @if($activeSub == 'Nieuwsbrieven') active @endif " title="Beheren van geprepareerde nieuwsbrieven">Nieuwsbrieven</a>
                    <a href="/Abonnees" class="dropdown-item @if($activeSub == 'Abonnees') active @endif " title="Beheren van nieuwsbrief abonnees">Abonnees</a>
                    <div class="dropdown-divider"></div>
                    <p class="ml-2 text-muted font-italic font-weight-bold">Filialen</p>
                    <a href="/Filialen" class="dropdown-item @if($activeSub == 'Filialen') active @endif " title="Beheren van filialen en filiaal voorraden">Filialen en voorraden</a>
                    <div class="dropdown-divider"></div>
                @endauth

                <form method="POST" action="{{ route('logout') }}" class="logoutButton">
                    @csrf

                    <x-auth.responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                           this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            @endauth

            @guest
                <a href="/login" class="dropdown-item" title="Inloggen als beheerder">Inloggen</a>
            @endguest
        </div>
    </li>
</ul>
