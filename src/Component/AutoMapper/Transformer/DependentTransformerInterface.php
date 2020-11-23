<?php

namespace Jane\Component\AutoMapper\Transformer;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
interface DependentTransformerInterface
{
    /**
     * Get dependencies for this transformer.
     *
     * @return MapperDependency[]
     */
    public function getDependencies(): array;
}
