@extends('web.sections.crud.details')

@php
    /* @var $surfboardModelType */
    $data = [
        'modelName' => [
            'system' => 'SurfboardModelType',
            'singular' => 'SurfboardModelType',
            'plural' => 'SurfboardModelTypes'
        ],
        'fieldNames' => [
            'name'
        ],
        'data' => $surfboardModelType
    ];
@endphp
