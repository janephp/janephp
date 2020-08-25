<?php

namespace Jane\OpenApiCommon\Generator;

use Jane\JsonSchema\Generator\RuntimeGenerator as BaseRuntimeGenerator;

class RuntimeGenerator extends BaseRuntimeGenerator
{
    protected function directories(): \Generator
    {
        foreach (parent::directories() as $directory) {
            yield $directory;
        }

        yield __DIR__ . '/Runtime/data';
    }
}
