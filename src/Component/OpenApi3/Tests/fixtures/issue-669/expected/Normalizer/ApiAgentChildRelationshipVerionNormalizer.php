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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion();
        if (\array_key_exists('is_deleted', $data) && \is_int($data['is_deleted'])) {
            $data['is_deleted'] = (bool) $data['is_deleted'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('agent_name', $data)) {
            $object->setAgentName($data['agent_name']);
            unset($data['agent_name']);
        }
        if (\array_key_exists('child_agent_uuid', $data)) {
            $object->setChildAgentUuid($data['child_agent_uuid']);
            unset($data['child_agent_uuid']);
        }
        if (\array_key_exists('if_case', $data)) {
            $object->setIfCase($data['if_case']);
            unset($data['if_case']);
        }
        if (\array_key_exists('is_deleted', $data)) {
            $object->setIsDeleted($data['is_deleted']);
            unset($data['is_deleted']);
        }
        if (\array_key_exists('route_name', $data)) {
            $object->setRouteName($data['route_name']);
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
        if ($data->isInitialized('agentName') && null !== $data->getAgentName()) {
            $dataArray['agent_name'] = $data->getAgentName();
        }
        if ($data->isInitialized('childAgentUuid') && null !== $data->getChildAgentUuid()) {
            $dataArray['child_agent_uuid'] = $data->getChildAgentUuid();
        }
        if ($data->isInitialized('ifCase') && null !== $data->getIfCase()) {
            $dataArray['if_case'] = $data->getIfCase();
        }
        if ($data->isInitialized('isDeleted') && null !== $data->getIsDeleted()) {
            $dataArray['is_deleted'] = $data->getIsDeleted();
        }
        if ($data->isInitialized('routeName') && null !== $data->getRouteName()) {
            $dataArray['route_name'] = $data->getRouteName();
        }
        foreach ($data as $key => $value) {
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