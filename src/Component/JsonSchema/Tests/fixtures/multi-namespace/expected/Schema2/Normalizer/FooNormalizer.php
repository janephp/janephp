<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Schema2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Schema2\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Schema2\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('foo', $data)) {
            $object->foo = $data['foo'];
        }
        if (\array_key_exists('bar', $data)) {
            $object->bar = $this->denormalizer->denormalize($data['bar'], \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar::class, 'json', $context);
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
            $dataArray['bar'] = ($data->bar ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Schema2\Runtime\JsonObject($this->normalizer->normalize($data->bar ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo::class => false];
    }
}