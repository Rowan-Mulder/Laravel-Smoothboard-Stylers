@php
    $create = $create ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', "Create - {$create['modelName']['singular']}")

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $create['modelName']['singular'] }}</h1>
    <h4>Aanmaken</h4>

    <hr />

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-4">
            <form action="/{{ $create['modelName']['plural'] }}" method="POST">
                @csrf
                @method('POST')
                @for ($i = 0; $i < count($create['fieldNames']); $i++)
                    <div class="form-group">
                        <label for="{{ $create['fieldNames'][$i] }}" class="control-label">{{ ucfirst($create['fieldNames'][$i]) }}</label>
                        <input id="{{ $create['fieldNames'][$i] }}" name="{{ $create['fieldNames'][$i] }}" class="form-control" />
                    </div>
                @endfor

                <div class="form-group">
                    <input type="submit" value="Aanmaken" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="/{{ $create['modelName']['plural'] }}">Terug naar {{ $create['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
