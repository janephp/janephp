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
    class AuthorizationsAuthorizationIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AuthorizationsAuthorizationIdPatchBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AuthorizationsAuthorizationIdPatchBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\AuthorizationsAuthorizationIdPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
                $values = [];
                foreach ($data['scopes'] as $value) {
                    $values[] = $value;
                }
                $object->setScopes($values);
                unset($data['scopes']);
            }
            elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
                $object->setScopes(null);
            }
            if (\array_key_exists('add_scopes', $data)) {
                $values_1 = [];
                foreach ($data['add_scopes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAddScopes($values_1);
                unset($data['add_scopes']);
            }
            if (\array_key_exists('remove_scopes', $data)) {
                $values_2 = [];
                foreach ($data['remove_scopes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRemoveScopes($values_2);
                unset($data['remove_scopes']);
            }
            if (\array_key_exists('note', $data)) {
                $object->setNote($data['note']);
                unset($data['note']);
            }
            if (\array_key_exists('note_url', $data)) {
                $object->setNoteUrl($data['note_url']);
                unset($data['note_url']);
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values = [];
                foreach ($object->getScopes() as $value) {
                    $values[] = $value;
                }
                $data['scopes'] = $values;
            }
            if ($object->isInitialized('addScopes') && null !== $object->getAddScopes()) {
                $values_1 = [];
                foreach ($object->getAddScopes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['add_scopes'] = $values_1;
            }
            if ($object->isInitialized('removeScopes') && null !== $object->getRemoveScopes()) {
                $values_2 = [];
                foreach ($object->getRemoveScopes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['remove_scopes'] = $values_2;
            }
            if ($object->isInitialized('note') && null !== $object->getNote()) {
                $data['note'] = $object->getNote();
            }
            if ($object->isInitialized('noteUrl') && null !== $object->getNoteUrl()) {
                $data['note_url'] = $object->getNoteUrl();
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AuthorizationsAuthorizationIdPatchBody' => false];
        }
    }
} else {
    class AuthorizationsAuthorizationIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AuthorizationsAuthorizationIdPatchBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AuthorizationsAuthorizationIdPatchBody';
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
            $object = new \Github\Model\AuthorizationsAuthorizationIdPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
                $values = [];
                foreach ($data['scopes'] as $value) {
                    $values[] = $value;
                }
                $object->setScopes($values);
                unset($data['scopes']);
            }
            elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
                $object->setScopes(null);
            }
            if (\array_key_exists('add_scopes', $data)) {
                $values_1 = [];
                foreach ($data['add_scopes'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAddScopes($values_1);
                unset($data['add_scopes']);
            }
            if (\array_key_exists('remove_scopes', $data)) {
                $values_2 = [];
                foreach ($data['remove_scopes'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRemoveScopes($values_2);
                unset($data['remove_scopes']);
            }
            if (\array_key_exists('note', $data)) {
                $object->setNote($data['note']);
                unset($data['note']);
            }
            if (\array_key_exists('note_url', $data)) {
                $object->setNoteUrl($data['note_url']);
                unset($data['note_url']);
            }
            if (\array_key_exists('fingerprint', $data)) {
                $object->setFingerprint($data['fingerprint']);
                unset($data['fingerprint']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
                $values = [];
                foreach ($object->getScopes() as $value) {
                    $values[] = $value;
                }
                $data['scopes'] = $values;
            }
            if ($object->isInitialized('addScopes') && null !== $object->getAddScopes()) {
                $values_1 = [];
                foreach ($object->getAddScopes() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['add_scopes'] = $values_1;
            }
            if ($object->isInitialized('removeScopes') && null !== $object->getRemoveScopes()) {
                $values_2 = [];
                foreach ($object->getRemoveScopes() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['remove_scopes'] = $values_2;
            }
            if ($object->isInitialized('note') && null !== $object->getNote()) {
                $data['note'] = $object->getNote();
            }
            if ($object->isInitialized('noteUrl') && null !== $object->getNoteUrl()) {
                $data['note_url'] = $object->getNoteUrl();
            }
            if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
                $data['fingerprint'] = $object->getFingerprint();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AuthorizationsAuthorizationIdPatchBody' => false];
        }
    }
}