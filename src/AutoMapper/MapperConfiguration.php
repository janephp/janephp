<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\PropertiesMappingExtractorInterface;
use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\Transformer\CallbackTransformer;

class MapperConfiguration extends AbstractMapperConfiguration
{
    private $mappingExtractor;

    private $customMapping = [];

    private $propertiesMapping;

    private $autoMapperRegister;

    public function __construct(AutoMapperRegisterInterface $autoMapperRegister, PropertiesMappingExtractorInterface $mappingExtractor, string $source, string $target, string $classPrefix = 'Mapper_')
    {
        $this->mappingExtractor = $mappingExtractor;
        $this->autoMapperRegister = $autoMapperRegister;

        parent::__construct($source, $target, $classPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertiesMapping(): array
    {
        if ($this->propertiesMapping === null) {
            $this->buildPropertyMapping();
        }

        return $this->propertiesMapping;
    }

    public function getPropertyMapping(string $property): ?PropertyMapping
    {
        if ($this->propertiesMapping === null) {
            $this->buildPropertyMapping();
        }

        return $this->propertiesMapping[$property] ?? null;
    }

    private function buildPropertyMapping()
    {
        $this->propertiesMapping = [];

        foreach ($this->mappingExtractor->getPropertiesMapping($this->source, $this->target, $this) as $propertyMapping) {
            $this->propertiesMapping[$propertyMapping->getProperty()] = $propertyMapping;
        }

        foreach ($this->customMapping as $property => $callback) {
            $this->propertiesMapping[$property] = new PropertyMapping(
                new ReadAccessor(ReadAccessor::TYPE_SOURCE, $property),
                $this->mappingExtractor->getWriteMutator($this->source, $this->target, $property),
                new CallbackTransformer($property),
                $property,
                false
            );
        }
    }

    public function createMapper(): Mapper
    {
        $mapper = parent::createMapper();

        foreach ($this->customMapping as $property => $callback) {
            $mapper->addCallback($property, $callback);
        }

        return $mapper;
    }

    public function forMember(string $property, callable $callback)
    {
        $this->customMapping[$property] = $callback;
    }

    public function hasConstructor(): bool
    {
        if (!$this->isConstructorAllowed()) {
            return false;
        }

        if (\in_array($this->target, ['array', \stdClass::class], true)) {
            return false;
        }

        $reflection = new \ReflectionClass($this->getTarget());
        $constructor = $reflection->getConstructor();

        if ($constructor === null) {
            return false;
        }

        $parameters = $constructor->getParameters();
        $mandatoryParameters = [];

        foreach ($parameters as $parameter) {
            if (!$parameter->isOptional()) {
                $mandatoryParameters[] = $parameter;
            }
        }

        if (\count($mandatoryParameters) === 0) {
            return true;
        }

        foreach ($mandatoryParameters as $mandatoryParameter) {
            $readAccessor = $this->mappingExtractor->getReadAccessor($this->source, $this->target, $mandatoryParameter->getName());

            if ($readAccessor === null) {
                return false;
            }
        }

        return true;
    }

    public function isTargetCloneable(): bool
    {
        $reflection = new \ReflectionClass($this->getTarget());

        return $reflection->isCloneable() && !$reflection->hasMethod('__clone');
    }

    public function canHaveCircularDependency(): bool
    {
        $checked = [];

        return $this->checkCircularMapperConfiguration($this, $checked);
    }

    protected function checkCircularMapperConfiguration(MapperConfigurationInterface $configuration, array &$checked)
    {
        foreach ($configuration->getPropertiesMapping() as $propertyMapping) {
            foreach ($propertyMapping->getTransformer()->getDependencies() as $dependency) {
                if (isset($checked[$dependency->getName()])) {
                    continue;
                }

                $checked[$dependency->getName()] = true;

                if ($dependency->getSource() === $this->getSource() && $dependency->getTarget() === $this->getTarget()) {
                    return true;
                }

                $subConfiguration = $this->autoMapperRegister->getConfiguration($dependency->getSource(), $dependency->getTarget());

                if (null !== $subConfiguration && true === $this->checkCircularMapperConfiguration($subConfiguration, $checked)) {
                    return true;
                }
            }
        }

        return false;
    }
}
