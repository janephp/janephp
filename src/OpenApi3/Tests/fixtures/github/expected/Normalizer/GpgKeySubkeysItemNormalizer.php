<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\GpgKeySubkeysItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GpgKeySubkeysItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GpgKeySubkeysItem();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('primary_key_id', $data)) {
            $object->setPrimaryKeyId($data['primary_key_id']);
        }
        if (\array_key_exists('key_id', $data)) {
            $object->setKeyId($data['key_id']);
        }
        if (\array_key_exists('public_key', $data)) {
            $object->setPublicKey($data['public_key']);
        }
        if (\array_key_exists('emails', $data)) {
            $values = array();
            foreach ($data['emails'] as $value) {
                $values[] = $value;
            }
            $object->setEmails($values);
        }
        if (\array_key_exists('subkeys', $data)) {
            $values_1 = array();
            foreach ($data['subkeys'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSubkeys($values_1);
        }
        if (\array_key_exists('can_sign', $data)) {
            $object->setCanSign($data['can_sign']);
        }
        if (\array_key_exists('can_encrypt_comms', $data)) {
            $object->setCanEncryptComms($data['can_encrypt_comms']);
        }
        if (\array_key_exists('can_encrypt_storage', $data)) {
            $object->setCanEncryptStorage($data['can_encrypt_storage']);
        }
        if (\array_key_exists('can_certify', $data)) {
            $object->setCanCertify($data['can_certify']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
            $object->setExpiresAt($data['expires_at']);
        }
        elseif (\array_key_exists('expires_at', $data) && $data['expires_at'] === null) {
            $object->setExpiresAt(null);
        }
        if (\array_key_exists('raw_key', $data) && $data['raw_key'] !== null) {
            $object->setRawKey($data['raw_key']);
        }
        elseif (\array_key_exists('raw_key', $data) && $data['raw_key'] === null) {
            $object->setRawKey(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getPrimaryKeyId()) {
            $data['primary_key_id'] = $object->getPrimaryKeyId();
        }
        if (null !== $object->getKeyId()) {
            $data['key_id'] = $object->getKeyId();
        }
        if (null !== $object->getPublicKey()) {
            $data['public_key'] = $object->getPublicKey();
        }
        if (null !== $object->getEmails()) {
            $values = array();
            foreach ($object->getEmails() as $value) {
                $values[] = $value;
            }
            $data['emails'] = $values;
        }
        if (null !== $object->getSubkeys()) {
            $values_1 = array();
            foreach ($object->getSubkeys() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['subkeys'] = $values_1;
        }
        if (null !== $object->getCanSign()) {
            $data['can_sign'] = $object->getCanSign();
        }
        if (null !== $object->getCanEncryptComms()) {
            $data['can_encrypt_comms'] = $object->getCanEncryptComms();
        }
        if (null !== $object->getCanEncryptStorage()) {
            $data['can_encrypt_storage'] = $object->getCanEncryptStorage();
        }
        if (null !== $object->getCanCertify()) {
            $data['can_certify'] = $object->getCanCertify();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        $data['expires_at'] = $object->getExpiresAt();
        $data['raw_key'] = $object->getRawKey();
        return $data;
    }
}