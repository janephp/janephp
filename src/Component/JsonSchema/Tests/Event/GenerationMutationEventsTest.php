<?php

namespace Jane\Component\JsonSchema\Tests\Event;

use Jane\Component\JsonSchema\Event\ClassGeneratedEvent;
use Jane\Component\JsonSchema\Event\PropertyGuessedEvent;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Jane;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Acceptance tests for https://github.com/janephp/janephp/issues/859:
 * listeners receive the JSON schema property + guessed PHP entities and
 * mutate them on the fly.
 */
class GenerationMutationEventsTest extends TestCase
{
    private string $tmpDir;
    private string $schemaFile;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-mutation-events-' . uniqid('', true);
        (new Filesystem())->mkdir($this->tmpDir);
        $this->schemaFile = $this->tmpDir . '/schema.json';
        file_put_contents($this->schemaFile, <<<'JSON'
{
    "type": "object",
    "properties": {
        "count": {"type": "integer", "minimum": 1}
    }
}
JSON);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testPropertyGuessedEventSwapsDocblockTypeToPositiveInt(): void
    {
        $dispatcher = new EventDispatcher();
        $dispatcher->addSubscriber(new PositiveIntSubscriber());

        $modelFile = $this->generate($dispatcher, $this->tmpDir . '/generated');

        self::assertStringContainsString('@var positive-int', (string) file_get_contents($modelFile));

        // normalizers stay consistent: they are byte-identical to a run without any subscriber
        $this->generate(null, $this->tmpDir . '/reference-generated');

        foreach (['Normalizer/TestNormalizer.php', 'Normalizer/JaneObjectNormalizer.php'] as $normalizer) {
            self::assertSame(
                file_get_contents($this->tmpDir . '/reference-generated/' . $normalizer),
                file_get_contents($this->tmpDir . '/generated/' . $normalizer)
            );
        }
    }

    public function testClassGeneratedEventAddsCustomMethodAndPsalmTag(): void
    {
        $dispatcher = new EventDispatcher();
        $dispatcher->addSubscriber(new ModelDecoratorSubscriber());

        $modelFile = $this->generate($dispatcher, $this->tmpDir . '/generated');
        $model = (string) file_get_contents($modelFile);

        self::assertStringContainsString('public function customHello', $model);
        self::assertStringContainsString('@psalm-seal-properties', $model);
    }

    private function generate(?EventDispatcher $dispatcher, string $directory): string
    {
        $registry = new Registry();
        $registry->addSchema(new Schema($this->schemaFile, 'JaneTest\MutationEvents', $directory, 'Test'));
        $registry->addOutputDirectory($directory);

        $jane = Jane::build([
            'strict' => false,
        ], $dispatcher);
        $jane->generate($registry);
        (new Printer(new Standard(['shortArraySyntax' => true])))->output($registry);

        return $directory . '/Model/Test.php';
    }
}

/**
 * The issue's own example: schemas carrying `minimum: 1` get their guessed
 * docblock type replaced by positive-int (docblock-only, native type stays int).
 */
final class PositiveIntSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            PropertyGuessedEvent::class => ['onPropertyGuessed'],
        ];
    }

    public function onPropertyGuessed(PropertyGuessedEvent $event): void
    {
        $object = $event->getProperty()->getObject();

        if (!$object instanceof JsonSchema || null === $object->minimum || 1.0 !== $object->minimum) {
            return;
        }

        $event->getProperty()->setType(new class($object, 'positive-int') extends Type {
            public function getDocTypeHint(string $namespace): string|Name|null
            {
                return 'positive-int';
            }

            public function getTypeHint(string $namespace): Identifier|Name|null
            {
                return new Identifier('int');
            }
        });
    }
}

/** Decorates the generated model class with a custom method and a psalm tag. */
final class ModelDecoratorSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ClassGeneratedEvent::class => ['onClassGenerated'],
        ];
    }

    public function onClassGenerated(ClassGeneratedEvent $event): void
    {
        $classNode = $event->getClassNode();
        $classNode->setDocComment(new Doc("/**\n * @psalm-seal-properties\n */"));
        $classNode->stmts[] = new Stmt\ClassMethod('customHello', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('string'),
            'stmts' => [
                new Stmt\Return_(new Scalar\String_('hello from custom method')),
            ],
        ]);
    }
}
