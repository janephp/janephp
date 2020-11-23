<?php

namespace Jane\Component\AutoMapper\Loader;

use Jane\Component\AutoMapper\Generator\Generator;
use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;
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
