<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Exception\NoMappingFoundException;
use PhpParser\PrettyPrinter\Standard;

abstract class AbstractAutoMapper implements AutoMapperInterface
{
    private $configurations = [];

    private $mapperRegistry = [];

    private $compiler;

    public function __construct(Compiler $compiler = null)
    {
        $this->compiler = $compiler ?? new Compiler();
    }

    public function register(MapperConfigurationInterface $configuration)
    {
        if (!array_key_exists($configuration->getSource(), $this->configurations)) {
            $this->configurations[$configuration->getSource()] = [];
        }

        if (!array_key_exists($configuration->getTarget(), $this->configurations[$configuration->getSource()])) {
            $this->configurations[$configuration->getSource()][$configuration->getTarget()] = [];
        }

        $this->configurations[$configuration->getSource()][$configuration->getTarget()][] = $configuration;
    }

    public function getMapper(string $source, string $target, array $options = []): Mapper
    {
        $mappingConfiguration = $this->getConfiguration($source, $target, $options);

        if ($mappingConfiguration === null) {
            throw new NoMappingFoundException('No mapping found for source ' . $source . ' and target ' . $target);
        }

        $className = $mappingConfiguration->getMapperClassName();

        if (array_key_exists($className, $this->mapperRegistry)) {
            return $this->mapperRegistry[$className];
        }

        if (!class_exists($className)) {
            $class = $this->compiler->compile($mappingConfiguration);
            $printer = new Standard();

            eval($printer->prettyPrint([$class]));
        }

        return $this->mapperRegistry[$className] = $mappingConfiguration->createMapper($this);
    }

    public function map($value, string $target, array $options = [])
    {
        $source = null;

        if (null === $value) {
            return null;
        }

        if (is_object($value)) {
            $source = get_class($value);
        }

        if (is_array($value)) {
            $source = 'array';
        }

        if (null === $source) {
            throw new NoMappingFoundException('Cannot map this value, its neither an object or an array');
        }

        return $this->getMapper($source, $target, $options)->map($value, $options);
    }

    protected function getConfiguration(string $source, string $target, array $options = []): ?MapperConfigurationInterface
    {
        if (!array_key_exists($source, $this->configurations) || !array_key_exists($target, $this->configurations[$source])) {
            return null;
        }

        $mappingConfiguration = null;

        /** @var MapperConfigurationInterface $configuration */
        foreach ($this->configurations[$source][$target] as $configuration) {
            if ($configuration->supports($source, $target, $options)) {
                $mappingConfiguration = $configuration;

                break;
            }
        }

        return $mappingConfiguration;
    }
}
