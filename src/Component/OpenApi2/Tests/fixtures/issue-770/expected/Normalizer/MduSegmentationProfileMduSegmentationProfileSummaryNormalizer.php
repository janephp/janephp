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
class MduSegmentationProfileMduSegmentationProfileSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('dpInfoList', $data)) {
            $values = [];
            foreach ($data['dpInfoList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduProfileDpInfoSummary::class, 'json', $context);
            }
            $object->dpInfoList = $values;
        }
        if (\array_key_exists('apGroupInfoList', $data)) {
            $values_1 = [];
            foreach ($data['apGroupInfoList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduProfileApGroupInfo::class, 'json', $context);
            }
            $object->apGroupInfoList = $values_1;
        }
        if (\array_key_exists('networkSegmentationSwitchInfo', $data)) {
            $object->networkSegmentationSwitchInfo = $this->denormalizer->denormalize($data['networkSegmentationSwitchInfo'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class, 'json', $context);
        }
        if (\array_key_exists('reviewData', $data)) {
            $object->reviewData = $this->denormalizer->denormalize($data['reviewData'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id;
        $dataArray['domainId'] = $data->domainId;
        $dataArray['name'] = $data->name;
        $values = [];
        foreach ($data->dpInfoList as $value) {
            $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['dpInfoList'] = $values;
        if (array_key_exists('apGroupInfoList', get_object_vars($data)) && null !== ($data->apGroupInfoList ?? null)) {
            $values_1 = [];
            foreach ($data->apGroupInfoList as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['apGroupInfoList'] = $values_1;
        }
        if (array_key_exists('networkSegmentationSwitchInfo', get_object_vars($data)) && null !== ($data->networkSegmentationSwitchInfo ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->networkSegmentationSwitchInfo, 'json', $context);
            $dataArray['networkSegmentationSwitchInfo'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('reviewData', get_object_vars($data)) && null !== ($data->reviewData ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->reviewData, 'json', $context);
            $dataArray['reviewData'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummary::class => false];
    }
}