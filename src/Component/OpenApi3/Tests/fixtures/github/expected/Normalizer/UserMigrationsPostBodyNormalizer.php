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
    class UserMigrationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\UserMigrationsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\UserMigrationsPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\UserMigrationsPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\UserMigrationsPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('lock_repositories', $data)) {
                $object->setLockRepositories($data['lock_repositories']);
                unset($data['lock_repositories']);
            }
            if (\array_key_exists('exclude_attachments', $data)) {
                $object->setExcludeAttachments($data['exclude_attachments']);
                unset($data['exclude_attachments']);
            }
            if (\array_key_exists('exclude', $data)) {
                $values = [];
                foreach ($data['exclude'] as $value) {
                    $values[] = $value;
                }
                $object->setExclude($values);
                unset($data['exclude']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values_1 = [];
                foreach ($data['repositories'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepositories($values_1);
                unset($data['repositories']);
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
            if ($object->isInitialized('lockRepositories') && null !== $object->getLockRepositories()) {
                $data['lock_repositories'] = $object->getLockRepositories();
            }
            if ($object->isInitialized('excludeAttachments') && null !== $object->getExcludeAttachments()) {
                $data['exclude_attachments'] = $object->getExcludeAttachments();
            }
            if ($object->isInitialized('exclude') && null !== $object->getExclude()) {
                $values = [];
                foreach ($object->getExclude() as $value) {
                    $values[] = $value;
                }
                $data['exclude'] = $values;
            }
            $values_1 = [];
            foreach ($object->getRepositories() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['repositories'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\UserMigrationsPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\UserMigrationsPostBody' => false];
        }
    }
} else {
    class UserMigrationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\UserMigrationsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\UserMigrationsPostBody';
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
            $object = new \Github\Model\UserMigrationsPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\UserMigrationsPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('lock_repositories', $data)) {
                $object->setLockRepositories($data['lock_repositories']);
                unset($data['lock_repositories']);
            }
            if (\array_key_exists('exclude_attachments', $data)) {
                $object->setExcludeAttachments($data['exclude_attachments']);
                unset($data['exclude_attachments']);
            }
            if (\array_key_exists('exclude', $data)) {
                $values = [];
                foreach ($data['exclude'] as $value) {
                    $values[] = $value;
                }
                $object->setExclude($values);
                unset($data['exclude']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values_1 = [];
                foreach ($data['repositories'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepositories($values_1);
                unset($data['repositories']);
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
            if ($object->isInitialized('lockRepositories') && null !== $object->getLockRepositories()) {
                $data['lock_repositories'] = $object->getLockRepositories();
            }
            if ($object->isInitialized('excludeAttachments') && null !== $object->getExcludeAttachments()) {
                $data['exclude_attachments'] = $object->getExcludeAttachments();
            }
            if ($object->isInitialized('exclude') && null !== $object->getExclude()) {
                $values = [];
                foreach ($object->getExclude() as $value) {
                    $values[] = $value;
                }
                $data['exclude'] = $values;
            }
            $values_1 = [];
            foreach ($object->getRepositories() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['repositories'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\UserMigrationsPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\UserMigrationsPostBody' => false];
        }
    }
}