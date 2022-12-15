@extends('web.sections.crud.create')

@php
    use App\Models\SurfboardModelType;

    $crudModel = 'crud.' . SurfboardModelType::class;
@endphp
