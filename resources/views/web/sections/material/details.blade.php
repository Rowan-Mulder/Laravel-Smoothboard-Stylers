@extends('web.sections.crud.details')

@php
    /* @var $material */
    $details = [
        'modelName' => [
            'system' => 'Material',
            'singular' => 'Materiaal',
            'plural' => 'Materialen'
        ],
        'fieldNames' => [
            'name'
        ],
        'data' => $material
    ]; // TODO: change $material and $materials to $data and retrieve $details, $edit, $delete etc. by include().
@endphp
