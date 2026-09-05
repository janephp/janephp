<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Event\EventDispatcher;
use Jane\Component\JsonSchema\Event\GeneratingEndedEvent;
use Jane\Component\JsonSchema\Event\GeneratingStartedEvent;
use Jane\Component\JsonSchema\Event\GenerationEndedEvent;
use Jane\Component\JsonSchema\Event\GenerationStartedEvent;
use Jane\Component\JsonSchema\Event\GuessingEndedEvent;
use Jane\Component\JsonSchema\Event\GuessingStartedEvent;
use Jane\Component\JsonSchema\Event\SchemaEndedEvent;
use Jane\Component\JsonSchema\Event\SchemaStartedEvent;
use Jane\Component\JsonSchema\Exception\GenerationFailedException;
use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;

abstract class ChainGenerator
{
    /** @var GeneratorInterface[] */
    private array $generators = [];

    protected EventDispatcher $dispatcher;

    public function addGenerator(GeneratorInterface $generator): void
    {
        $this->generators[] = $generator;
    }

    abstract protected function createContext(Registry $registry): Context;

    public function generate(Registry $registry): void
    {
        $startedAt = hrtime(true);
        $this->dispatcher->dispatch(new GenerationStartedEvent($registry));

        $this->dispatcher->dispatch(new GuessingStartedEvent());
        $context = $this->createContext($registry);
        $this->dispatcher->dispatch(new GuessingEndedEvent());

        foreach ($registry->getSchemas() as $schema) {
            $context->setCurrentSchema($schema);
            $this->dispatcher->dispatch(new SchemaStartedEvent($schema));
            $this->dispatcher->dispatch(new GeneratingStartedEvent());

            foreach ($this->generators as $generator) {
                try {
                    $generator->generate($schema, $schema->getRootName(), $context);
                } catch (JaneExceptionInterface $exception) {
                    throw $exception;
                } catch (\Throwable $exception) {
                    throw new GenerationFailedException($context->getCurrentSchema()->getOrigin(), $exception);
                }
            }

            $this->dispatcher->dispatch(new GeneratingEndedEvent());
            $this->dispatcher->dispatch(new SchemaEndedEvent($schema));
        }

        $this->dispatcher->dispatch(new GenerationEndedEvent($registry, (hrtime(true) - $startedAt) / 1e9));
    }
}
