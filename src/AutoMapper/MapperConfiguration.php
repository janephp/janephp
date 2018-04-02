<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\MappingFactory;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Class_;
use PhpParser\PrettyPrinter\Standard;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MapperConfiguration extends AbstractMapperConfiguration
{
    private $mappingFactory;

    public function __construct(MappingFactory $mappingFactory, string $source, string $target, array $options = [])
    {
        $this->mappingFactory = $mappingFactory;
        $this->source = $source;
        $this->target = $target;

        parent::__construct($source, $target, $options);
    }

    public function getPropertiesMapping(): array
    {
        return $this->mappingFactory->getPropertiesMapping($this->source, $this->target, $this->options);
    }
}
