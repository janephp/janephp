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
class SystemFtpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtp();
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
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->tenantId = $data['tenantId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('ftpHost', $data)) {
            $object->ftpHost = $data['ftpHost'];
        }
        if (\array_key_exists('ftpPort', $data)) {
            $object->ftpPort = $data['ftpPort'];
        }
        if (\array_key_exists('ftpRemoteDirectory', $data)) {
            $object->ftpRemoteDirectory = $data['ftpRemoteDirectory'];
        }
        if (\array_key_exists('ftpUserName', $data)) {
            $object->ftpUserName = $data['ftpUserName'];
        }
        if (\array_key_exists('ftpPassword', $data)) {
            $object->ftpPassword = $data['ftpPassword'];
        }
        if (\array_key_exists('creatorUUID', $data)) {
            $object->creatorUUID = $data['creatorUUID'];
        }
        if (\array_key_exists('createDatetime', $data)) {
            $object->createDatetime = $data['createDatetime'];
        }
        if (\array_key_exists('lastModifiedBy', $data)) {
            $object->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (\array_key_exists('lastModifiedOn', $data)) {
            $object->lastModifiedOn = $data['lastModifiedOn'];
        }
        if (\array_key_exists('ftpName', $data)) {
            $object->ftpName = $data['ftpName'];
        }
        if (\array_key_exists('ftpProtocol', $data)) {
            $object->ftpProtocol = $data['ftpProtocol'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('tenantId', get_object_vars($data)) && null !== ($data->tenantId ?? null)) {
            $dataArray['tenantId'] = $data->tenantId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('ftpHost', get_object_vars($data)) && null !== ($data->ftpHost ?? null)) {
            $dataArray['ftpHost'] = $data->ftpHost ?? null;
        }
        if (array_key_exists('ftpPort', get_object_vars($data)) && null !== ($data->ftpPort ?? null)) {
            $dataArray['ftpPort'] = $data->ftpPort ?? null;
        }
        if (array_key_exists('ftpRemoteDirectory', get_object_vars($data)) && null !== ($data->ftpRemoteDirectory ?? null)) {
            $dataArray['ftpRemoteDirectory'] = $data->ftpRemoteDirectory ?? null;
        }
        if (array_key_exists('ftpUserName', get_object_vars($data)) && null !== ($data->ftpUserName ?? null)) {
            $dataArray['ftpUserName'] = $data->ftpUserName ?? null;
        }
        if (array_key_exists('ftpPassword', get_object_vars($data)) && null !== ($data->ftpPassword ?? null)) {
            $dataArray['ftpPassword'] = $data->ftpPassword ?? null;
        }
        if (array_key_exists('creatorUUID', get_object_vars($data)) && null !== ($data->creatorUUID ?? null)) {
            $dataArray['creatorUUID'] = $data->creatorUUID ?? null;
        }
        if (array_key_exists('createDatetime', get_object_vars($data)) && null !== ($data->createDatetime ?? null)) {
            $dataArray['createDatetime'] = $data->createDatetime ?? null;
        }
        if (array_key_exists('lastModifiedBy', get_object_vars($data)) && null !== ($data->lastModifiedBy ?? null)) {
            $dataArray['lastModifiedBy'] = $data->lastModifiedBy ?? null;
        }
        if (array_key_exists('lastModifiedOn', get_object_vars($data)) && null !== ($data->lastModifiedOn ?? null)) {
            $dataArray['lastModifiedOn'] = $data->lastModifiedOn ?? null;
        }
        if (array_key_exists('ftpName', get_object_vars($data)) && null !== ($data->ftpName ?? null)) {
            $dataArray['ftpName'] = $data->ftpName ?? null;
        }
        if (array_key_exists('ftpProtocol', get_object_vars($data)) && null !== ($data->ftpProtocol ?? null)) {
            $dataArray['ftpProtocol'] = $data->ftpProtocol ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtp::class => false];
    }
}