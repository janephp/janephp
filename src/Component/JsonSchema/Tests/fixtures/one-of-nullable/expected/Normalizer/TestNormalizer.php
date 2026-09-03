<?php

namespace Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Model\Test::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Model\Test;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Model\Test();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $value = $data['id'];
            if (is_null($data['id'])) {
                $value = $data['id'];
            } elseif (is_array($data['id'])) {
                $value = $this->denormalizer->denormalize($data['id'], \Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Model\Id::class, 'json', $context);
            }
            $object->id = $value;
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $value = $data->id ?? null;
            if (is_null($data->id ?? null)) {
                $value = $data->id ?? null;
            } elseif (is_object($data->id ?? null)) {
                $value = ($data->id ?? null) === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Runtime\JsonObject($this->normalizer->normalize($data->id ?? null, 'json', $context));
            }
            $dataArray['id'] = $value;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\OneOfNullable\Model\Test::class => false];
    }
}