<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Datetime\Runtime\Normalizer;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
/**
 * Validator shared by every normalizer of this generated namespace: it is built
 * once per process instead of on every validate() call, which long-running
 * runtimes (RoadRunner, FrankenPHP worker mode, Swoole) keep for their lifetime.
 */
final class ValidatorRegistry
{
    private static ?ValidatorInterface $validator = null;
    public static function get(): ValidatorInterface
    {
        return self::$validator ??= Validation::createValidator();
    }
    /**
     * Replaces the shared validator, e.g. with the one of the Symfony container;
     * null restores the default validator, built on next use.
     */
    public static function set(?ValidatorInterface $validator): void
    {
        self::$validator = $validator;
    }
}