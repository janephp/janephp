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
class DpskDpskInfoItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskInfoItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskInfoItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskInfoItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('creationDateTime', $data) && \is_int($data['creationDateTime'])) {
            $data['creationDateTime'] = (float) $data['creationDateTime'];
        }
        if (\array_key_exists('groupDpsk', $data) && \is_int($data['groupDpsk'])) {
            $data['groupDpsk'] = (bool) $data['groupDpsk'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->wlanId = $data['wlanId'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('macAddress', $data)) {
            $object->macAddress = $data['macAddress'];
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->passphrase = $data['passphrase'];
        }
        if (\array_key_exists('userRoleId', $data)) {
            $object->userRoleId = $data['userRoleId'];
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->vlanId = $data['vlanId'];
        }
        if (\array_key_exists('groupDpsk', $data)) {
            $object->groupDpsk = $data['groupDpsk'];
        }
        if (\array_key_exists('creationDateTime', $data)) {
            $object->creationDateTime = $data['creationDateTime'];
        }
        if (\array_key_exists('expirationDateTime', $data)) {
            $object->expirationDateTime = $data['expirationDateTime'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('wlanId', get_object_vars($data)) && null !== ($data->wlanId ?? null)) {
            $dataArray['wlanId'] = $data->wlanId ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('macAddress', get_object_vars($data)) && null !== ($data->macAddress ?? null)) {
            $dataArray['macAddress'] = $data->macAddress ?? null;
        }
        if (array_key_exists('passphrase', get_object_vars($data)) && null !== ($data->passphrase ?? null)) {
            $dataArray['passphrase'] = $data->passphrase ?? null;
        }
        if (array_key_exists('userRoleId', get_object_vars($data)) && null !== ($data->userRoleId ?? null)) {
            $dataArray['userRoleId'] = $data->userRoleId ?? null;
        }
        if (array_key_exists('vlanId', get_object_vars($data)) && null !== ($data->vlanId ?? null)) {
            $dataArray['vlanId'] = $data->vlanId ?? null;
        }
        if (array_key_exists('groupDpsk', get_object_vars($data)) && null !== ($data->groupDpsk ?? null)) {
            $dataArray['groupDpsk'] = $data->groupDpsk ?? null;
        }
        if (array_key_exists('creationDateTime', get_object_vars($data)) && null !== ($data->creationDateTime ?? null)) {
            $dataArray['creationDateTime'] = $data->creationDateTime ?? null;
        }
        if (array_key_exists('expirationDateTime', get_object_vars($data)) && null !== ($data->expirationDateTime ?? null)) {
            $dataArray['expirationDateTime'] = $data->expirationDateTime ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskInfoItem::class => false];
    }
}