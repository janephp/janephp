<?php

namespace Jane\Component\JsonSchema\Tests\Guesser;

use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Guesser\Guess\PatternMultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\JsonSchema\PatternPropertiesGuesser;
use Jane\Component\JsonSchema\Guesser\JsonSchema\SimpleTypeGuesser;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use PHPUnit\Framework\TestCase;

class PatternPropertiesGuesserTest extends TestCase
{
    private PatternPropertiesGuesser $guesser;

    protected function setUp(): void
    {
        $this->guesser = new PatternPropertiesGuesser();

        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new SimpleTypeGuesser());
        $this->guesser->setChainGuesser($chainGuesser);
    }

    public function testSupportObjectWithPatternProperties(): void
    {
        self::assertTrue($this->guesser->supportObject($this->createObjectSchema()));
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
        yield 'properties set' => [
            (function () {
                $s = new JsonSchema();
                $s->type = 'object';
                $s->properties = ['foo' => (function () {
                    $s = new JsonSchema();
                    $s->type = 'string';

                    return $s;
                })()];
                $s->patternProperties = ['^a' => (function () {
                    $s = new JsonSchema();
                    $s->type = 'string';

                    return $s;
                })()];

                return $s;
            })(),
        ];
        yield 'not an object type' => [
            (function () {
                $s = new JsonSchema();
                $s->type = 'string';
                $s->patternProperties = ['^a' => (function () {
                    $s = new JsonSchema();
                    $s->type = 'string';

                    return $s;
                })()];

                return $s;
            })(),
        ];
        yield 'null pattern properties' => [
            (function () {
                $s = new JsonSchema();
                $s->type = 'object';

                return $s;
            })(),
        ];
        yield 'empty pattern properties' => [
            (function () {
                $s = new JsonSchema();
                $s->type = 'object';
                $s->patternProperties = [];

                return $s;
            })(),
        ];
    }

    public function testGuessTypeReturnsPatternMultipleTypeCarryingPatterns(): void
    {
        $schema = $this->createObjectSchema();

        $type = $this->guesser->guessType($schema, 'test', '#/', new Registry());

        self::assertInstanceOf(PatternMultipleType::class, $type);
        self::assertInstanceOf(Type::class, $type);

        $types = (new \ReflectionClass($type))->getProperty('types')->getValue($type);

        self::assertSame(['^a'], array_keys($types));
        self::assertContainsOnlyInstancesOf(Type::class, $types);
    }

    private function createObjectSchema(): JsonSchema
    {
        return (function () {
            $s = new JsonSchema();
            $s->type = 'object';
            $s->patternProperties = ['^a' => (function () {
                $s = new JsonSchema();
                $s->type = 'string';

                return $s;
            })()];

            return $s;
        })();
    }
}
