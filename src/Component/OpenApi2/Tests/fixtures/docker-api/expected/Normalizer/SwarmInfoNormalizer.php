<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ControlAvailable', $data) && \is_int($data['ControlAvailable'])) {
            $data['ControlAvailable'] = (bool) $data['ControlAvailable'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmInfoConstraint());
        }
        if (\array_key_exists('NodeID', $data)) {
            $object->nodeID = $data['NodeID'];
        }
        if (\array_key_exists('NodeAddr', $data)) {
            $object->nodeAddr = $data['NodeAddr'];
        }
        if (\array_key_exists('LocalNodeState', $data)) {
            $object->localNodeState = $data['LocalNodeState'];
        }
        if (\array_key_exists('ControlAvailable', $data)) {
            $object->controlAvailable = $data['ControlAvailable'];
        }
        if (\array_key_exists('Error', $data)) {
            $object->error = $data['Error'];
        }
        if (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] !== null) {
            $values = [];
            foreach ($data['RemoteManagers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\PeerNode::class, 'json', $context);
            }
            $object->remoteManagers = $values;
        }
        elseif (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] === null) {
            $object->remoteManagers = null;
        }
        if (\array_key_exists('Nodes', $data) && $data['Nodes'] !== null) {
            $object->nodes = $data['Nodes'];
        }
        elseif (\array_key_exists('Nodes', $data) && $data['Nodes'] === null) {
            $object->nodes = null;
        }
        if (\array_key_exists('Managers', $data) && $data['Managers'] !== null) {
            $object->managers = $data['Managers'];
        }
        elseif (\array_key_exists('Managers', $data) && $data['Managers'] === null) {
            $object->managers = null;
        }
        if (\array_key_exists('Cluster', $data) && $data['Cluster'] !== null) {
            $object->cluster = $this->denormalizer->denormalize($data['Cluster'], \Docker\Api\Model\ClusterInfo::class, 'json', $context);
        }
        elseif (\array_key_exists('Cluster', $data) && $data['Cluster'] === null) {
            $object->cluster = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('nodeID', get_object_vars($data)) && null !== ($data->nodeID ?? null)) {
            $dataArray['NodeID'] = $data->nodeID ?? null;
        }
        if (array_key_exists('nodeAddr', get_object_vars($data)) && null !== ($data->nodeAddr ?? null)) {
            $dataArray['NodeAddr'] = $data->nodeAddr ?? null;
        }
        if (array_key_exists('localNodeState', get_object_vars($data)) && null !== ($data->localNodeState ?? null)) {
            $dataArray['LocalNodeState'] = $data->localNodeState ?? null;
        }
        if (array_key_exists('controlAvailable', get_object_vars($data)) && null !== ($data->controlAvailable ?? null)) {
            $dataArray['ControlAvailable'] = $data->controlAvailable ?? null;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $dataArray['Error'] = $data->error ?? null;
        }
        if (array_key_exists('remoteManagers', get_object_vars($data)) && null !== ($data->remoteManagers ?? null)) {
            $values = [];
            foreach ($data->remoteManagers ?? null as $value) {
                $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['RemoteManagers'] = $values;
        }
        if (array_key_exists('nodes', get_object_vars($data)) && null !== ($data->nodes ?? null)) {
            $dataArray['Nodes'] = $data->nodes ?? null;
        }
        if (array_key_exists('managers', get_object_vars($data)) && null !== ($data->managers ?? null)) {
            $dataArray['Managers'] = $data->managers ?? null;
        }
        if (array_key_exists('cluster', get_object_vars($data)) && null !== ($data->cluster ?? null)) {
            $dataArray['Cluster'] = ($data->cluster ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->cluster ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmInfo::class => false];
    }
}