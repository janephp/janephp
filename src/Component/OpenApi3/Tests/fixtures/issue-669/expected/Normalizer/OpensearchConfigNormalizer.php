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
class OpensearchConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OpensearchConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OpensearchConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('credentials', $data)) {
            $object->credentials = $this->denormalizer->denormalize($data['credentials'], \Jane\Generated\DigitalOcean\Model\OpensearchConfigCredentials::class, 'json', $context);
            unset($data['credentials']);
        }
        if (\array_key_exists('endpoint', $data)) {
            $object->endpoint = $data['endpoint'];
            unset($data['endpoint']);
        }
        if (\array_key_exists('cluster_uuid', $data)) {
            $object->clusterUuid = $data['cluster_uuid'];
            unset($data['cluster_uuid']);
        }
        if (\array_key_exists('cluster_name', $data)) {
            $object->clusterName = $data['cluster_name'];
            unset($data['cluster_name']);
        }
        if (\array_key_exists('index_name', $data)) {
            $object->indexName = $data['index_name'];
            unset($data['index_name']);
        }
        if (\array_key_exists('retention_days', $data)) {
            $object->retentionDays = $data['retention_days'];
            unset($data['retention_days']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('credentials', get_object_vars($data)) && null !== ($data->credentials ?? null)) {
            $dataArray['credentials'] = ($data->credentials ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->credentials ?? null, 'json', $context));
        }
        $dataArray['endpoint'] = $data->endpoint ?? null;
        if (array_key_exists('clusterUuid', get_object_vars($data)) && null !== ($data->clusterUuid ?? null)) {
            $dataArray['cluster_uuid'] = $data->clusterUuid ?? null;
        }
        if (array_key_exists('clusterName', get_object_vars($data)) && null !== ($data->clusterName ?? null)) {
            $dataArray['cluster_name'] = $data->clusterName ?? null;
        }
        if (array_key_exists('indexName', get_object_vars($data)) && null !== ($data->indexName ?? null)) {
            $dataArray['index_name'] = $data->indexName ?? null;
        }
        if (array_key_exists('retentionDays', get_object_vars($data)) && null !== ($data->retentionDays ?? null)) {
            $dataArray['retention_days'] = $data->retentionDays ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\OpensearchConfig::class => false];
    }
}