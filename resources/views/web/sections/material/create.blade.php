@extends('web.sections.crud.create')

@php
    $create = [
        'modelName' => [
            'system' => 'Material',
            'singular' => 'Materiaal',
            'plural' => 'Materialen'
        ],
        'fieldNames' => [
            'name'
        ]
    ];
@endphp
