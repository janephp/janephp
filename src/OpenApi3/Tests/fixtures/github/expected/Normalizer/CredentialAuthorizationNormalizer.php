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
class CredentialAuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CredentialAuthorization';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CredentialAuthorization';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CredentialAuthorization();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
        }
        if (\array_key_exists('credential_id', $data)) {
            $object->setCredentialId($data['credential_id']);
        }
        if (\array_key_exists('credential_type', $data)) {
            $object->setCredentialType($data['credential_type']);
        }
        if (\array_key_exists('token_last_eight', $data)) {
            $object->setTokenLastEight($data['token_last_eight']);
        }
        if (\array_key_exists('credential_authorized_at', $data)) {
            $object->setCredentialAuthorizedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['credential_authorized_at']));
        }
        if (\array_key_exists('scopes', $data)) {
            $values = array();
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        }
        if (\array_key_exists('fingerprint', $data)) {
            $object->setFingerprint($data['fingerprint']);
        }
        if (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] !== null) {
            $object->setCredentialAccessedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['credential_accessed_at']));
        }
        elseif (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] === null) {
            $object->setCredentialAccessedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getCredentialId()) {
            $data['credential_id'] = $object->getCredentialId();
        }
        if (null !== $object->getCredentialType()) {
            $data['credential_type'] = $object->getCredentialType();
        }
        if (null !== $object->getTokenLastEight()) {
            $data['token_last_eight'] = $object->getTokenLastEight();
        }
        if (null !== $object->getCredentialAuthorizedAt()) {
            $data['credential_authorized_at'] = $object->getCredentialAuthorizedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getScopes()) {
            $values = array();
            foreach ($object->getScopes() as $value) {
                $values[] = $value;
            }
            $data['scopes'] = $values;
        }
        if (null !== $object->getFingerprint()) {
            $data['fingerprint'] = $object->getFingerprint();
        }
        if (null !== $object->getCredentialAccessedAt()) {
            $data['credential_accessed_at'] = $object->getCredentialAccessedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}