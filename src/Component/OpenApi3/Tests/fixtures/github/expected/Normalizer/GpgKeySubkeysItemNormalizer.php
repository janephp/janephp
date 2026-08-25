<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GpgKeySubkeysItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\GpgKeySubkeysItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\GpgKeySubkeysItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\GpgKeySubkeysItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('can_sign', $data) && \is_int($data['can_sign'])) {
            $data['can_sign'] = (bool) $data['can_sign'];
        }
        if (\array_key_exists('can_encrypt_comms', $data) && \is_int($data['can_encrypt_comms'])) {
            $data['can_encrypt_comms'] = (bool) $data['can_encrypt_comms'];
        }
        if (\array_key_exists('can_encrypt_storage', $data) && \is_int($data['can_encrypt_storage'])) {
            $data['can_encrypt_storage'] = (bool) $data['can_encrypt_storage'];
        }
        if (\array_key_exists('can_certify', $data) && \is_int($data['can_certify'])) {
            $data['can_certify'] = (bool) $data['can_certify'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GpgKeySubkeysItemConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('primary_key_id', $data)) {
            $object->setPrimaryKeyId($data['primary_key_id']);
            unset($data['primary_key_id']);
        }
        if (\array_key_exists('key_id', $data)) {
            $object->setKeyId($data['key_id']);
            unset($data['key_id']);
        }
        if (\array_key_exists('public_key', $data)) {
            $object->setPublicKey($data['public_key']);
            unset($data['public_key']);
        }
        if (\array_key_exists('emails', $data)) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $value;
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('subkeys', $data)) {
            $values_1 = [];
            foreach ($data['subkeys'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSubkeys($values_1);
            unset($data['subkeys']);
        }
        if (\array_key_exists('can_sign', $data)) {
            $object->setCanSign($data['can_sign']);
            unset($data['can_sign']);
        }
        if (\array_key_exists('can_encrypt_comms', $data)) {
            $object->setCanEncryptComms($data['can_encrypt_comms']);
            unset($data['can_encrypt_comms']);
        }
        if (\array_key_exists('can_encrypt_storage', $data)) {
            $object->setCanEncryptStorage($data['can_encrypt_storage']);
            unset($data['can_encrypt_storage']);
        }
        if (\array_key_exists('can_certify', $data)) {
            $object->setCanCertify($data['can_certify']);
            unset($data['can_certify']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
            $object->setExpiresAt($data['expires_at']);
            unset($data['expires_at']);
        }
        elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
            $object->setExpiresAt(null);
            unset($data['expires_at']);
        }
        if (\array_key_exists('raw_key', $data) && $data['raw_key'] !== null) {
            $object->setRawKey($data['raw_key']);
            unset($data['raw_key']);
        }
        elseif (\array_key_exists('raw_key', $data) && $data['raw_key'] === null) {
            $object->setRawKey(null);
            unset($data['raw_key']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('primaryKeyId') && null !== $data->getPrimaryKeyId()) {
            $dataArray['primary_key_id'] = $data->getPrimaryKeyId();
        }
        if ($data->isInitialized('keyId') && null !== $data->getKeyId()) {
            $dataArray['key_id'] = $data->getKeyId();
        }
        if ($data->isInitialized('publicKey') && null !== $data->getPublicKey()) {
            $dataArray['public_key'] = $data->getPublicKey();
        }
        if ($data->isInitialized('emails') && null !== $data->getEmails()) {
            $values = [];
            foreach ($data->getEmails() as $value) {
                $values[] = $value;
            }
            $dataArray['emails'] = $values;
        }
        if ($data->isInitialized('subkeys') && null !== $data->getSubkeys()) {
            $values_1 = [];
            foreach ($data->getSubkeys() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['subkeys'] = $values_1;
        }
        if ($data->isInitialized('canSign') && null !== $data->getCanSign()) {
            $dataArray['can_sign'] = $data->getCanSign();
        }
        if ($data->isInitialized('canEncryptComms') && null !== $data->getCanEncryptComms()) {
            $dataArray['can_encrypt_comms'] = $data->getCanEncryptComms();
        }
        if ($data->isInitialized('canEncryptStorage') && null !== $data->getCanEncryptStorage()) {
            $dataArray['can_encrypt_storage'] = $data->getCanEncryptStorage();
        }
        if ($data->isInitialized('canCertify') && null !== $data->getCanCertify()) {
            $dataArray['can_certify'] = $data->getCanCertify();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('expiresAt') && null !== $data->getExpiresAt()) {
            $dataArray['expires_at'] = $data->getExpiresAt();
        }
        if ($data->isInitialized('rawKey') && null !== $data->getRawKey()) {
            $dataArray['raw_key'] = $data->getRawKey();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\GpgKeySubkeysItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\GpgKeySubkeysItem::class => false];
    }
}