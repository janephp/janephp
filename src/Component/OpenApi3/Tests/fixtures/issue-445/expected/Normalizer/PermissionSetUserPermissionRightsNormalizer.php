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
    class PermissionSetUserPermissionRightsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\PermissionSetUserPermissionRights';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\PermissionSetUserPermissionRights';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\PermissionSetUserPermissionRights();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('permissionSetId', $data) && $data['permissionSetId'] !== null) {
                $object->setPermissionSetId($data['permissionSetId']);
            }
            elseif (\array_key_exists('permissionSetId', $data) && $data['permissionSetId'] === null) {
                $object->setPermissionSetId(null);
            }
            if (\array_key_exists('permissionSetRights', $data) && $data['permissionSetRights'] !== null) {
                $values = [];
                foreach ($data['permissionSetRights'] as $value) {
                    $values[] = $value;
                }
                $object->setPermissionSetRights($values);
            }
            elseif (\array_key_exists('permissionSetRights', $data) && $data['permissionSetRights'] === null) {
                $object->setPermissionSetRights(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('permissionSetId') && null !== $object->getPermissionSetId()) {
                $data['permissionSetId'] = $object->getPermissionSetId();
            }
            if ($object->isInitialized('permissionSetRights') && null !== $object->getPermissionSetRights()) {
                $values = [];
                foreach ($object->getPermissionSetRights() as $value) {
                    $values[] = $value;
                }
                $data['permissionSetRights'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\PermissionSetUserPermissionRights' => false];
        }
    }
} else {
    class PermissionSetUserPermissionRightsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\PermissionSetUserPermissionRights';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\PermissionSetUserPermissionRights';
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
            $object = new \PicturePark\API\Model\PermissionSetUserPermissionRights();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('permissionSetId', $data) && $data['permissionSetId'] !== null) {
                $object->setPermissionSetId($data['permissionSetId']);
            }
            elseif (\array_key_exists('permissionSetId', $data) && $data['permissionSetId'] === null) {
                $object->setPermissionSetId(null);
            }
            if (\array_key_exists('permissionSetRights', $data) && $data['permissionSetRights'] !== null) {
                $values = [];
                foreach ($data['permissionSetRights'] as $value) {
                    $values[] = $value;
                }
                $object->setPermissionSetRights($values);
            }
            elseif (\array_key_exists('permissionSetRights', $data) && $data['permissionSetRights'] === null) {
                $object->setPermissionSetRights(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('permissionSetId') && null !== $object->getPermissionSetId()) {
                $data['permissionSetId'] = $object->getPermissionSetId();
            }
            if ($object->isInitialized('permissionSetRights') && null !== $object->getPermissionSetRights()) {
                $values = [];
                foreach ($object->getPermissionSetRights() as $value) {
                    $values[] = $value;
                }
                $data['permissionSetRights'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\PermissionSetUserPermissionRights' => false];
        }
    }
}