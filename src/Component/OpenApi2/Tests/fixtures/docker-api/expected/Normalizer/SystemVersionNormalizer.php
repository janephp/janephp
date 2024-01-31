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
    class SystemVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\SystemVersion';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SystemVersion';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\SystemVersion();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemVersionConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Platform', $data)) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], 'Docker\\Api\\Model\\SystemVersionPlatform', 'json', $context));
            }
            if (\array_key_exists('Components', $data)) {
                $values = [];
                foreach ($data['Components'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\SystemVersionComponentsItem', 'json', $context);
                }
                $object->setComponents($values);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($data['Version']);
            }
            if (\array_key_exists('ApiVersion', $data)) {
                $object->setApiVersion($data['ApiVersion']);
            }
            if (\array_key_exists('MinAPIVersion', $data)) {
                $object->setMinAPIVersion($data['MinAPIVersion']);
            }
            if (\array_key_exists('GitCommit', $data)) {
                $object->setGitCommit($data['GitCommit']);
            }
            if (\array_key_exists('GoVersion', $data)) {
                $object->setGoVersion($data['GoVersion']);
            }
            if (\array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
            }
            if (\array_key_exists('Arch', $data)) {
                $object->setArch($data['Arch']);
            }
            if (\array_key_exists('KernelVersion', $data)) {
                $object->setKernelVersion($data['KernelVersion']);
            }
            if (\array_key_exists('Experimental', $data)) {
                $object->setExperimental($data['Experimental']);
            }
            if (\array_key_exists('BuildTime', $data)) {
                $object->setBuildTime($data['BuildTime']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('components') && null !== $object->getComponents()) {
                $values = [];
                foreach ($object->getComponents() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Components'] = $values;
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $object->getVersion();
            }
            if ($object->isInitialized('apiVersion') && null !== $object->getApiVersion()) {
                $data['ApiVersion'] = $object->getApiVersion();
            }
            if ($object->isInitialized('minAPIVersion') && null !== $object->getMinAPIVersion()) {
                $data['MinAPIVersion'] = $object->getMinAPIVersion();
            }
            if ($object->isInitialized('gitCommit') && null !== $object->getGitCommit()) {
                $data['GitCommit'] = $object->getGitCommit();
            }
            if ($object->isInitialized('goVersion') && null !== $object->getGoVersion()) {
                $data['GoVersion'] = $object->getGoVersion();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('arch') && null !== $object->getArch()) {
                $data['Arch'] = $object->getArch();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('experimental') && null !== $object->getExperimental()) {
                $data['Experimental'] = $object->getExperimental();
            }
            if ($object->isInitialized('buildTime') && null !== $object->getBuildTime()) {
                $data['BuildTime'] = $object->getBuildTime();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemVersionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\SystemVersion' => false];
        }
    }
} else {
    class SystemVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\SystemVersion';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SystemVersion';
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
            $object = new \Docker\Api\Model\SystemVersion();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemVersionConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Platform', $data)) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], 'Docker\\Api\\Model\\SystemVersionPlatform', 'json', $context));
            }
            if (\array_key_exists('Components', $data)) {
                $values = [];
                foreach ($data['Components'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\SystemVersionComponentsItem', 'json', $context);
                }
                $object->setComponents($values);
            }
            if (\array_key_exists('Version', $data)) {
                $object->setVersion($data['Version']);
            }
            if (\array_key_exists('ApiVersion', $data)) {
                $object->setApiVersion($data['ApiVersion']);
            }
            if (\array_key_exists('MinAPIVersion', $data)) {
                $object->setMinAPIVersion($data['MinAPIVersion']);
            }
            if (\array_key_exists('GitCommit', $data)) {
                $object->setGitCommit($data['GitCommit']);
            }
            if (\array_key_exists('GoVersion', $data)) {
                $object->setGoVersion($data['GoVersion']);
            }
            if (\array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
            }
            if (\array_key_exists('Arch', $data)) {
                $object->setArch($data['Arch']);
            }
            if (\array_key_exists('KernelVersion', $data)) {
                $object->setKernelVersion($data['KernelVersion']);
            }
            if (\array_key_exists('Experimental', $data)) {
                $object->setExperimental($data['Experimental']);
            }
            if (\array_key_exists('BuildTime', $data)) {
                $object->setBuildTime($data['BuildTime']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('components') && null !== $object->getComponents()) {
                $values = [];
                foreach ($object->getComponents() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Components'] = $values;
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $object->getVersion();
            }
            if ($object->isInitialized('apiVersion') && null !== $object->getApiVersion()) {
                $data['ApiVersion'] = $object->getApiVersion();
            }
            if ($object->isInitialized('minAPIVersion') && null !== $object->getMinAPIVersion()) {
                $data['MinAPIVersion'] = $object->getMinAPIVersion();
            }
            if ($object->isInitialized('gitCommit') && null !== $object->getGitCommit()) {
                $data['GitCommit'] = $object->getGitCommit();
            }
            if ($object->isInitialized('goVersion') && null !== $object->getGoVersion()) {
                $data['GoVersion'] = $object->getGoVersion();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('arch') && null !== $object->getArch()) {
                $data['Arch'] = $object->getArch();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('experimental') && null !== $object->getExperimental()) {
                $data['Experimental'] = $object->getExperimental();
            }
            if ($object->isInitialized('buildTime') && null !== $object->getBuildTime()) {
                $data['BuildTime'] = $object->getBuildTime();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\SystemVersionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\SystemVersion' => false];
        }
    }
}