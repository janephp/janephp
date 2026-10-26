<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Validator\Object_;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Validator\Object_\SubObjectValidator;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuessCollector;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class SubObjectValidatorTest extends TestCase
{
    /**
     * The sub-object constraint must be guessed whatever the directory holding the schema is
     * named: a "properties" in the file path is not a property reference.
     */
    #[DataProvider('originProvider')]
    public function testGuessAddsSubObjectConstraint(string $origin): void
    {
        $bar = new JsonSchema();
        $bar->type = 'object';
        $foo = new JsonSchema();
        $foo->type = 'object';
        $foo->properties = ['bar' => $bar];

        $schema = new Schema($origin, 'Acme', '/tmp', 'Foo');
        $classGuess = new ClassGuess($foo, $schema->getOrigin() . '#/definitions/Foo', 'Foo');
        $schema->addClass($classGuess->getReference(), $classGuess);
        $barReference = $schema->getOrigin() . '#/definitions/Foo/properties/bar';
        $schema->addClass($barReference, new ClassGuess($bar, $barReference, 'FooBar'));
        $registry = new Registry();
        $registry->addSchema($schema);

        $validator = new SubObjectValidator($this->createStub(DenormalizerInterface::class), new Naming(), $registry);
        $validator->guess($foo, 'Foo', $classGuess);

        $guesses = $classGuess->getValidatorGuesses();
        self::assertCount(1, $guesses);
        self::assertSame('FooBarConstraint', $guesses[0]->getConstraintClass());
        self::assertSame('bar', $guesses[0]->getSubProperty());
    }

    public static function originProvider(): iterable
    {
        yield 'plain path' => ['/tmp/schemas/schema.json'];
        yield 'path containing "properties"' => ['/tmp/required-properties/schema.json'];
    }

    public function testGuessSkipsPropertyGuesses(): void
    {
        $foo = new JsonSchema();
        $foo->type = 'object';
        $foo->properties = ['bar' => new JsonSchema()];

        $schema = new Schema('/tmp/schemas/schema.json', 'Acme', '/tmp', 'Foo');
        $classGuess = new ClassGuess($foo, $schema->getOrigin() . '#/properties/baz', 'Baz');
        $registry = new Registry();
        $registry->addSchema($schema);

        (new SubObjectValidator($this->createStub(DenormalizerInterface::class), new Naming(), $registry))->guess($foo, 'Baz', $classGuess);

        self::assertSame([], $classGuess->getValidatorGuesses());
    }

    /**
     * `ItemsValidator` collects the constraints of each array item. A
     * sub-object constraint applies to one property of the item, not to the
     * item, so it must not be collected.
     */
    public function testGuessSkipsArrayItemsCollector(): void
    {
        $bar = new JsonSchema();
        $bar->type = 'object';
        $foo = new JsonSchema();
        $foo->type = 'object';
        $foo->properties = ['bar' => $bar];

        $schema = new Schema('/tmp/schemas/schema.json', 'Acme', '/tmp', 'Foo');
        $classGuess = new ClassGuess($foo, $schema->getOrigin() . '#/definitions/Foo', 'Foo');
        $schema->addClass($classGuess->getReference(), $classGuess);
        $barReference = $schema->getOrigin() . '#/definitions/Foo/properties/bar';
        $schema->addClass($barReference, new ClassGuess($bar, $barReference, 'FooBar'));
        $registry = new Registry();
        $registry->addSchema($schema);

        $collector = new ValidatorGuessCollector();
        (new SubObjectValidator($this->createStub(DenormalizerInterface::class), new Naming(), $registry))->guess($foo, 'Foo', $collector);

        self::assertSame([], $collector->getValidatorGuesses());
    }
}
