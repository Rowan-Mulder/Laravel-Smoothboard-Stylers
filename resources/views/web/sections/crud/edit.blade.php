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
    <h4>Bewerken</h4>

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
            <form action="/{{ $edit['modelName']['plural'] }}/{{ $edit['data']->id }}" method="POST">
                @csrf
                @method('PUT')
                @for ($i = 0; $i < count($edit['fieldNames']); $i++)
                    <div class="form-group">
                        <label for="{{ $edit['fieldNames'][$i] }}" class="control-label">{{ ucfirst($edit['fieldNames'][$i]) }}</label>
                        <input id="{{ $edit['fieldNames'][$i] }}" name="{{ $edit['fieldNames'][$i] }}" value="{{ $edit['data']->name }}" class="form-control" />
                    </div>
                @endfor
                <div class="form-group">
                    <input type="submit" value="Opslaan" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="/{{ $edit['modelName']['plural'] }}">Terug naar {{ $edit['modelName']['plural'] }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
