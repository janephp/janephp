<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiChunkingOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('semantic_threshold', $data) && \is_int($data['semantic_threshold'])) {
            $data['semantic_threshold'] = (double) $data['semantic_threshold'];
        }
        if (\array_key_exists('child_chunk_size', $data)) {
            $object->setChildChunkSize($data['child_chunk_size']);
            unset($data['child_chunk_size']);
        }
        if (\array_key_exists('max_chunk_size', $data)) {
            $object->setMaxChunkSize($data['max_chunk_size']);
            unset($data['max_chunk_size']);
        }
        if (\array_key_exists('parent_chunk_size', $data)) {
            $object->setParentChunkSize($data['parent_chunk_size']);
            unset($data['parent_chunk_size']);
        }
        if (\array_key_exists('semantic_threshold', $data)) {
            $object->setSemanticThreshold($data['semantic_threshold']);
            unset($data['semantic_threshold']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('childChunkSize') && null !== $data->getChildChunkSize()) {
            $dataArray['child_chunk_size'] = $data->getChildChunkSize();
        }
        if ($data->isInitialized('maxChunkSize') && null !== $data->getMaxChunkSize()) {
            $dataArray['max_chunk_size'] = $data->getMaxChunkSize();
        }
        if ($data->isInitialized('parentChunkSize') && null !== $data->getParentChunkSize()) {
            $dataArray['parent_chunk_size'] = $data->getParentChunkSize();
        }
        if ($data->isInitialized('semanticThreshold') && null !== $data->getSemanticThreshold()) {
            $dataArray['semantic_threshold'] = $data->getSemanticThreshold();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class => false];
    }
}