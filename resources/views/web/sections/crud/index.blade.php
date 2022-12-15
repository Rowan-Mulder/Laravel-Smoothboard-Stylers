@php
    /* @var $data */
    /* @var $crudModel */
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', __($crudModel . '.display.plural'))

@section('content')
    <h1 class="display-4 font-weight-bold">{{ __($crudModel . '.display.plural') }}</h1>

    <p>
        <a href="{{ route(__($crudModel . '.route') . '.create') }}">Nieuw aanmaken</a>
    </p>

    @if (session('successMsg'))
        <div class="alert alert-success">
            {{ session('successMsg') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                @for ($x = 0; $x < count(__($crudModel . '.fields')); $x++)
                    <th>
                        {{ formatField(__($crudModel . '.fields')[$x]) }}
                    </th>
                @endfor
                <th></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($data); $i++)
                <tr>
                    @for ($x = 0; $x < count(__($crudModel . '.fields')); $x++)
                        <td>{{ $data[$i][__($crudModel . '.fields')[$x]] }}</td>
                    @endfor
                    <td>
                        <a href="{{ route(__($crudModel . '.route') . '.edit', $data[$i]->id) }}">Bewerk</a> |
                        <a href="{{ route(__($crudModel . '.route') . '.show', $data[$i]->id) }}">Details</a> |
                        <form action="{{ route(__($crudModel . '.route') . '.destroy', $data[$i]->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btnLink">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
