<?php



return [
    'TestRouteController' => [
        'prefix' => '/v1/kirito/route',
        'routes' => [
            ['route' => '/say/hello/{name}', 'method' => 'get', 'action' => 'get'],
            ['route' => '/say/hello/{name}', 'method' => 'post', 'action' => 'post']
        ]
    ],
    'TestDbController' => [
        'prefix' => '/v1/kirito/db',
        'routes' => [
            ['route' => '/test/db/{value}', 'method' => 'get', 'action' => 'test']
        ]
    ],
];
