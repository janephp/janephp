<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MetadataValuesSchemaItemAddCommandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\MetadataValuesSchemaItemAddCommand';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\MetadataValuesSchemaItemAddCommand';
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
        $object = new \PicturePark\API\Model\MetadataValuesSchemaItemAddCommand();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemaId', $data)) {
            $object->setSchemaId($data['schemaId']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('fieldPath', $data)) {
            $object->setFieldPath($data['fieldPath']);
        }
        if (\array_key_exists('fieldNamespace', $data)) {
            $object->setFieldNamespace($data['fieldNamespace']);
        }
        if (\array_key_exists('referenceId', $data)) {
            $object->setReferenceId($data['referenceId']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['schemaId'] = $object->getSchemaId();
        $data['kind'] = $object->getKind();
        $data['fieldPath'] = $object->getFieldPath();
        $data['fieldNamespace'] = $object->getFieldNamespace();
        $data['referenceId'] = $object->getReferenceId();
        return $data;
    }
}