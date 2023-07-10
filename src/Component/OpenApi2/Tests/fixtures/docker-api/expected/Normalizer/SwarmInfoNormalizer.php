<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\SwarmInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SwarmInfo';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\SwarmInfo();
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
            $values = array();
            foreach ($data['RemoteManagers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\PeerNode', 'json', $context);
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
            $object->setCluster($this->denormalizer->denormalize($data['Cluster'], 'Docker\\Api\\Model\\ClusterInfo', 'json', $context));
        }
        elseif (\array_key_exists('Cluster', $data) && $data['Cluster'] === null) {
            $object->setCluster(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
            $data['NodeID'] = $object->getNodeID();
        }
        if ($object->isInitialized('nodeAddr') && null !== $object->getNodeAddr()) {
            $data['NodeAddr'] = $object->getNodeAddr();
        }
        if ($object->isInitialized('localNodeState') && null !== $object->getLocalNodeState()) {
            $data['LocalNodeState'] = $object->getLocalNodeState();
        }
        if ($object->isInitialized('controlAvailable') && null !== $object->getControlAvailable()) {
            $data['ControlAvailable'] = $object->getControlAvailable();
        }
        if ($object->isInitialized('error') && null !== $object->getError()) {
            $data['Error'] = $object->getError();
        }
        if ($object->isInitialized('remoteManagers') && null !== $object->getRemoteManagers()) {
            $values = array();
            foreach ($object->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['RemoteManagers'] = $values;
        }
        if ($object->isInitialized('nodes') && null !== $object->getNodes()) {
            $data['Nodes'] = $object->getNodes();
        }
        if ($object->isInitialized('managers') && null !== $object->getManagers()) {
            $data['Managers'] = $object->getManagers();
        }
        if ($object->isInitialized('cluster') && null !== $object->getCluster()) {
            $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmInfoConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Docker\\Api\\Model\\SwarmInfo' => false);
    }
}