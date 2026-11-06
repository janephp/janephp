<?php

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\File;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\RuntimeGenerator;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RuntimeGeneratorTest extends TestCase
{
    /**
     * ValidatorTrait's own template throws ValidationException, a dependency
     * require-sites cannot see: emitting the trait without the exception makes
     * generated clients fatal with "Class not found" instead of throwing it.
     *
     * @see https://github.com/janephp/janephp/issues/1058
     */
    public function testRequiringValidatorTraitAlsoGeneratesItsValidationException(): void
    {
        $schema = new Schema('schema.json', 'Vendor\Api', '/tmp/generated', 'Client');
        $schema->addRequiredRuntimeFile('Vendor\Api\Runtime\Normalizer\ValidatorTrait');

        $generator = new RuntimeGenerator(new Naming(), (new ParserFactory())->createForHostVersion());
        $generator->generate($schema, 'Client', new Context(new Registry(), true, new EventDispatcher()));

        $files = array_map(static fn (File $file): string => basename($file->getFilename()), $schema->getFiles());

        $this->assertContains('ValidatorTrait.php', $files);
        $this->assertContains('ValidationException.php', $files);
        $this->assertContains('ValidatorRegistry.php', $files);
    }

    /**
     * The generated ValidatorTrait reuses one validator for every normalizer
     * of its namespace instead of building a new one on every validate() call.
     *
     * @see https://github.com/janephp/janephp/issues/1142
     */
    public function testGeneratedNormalizersShareOneValidator(): void
    {
        $namespace = 'Vendor\Issue1142';
        $schema = new Schema('schema.json', $namespace, '/tmp/generated', 'Client');
        $schema->addRequiredRuntimeFile($namespace . '\Runtime\Normalizer\ValidatorTrait');

        $generator = new RuntimeGenerator(new Naming(), (new ParserFactory())->createForHostVersion());
        $generator->generate($schema, 'Client', new Context(new Registry(), true, new EventDispatcher()));

        $printer = new Standard();
        foreach ($schema->getFiles() as $file) {
            eval($printer->prettyPrint([$file->getNode()]));
        }

        $runtime = $namespace . '\Runtime\Normalizer';
        eval(\sprintf(<<<'PHP'
            namespace %1$s;

            class FirstNormalizer { use \%2$s\ValidatorTrait; public function check(array $data, \Symfony\Component\Validator\Constraint $constraint): void { $this->validate($data, $constraint); } }
            class SecondNormalizer { use \%2$s\ValidatorTrait; public function check(array $data, \Symfony\Component\Validator\Constraint $constraint): void { $this->validate($data, $constraint); } }
            PHP, $namespace, $runtime));

        $registry = self::generatedClassName($runtime . '\ValidatorRegistry');
        $constraint = new Assert\Collection(['name' => new Assert\Length(max: 3)]);
        $firstClass = self::generatedClassName($namespace . '\FirstNormalizer');
        $secondClass = self::generatedClassName($namespace . '\SecondNormalizer');
        $first = new $firstClass();
        $second = new $secondClass();

        $first->check(['name' => 'abc'], $constraint);
        $shared = $registry::get();
        $second->check(['name' => 'abc'], $constraint);
        $this->assertSame($shared, $registry::get(), 'every normalizer of the namespace must reuse the same validator');

        try {
            $second->check(['name' => 'abcd'], $constraint);
            $this->fail('An invalid payload must still throw the generated ValidationException.');
        } catch (\RuntimeException $exception) {
            $this->assertInstanceOf(self::generatedClassName($runtime . '\ValidationException'), $exception);
            if (!method_exists($exception, 'getViolationList')) {
                $this->fail('The generated ValidationException must expose its violations.');
            }
            $this->assertCount(1, $exception->getViolationList());
        }

        $injected = $this->createMock(ValidatorInterface::class);
        $injected->expects($this->once())->method('validate')->willReturn(new ConstraintViolationList());
        $registry::set($injected);
        try {
            $first->check(['name' => 'abcd'], $constraint);
        } finally {
            $registry::set(null);
        }

        $this->assertNotSame($injected, $registry::get(), 'set(null) must restore the default validator');
    }

    /**
     * Classes evaluated at runtime by the test: keeps static analysis from
     * resolving their names as constant, unknown classes.
     */
    private static function generatedClassName(string $class): string
    {
        return $class;
    }

    public function testUnrequiredRuntimeClassesStayAbsent(): void
    {
        $schema = new Schema('schema.json', 'Vendor\Api', '/tmp/generated', 'Client');
        $schema->addRequiredRuntimeFile('Vendor\Api\Runtime\Normalizer\CheckArray');

        $generator = new RuntimeGenerator(new Naming(), (new ParserFactory())->createForHostVersion());
        $generator->generate($schema, 'Client', new Context(new Registry(), true, new EventDispatcher()));

        $files = array_map(static fn (File $file): string => basename($file->getFilename()), $schema->getFiles());

        $this->assertSame(['CheckArray.php'], $files);
    }
}
