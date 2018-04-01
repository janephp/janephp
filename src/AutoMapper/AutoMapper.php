<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Exception\NoMappingFoundException;

class AutoMapper
{
    private $configurations = [];

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

    public function map($value, string $target, array $options = [])
    {
        $source = null;

        if (is_object($value)) {
            $source = get_class($value);
        }

        if (is_array($value)) {
            $source = 'array';
        }

        if (null === $source) {
            throw new NoMappingFoundException('Cannot map this value, its neither an object or an array');
        }

        if (!array_key_exists($source, $this->configurations) || !array_key_exists($target, $this->configurations[$source])) {
            throw new NoMappingFoundException('No mapping found for source ' . $source . ' and target ' . $target);
        }

        $mappingConfiguration = null;

        /** @var MapperConfigurationInterface $configuration */
        foreach ($this->configurations[$source][$target] as $configuration) {
            if ($configuration->supports($source, $target, $options)) {
                $mappingConfiguration = $configuration;

                break;
            }
        }

        if (null === $mappingConfiguration) {
            throw new NoMappingFoundException('No mapping found for source ' . $source . ' and target ' . $target);
        }

        $mapper = $mappingConfiguration->getMapper();
        $mapper->setAutoMapper($this);

        return $mapper->map($value);
    }
}