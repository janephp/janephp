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
class ApiUpdateLinkedAgentInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('child_agent_uuid', $data)) {
            $object->childAgentUuid = $data['child_agent_uuid'];
            unset($data['child_agent_uuid']);
        }
        if (\array_key_exists('if_case', $data)) {
            $object->ifCase = $data['if_case'];
            unset($data['if_case']);
        }
        if (\array_key_exists('parent_agent_uuid', $data)) {
            $object->parentAgentUuid = $data['parent_agent_uuid'];
            unset($data['parent_agent_uuid']);
        }
        if (\array_key_exists('route_name', $data)) {
            $object->routeName = $data['route_name'];
            unset($data['route_name']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
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
        if (array_key_exists('childAgentUuid', get_object_vars($data)) && null !== ($data->childAgentUuid ?? null)) {
            $dataArray['child_agent_uuid'] = $data->childAgentUuid ?? null;
        }
        if (array_key_exists('ifCase', get_object_vars($data)) && null !== ($data->ifCase ?? null)) {
            $dataArray['if_case'] = $data->ifCase ?? null;
        }
        if (array_key_exists('parentAgentUuid', get_object_vars($data)) && null !== ($data->parentAgentUuid ?? null)) {
            $dataArray['parent_agent_uuid'] = $data->parentAgentUuid ?? null;
        }
        if (array_key_exists('routeName', get_object_vars($data)) && null !== ($data->routeName ?? null)) {
            $dataArray['route_name'] = $data->routeName ?? null;
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic::class => false];
    }
}