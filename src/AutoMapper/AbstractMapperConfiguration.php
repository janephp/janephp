<?php

namespace Jane\AutoMapper;

abstract class AbstractMapperConfiguration implements MapperConfigurationInterface
{
    protected $hash;

    protected $source;

    protected $target;

    public function __construct(string $source, string $target)
    {
        $this->source = $source;
        $this->target = $target;
        $this->hash = $this->buildHash($source, $target);
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function getMapperClassName(): string
    {
        return sprintf('Mapper_%s', $this->hash);
    }

    public function createMapper(AutoMapperInterface $autoMapper): Mapper
    {
        $className = $this->getMapperClassName();

        /** @var Mapper $mapper */
        $mapper = new $className();
        $mapper->setAutoMapper($autoMapper);

        return $mapper;
    }

    protected function buildHash(string $source, string $target)
    {
        // @TODO Use modification date of source or target class
        return hash('md5', serialize([
            $source,
            $target,
        ]));
    }
}
