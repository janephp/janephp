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
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('float', $data) && \is_int($data['float'])) {
            $data['float'] = (float) $data['float'];
        }
        if (\array_key_exists('bool', $data) && \is_int($data['bool'])) {
            $data['bool'] = (bool) $data['bool'];
        }
        if (\array_key_exists('string', $data) && $data['string'] !== null) {
            $object->string = $data['string'];
        }
        elseif (\array_key_exists('string', $data) && $data['string'] === null) {
            $object->string = null;
        }
        if (\array_key_exists('bool', $data) && $data['bool'] !== null) {
            $object->bool = $data['bool'];
        }
        elseif (\array_key_exists('bool', $data) && $data['bool'] === null) {
            $object->bool = null;
        }
        if (\array_key_exists('integer', $data) && $data['integer'] !== null) {
            $object->integer = $data['integer'];
        }
        elseif (\array_key_exists('integer', $data) && $data['integer'] === null) {
            $object->integer = null;
        }
        if (\array_key_exists('float', $data) && $data['float'] !== null) {
            $object->float = $data['float'];
        }
        elseif (\array_key_exists('float', $data) && $data['float'] === null) {
            $object->float = null;
        }
        if (\array_key_exists('array', $data) && $data['array'] !== null) {
            $values = [];
            foreach ($data['array'] as $value) {
                $values[] = $value;
            }
            $object->array = $values;
        }
        elseif (\array_key_exists('array', $data) && $data['array'] === null) {
            $object->array = null;
        }
        if (\array_key_exists('object', $data) && $data['object'] !== null) {
            $values_1 = [];
            foreach ($data['object'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->object = $values_1;
        }
        elseif (\array_key_exists('object', $data) && $data['object'] === null) {
            $object->object = null;
        }
        if (\array_key_exists('subObject', $data) && $data['subObject'] !== null) {
            $object->subObject = $this->denormalizer->denormalize($data['subObject'], \Jane\Component\JsonSchema\Tests\Expected\Model\TestSubObject::class, 'json', $context);
        }
        elseif (\array_key_exists('subObject', $data) && $data['subObject'] === null) {
            $object->subObject = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('string', get_object_vars($data)) && null !== ($data->string ?? null)) {
            $dataArray['string'] = $data->string ?? null;
        }
        if (array_key_exists('bool', get_object_vars($data)) && null !== ($data->bool ?? null)) {
            $dataArray['bool'] = $data->bool ?? null;
        }
        if (array_key_exists('integer', get_object_vars($data)) && null !== ($data->integer ?? null)) {
            $dataArray['integer'] = $data->integer ?? null;
        }
        if (array_key_exists('float', get_object_vars($data)) && null !== ($data->float ?? null)) {
            $dataArray['float'] = $data->float ?? null;
        }
        if (array_key_exists('array', get_object_vars($data)) && null !== ($data->array ?? null)) {
            $values = [];
            foreach ($data->array ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['array'] = $values;
        }
        if (array_key_exists('object', get_object_vars($data)) && null !== ($data->object ?? null)) {
            $values_1 = [];
            foreach ($data->object ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['object'] = $values_1;
        }
        if (array_key_exists('subObject', get_object_vars($data)) && null !== ($data->subObject ?? null)) {
            $dataArray['subObject'] = ($data->subObject ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->subObject ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false];
    }
}