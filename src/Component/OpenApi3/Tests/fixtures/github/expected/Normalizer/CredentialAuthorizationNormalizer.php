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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class CredentialAuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CredentialAuthorization';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CredentialAuthorization';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('credential_id', $data)) {
                $object->setCredentialId($data['credential_id']);
                unset($data['credential_id']);
            }
            if (\array_key_exists('credential_type', $data)) {
                $object->setCredentialType($data['credential_type']);
                unset($data['credential_type']);
            }
            if (\array_key_exists('token_last_eight', $data)) {
                $object->setTokenLastEight($data['token_last_eight']);
                unset($data['token_last_eight']);
            }
            if (\array_key_exists('credential_authorized_at', $data)) {
                $object->setCredentialAuthorizedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['credential_authorized_at']));
                unset($data['credential_authorized_at']);
            }
            if (\array_key_exists('scopes', $data)) {
                $values = [];
                foreach ($data['scopes'] as $value) {
                    $values[] = $value;
                }
                $object->setScopes($values);
                unset($data['scopes']);
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
            }
            if (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] !== null) {
                $object->setCredentialAccessedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['credential_accessed_at']));
                unset($data['credential_accessed_at']);
            }
            elseif (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] === null) {
                $object->setCredentialAccessedAt(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['login'] = $object->getLogin();
            $data['credential_id'] = $object->getCredentialId();
            $data['credential_type'] = $object->getCredentialType();
            if ($object->isInitialized('tokenLastEight') && null !== $object->getTokenLastEight()) {
                $data['token_last_eight'] = $object->getTokenLastEight();
            }
            $data['credential_authorized_at'] = $object->getCredentialAuthorizedAt()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values = [];
                foreach ($object->getScopes() as $value) {
                    $values[] = $value;
                }
                $data['scopes'] = $values;
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            if ($object->isInitialized('credentialAccessedAt') && null !== $object->getCredentialAccessedAt()) {
                $data['credential_accessed_at'] = $object->getCredentialAccessedAt()->format('Y-m-d\\TH:i:sP');
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CredentialAuthorizationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CredentialAuthorization' => false];
        }
    }
} else {
    class CredentialAuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CredentialAuthorization';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CredentialAuthorization';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('credential_id', $data)) {
                $object->setCredentialId($data['credential_id']);
                unset($data['credential_id']);
            }
            if (\array_key_exists('credential_type', $data)) {
                $object->setCredentialType($data['credential_type']);
                unset($data['credential_type']);
            }
            if (\array_key_exists('token_last_eight', $data)) {
                $object->setTokenLastEight($data['token_last_eight']);
                unset($data['token_last_eight']);
            }
            if (\array_key_exists('credential_authorized_at', $data)) {
                $object->setCredentialAuthorizedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['credential_authorized_at']));
                unset($data['credential_authorized_at']);
            }
            if (\array_key_exists('scopes', $data)) {
                $values = [];
                foreach ($data['scopes'] as $value) {
                    $values[] = $value;
                }
                $object->setScopes($values);
                unset($data['scopes']);
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
            }
            if (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] !== null) {
                $object->setCredentialAccessedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['credential_accessed_at']));
                unset($data['credential_accessed_at']);
            }
            elseif (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] === null) {
                $object->setCredentialAccessedAt(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['login'] = $object->getLogin();
            $data['credential_id'] = $object->getCredentialId();
            $data['credential_type'] = $object->getCredentialType();
            if ($object->isInitialized('tokenLastEight') && null !== $object->getTokenLastEight()) {
                $data['token_last_eight'] = $object->getTokenLastEight();
            }
            $data['credential_authorized_at'] = $object->getCredentialAuthorizedAt()->format('Y-m-d\\TH:i:sP');
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values = [];
                foreach ($object->getScopes() as $value) {
                    $values[] = $value;
                }
                $data['scopes'] = $values;
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            if ($object->isInitialized('credentialAccessedAt') && null !== $object->getCredentialAccessedAt()) {
                $data['credential_accessed_at'] = $object->getCredentialAccessedAt()->format('Y-m-d\\TH:i:sP');
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CredentialAuthorizationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CredentialAuthorization' => false];
        }
    }
}