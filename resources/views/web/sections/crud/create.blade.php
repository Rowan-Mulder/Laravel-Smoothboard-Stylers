@php
    /* @var $crudModel */
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', 'Create - ' . __($crudModel . '.display.singular'))

@section('content')
    <h1 class="display-4 font-weight-bold">{{ __($crudModel . '.display.singular') }}</h1>
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
            <form action="{{ route(__($crudModel . '.route') . '.store') }}" method="POST">
                @csrf
                @method('POST')
                @for ($i = 0; $i < count(__($crudModel . '.fields')); $i++)
                    <div class="form-group">
                        <label for="{{ __($crudModel . '.fields')[$i] }}" class="control-label">{{ formatField(__($crudModel . '.fields')[$i]) }}</label>
                        <input id="{{ __($crudModel . '.fields')[$i] }}" name="{{ __($crudModel . '.fields')[$i] }}" class="form-control" />
                    </div>
                @endfor

                <div class="form-group">
                    <input type="submit" value="Aanmaken" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>

    <div>
        <a href="{{ route(__($crudModel . '.route')) }}">Terug naar {{ __($crudModel . '.display.plural') }}</a>
    </div>
@endsection

@section('footer')
    @include('web.layouts.footer')
@endsection
