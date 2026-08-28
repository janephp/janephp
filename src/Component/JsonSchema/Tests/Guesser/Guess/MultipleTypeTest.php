<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Guess;

use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use PHPUnit\Framework\TestCase;

class MultipleTypeTest extends TestCase
{
    public function testDocTypeHintDeduplicatesSameTypedBranches(): void
    {
        $type = new MultipleType(new JsonSchema());
        $type->addType(new Type(new JsonSchema(), Type::TYPE_STRING));
        $type->addType(new Type(new JsonSchema(), Type::TYPE_STRING));
        $type->addType(new Type(new JsonSchema(), Type::TYPE_STRING));

        self::assertSame('string', $type->getDocTypeHint('Jane\Test'));
    }

    public function testDocTypeHintKeepsDistinctBranchesInFirstOccurrenceOrder(): void
    {
        $type = new MultipleType(new JsonSchema());
        $type->addType(new Type(new JsonSchema(), Type::TYPE_STRING));
        $type->addType(new Type(new JsonSchema(), Type::TYPE_BOOLEAN));
        $type->addType(new Type(new JsonSchema(), Type::TYPE_STRING));
        $type->addType(new Type(new JsonSchema(), Type::TYPE_NULL));

        self::assertSame('string|bool|null', $type->getDocTypeHint('Jane\Test'));
    }

    public function testDocTypeHintDeduplicatesObjectBranchesResolvingToSameClass(): void
    {
        $type = new MultipleType(new JsonSchema());
        $type->addType(new ObjectType(new JsonSchema(), 'Foo', 'Jane\Test'));
        $type->addType(new ObjectType(new JsonSchema(), 'Foo', 'Jane\Test'));
        $type->addType(new ObjectType(new JsonSchema(), 'Bar', 'Jane\Test'));

        self::assertSame('\\Jane\\Test\\Model\\Foo|\\Jane\\Test\\Model\\Bar', $type->getDocTypeHint('Jane\Test'));
    }
}
