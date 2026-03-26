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
class DpProfileDpProfileSettingBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpProfileSettingBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpProfileSettingBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpProfileSettingBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dpVersion', $data)) {
            $object->setDpVersion($data['dpVersion']);
        }
        if (\array_key_exists('dhcpProfileId', $data)) {
            $object->setDhcpProfileId($data['dhcpProfileId']);
        }
        if (\array_key_exists('dhcpProfileName', $data)) {
            $object->setDhcpProfileName($data['dhcpProfileName']);
        }
        if (\array_key_exists('dpName', $data)) {
            $object->setDpName($data['dpName']);
        }
        if (\array_key_exists('dpKey', $data)) {
            $object->setDpKey($data['dpKey']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('natProfileId', $data)) {
            $object->setNatProfileId($data['natProfileId']);
        }
        if (\array_key_exists('natProfileName', $data)) {
            $object->setNatProfileName($data['natProfileName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dpVersion') && null !== $data->getDpVersion()) {
            $dataArray['dpVersion'] = $data->getDpVersion();
        }
        if ($data->isInitialized('dhcpProfileId') && null !== $data->getDhcpProfileId()) {
            $dataArray['dhcpProfileId'] = $data->getDhcpProfileId();
        }
        if ($data->isInitialized('dhcpProfileName') && null !== $data->getDhcpProfileName()) {
            $dataArray['dhcpProfileName'] = $data->getDhcpProfileName();
        }
        if ($data->isInitialized('dpName') && null !== $data->getDpName()) {
            $dataArray['dpName'] = $data->getDpName();
        }
        if ($data->isInitialized('dpKey') && null !== $data->getDpKey()) {
            $dataArray['dpKey'] = $data->getDpKey();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('natProfileId') && null !== $data->getNatProfileId()) {
            $dataArray['natProfileId'] = $data->getNatProfileId();
        }
        if ($data->isInitialized('natProfileName') && null !== $data->getNatProfileName()) {
            $dataArray['natProfileName'] = $data->getNatProfileName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpProfileSettingBO::class => false];
    }
}