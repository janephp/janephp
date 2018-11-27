<?php

namespace Jane\AutoMapper;

abstract class AbstractMapperConfiguration implements MapperConfigurationInterface
{
    protected $hash;

    protected $source;

    protected $target;

    protected $className;

    private $useDateTimeToString;

    private $isConstructorAllowed;

    private $dateTimeFormat;

    public function __construct(string $source, string $target)
    {
        $this->source = $source;
        $this->target = $target;
        $this->isConstructorAllowed = true;
        $this->useDateTimeToString = false;
        $this->dateTimeFormat = \DateTimeInterface::RFC3339;
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

        return $this->className = sprintf('Mapper_%s_%s', str_replace('\\', '_', $this->source), str_replace('\\', '_', $this->target));
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

    public function setConstructorAllowed(bool $isConstructorAllowed)
    {
        $this->isConstructorAllowed = $isConstructorAllowed;
    }

    public function isConstructorAllowed(): bool
    {
        return $this->isConstructorAllowed;
    }

    public function getDateTimeFormat(): string
    {
        return $this->dateTimeFormat;
    }

    public function setDateTimeFormat(string $dateTimeFormat): void
    {
        $this->dateTimeFormat = $dateTimeFormat;
    }
}
