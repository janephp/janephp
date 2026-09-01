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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('singleSessionIdAcctEnabled', $data) && \is_int($data['singleSessionIdAcctEnabled'])) {
            $data['singleSessionIdAcctEnabled'] = (bool) $data['singleSessionIdAcctEnabled'];
        }
        if (\array_key_exists('nasIdType', $data)) {
            $object->nasIdType = $data['nasIdType'];
        }
        if (\array_key_exists('customizedNasId', $data)) {
            $object->customizedNasId = $data['customizedNasId'];
        }
        if (\array_key_exists('nasRequestTimeoutSec', $data)) {
            $object->nasRequestTimeoutSec = $data['nasRequestTimeoutSec'];
        }
        if (\array_key_exists('nasMaxRetry', $data)) {
            $object->nasMaxRetry = $data['nasMaxRetry'];
        }
        if (\array_key_exists('nasReconnectPrimaryMin', $data)) {
            $object->nasReconnectPrimaryMin = $data['nasReconnectPrimaryMin'];
        }
        if (\array_key_exists('calledStaIdType', $data)) {
            $object->calledStaIdType = $data['calledStaIdType'];
        }
        if (\array_key_exists('nasIpType', $data)) {
            $object->nasIpType = $data['nasIpType'];
        }
        if (\array_key_exists('nasIpUserDefined', $data)) {
            $object->nasIpUserDefined = $data['nasIpUserDefined'];
        }
        if (\array_key_exists('singleSessionIdAcctEnabled', $data)) {
            $object->singleSessionIdAcctEnabled = $data['singleSessionIdAcctEnabled'];
        }
        if (\array_key_exists('vendorSpecificAttributeProfileId', $data)) {
            $object->vendorSpecificAttributeProfileId = $data['vendorSpecificAttributeProfileId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('nasIdType', get_object_vars($data)) && null !== ($data->nasIdType ?? null)) {
            $dataArray['nasIdType'] = $data->nasIdType ?? null;
        }
        if (array_key_exists('customizedNasId', get_object_vars($data)) && null !== ($data->customizedNasId ?? null)) {
            $dataArray['customizedNasId'] = $data->customizedNasId ?? null;
        }
        if (array_key_exists('nasRequestTimeoutSec', get_object_vars($data)) && null !== ($data->nasRequestTimeoutSec ?? null)) {
            $dataArray['nasRequestTimeoutSec'] = $data->nasRequestTimeoutSec ?? null;
        }
        if (array_key_exists('nasMaxRetry', get_object_vars($data)) && null !== ($data->nasMaxRetry ?? null)) {
            $dataArray['nasMaxRetry'] = $data->nasMaxRetry ?? null;
        }
        if (array_key_exists('nasReconnectPrimaryMin', get_object_vars($data)) && null !== ($data->nasReconnectPrimaryMin ?? null)) {
            $dataArray['nasReconnectPrimaryMin'] = $data->nasReconnectPrimaryMin ?? null;
        }
        if (array_key_exists('calledStaIdType', get_object_vars($data)) && null !== ($data->calledStaIdType ?? null)) {
            $dataArray['calledStaIdType'] = $data->calledStaIdType ?? null;
        }
        if (array_key_exists('nasIpType', get_object_vars($data)) && null !== ($data->nasIpType ?? null)) {
            $dataArray['nasIpType'] = $data->nasIpType ?? null;
        }
        if (array_key_exists('nasIpUserDefined', get_object_vars($data)) && null !== ($data->nasIpUserDefined ?? null)) {
            $dataArray['nasIpUserDefined'] = $data->nasIpUserDefined ?? null;
        }
        if (array_key_exists('singleSessionIdAcctEnabled', get_object_vars($data)) && null !== ($data->singleSessionIdAcctEnabled ?? null)) {
            $dataArray['singleSessionIdAcctEnabled'] = $data->singleSessionIdAcctEnabled ?? null;
        }
        if (array_key_exists('vendorSpecificAttributeProfileId', get_object_vars($data)) && null !== ($data->vendorSpecificAttributeProfileId ?? null)) {
            $dataArray['vendorSpecificAttributeProfileId'] = $data->vendorSpecificAttributeProfileId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class => false];
    }
}