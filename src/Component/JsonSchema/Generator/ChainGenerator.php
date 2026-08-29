<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Exception\GenerationFailedException;
use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;

abstract class ChainGenerator
{
    /** @var GeneratorInterface[] */
    private array $generators = [];

    public function addGenerator(GeneratorInterface $generator): void
    {
        $this->generators[] = $generator;
    }

    abstract protected function createContext(Registry $registry): Context;

    public function generate(Registry $registry): void
    {
        $context = $this->createContext($registry);

        foreach ($registry->getSchemas() as $schema) {
            $context->setCurrentSchema($schema);

            foreach ($this->generators as $generator) {
                try {
                    $generator->generate($schema, $schema->getRootName(), $context);
                } catch (JaneExceptionInterface $exception) {
                    throw $exception;
                } catch (\Throwable $exception) {
                    throw new GenerationFailedException($context->getCurrentSchema()->getOrigin(), $exception);
                }
            }
        }
    }
}
