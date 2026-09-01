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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('zeroTouchStatus', $data) && \is_int($data['zeroTouchStatus'])) {
            $data['zeroTouchStatus'] = (bool) $data['zeroTouchStatus'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('domainType', $data)) {
            $object->domainType = $data['domainType'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('createdBy', $data)) {
            $object->createdBy = $data['createdBy'];
        }
        if (\array_key_exists('createDatetime', $data)) {
            $object->createDatetime = $data['createDatetime'];
        }
        if (\array_key_exists('zoneCount', $data)) {
            $object->zoneCount = $data['zoneCount'];
        }
        if (\array_key_exists('subDomainCount', $data)) {
            $object->subDomainCount = $data['subDomainCount'];
        }
        if (\array_key_exists('administratorCount', $data)) {
            $object->administratorCount = $data['administratorCount'];
        }
        if (\array_key_exists('apCount', $data)) {
            $object->apCount = $data['apCount'];
        }
        if (\array_key_exists('parentDomainId', $data)) {
            $object->parentDomainId = $data['parentDomainId'];
        }
        if (\array_key_exists('zeroTouchStatus', $data)) {
            $object->zeroTouchStatus = $data['zeroTouchStatus'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('domainType', get_object_vars($data)) && null !== ($data->domainType ?? null)) {
            $dataArray['domainType'] = $data->domainType ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('createdBy', get_object_vars($data)) && null !== ($data->createdBy ?? null)) {
            $dataArray['createdBy'] = $data->createdBy ?? null;
        }
        if (array_key_exists('createDatetime', get_object_vars($data)) && null !== ($data->createDatetime ?? null)) {
            $dataArray['createDatetime'] = $data->createDatetime ?? null;
        }
        if (array_key_exists('zoneCount', get_object_vars($data)) && null !== ($data->zoneCount ?? null)) {
            $dataArray['zoneCount'] = $data->zoneCount ?? null;
        }
        if (array_key_exists('subDomainCount', get_object_vars($data)) && null !== ($data->subDomainCount ?? null)) {
            $dataArray['subDomainCount'] = $data->subDomainCount ?? null;
        }
        if (array_key_exists('administratorCount', get_object_vars($data)) && null !== ($data->administratorCount ?? null)) {
            $dataArray['administratorCount'] = $data->administratorCount ?? null;
        }
        if (array_key_exists('apCount', get_object_vars($data)) && null !== ($data->apCount ?? null)) {
            $dataArray['apCount'] = $data->apCount ?? null;
        }
        if (array_key_exists('parentDomainId', get_object_vars($data)) && null !== ($data->parentDomainId ?? null)) {
            $dataArray['parentDomainId'] = $data->parentDomainId ?? null;
        }
        if (array_key_exists('zeroTouchStatus', get_object_vars($data)) && null !== ($data->zeroTouchStatus ?? null)) {
            $dataArray['zeroTouchStatus'] = $data->zeroTouchStatus ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration::class => false];
    }
}