<?php

use App\Models\Material;
use App\Models\Surfboard;
use App\Models\SurfboardModelType;

return [
    Material::class => [
        'system' => [
            'singular' => 'Material',
            'plural' => 'Materials',
        ],
        'display' => [
            'singular' => 'Material',
            'plural' => 'Materials',
        ],
        'route' => 'materials',
        'fields' => [
            'name',
        ],
    ],
    SurfboardModelType::class => [
        'system' => [
            'singular' => 'SurfboardModelType',
            'plural' => 'SurfboardModelTypes',
        ],
        'display' => [
            'singular' => 'Surfboard model type',
            'plural' => 'Surfboard model types',
        ],
        'route' => 'surfboard-model-types',
        'fields' => [
            'name',
        ],
    ],
    Surfboard::class => [
        'system' => [
            'singular' => 'Surfboard',
            'plural' => 'Surfboards',
        ],
        'display' => [
            'singular' => 'Surfboard',
            'plural' => 'Surfboards',
        ],
        'route' => 'surfboards',
        'fields' => [
            'surfboard_model_type_id',
            'material_id',
            'name',
            'price',
            'image',
        ],
    ],
];
