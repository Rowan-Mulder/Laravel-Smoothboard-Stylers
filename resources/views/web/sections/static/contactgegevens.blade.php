@php
	// Dit is tijdelijk tot de database uitgebreid wordt.
    $filiaalBeheerders = [
        [
            'beheerderId' => 'Filiaal A',
            'volledigAdres' => 'Ergens',
            'telefoonnummer' => '06-12345678',
            'emailadres' => 'a@a.com'
        ],
        [
            'beheerderId' => 'Filiaal B',
            'volledigAdres' => 'Op Aarde',
            'telefoonnummer' => '06-23456789',
            'emailadres' => 'b@b.com'
        ]
    ];
@endphp

@push('styles')
    {{-- asset() vereist een filewatcher 'npm run watch', wat Mix en TailwindCss gebruikt, vanuit webpack.mix.js te configureren, om JS en CSS vanuit /resources te compilen/verplaatsen naar /public --}}
    <link href="{{ asset('css/contactgegevensTabel.css') }}" type="text/css" rel="stylesheet">
@endpush

<div class="bd-example">
    <table class="table table-sm table-bordered gegevensTabel" style="line-height: 30px;">
        <thead>
            <tr>
                <th scope="col">Filiaalbeheerder</th>
                @foreach ($filiaalBeheerders as $filiaalBeheerder)
                    <th scope="col">{{ $filiaalBeheerder['beheerderId'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Filiaal locatie</th>
                @foreach ($filiaalBeheerders as $filiaalBeheerder)
                    <td>{{ $filiaalBeheerder['volledigAdres'] }}</td>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Telefoonnummer</th>
                @foreach ($filiaalBeheerders as $filiaalBeheerder)
                    <td>{{ $filiaalBeheerder['telefoonnummer'] }}</td>
                @endforeach
            </tr>
            <tr>
                <th scope="row">E-mailadres</th>
                @foreach ($filiaalBeheerders as $filiaalBeheerder)
                    <td>{{ $filiaalBeheerder['emailadres'] }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
