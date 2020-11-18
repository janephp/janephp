<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class IndexFieldsSearchBySchemaIdsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\IndexFieldsSearchBySchemaIdsRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\IndexFieldsSearchBySchemaIdsRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\IndexFieldsSearchBySchemaIdsRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemaIds', $data) && $data['schemaIds'] !== null) {
            $values = array();
            foreach ($data['schemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setSchemaIds($values);
        }
        elseif (\array_key_exists('schemaIds', $data) && $data['schemaIds'] === null) {
            $object->setSchemaIds(null);
        }
        if (\array_key_exists('searchMode', $data)) {
            $object->setSearchMode($data['searchMode']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSchemaIds()) {
            $values = array();
            foreach ($object->getSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['schemaIds'] = $values;
        }
        $data['searchMode'] = $object->getSearchMode();
        return $data;
    }
}