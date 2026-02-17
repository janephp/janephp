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
class WlanWlanRadiusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius();
        if (\array_key_exists('singleSessionIdAcctEnabled', $data) && \is_int($data['singleSessionIdAcctEnabled'])) {
            $data['singleSessionIdAcctEnabled'] = (bool) $data['singleSessionIdAcctEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('nasIdType', $data)) {
            $object->setNasIdType($data['nasIdType']);
        }
        if (\array_key_exists('customizedNasId', $data)) {
            $object->setCustomizedNasId($data['customizedNasId']);
        }
        if (\array_key_exists('nasRequestTimeoutSec', $data)) {
            $object->setNasRequestTimeoutSec($data['nasRequestTimeoutSec']);
        }
        if (\array_key_exists('nasMaxRetry', $data)) {
            $object->setNasMaxRetry($data['nasMaxRetry']);
        }
        if (\array_key_exists('nasReconnectPrimaryMin', $data)) {
            $object->setNasReconnectPrimaryMin($data['nasReconnectPrimaryMin']);
        }
        if (\array_key_exists('calledStaIdType', $data)) {
            $object->setCalledStaIdType($data['calledStaIdType']);
        }
        if (\array_key_exists('nasIpType', $data)) {
            $object->setNasIpType($data['nasIpType']);
        }
        if (\array_key_exists('nasIpUserDefined', $data)) {
            $object->setNasIpUserDefined($data['nasIpUserDefined']);
        }
        if (\array_key_exists('singleSessionIdAcctEnabled', $data)) {
            $object->setSingleSessionIdAcctEnabled($data['singleSessionIdAcctEnabled']);
        }
        if (\array_key_exists('vendorSpecificAttributeProfileId', $data)) {
            $object->setVendorSpecificAttributeProfileId($data['vendorSpecificAttributeProfileId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nasIdType') && null !== $data->getNasIdType()) {
            $dataArray['nasIdType'] = $data->getNasIdType();
        }
        if ($data->isInitialized('customizedNasId') && null !== $data->getCustomizedNasId()) {
            $dataArray['customizedNasId'] = $data->getCustomizedNasId();
        }
        if ($data->isInitialized('nasRequestTimeoutSec') && null !== $data->getNasRequestTimeoutSec()) {
            $dataArray['nasRequestTimeoutSec'] = $data->getNasRequestTimeoutSec();
        }
        if ($data->isInitialized('nasMaxRetry') && null !== $data->getNasMaxRetry()) {
            $dataArray['nasMaxRetry'] = $data->getNasMaxRetry();
        }
        if ($data->isInitialized('nasReconnectPrimaryMin') && null !== $data->getNasReconnectPrimaryMin()) {
            $dataArray['nasReconnectPrimaryMin'] = $data->getNasReconnectPrimaryMin();
        }
        if ($data->isInitialized('calledStaIdType') && null !== $data->getCalledStaIdType()) {
            $dataArray['calledStaIdType'] = $data->getCalledStaIdType();
        }
        if ($data->isInitialized('nasIpType') && null !== $data->getNasIpType()) {
            $dataArray['nasIpType'] = $data->getNasIpType();
        }
        if ($data->isInitialized('nasIpUserDefined') && null !== $data->getNasIpUserDefined()) {
            $dataArray['nasIpUserDefined'] = $data->getNasIpUserDefined();
        }
        if ($data->isInitialized('singleSessionIdAcctEnabled') && null !== $data->getSingleSessionIdAcctEnabled()) {
            $dataArray['singleSessionIdAcctEnabled'] = $data->getSingleSessionIdAcctEnabled();
        }
        if ($data->isInitialized('vendorSpecificAttributeProfileId') && null !== $data->getVendorSpecificAttributeProfileId()) {
            $dataArray['vendorSpecificAttributeProfileId'] = $data->getVendorSpecificAttributeProfileId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class => false];
    }
}