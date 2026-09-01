<?php

namespace Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Model\Test::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Model\Test;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Model\Test();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('string', $data)) {
            $object->string = $data['string'];
        }
        if (\array_key_exists('subObject', $data)) {
            $object->subObject = $this->denormalizer->denormalize($data['subObject'], \Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Model\TestSubObject::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('string', get_object_vars($data)) && null !== ($data->string ?? null)) {
            $dataArray['string'] = $data->string ?? null;
        }
        if (array_key_exists('subObject', get_object_vars($data)) && null !== ($data->subObject ?? null)) {
            $dataArray['subObject'] = ($data->subObject ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Runtime\JsonObject($this->normalizer->normalize($data->subObject ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\TestNoReference\Model\Test::class => false];
    }
}