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
class PatternPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\PatternProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\PatternProperties;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\PatternProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('bar', $data) && $data['bar'] !== null) {
            $value = $data['bar'];
            if (is_int($data['bar'])) {
                $value = $data['bar'];
            } elseif (is_null($data['bar'])) {
                $value = $data['bar'];
            }
            $object->bar = $value;
            unset($data['bar']);
        }
        elseif (\array_key_exists('bar', $data) && $data['bar'] === null) {
            $object->bar = null;
            unset($data['bar']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/^x-.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('bar', get_object_vars($data)) && null !== ($data->bar ?? null)) {
            $value = $data->bar ?? null;
            if (is_int($data->bar ?? null)) {
                $value = $data->bar ?? null;
            } elseif (is_null($data->bar ?? null)) {
                $value = $data->bar ?? null;
            }
            $dataArray['bar'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/^x-.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\PatternProperties::class => false];
    }
}