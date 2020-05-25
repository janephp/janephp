<?php

namespace Jane\AutoMapper;

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
     * Get metadata for a source and a target.
     */
    public function getMetadata(string $source, string $target): ?MapperGeneratorMetadataInterface;
}
