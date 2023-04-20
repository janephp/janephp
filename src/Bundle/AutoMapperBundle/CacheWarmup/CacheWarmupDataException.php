<?php

declare(strict_types=1);

namespace Jane\Bundle\AutoMapperBundle\CacheWarmup;

/**
 * @internal
 */
final class CacheWarmupDataException extends \RuntimeException
{
    private function __construct(string $message, string $source, string $target)
    {
        parent::__construct(
            "Invalid automapper warmup configuration: $message. {source: \"$source\", target: \"$target\"} given."
        );
    }

    public static function sourceAndTargetAreEquals(string $value): self
    {
        return new self('source and target must be different', $value, $value);
    }

    public static function sourceOrTargetDoesNoExist(string $source, string $target): self
    {
        return new self('source and target must be "array" or a valid class name', $source, $target);
    }
}
