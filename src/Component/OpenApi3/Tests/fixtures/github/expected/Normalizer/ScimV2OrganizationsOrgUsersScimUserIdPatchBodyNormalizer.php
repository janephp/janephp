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
    class ScimV2OrganizationsOrgUsersScimUserIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            if (\array_key_exists('Operations', $data)) {
                $values_1 = [];
                foreach ($data['Operations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem', 'json', $context);
                }
                $object->setOperations($values_1);
                unset($data['Operations']);
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
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $value) {
                    $values[] = $value;
                }
                $data['schemas'] = $values;
            }
            $values_1 = [];
            foreach ($object->getOperations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Operations'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody' => false];
        }
    }
} else {
    class ScimV2OrganizationsOrgUsersScimUserIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody';
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
            $object = new \Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('schemas', $data)) {
                $values = [];
                foreach ($data['schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setSchemas($values);
                unset($data['schemas']);
            }
            if (\array_key_exists('Operations', $data)) {
                $values_1 = [];
                foreach ($data['Operations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyOperationsItem', 'json', $context);
                }
                $object->setOperations($values_1);
                unset($data['Operations']);
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
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values = [];
                foreach ($object->getSchemas() as $value) {
                    $values[] = $value;
                }
                $data['schemas'] = $values;
            }
            $values_1 = [];
            foreach ($object->getOperations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Operations'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersScimUserIdPatchBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ScimV2OrganizationsOrgUsersScimUserIdPatchBody' => false];
        }
    }
}