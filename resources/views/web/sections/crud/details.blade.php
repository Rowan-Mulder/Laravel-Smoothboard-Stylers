@php
    $details = $details ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', "{$details['modelName']['singular']} {$details['data']->id}")

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $details['modelName']['singular'] }}</h1>
    <h4>Details</h4>

    <hr />

    <div>
        <dl class="row">
            @for ($i = 0; $i < count($details['fieldNames']); $i++)
                @php
                    /* @var $details */
                    /* @var $i */
                    $fieldName = $details['fieldNames'][$i];
                @endphp
                <dt class="col-sm-2">
                    {{ ucfirst($details['fieldNames'][$i]) }}
                </dt>
                <dd class="col-sm-10">
                    {{ $details['data']->$fieldName }}
                </dd>
            @endfor
        </dl>
    </div>
    <div>
        <a href="/{{ $details['modelName']['plural'] }}/{{ $details['data']->id }}/edit">Bewerk</a> |
        <a href="/{{ $details['modelName']['plural'] }}">Terug naar {{ $details['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
