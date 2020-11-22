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
class ListItemImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ListItemImportResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItemImportResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ListItemImportResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('importedListItemCount', $data)) {
            $object->setImportedListItemCount($data['importedListItemCount']);
        }
        if (\array_key_exists('skippedListItemCount', $data)) {
            $object->setSkippedListItemCount($data['skippedListItemCount']);
        }
        if (\array_key_exists('totalListItemCount', $data)) {
            $object->setTotalListItemCount($data['totalListItemCount']);
        }
        if (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] !== null) {
            $values = array();
            foreach ($data['skippedListItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setSkippedListItemIds($values);
        }
        elseif (\array_key_exists('skippedListItemIds', $data) && $data['skippedListItemIds'] === null) {
            $object->setSkippedListItemIds(null);
        }
        if (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] !== null) {
            $values_1 = array();
            foreach ($data['importedListItemIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setImportedListItemIds($values_1);
        }
        elseif (\array_key_exists('importedListItemIds', $data) && $data['importedListItemIds'] === null) {
            $object->setImportedListItemIds(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['importedListItemCount'] = $object->getImportedListItemCount();
        $data['skippedListItemCount'] = $object->getSkippedListItemCount();
        $data['totalListItemCount'] = $object->getTotalListItemCount();
        if (null !== $object->getSkippedListItemIds()) {
            $values = array();
            foreach ($object->getSkippedListItemIds() as $value) {
                $values[] = $value;
            }
            $data['skippedListItemIds'] = $values;
        }
        if (null !== $object->getImportedListItemIds()) {
            $values_1 = array();
            foreach ($object->getImportedListItemIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['importedListItemIds'] = $values_1;
        }
        return $data;
    }
}