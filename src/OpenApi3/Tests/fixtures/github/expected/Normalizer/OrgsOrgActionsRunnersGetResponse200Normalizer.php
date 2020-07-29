<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrgsOrgActionsRunnersGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\OrgsOrgActionsRunnersGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgActionsRunnersGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrgsOrgActionsRunnersGetResponse200();
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
        }
        if (\array_key_exists('runners', $data)) {
            $values = array();
            foreach ($data['runners'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Runner', 'json', $context);
            }
            $object->setRunners($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotalCount()) {
            $data['total_count'] = $object->getTotalCount();
        }
        if (null !== $object->getRunners()) {
            $values = array();
            foreach ($object->getRunners() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['runners'] = $values;
        }
        return $data;
    }
}