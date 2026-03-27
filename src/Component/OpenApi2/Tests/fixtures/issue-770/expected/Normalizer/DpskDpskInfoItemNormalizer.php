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
            $data['creationDateTime'] = (double) $data['creationDateTime'];
        }
        if (\array_key_exists('groupDpsk', $data) && \is_int($data['groupDpsk'])) {
            $data['groupDpsk'] = (bool) $data['groupDpsk'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('wlanId', $data)) {
            $object->setWlanId($data['wlanId']);
        }
        if (\array_key_exists('userName', $data)) {
            $object->setUserName($data['userName']);
        }
        if (\array_key_exists('macAddress', $data)) {
            $object->setMacAddress($data['macAddress']);
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->setPassphrase($data['passphrase']);
        }
        if (\array_key_exists('userRoleId', $data)) {
            $object->setUserRoleId($data['userRoleId']);
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->setVlanId($data['vlanId']);
        }
        if (\array_key_exists('groupDpsk', $data)) {
            $object->setGroupDpsk($data['groupDpsk']);
        }
        if (\array_key_exists('creationDateTime', $data)) {
            $object->setCreationDateTime($data['creationDateTime']);
        }
        if (\array_key_exists('expirationDateTime', $data)) {
            $object->setExpirationDateTime($data['expirationDateTime']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('wlanId') && null !== $data->getWlanId()) {
            $dataArray['wlanId'] = $data->getWlanId();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['userName'] = $data->getUserName();
        }
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['macAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('passphrase') && null !== $data->getPassphrase()) {
            $dataArray['passphrase'] = $data->getPassphrase();
        }
        if ($data->isInitialized('userRoleId') && null !== $data->getUserRoleId()) {
            $dataArray['userRoleId'] = $data->getUserRoleId();
        }
        if ($data->isInitialized('vlanId') && null !== $data->getVlanId()) {
            $dataArray['vlanId'] = $data->getVlanId();
        }
        if ($data->isInitialized('groupDpsk') && null !== $data->getGroupDpsk()) {
            $dataArray['groupDpsk'] = $data->getGroupDpsk();
        }
        if ($data->isInitialized('creationDateTime') && null !== $data->getCreationDateTime()) {
            $dataArray['creationDateTime'] = $data->getCreationDateTime();
        }
        if ($data->isInitialized('expirationDateTime') && null !== $data->getExpirationDateTime()) {
            $dataArray['expirationDateTime'] = $data->getExpirationDateTime();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskInfoItem::class => false];
    }
}