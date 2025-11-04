<?php

namespace Jane\Component\Server\Generator;

use Jane\Component\Server\Generator\Context\Context;
use Jane\Component\Server\Generator\GeneratorInterface;
use Jane\Component\Server\Registry\Registry;

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

        foreach ($registry->getEndpointsPerServers() as [$server, $endpoint]) {
            $context->setCurrentServer($server);
            $context->setCurrentEndpoint($endpoint);

            foreach ($this->generators as $generator) {
                $generator->generate($endpoint, $endpoint->className, $context);
            }
        }
    }
}
