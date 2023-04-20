<?php

declare(strict_types=1);

namespace Jane\Bundle\AutoMapperBundle\CacheWarmup;

final class CacheWarmupData
{
    private $source;
    private $target;

    public function __construct(string $source, string $target)
    {
        if (!$this->isValid($source) || !$this->isValid($target)) {
            throw CacheWarmupDataException::sourceOrTargetDoesNoExist($source, $target);
        }

        if ($target === $source) {
            throw CacheWarmupDataException::sourceAndTargetAreEquals($source);
        }

        $this->source = $source;
        $this->target = $target;
    }

    /**
     * @param array{source: string, target: string} $array
     */
    public static function fromArray(array $array): self
    {
        return new self($array['source'], $array['target']);
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    private function isValid(string $arrayOrClass): bool
    {
        return $arrayOrClass === 'array' || class_exists($arrayOrClass);
    }
}
