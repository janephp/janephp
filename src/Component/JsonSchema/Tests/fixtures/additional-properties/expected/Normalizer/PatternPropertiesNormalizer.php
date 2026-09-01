<?php

namespace Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Model\PatternProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Model\PatternProperties;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Model\PatternProperties();
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
            unset($data['foo']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/x-.*/', (string) $key)) {
                $object[$key] = $value;
            }
            if (preg_match('/xxxx-.*/', (string) $key)) {
                $object[$key] = $this->denormalizer->denormalize($value, \Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Model\AdditionalProperties::class, 'json', $context);
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('foo', get_object_vars($data)) && null !== ($data->foo ?? null)) {
            $dataArray['foo'] = $data->foo ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/x-.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
            if (preg_match('/xxxx-.*/', (string) $key)) {
                $dataArray[$key] = $value === null ? null : new \Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\AdditionalProperties\Model\PatternProperties::class => false];
    }
}