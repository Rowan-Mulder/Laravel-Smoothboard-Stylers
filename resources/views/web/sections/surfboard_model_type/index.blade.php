@extends('web.sections.crud.index')

@php
    /* @var $surfboardModelTypes */
    $data = [
        'modelName' => [
            'system' => 'SurfboardModelType',
            'singular' => 'SurfboardModelType',
            'plural' => 'SurfboardModelTypes'
        ],
        'fieldNames' => [
            'name'
        ],
        'data' => $surfboardModelTypes
    ];
@endphp
