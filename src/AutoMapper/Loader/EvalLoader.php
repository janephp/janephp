<?php

namespace Jane\AutoMapper\Loader;

use Jane\AutoMapper\Generator\Generator;
use Jane\AutoMapper\MapperGeneratorMetadataInterface;
use PhpParser\PrettyPrinter\Standard;

/**
 * Use eval to load mappers.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class EvalLoader implements ClassLoaderInterface
{
    private $generator;

    private $printer;

    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
        $this->printer = new Standard();
    }

    /**
     * {@inheritdoc}
     */
    public function loadClass(MapperGeneratorMetadataInterface $mapperGeneratorMetadata): void
    {
        $class = $this->generator->generate($mapperGeneratorMetadata);

        eval($this->printer->prettyPrint([$class]));
    }
}
