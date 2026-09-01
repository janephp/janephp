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
class BazNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Baz::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Baz;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Baz();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('foo', $data)) {
            $object->foo = $data['foo'];
        }
        if (\array_key_exists('Bar', $data)) {
            $object->bar = $this->denormalizer->denormalize($data['Bar'], \Jane\Component\JsonSchema\Tests\Expected\Model\Bar::class, 'json', $context);
        }
        if (\array_key_exists('Baz', $data)) {
            $object->baz = $this->denormalizer->denormalize($data['Baz'], \Jane\Component\JsonSchema\Tests\Expected\Model\BazBaz::class, 'json', $context);
        }
        if (\array_key_exists('inlineProperty', $data)) {
            $object->inlineProperty = $this->denormalizer->denormalize($data['inlineProperty'], \Jane\Component\JsonSchema\Tests\Expected\Model\BazInlineProperty::class, 'json', $context);
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
            $dataArray['Bar'] = ($data->bar ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->bar ?? null, 'json', $context));
        }
        if (array_key_exists('baz', get_object_vars($data)) && null !== ($data->baz ?? null)) {
            $dataArray['Baz'] = ($data->baz ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->baz ?? null, 'json', $context));
        }
        if (array_key_exists('inlineProperty', get_object_vars($data)) && null !== ($data->inlineProperty ?? null)) {
            $dataArray['inlineProperty'] = ($data->inlineProperty ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->inlineProperty ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Baz::class => false];
    }
}