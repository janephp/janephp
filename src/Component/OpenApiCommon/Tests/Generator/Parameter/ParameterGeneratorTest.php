<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Parameter;

use Jane\Component\OpenApiCommon\Generator\Parameter\ParameterGenerator;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;

/**
 * The `array{...}` shape documenting an options array ($queryParameters,
 * $headerParameters, $formParameters) has to stay valid PHPDoc: one
 * stray token invalidates the whole docblock, `@throws` and `@return`
 * included, for every PHPDoc parser (PHPStan, Mago, IDEs).
 */
final class ParameterGeneratorTest extends TestCase
{
    public static function provideOptionDocEntries(): iterable
    {
        yield 'optional key with description' => [
            'keep-storage', false, 'int', 'Amount of disk space in bytes to keep for cache',
            ' *    "keep-storage"?: int, //Amount of disk space in bytes to keep for cache',
        ];

        yield 'required key without description' => ['id', true, 'string', null, ' *    "id": string,'];
        yield 'required key with empty description' => ['id', true, 'string', '', ' *    "id": string,'];

        yield 'union type kept verbatim' => [
            'upload', false, 'string|resource', 'The file',
            ' *    "upload"?: string|resource, //The file',
        ];

        // A description line without the `//` marker is parsed as part of the
        // array shape and breaks the docblock, so every continuation line gets
        // its own marker, aligned under the first one. Blank lines inside the
        // description survive as empty comment lines.
        yield 'multi-line description continues on comment lines' => [
            'filters', false, 'string',
            <<<'TEXT'
            A JSON encoded value of the filters (a `map[string][]string`) to
            process on the list of build cache objects.

            Available filters:

            - `until=<duration>`: duration relative to daemon's time
            - `id=<id>`
            TEXT,
            <<<'DOC'
             *    "filters"?: string, //A JSON encoded value of the filters (a `map[string][]string`) to
             *                        //process on the list of build cache objects.
             *                        //
             *                        //Available filters:
             *                        //
             *                        //- `until=<duration>`: duration relative to daemon's time
             *                        //- `id=<id>`
            DOC,
        ];

        yield 'surrounding blank lines and trailing spaces dropped' => [
            'page', false, 'int', "\n\nWhich page to return.   \nStarts at 1.\n\n",
            ' *    "page"?: int, //Which page to return.' . "\n" . ' *' . str_repeat(' ', 18) . '//Starts at 1.',
        ];

        yield 'close-comment sequence cannot end the docblock' => [
            'glob*/', false, 'string', 'Matches */ and /*/ patterns',
            ' *    "glob*\/"?: string, //Matches *\/ and /*\/ patterns',
        ];
    }

    /**
     * @dataProvider provideOptionDocEntries
     */
    public function testFormatOptionDocEntry(string $name, bool $required, string $type, ?string $description, string $expected): void
    {
        $subject = new class((new ParserFactory())->createForHostVersion()) extends ParameterGenerator {
            public function entry(string $name, bool $required, string $type, ?string $description): string
            {
                return $this->formatOptionDocEntry($name, $required, $type, $description);
            }
        };

        self::assertSame($expected, $subject->entry($name, $required, $type, $description));
    }

    public function testEntriesAreWrappedInAnArrayShapeParamTag(): void
    {
        $subject = new class((new ParserFactory())->createForHostVersion()) extends ParameterGenerator {
        };

        $expected = <<<'DOC'
         * @param array{
         *    "page"?: int, //Which page to return
         *    "id": string,
         * } $queryParameters
        DOC;

        self::assertSame(
            $expected,
            $subject->generateOptionsArrayDocParameter('queryParameters', [
                ' *    "page"?: int, //Which page to return',
                ' *    "id": string,',
            ])
        );
    }
}
