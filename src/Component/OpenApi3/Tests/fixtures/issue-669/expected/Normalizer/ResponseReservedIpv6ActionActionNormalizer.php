<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ResponseReservedIpv6ActionActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6ActionAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6ActionAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6ActionAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('started_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setStartedAt($date);
            unset($data['started_at']);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCompletedAt($date_1);
            unset($data['completed_at']);
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
            unset($data['completed_at']);
        }
        if (\array_key_exists('resource_id', $data)) {
            $object->setResourceId($data['resource_id']);
            unset($data['resource_id']);
        }
        if (\array_key_exists('resource_type', $data)) {
            $object->setResourceType($data['resource_type']);
            unset($data['resource_type']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], \Jane\Generated\DigitalOcean\Model\Region::class, 'json', $context));
            unset($data['region']);
        }
        if (\array_key_exists('region_slug', $data)) {
            $object->setRegionSlug($data['region_slug']);
            unset($data['region_slug']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['started_at'] = $data->getStartedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('completedAt') && null !== $data->getCompletedAt()) {
            $dataArray['completed_at'] = $data->getCompletedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('resourceId') && null !== $data->getResourceId()) {
            $dataArray['resource_id'] = $data->getResourceId();
        }
        if ($data->isInitialized('resourceType') && null !== $data->getResourceType()) {
            $dataArray['resource_type'] = $data->getResourceType();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getRegion(), 'json', $context));
        }
        if ($data->isInitialized('regionSlug') && null !== $data->getRegionSlug()) {
            $dataArray['region_slug'] = $data->getRegionSlug();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6ActionAction::class => false];
    }
}