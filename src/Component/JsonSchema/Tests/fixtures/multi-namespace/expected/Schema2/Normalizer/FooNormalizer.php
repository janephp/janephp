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
            $object->setFoo($data['foo']);
        }
        if (\array_key_exists('bar', $data)) {
            $object->setBar($this->denormalizer->denormalize($data['bar'], \Jane\Component\JsonSchema\Tests\Expected\Schema3\Model\Bar::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('foo') && null !== $data->getFoo()) {
            $dataArray['foo'] = $data->getFoo();
        }
        if ($data->isInitialized('bar') && null !== $data->getBar()) {
            $dataArray['bar'] = $data->getBar() === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\Schema2\Runtime\JsonObject($this->normalizer->normalize($data->getBar(), 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Schema2\Model\Foo::class => false];
    }
}