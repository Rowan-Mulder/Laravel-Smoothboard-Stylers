@extends('web.sections.crud.index')

@php
    /* @var $materials */
    $data = [
        'modelName' => [
            'system' => 'Material',
            'singular' => 'Materiaal',
            'plural' => 'Materialen'
        ],
        'fieldNames' => [
            'name'
        ],
        'data' => $materials
    ];
@endphp
