<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScimUserListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ScimUserList';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserList';
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
        $object = new \Github\Model\ScimUserList();
        $validator = new \Github\Validator\ScimUserListValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemas', $data)) {
            $values = array();
            foreach ($data['schemas'] as $value) {
                $values[] = $value;
            }
            $object->setSchemas($values);
        }
        if (\array_key_exists('totalResults', $data)) {
            $object->setTotalResults($data['totalResults']);
        }
        if (\array_key_exists('itemsPerPage', $data)) {
            $object->setItemsPerPage($data['itemsPerPage']);
        }
        if (\array_key_exists('startIndex', $data)) {
            $object->setStartIndex($data['startIndex']);
        }
        if (\array_key_exists('Resources', $data)) {
            $values_1 = array();
            foreach ($data['Resources'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimUser', 'json', $context);
            }
            $object->setResources($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getSchemas() as $value) {
            $values[] = $value;
        }
        $data['schemas'] = $values;
        $data['totalResults'] = $object->getTotalResults();
        $data['itemsPerPage'] = $object->getItemsPerPage();
        $data['startIndex'] = $object->getStartIndex();
        $values_1 = array();
        foreach ($object->getResources() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['Resources'] = $values_1;
        $validator = new \Github\Validator\ScimUserListValidator();
        $validator->validate($data);
        return $data;
    }
}