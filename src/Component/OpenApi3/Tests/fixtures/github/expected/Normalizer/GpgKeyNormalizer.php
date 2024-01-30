<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\GpgKey';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GpgKey';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GpgKey();
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
            $values = array();
            foreach ($data['emails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\GpgKeyEmailsItem', 'json', $context);
            }
            $object->setEmails($values);
            unset($data['emails']);
        }
        if (\array_key_exists('subkeys', $data)) {
            $values_1 = array();
            foreach ($data['subkeys'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\GpgKeySubkeysItem', 'json', $context);
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('expires_at', $data) && $data['expires_at'] !== null) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expires_at']));
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['primary_key_id'] = $object->getPrimaryKeyId();
        $data['key_id'] = $object->getKeyId();
        $data['public_key'] = $object->getPublicKey();
        $values = array();
        foreach ($object->getEmails() as $value) {
            $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['emails'] = $values;
        $values_1 = array();
        foreach ($object->getSubkeys() as $value_1) {
            $values_1[] = $value_1 == null ? null : new \ArrayObject($this->normalizer->normalize($value_1, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['subkeys'] = $values_1;
        $data['can_sign'] = $object->getCanSign();
        $data['can_encrypt_comms'] = $object->getCanEncryptComms();
        $data['can_encrypt_storage'] = $object->getCanEncryptStorage();
        $data['can_certify'] = $object->getCanCertify();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['expires_at'] = $object->getExpiresAt()->format('Y-m-d\\TH:i:sP');
        $data['raw_key'] = $object->getRawKey();
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GpgKeyConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\GpgKey' => false);
    }
}