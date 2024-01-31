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
    class OrgsOrgActionsSecretsSecretNamePutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgsOrgActionsSecretsSecretNamePutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('encrypted_value', $data)) {
                $object->setEncryptedValue($data['encrypted_value']);
                unset($data['encrypted_value']);
            }
            if (\array_key_exists('key_id', $data)) {
                $object->setKeyId($data['key_id']);
                unset($data['key_id']);
            }
            if (\array_key_exists('visibility', $data)) {
                $object->setVisibility($data['visibility']);
                unset($data['visibility']);
            }
            if (\array_key_exists('selected_repository_ids', $data)) {
                $values = [];
                foreach ($data['selected_repository_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setSelectedRepositoryIds($values);
                unset($data['selected_repository_ids']);
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
            if ($object->isInitialized('encryptedValue') && null !== $object->getEncryptedValue()) {
                $data['encrypted_value'] = $object->getEncryptedValue();
            }
            if ($object->isInitialized('keyId') && null !== $object->getKeyId()) {
                $data['key_id'] = $object->getKeyId();
            }
            if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
                $data['visibility'] = $object->getVisibility();
            }
            if ($object->isInitialized('selectedRepositoryIds') && null !== $object->getSelectedRepositoryIds()) {
                $values = [];
                foreach ($object->getSelectedRepositoryIds() as $value) {
                    $values[] = $value;
                }
                $data['selected_repository_ids'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgsOrgActionsSecretsSecretNamePutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody' => false];
        }
    }
} else {
    class OrgsOrgActionsSecretsSecretNamePutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody';
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
            $object = new \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgsOrgActionsSecretsSecretNamePutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('encrypted_value', $data)) {
                $object->setEncryptedValue($data['encrypted_value']);
                unset($data['encrypted_value']);
            }
            if (\array_key_exists('key_id', $data)) {
                $object->setKeyId($data['key_id']);
                unset($data['key_id']);
            }
            if (\array_key_exists('visibility', $data)) {
                $object->setVisibility($data['visibility']);
                unset($data['visibility']);
            }
            if (\array_key_exists('selected_repository_ids', $data)) {
                $values = [];
                foreach ($data['selected_repository_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setSelectedRepositoryIds($values);
                unset($data['selected_repository_ids']);
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
            if ($object->isInitialized('encryptedValue') && null !== $object->getEncryptedValue()) {
                $data['encrypted_value'] = $object->getEncryptedValue();
            }
            if ($object->isInitialized('keyId') && null !== $object->getKeyId()) {
                $data['key_id'] = $object->getKeyId();
            }
            if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
                $data['visibility'] = $object->getVisibility();
            }
            if ($object->isInitialized('selectedRepositoryIds') && null !== $object->getSelectedRepositoryIds()) {
                $values = [];
                foreach ($object->getSelectedRepositoryIds() as $value) {
                    $values[] = $value;
                }
                $data['selected_repository_ids'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgsOrgActionsSecretsSecretNamePutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\OrgsOrgActionsSecretsSecretNamePutBody' => false];
        }
    }
}