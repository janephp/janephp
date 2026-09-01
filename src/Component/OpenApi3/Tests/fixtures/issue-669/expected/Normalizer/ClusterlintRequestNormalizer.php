<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ClusterlintRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ClusterlintRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ClusterlintRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ClusterlintRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('include_groups', $data)) {
            $values = [];
            foreach ($data['include_groups'] as $value) {
                $values[] = $value;
            }
            $object->includeGroups = $values;
            unset($data['include_groups']);
        }
        if (\array_key_exists('include_checks', $data)) {
            $values_1 = [];
            foreach ($data['include_checks'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->includeChecks = $values_1;
            unset($data['include_checks']);
        }
        if (\array_key_exists('exclude_groups', $data)) {
            $values_2 = [];
            foreach ($data['exclude_groups'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->excludeGroups = $values_2;
            unset($data['exclude_groups']);
        }
        if (\array_key_exists('exclude_checks', $data)) {
            $values_3 = [];
            foreach ($data['exclude_checks'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->excludeChecks = $values_3;
            unset($data['exclude_checks']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('includeGroups', get_object_vars($data)) && null !== ($data->includeGroups ?? null)) {
            $values = [];
            foreach ($data->includeGroups ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['include_groups'] = $values;
        }
        if (array_key_exists('includeChecks', get_object_vars($data)) && null !== ($data->includeChecks ?? null)) {
            $values_1 = [];
            foreach ($data->includeChecks ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['include_checks'] = $values_1;
        }
        if (array_key_exists('excludeGroups', get_object_vars($data)) && null !== ($data->excludeGroups ?? null)) {
            $values_2 = [];
            foreach ($data->excludeGroups ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['exclude_groups'] = $values_2;
        }
        if (array_key_exists('excludeChecks', get_object_vars($data)) && null !== ($data->excludeChecks ?? null)) {
            $values_3 = [];
            foreach ($data->excludeChecks ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['exclude_checks'] = $values_3;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ClusterlintRequest::class => false];
    }
}