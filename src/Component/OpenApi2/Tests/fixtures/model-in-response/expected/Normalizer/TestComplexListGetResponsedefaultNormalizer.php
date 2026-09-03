<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestComplexListGetResponsedefaultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\TestComplexListGetResponsedefault::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\TestComplexListGetResponsedefault::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\TestComplexListGetResponsedefault();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ok', $data) && \is_int($data['ok'])) {
            $data['ok'] = (bool) $data['ok'];
        }
        if (\array_key_exists('error', $data)) {
            $object->error = $data['error'];
        }
        if (\array_key_exists('ok', $data)) {
            $object->ok = $data['ok'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $dataArray['error'] = $data->error ?? null;
        }
        if (array_key_exists('ok', get_object_vars($data)) && null !== ($data->ok ?? null)) {
            $dataArray['ok'] = $data->ok ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\TestComplexListGetResponsedefault::class => false];
    }
}