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
    class NetworkingConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\NetworkingConfig';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\NetworkingConfig';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\NetworkingConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworkingConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EndpointsConfig', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['EndpointsConfig'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\EndpointSettings', 'json', $context);
                }
                $object->setEndpointsConfig($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('endpointsConfig') && null !== $object->getEndpointsConfig()) {
                $values = [];
                foreach ($object->getEndpointsConfig() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['EndpointsConfig'] = $values;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworkingConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\NetworkingConfig' => false];
        }
    }
} else {
    class NetworkingConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\NetworkingConfig';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\NetworkingConfig';
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
            $object = new \Docker\Api\Model\NetworkingConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworkingConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EndpointsConfig', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['EndpointsConfig'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\EndpointSettings', 'json', $context);
                }
                $object->setEndpointsConfig($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('endpointsConfig') && null !== $object->getEndpointsConfig()) {
                $values = [];
                foreach ($object->getEndpointsConfig() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['EndpointsConfig'] = $values;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\NetworkingConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\NetworkingConfig' => false];
        }
    }
}