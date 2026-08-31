<?php

namespace Jane\Component\JsonSchema\Tests\Guesser;

use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Guesser\Guess\MapType;
use Jane\Component\JsonSchema\Guesser\JsonSchema\AdditionalPropertiesGuesser;
use Jane\Component\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use PHPUnit\Framework\TestCase;

class AdditionalPropertiesGuesserTest extends TestCase
{
    private AdditionalPropertiesGuesser $guesser;

    protected function setUp(): void
    {
        $this->guesser = new AdditionalPropertiesGuesser();

        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new SimpleTypeGuesser());
        $this->guesser->setChainGuesser($chainGuesser);
    }

    public function testSupportObjectWithAdditionalPropertiesTrue(): void
    {
        self::assertTrue($this->guesser->supportObject($this->createObjectSchema(true)));
    }

    public function testSupportObjectWithAdditionalPropertiesSchema(): void
    {
        $schema = $this->createObjectSchema((new JsonSchema())->setType('string'));

        self::assertTrue($this->guesser->supportObject($schema));
    }

    /**
     * @dataProvider unsupportedProvider
     */
    public function testSupportObjectRejects(JsonSchema $schema): void
    {
        self::assertFalse($this->guesser->supportObject($schema));
    }

    public static function unsupportedProvider(): iterable
    {
        yield 'null additional properties' => [
            (new JsonSchema())->setType('object'),
        ];
        yield 'false additional properties' => [
            (new JsonSchema())->setType('object')->setAdditionalProperties(false),
        ];
        yield 'not an object type' => [
            (new JsonSchema())->setType('string')->setAdditionalProperties(true),
        ];
    }

    public function testUnspecifiedDefaultsToComponentDefaultWhenOptionNull(): void
    {
        // JsonSchema model default: additionalProperties null → closed
        $schema = $this->createObjectSchema(null);

        self::assertFalse($this->guesser->supportObject($schema));
    }

    public function testUnspecifiedTreatedOpenWhenOptionTrue(): void
    {
        $guesser = new AdditionalPropertiesGuesser(true);
        $schema = $this->createObjectSchema(null);

        self::assertTrue($guesser->supportObject($schema));
    }

    public function testUnspecifiedStaysClosedWhenOptionFalse(): void
    {
        $guesser = new AdditionalPropertiesGuesser(false);
        $schema = $this->createObjectSchema(null);

        self::assertFalse($guesser->supportObject($schema));
    }

    public function testExplicitFalseWinsOverOptionTrue(): void
    {
        $guesser = new AdditionalPropertiesGuesser(true);
        $schema = $this->createObjectSchema(false);

        self::assertFalse($guesser->supportObject($schema));
    }

    public function testExplicitTrueWinsOverOptionFalse(): void
    {
        $guesser = new AdditionalPropertiesGuesser(false);
        $schema = $this->createObjectSchema(true);

        self::assertTrue($guesser->supportObject($schema));
    }

    public function testGuessTypeReturnsMixedMapWhenTrue(): void
    {
        $type = $this->guesser->guessType($this->createObjectSchema(true), 'test', '#/', new Registry());

        self::assertInstanceOf(MapType::class, $type);
        self::assertSame('mixed', $type->getItemType()->getName());
    }

    public function testGuessTypeReturnsMixedMapWhenOptionTrueAndUnspecified(): void
    {
        $guesser = new AdditionalPropertiesGuesser(true);
        $type = $guesser->guessType($this->createObjectSchema(null), 'test', '#/', new Registry());

        self::assertInstanceOf(MapType::class, $type);
        self::assertSame('mixed', $type->getItemType()->getName());
    }

    public function testGuessTypeUsesSchemaObjectWhenProvided(): void
    {
        $itemSchema = (new JsonSchema())->setType('string');
        $type = $this->guesser->guessType($this->createObjectSchema($itemSchema), 'test', '#/', new Registry());

        self::assertInstanceOf(MapType::class, $type);
        self::assertSame('string', $type->getItemType()->getName());
    }

    private function createObjectSchema(JsonSchema|bool|null $additionalProperties): JsonSchema
    {
        $schema = (new JsonSchema())->setType('object');

        if (null !== $additionalProperties) {
            $schema->setAdditionalProperties($additionalProperties);
        }

        return $schema;
    }
}
