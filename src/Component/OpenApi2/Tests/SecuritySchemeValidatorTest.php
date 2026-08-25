<?php

namespace Jane\Component\OpenApi2\Tests;

use Jane\Component\OpenApi2\SchemaParser\SecuritySchemeValidator;
use PHPUnit\Framework\TestCase;

class SecuritySchemeValidatorTest extends TestCase
{
    /**
     * @dataProvider provideDocumentsWithSecurityDefinitions
     *
     * @param array<mixed>  $document
     * @param array<string> $expectedPointers
     */
    public function testCollectsEveryInvalidSecurityDefinitionEntry(array $document, array $expectedPointers): void
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
    public function provideDocumentsWithSecurityDefinitions(): \Generator
    {
        yield 'bare scheme definition instead of named map' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'type' => 'basic',
                ],
            ],
            ['/securityDefinitions/type'],
        ];

        yield 'null entry' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'broken' => null,
                ],
            ],
            ['/securityDefinitions/broken'],
        ];

        yield 'missing type' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['description' => 'no type'],
                ],
            ],
            ['/securityDefinitions/auth/type'],
        ];

        yield 'unknown type' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'digest'],
                ],
            ],
            ['/securityDefinitions/auth/type'],
        ];

        yield 'apiKey without name and in' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'apiKey'],
                ],
            ],
            ['/securityDefinitions/auth'],
        ];

        yield 'apiKey with invalid location (cookie does not exist in OpenAPI 2.0)' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'apiKey', 'name' => 'session', 'in' => 'cookie'],
                ],
            ],
            ['/securityDefinitions/auth/in'],
        ];

        yield 'oauth2 without flow' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'oauth2'],
                ],
            ],
            ['/securityDefinitions/auth/flow'],
        ];

        yield 'oauth2 implicit without authorizationUrl' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'oauth2', 'flow' => 'implicit'],
                ],
            ],
            ['/securityDefinitions/auth'],
        ];

        yield 'oauth2 accessCode without tokenUrl' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'oauth2', 'flow' => 'accessCode', 'authorizationUrl' => 'https://example.com/authorize'],
                ],
            ],
            ['/securityDefinitions/auth'],
        ];

        yield 'oauth2 with unknown flow' => [
            [
                'swagger' => '2.0',
                'securityDefinitions' => [
                    'auth' => ['type' => 'oauth2', 'flow' => 'clientCredentials'],
                ],
            ],
            ['/securityDefinitions/auth/flow'],
        ];
    }

    /**
     * @dataProvider provideDocumentsWithValidSecurityDefinitions
     *
     * @param array<mixed> $document
     */
    public function testValidSecurityDefinitionsProduceNoError(array $document): void
    {
        $this->assertSame([], SecuritySchemeValidator::validate($document));
    }

    /**
     * @return \Generator<string, array{0: array<mixed>}>
     */
    public function provideDocumentsWithValidSecurityDefinitions(): \Generator
    {
        yield 'basic' => [['securityDefinitions' => ['auth' => ['type' => 'basic']]]];
        yield 'apiKey header' => [['securityDefinitions' => ['auth' => ['type' => 'apiKey', 'name' => 'api_key', 'in' => 'header']]]];
        yield 'oauth2 implicit' => [['securityDefinitions' => ['auth' => ['type' => 'oauth2', 'flow' => 'implicit', 'authorizationUrl' => 'https://example.com/authorize']]]];
        yield 'oauth2 password' => [['securityDefinitions' => ['auth' => ['type' => 'oauth2', 'flow' => 'password', 'tokenUrl' => 'https://example.com/token']]]];
        yield 'oauth2 application' => [['securityDefinitions' => ['auth' => ['type' => 'oauth2', 'flow' => 'application', 'tokenUrl' => 'https://example.com/token']]]];
        yield 'oauth2 accessCode' => [['securityDefinitions' => ['auth' => ['type' => 'oauth2', 'flow' => 'accessCode', 'authorizationUrl' => 'https://example.com/authorize', 'tokenUrl' => 'https://example.com/token']]]];
        yield 'reference entry' => [['securityDefinitions' => ['auth' => ['$ref' => '#/securityDefinitions/other']]]];
        yield 'no securityDefinitions at all' => [['paths' => []]];
        yield 'non array securityDefinitions is left to denormalization' => [['securityDefinitions' => 'oops']];
    }
}
