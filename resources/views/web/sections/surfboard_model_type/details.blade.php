@extends('web.sections.crud.details')

@php
    use App\Models\SurfboardModelType;

    /* @var $surfboardModelType */
    $data = $surfboardModelType;

    $crudModel = 'crud.' . SurfboardModelType::class;
@endphp
