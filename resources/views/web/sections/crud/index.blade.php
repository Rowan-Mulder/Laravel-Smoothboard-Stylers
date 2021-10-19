@php
    $data = $data ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', $data['modelName']['plural'])

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $data['modelName']['singular'] }}</h1>

    <p>
        <a href="/{{ $data['modelName']['plural'] }}/create">Nieuw aanmaken</a>
    </p>

    @if (session('successMsg'))
        <div class="alert alert-success">
            {{ session('successMsg') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                @for ($x = 0; $x < count($data['fieldNames']); $x++)
                    <th>
                        {{ ucfirst($data['fieldNames'][$x]) }}
                    </th>
                @endfor
                <th></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($data['data']); $i++)
                <tr>
                    @for ($x = 0; $x < count($data['fieldNames']); $x++)
                        @php
                            /* @var $data */
                            /* @var $x */
                            $fieldName = $data['fieldNames'][$x];
                        @endphp
                        <td>{{ $data['data'][$i]->$fieldName }}</td>
                    @endfor
                    <td>
                        <a href="/{{ $data['modelName']['plural'] }}/{{ $data['data'][$i]->id }}/edit">Bewerk</a> |
                        <a href="/{{ $data['modelName']['plural'] }}/{{ $data['data'][$i]->id }}">Details</a> |
                        <form action="/{{ $data['modelName']['plural'] }}/{{ $data['data'][$i]->id }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btnLink">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>

    <div>
        <a href="/{{ $data['modelName']['plural'] }}">Terug naar {{ $data['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
