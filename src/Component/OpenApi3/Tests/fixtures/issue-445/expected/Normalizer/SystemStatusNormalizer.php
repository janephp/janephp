<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SystemStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\SystemStatus';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SystemStatus';
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
        $object = new \PicturePark\API\Model\SystemStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('searchIndicesStatus', $data) && $data['searchIndicesStatus'] !== null) {
            $values = array();
            foreach ($data['searchIndicesStatus'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\StatusOfSearchIndexState', 'json', $context);
            }
            $object->setSearchIndicesStatus($values);
        }
        elseif (\array_key_exists('searchIndicesStatus', $data) && $data['searchIndicesStatus'] === null) {
            $object->setSearchIndicesStatus(null);
        }
        if (\array_key_exists('displayValuesStatus', $data) && $data['displayValuesStatus'] !== null) {
            $values_1 = array();
            foreach ($data['displayValuesStatus'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\StatusOfDisplayValuesState', 'json', $context);
            }
            $object->setDisplayValuesStatus($values_1);
        }
        elseif (\array_key_exists('displayValuesStatus', $data) && $data['displayValuesStatus'] === null) {
            $object->setDisplayValuesStatus(null);
        }
        if (\array_key_exists('metadataStatus', $data) && $data['metadataStatus'] !== null) {
            $values_2 = array();
            foreach ($data['metadataStatus'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\StatusOfMetadataState', 'json', $context);
            }
            $object->setMetadataStatus($values_2);
        }
        elseif (\array_key_exists('metadataStatus', $data) && $data['metadataStatus'] === null) {
            $object->setMetadataStatus(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('searchIndicesStatus') && null !== $object->getSearchIndicesStatus()) {
            $values = array();
            foreach ($object->getSearchIndicesStatus() as $value) {
                $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['searchIndicesStatus'] = $values;
        }
        if ($object->isInitialized('displayValuesStatus') && null !== $object->getDisplayValuesStatus()) {
            $values_1 = array();
            foreach ($object->getDisplayValuesStatus() as $value_1) {
                $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['displayValuesStatus'] = $values_1;
        }
        if ($object->isInitialized('metadataStatus') && null !== $object->getMetadataStatus()) {
            $values_2 = array();
            foreach ($object->getMetadataStatus() as $value_2) {
                $values_2[] = $value_2 == null ? null : new \ArrayObject($this->normalizer->normalize($value_2, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['metadataStatus'] = $values_2;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\SystemStatus' => false);
    }
}