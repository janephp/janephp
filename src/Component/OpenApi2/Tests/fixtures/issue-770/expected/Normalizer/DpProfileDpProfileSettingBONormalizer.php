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
class DpProfileDpProfileSettingBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpProfileSettingBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpProfileSettingBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpProfileSettingBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dpVersion', $data)) {
            $object->dpVersion = $data['dpVersion'];
        }
        if (\array_key_exists('dhcpProfileId', $data)) {
            $object->dhcpProfileId = $data['dhcpProfileId'];
        }
        if (\array_key_exists('dhcpProfileName', $data)) {
            $object->dhcpProfileName = $data['dhcpProfileName'];
        }
        if (\array_key_exists('dpName', $data)) {
            $object->dpName = $data['dpName'];
        }
        if (\array_key_exists('dpKey', $data)) {
            $object->dpKey = $data['dpKey'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('natProfileId', $data)) {
            $object->natProfileId = $data['natProfileId'];
        }
        if (\array_key_exists('natProfileName', $data)) {
            $object->natProfileName = $data['natProfileName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dpVersion', get_object_vars($data)) && null !== ($data->dpVersion ?? null)) {
            $dataArray['dpVersion'] = $data->dpVersion ?? null;
        }
        if (array_key_exists('dhcpProfileId', get_object_vars($data)) && null !== ($data->dhcpProfileId ?? null)) {
            $dataArray['dhcpProfileId'] = $data->dhcpProfileId ?? null;
        }
        if (array_key_exists('dhcpProfileName', get_object_vars($data)) && null !== ($data->dhcpProfileName ?? null)) {
            $dataArray['dhcpProfileName'] = $data->dhcpProfileName ?? null;
        }
        if (array_key_exists('dpName', get_object_vars($data)) && null !== ($data->dpName ?? null)) {
            $dataArray['dpName'] = $data->dpName ?? null;
        }
        if (array_key_exists('dpKey', get_object_vars($data)) && null !== ($data->dpKey ?? null)) {
            $dataArray['dpKey'] = $data->dpKey ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('natProfileId', get_object_vars($data)) && null !== ($data->natProfileId ?? null)) {
            $dataArray['natProfileId'] = $data->natProfileId ?? null;
        }
        if (array_key_exists('natProfileName', get_object_vars($data)) && null !== ($data->natProfileName ?? null)) {
            $dataArray['natProfileName'] = $data->natProfileName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpProfileSettingBO::class => false];
    }
}