@php
    /* @var $data */
    /* @var $crudModel */
@endphp

@extends('web.sections.static.layout')

@section('header')
    @include('web.layouts.header')
@endsection

@section('title', 'Edit - ' . __($crudModel . '.display.singular') . ' ' . $data->id)

@section('content')
    <h1 class="display-4 font-weight-bold">{{ __($crudModel . '.display.singular') }}</h1>
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
            <form action="{{ route(__($crudModel . '.route') . '.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                @for ($i = 0; $i < count(__($crudModel . '.fields')); $i++)
                    <div class="form-group">
                        <label for="{{ __($crudModel . '.fields')[$i] }}" class="control-label">{{ formatField(__($crudModel . '.fields')[$i]) }}</label>
                        <input id="{{ __($crudModel . '.fields')[$i] }}" name="{{ __($crudModel . '.fields')[$i] }}" value="{{ $data[__($crudModel . '.fields')[$i]] }}" class="form-control" />
                    </div>
                @endfor
                <div class="form-group">
                    <input type="submit" value="Opslaan" class="btn btn-primary" />
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
