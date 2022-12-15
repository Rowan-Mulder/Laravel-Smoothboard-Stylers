@extends('web.sections.crud.edit')

@php
    use App\Models\SurfboardModelType;

    /* @var $surfboardModelType */
    $data = $surfboardModelType;

    $crudModel = 'crud.' . SurfboardModelType::class;
@endphp
