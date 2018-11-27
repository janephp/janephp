<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\MapperClassLoaderInterface;
use Jane\AutoMapper\Exception\NoMappingFoundException;
use PhpParser\PrettyPrinter\Standard;

abstract class AbstractAutoMapper implements AutoMapperInterface, AutoMapperRegisterInterface
{
    private $configurations = [];

    private $mapperRegistry = [];

    private $classLoader;

    private $mapperConfigurationFactory;

    public function __construct(MapperClassLoaderInterface $classLoader, MapperConfigurationFactory $mapperConfigurationFactory = null)
    {
        $this->classLoader = $classLoader;
        $this->mapperConfigurationFactory = $mapperConfigurationFactory;
    }

    public function register(MapperConfigurationInterface $configuration): void
    {
        if (!array_key_exists($configuration->getSource(), $this->configurations)) {
            $this->configurations[$configuration->getSource()] = [];
        }

        $this->configurations[$configuration->getSource()][$configuration->getTarget()] = $configuration;
    }

    public function getMapper(string $source, string $target): Mapper
    {
        $mappingConfiguration = $this->getConfiguration($source, $target);

        if ($mappingConfiguration === null) {
            throw new NoMappingFoundException('No mapping found for source ' . $source . ' and target ' . $target);
        }

        $className = $mappingConfiguration->getMapperClassName();

        if (array_key_exists($className, $this->mapperRegistry)) {
            return $this->mapperRegistry[$className];
        }

        if (!class_exists($className)) {
            $this->classLoader->load($mappingConfiguration);
        }

        $this->mapperRegistry[$className] = $mappingConfiguration->createMapper($this);
        $this->mapperRegistry[$className]->injectMappers($this);

        return $this->mapperRegistry[$className];
    }

    public function hasMapper(string $source, string $target): bool
    {
        return $this->getConfiguration($source, $target) !== null;
    }

    public function map($value, string $target, Context $context = null)
    {
        $source = null;

        if (null === $value) {
            return null;
        }

        if (\is_object($value)) {
            $source = \get_class($value);
        }

        if (\is_array($value)) {
            $source = 'array';
        }

        if (null === $source) {
            throw new NoMappingFoundException('Cannot map this value, its neither an object or an array');
        }

        if (null === $context) {
            $context = new Context();
        }

        return $this->getMapper($source, $target)->map($value, $context);
    }

    protected function getConfiguration(string $source, string $target): ?MapperConfigurationInterface
    {
        if (!array_key_exists($source, $this->configurations) || !array_key_exists($target, $this->configurations[$source])) {
            if ($this->mapperConfigurationFactory === null) {
                return null;
            }

            $this->register($this->mapperConfigurationFactory->create($source, $target));
        }

        return $this->configurations[$source][$target];
    }
}
