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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('apGroupNameList', $data)) {
            $object->setApGroupNameList($data['apGroupNameList']);
        }
        if (\array_key_exists('ethernetProfileName', $data)) {
            $object->setEthernetProfileName($data['ethernetProfileName']);
        }
        if (\array_key_exists('apModelList', $data)) {
            $object->setApModelList($data['apModelList']);
        }
        if (\array_key_exists('wlanNameList', $data)) {
            $object->setWlanNameList($data['wlanNameList']);
        }
        if (\array_key_exists('wlanSsid', $data)) {
            $object->setWlanSsid($data['wlanSsid']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('result', $data)) {
            $object->setResult($data['result']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apGroupNameList') && null !== $data->getApGroupNameList()) {
            $dataArray['apGroupNameList'] = $data->getApGroupNameList();
        }
        if ($data->isInitialized('ethernetProfileName') && null !== $data->getEthernetProfileName()) {
            $dataArray['ethernetProfileName'] = $data->getEthernetProfileName();
        }
        if ($data->isInitialized('apModelList') && null !== $data->getApModelList()) {
            $dataArray['apModelList'] = $data->getApModelList();
        }
        if ($data->isInitialized('wlanNameList') && null !== $data->getWlanNameList()) {
            $dataArray['wlanNameList'] = $data->getWlanNameList();
        }
        if ($data->isInitialized('wlanSsid') && null !== $data->getWlanSsid()) {
            $dataArray['wlanSsid'] = $data->getWlanSsid();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('result') && null !== $data->getResult()) {
            $dataArray['result'] = $data->getResult();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class => false];
    }
}