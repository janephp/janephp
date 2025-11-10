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
class SystemApNumberLimitSettingOfZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfZone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfZone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfZone();
        if (\array_key_exists('shared', $data) && \is_int($data['shared'])) {
            $data['shared'] = (bool) $data['shared'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        if (\array_key_exists('numberLimit', $data)) {
            $object->setNumberLimit($data['numberLimit']);
        }
        if (\array_key_exists('shared', $data)) {
            $object->setShared($data['shared']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('zoneName') && null !== $data->getZoneName()) {
            $dataArray['zoneName'] = $data->getZoneName();
        }
        if ($data->isInitialized('numberLimit') && null !== $data->getNumberLimit()) {
            $dataArray['numberLimit'] = $data->getNumberLimit();
        }
        if ($data->isInitialized('shared') && null !== $data->getShared()) {
            $dataArray['shared'] = $data->getShared();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfZone::class => false];
    }
}