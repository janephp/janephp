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
    class SystemDfGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\SystemDfGetResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SystemDfGetResponse200';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\SystemDfGetResponse200();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('LayersSize', $data)) {
                $object->setLayersSize($data['LayersSize']);
            }
            if (\array_key_exists('Images', $data)) {
                $values = [];
                foreach ($data['Images'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\ImageSummary', 'json', $context);
                }
                $object->setImages($values);
            }
            if (\array_key_exists('Containers', $data)) {
                $values_1 = [];
                foreach ($data['Containers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\ContainerSummary', 'json', $context);
                }
                $object->setContainers($values_1);
            }
            if (\array_key_exists('Volumes', $data)) {
                $values_2 = [];
                foreach ($data['Volumes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\Volume', 'json', $context);
                }
                $object->setVolumes($values_2);
            }
            if (\array_key_exists('BuildCache', $data)) {
                $values_3 = [];
                foreach ($data['BuildCache'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\BuildCache', 'json', $context);
                }
                $object->setBuildCache($values_3);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('layersSize') && null !== $object->getLayersSize()) {
                $data['LayersSize'] = $object->getLayersSize();
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $values = [];
                foreach ($object->getImages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Images'] = $values;
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values_1 = [];
                foreach ($object->getContainers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Containers'] = $values_1;
            }
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values_2 = [];
                foreach ($object->getVolumes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Volumes'] = $values_2;
            }
            if ($object->isInitialized('buildCache') && null !== $object->getBuildCache()) {
                $values_3 = [];
                foreach ($object->getBuildCache() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BuildCache'] = $values_3;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\SystemDfGetResponse200' => false];
        }
    }
} else {
    class SystemDfGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\SystemDfGetResponse200';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SystemDfGetResponse200';
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
            $object = new \Docker\Api\Model\SystemDfGetResponse200();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('LayersSize', $data)) {
                $object->setLayersSize($data['LayersSize']);
            }
            if (\array_key_exists('Images', $data)) {
                $values = [];
                foreach ($data['Images'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\ImageSummary', 'json', $context);
                }
                $object->setImages($values);
            }
            if (\array_key_exists('Containers', $data)) {
                $values_1 = [];
                foreach ($data['Containers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\ContainerSummary', 'json', $context);
                }
                $object->setContainers($values_1);
            }
            if (\array_key_exists('Volumes', $data)) {
                $values_2 = [];
                foreach ($data['Volumes'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\Volume', 'json', $context);
                }
                $object->setVolumes($values_2);
            }
            if (\array_key_exists('BuildCache', $data)) {
                $values_3 = [];
                foreach ($data['BuildCache'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\BuildCache', 'json', $context);
                }
                $object->setBuildCache($values_3);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('layersSize') && null !== $object->getLayersSize()) {
                $data['LayersSize'] = $object->getLayersSize();
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $values = [];
                foreach ($object->getImages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Images'] = $values;
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $values_1 = [];
                foreach ($object->getContainers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Containers'] = $values_1;
            }
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values_2 = [];
                foreach ($object->getVolumes() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Volumes'] = $values_2;
            }
            if ($object->isInitialized('buildCache') && null !== $object->getBuildCache()) {
                $values_3 = [];
                foreach ($object->getBuildCache() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BuildCache'] = $values_3;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemDfGetResponse200Constraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\SystemDfGetResponse200' => false];
        }
    }
}