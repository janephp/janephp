<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ActionsBillingUsageMinutesUsedBreakdownNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ActionsBillingUsageMinutesUsedBreakdown';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ActionsBillingUsageMinutesUsedBreakdown';
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
        $object = new \Github\Model\ActionsBillingUsageMinutesUsedBreakdown();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ActionsBillingUsageMinutesUsedBreakdownConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('UBUNTU', $data)) {
            $object->setUBUNTU($data['UBUNTU']);
            unset($data['UBUNTU']);
        }
        if (\array_key_exists('MACOS', $data)) {
            $object->setMACOS($data['MACOS']);
            unset($data['MACOS']);
        }
        if (\array_key_exists('WINDOWS', $data)) {
            $object->setWINDOWS($data['WINDOWS']);
            unset($data['WINDOWS']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('uBUNTU') && null !== $object->getUBUNTU()) {
            $data['UBUNTU'] = $object->getUBUNTU();
        }
        if ($object->isInitialized('mACOS') && null !== $object->getMACOS()) {
            $data['MACOS'] = $object->getMACOS();
        }
        if ($object->isInitialized('wINDOWS') && null !== $object->getWINDOWS()) {
            $data['WINDOWS'] = $object->getWINDOWS();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ActionsBillingUsageMinutesUsedBreakdownConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}