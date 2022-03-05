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
class TaskSpecContainerSpecDNSConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\Api\\Model\\TaskSpecContainerSpecDNSConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\TaskSpecContainerSpecDNSConfig';
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
        $object = new \Docker\Api\Model\TaskSpecContainerSpecDNSConfig();
        $validator = new \Docker\Api\Validator\TaskSpecContainerSpecDNSConfigValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Nameservers', $data)) {
            $values = array();
            foreach ($data['Nameservers'] as $value) {
                $values[] = $value;
            }
            $object->setNameservers($values);
        }
        if (\array_key_exists('Search', $data)) {
            $values_1 = array();
            foreach ($data['Search'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSearch($values_1);
        }
        if (\array_key_exists('Options', $data)) {
            $values_2 = array();
            foreach ($data['Options'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setOptions($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNameservers()) {
            $values = array();
            foreach ($object->getNameservers() as $value) {
                $values[] = $value;
            }
            $data['Nameservers'] = $values;
        }
        if (null !== $object->getSearch()) {
            $values_1 = array();
            foreach ($object->getSearch() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Search'] = $values_1;
        }
        if (null !== $object->getOptions()) {
            $values_2 = array();
            foreach ($object->getOptions() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Options'] = $values_2;
        }
        $validator = new \Docker\Api\Validator\TaskSpecContainerSpecDNSConfigValidator();
        $validator->validate($data);
        return $data;
    }
}