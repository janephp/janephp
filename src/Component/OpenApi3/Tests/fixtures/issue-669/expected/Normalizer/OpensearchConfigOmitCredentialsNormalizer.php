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
class OpensearchConfigOmitCredentialsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OpensearchConfigOmitCredentials::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OpensearchConfigOmitCredentials::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchConfigOmitCredentials();
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
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('endpoint', $data)) {
            $object->setEndpoint($data['endpoint']);
            unset($data['endpoint']);
        }
        if (\array_key_exists('cluster_uuid', $data)) {
            $object->setClusterUuid($data['cluster_uuid']);
            unset($data['cluster_uuid']);
        }
        if (\array_key_exists('cluster_name', $data)) {
            $object->setClusterName($data['cluster_name']);
            unset($data['cluster_name']);
        }
        if (\array_key_exists('index_name', $data)) {
            $object->setIndexName($data['index_name']);
            unset($data['index_name']);
        }
        if (\array_key_exists('retention_days', $data)) {
            $object->setRetentionDays($data['retention_days']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('endpoint') && null !== $data->getEndpoint()) {
            $dataArray['endpoint'] = $data->getEndpoint();
        }
        if ($data->isInitialized('clusterUuid') && null !== $data->getClusterUuid()) {
            $dataArray['cluster_uuid'] = $data->getClusterUuid();
        }
        if ($data->isInitialized('clusterName') && null !== $data->getClusterName()) {
            $dataArray['cluster_name'] = $data->getClusterName();
        }
        if ($data->isInitialized('indexName') && null !== $data->getIndexName()) {
            $dataArray['index_name'] = $data->getIndexName();
        }
        if ($data->isInitialized('retentionDays') && null !== $data->getRetentionDays()) {
            $dataArray['retention_days'] = $data->getRetentionDays();
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
        return [\Jane\Generated\DigitalOcean\Model\OpensearchConfigOmitCredentials::class => false];
    }
}