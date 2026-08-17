<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\Schema();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('floatProperty', $data) && \is_int($data['floatProperty'])) {
            $data['floatProperty'] = (float) $data['floatProperty'];
        }
        if (\array_key_exists('stringProperty', $data)) {
            $object->setStringProperty($data['stringProperty']);
        }
        if (\array_key_exists('dateProperty', $data)) {
            $object->setDateProperty(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['dateProperty']));
        }
        if (\array_key_exists('integerProperty', $data)) {
            $object->setIntegerProperty($data['integerProperty']);
        }
        if (\array_key_exists('floatProperty', $data)) {
            $object->setFloatProperty($data['floatProperty']);
        }
        if (\array_key_exists('arrayProperty', $data)) {
            $values = [];
            foreach ($data['arrayProperty'] as $value) {
                $values[] = $value;
            }
            $object->setArrayProperty($values);
        }
        if (\array_key_exists('mapProperty', $data)) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['mapProperty'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setMapProperty($values_1);
        }
        if (\array_key_exists('objectProperty', $data)) {
            $object->setObjectProperty($this->denormalizer->denormalize($data['objectProperty'], \Jane\Component\OpenApi2\Tests\Expected\Model\SchemaObjectProperty::class, 'json', $context));
        }
        if (\array_key_exists('objectRefProperty', $data)) {
            $object->setObjectRefProperty($this->denormalizer->denormalize($data['objectRefProperty'], \Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('stringProperty') && null !== $data->getStringProperty()) {
            $dataArray['stringProperty'] = $data->getStringProperty();
        }
        if ($data->isInitialized('dateProperty') && null !== $data->getDateProperty()) {
            $dataArray['dateProperty'] = $data->getDateProperty()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('integerProperty') && null !== $data->getIntegerProperty()) {
            $dataArray['integerProperty'] = $data->getIntegerProperty();
        }
        if ($data->isInitialized('floatProperty') && null !== $data->getFloatProperty()) {
            $dataArray['floatProperty'] = $data->getFloatProperty();
        }
        if ($data->isInitialized('arrayProperty') && null !== $data->getArrayProperty()) {
            $values = [];
            foreach ($data->getArrayProperty() as $value) {
                $values[] = $value;
            }
            $dataArray['arrayProperty'] = $values;
        }
        if ($data->isInitialized('mapProperty') && null !== $data->getMapProperty()) {
            $values_1 = [];
            foreach ($data->getMapProperty() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['mapProperty'] = $values_1;
        }
        if ($data->isInitialized('objectProperty') && null !== $data->getObjectProperty()) {
            $dataArray['objectProperty'] = $this->normalizer->normalize($data->getObjectProperty(), 'json', $context);
        }
        if ($data->isInitialized('objectRefProperty') && null !== $data->getObjectRefProperty()) {
            $dataArray['objectRefProperty'] = $this->normalizer->normalize($data->getObjectRefProperty(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class => true];
    }
    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}