@php
    /* @var $data */
    /* @var $crudModel */
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', __($crudModel . '.display.singular') . ' ' . $data->id)

@section('content')
    <h1 class="display-4 font-weight-bold">{{ __($crudModel . '.display.singular') }}</h1>
    <h4>Details</h4>

    <hr />

    <div>
        <dl class="row">
            @for ($i = 0; $i < count(__($crudModel . '.fields')); $i++)
                <dt class="col-lg-3">
                    {{ formatField(__($crudModel . '.fields')[$i]) }}
                </dt>
                <dd class="col-lg-9">
                    {{ $data[__($crudModel . '.fields')[$i]] }}
                </dd>
            @endfor
        </dl>
    </div>
    <div>
        <a href="{{ route(__($crudModel . '.route') . '.edit', $data->id) }}">Bewerk</a> |
        <a href="{{ route(__($crudModel . '.route')) }}">Terug naar {{ __($crudModel . '.display.plural') }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
