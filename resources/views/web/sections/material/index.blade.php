@extends('web.sections.crud.index')

@php
    use App\Models\Material;

    /* @var $materials */
    $data = $materials;

    $crudModel = 'crud.' . Material::class;
@endphp
