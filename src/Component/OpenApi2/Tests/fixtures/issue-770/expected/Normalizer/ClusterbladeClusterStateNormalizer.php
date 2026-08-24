<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterState::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterState::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterState();
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
            $object->setClusterName($data['clusterName']);
        }
        if (\array_key_exists('clusterState', $data)) {
            $object->setClusterState($data['clusterState']);
        }
        if (\array_key_exists('clusterRole', $data)) {
            $object->setClusterRole($data['clusterRole']);
        }
        if (\array_key_exists('currentNodeId', $data)) {
            $object->setCurrentNodeId($data['currentNodeId']);
        }
        if (\array_key_exists('currentNodeName', $data)) {
            $object->setCurrentNodeName($data['currentNodeName']);
        }
        if (\array_key_exists('nodeStateList', $data)) {
            $values = [];
            foreach ($data['nodeStateList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterStateNodeStateListItem::class, 'json', $context);
            }
            $object->setNodeStateList($values);
        }
        if (\array_key_exists('managementServiceStateList', $data)) {
            $values_1 = [];
            foreach ($data['managementServiceStateList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterStateManagementServiceStateListItem::class, 'json', $context);
            }
            $object->setManagementServiceStateList($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('clusterName') && null !== $data->getClusterName()) {
            $dataArray['clusterName'] = $data->getClusterName();
        }
        if ($data->isInitialized('clusterState') && null !== $data->getClusterState()) {
            $dataArray['clusterState'] = $data->getClusterState();
        }
        if ($data->isInitialized('clusterRole') && null !== $data->getClusterRole()) {
            $dataArray['clusterRole'] = $data->getClusterRole();
        }
        if ($data->isInitialized('currentNodeId') && null !== $data->getCurrentNodeId()) {
            $dataArray['currentNodeId'] = $data->getCurrentNodeId();
        }
        if ($data->isInitialized('currentNodeName') && null !== $data->getCurrentNodeName()) {
            $dataArray['currentNodeName'] = $data->getCurrentNodeName();
        }
        if ($data->isInitialized('nodeStateList') && null !== $data->getNodeStateList()) {
            $values = [];
            foreach ($data->getNodeStateList() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['nodeStateList'] = $values;
        }
        if ($data->isInitialized('managementServiceStateList') && null !== $data->getManagementServiceStateList()) {
            $values_1 = [];
            foreach ($data->getManagementServiceStateList() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['managementServiceStateList'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterState::class => false];
    }
}