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
class GpgKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\GpgKey::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\GpgKey::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GpgKey();
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
            $this->validate($data, new \Github\Validator\GpgKeyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('primary_key_id', $data) && $data['primary_key_id'] !== null) {
            $object->setPrimaryKeyId($data['primary_key_id']);
            unset($data['primary_key_id']);
        }
        elseif (\array_key_exists('primary_key_id', $data) && $data['primary_key_id'] === null) {
            $object->setPrimaryKeyId(null);
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
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\GpgKeyEmailsItem::class, 'json', $context);
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('subkeys', $data)) {
            $values_1 = [];
            foreach ($data['subkeys'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\GpgKeySubkeysItem::class, 'json', $context);
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_at']));
            unset($data['expires_at']);
        }
        elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
            $object->setExpiresAt(null);
        }
        if (\array_key_exists('raw_key', $data) && $data['raw_key'] !== null) {
            $object->setRawKey($data['raw_key']);
            unset($data['raw_key']);
        }
        elseif (\array_key_exists('raw_key', $data) && $data['raw_key'] === null) {
            $object->setRawKey(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['primary_key_id'] = $data->getPrimaryKeyId();
        $dataArray['key_id'] = $data->getKeyId();
        $dataArray['public_key'] = $data->getPublicKey();
        $values = [];
        foreach ($data->getEmails() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['emails'] = $values;
        $values_1 = [];
        foreach ($data->getSubkeys() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['subkeys'] = $values_1;
        $dataArray['can_sign'] = $data->getCanSign();
        $dataArray['can_encrypt_comms'] = $data->getCanEncryptComms();
        $dataArray['can_encrypt_storage'] = $data->getCanEncryptStorage();
        $dataArray['can_certify'] = $data->getCanCertify();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['expires_at'] = $data->getExpiresAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['raw_key'] = $data->getRawKey();
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\GpgKeyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\GpgKey::class => false];
    }
}