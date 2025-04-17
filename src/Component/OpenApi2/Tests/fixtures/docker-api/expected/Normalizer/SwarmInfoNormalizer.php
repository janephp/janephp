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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\SwarmInfo();
        if (\array_key_exists('ControlAvailable', $data) && \is_int($data['ControlAvailable'])) {
            $data['ControlAvailable'] = (bool) $data['ControlAvailable'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmInfoConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NodeID', $data)) {
            $object->setNodeID($data['NodeID']);
        }
        if (\array_key_exists('NodeAddr', $data)) {
            $object->setNodeAddr($data['NodeAddr']);
        }
        if (\array_key_exists('LocalNodeState', $data)) {
            $object->setLocalNodeState($data['LocalNodeState']);
        }
        if (\array_key_exists('ControlAvailable', $data)) {
            $object->setControlAvailable($data['ControlAvailable']);
        }
        if (\array_key_exists('Error', $data)) {
            $object->setError($data['Error']);
        }
        if (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] !== null) {
            $values = [];
            foreach ($data['RemoteManagers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\PeerNode::class, 'json', $context);
            }
            $object->setRemoteManagers($values);
        }
        elseif (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] === null) {
            $object->setRemoteManagers(null);
        }
        if (\array_key_exists('Nodes', $data) && $data['Nodes'] !== null) {
            $object->setNodes($data['Nodes']);
        }
        elseif (\array_key_exists('Nodes', $data) && $data['Nodes'] === null) {
            $object->setNodes(null);
        }
        if (\array_key_exists('Managers', $data) && $data['Managers'] !== null) {
            $object->setManagers($data['Managers']);
        }
        elseif (\array_key_exists('Managers', $data) && $data['Managers'] === null) {
            $object->setManagers(null);
        }
        if (\array_key_exists('Cluster', $data) && $data['Cluster'] !== null) {
            $object->setCluster($this->denormalizer->denormalize($data['Cluster'], \Docker\Api\Model\ClusterInfo::class, 'json', $context));
        }
        elseif (\array_key_exists('Cluster', $data) && $data['Cluster'] === null) {
            $object->setCluster(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nodeID') && null !== $data->getNodeID()) {
            $dataArray['NodeID'] = $data->getNodeID();
        }
        if ($data->isInitialized('nodeAddr') && null !== $data->getNodeAddr()) {
            $dataArray['NodeAddr'] = $data->getNodeAddr();
        }
        if ($data->isInitialized('localNodeState') && null !== $data->getLocalNodeState()) {
            $dataArray['LocalNodeState'] = $data->getLocalNodeState();
        }
        if ($data->isInitialized('controlAvailable') && null !== $data->getControlAvailable()) {
            $dataArray['ControlAvailable'] = $data->getControlAvailable();
        }
        if ($data->isInitialized('error') && null !== $data->getError()) {
            $dataArray['Error'] = $data->getError();
        }
        if ($data->isInitialized('remoteManagers') && null !== $data->getRemoteManagers()) {
            $values = [];
            foreach ($data->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['RemoteManagers'] = $values;
        }
        if ($data->isInitialized('nodes') && null !== $data->getNodes()) {
            $dataArray['Nodes'] = $data->getNodes();
        }
        if ($data->isInitialized('managers') && null !== $data->getManagers()) {
            $dataArray['Managers'] = $data->getManagers();
        }
        if ($data->isInitialized('cluster') && null !== $data->getCluster()) {
            $dataArray['Cluster'] = $this->normalizer->normalize($data->getCluster(), 'json', $context);
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