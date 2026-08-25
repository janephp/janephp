<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\SchemaParser\ParameterNameResolver;
use PHPUnit\Framework\TestCase;

class ParameterNameResolverTest extends TestCase
{
    /**
     * @dataProvider provideDocumentsWithMapParameters
     *
     * @param array<mixed> $document
     * @param array<mixed> $expectedDocument
     */
    public function testResolvesParameterNamesFromKeys(array $document, array $expectedDocument): void
    {
        $this->assertEquals($expectedDocument, ParameterNameResolver::resolve($document));
    }

    /**
     * @return \Generator<array{0: array<mixed>, 1: array<mixed>}>
     */
    public static function provideDocumentsWithMapParameters(): \Generator
    {
        yield 'operation level parameters' => [
            [
                'openapi' => '3.0.0',
                'paths' => [
                    '/orders/{order_id}' => [
                        'get' => [
                            'parameters' => [
                                'site' => [
                                    'in' => 'query',
                                    'schema' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'openapi' => '3.0.0',
                'paths' => [
                    '/orders/{order_id}' => [
                        'get' => [
                            'parameters' => [
                                'site' => [
                                    'name' => 'site',
                                    'in' => 'query',
                                    'schema' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'path item level parameters' => [
            [
                'paths' => [
                    '/orders/{order_id}' => [
                        'parameters' => [
                            'order_id' => [
                                'in' => 'path',
                                'schema' => ['type' => 'integer'],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'paths' => [
                    '/orders/{order_id}' => [
                        'parameters' => [
                            'order_id' => [
                                'name' => 'order_id',
                                'in' => 'path',
                                'schema' => ['type' => 'integer'],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'explicit name wins over key' => [
            [
                'paths' => [
                    '/orders' => [
                        'get' => [
                            'parameters' => [
                                'key_name' => [
                                    'name' => 'explicit_name',
                                    'in' => 'query',
                                    'schema' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'paths' => [
                    '/orders' => [
                        'get' => [
                            'parameters' => [
                                'key_name' => [
                                    'name' => 'explicit_name',
                                    'in' => 'query',
                                    'schema' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'references are left untouched' => [
            [
                'paths' => [
                    '/orders' => [
                        'get' => [
                            'parameters' => [
                                'siteRef' => [
                                    '$ref' => '#/components/parameters/SiteParam',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'paths' => [
                    '/orders' => [
                        'get' => [
                            'parameters' => [
                                'siteRef' => [
                                    '$ref' => '#/components/parameters/SiteParam',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'array shaped parameters keep working' => [
            [
                'paths' => [
                    '/orders' => [
                        'get' => [
                            'parameters' => [
                                [
                                    'name' => 'site',
                                    'in' => 'query',
                                    'schema' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'paths' => [
                    '/orders' => [
                        'get' => [
                            'parameters' => [
                                [
                                    'name' => 'site',
                                    'in' => 'query',
                                    'schema' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'every http method is covered' => [
            [
                'paths' => [
                    '/orders' => [
                        'put' => ['parameters' => ['putParam' => ['in' => 'query']]],
                        'post' => ['parameters' => ['postParam' => ['in' => 'query']]],
                        'delete' => ['parameters' => ['deleteParam' => ['in' => 'query']]],
                        'options' => ['parameters' => ['optionsParam' => ['in' => 'query']]],
                        'head' => ['parameters' => ['headParam' => ['in' => 'query']]],
                        'patch' => ['parameters' => ['patchParam' => ['in' => 'query']]],
                        'trace' => ['parameters' => ['traceParam' => ['in' => 'query']]],
                    ],
                ],
            ],
            [
                'paths' => [
                    '/orders' => [
                        'put' => ['parameters' => ['putParam' => ['name' => 'putParam', 'in' => 'query']]],
                        'post' => ['parameters' => ['postParam' => ['name' => 'postParam', 'in' => 'query']]],
                        'delete' => ['parameters' => ['deleteParam' => ['name' => 'deleteParam', 'in' => 'query']]],
                        'options' => ['parameters' => ['optionsParam' => ['name' => 'optionsParam', 'in' => 'query']]],
                        'head' => ['parameters' => ['headParam' => ['name' => 'headParam', 'in' => 'query']]],
                        'patch' => ['parameters' => ['patchParam' => ['name' => 'patchParam', 'in' => 'query']]],
                        'trace' => ['parameters' => ['traceParam' => ['name' => 'traceParam', 'in' => 'query']]],
                    ],
                ],
            ],
        ];
    }

    public function testLeavesDocumentsWithoutPathsUntouched(): void
    {
        $document = [
            'openapi' => '3.0.0',
            'info' => ['title' => 'No paths', 'version' => '1.0.0'],
        ];

        $this->assertEquals($document, ParameterNameResolver::resolve($document));
    }
}
