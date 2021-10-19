@php
    $data = $data ?? [];
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', "Create - {$data['modelName']['singular']}")

@section('content')
    <h1 class="display-4 font-weight-bold">{{ $data['modelName']['singular'] }}</h1>
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
            <form action="/{{ $data['modelName']['plural'] }}" method="POST">
                @csrf
                @method('POST')
                @for ($i = 0; $i < count($data['fieldNames']); $i++)
                    <div class="form-group">
                        <label for="{{ $data['fieldNames'][$i] }}" class="control-label">{{ ucfirst($data['fieldNames'][$i]) }}</label>
                        <input id="{{ $data['fieldNames'][$i] }}" name="{{ $data['fieldNames'][$i] }}" class="form-control" />
                    </div>
                @endfor

                <div class="form-group">
                    <input type="submit" value="Aanmaken" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="/{{ $data['modelName']['plural'] }}">Terug naar {{ $data['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
