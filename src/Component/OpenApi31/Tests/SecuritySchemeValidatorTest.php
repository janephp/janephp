<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApi31\SchemaParser\SecuritySchemeValidator;
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
                'openapi' => '3.1.0',
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
                'openapi' => '3.1.0',
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
                'openapi' => '3.1.0',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['description' => 'no type'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth/type'],
        ];

        yield 'unknown type' => [
            [
                'openapi' => '3.1.0',
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
                'openapi' => '3.1.0',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'apiKey'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth'],
        ];

        yield 'apiKey with invalid location' => [
            [
                'openapi' => '3.1.0',
                'components' => [
                    'securitySchemes' => [
                        'auth' => ['type' => 'apiKey', 'name' => 'X-Api-Key', 'in' => 'body'],
                    ],
                ],
            ],
            ['/components/securitySchemes/auth/in'],
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
        // in OpenAPI 3.1 `scheme` is optional for http schemes (RFC 7235 defaults)
        yield 'http without scheme' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'http']]]]];
        yield 'http bearer' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'http', 'scheme' => 'bearer', 'bearerFormat' => 'JWT']]]]];
        yield 'apiKey cookie' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'apiKey', 'name' => 'session', 'in' => 'cookie']]]]];
        yield 'mutualTLS has no required companion fields' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'mutualTLS']]]]];
        yield 'oauth2' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'oauth2', 'flows' => []]]]]];
        yield 'openIdConnect' => [['components' => ['securitySchemes' => ['auth' => ['type' => 'openIdConnect', 'openIdConnectUrl' => 'https://example.com/.well-known/openid-configuration']]]]];
        yield 'reference entry' => [['components' => ['securitySchemes' => ['auth' => ['$ref' => '#/components/securitySchemes/other']]]]];
        yield 'no securitySchemes at all' => [['components' => ['schemas' => []]]];
        yield 'non array securitySchemes is left to denormalization' => [['components' => ['securitySchemes' => 'oops']]];
    }
}
