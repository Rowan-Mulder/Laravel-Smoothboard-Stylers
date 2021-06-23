@extends('web.sections.crud.edit')

@php
    /* @var $material */
    $edit = [
        'modelName' => [
            'system' => 'Material',
            'singular' => 'Materiaal',
            'plural' => 'Materialen'
        ],
        'fieldNames' => [
            'name'
        ],
        'data' => $material
    ];
@endphp
