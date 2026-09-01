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
class ApSyslogServerProfileCreateApSyslogServerProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileCreateApSyslogServerProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileCreateApSyslogServerProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileCreateApSyslogServerProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('primaryAddress', $data)) {
            $object->primaryAddress = $data['primaryAddress'];
        }
        if (\array_key_exists('primaryPort', $data)) {
            $object->primaryPort = $data['primaryPort'];
        }
        if (\array_key_exists('primaryProtocol', $data)) {
            $object->primaryProtocol = $data['primaryProtocol'];
        }
        if (\array_key_exists('secondaryAddress', $data)) {
            $object->secondaryAddress = $data['secondaryAddress'];
        }
        if (\array_key_exists('secondaryPort', $data)) {
            $object->secondaryPort = $data['secondaryPort'];
        }
        if (\array_key_exists('secondaryProtocol', $data)) {
            $object->secondaryProtocol = $data['secondaryProtocol'];
        }
        if (\array_key_exists('redundancyMode', $data)) {
            $object->redundancyMode = $data['redundancyMode'];
        }
        if (\array_key_exists('flowLevel', $data)) {
            $object->flowLevel = $data['flowLevel'];
        }
        if (\array_key_exists('facility', $data)) {
            $object->facility = $data['facility'];
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['domainId'] = $data->domainId ?? null;
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['primaryAddress'] = $data->primaryAddress ?? null;
        if (array_key_exists('primaryPort', get_object_vars($data)) && null !== ($data->primaryPort ?? null)) {
            $dataArray['primaryPort'] = $data->primaryPort ?? null;
        }
        if (array_key_exists('primaryProtocol', get_object_vars($data)) && null !== ($data->primaryProtocol ?? null)) {
            $dataArray['primaryProtocol'] = $data->primaryProtocol ?? null;
        }
        if (array_key_exists('secondaryAddress', get_object_vars($data)) && null !== ($data->secondaryAddress ?? null)) {
            $dataArray['secondaryAddress'] = $data->secondaryAddress ?? null;
        }
        if (array_key_exists('secondaryPort', get_object_vars($data)) && null !== ($data->secondaryPort ?? null)) {
            $dataArray['secondaryPort'] = $data->secondaryPort ?? null;
        }
        if (array_key_exists('secondaryProtocol', get_object_vars($data)) && null !== ($data->secondaryProtocol ?? null)) {
            $dataArray['secondaryProtocol'] = $data->secondaryProtocol ?? null;
        }
        if (array_key_exists('redundancyMode', get_object_vars($data)) && null !== ($data->redundancyMode ?? null)) {
            $dataArray['redundancyMode'] = $data->redundancyMode ?? null;
        }
        if (array_key_exists('flowLevel', get_object_vars($data)) && null !== ($data->flowLevel ?? null)) {
            $dataArray['flowLevel'] = $data->flowLevel ?? null;
        }
        if (array_key_exists('facility', get_object_vars($data)) && null !== ($data->facility ?? null)) {
            $dataArray['facility'] = $data->facility ?? null;
        }
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileCreateApSyslogServerProfile::class => false];
    }
}