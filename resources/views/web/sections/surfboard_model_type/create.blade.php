@extends('web.sections.crud.create')

@php
    $data = [
        'modelName' => [
            'system' => 'SurfboardModelType',
            'singular' => 'SurfboardModelType',
            'plural' => 'SurfboardModelTypes'
        ],
        'fieldNames' => [
            'name'
        ]
    ];
@endphp
