@extends('web.sections.crud.edit')

@php
    use App\Models\Material;

    /* @var $material */
    $data = $material;

    $crudModel = 'crud.' . Material::class;
@endphp
