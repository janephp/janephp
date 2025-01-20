<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
        if (\array_key_exists('float', $data) && \is_int($data['float'])) {
            $data['float'] = (double) $data['float'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('string', $data) && $data['string'] !== null) {
            $object->setString($data['string']);
        }
        elseif (\array_key_exists('string', $data) && $data['string'] === null) {
            $object->setString(null);
        }
        if (\array_key_exists('bool', $data) && $data['bool'] !== null) {
            $object->setBool($data['bool']);
        }
        elseif (\array_key_exists('bool', $data) && $data['bool'] === null) {
            $object->setBool(null);
        }
        if (\array_key_exists('integer', $data) && $data['integer'] !== null) {
            $object->setInteger($data['integer']);
        }
        elseif (\array_key_exists('integer', $data) && $data['integer'] === null) {
            $object->setInteger(null);
        }
        if (\array_key_exists('float', $data) && $data['float'] !== null) {
            $object->setFloat($data['float']);
        }
        elseif (\array_key_exists('float', $data) && $data['float'] === null) {
            $object->setFloat(null);
        }
        if (\array_key_exists('array', $data) && $data['array'] !== null) {
            $values = [];
            foreach ($data['array'] as $value) {
                $values[] = $value;
            }
            $object->setArray($values);
        }
        elseif (\array_key_exists('array', $data) && $data['array'] === null) {
            $object->setArray(null);
        }
        if (\array_key_exists('object', $data) && $data['object'] !== null) {
            $values_1 = [];
            foreach ($data['object'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setObject($values_1);
        }
        elseif (\array_key_exists('object', $data) && $data['object'] === null) {
            $object->setObject(null);
        }
        if (\array_key_exists('subObject', $data) && $data['subObject'] !== null) {
            $object->setSubObject($this->denormalizer->denormalize($data['subObject'], \Jane\Component\JsonSchema\Tests\Expected\Model\TestSubObject::class, 'json', $context));
        }
        elseif (\array_key_exists('subObject', $data) && $data['subObject'] === null) {
            $object->setSubObject(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('string') && null !== $data->getString()) {
            $dataArray['string'] = $data->getString();
        }
        if ($data->isInitialized('bool') && null !== $data->getBool()) {
            $dataArray['bool'] = $data->getBool();
        }
        if ($data->isInitialized('integer') && null !== $data->getInteger()) {
            $dataArray['integer'] = $data->getInteger();
        }
        if ($data->isInitialized('float') && null !== $data->getFloat()) {
            $dataArray['float'] = $data->getFloat();
        }
        if ($data->isInitialized('array') && null !== $data->getArray()) {
            $values = [];
            foreach ($data->getArray() as $value) {
                $values[] = $value;
            }
            $dataArray['array'] = $values;
        }
        if ($data->isInitialized('object') && null !== $data->getObject()) {
            $values_1 = [];
            foreach ($data->getObject() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['object'] = $values_1;
        }
        if ($data->isInitialized('subObject') && null !== $data->getSubObject()) {
            $dataArray['subObject'] = $this->normalizer->normalize($data->getSubObject(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false];
    }
}