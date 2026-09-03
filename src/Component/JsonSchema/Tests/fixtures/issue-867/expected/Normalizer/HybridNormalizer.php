<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Issue867\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Issue867\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Issue867\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class HybridNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Issue867\Model\Hybrid::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Issue867\Model\Hybrid;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Issue867\Model\Hybrid();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $value = $data['name'];
            if (is_string($data['name'])) {
                $value = $data['name'];
            } elseif (is_null($data['name'])) {
                $value = $data['name'];
            }
            $object->name = $value;
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->name = null;
            unset($data['name']);
        }
        if (\array_key_exists('_attachment', $data) && $data['_attachment'] !== null) {
            $value_1 = $data['_attachment'];
            if (is_string($data['_attachment'])) {
                $value_1 = $data['_attachment'];
            } elseif (is_null($data['_attachment'])) {
                $value_1 = $data['_attachment'];
            }
            $object->attachment = $value_1;
            unset($data['_attachment']);
        }
        elseif (\array_key_exists('_attachment', $data) && $data['_attachment'] === null) {
            $object->attachment = null;
            unset($data['_attachment']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $value = $data->name ?? null;
            if (is_string($data->name ?? null)) {
                $value = $data->name ?? null;
            } elseif (is_null($data->name ?? null)) {
                $value = $data->name ?? null;
            }
            $dataArray['name'] = $value;
        }
        if (array_key_exists('attachment', get_object_vars($data)) && null !== ($data->attachment ?? null)) {
            $value_1 = $data->attachment ?? null;
            if (is_string($data->attachment ?? null)) {
                $value_1 = $data->attachment ?? null;
            } elseif (is_null($data->attachment ?? null)) {
                $value_1 = $data->attachment ?? null;
            }
            $dataArray['_attachment'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Issue867\Model\Hybrid::class => false];
    }
}