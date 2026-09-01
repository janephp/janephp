<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummary();
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
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfoSummary::class, 'json', $context);
            }
            $object->dpInfoList = $values;
        }
        if (\array_key_exists('apGroupInfoList', $data)) {
            $values_1 = [];
            foreach ($data['apGroupInfoList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileApGroupInfo::class, 'json', $context);
            }
            $object->apGroupInfoList = $values_1;
        }
        if (\array_key_exists('networkSegmentationSwitchInfo', $data)) {
            $object->networkSegmentationSwitchInfo = $this->denormalizer->denormalize($data['networkSegmentationSwitchInfo'], \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class, 'json', $context);
        }
        if (\array_key_exists('reviewData', $data)) {
            $object->reviewData = $this->denormalizer->denormalize($data['reviewData'], \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        $dataArray['domainId'] = $data->domainId ?? null;
        $dataArray['name'] = $data->name ?? null;
        $values = [];
        foreach ($data->dpInfoList ?? null as $value) {
            $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['dpInfoList'] = $values;
        if (array_key_exists('apGroupInfoList', get_object_vars($data)) && null !== ($data->apGroupInfoList ?? null)) {
            $values_1 = [];
            foreach ($data->apGroupInfoList ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['apGroupInfoList'] = $values_1;
        }
        if (array_key_exists('networkSegmentationSwitchInfo', get_object_vars($data)) && null !== ($data->networkSegmentationSwitchInfo ?? null)) {
            $dataArray['networkSegmentationSwitchInfo'] = ($data->networkSegmentationSwitchInfo ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->networkSegmentationSwitchInfo ?? null, 'json', $context));
        }
        if (array_key_exists('reviewData', get_object_vars($data)) && null !== ($data->reviewData ?? null)) {
            $dataArray['reviewData'] = ($data->reviewData ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->reviewData ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummary::class => false];
    }
}