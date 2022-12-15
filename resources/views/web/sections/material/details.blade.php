@extends('web.sections.crud.details')

@php
    use App\Models\Material;

    /* @var $material */
    $data = $material;

    $crudModel = 'crud.' . Material::class;
@endphp
