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
class SchemaImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\SchemaImportResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaImportResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\SchemaImportResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('importedSchemaCount', $data)) {
            $object->setImportedSchemaCount($data['importedSchemaCount']);
        }
        if (\array_key_exists('skippedSchemaCount', $data)) {
            $object->setSkippedSchemaCount($data['skippedSchemaCount']);
        }
        if (\array_key_exists('totalSchemaCount', $data)) {
            $object->setTotalSchemaCount($data['totalSchemaCount']);
        }
        if (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] !== null) {
            $values = array();
            foreach ($data['skippedSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setSkippedSchemaIds($values);
        }
        elseif (\array_key_exists('skippedSchemaIds', $data) && $data['skippedSchemaIds'] === null) {
            $object->setSkippedSchemaIds(null);
        }
        if (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] !== null) {
            $values_1 = array();
            foreach ($data['importedSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImportedSchemaIds($values_1);
        }
        elseif (\array_key_exists('importedSchemaIds', $data) && $data['importedSchemaIds'] === null) {
            $object->setImportedSchemaIds(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['importedSchemaCount'] = $object->getImportedSchemaCount();
        $data['skippedSchemaCount'] = $object->getSkippedSchemaCount();
        $data['totalSchemaCount'] = $object->getTotalSchemaCount();
        if (null !== $object->getSkippedSchemaIds()) {
            $values = array();
            foreach ($object->getSkippedSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['skippedSchemaIds'] = $values;
        }
        if (null !== $object->getImportedSchemaIds()) {
            $values_1 = array();
            foreach ($object->getImportedSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['importedSchemaIds'] = $values_1;
        }
        return $data;
    }
}