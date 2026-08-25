<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApi3\SchemaParser\SecuritySchemeValidator;
use PHPUnit\Framework\TestCase;

class SecuritySchemeValidatorTest extends TestCase
{
    /**
     * @dataProvider provideDocumentsWithSecuritySchemes
     *
     * @param array<mixed>  $document
     * @param array<string> $expectedPointers
     */
    public function testCollectsEveryInvalidSecuritySchemeEntry(array $document, array $expectedPointers): void
    {
        $errors = SecuritySchemeValidator::validate($document);

        $this->assertCount(\count($expectedPointers), $errors, implode("\n", $errors));

        foreach ($expectedPointers as $index => $expectedPointer) {
            $this->assertStringContainsString(
                \sprintf('at "%s"', $expectedPointer),
                $errors[$index],
                \sprintf('Error #%d does not point at "%s": %s', $index, $expectedPointer, $errors[$index])
            );
        }
    }

    /**
     * @return \Generator<string, array{0: array<mixed>, 1: array<string>}>
     */
    public function provideDocumentsWithSecuritySchemes(): \Generator
    {
        yield 'issue 565: bare scheme definition instead of named map' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'type' => 'http',
                        'scheme' => 'basic',
                    ],
                ],
            ],
            ['/components/securitySchemes/type', '/components/securitySchemes/scheme'],
        ];

        yield 'null entry' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'broken' => null,
                    ],
                ],
            ],
            ['/components/securitySchemes/broken'],
        ];

        yield 'missing type' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['scheme' => 'basic'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth/type'],
        ];

        yield 'unknown type' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'digest'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth/type'],
        ];

        yield 'apiKey without name and in' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'apiKey'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth', '/components/securitySchemes/auth/in'],
        ];

        yield 'http without scheme' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'http'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth'],
        ];

        yield 'oauth2 without flows' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'oauth2'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth'],
        ];

        yield 'openIdConnect without openIdConnectUrl' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'openIdConnect'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth'],
        ];

        yield 'pointer tokens are escaped' => [
            [
                'openapi' => '3.0.2',
                'components' => [
                    'securitySchemes' => [
                        'a/b~c' => 'nope',
                    ],
                ],
            ],
            ['/components/securitySchemes/a~1b~0c'],
        ];
    }

    /**
     * @dataProvider provideDocumentsWithValidSecuritySchemes
     *
     * @param array<mixed> $document
     */
    public function testValidSecuritySchemesProduceNoError(array $document): void
    {
        $this->assertSame([], SecuritySchemeValidator::validate($document));
    }

    /**
     * @return \Generator<string, array{0: array<mixed>}>
     */
    public function provideDocumentsWithValidSecuritySchemes(): \Generator
    {
        yield 'http basic' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'http', 'scheme' => 'basic']]]]];
        yield 'http bearer with format' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'http', 'scheme' => 'bearer', 'bearerFormat' => 'JWT']]]]];
        yield 'apiKey header' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'apiKey', 'name' => 'X-Api-Key', 'in' => 'header']]]]];
        yield 'oauth2' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'oauth2', 'flows' => []]]]]];
        yield 'openIdConnect' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'openIdConnect', 'openIdConnectUrl' => 'https://example.com/.well-known/openid-configuration']]]]];
        yield 'reference entry' => [['components' => ['securitySchemes' => ['auth' => ['$ref' => '#/components/securitySchemes/other']]]]];
        yield 'unsupported types are not rejected (valid OpenAPI)' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'oauth2', 'flows' => ['implicit' => ['scopes' => []]]]]]]];
        yield 'no securitySchemes at all' => [['components' => ['schemas' => []]]];
        yield 'non array securitySchemes is left to denormalization' => [['components' => ['securitySchemes' => 'oops']]];
    }

    public function testHintExplainsTheMapStructure(): void
    {
        $errors = SecuritySchemeValidator::validate([
            'openapi' => '3.0.2',
            'components' => [
                'securitySchemes' => [
                    'type' => 'http',
                ],
            ],
        ]);

        $this->assertCount(1, $errors);
        $this->assertStringContainsString('map of name => scheme definition', $errors[0]);
        $this->assertStringContainsString('{"myAuth": {"type": "http", "scheme": "basic"}}', $errors[0]);
    }
}
