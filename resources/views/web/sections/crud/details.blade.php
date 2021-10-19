@php
    $data = $data ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', "{$data['modelName']['singular']} {$data['data']->id}")

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $data['modelName']['singular'] }}</h1>
    <h4>Details</h4>

    <hr />

    <div>
        <dl class="row">
            @for ($i = 0; $i < count($data['fieldNames']); $i++)
                @php
                    /* @var $data */
                    /* @var $i */
                    $fieldName = $data['fieldNames'][$i];
                @endphp
                <dt class="col-sm-2">
                    {{ ucfirst($data['fieldNames'][$i]) }}
                </dt>
                <dd class="col-sm-10">
                    {{ $data['data']->$fieldName }}
                </dd>
            @endfor
        </dl>
    </div>
    <div>
        <a href="/{{ $data['modelName']['plural'] }}/{{ $data['data']->id }}/edit">Bewerk</a> |
        <a href="/{{ $data['modelName']['plural'] }}">Terug naar {{ $data['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
