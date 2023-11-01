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
    class SearchResultTextMatchesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\SearchResultTextMatchesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\SearchResultTextMatchesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\SearchResultTextMatchesItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SearchResultTextMatchesItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('object_url', $data)) {
                $object->setObjectUrl($data['object_url']);
                unset($data['object_url']);
            }
            if (\array_key_exists('object_type', $data) && $data['object_type'] !== null) {
                $object->setObjectType($data['object_type']);
                unset($data['object_type']);
            }
            elseif (\array_key_exists('object_type', $data) && $data['object_type'] === null) {
                $object->setObjectType(null);
            }
            if (\array_key_exists('property', $data)) {
                $object->setProperty($data['property']);
                unset($data['property']);
            }
            if (\array_key_exists('fragment', $data)) {
                $object->setFragment($data['fragment']);
                unset($data['fragment']);
            }
            if (\array_key_exists('matches', $data)) {
                $values = [];
                foreach ($data['matches'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SearchResultTextMatchesItemMatchesItem', 'json', $context);
                }
                $object->setMatches($values);
                unset($data['matches']);
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
            if ($object->isInitialized('objectUrl') && null !== $object->getObjectUrl()) {
                $data['object_url'] = $object->getObjectUrl();
            }
            if ($object->isInitialized('objectType') && null !== $object->getObjectType()) {
                $data['object_type'] = $object->getObjectType();
            }
            if ($object->isInitialized('property') && null !== $object->getProperty()) {
                $data['property'] = $object->getProperty();
            }
            if ($object->isInitialized('fragment') && null !== $object->getFragment()) {
                $data['fragment'] = $object->getFragment();
            }
            if ($object->isInitialized('matches') && null !== $object->getMatches()) {
                $values = [];
                foreach ($object->getMatches() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['matches'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SearchResultTextMatchesItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\SearchResultTextMatchesItem' => false];
        }
    }
} else {
    class SearchResultTextMatchesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\SearchResultTextMatchesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\SearchResultTextMatchesItem';
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
            $object = new \Github\Model\SearchResultTextMatchesItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SearchResultTextMatchesItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('object_url', $data)) {
                $object->setObjectUrl($data['object_url']);
                unset($data['object_url']);
            }
            if (\array_key_exists('object_type', $data) && $data['object_type'] !== null) {
                $object->setObjectType($data['object_type']);
                unset($data['object_type']);
            }
            elseif (\array_key_exists('object_type', $data) && $data['object_type'] === null) {
                $object->setObjectType(null);
            }
            if (\array_key_exists('property', $data)) {
                $object->setProperty($data['property']);
                unset($data['property']);
            }
            if (\array_key_exists('fragment', $data)) {
                $object->setFragment($data['fragment']);
                unset($data['fragment']);
            }
            if (\array_key_exists('matches', $data)) {
                $values = [];
                foreach ($data['matches'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SearchResultTextMatchesItemMatchesItem', 'json', $context);
                }
                $object->setMatches($values);
                unset($data['matches']);
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
            if ($object->isInitialized('objectUrl') && null !== $object->getObjectUrl()) {
                $data['object_url'] = $object->getObjectUrl();
            }
            if ($object->isInitialized('objectType') && null !== $object->getObjectType()) {
                $data['object_type'] = $object->getObjectType();
            }
            if ($object->isInitialized('property') && null !== $object->getProperty()) {
                $data['property'] = $object->getProperty();
            }
            if ($object->isInitialized('fragment') && null !== $object->getFragment()) {
                $data['fragment'] = $object->getFragment();
            }
            if ($object->isInitialized('matches') && null !== $object->getMatches()) {
                $values = [];
                foreach ($object->getMatches() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['matches'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\SearchResultTextMatchesItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\SearchResultTextMatchesItem' => false];
        }
    }
}