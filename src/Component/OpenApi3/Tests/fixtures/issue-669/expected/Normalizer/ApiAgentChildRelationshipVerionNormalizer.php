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
class ApiAgentChildRelationshipVerionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_deleted', $data) && \is_int($data['is_deleted'])) {
            $data['is_deleted'] = (bool) $data['is_deleted'];
        }
        if (\array_key_exists('agent_name', $data)) {
            $object->agentName = $data['agent_name'];
            unset($data['agent_name']);
        }
        if (\array_key_exists('child_agent_uuid', $data)) {
            $object->childAgentUuid = $data['child_agent_uuid'];
            unset($data['child_agent_uuid']);
        }
        if (\array_key_exists('if_case', $data)) {
            $object->ifCase = $data['if_case'];
            unset($data['if_case']);
        }
        if (\array_key_exists('is_deleted', $data)) {
            $object->isDeleted = $data['is_deleted'];
            unset($data['is_deleted']);
        }
        if (\array_key_exists('route_name', $data)) {
            $object->routeName = $data['route_name'];
            unset($data['route_name']);
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
        if (array_key_exists('agentName', get_object_vars($data)) && null !== ($data->agentName ?? null)) {
            $dataArray['agent_name'] = $data->agentName ?? null;
        }
        if (array_key_exists('childAgentUuid', get_object_vars($data)) && null !== ($data->childAgentUuid ?? null)) {
            $dataArray['child_agent_uuid'] = $data->childAgentUuid ?? null;
        }
        if (array_key_exists('ifCase', get_object_vars($data)) && null !== ($data->ifCase ?? null)) {
            $dataArray['if_case'] = $data->ifCase ?? null;
        }
        if (array_key_exists('isDeleted', get_object_vars($data)) && null !== ($data->isDeleted ?? null)) {
            $dataArray['is_deleted'] = $data->isDeleted ?? null;
        }
        if (array_key_exists('routeName', get_object_vars($data)) && null !== ($data->routeName ?? null)) {
            $dataArray['route_name'] = $data->routeName ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class => false];
    }
}