@extends('web.sections.crud.index')

@php
    /* @var $materials */
    $index = [
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
