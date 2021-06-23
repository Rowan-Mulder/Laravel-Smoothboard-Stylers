@php
    $index = $index ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', $index['modelName']['plural'])

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $index['modelName']['singular'] }}</h1>

    <p>
        <a href="/Materialen/create">Nieuw aanmaken</a>
    </p>

    <table class="table">
        <thead>
            <tr>
                @for ($x = 0; $x < count($index['fieldNames']); $x++)
                    <th>
                        {{ ucfirst($index['fieldNames'][$x]) }}
                    </th>
                @endfor
                <th></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($index['data']); $i++)
                <tr>
                    @for ($x = 0; $x < count($index['fieldNames']); $x++)
                        @php
                            /* @var $index */
                            /* @var $x */
                            $fieldName = $index['fieldNames'][$x];
                        @endphp
                        <td>{{ $index['data'][$i]->$fieldName }}</td>
                    @endfor
                    <td>
                        <a href="/Materialen/edit/{{ $index['data'][$i]->id }}">Bewerk</a> |
                        <a href="/Materialen/details/{{ $index['data'][$i]->id }}">Details</a> |
                        <a href="/Materialen/delete/{{ $index['data'][$i]->id }}">Verwijder</a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>

    <div>
        <a href="/{{ $index['modelName']['plural'] }}">Terug naar {{ $index['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
