<?php

namespace Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FooNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Model\Foo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Model\Foo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Model\Foo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('foo', $data)) {
            $object->foo = $data['foo'];
        }
        if (\array_key_exists('bar', $data)) {
            $value = $data['bar'];
            if (is_string($data['bar'])) {
                $value = $data['bar'];
            }
            $object->bar = $value;
        }
        if (\array_key_exists('baz', $data) && $data['baz'] !== null) {
            $object->baz = $data['baz'];
        }
        elseif (\array_key_exists('baz', $data) && $data['baz'] === null) {
            $object->baz = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('foo', get_object_vars($data)) && null !== ($data->foo ?? null)) {
            $dataArray['foo'] = $data->foo ?? null;
        }
        if (array_key_exists('bar', get_object_vars($data)) && null !== ($data->bar ?? null)) {
            $value = $data->bar ?? null;
            if (is_string($data->bar ?? null)) {
                $value = $data->bar ?? null;
            }
            $dataArray['bar'] = $value;
        }
        if (array_key_exists('baz', get_object_vars($data)) && null !== ($data->baz ?? null)) {
            $dataArray['baz'] = $data->baz ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi2\Tests\Expected\NullableCheck\Model\Foo::class => false];
    }
}