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
class MduSegmentationProfileMduSegmentationProfileSummaryReviewDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apGroupNameList', $data)) {
            $object->apGroupNameList = $data['apGroupNameList'];
        }
        if (\array_key_exists('ethernetProfileName', $data)) {
            $object->ethernetProfileName = $data['ethernetProfileName'];
        }
        if (\array_key_exists('apModelList', $data)) {
            $object->apModelList = $data['apModelList'];
        }
        if (\array_key_exists('wlanNameList', $data)) {
            $object->wlanNameList = $data['wlanNameList'];
        }
        if (\array_key_exists('wlanSsid', $data)) {
            $object->wlanSsid = $data['wlanSsid'];
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('result', $data)) {
            $object->result = $data['result'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apGroupNameList', get_object_vars($data)) && null !== ($data->apGroupNameList ?? null)) {
            $dataArray['apGroupNameList'] = $data->apGroupNameList ?? null;
        }
        if (array_key_exists('ethernetProfileName', get_object_vars($data)) && null !== ($data->ethernetProfileName ?? null)) {
            $dataArray['ethernetProfileName'] = $data->ethernetProfileName ?? null;
        }
        if (array_key_exists('apModelList', get_object_vars($data)) && null !== ($data->apModelList ?? null)) {
            $dataArray['apModelList'] = $data->apModelList ?? null;
        }
        if (array_key_exists('wlanNameList', get_object_vars($data)) && null !== ($data->wlanNameList ?? null)) {
            $dataArray['wlanNameList'] = $data->wlanNameList ?? null;
        }
        if (array_key_exists('wlanSsid', get_object_vars($data)) && null !== ($data->wlanSsid ?? null)) {
            $dataArray['wlanSsid'] = $data->wlanSsid ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('result', get_object_vars($data)) && null !== ($data->result ?? null)) {
            $dataArray['result'] = $data->result ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class => false];
    }
}