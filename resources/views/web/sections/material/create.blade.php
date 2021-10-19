@extends('web.sections.crud.create')

@php
    $data = [
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
