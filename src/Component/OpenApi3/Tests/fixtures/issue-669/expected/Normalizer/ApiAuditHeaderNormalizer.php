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
class ApiAuditHeaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAuditHeader::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAuditHeader::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAuditHeader();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('actor_id', $data)) {
            $object->setActorId($data['actor_id']);
            unset($data['actor_id']);
        }
        if (\array_key_exists('actor_ip', $data)) {
            $object->setActorIp($data['actor_ip']);
            unset($data['actor_ip']);
        }
        if (\array_key_exists('actor_uuid', $data)) {
            $object->setActorUuid($data['actor_uuid']);
            unset($data['actor_uuid']);
        }
        if (\array_key_exists('context_urn', $data)) {
            $object->setContextUrn($data['context_urn']);
            unset($data['context_urn']);
        }
        if (\array_key_exists('origin_application', $data)) {
            $object->setOriginApplication($data['origin_application']);
            unset($data['origin_application']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        if (\array_key_exists('user_uuid', $data)) {
            $object->setUserUuid($data['user_uuid']);
            unset($data['user_uuid']);
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
        if ($data->isInitialized('actorId') && null !== $data->getActorId()) {
            $dataArray['actor_id'] = $data->getActorId();
        }
        if ($data->isInitialized('actorIp') && null !== $data->getActorIp()) {
            $dataArray['actor_ip'] = $data->getActorIp();
        }
        if ($data->isInitialized('actorUuid') && null !== $data->getActorUuid()) {
            $dataArray['actor_uuid'] = $data->getActorUuid();
        }
        if ($data->isInitialized('contextUrn') && null !== $data->getContextUrn()) {
            $dataArray['context_urn'] = $data->getContextUrn();
        }
        if ($data->isInitialized('originApplication') && null !== $data->getOriginApplication()) {
            $dataArray['origin_application'] = $data->getOriginApplication();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        if ($data->isInitialized('userUuid') && null !== $data->getUserUuid()) {
            $dataArray['user_uuid'] = $data->getUserUuid();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiAuditHeader::class => false];
    }
}