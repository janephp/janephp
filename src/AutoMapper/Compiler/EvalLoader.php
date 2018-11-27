<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\MapperConfigurationInterface;
use PhpParser\PrettyPrinter\Standard;

class EvalLoader implements MapperClassLoaderInterface
{
    private $compiler;

    private $printer;

    public function __construct(Compiler $compiler)
    {
        $this->compiler = $compiler;
        $this->printer = new Standard();
    }

    public function load(MapperConfigurationInterface $mapperConfiguration): void
    {
        $class = $this->compiler->compile($mapperConfiguration);

        eval($this->printer->prettyPrint([$class]));
    }
}
