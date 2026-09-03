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
class DpskDpskQueryListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskQueryListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskQueryListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskQueryListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ttl', $data) && \is_int($data['ttl'])) {
            $data['ttl'] = (float) $data['ttl'];
        }
        if (\array_key_exists('expirationStartTime', $data) && \is_int($data['expirationStartTime'])) {
            $data['expirationStartTime'] = (float) $data['expirationStartTime'];
        }
        if (\array_key_exists('expirationTime', $data) && \is_int($data['expirationTime'])) {
            $data['expirationTime'] = (float) $data['expirationTime'];
        }
        if (\array_key_exists('createDateTime', $data) && \is_int($data['createDateTime'])) {
            $data['createDateTime'] = (float) $data['createDateTime'];
        }
        if (\array_key_exists('group', $data) && \is_int($data['group'])) {
            $data['group'] = (bool) $data['group'];
        }
        if (\array_key_exists('expired', $data) && \is_int($data['expired'])) {
            $data['expired'] = (bool) $data['expired'];
        }
        if (\array_key_exists('key', $data)) {
            $object->key = $data['key'];
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->tenantId = $data['tenantId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->wlanId = $data['wlanId'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('ueMac', $data)) {
            $object->ueMac = $data['ueMac'];
        }
        if (\array_key_exists('userRoleId', $data)) {
            $object->userRoleId = $data['userRoleId'];
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->vlanId = $data['vlanId'];
        }
        if (\array_key_exists('group', $data)) {
            $object->group = $data['group'];
        }
        if (\array_key_exists('expired', $data)) {
            $object->expired = $data['expired'];
        }
        if (\array_key_exists('ttl', $data)) {
            $object->ttl = $data['ttl'];
        }
        if (\array_key_exists('expirationStartTime', $data)) {
            $object->expirationStartTime = $data['expirationStartTime'];
        }
        if (\array_key_exists('expirationTime', $data)) {
            $object->expirationTime = $data['expirationTime'];
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('key', get_object_vars($data)) && null !== ($data->key ?? null)) {
            $dataArray['key'] = $data->key ?? null;
        }
        if (array_key_exists('tenantId', get_object_vars($data)) && null !== ($data->tenantId ?? null)) {
            $dataArray['tenantId'] = $data->tenantId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('wlanId', get_object_vars($data)) && null !== ($data->wlanId ?? null)) {
            $dataArray['wlanId'] = $data->wlanId ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('ueMac', get_object_vars($data)) && null !== ($data->ueMac ?? null)) {
            $dataArray['ueMac'] = $data->ueMac ?? null;
        }
        if (array_key_exists('userRoleId', get_object_vars($data)) && null !== ($data->userRoleId ?? null)) {
            $dataArray['userRoleId'] = $data->userRoleId ?? null;
        }
        if (array_key_exists('vlanId', get_object_vars($data)) && null !== ($data->vlanId ?? null)) {
            $dataArray['vlanId'] = $data->vlanId ?? null;
        }
        if (array_key_exists('group', get_object_vars($data)) && null !== ($data->group ?? null)) {
            $dataArray['group'] = $data->group ?? null;
        }
        if (array_key_exists('expired', get_object_vars($data)) && null !== ($data->expired ?? null)) {
            $dataArray['expired'] = $data->expired ?? null;
        }
        if (array_key_exists('ttl', get_object_vars($data)) && null !== ($data->ttl ?? null)) {
            $dataArray['ttl'] = $data->ttl ?? null;
        }
        if (array_key_exists('expirationStartTime', get_object_vars($data)) && null !== ($data->expirationStartTime ?? null)) {
            $dataArray['expirationStartTime'] = $data->expirationStartTime ?? null;
        }
        if (array_key_exists('expirationTime', get_object_vars($data)) && null !== ($data->expirationTime ?? null)) {
            $dataArray['expirationTime'] = $data->expirationTime ?? null;
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskQueryListListItem::class => false];
    }
}