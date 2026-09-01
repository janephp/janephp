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
class PartnerAttachmentWritableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('connection_bandwidth_in_mbps', $data)) {
            $object->connectionBandwidthInMbps = $data['connection_bandwidth_in_mbps'];
            unset($data['connection_bandwidth_in_mbps']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('naas_provider', $data)) {
            $object->naasProvider = $data['naas_provider'];
            unset($data['naas_provider']);
        }
        if (\array_key_exists('vpc_ids', $data)) {
            $values = [];
            foreach ($data['vpc_ids'] as $value) {
                $values[] = $value;
            }
            $object->vpcIds = $values;
            unset($data['vpc_ids']);
        }
        if (\array_key_exists('parent_uuid', $data)) {
            $object->parentUuid = $data['parent_uuid'];
            unset($data['parent_uuid']);
        }
        if (\array_key_exists('bgp', $data)) {
            $object->bgp = $this->denormalizer->denormalize($data['bgp'], \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritableBgp::class, 'json', $context);
            unset($data['bgp']);
        }
        if (\array_key_exists('redundancy_zone', $data)) {
            $object->redundancyZone = $data['redundancy_zone'];
            unset($data['redundancy_zone']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        $dataArray['connection_bandwidth_in_mbps'] = $data->connectionBandwidthInMbps ?? null;
        $dataArray['region'] = $data->region ?? null;
        $dataArray['naas_provider'] = $data->naasProvider ?? null;
        $values = [];
        foreach ($data->vpcIds ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['vpc_ids'] = $values;
        if (array_key_exists('parentUuid', get_object_vars($data)) && null !== ($data->parentUuid ?? null)) {
            $dataArray['parent_uuid'] = $data->parentUuid ?? null;
        }
        if (array_key_exists('bgp', get_object_vars($data)) && null !== ($data->bgp ?? null)) {
            $dataArray['bgp'] = ($data->bgp ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->bgp ?? null, 'json', $context));
        }
        if (array_key_exists('redundancyZone', get_object_vars($data)) && null !== ($data->redundancyZone ?? null)) {
            $dataArray['redundancy_zone'] = $data->redundancyZone ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable::class => false];
    }
}