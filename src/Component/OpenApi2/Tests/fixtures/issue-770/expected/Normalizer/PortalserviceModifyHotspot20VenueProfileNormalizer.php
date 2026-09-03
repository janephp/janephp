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
class PortalserviceModifyHotspot20VenueProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20VenueProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20VenueProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20VenueProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('downlinkSpeedInKbps', $data) && \is_int($data['downlinkSpeedInKbps'])) {
            $data['downlinkSpeedInKbps'] = (float) $data['downlinkSpeedInKbps'];
        }
        if (\array_key_exists('uplinkSpeedInKbps', $data) && \is_int($data['uplinkSpeedInKbps'])) {
            $data['uplinkSpeedInKbps'] = (float) $data['uplinkSpeedInKbps'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('group', $data)) {
            $object->group = $data['group'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('downlinkSpeedInKbps', $data)) {
            $object->downlinkSpeedInKbps = $data['downlinkSpeedInKbps'];
        }
        if (\array_key_exists('uplinkSpeedInKbps', $data)) {
            $object->uplinkSpeedInKbps = $data['uplinkSpeedInKbps'];
        }
        if (\array_key_exists('venueNames', $data)) {
            $values = [];
            foreach ($data['venueNames'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceVenueName::class, 'json', $context);
            }
            $object->venueNames = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('group', get_object_vars($data)) && null !== ($data->group ?? null)) {
            $dataArray['group'] = $data->group ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('downlinkSpeedInKbps', get_object_vars($data)) && null !== ($data->downlinkSpeedInKbps ?? null)) {
            $dataArray['downlinkSpeedInKbps'] = $data->downlinkSpeedInKbps ?? null;
        }
        if (array_key_exists('uplinkSpeedInKbps', get_object_vars($data)) && null !== ($data->uplinkSpeedInKbps ?? null)) {
            $dataArray['uplinkSpeedInKbps'] = $data->uplinkSpeedInKbps ?? null;
        }
        if (array_key_exists('venueNames', get_object_vars($data)) && null !== ($data->venueNames ?? null)) {
            $values = [];
            foreach ($data->venueNames ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['venueNames'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20VenueProfile::class => false];
    }
}