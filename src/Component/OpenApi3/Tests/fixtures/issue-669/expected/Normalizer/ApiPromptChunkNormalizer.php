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
class ApiPromptChunkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiPromptChunk();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('chunk_usage_pct', $data) && \is_int($data['chunk_usage_pct'])) {
            $data['chunk_usage_pct'] = (float) $data['chunk_usage_pct'];
        }
        if (\array_key_exists('chunk_used', $data) && \is_int($data['chunk_used'])) {
            $data['chunk_used'] = (bool) $data['chunk_used'];
        }
        if (\array_key_exists('chunk_usage_pct', $data)) {
            $object->chunkUsagePct = $data['chunk_usage_pct'];
            unset($data['chunk_usage_pct']);
        }
        if (\array_key_exists('chunk_used', $data)) {
            $object->chunkUsed = $data['chunk_used'];
            unset($data['chunk_used']);
        }
        if (\array_key_exists('index_uuid', $data)) {
            $object->indexUuid = $data['index_uuid'];
            unset($data['index_uuid']);
        }
        if (\array_key_exists('source_name', $data)) {
            $object->sourceName = $data['source_name'];
            unset($data['source_name']);
        }
        if (\array_key_exists('text', $data)) {
            $object->text = $data['text'];
            unset($data['text']);
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
        if (array_key_exists('chunkUsagePct', get_object_vars($data)) && null !== ($data->chunkUsagePct ?? null)) {
            $dataArray['chunk_usage_pct'] = $data->chunkUsagePct ?? null;
        }
        if (array_key_exists('chunkUsed', get_object_vars($data)) && null !== ($data->chunkUsed ?? null)) {
            $dataArray['chunk_used'] = $data->chunkUsed ?? null;
        }
        if (array_key_exists('indexUuid', get_object_vars($data)) && null !== ($data->indexUuid ?? null)) {
            $dataArray['index_uuid'] = $data->indexUuid ?? null;
        }
        if (array_key_exists('sourceName', get_object_vars($data)) && null !== ($data->sourceName ?? null)) {
            $dataArray['source_name'] = $data->sourceName ?? null;
        }
        if (array_key_exists('text', get_object_vars($data)) && null !== ($data->text ?? null)) {
            $dataArray['text'] = $data->text ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class => false];
    }
}