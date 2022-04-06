<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\Swarm';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Swarm';
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
        $object = new \Docker\Api\Model\Swarm();
        $validator = new \Docker\Api\Validator\SwarmValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], 'Docker\\Api\\Model\\ObjectVersion', 'json', $context));
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->setUpdatedAt($data['UpdatedAt']);
        }
        if (\array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\Api\\Model\\SwarmSpec', 'json', $context));
        }
        if (\array_key_exists('TLSInfo', $data)) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], 'Docker\\Api\\Model\\TLSInfo', 'json', $context));
        }
        if (\array_key_exists('RootRotationInProgress', $data)) {
            $object->setRootRotationInProgress($data['RootRotationInProgress']);
        }
        if (\array_key_exists('DataPathPort', $data)) {
            $object->setDataPathPort($data['DataPathPort']);
        }
        if (\array_key_exists('DefaultAddrPool', $data)) {
            $values = array();
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        }
        if (\array_key_exists('SubnetSize', $data)) {
            $object->setSubnetSize($data['SubnetSize']);
        }
        if (\array_key_exists('JoinTokens', $data)) {
            $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], 'Docker\\Api\\Model\\JoinTokens', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        }
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['UpdatedAt'] = $object->getUpdatedAt();
        }
        if (null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }
        if (null !== $object->getRootRotationInProgress()) {
            $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
        }
        if (null !== $object->getDataPathPort()) {
            $data['DataPathPort'] = $object->getDataPathPort();
        }
        if (null !== $object->getDefaultAddrPool()) {
            $values = array();
            foreach ($object->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $data['DefaultAddrPool'] = $values;
        }
        if (null !== $object->getSubnetSize()) {
            $data['SubnetSize'] = $object->getSubnetSize();
        }
        if (null !== $object->getJoinTokens()) {
            $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
        }
        $validator = new \Docker\Api\Validator\SwarmValidator();
        $validator->validate($data);
        return $data;
    }
}