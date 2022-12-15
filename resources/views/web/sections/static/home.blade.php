@extends('web.sections.static.layout')

@push('meta')
    <meta name="description" content="Deze website is een recreatie van Smoothboard Stylers, maar in Laravel.">
@endpush

@section('title', "Home Page")

@php
    $active = 'Home';
@endphp

@push('styles')
    {{-- asset() vereist een filewatcher 'npm run watch', wat Mix en TailwindCss gebruikt, vanuit webpack.mix.js te configureren, om JS en CSS vanuit /resources te compilen/verplaatsen naar /public --}}
    <link href="{{ asset('css/surfboardsAnimation.css') }}" type="text/css" rel="stylesheet">
@endpush

@section('header')
    @include('web.layouts.header')
@endsection

@section('content')
    <div class="text-center">
        <h1 class="display-4 font-weight-bold">Smoothboard Stylers</h1>
        <p class="font-italic">Spicin' up your board</p>
    </div>

    <!-- Homepage SVG Logo -->
    {{-- Het SVG Logo heb ik hier geplaatst zodat de layers toegankelijk zijn. Met <img> en backgroundImage heb je hier anders geen toegang toe. --}}
    <!-- Created with Inkscape (http://www.inkscape.org/) -->
    <svg xmlns="http://www.w3.org/2000/svg"
         width="330.09665mm"
         height="200.94067mm"
         viewBox="0 0 330.09665 200.94068"
         id="homepageSVGLogo"
         class="w-100 h-auto">
        <g id="SkyOrWater"
           transform="translate(49.368331,-44.673531)">
            <path style="fill:#00edfa;fill-opacity:1;stroke:#00b1ff;stroke-width:7;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="M -1.9103794,222.60043 -45.011881,122.75431 63.299289,48.678221 274.05081,144.88683 205.81715,198.55399 Z"
                  id="path1583" />
        </g>
        <g id="Zon"
           style="display:inline"
           transform="translate(49.368331,-44.673531)">
            <circle style="opacity:1;fill:#ddce1c;fill-opacity:1;stroke:#ff6700;stroke-width:1.8791281px;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                    id="path5643"
                    cx="108.14149"
                    cy="131.02895"
                    r="40.43327" />
        </g>
        <g id="Zand"
           style="display:inline"
           transform="translate(49.368331,-44.673531)">
            <g id="g4729"
               transform="matrix(0.44758282,0,0.02594698,0.41813458,29.550058,-113.21384)"
               style="opacity:1;stroke-width:0.5px;stroke-miterlimit:4;stroke-dasharray:none">
                <path style="fill:#ffe497;fill-opacity:1;stroke:none;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                      d="m -75.203004,769.76289 c 0,0 12.544203,-81.78577 102.667901,-80.95895 51.263021,0 19.466846,62.20854 113.852263,63.89661 45.01821,-2.92326 74.79809,-17.81236 74.79809,-17.81236 43.82161,-22.32422 86.43238,44.77224 86.43238,44.77224 18.70887,60.80382 73.06221,80.71227 24.75183,78.31281 -199.77174,-2.37644 -171.96491,-12.36676 -266.678549,-14.70537 -91.205726,-3.50791 -44.704241,11.38331 -144.679753,13.72192 -54.957288,0 -8.68372,-18.23795 8.855838,-87.2269 z"
                      id="path5641" />
            </g>
        </g>
        <g id="Palmbomen-stam"
           style="display:inline"
           transform="translate(49.368331,-44.673531)" />
        <g id="Palmbomen-blad"
           transform="translate(49.368331,-44.673531)">
            <g id="g6211"
               transform="matrix(0.1879128,0,0,0.1879128,96.524171,101.48876)">
                <path id="path6173"
                      d="m -244.73958,424.33073 c 0,0 -58.81187,-74.31079 -64.65839,-135.11461 -2.33861,-74.83547 1.65365,-259.539305 1.65365,-259.539305 1.13557,-24.0416113 27.07827,-20.3044497 28.28061,-2.786083 0,0 2e-5,161.363988 18.70889,249.061798 0,0 9.47194,95.05612 96.00045,148.84411 1.65364,19.01692 -41.59879,41.02718 -79.98521,-0.46591 z"
                      style="display:inline;fill:#a47f3b;fill-opacity:1;stroke:#632e00;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                <path id="path6173-4"
                      d="m -307.74432,29.676822 c 0,0 -45.90085,12.67302 -69.28694,118.495038 -14.61631,-38.00237 -8.21297,-99.949828 10.62406,-123.791328 13.83104,-17.17484 28.46198,-28.34407 28.46198,-28.34407 0,0 -10.99975,-7.32145 -49.86044,3.42726 -44.64844,15.70963 -77.77805,54.67357 -77.77805,54.67357 1.79551,-40.43921 21.74,-76.634924 55.96451,-89.203964 34.51484,-10.98346 69.09431,-9.25917 69.09431,-9.25917 0,0 2.95273,-11.849776 -33.4275,-26.319186 -35.76009,-15.70963 -80.90696,-8.81133 -80.90696,-8.81133 36.24843,-40.341002 93.54754,-23.304812 111.82366,-14.43897 34.30099,16.55367 36.67799,34.25755 36.67799,34.25755 0,0 11.88654,-19.80641 31.11017,-33.65569 20.05045,-12.402352 43.4739,-29.759552 109.20633,3.31338 0,0 -32.81003,-4.227502 -63.12736,15.432838 -32.65949,19.43034 -30.41909,30.80232 -30.41909,30.80232 0,0 15.24756,-1.581038 55.0039,6.311762 44.40074,10.17315 57.94857,28.28636 73.52136,69.95259 0,0 -31.52362,-28.61101 -78.85207,-42.04836 -46.3226,-6.84164 -53.62007,1.4538416 -53.62007,1.4538416 0,0 4.81736,-6.0515216 41.06578,28.1506284 26.89399,23.97073 31.33618,66.28646 17.58112,106.949768 -28.64795,-85.943858 -74.57608,-100.134568 -74.57608,-100.134568 -4.28551,12.09527 -21.94655,11.54639 -28.28061,2.78609 z"
                      style="display:inline;fill:#008e00;fill-opacity:1;stroke:#1b4900;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
            </g>
            <g id="g6211-9"
               transform="matrix(-0.14936057,0,0,0.16666297,127.61363,124.28609)">
                <path id="path6173-2"
                      d="m -244.73958,424.33073 c 0,0 -63.48909,-55.60192 -69.33561,-116.40574 -2.33861,-74.83547 -16.82017,-258.404425 -16.82017,-258.404425 -1.75831,-15.773382 14.95579,-29.671329 21.94589,-10.499317 0,0 20.68796,156.963902 31.88121,255.660142 7.02161,31.46325 34.24018,79.95081 120.76869,133.7388 -6.24143,28.89958 -48.15969,27.48175 -88.44001,-4.08946 z"
                      style="display:inline;fill:#a47f3b;fill-opacity:1;stroke:#632e00;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
                <path id="path6173-4-6"
                      d="m -331.75126,52.309066 c 0,0 -43.31563,19.78003 -49.65346,127.969864 -20.44836,-35.2091 -23.93306,-97.389054 -9.10808,-123.912084 10.93755,-19.14792 23.43357,-33.039694 23.43357,-33.039694 0,0 -11.838,-4.940586 -48.5069,11.824844 -41.59827,22.58007 -68.14144,66.297574 -68.14144,66.297574 -4.62932,-40.213474 21.48565,-78.802654 53.28865,-96.631464 32.3407,-16.3092 57.45699,-22.462443 57.45699,-22.462443 0,0 -1.81282,-10.094087 -40.02498,-18.621437 -37.79619,-9.850109 -81.28158,4.10867 -81.28158,4.10867 29.40465,-45.570959 88.67824,-37.820989 108.12747,-31.960359 36.48912,10.9145 41.63895,28.018789 41.63895,28.018789 0,0 8.60096,-21.438449 25.38958,-38.156479 17.8341,-15.42025 38.21422,-36.266857 108.35364,-14.01753 0,0 -48.11712,5.598252 -74.93955,29.810372 -29.17147,24.355809 -16.30176,31.260841 -16.30176,31.260841 0,0 20.99935,-4.584274 61.50386,-3.085084 45.45136,3.0155 61.69594,18.75544 83.66877,57.43077 0,0 -35.65564,-23.25948 -84.51456,-29.03451 -46.82154,0.57825 -54.65714,10.4071429 -54.65714,10.4071429 0,0 5.74202,-7.2205829 46.94804,20.8115171 30.34977,19.41067 41.4352,60.48946 34.29127,102.817584 -41.89295,-80.324534 -89.48848,-87.065114 -89.48848,-87.065114 -2.31659,12.62119 -19.84179,14.87526 -27.48286,7.22823 z"
                      style="display:inline;fill:#008e00;fill-opacity:1;stroke:#1b4900;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
            </g>
        </g>
        <g id="Surfboards"
           style="display:inline"
           transform="translate(49.368331,-44.673531)">
            <path style="opacity:1;fill:#ff0000;fill-opacity:1;stroke:#6e0f00;stroke-width:0.70160359px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 55.77407,197.86685 -1.769871,-17.41852 c -1.793375,-17.64989 -12.892306,-30.47991 -12.892306,-30.47991 0,0 -8.49185,12.82794 -6.698097,30.48151 l 1.769706,17.41692 c 3.077808,30.29086 9.320065,32.84232 13.530129,32.84232 4.212985,0 9.111787,-2.81194 6.060439,-32.84232 z"
                  id="path4651" />
            <path style="opacity:1;fill:#ff0000;fill-opacity:1;stroke:#6e0f00;stroke-width:0.70160359px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 37.238749,158.19805 7.109357,69.96807 -0.167623,-0.18789 -7.04789,-69.36317 z"
                  id="path4653" />
            <path style="opacity:1;fill:#ff0000;fill-opacity:1;stroke:#6e0f00;stroke-width:0.70160359px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 46.667168,158.19752 7.162423,70.30278 0.125929,-0.21563 -7.09781,-69.6669 z"
                  id="path4653-1" />
            <path style="opacity:1;fill:#ff0000;fill-opacity:1;stroke:#6e0f00;stroke-width:0.70160359px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 38.538455,154.92385 7.585882,74.65786 -0.157463,-0.11148 -7.529288,-74.10088 z"
                  id="path4653-2" />
            <path style="opacity:1;fill:#ff0000;fill-opacity:1;stroke:#6e0f00;stroke-width:0.70160359px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 44.879954,155.21567 7.594925,74.55924 0.132884,-0.13072 -7.536321,-73.98253 z"
                  id="path4653-1-9" />
            <path id="path4651-5"
                  d="m 143.99801,194.6935 0.16089,-19.26624 c 0.16304,-19.52213 -9.51373,-33.71312 -9.51373,-33.71312 0,0 -9.91376,14.18869 -10.07684,33.7149 l -0.16088,19.26445 c -0.2798,33.50402 5.67963,36.32612 9.88969,36.32612 4.21299,0 9.42348,-3.11021 9.70087,-36.32611 z"
                  style="opacity:1;fill:#44c445;fill-opacity:1;stroke:#0b6e00;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
            <path style="opacity:1;fill:#00ff00;fill-opacity:1;stroke:#0b6e00;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 129.85981,150.81675 -0.6463,77.39006 -0.14679,-0.20783 0.64072,-76.72098 z"
                  id="path4653-5" />
            <path style="opacity:1;fill:#00ff00;fill-opacity:1;stroke:#0b6e00;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 139.28829,150.81616 -0.65112,77.59642 0.14982,-0.23851 0.64525,-76.89309 z"
                  id="path4653-1-7" />
            <path style="opacity:1;fill:#00ff00;fill-opacity:1;stroke:#0b6e00;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 131.52245,147.19522 -0.68963,82.57735 -0.14509,-0.12332 0.68448,-81.96126 z"
                  id="path4653-2-8" />
            <path style="opacity:1;fill:#00ff00;fill-opacity:1;stroke:#0b6e00;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 137.8316,147.51801 -0.69043,82.30439 0.14738,-0.14458 0.68511,-81.66652 z"
                  id="path4653-1-9-9" />
            <path id="path4651-5-5"
                  d="m 173.58126,197.50253 2.98646,-17.76563 c 3.02612,-18.0016 -4.56941,-31.08728 -4.56941,-31.08728 0,0 -11.99469,13.08357 -15.02143,31.08891 l -2.98618,17.76399 c -5.19345,30.89445 0.3521,33.49676 4.56215,33.49676 4.21298,0 9.87962,-2.86796 15.02841,-33.49675 z"
                  style="opacity:1;fill:#dc0ef3;fill-opacity:1;stroke:#6e0200;stroke-width:0.71702087px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
            <path style="opacity:1;fill:#dc0ef3;fill-opacity:1;stroke:#6e0200;stroke-width:0.71702087px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 165.87796,157.04324 -11.99622,71.36234 -0.11632,-0.19168 11.89252,-70.74533 z"
                  id="path4653-5-9" />
            <path style="opacity:1;fill:#dc0ef3;fill-opacity:1;stroke:#6e0200;stroke-width:0.71702087px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 175.30652,157.04269 -12.04513,71.70455 0.18482,-0.21994 11.9361,-71.05598 z"
                  id="path4653-1-7-5" />
            <path style="opacity:1;fill:#dc0ef3;fill-opacity:1;stroke:#6e0200;stroke-width:0.71702087px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 168.07173,153.7038 -12.80031,76.14556 -0.12702,-0.11371 12.7048,-75.57747 z"
                  id="path4653-2-8-5" />
            <path style="opacity:1;fill:#dc0ef3;fill-opacity:1;stroke:#6e0200;stroke-width:0.71702087px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 174.33354,154.00144 -12.77491,76.0458 0.16859,-0.13331 12.67602,-75.45762 z"
                  id="path4653-1-9-9-8" />
            <path id="path4651-5-5-3"
                  d="M 85.434798,191.37467 84.952112,170.45914 C 84.463008,149.26581 74.312186,133.86 74.312186,133.86 c 0,0 -9.4398,15.40331 -8.9506,36.60107 l 0.482655,20.91359 c 0.839399,36.37211 6.893116,39.43581 11.103174,39.43581 4.212984,0 9.319568,-3.37645 8.487383,-39.4358 z"
                  style="opacity:1;fill:#f3dd0e;fill-opacity:1;stroke:#ff4700;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
            <path style="opacity:1;fill:#f3dd0e;fill-opacity:1;stroke:#ff4700;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 69.830893,143.74184 1.938917,84.01505 -0.153735,-0.22563 -1.922147,-83.28869 z"
                  id="path4653-5-9-4" />
            <path style="opacity:1;fill:#f3dd0e;fill-opacity:1;stroke:#ff4700;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 79.259354,143.7412 1.953354,84.44322 0.141864,-0.25892 -1.93573,-83.67968 z"
                  id="path4653-1-7-5-1" />
            <path style="opacity:1;fill:#f3dd0e;fill-opacity:1;stroke:#ff4700;stroke-width:0.70160365px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 71.372558,139.81029 2.068874,89.64638 -0.149224,-0.13386 -2.053442,-88.97756 z"
                  id="path4653-2-8-5-3" />
            <path style="        opacity: 1;
        fill: #f3dd0e;
        fill-opacity: 1;
        stroke: #ff4700;
        stroke-width: 0.70160365px;
        stroke-linecap: butt;
        stroke-linejoin: miter;
        stroke-miterlimit: 4;
        stroke-dasharray: none;
        stroke-opacity: 1"
                  d="m 77.692498,140.16072 2.071308,89.55419 0.142545,-0.15694 -2.055328,-88.86173 z"
                  id="path4653-1-9-9-8-1" />
            <path id="path4651-5-5-3-6"
                  d="m 115.37059,200.5765 -1.01126,-16.26429 c -1.0247,-16.4803 -11.56487,-28.46015 -11.56487,-28.46015 0,0 -9.050519,11.9779 -8.025598,28.46164 l 1.011175,16.2628 c 1.758617,28.28361 7.889743,30.66599 12.099803,30.66599 4.21298,0 9.23425,-2.62558 7.49075,-30.66599 z"
                  style="        opacity: 1;
        fill: #0ed6f3;
        fill-opacity: 1;
        stroke: #0076ff;
        stroke-width: 0.6598745px;
        stroke-linecap: butt;
        stroke-linejoin: miter;
        stroke-miterlimit: 4;
        stroke-dasharray: none;
        stroke-opacity: 1" />
            <path style="opacity:1;fill:#0ed6f3;fill-opacity:1;stroke:#0076ff;stroke-width:0.6598745px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 98.562911,163.53636 4.062169,65.33162 -0.15945,-0.17545 -4.02704,-64.7668 z"
                  id="path4653-5-9-4-8" />
            <path style="opacity:1;fill:#0ed6f3;fill-opacity:1;stroke:#0076ff;stroke-width:0.6598745px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 107.99135,163.53585 4.05497,65.61191 0.13533,-0.20135 -4.01807,-65.01814 z"
                  id="path4653-1-7-5-1-2" />
            <path style="opacity:1;fill:#0ed6f3;fill-opacity:1;stroke:#0076ff;stroke-width:0.6598745px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 100.00521,160.47911 4.33445,69.71066 -0.15262,-0.10411 -4.302101,-69.19056 z"
                  id="path4653-2-8-5-3-3" />
            <path style="opacity:1;fill:#0ed6f3;fill-opacity:1;stroke:#0076ff;stroke-width:0.6598745px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                  d="m 106.33399,160.75162 4.30211,69.58629 0.13858,-0.12205 -4.26863,-69.04782 z"
                  id="path4653-1-9-9-8-1-1" />
        </g>
    </svg>

    <hr />

    <div class="card-body">
        <h5 class="card-title font-weight-bold">Nieuwsbrieven</h5>
        <p class="card-text">Voor alle recentelijke informatie kun je je aanmelden voor onze driemaandelijkse nieuwsbrieven. Mis geen updates of aanbiedingen en meld je direct aan!</p>
        <a href="/Nieuwsbrieven/Aanmelden" class="btn btn-primary">Aanmelden</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
