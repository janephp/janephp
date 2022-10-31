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
class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\SwarmJoinPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SwarmJoinPostBody';
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
        $object = new \Docker\Api\Model\SwarmJoinPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmJoinPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ListenAddr', $data)) {
            $object->setListenAddr($data['ListenAddr']);
        }
        if (\array_key_exists('AdvertiseAddr', $data)) {
            $object->setAdvertiseAddr($data['AdvertiseAddr']);
        }
        if (\array_key_exists('DataPathAddr', $data)) {
            $object->setDataPathAddr($data['DataPathAddr']);
        }
        if (\array_key_exists('RemoteAddrs', $data)) {
            $values = array();
            foreach ($data['RemoteAddrs'] as $value) {
                $values[] = $value;
            }
            $object->setRemoteAddrs($values);
        }
        if (\array_key_exists('JoinToken', $data)) {
            $object->setJoinToken($data['JoinToken']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
            $data['ListenAddr'] = $object->getListenAddr();
        }
        if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
            $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
        }
        if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
            $data['DataPathAddr'] = $object->getDataPathAddr();
        }
        if ($object->isInitialized('remoteAddrs') && null !== $object->getRemoteAddrs()) {
            $values = array();
            foreach ($object->getRemoteAddrs() as $value) {
                $values[] = $value;
            }
            $data['RemoteAddrs'] = $values;
        }
        if ($object->isInitialized('joinToken') && null !== $object->getJoinToken()) {
            $data['JoinToken'] = $object->getJoinToken();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmJoinPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}