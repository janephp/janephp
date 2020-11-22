<?php

namespace Jane\Component\AutoMapper;

use Jane\Component\AutoMapper\Transformer\TransformerFactoryInterface;

/**
 * Registry of metadata.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
interface MapperGeneratorMetadataRegistryInterface
{
    /**
     * Register metadata.
     */
    public function register(MapperGeneratorMetadataInterface $configuration): void;

    /**
     * Bind custom TransformerFactory to the AutoMapper.
     */
    public function bindTransformerFactory(TransformerFactoryInterface $transformerFactory): void;

    /**
     * Get metadata for a source and a target.
     */
    public function getMetadata(string $source, string $target): ?MapperGeneratorMetadataInterface;
}
