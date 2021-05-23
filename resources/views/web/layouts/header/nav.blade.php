<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
    <div class="container">
        <a href="/" class="navbar-brand">Smoothboard Stylers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
            <ul class="nav nav-pills flex-grow-1">
                <li class="nav-item">
                    <a href="/" class="nav-link @if($active == 'Home') active @endif " title="Ga naar de homepagina">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/Shop" class="nav-link @if($active == 'Shop') active @endif " title="Bekijk hier onze surfboards">Shop</a>
                </li>
                <li class="nav-item">
                    <a href="/FAQ" class="nav-link @if($active == 'FAQ') active @endif " title="Kijk hier om mogelijk snel antwoord op uw vraag te krijgen">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="/Contact" class="nav-link @if($active == 'Contact') active @endif " title="Stel hier een vraag, wat beantwoord zal worden in de FAQ">Contact</a>
                </li>
            </ul>
            @include('web.sections.static.login')
        </div>
    </div>
</nav>
