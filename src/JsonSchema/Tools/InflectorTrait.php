<?php

namespace Jane\JsonSchema\Tools;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;

trait InflectorTrait
{
    private $inflector = null;

    protected function getInflector(): Inflector
    {
        if (null === $this->inflector) {
            $this->inflector = InflectorFactory::create()->build();
        }

        return $this->inflector;
    }
}
