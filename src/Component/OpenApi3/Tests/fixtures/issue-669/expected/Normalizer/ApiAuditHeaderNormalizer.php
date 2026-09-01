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
            $object->actorId = $data['actor_id'];
            unset($data['actor_id']);
        }
        if (\array_key_exists('actor_ip', $data)) {
            $object->actorIp = $data['actor_ip'];
            unset($data['actor_ip']);
        }
        if (\array_key_exists('actor_uuid', $data)) {
            $object->actorUuid = $data['actor_uuid'];
            unset($data['actor_uuid']);
        }
        if (\array_key_exists('context_urn', $data)) {
            $object->contextUrn = $data['context_urn'];
            unset($data['context_urn']);
        }
        if (\array_key_exists('origin_application', $data)) {
            $object->originApplication = $data['origin_application'];
            unset($data['origin_application']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->userId = $data['user_id'];
            unset($data['user_id']);
        }
        if (\array_key_exists('user_uuid', $data)) {
            $object->userUuid = $data['user_uuid'];
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
        if (array_key_exists('actorId', get_object_vars($data)) && null !== ($data->actorId ?? null)) {
            $dataArray['actor_id'] = $data->actorId ?? null;
        }
        if (array_key_exists('actorIp', get_object_vars($data)) && null !== ($data->actorIp ?? null)) {
            $dataArray['actor_ip'] = $data->actorIp ?? null;
        }
        if (array_key_exists('actorUuid', get_object_vars($data)) && null !== ($data->actorUuid ?? null)) {
            $dataArray['actor_uuid'] = $data->actorUuid ?? null;
        }
        if (array_key_exists('contextUrn', get_object_vars($data)) && null !== ($data->contextUrn ?? null)) {
            $dataArray['context_urn'] = $data->contextUrn ?? null;
        }
        if (array_key_exists('originApplication', get_object_vars($data)) && null !== ($data->originApplication ?? null)) {
            $dataArray['origin_application'] = $data->originApplication ?? null;
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['user_id'] = $data->userId ?? null;
        }
        if (array_key_exists('userUuid', get_object_vars($data)) && null !== ($data->userUuid ?? null)) {
            $dataArray['user_uuid'] = $data->userUuid ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiAuditHeader::class => false];
    }
}