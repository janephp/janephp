<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\ImageSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ImageSummary';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ImageSummary();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageSummaryConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('ParentId', $data)) {
                $object->setParentId($data['ParentId']);
            }
            if (\array_key_exists('RepoTags', $data)) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
            }
            if (\array_key_exists('RepoDigests', $data)) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('SharedSize', $data)) {
                $object->setSharedSize($data['SharedSize']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
            }
            if (\array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['ParentId'] = $object->getParentId();
            $values = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
            $values_1 = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
            $data['Created'] = $object->getCreated();
            $data['Size'] = $object->getSize();
            $data['SharedSize'] = $object->getSharedSize();
            $data['VirtualSize'] = $object->getVirtualSize();
            $values_2 = [];
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels'] = $values_2;
            $data['Containers'] = $object->getContainers();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageSummaryConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\ImageSummary' => false];
        }
    }
} else {
    class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\ImageSummary';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ImageSummary';
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
            $object = new \Docker\Api\Model\ImageSummary();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageSummaryConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
            }
            if (\array_key_exists('ParentId', $data)) {
                $object->setParentId($data['ParentId']);
            }
            if (\array_key_exists('RepoTags', $data)) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
            }
            if (\array_key_exists('RepoDigests', $data)) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('SharedSize', $data)) {
                $object->setSharedSize($data['SharedSize']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $object->setLabels($values_2);
            }
            if (\array_key_exists('Containers', $data)) {
                $object->setContainers($data['Containers']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Id'] = $object->getId();
            $data['ParentId'] = $object->getParentId();
            $values = [];
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
            $values_1 = [];
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
            $data['Created'] = $object->getCreated();
            $data['Size'] = $object->getSize();
            $data['SharedSize'] = $object->getSharedSize();
            $data['VirtualSize'] = $object->getVirtualSize();
            $values_2 = [];
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels'] = $values_2;
            $data['Containers'] = $object->getContainers();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageSummaryConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\ImageSummary' => false];
        }
    }
}