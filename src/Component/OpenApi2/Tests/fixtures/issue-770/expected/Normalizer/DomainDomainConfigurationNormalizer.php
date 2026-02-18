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
class DomainDomainConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration();
        if (\array_key_exists('zeroTouchStatus', $data) && \is_int($data['zeroTouchStatus'])) {
            $data['zeroTouchStatus'] = (bool) $data['zeroTouchStatus'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('domainType', $data)) {
            $object->setDomainType($data['domainType']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->setCreatedBy($data['createdBy']);
        }
        if (\array_key_exists('createDatetime', $data)) {
            $object->setCreateDatetime($data['createDatetime']);
        }
        if (\array_key_exists('zoneCount', $data)) {
            $object->setZoneCount($data['zoneCount']);
        }
        if (\array_key_exists('subDomainCount', $data)) {
            $object->setSubDomainCount($data['subDomainCount']);
        }
        if (\array_key_exists('administratorCount', $data)) {
            $object->setAdministratorCount($data['administratorCount']);
        }
        if (\array_key_exists('apCount', $data)) {
            $object->setApCount($data['apCount']);
        }
        if (\array_key_exists('parentDomainId', $data)) {
            $object->setParentDomainId($data['parentDomainId']);
        }
        if (\array_key_exists('zeroTouchStatus', $data)) {
            $object->setZeroTouchStatus($data['zeroTouchStatus']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('domainType') && null !== $data->getDomainType()) {
            $dataArray['domainType'] = $data->getDomainType();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['createdBy'] = $data->getCreatedBy();
        }
        if ($data->isInitialized('createDatetime') && null !== $data->getCreateDatetime()) {
            $dataArray['createDatetime'] = $data->getCreateDatetime();
        }
        if ($data->isInitialized('zoneCount') && null !== $data->getZoneCount()) {
            $dataArray['zoneCount'] = $data->getZoneCount();
        }
        if ($data->isInitialized('subDomainCount') && null !== $data->getSubDomainCount()) {
            $dataArray['subDomainCount'] = $data->getSubDomainCount();
        }
        if ($data->isInitialized('administratorCount') && null !== $data->getAdministratorCount()) {
            $dataArray['administratorCount'] = $data->getAdministratorCount();
        }
        if ($data->isInitialized('apCount') && null !== $data->getApCount()) {
            $dataArray['apCount'] = $data->getApCount();
        }
        if ($data->isInitialized('parentDomainId') && null !== $data->getParentDomainId()) {
            $dataArray['parentDomainId'] = $data->getParentDomainId();
        }
        if ($data->isInitialized('zeroTouchStatus') && null !== $data->getZeroTouchStatus()) {
            $dataArray['zeroTouchStatus'] = $data->getZeroTouchStatus();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration::class => false];
    }
}