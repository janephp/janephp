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
    class ContentPermissionsUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentPermissionsUpdateItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentPermissionsUpdateItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ContentPermissionsUpdateItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
                $values = [];
                foreach ($data['contentPermissionSetIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentPermissionSetIds($values);
                unset($data['contentPermissionSetIds']);
            }
            elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
                $object->setContentPermissionSetIds(null);
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
                unset($data['contentId']);
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
            if ($object->isInitialized('contentPermissionSetIds') && null !== $object->getContentPermissionSetIds()) {
                $values = [];
                foreach ($object->getContentPermissionSetIds() as $value) {
                    $values[] = $value;
                }
                $data['contentPermissionSetIds'] = $values;
            }
            $data['contentId'] = $object->getContentId();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentPermissionsUpdateItem' => false];
        }
    }
} else {
    class ContentPermissionsUpdateItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentPermissionsUpdateItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentPermissionsUpdateItem';
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
            $object = new \PicturePark\API\Model\ContentPermissionsUpdateItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
                $values = [];
                foreach ($data['contentPermissionSetIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentPermissionSetIds($values);
                unset($data['contentPermissionSetIds']);
            }
            elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
                $object->setContentPermissionSetIds(null);
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
                unset($data['contentId']);
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
            if ($object->isInitialized('contentPermissionSetIds') && null !== $object->getContentPermissionSetIds()) {
                $values = [];
                foreach ($object->getContentPermissionSetIds() as $value) {
                    $values[] = $value;
                }
                $data['contentPermissionSetIds'] = $values;
            }
            $data['contentId'] = $object->getContentId();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentPermissionsUpdateItem' => false];
        }
    }
}