<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApAlarmSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApAlarmSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApAlarmSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApAlarmSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('criticalCount', $data)) {
            $object->criticalCount = $data['criticalCount'];
        }
        if (\array_key_exists('majorCount', $data)) {
            $object->majorCount = $data['majorCount'];
        }
        if (\array_key_exists('minorCount', $data)) {
            $object->minorCount = $data['minorCount'];
        }
        if (\array_key_exists('warningCount', $data)) {
            $object->warningCount = $data['warningCount'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('criticalCount', get_object_vars($data)) && null !== ($data->criticalCount ?? null)) {
            $dataArray['criticalCount'] = $data->criticalCount ?? null;
        }
        if (array_key_exists('majorCount', get_object_vars($data)) && null !== ($data->majorCount ?? null)) {
            $dataArray['majorCount'] = $data->majorCount ?? null;
        }
        if (array_key_exists('minorCount', get_object_vars($data)) && null !== ($data->minorCount ?? null)) {
            $dataArray['minorCount'] = $data->minorCount ?? null;
        }
        if (array_key_exists('warningCount', get_object_vars($data)) && null !== ($data->warningCount ?? null)) {
            $dataArray['warningCount'] = $data->warningCount ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApAlarmSummary::class => false];
    }
}