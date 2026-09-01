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
class MduSegmentationProfileMduProfileDpInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enabledRedundant', $data) && \is_int($data['enabledRedundant'])) {
            $data['enabledRedundant'] = (bool) $data['enabledRedundant'];
        }
        if (\array_key_exists('dpId', $data)) {
            $object->dpId = $data['dpId'];
        }
        if (\array_key_exists('vniRange', $data)) {
            $object->vniRange = $data['vniRange'];
        }
        if (\array_key_exists('dhcpProfileId', $data)) {
            $object->dhcpProfileId = $data['dhcpProfileId'];
        }
        if (\array_key_exists('dhcpPoolId', $data)) {
            $object->dhcpPoolId = $data['dhcpPoolId'];
        }
        if (\array_key_exists('natProfileId', $data)) {
            $object->natProfileId = $data['natProfileId'];
        }
        if (\array_key_exists('natPoolId', $data)) {
            $object->natPoolId = $data['natPoolId'];
        }
        if (\array_key_exists('enabledRedundant', $data)) {
            $object->enabledRedundant = $data['enabledRedundant'];
        }
        if (\array_key_exists('redundantDpId', $data)) {
            $object->redundantDpId = $data['redundantDpId'];
        }
        if (\array_key_exists('redundantDhcpProfileId', $data)) {
            $object->redundantDhcpProfileId = $data['redundantDhcpProfileId'];
        }
        if (\array_key_exists('redundantDhcpPoolId', $data)) {
            $object->redundantDhcpPoolId = $data['redundantDhcpPoolId'];
        }
        if (\array_key_exists('redundantNatProfileId', $data)) {
            $object->redundantNatProfileId = $data['redundantNatProfileId'];
        }
        if (\array_key_exists('redundantNatPoolId', $data)) {
            $object->redundantNatPoolId = $data['redundantNatPoolId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['dpId'] = $data->dpId ?? null;
        if (array_key_exists('vniRange', get_object_vars($data)) && null !== ($data->vniRange ?? null)) {
            $dataArray['vniRange'] = $data->vniRange ?? null;
        }
        if (array_key_exists('dhcpProfileId', get_object_vars($data)) && null !== ($data->dhcpProfileId ?? null)) {
            $dataArray['dhcpProfileId'] = $data->dhcpProfileId ?? null;
        }
        if (array_key_exists('dhcpPoolId', get_object_vars($data)) && null !== ($data->dhcpPoolId ?? null)) {
            $dataArray['dhcpPoolId'] = $data->dhcpPoolId ?? null;
        }
        if (array_key_exists('natProfileId', get_object_vars($data)) && null !== ($data->natProfileId ?? null)) {
            $dataArray['natProfileId'] = $data->natProfileId ?? null;
        }
        if (array_key_exists('natPoolId', get_object_vars($data)) && null !== ($data->natPoolId ?? null)) {
            $dataArray['natPoolId'] = $data->natPoolId ?? null;
        }
        if (array_key_exists('enabledRedundant', get_object_vars($data)) && null !== ($data->enabledRedundant ?? null)) {
            $dataArray['enabledRedundant'] = $data->enabledRedundant ?? null;
        }
        if (array_key_exists('redundantDpId', get_object_vars($data)) && null !== ($data->redundantDpId ?? null)) {
            $dataArray['redundantDpId'] = $data->redundantDpId ?? null;
        }
        if (array_key_exists('redundantDhcpProfileId', get_object_vars($data)) && null !== ($data->redundantDhcpProfileId ?? null)) {
            $dataArray['redundantDhcpProfileId'] = $data->redundantDhcpProfileId ?? null;
        }
        if (array_key_exists('redundantDhcpPoolId', get_object_vars($data)) && null !== ($data->redundantDhcpPoolId ?? null)) {
            $dataArray['redundantDhcpPoolId'] = $data->redundantDhcpPoolId ?? null;
        }
        if (array_key_exists('redundantNatProfileId', get_object_vars($data)) && null !== ($data->redundantNatProfileId ?? null)) {
            $dataArray['redundantNatProfileId'] = $data->redundantNatProfileId ?? null;
        }
        if (array_key_exists('redundantNatPoolId', get_object_vars($data)) && null !== ($data->redundantNatPoolId ?? null)) {
            $dataArray['redundantNatPoolId'] = $data->redundantNatPoolId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfo::class => false];
    }
}