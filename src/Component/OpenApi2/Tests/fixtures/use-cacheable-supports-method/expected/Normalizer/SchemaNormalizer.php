<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Schema';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Schema';
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
        $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\Schema();
        if (\array_key_exists('floatProperty', $data) && \is_int($data['floatProperty'])) {
            $data['floatProperty'] = (double) $data['floatProperty'];
        }
        if (null === $data || false === \is_array($data)) {
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
            $object->setObjectProperty($this->denormalizer->denormalize($data['objectProperty'], 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\SchemaObjectProperty', 'json', $context));
        }
        if (\array_key_exists('objectRefProperty', $data)) {
            $object->setObjectRefProperty($this->denormalizer->denormalize($data['objectRefProperty'], 'Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Schema', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('stringProperty') && null !== $object->getStringProperty()) {
            $data['stringProperty'] = $object->getStringProperty();
        }
        if ($object->isInitialized('dateProperty') && null !== $object->getDateProperty()) {
            $data['dateProperty'] = $object->getDateProperty()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('integerProperty') && null !== $object->getIntegerProperty()) {
            $data['integerProperty'] = $object->getIntegerProperty();
        }
        if ($object->isInitialized('floatProperty') && null !== $object->getFloatProperty()) {
            $data['floatProperty'] = $object->getFloatProperty();
        }
        if ($object->isInitialized('arrayProperty') && null !== $object->getArrayProperty()) {
            $values = array();
            foreach ($object->getArrayProperty() as $value) {
                $values[] = $value;
            }
            $data['arrayProperty'] = $values;
        }
        if ($object->isInitialized('mapProperty') && null !== $object->getMapProperty()) {
            $values_1 = array();
            foreach ($object->getMapProperty() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $data['mapProperty'] = $values_1;
        }
        if ($object->isInitialized('objectProperty') && null !== $object->getObjectProperty()) {
            $data['objectProperty'] = $this->normalizer->normalize($object->getObjectProperty(), 'json', $context);
        }
        if ($object->isInitialized('objectRefProperty') && null !== $object->getObjectRefProperty()) {
            $data['objectRefProperty'] = $this->normalizer->normalize($object->getObjectRefProperty(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jane\\Component\\OpenApi2\\Tests\\Expected\\Model\\Schema' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}