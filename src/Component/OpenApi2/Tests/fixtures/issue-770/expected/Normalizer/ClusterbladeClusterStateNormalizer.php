<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ClusterbladeClusterStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterState::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterState::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterState();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('clusterName', $data)) {
            $object->clusterName = $data['clusterName'];
        }
        if (\array_key_exists('clusterState', $data)) {
            $object->clusterState = $data['clusterState'];
        }
        if (\array_key_exists('clusterRole', $data)) {
            $object->clusterRole = $data['clusterRole'];
        }
        if (\array_key_exists('currentNodeId', $data)) {
            $object->currentNodeId = $data['currentNodeId'];
        }
        if (\array_key_exists('currentNodeName', $data)) {
            $object->currentNodeName = $data['currentNodeName'];
        }
        if (\array_key_exists('nodeStateList', $data)) {
            $values = [];
            foreach ($data['nodeStateList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterStateNodeStateListItem::class, 'json', $context);
            }
            $object->nodeStateList = $values;
        }
        if (\array_key_exists('managementServiceStateList', $data)) {
            $values_1 = [];
            foreach ($data['managementServiceStateList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterStateManagementServiceStateListItem::class, 'json', $context);
            }
            $object->managementServiceStateList = $values_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('clusterName', get_object_vars($data)) && null !== ($data->clusterName ?? null)) {
            $dataArray['clusterName'] = $data->clusterName ?? null;
        }
        if (array_key_exists('clusterState', get_object_vars($data)) && null !== ($data->clusterState ?? null)) {
            $dataArray['clusterState'] = $data->clusterState ?? null;
        }
        if (array_key_exists('clusterRole', get_object_vars($data)) && null !== ($data->clusterRole ?? null)) {
            $dataArray['clusterRole'] = $data->clusterRole ?? null;
        }
        if (array_key_exists('currentNodeId', get_object_vars($data)) && null !== ($data->currentNodeId ?? null)) {
            $dataArray['currentNodeId'] = $data->currentNodeId ?? null;
        }
        if (array_key_exists('currentNodeName', get_object_vars($data)) && null !== ($data->currentNodeName ?? null)) {
            $dataArray['currentNodeName'] = $data->currentNodeName ?? null;
        }
        if (array_key_exists('nodeStateList', get_object_vars($data)) && null !== ($data->nodeStateList ?? null)) {
            $values = [];
            foreach ($data->nodeStateList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['nodeStateList'] = $values;
        }
        if (array_key_exists('managementServiceStateList', get_object_vars($data)) && null !== ($data->managementServiceStateList ?? null)) {
            $values_1 = [];
            foreach ($data->managementServiceStateList ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['managementServiceStateList'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterState::class => false];
    }
}