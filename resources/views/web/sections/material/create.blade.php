@extends('web.sections.crud.create')

@php
    use App\Models\Material;

    $crudModel = 'crud.' . Material::class;
@endphp
