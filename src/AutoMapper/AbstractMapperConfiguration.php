<?php

namespace Jane\AutoMapper;

abstract class AbstractMapperConfiguration implements MapperConfigurationInterface
{
    protected $hash;

    protected $source;

    protected $target;

    protected $className;

    public function __construct(string $source, string $target)
    {
        $this->source = $source;
        $this->target = $target;
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
        if ($this->className !== null) {
            return $this->className;
        }

        return $this->className = sprintf('Mapper_%s', crc32($this->source . $this->target));
    }

    public function createMapper(): Mapper
    {
        $className = $this->getMapperClassName();

        return new $className();
    }

    public function getModificationHash(): string
    {
        $hash = '';

        if (!\in_array($this->source, ['array', \stdClass::class], true)) {
            $reflection = new \ReflectionClass($this->source);
            $hash .= filemtime($reflection->getFileName());
        }

        if (!\in_array($this->target, ['array', \stdClass::class], true)) {
            $reflection = new \ReflectionClass($this->target);
            $hash .= filemtime($reflection->getFileName());
        }

        return $hash;
    }
}
