<?php

namespace Jane\Component\JsonSchema\Tests\Registry;

use Jane\Component\JsonSchema\Guesser\Guess\ArrayType;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\MapType;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\PatternMultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Schema;
use PHPUnit\Framework\TestCase;

/**
 * The model relations drive the whitelist pruning (`whitelisted-paths`):
 * every class a generated model or normalizer references must be recorded
 * as a relation, or it is pruned and the generated code fatals at runtime.
 */
final class SchemaTest extends TestCase
{
    public function testAnObjectPropertyIsARelation(): void
    {
        $schema = $this->schema();
        $schema->addClassRelations($this->classGuess('Response', ['user' => $this->object('User')]));

        self::assertSame(['User'], $this->relationsOf($schema, 'Response'));
    }

    public function testAUnionPropertyRelatesEveryMember(): void
    {
        $schema = $this->schema();
        $schema->addClassRelations($this->classGuess('Response', [
            'tweet' => new MultipleType(new \stdClass(), [$this->object('CompactTweet'), $this->object('DetailedTweet')]),
        ]));

        self::assertSame(['CompactTweet', 'DetailedTweet'], $this->relationsOf($schema, 'Response'));
    }

    public function testAnArrayOfAUnionRelatesEveryMember(): void
    {
        $schema = $this->schema();
        $schema->addClassRelations($this->classGuess('Response', [
            'tweets' => new ArrayType(new \stdClass(), new MultipleType(new \stdClass(), [$this->object('CompactTweet'), $this->object('DetailedTweet')])),
        ]));

        self::assertSame(['CompactTweet', 'DetailedTweet'], $this->relationsOf($schema, 'Response'));
    }

    public function testNestedArraysAndMapsAreFollowed(): void
    {
        $schema = $this->schema();
        $schema->addClassRelations($this->classGuess('Response', [
            'matrix' => new ArrayType(new \stdClass(), new ArrayType(new \stdClass(), $this->object('Cell'))),
            'byName' => new MapType(new \stdClass(), $this->object('Entry')),
        ]));

        self::assertSame(['Cell', 'Entry'], $this->relationsOf($schema, 'Response'));
    }

    public function testPatternPropertyTypesAndAdditionalPropertyTypesAreFollowed(): void
    {
        $schema = $this->schema();
        $classGuess = $this->classGuess('Response', [
            'patterns' => new PatternMultipleType(new \stdClass(), ['^x-' => $this->object('Extension')]),
        ]);
        $classGuess->setExtensionsType(['*' => $this->object('Additional')]);
        $schema->addClassRelations($classGuess);

        self::assertSame(['Extension', 'Additional'], $this->relationsOf($schema, 'Response'));
    }

    public function testPhpClassesAndScalarsAreNotRelations(): void
    {
        $schema = $this->schema();
        $schema->addClassRelations($this->classGuess('Response', [
            'createdAt' => new ObjectType(new \stdClass(), '\\DateTime', 'Ns'),
            'name' => new Type(new \stdClass(), Type::TYPE_STRING),
            'mixed' => new MultipleType(new \stdClass(), [new Type(new \stdClass(), Type::TYPE_STRING), new ObjectType(new \stdClass(), '\\DateTimeInterface', 'Ns')]),
        ]));

        self::assertSame([], $this->relationsOf($schema, 'Response'));
    }

    private function schema(): Schema
    {
        return new Schema('file:///schema.json', 'Ns', '/tmp', 'Root');
    }

    /**
     * @return list<string>
     */
    private function relationsOf(Schema $schema, string $model): array
    {
        $relations = (new \ReflectionProperty(Schema::class, 'relations'))->getValue($schema);

        return $relations[$model] ?? [];
    }

    /**
     * @param array<string, Type> $properties
     */
    private function classGuess(string $name, array $properties): ClassGuess
    {
        $classGuess = new ClassGuess(new \stdClass(), '#/definitions/' . $name, $name);
        $classGuess->setProperties(array_map(
            static fn (string $propertyName, Type $type): Property => new Property(new \stdClass(), $propertyName, '#/definitions/' . $name . '/properties/' . $propertyName, type: $type),
            array_keys($properties),
            $properties
        ));

        return $classGuess;
    }

    private function object(string $className): ObjectType
    {
        return new ObjectType(new \stdClass(), $className, 'Ns');
    }
}
