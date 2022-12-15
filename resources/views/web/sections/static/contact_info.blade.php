@php
	// Dit is tijdelijk tot de database uitgebreid wordt.
    $branchManagers = [
        [
            'managerId' => 'Filiaal A',
            'fullAddress' => 'Ergens',
            'phoneNumber' => '06-12345678',
            'emailaddress' => 'a@a.com'
        ],
        [
            'managerId' => 'Filiaal B',
            'fullAddress' => 'Op Aarde',
            'phoneNumber' => '06-23456789',
            'emailaddress' => 'b@b.com'
        ]
    ];
@endphp

@push('styles')
    {{-- asset() vereist een filewatcher 'npm run watch', wat Mix en TailwindCss gebruikt, vanuit webpack.mix.js te configureren, om JS en CSS vanuit /resources te compilen/verplaatsen naar /public --}}
    <link href="{{ asset('css/contactInfoTable.css') }}" type="text/css" rel="stylesheet">
@endpush

<div class="bd-example">
    <table class="table table-sm table-bordered infoTable" style="line-height: 30px;">
        <thead>
            <tr>
                <th scope="col">{{ __('messages.Branch Manager') }}</th>
                @foreach ($branchManagers as $branchManager)
                    <th scope="col">{{ $branchManager['managerId'] }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ __('messages.Branch location') }}</th>
                @foreach ($branchManagers as $branchManager)
                    <td>{{ $branchManager['fullAddress'] }}</td>
                @endforeach
            </tr>
            <tr>
                <th scope="row">{{ __('messages.Phone number') }}</th>
                @foreach ($branchManagers as $branchManager)
                    <td>{{ $branchManager['phoneNumber'] }}</td>
                @endforeach
            </tr>
            <tr>
                <th scope="row">{{ __('messages.Emailaddress') }}</th>
                @foreach ($branchManagers as $branchManager)
                    <td>{{ $branchManager['emailaddress'] }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
