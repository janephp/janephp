<?php

namespace Jane\Component\OpenApi31\Tests\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Guesser\OpenApiSchema\AnyOfReferenceGuesser;
use Jane\Component\OpenApi31\Guesser\OpenApiSchema\OneOfReferenceGuesser;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AbstractXOfReferenceGuesser;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * The 3.1 anyOf / oneOf reference guessers inspect each resolved union branch
 * to decide whether it carries denormalizable content. A branch that declares
 * no `allOf` keyword is denormalized into a `Schema` whose typed `$allOf`
 * property is never assigned, and reading it unguarded fatals with
 * "Typed property … ::$allOf must not be accessed before initialization"
 * instead of generating the client.
 */
class XOfReferenceGuesserTest extends TestCase
{
    private string $document;

    protected function setUp(): void
    {
        $this->document = sys_get_temp_dir() . '/jane-openapi31-xof-allof-' . bin2hex(random_bytes(8)) . '.json';

        file_put_contents($this->document, json_encode([
            'components' => [
                'schemas' => [
                    // No `type`, no `allOf`: both keywords are absent from the
                    // denormalized model.
                    'WithoutAllOf' => [
                        'description' => 'A branch carrying neither a type nor a composition keyword',
                    ],
                    'WithAllOf' => [
                        'allOf' => [
                            ['$ref' => '#/components/schemas/WithoutAllOf'],
                        ],
                    ],
                ],
            ],
        ], \JSON_UNESCAPED_SLASHES));
    }

    protected function tearDown(): void
    {
        if (file_exists($this->document)) {
            unlink($this->document);
        }
    }

    /**
     * @dataProvider guesserProvider
     */
    public function testUnionBranchWithoutAllOfKeywordIsSkippedInsteadOfFataling(string $guesserClass, string $unionKeyword): void
    {
        $guesser = $this->createGuesser($guesserClass);

        $object = new Schema();
        $object->{$unionKeyword} = [new Reference('#/components/schemas/WithoutAllOf', $this->document)];

        self::assertTrue($guesser->supportObject($object));

        $type = $guesser->guessType($object, 'Union', '#/components/schemas/Union', new Registry());

        self::assertInstanceOf(MultipleType::class, $type);
        self::assertSame([], $type->getTypes());
    }

    /**
     * @dataProvider guesserProvider
     */
    public function testUnionBranchWithAnAllOfKeywordStillCounts(string $guesserClass, string $unionKeyword): void
    {
        $guesser = $this->createGuesser($guesserClass);

        $object = new Schema();
        $object->{$unionKeyword} = [
            new Reference('#/components/schemas/WithoutAllOf', $this->document),
            new Reference('#/components/schemas/WithAllOf', $this->document),
        ];

        $type = $guesser->guessType($object, 'Union', '#/components/schemas/Union', new Registry());

        self::assertInstanceOf(MultipleType::class, $type);
        self::assertCount(1, $type->getTypes());
    }

    public static function guesserProvider(): iterable
    {
        yield 'anyOf' => [AnyOfReferenceGuesser::class, 'anyOf'];
        yield 'oneOf' => [OneOfReferenceGuesser::class, 'oneOf'];
    }

    private function createGuesser(string $guesserClass): AbstractXOfReferenceGuesser
    {
        $denormalizer = $this->createMock(DenormalizerInterface::class);
        $denormalizer
            ->method('denormalize')
            ->willReturnCallback(static function ($data): Schema {
                $schema = new Schema();

                // The generated normalizers only assign the keywords the
                // document declares; every other typed property of the model
                // stays uninitialized.
                foreach (['type', 'allOf', 'anyOf', 'oneOf'] as $keyword) {
                    if (\array_key_exists($keyword, $data)) {
                        $schema->{$keyword} = $data[$keyword];
                    }
                }

                return $schema;
            });

        $guesser = new $guesserClass($denormalizer, new Naming(), Schema::class);
        $guesser->setChainGuesser(new ChainGuesser());

        return $guesser;
    }
}
