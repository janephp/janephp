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
class NorthboundDataStreamingModifyNorthboundDataStreamingProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingModifyNorthboundDataStreamingProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingModifyNorthboundDataStreamingProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingModifyNorthboundDataStreamingProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('northboundDataStreamingEnabled', $data) && \is_int($data['northboundDataStreamingEnabled'])) {
            $data['northboundDataStreamingEnabled'] = (bool) $data['northboundDataStreamingEnabled'];
        }
        if (\array_key_exists('streamingByDomainZoneEnabled', $data) && \is_int($data['streamingByDomainZoneEnabled'])) {
            $data['streamingByDomainZoneEnabled'] = (bool) $data['streamingByDomainZoneEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('serverHost', $data)) {
            $object->serverHost = $data['serverHost'];
        }
        if (\array_key_exists('serverPort', $data)) {
            $object->serverPort = $data['serverPort'];
        }
        if (\array_key_exists('user', $data)) {
            $object->user = $data['user'];
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
        }
        if (\array_key_exists('systemId', $data)) {
            $object->systemId = $data['systemId'];
        }
        if (\array_key_exists('dataTypes', $data)) {
            $values = [];
            foreach ($data['dataTypes'] as $value) {
                $values[] = $value;
            }
            $object->dataTypes = $values;
        }
        if (\array_key_exists('northboundDataStreamingEnabled', $data)) {
            $object->northboundDataStreamingEnabled = $data['northboundDataStreamingEnabled'];
        }
        if (\array_key_exists('streamingByDomainZoneEnabled', $data)) {
            $object->streamingByDomainZoneEnabled = $data['streamingByDomainZoneEnabled'];
        }
        if (\array_key_exists('streamingDomainIds', $data)) {
            $values_1 = [];
            foreach ($data['streamingDomainIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->streamingDomainIds = $values_1;
        }
        if (\array_key_exists('streamingZoneIds', $data)) {
            $values_2 = [];
            foreach ($data['streamingZoneIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->streamingZoneIds = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        $dataArray['serverHost'] = $data->serverHost ?? null;
        $dataArray['serverPort'] = $data->serverPort ?? null;
        $dataArray['user'] = $data->user ?? null;
        $dataArray['password'] = $data->password ?? null;
        $dataArray['systemId'] = $data->systemId ?? null;
        if (array_key_exists('dataTypes', get_object_vars($data)) && null !== ($data->dataTypes ?? null)) {
            $values = [];
            foreach ($data->dataTypes ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['dataTypes'] = $values;
        }
        if (array_key_exists('northboundDataStreamingEnabled', get_object_vars($data)) && null !== ($data->northboundDataStreamingEnabled ?? null)) {
            $dataArray['northboundDataStreamingEnabled'] = $data->northboundDataStreamingEnabled ?? null;
        }
        if (array_key_exists('streamingByDomainZoneEnabled', get_object_vars($data)) && null !== ($data->streamingByDomainZoneEnabled ?? null)) {
            $dataArray['streamingByDomainZoneEnabled'] = $data->streamingByDomainZoneEnabled ?? null;
        }
        if (array_key_exists('streamingDomainIds', get_object_vars($data)) && null !== ($data->streamingDomainIds ?? null)) {
            $values_1 = [];
            foreach ($data->streamingDomainIds ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['streamingDomainIds'] = $values_1;
        }
        if (array_key_exists('streamingZoneIds', get_object_vars($data)) && null !== ($data->streamingZoneIds ?? null)) {
            $values_2 = [];
            foreach ($data->streamingZoneIds ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['streamingZoneIds'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingModifyNorthboundDataStreamingProfile::class => false];
    }
}