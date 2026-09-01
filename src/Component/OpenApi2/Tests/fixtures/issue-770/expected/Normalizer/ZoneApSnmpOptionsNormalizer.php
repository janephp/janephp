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
class ZoneApSnmpOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apSnmpEnabled', $data) && \is_int($data['apSnmpEnabled'])) {
            $data['apSnmpEnabled'] = (bool) $data['apSnmpEnabled'];
        }
        if (\array_key_exists('apSnmpEnabled', $data)) {
            $object->apSnmpEnabled = $data['apSnmpEnabled'];
        }
        if (\array_key_exists('snmpConfigType', $data)) {
            $object->snmpConfigType = $data['snmpConfigType'];
        }
        if (\array_key_exists('apSnmpAgentProfileId', $data)) {
            $object->apSnmpAgentProfileId = $data['apSnmpAgentProfileId'];
        }
        if (\array_key_exists('snmpV2Agent', $data)) {
            $values = [];
            foreach ($data['snmpV2Agent'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpCommunity::class, 'json', $context);
            }
            $object->snmpV2Agent = $values;
        }
        if (\array_key_exists('snmpV3Agent', $data)) {
            $values_1 = [];
            foreach ($data['snmpV3Agent'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSnmpUser::class, 'json', $context);
            }
            $object->snmpV3Agent = $values_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apSnmpEnabled', get_object_vars($data)) && null !== ($data->apSnmpEnabled ?? null)) {
            $dataArray['apSnmpEnabled'] = $data->apSnmpEnabled ?? null;
        }
        if (array_key_exists('snmpConfigType', get_object_vars($data)) && null !== ($data->snmpConfigType ?? null)) {
            $dataArray['snmpConfigType'] = $data->snmpConfigType ?? null;
        }
        if (array_key_exists('apSnmpAgentProfileId', get_object_vars($data)) && null !== ($data->apSnmpAgentProfileId ?? null)) {
            $dataArray['apSnmpAgentProfileId'] = $data->apSnmpAgentProfileId ?? null;
        }
        if (array_key_exists('snmpV2Agent', get_object_vars($data)) && null !== ($data->snmpV2Agent ?? null)) {
            $values = [];
            foreach ($data->snmpV2Agent ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['snmpV2Agent'] = $values;
        }
        if (array_key_exists('snmpV3Agent', get_object_vars($data)) && null !== ($data->snmpV3Agent ?? null)) {
            $values_1 = [];
            foreach ($data->snmpV3Agent ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['snmpV3Agent'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions::class => false];
    }
}