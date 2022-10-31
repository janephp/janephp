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
class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\HealthConfig';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\HealthConfig';
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
        $object = new \Docker\Api\Model\HealthConfig();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\HealthConfigConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Test', $data)) {
            $values = array();
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        }
        if (\array_key_exists('Interval', $data)) {
            $object->setInterval($data['Interval']);
        }
        if (\array_key_exists('Timeout', $data)) {
            $object->setTimeout($data['Timeout']);
        }
        if (\array_key_exists('Retries', $data)) {
            $object->setRetries($data['Retries']);
        }
        if (\array_key_exists('StartPeriod', $data)) {
            $object->setStartPeriod($data['StartPeriod']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('test') && null !== $object->getTest()) {
            $values = array();
            foreach ($object->getTest() as $value) {
                $values[] = $value;
            }
            $data['Test'] = $values;
        }
        if ($object->isInitialized('interval') && null !== $object->getInterval()) {
            $data['Interval'] = $object->getInterval();
        }
        if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
            $data['Timeout'] = $object->getTimeout();
        }
        if ($object->isInitialized('retries') && null !== $object->getRetries()) {
            $data['Retries'] = $object->getRetries();
        }
        if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
            $data['StartPeriod'] = $object->getStartPeriod();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\HealthConfigConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}