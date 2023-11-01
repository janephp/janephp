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
    class AppInstallationsInstallationIdAccessTokensPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('repositories', $data)) {
                $values = [];
                foreach ($data['repositories'] as $value) {
                    $values[] = $value;
                }
                $object->setRepositories($values);
                unset($data['repositories']);
            }
            if (\array_key_exists('repository_ids', $data)) {
                $values_1 = [];
                foreach ($data['repository_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepositoryIds($values_1);
                unset($data['repository_ids']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBodyPermissions', 'json', $context));
                unset($data['permissions']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
                $values = [];
                foreach ($object->getRepositories() as $value) {
                    $values[] = $value;
                }
                $data['repositories'] = $values;
            }
            if ($object->isInitialized('repositoryIds') && null !== $object->getRepositoryIds()) {
                $values_1 = [];
                foreach ($object->getRepositoryIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['repository_ids'] = $values_1;
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody' => false];
        }
    }
} else {
    class AppInstallationsInstallationIdAccessTokensPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody';
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
            $object = new \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('repositories', $data)) {
                $values = [];
                foreach ($data['repositories'] as $value) {
                    $values[] = $value;
                }
                $object->setRepositories($values);
                unset($data['repositories']);
            }
            if (\array_key_exists('repository_ids', $data)) {
                $values_1 = [];
                foreach ($data['repository_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepositoryIds($values_1);
                unset($data['repository_ids']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBodyPermissions', 'json', $context));
                unset($data['permissions']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('repositories') && null !== $object->getRepositories()) {
                $values = [];
                foreach ($object->getRepositories() as $value) {
                    $values[] = $value;
                }
                $data['repositories'] = $values;
            }
            if ($object->isInitialized('repositoryIds') && null !== $object->getRepositoryIds()) {
                $values_1 = [];
                foreach ($object->getRepositoryIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['repository_ids'] = $values_1;
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody' => false];
        }
    }
}