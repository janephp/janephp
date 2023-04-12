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
class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\SwarmSpecCAConfig';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SwarmSpecCAConfig';
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
        $object = new \Docker\Api\Model\SwarmSpecCAConfig();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecCAConfigConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('NodeCertExpiry', $data)) {
            $object->setNodeCertExpiry($data['NodeCertExpiry']);
        }
        if (\array_key_exists('ExternalCAs', $data)) {
            $values = array();
            foreach ($data['ExternalCAs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\SwarmSpecCAConfigExternalCAsItem', 'json', $context);
            }
            $object->setExternalCAs($values);
        }
        if (\array_key_exists('SigningCACert', $data)) {
            $object->setSigningCACert($data['SigningCACert']);
        }
        if (\array_key_exists('SigningCAKey', $data)) {
            $object->setSigningCAKey($data['SigningCAKey']);
        }
        if (\array_key_exists('ForceRotate', $data)) {
            $object->setForceRotate($data['ForceRotate']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('nodeCertExpiry') && null !== $object->getNodeCertExpiry()) {
            $data['NodeCertExpiry'] = $object->getNodeCertExpiry();
        }
        if ($object->isInitialized('externalCAs') && null !== $object->getExternalCAs()) {
            $values = array();
            foreach ($object->getExternalCAs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ExternalCAs'] = $values;
        }
        if ($object->isInitialized('signingCACert') && null !== $object->getSigningCACert()) {
            $data['SigningCACert'] = $object->getSigningCACert();
        }
        if ($object->isInitialized('signingCAKey') && null !== $object->getSigningCAKey()) {
            $data['SigningCAKey'] = $object->getSigningCAKey();
        }
        if ($object->isInitialized('forceRotate') && null !== $object->getForceRotate()) {
            $data['ForceRotate'] = $object->getForceRotate();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecCAConfigConstraint());
        }
        return $data;
    }
}