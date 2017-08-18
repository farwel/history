<?php

return [

    'cache' => [
        'enabled' => false,

        'service' => PragmaRX\Countries\Support\Cache::class,

        'duration' => 180,
    ],

    'hydrate' => [
        'before' => true,

        'after' => true,

        'elements' => [
            'flag' => false,
            'currency' => false,
            'states' => false,
            'timezone' => false,
            'borders' => false,
            'topology' => false,
            'geometry' => false,
            'collection' => false,
        ],
    ],

];
