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
    class UserRoleDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserRoleDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserRoleDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\UserRoleDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('userRights', $data)) {
                $values = [];
                foreach ($data['userRights'] as $value) {
                    $values[] = $value;
                }
                $object->setUserRights($values);
                unset($data['userRights']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
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
            $data['names'] = $object->getNames();
            $values = [];
            foreach ($object->getUserRights() as $value) {
                $values[] = $value;
            }
            $data['userRights'] = $values;
            $data['id'] = $object->getId();
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserRoleDetail' => false];
        }
    }
} else {
    class UserRoleDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\UserRoleDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserRoleDetail';
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
            $object = new \PicturePark\API\Model\UserRoleDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('userRights', $data)) {
                $values = [];
                foreach ($data['userRights'] as $value) {
                    $values[] = $value;
                }
                $object->setUserRights($values);
                unset($data['userRights']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
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
            $data['names'] = $object->getNames();
            $values = [];
            foreach ($object->getUserRights() as $value) {
                $values[] = $value;
            }
            $data['userRights'] = $values;
            $data['id'] = $object->getId();
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\UserRoleDetail' => false];
        }
    }
}