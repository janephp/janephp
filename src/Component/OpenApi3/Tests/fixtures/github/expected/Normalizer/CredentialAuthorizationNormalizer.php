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
class CredentialAuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\CredentialAuthorization';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CredentialAuthorization';
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
        $object = new \Github\Model\CredentialAuthorization();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CredentialAuthorizationConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['login'] = $object->getLogin();
        $data['credential_id'] = $object->getCredentialId();
        $data['credential_type'] = $object->getCredentialType();
        if (null !== $object->getTokenLastEight()) {
            $data['token_last_eight'] = $object->getTokenLastEight();
        }
        $data['credential_authorized_at'] = $object->getCredentialAuthorizedAt()->format('Y-m-d\\TH:i:sP');
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CredentialAuthorizationConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}