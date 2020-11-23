<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\MapperMetadataInterface;
use Symfony\Component\PropertyInfo\Type;

/**
 * Create transformer.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
interface TransformerFactoryInterface
{
    /**
     * Get transformer to use when mapping from an array of type to another array of type.
     *
     * @param Type[] $sourceTypes
     * @param Type[] $targetTypes
     */
    public function getTransformer(?array $sourceTypes, ?array $targetTypes, MapperMetadataInterface $mapperMetadata): ?TransformerInterface;
}
