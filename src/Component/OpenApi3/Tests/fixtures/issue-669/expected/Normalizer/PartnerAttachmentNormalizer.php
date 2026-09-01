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
class PartnerAttachmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\PartnerAttachment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\PartnerAttachment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\PartnerAttachment();
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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('state', $data)) {
            $object->state = $data['state'];
            unset($data['state']);
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
        if (\array_key_exists('bgp', $data)) {
            $object->bgp = $this->denormalizer->denormalize($data['bgp'], \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp::class, 'json', $context);
            unset($data['bgp']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('parent_uuid', $data)) {
            $object->parentUuid = $data['parent_uuid'];
            unset($data['parent_uuid']);
        }
        if (\array_key_exists('children', $data)) {
            $values_1 = [];
            foreach ($data['children'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->children = $values_1;
            unset($data['children']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('connectionBandwidthInMbps', get_object_vars($data)) && null !== ($data->connectionBandwidthInMbps ?? null)) {
            $dataArray['connection_bandwidth_in_mbps'] = $data->connectionBandwidthInMbps ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('naasProvider', get_object_vars($data)) && null !== ($data->naasProvider ?? null)) {
            $dataArray['naas_provider'] = $data->naasProvider ?? null;
        }
        if (array_key_exists('vpcIds', get_object_vars($data)) && null !== ($data->vpcIds ?? null)) {
            $values = [];
            foreach ($data->vpcIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['vpc_ids'] = $values;
        }
        if (array_key_exists('bgp', get_object_vars($data)) && null !== ($data->bgp ?? null)) {
            $dataArray['bgp'] = ($data->bgp ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->bgp ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\PartnerAttachment::class => false];
    }
}