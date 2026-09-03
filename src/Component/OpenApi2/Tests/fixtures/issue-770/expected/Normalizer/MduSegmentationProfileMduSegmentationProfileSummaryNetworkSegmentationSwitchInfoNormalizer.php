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
class MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('groups', $data)) {
            $values = [];
            foreach ($data['groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileSwitchGroups::class, 'json', $context);
            }
            $object->groups = $values;
        }
        if (\array_key_exists('distributionSwitches', $data)) {
            $values_1 = [];
            foreach ($data['distributionSwitches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileDistributionSwitchObj::class, 'json', $context);
            }
            $object->distributionSwitches = $values_1;
        }
        if (\array_key_exists('accessSwitches', $data)) {
            $values_2 = [];
            foreach ($data['accessSwitches'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileAccessSwitchObj::class, 'json', $context);
            }
            $object->accessSwitches = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('groups', get_object_vars($data)) && null !== ($data->groups ?? null)) {
            $values = [];
            foreach ($data->groups ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['groups'] = $values;
        }
        if (array_key_exists('distributionSwitches', get_object_vars($data)) && null !== ($data->distributionSwitches ?? null)) {
            $values_1 = [];
            foreach ($data->distributionSwitches ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['distributionSwitches'] = $values_1;
        }
        if (array_key_exists('accessSwitches', get_object_vars($data)) && null !== ($data->accessSwitches ?? null)) {
            $values_2 = [];
            foreach ($data->accessSwitches ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['accessSwitches'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class => false];
    }
}