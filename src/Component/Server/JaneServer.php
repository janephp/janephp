<?php

namespace Jane\Component\Server;


use Jane\Component\Server\Generator\ChainGenerator;
use Jane\Component\Server\Generator\Context\Context;
use Jane\Component\Server\Registry\Registry;

class JaneServer extends ChainGenerator
{
    protected function createContext(Registry $registry): Context
    {
        $context = new Context($registry);
        $servers = array_values($registry->getServers());

        // @fixme guessing phase

        return $context;
    }

    public static function build(array $options = []): self
    {
        // @fixme

        return new self();
    }
}


