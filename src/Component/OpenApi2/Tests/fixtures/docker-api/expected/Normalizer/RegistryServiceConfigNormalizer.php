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
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\RegistryServiceConfig';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\RegistryServiceConfig';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\RegistryServiceConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\RegistryServiceConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AllowNondistributableArtifactsCIDRs', $data)) {
                $values = [];
                foreach ($data['AllowNondistributableArtifactsCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowNondistributableArtifactsCIDRs($values);
            }
            if (\array_key_exists('AllowNondistributableArtifactsHostnames', $data)) {
                $values_1 = [];
                foreach ($data['AllowNondistributableArtifactsHostnames'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAllowNondistributableArtifactsHostnames($values_1);
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data)) {
                $values_2 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setInsecureRegistryCIDRs($values_2);
            }
            if (\array_key_exists('IndexConfigs', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_3) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\IndexInfo', 'json', $context);
                }
                $object->setIndexConfigs($values_3);
            }
            if (\array_key_exists('Mirrors', $data)) {
                $values_4 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMirrors($values_4);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('allowNondistributableArtifactsCIDRs') && null !== $object->getAllowNondistributableArtifactsCIDRs()) {
                $values = [];
                foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['AllowNondistributableArtifactsCIDRs'] = $values;
            }
            if ($object->isInitialized('allowNondistributableArtifactsHostnames') && null !== $object->getAllowNondistributableArtifactsHostnames()) {
                $values_1 = [];
                foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['AllowNondistributableArtifactsHostnames'] = $values_1;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_2 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['InsecureRegistryCIDRs'] = $values_2;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_3 = [];
                foreach ($object->getIndexConfigs() as $key => $value_3) {
                    $values_3[$key] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['IndexConfigs'] = $values_3;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_4 = [];
                foreach ($object->getMirrors() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Mirrors'] = $values_4;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\RegistryServiceConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\RegistryServiceConfig' => false];
        }
    }
} else {
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\RegistryServiceConfig';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\RegistryServiceConfig';
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
            $object = new \Docker\Api\Model\RegistryServiceConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\RegistryServiceConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AllowNondistributableArtifactsCIDRs', $data)) {
                $values = [];
                foreach ($data['AllowNondistributableArtifactsCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowNondistributableArtifactsCIDRs($values);
            }
            if (\array_key_exists('AllowNondistributableArtifactsHostnames', $data)) {
                $values_1 = [];
                foreach ($data['AllowNondistributableArtifactsHostnames'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAllowNondistributableArtifactsHostnames($values_1);
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data)) {
                $values_2 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setInsecureRegistryCIDRs($values_2);
            }
            if (\array_key_exists('IndexConfigs', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_3) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\IndexInfo', 'json', $context);
                }
                $object->setIndexConfigs($values_3);
            }
            if (\array_key_exists('Mirrors', $data)) {
                $values_4 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMirrors($values_4);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('allowNondistributableArtifactsCIDRs') && null !== $object->getAllowNondistributableArtifactsCIDRs()) {
                $values = [];
                foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['AllowNondistributableArtifactsCIDRs'] = $values;
            }
            if ($object->isInitialized('allowNondistributableArtifactsHostnames') && null !== $object->getAllowNondistributableArtifactsHostnames()) {
                $values_1 = [];
                foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['AllowNondistributableArtifactsHostnames'] = $values_1;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_2 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['InsecureRegistryCIDRs'] = $values_2;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_3 = [];
                foreach ($object->getIndexConfigs() as $key => $value_3) {
                    $values_3[$key] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['IndexConfigs'] = $values_3;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_4 = [];
                foreach ($object->getMirrors() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Mirrors'] = $values_4;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\RegistryServiceConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\RegistryServiceConfig' => false];
        }
    }
}