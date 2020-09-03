<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Schema';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Schema';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Schema();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('stringProperty', $data)) {
            $object->setStringProperty($data['stringProperty']);
        }
        if (\array_key_exists('dateProperty', $data)) {
            $object->setDateProperty(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['dateProperty']));
        }
        if (\array_key_exists('integerProperty', $data)) {
            $object->setIntegerProperty($data['integerProperty']);
        }
        if (\array_key_exists('floatProperty', $data)) {
            $object->setFloatProperty($data['floatProperty']);
        }
        if (\array_key_exists('arrayProperty', $data)) {
            $values = array();
            foreach ($data['arrayProperty'] as $value) {
                $values[] = $value;
            }
            $object->setArrayProperty($values);
        }
        if (\array_key_exists('mapProperty', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['mapProperty'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMapProperty($values_1);
        }
        if (\array_key_exists('objectProperty', $data)) {
            $object->setObjectProperty($this->denormalizer->denormalize($data['objectProperty'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty', 'json', $context));
        }
        if (\array_key_exists('objectRefProperty', $data)) {
            $object->setObjectRefProperty($this->denormalizer->denormalize($data['objectRefProperty'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Schema', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStringProperty()) {
            $data['stringProperty'] = $object->getStringProperty();
        }
        if (null !== $object->getDateProperty()) {
            $data['dateProperty'] = $object->getDateProperty()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getIntegerProperty()) {
            $data['integerProperty'] = $object->getIntegerProperty();
        }
        if (null !== $object->getFloatProperty()) {
            $data['floatProperty'] = $object->getFloatProperty();
        }
        if (null !== $object->getArrayProperty()) {
            $values = array();
            foreach ($object->getArrayProperty() as $value) {
                $values[] = $value;
            }
            $data['arrayProperty'] = $values;
        }
        if (null !== $object->getMapProperty()) {
            $values_1 = array();
            foreach ($object->getMapProperty() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['mapProperty'] = $values_1;
        }
        if (null !== $object->getObjectProperty()) {
            $data['objectProperty'] = $this->normalizer->normalize($object->getObjectProperty(), 'json', $context);
        }
        if (null !== $object->getObjectRefProperty()) {
            $data['objectRefProperty'] = $this->normalizer->normalize($object->getObjectRefProperty(), 'json', $context);
        }
        return $data;
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}