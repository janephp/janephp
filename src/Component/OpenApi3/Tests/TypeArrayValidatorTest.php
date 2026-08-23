<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\SchemaParser\TypeArrayValidator;
use PHPUnit\Framework\TestCase;

class TypeArrayValidatorTest extends TestCase
{
    /**
     * @dataProvider provideDocumentsWithTypeArray
     *
     * @param array<mixed>  $document
     * @param array<string> $expectedPointers
     */
    public function testCollectsEveryTypeArrayOccurrence(array $document, array $expectedPointers): void
    {
        $errors = TypeArrayValidator::validate($document);

        $this->assertCount(\count($expectedPointers), $errors);

        foreach ($expectedPointers as $index => $expectedPointer) {
            $this->assertStringContainsString(
                \sprintf('at "%s"', $expectedPointer),
                $errors[$index],
                \sprintf('Error #%d does not point at "%s": %s', $index, $expectedPointer, $errors[$index])
            );
            $this->assertStringContainsString('jane-php/open-api-3-1', $errors[$index]);
        }
    }

    /**
     * @return \Generator<string, array{0: array<mixed>, 1: array<string>}>
     */
    public function provideDocumentsWithTypeArray(): \Generator
    {
        yield 'root level schema' => [
            [
                'openapi' => '3.0.2',
                'type' => ['string', 'null'],
            ],
            ['/type'],
        ];

        yield 'component property' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Planet' => [
                            'type' => 'object',
                            'properties' => [
                                'description' => [
                                    'type' => ['string', 'null'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            ['/components/schemas/Planet/properties/description/type'],
        ];

        yield 'nested allOf and items use numeric pointers' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Foo' => [
                            'allOf' => [
                                [
                                    'items' => [
                                        'type' => ['integer', 'null'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            ['/components/schemas/Foo/allOf/0/items/type'],
        ];

        yield 'multiple occurrences are all reported' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'A' => ['type' => ['string', 'null']],
                        'B' => ['type' => ['integer', 'null']],
                    ],
                ],
            ],
            [
                '/components/schemas/A/type',
                '/components/schemas/B/type',
            ],
        ];

        yield 'json pointer escaping' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Weird~Name/Sub' => [
                            'properties' => [
                                'a/b~c' => [
                                    'type' => ['string', 'null'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            ['/components/schemas/Weird~0Name~1Sub/properties/a~1b~0c/type'],
        ];

        yield 'property named like a data or extension keyword is still a schema' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Config' => [
                            'type' => 'object',
                            'properties' => [
                                'default' => [
                                    'type' => ['string', 'null'],
                                ],
                                'enum' => [
                                    'type' => ['string', 'null'],
                                ],
                                'x-special' => [
                                    'type' => ['string', 'null'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                '/components/schemas/Config/properties/default/type',
                '/components/schemas/Config/properties/enum/type',
                '/components/schemas/Config/properties/x-special/type',
            ],
        ];
    }

    /**
     * @dataProvider provideDocumentsWithoutTypeArray
     *
     * @param array<mixed> $document
     */
    public function testValidDocumentsReportNoError(array $document): void
    {
        $this->assertSame([], TypeArrayValidator::validate($document));
    }

    /**
     * @return \Generator<string, array{0: array<mixed>}>
     */
    public function provideDocumentsWithoutTypeArray(): \Generator
    {
        yield 'property named type holding a schema object is not a violation' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Feature' => [
                            'type' => 'object',
                            'required' => ['type'],
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                    'description' => 'Feature type.',
                                ],
                                'geometry' => [
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'enum' => ['Point'],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'classic nullable 3.0 syntax' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Planet' => [
                            'type' => 'object',
                            'properties' => [
                                'description' => [
                                    'type' => 'string',
                                    'nullable' => true,
                                ],
                                'tags' => [
                                    'type' => 'array',
                                    'items' => ['type' => 'string'],
                                ],
                                'meta' => [
                                    'type' => 'object',
                                    'additionalProperties' => ['type' => 'string'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        yield 'data keys holding arrays or objects are not traversed' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'schemas' => [
                        'Planet' => [
                            'enum' => [['type' => ['string']]],
                            'examples' => [
                                ['type' => ['string']],
                            ],
                            'default' => ['type' => ['string']],
                            'const' => ['type' => ['string']],
                        ],
                    ],
                ],
            ],
        ];

        yield 'vendor extensions are ignored' => [
            [
                'openapi' => '3.0.2',
                'x-vendor-data' => [
                    'some-tool' => [
                        'type' => ['string', 'null'],
                    ],
                ],
                'paths' => [],
            ],
        ];
    }
}
