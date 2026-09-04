<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApi31\SchemaParser\FetchModeValidator;
use PHPUnit\Framework\TestCase;

class FetchModeValidatorTest extends TestCase
{
    /**
     * @dataProvider provideDocumentsWithInvalidFetchModes
     *
     * @param array<mixed>  $document
     * @param array<string> $expectedPointers
     */
    public function testCollectsEveryInvalidFetchModeUsage(array $document, array $expectedPointers): void
    {
        $errors = FetchModeValidator::validate($document);

        $this->assertCount(\count($expectedPointers), $errors, implode("\n", $errors));

        foreach ($expectedPointers as $index => $expectedPointer) {
            $this->assertStringContainsString(
                \sprintf('at "%s', $expectedPointer),
                $errors[$index],
                \sprintf('Error #%d does not point at "%s": %s', $index, $expectedPointer, $errors[$index])
            );
        }
    }

    /**
     * @return \Generator<string, array{0: array<mixed>, 1: array<string>}>
     */
    public function provideDocumentsWithInvalidFetchModes(): \Generator
    {
        yield 'x-fetch-mode on a POST operation' => [
            [
                'openapi' => '3.0.2',
                'paths' => [
                    '/pets' => [
                        'post' => [
                            'operationId' => 'createPet',
                            'x-fetch-mode' => 'lazy',
                            'responses' => ['200' => ['description' => 'Ok']],
                        ],
                    ],
                ],
            ],
            ['/paths/~1pets/post/x-fetch-mode'],
        ];

        yield 'x-fetch-mode on a DELETE operation' => [
            [
                'openapi' => '3.0.2',
                'paths' => [
                    '/pets/{id}' => [
                        'delete' => [
                            'operationId' => 'deletePet',
                            'x-fetch-mode' => 'preload',
                            'responses' => ['204' => ['description' => 'No content']],
                        ],
                    ],
                ],
            ],
            ['/paths/~1pets~1{id}/delete/x-fetch-mode'],
        ];

        yield 'invalid value on a GET operation' => [
            [
                'openapi' => '3.0.2',
                'paths' => [
                    '/pets' => [
                        'get' => [
                            'operationId' => 'listPets',
                            'x-fetch-mode' => 'deferred',
                            'responses' => ['200' => ['description' => 'Ok']],
                        ],
                    ],
                ],
            ],
            ['/paths/~1pets/get/x-fetch-mode'],
        ];

        yield 'non string value on a HEAD operation' => [
            [
                'openapi' => '3.0.2',
                'paths' => [
                    '/pets' => [
                        'head' => [
                            'operationId' => 'headPets',
                            'x-fetch-mode' => true,
                            'responses' => ['200' => ['description' => 'Ok']],
                        ],
                    ],
                ],
            ],
            ['/paths/~1pets/head/x-fetch-mode'],
        ];

        yield 'every violation is collected in one run' => [
            [
                'openapi' => '3.0.2',
                'paths' => [
                    '/pets' => [
                        'get' => [
                            'operationId' => 'listPets',
                            'x-fetch-mode' => 'sometimes',
                            'responses' => ['200' => ['description' => 'Ok']],
                        ],
                        'post' => [
                            'operationId' => 'createPet',
                            'x-fetch-mode' => 'lazy',
                            'responses' => ['200' => ['description' => 'Ok']],
                        ],
                        'put' => [
                            'operationId' => 'updatePet',
                            'x-fetch-mode' => 'eager',
                            'responses' => ['200' => ['description' => 'Ok']],
                        ],
                    ],
                ],
            ],
            ['/paths/~1pets/get/x-fetch-mode', '/paths/~1pets/post/x-fetch-mode', '/paths/~1pets/put/x-fetch-mode'],
        ];
    }

    /**
     * @dataProvider provideDocumentsWithValidFetchModes
     *
     * @param array<mixed> $document
     */
    public function testValidFetchModesProduceNoError(array $document): void
    {
        $this->assertSame([], FetchModeValidator::validate($document));
    }

    /**
     * @return \Generator<string, array{0: array<mixed>}>
     */
    public function provideDocumentsWithValidFetchModes(): \Generator
    {
        yield 'lazy on GET' => [self::document('get', 'lazy')];
        yield 'eager on GET' => [self::document('get', 'eager')];
        yield 'preload on GET' => [self::document('get', 'preload')];
        yield 'lazy on HEAD' => [self::document('head', 'lazy')];
        yield 'preload on HEAD' => [self::document('head', 'preload')];
        yield 'GET without the attribute' => [self::document('get', null)];
        yield 'POST without the attribute' => [self::document('post', null)];
        yield 'paths level parameters only' => [['paths' => ['/pets' => ['parameters' => []]]]];
        yield 'no paths at all' => [['info' => ['title' => 'Test']]];
        yield 'non array paths is left to denormalization' => [['paths' => 'oops']];
    }

    public function testHintExplainsTheGetHeadRule(): void
    {
        $errors = FetchModeValidator::validate(self::document('post', 'lazy'));

        $this->assertCount(1, $errors);
        $this->assertStringContainsString('only supported on GET and HEAD operations', $errors[0]);
        $this->assertStringContainsString('always executed eagerly', $errors[0]);
        $this->assertStringContainsString('remove the attribute', $errors[0]);
    }

    public function testHintExplainsTheAllowedValues(): void
    {
        $errors = FetchModeValidator::validate(self::document('get', 'deferred'));

        $this->assertCount(1, $errors);
        $this->assertStringContainsString('"lazy", "eager" or "preload"', $errors[0]);
    }

    private static function document(string $method, ?string $fetchMode): array
    {
        $operation = [
            'operationId' => 'op',
            'responses' => ['200' => ['description' => 'Ok']],
        ];

        if (null !== $fetchMode) {
            $operation['x-fetch-mode'] = $fetchMode;
        }

        return [
            'openapi' => '3.0.2',
            'paths' => [
                '/pets' => [
                    $method => $operation,
                ],
            ],
        ];
    }
}
