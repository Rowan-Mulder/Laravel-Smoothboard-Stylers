@extends('web.sections.crud.edit')

@php
    /* @var $material */
    $data = [
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
