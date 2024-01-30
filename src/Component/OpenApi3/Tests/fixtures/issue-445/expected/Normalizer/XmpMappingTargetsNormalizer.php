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
class XmpMappingTargetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\XmpMappingTargets';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\XmpMappingTargets';
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
        $object = new \PicturePark\API\Model\XmpMappingTargets();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('xmpFields', $data)) {
            $values = array();
            foreach ($data['xmpFields'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\XmpField', 'json', $context);
            }
            $object->setXmpFields($values);
        }
        if (\array_key_exists('metadataFields', $data)) {
            $values_1 = array();
            foreach ($data['metadataFields'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\MetadataField', 'json', $context);
            }
            $object->setMetadataFields($values_1);
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
        foreach ($object->getXmpFields() as $value) {
            $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['xmpFields'] = $values;
        $values_1 = array();
        foreach ($object->getMetadataFields() as $value_1) {
            $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['metadataFields'] = $values_1;
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\XmpMappingTargets' => false);
    }
}