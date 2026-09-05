<?php

namespace Jane\Component\JsonSchema\Tests\Event;

use Jane\Component\JsonSchema\Event\GuessingStartedEvent;
use Jane\Component\JsonSchema\Event\PropertyGuessedEvent;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Schema;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EventDispatcherTest extends TestCase
{
    public function testDispatchIsANoOpWithoutSubscribers(): void
    {
        $dispatcher = new EventDispatcher();
        $event = new GuessingStartedEvent();

        $this->assertSame($event, $dispatcher->dispatch($event));
    }

    public function testListenersRunInRegistrationOrderAcrossSubscribers(): void
    {
        $trace = new Trace();
        $dispatcher = new EventDispatcher();

        $dispatcher->addSubscriber(new MultiListenerSubscriber($trace, 'first'));
        $dispatcher->addSubscriber(new MultiListenerSubscriber($trace, 'second'));
        $dispatcher->dispatch(new GuessingStartedEvent());

        $this->assertSame(['first-1', 'first-2', 'second-1', 'second-2'], $trace->entries);
    }

    public function testMutationEventsStackAcrossSubscribers(): void
    {
        $schema = new Schema('schema.json', 'Jane\Test', '/tmp', 'Test');
        $classGuess = new ClassGuess(new \stdClass(), '#', 'Test');
        $property = new Property(new \stdClass(), 'count', '#/properties/count');
        $property->setType(new Type($property->getObject(), 'initial-type'));

        $trace = new Trace();
        $dispatcher = new EventDispatcher();

        $dispatcher->addSubscriber(new TypeSwappingSubscriber($trace, 'first-type'));
        $dispatcher->addSubscriber(new TypeSwappingSubscriber($trace, 'second-type'));

        $dispatcher->dispatch(new PropertyGuessedEvent($schema, $classGuess, $property));

        // the second subscriber observed the type set by the first one (mutation stacking)
        $this->assertSame(['initial-type', 'first-type'], $trace->entries);
        $this->assertSame('second-type', $property->getType()->getName());
    }
}

final class Trace
{
    /** @var list<string> */
    public array $entries = [];

    public function add(string $entry): void
    {
        $this->entries[] = $entry;
    }
}

final class MultiListenerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly Trace $trace,
        private readonly string $prefix,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            GuessingStartedEvent::class => [
                ['onFirstListener'],
                ['onSecondListener'],
            ],
        ];
    }

    public function onFirstListener(GuessingStartedEvent $event): void
    {
        $this->trace->add($this->prefix . '-1');
    }

    public function onSecondListener(GuessingStartedEvent $event): void
    {
        $this->trace->add($this->prefix . '-2');
    }
}

final class TypeSwappingSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly Trace $trace,
        private readonly string $typeName,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PropertyGuessedEvent::class => ['onPropertyGuessed'],
        ];
    }

    public function onPropertyGuessed(PropertyGuessedEvent $event): void
    {
        $this->trace->add($event->getProperty()->getType()->getName());
        $event->getProperty()->setType(new Type($event->getProperty()->getObject(), $this->typeName));
    }
}
