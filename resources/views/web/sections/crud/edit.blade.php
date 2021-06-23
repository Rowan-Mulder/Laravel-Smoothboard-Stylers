@php
    $edit = $edit ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', "Edit - {$edit['modelName']['singular']} {$edit['data']->id}")

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $edit['modelName']['singular'] }}</h1>
    <h4>Edit</h4>

    <hr />

    <div>
        <dl class="row">
            @for ($i = 0; $i < count($edit['fieldNames']); $i++)
                @php
                    /* @var $edit */
                    /* @var $i */
                    $fieldName = $edit['fieldNames'][$i];
                @endphp
                <dt class="col-sm-2">
                    {{ ucfirst($edit['fieldNames'][$i]) }}
                </dt>
                <dd class="col-sm-10">
                    {{ $edit['data']->$fieldName }}
                </dd>
            @endfor
        </dl>
    </div>
    <div>
        <a href="/{{ $edit['modelName']['plural'] }}">Terug naar {{ $edit['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
