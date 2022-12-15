@extends('web.sections.crud.index')

@php
    use App\Models\SurfboardModelType;

    /* @var $surfboardModelTypes */
    $data = $surfboardModelTypes;

    $crudModel = 'crud.' . SurfboardModelType::class;
@endphp
