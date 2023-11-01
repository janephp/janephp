<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContentPermissionSetUpdateRequestItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentPermissionSetUpdateRequestItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentPermissionSetUpdateRequestItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ContentPermissionSetUpdateRequestItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
                $values = [];
                foreach ($data['userRolesRights'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\UserRoleRightsOfContentRight', 'json', $context);
                }
                $object->setUserRolesRights($values);
                unset($data['userRolesRights']);
            }
            elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
                $object->setUserRolesRights(null);
            }
            if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
                $values_1 = [];
                foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\UserRoleRightsOfPermissionSetRight', 'json', $context);
                }
                $object->setUserRolesPermissionSetRights($values_1);
                unset($data['userRolesPermissionSetRights']);
            }
            elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
                $object->setUserRolesPermissionSetRights(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
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
            $data['names'] = $object->getNames();
            if ($object->isInitialized('userRolesRights') && null !== $object->getUserRolesRights()) {
                $values = [];
                foreach ($object->getUserRolesRights() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['userRolesRights'] = $values;
            }
            if ($object->isInitialized('userRolesPermissionSetRights') && null !== $object->getUserRolesPermissionSetRights()) {
                $values_1 = [];
                foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['userRolesPermissionSetRights'] = $values_1;
            }
            $data['id'] = $object->getId();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentPermissionSetUpdateRequestItem' => false];
        }
    }
} else {
    class ContentPermissionSetUpdateRequestItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentPermissionSetUpdateRequestItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentPermissionSetUpdateRequestItem';
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
            $object = new \PicturePark\API\Model\ContentPermissionSetUpdateRequestItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
                $values = [];
                foreach ($data['userRolesRights'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\UserRoleRightsOfContentRight', 'json', $context);
                }
                $object->setUserRolesRights($values);
                unset($data['userRolesRights']);
            }
            elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
                $object->setUserRolesRights(null);
            }
            if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
                $values_1 = [];
                foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\UserRoleRightsOfPermissionSetRight', 'json', $context);
                }
                $object->setUserRolesPermissionSetRights($values_1);
                unset($data['userRolesPermissionSetRights']);
            }
            elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
                $object->setUserRolesPermissionSetRights(null);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
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
            $data['names'] = $object->getNames();
            if ($object->isInitialized('userRolesRights') && null !== $object->getUserRolesRights()) {
                $values = [];
                foreach ($object->getUserRolesRights() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['userRolesRights'] = $values;
            }
            if ($object->isInitialized('userRolesPermissionSetRights') && null !== $object->getUserRolesPermissionSetRights()) {
                $values_1 = [];
                foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['userRolesPermissionSetRights'] = $values_1;
            }
            $data['id'] = $object->getId();
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentPermissionSetUpdateRequestItem' => false];
        }
    }
}