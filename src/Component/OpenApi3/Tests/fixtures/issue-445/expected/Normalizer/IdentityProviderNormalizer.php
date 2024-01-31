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
    class IdentityProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\IdentityProvider';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\IdentityProvider';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\IdentityProvider();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('claimMapping', $data) && $data['claimMapping'] !== null) {
                $values = [];
                foreach ($data['claimMapping'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\IdpClaimToUserAttributeMapping', 'json', $context);
                }
                $object->setClaimMapping($values);
                unset($data['claimMapping']);
            }
            elseif (\array_key_exists('claimMapping', $data) && $data['claimMapping'] === null) {
                $object->setClaimMapping(null);
            }
            if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
                $object->setGroupClaimType($data['groupClaimType']);
                unset($data['groupClaimType']);
            }
            elseif (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] === null) {
                $object->setGroupClaimType(null);
            }
            if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
                $values_1 = [];
                foreach ($data['groupMapping'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\IdpGroupToUserRoleMapping', 'json', $context);
                }
                $object->setGroupMapping($values_1);
                unset($data['groupMapping']);
            }
            elseif (\array_key_exists('groupMapping', $data) && $data['groupMapping'] === null) {
                $object->setGroupMapping(null);
            }
            if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
                $object->setFallbackUserRoleId($data['fallbackUserRoleId']);
                unset($data['fallbackUserRoleId']);
            }
            elseif (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] === null) {
                $object->setFallbackUserRoleId(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
                $object->setDisplayName($data['displayName']);
                unset($data['displayName']);
            }
            elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
                $object->setDisplayName(null);
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
            if ($object->isInitialized('claimMapping') && null !== $object->getClaimMapping()) {
                $values = [];
                foreach ($object->getClaimMapping() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['claimMapping'] = $values;
            }
            if ($object->isInitialized('groupClaimType') && null !== $object->getGroupClaimType()) {
                $data['groupClaimType'] = $object->getGroupClaimType();
            }
            if ($object->isInitialized('groupMapping') && null !== $object->getGroupMapping()) {
                $values_1 = [];
                foreach ($object->getGroupMapping() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['groupMapping'] = $values_1;
            }
            if ($object->isInitialized('fallbackUserRoleId') && null !== $object->getFallbackUserRoleId()) {
                $data['fallbackUserRoleId'] = $object->getFallbackUserRoleId();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['displayName'] = $object->getDisplayName();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\IdentityProvider' => false];
        }
    }
} else {
    class IdentityProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\IdentityProvider';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\IdentityProvider';
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
            $object = new \PicturePark\API\Model\IdentityProvider();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('claimMapping', $data) && $data['claimMapping'] !== null) {
                $values = [];
                foreach ($data['claimMapping'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\IdpClaimToUserAttributeMapping', 'json', $context);
                }
                $object->setClaimMapping($values);
                unset($data['claimMapping']);
            }
            elseif (\array_key_exists('claimMapping', $data) && $data['claimMapping'] === null) {
                $object->setClaimMapping(null);
            }
            if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
                $object->setGroupClaimType($data['groupClaimType']);
                unset($data['groupClaimType']);
            }
            elseif (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] === null) {
                $object->setGroupClaimType(null);
            }
            if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
                $values_1 = [];
                foreach ($data['groupMapping'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\IdpGroupToUserRoleMapping', 'json', $context);
                }
                $object->setGroupMapping($values_1);
                unset($data['groupMapping']);
            }
            elseif (\array_key_exists('groupMapping', $data) && $data['groupMapping'] === null) {
                $object->setGroupMapping(null);
            }
            if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
                $object->setFallbackUserRoleId($data['fallbackUserRoleId']);
                unset($data['fallbackUserRoleId']);
            }
            elseif (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] === null) {
                $object->setFallbackUserRoleId(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
                $object->setDisplayName($data['displayName']);
                unset($data['displayName']);
            }
            elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
                $object->setDisplayName(null);
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
            if ($object->isInitialized('claimMapping') && null !== $object->getClaimMapping()) {
                $values = [];
                foreach ($object->getClaimMapping() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['claimMapping'] = $values;
            }
            if ($object->isInitialized('groupClaimType') && null !== $object->getGroupClaimType()) {
                $data['groupClaimType'] = $object->getGroupClaimType();
            }
            if ($object->isInitialized('groupMapping') && null !== $object->getGroupMapping()) {
                $values_1 = [];
                foreach ($object->getGroupMapping() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['groupMapping'] = $values_1;
            }
            if ($object->isInitialized('fallbackUserRoleId') && null !== $object->getFallbackUserRoleId()) {
                $data['fallbackUserRoleId'] = $object->getFallbackUserRoleId();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['displayName'] = $object->getDisplayName();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\IdentityProvider' => false];
        }
    }
}