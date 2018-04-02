<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use Jane\AutoMapper\Compiler\Transformer\TransformerInterface;

class PropertyMapping
{
    private $readAccessor;

    private $writeMutator;

    private $transformer;

    public function __construct(ReadAccessor $readAccessor, WriteMutator $writeMutator, TransformerInterface $transformer)
    {
        $this->readAccessor = $readAccessor;
        $this->writeMutator = $writeMutator;
        $this->transformer = $transformer;
    }

    /**
     * @return ReadAccessor
     */
    public function getReadAccessor(): ReadAccessor
    {
        return $this->readAccessor;
    }

    /**
     * @return WriteMutator
     */
    public function getWriteMutator(): WriteMutator
    {
        return $this->writeMutator;
    }

    /**
     * @return TransformerInterface
     */
    public function getTransformer(): TransformerInterface
    {
        return $this->transformer;
    }
}
