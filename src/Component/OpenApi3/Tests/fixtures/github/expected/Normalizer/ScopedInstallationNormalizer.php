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
    class ScopedInstallationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScopedInstallation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScopedInstallation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ScopedInstallation();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScopedInstallationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
            }
            if (\array_key_exists('repository_selection', $data)) {
                $object->setRepositorySelection($data['repository_selection']);
                unset($data['repository_selection']);
            }
            if (\array_key_exists('single_file_name', $data) && $data['single_file_name'] !== null) {
                $object->setSingleFileName($data['single_file_name']);
                unset($data['single_file_name']);
            }
            elseif (\array_key_exists('single_file_name', $data) && $data['single_file_name'] === null) {
                $object->setSingleFileName(null);
            }
            if (\array_key_exists('repositories_url', $data)) {
                $object->setRepositoriesUrl($data['repositories_url']);
                unset($data['repositories_url']);
            }
            if (\array_key_exists('account', $data) && $data['account'] !== null) {
                $object->setAccount($this->denormalizer->denormalize($data['account'], 'Github\\Model\\SimpleUser', 'json', $context));
                unset($data['account']);
            }
            elseif (\array_key_exists('account', $data) && $data['account'] === null) {
                $object->setAccount(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getPermissions() as $key => $value) {
                $values[$key] = $value;
            }
            $data['permissions'] = $values;
            $data['repository_selection'] = $object->getRepositorySelection();
            $data['single_file_name'] = $object->getSingleFileName();
            $data['repositories_url'] = $object->getRepositoriesUrl();
            $data['account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScopedInstallationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScopedInstallation' => false];
        }
    }
} else {
    class ScopedInstallationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScopedInstallation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScopedInstallation';
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
            $object = new \Github\Model\ScopedInstallation();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScopedInstallationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('permissions', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['permissions'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPermissions($values);
                unset($data['permissions']);
            }
            if (\array_key_exists('repository_selection', $data)) {
                $object->setRepositorySelection($data['repository_selection']);
                unset($data['repository_selection']);
            }
            if (\array_key_exists('single_file_name', $data) && $data['single_file_name'] !== null) {
                $object->setSingleFileName($data['single_file_name']);
                unset($data['single_file_name']);
            }
            elseif (\array_key_exists('single_file_name', $data) && $data['single_file_name'] === null) {
                $object->setSingleFileName(null);
            }
            if (\array_key_exists('repositories_url', $data)) {
                $object->setRepositoriesUrl($data['repositories_url']);
                unset($data['repositories_url']);
            }
            if (\array_key_exists('account', $data) && $data['account'] !== null) {
                $object->setAccount($this->denormalizer->denormalize($data['account'], 'Github\\Model\\SimpleUser', 'json', $context));
                unset($data['account']);
            }
            elseif (\array_key_exists('account', $data) && $data['account'] === null) {
                $object->setAccount(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            $values = [];
            foreach ($object->getPermissions() as $key => $value) {
                $values[$key] = $value;
            }
            $data['permissions'] = $values;
            $data['repository_selection'] = $object->getRepositorySelection();
            $data['single_file_name'] = $object->getSingleFileName();
            $data['repositories_url'] = $object->getRepositoriesUrl();
            $data['account'] = $this->normalizer->normalize($object->getAccount(), 'json', $context);
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScopedInstallationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScopedInstallation' => false];
        }
    }
}