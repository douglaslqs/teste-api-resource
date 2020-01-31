<?php
return [
    'router' => [
        'routes' => [
            'test_api_source.rpc.users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/users',
                    'defaults' => [
                        'controller' => 'test_api_source\\V1\\Rpc\\Users\\Controller',
                        'action' => 'users',
                    ],
                ],
            ],
            'test_api_source.rpc.posts' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/posts',
                    'defaults' => [
                        'controller' => 'test_api_source\\V1\\Rpc\\Posts\\Controller',
                        'action' => 'posts',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'test_api_source.rpc.users',
            1 => 'test_api_source.rpc.posts',
        ],
    ],
    'zf-rest' => [],
    'zf-content-negotiation' => [
        'controllers' => [
            'test_api_source\\V1\\Rpc\\Users\\Controller' => 'Json',
            'test_api_source\\V1\\Rpc\\Posts\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'test_api_source\\V1\\Rpc\\Users\\Controller' => [
                0 => 'application/vnd.test_api_source.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'test_api_source\\V1\\Rpc\\Posts\\Controller' => [
                0 => 'application/vnd.test_api_source.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'test_api_source\\V1\\Rpc\\Users\\Controller' => [
                0 => 'application/vnd.test_api_source.v1+json',
                1 => 'application/json',
            ],
            'test_api_source\\V1\\Rpc\\Posts\\Controller' => [
                0 => 'application/vnd.test_api_source.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [],
    ],
    'controllers' => [
        'factories' => [
            'test_api_source\\V1\\Rpc\\Users\\Controller' => \test_api_source\V1\Rpc\Users\UsersControllerFactory::class,
            'test_api_source\\V1\\Rpc\\Posts\\Controller' => \test_api_source\V1\Rpc\Posts\PostsControllerFactory::class,
        ],
    ],
    'zf-rpc' => [
        'test_api_source\\V1\\Rpc\\Users\\Controller' => [
            'service_name' => 'users',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'test_api_source.rpc.users',
        ],
        'test_api_source\\V1\\Rpc\\Posts\\Controller' => [
            'service_name' => 'posts',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'test_api_source.rpc.posts',
        ],
    ],
];
