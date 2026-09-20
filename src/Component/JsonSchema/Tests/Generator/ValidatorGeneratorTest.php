<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\ValidatorGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\Any\EnumValidator;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Validator\Constraints\Choice;

class ValidatorGeneratorTest extends TestCase
{
    /**
     * `enum: [alpha, beta, null]` reaches the generator as a constraint
     * argument array holding a null member. It must be emitted as an explicit
     * `null` choice: dropping it would silently reject a value the
     * specification allows.
     */
    public function testEnumContainingNullKeepsTheNullChoice(): void
    {
        $schema = new JsonSchema();
        $schema->type = 'string';
        $schema->enum = ['alpha', 'beta', null];

        $property = new Property($schema, 'label', '#/properties/label');
        (new EnumValidator())->guess($schema, 'label', $property);

        $code = $this->generateConstraintClass($property);

        self::assertStringContainsString("choices: ['alpha', 'beta', null]", $code);
    }

    /**
     * @dataProvider arrayArgumentProvider
     */
    public function testArrayArgumentsAreEmittedVerbatim(array $choices, string $expected): void
    {
        $property = new Property(new JsonSchema(), 'label', '#/properties/label');
        $property->addValidatorGuess(new ValidatorGuess(Choice::class, ['choices' => $choices]));

        self::assertStringContainsString($expected, $this->generateConstraintClass($property));
    }

    public static function arrayArgumentProvider(): iterable
    {
        yield 'only null' => [[null], 'choices: [null]'];
        yield 'null first' => [[null, 'alpha'], "choices: [null, 'alpha']"];
        yield 'null between scalars' => [['alpha', null, 3, 1.5, true], "choices: ['alpha', null, 3, 1.5, true]"];
        yield 'no null' => [['alpha', 'beta'], "choices: ['alpha', 'beta']"];
        yield 'nested array with null' => [[['alpha', null]], "choices: [['alpha', null]]"];
    }

    /**
     * An argument that is itself null keeps its existing meaning: the option is
     * not passed at all, so the constraint keeps its own default.
     */
    public function testNullArgumentIsStillOmitted(): void
    {
        $property = new Property(new JsonSchema(), 'label', '#/properties/label');
        $property->addValidatorGuess(new ValidatorGuess(Choice::class, ['choices' => ['alpha'], 'message' => null]));

        $code = $this->generateConstraintClass($property);

        self::assertStringContainsString("choices: ['alpha']", $code);
        self::assertStringNotContainsString('message:', $code);
    }

    private function generateConstraintClass(Property $property): string
    {
        $object = new JsonSchema();
        $class = new ClassGuess($object, '#/definitions/Payload', 'Payload');
        $class->setProperties([$property]);

        $schema = new Schema('schema.json', 'Jane\Tests\Generated', '/generated', 'Payload');
        $schema->addClass('#/definitions/Payload', $class);

        $registry = new Registry();
        $registry->addSchema($schema);

        (new ValidatorGenerator(new Naming()))->generate($schema, 'Payload', new Context($registry, false, new EventDispatcher()));

        $files = array_values(array_filter(
            $schema->getFiles(),
            static fn (File $file): bool => ValidatorGenerator::FILE_TYPE_VALIDATOR === $file->getType()
        ));

        self::assertCount(1, $files);

        return (new Standard(['shortArraySyntax' => true]))->prettyPrint([$files[0]->getNode()]);
    }
}
