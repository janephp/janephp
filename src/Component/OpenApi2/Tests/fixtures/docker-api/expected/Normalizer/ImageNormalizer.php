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
    class ImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\Image';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Image';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\Image();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
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
            if (\array_key_exists('Parent', $data)) {
                $object->setParent($data['Parent']);
            }
            if (\array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Container', $data)) {
                $object->setContainer($data['Container']);
            }
            if (\array_key_exists('ContainerConfig', $data)) {
                $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Docker\\Api\\Model\\ContainerConfig', 'json', $context));
            }
            if (\array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
            }
            if (\array_key_exists('Author', $data)) {
                $object->setAuthor($data['Author']);
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\Api\\Model\\ContainerConfig', 'json', $context));
            }
            if (\array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
            }
            if (\array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
            }
            if (\array_key_exists('OsVersion', $data)) {
                $object->setOsVersion($data['OsVersion']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('GraphDriver', $data)) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\Api\\Model\\GraphDriverData', 'json', $context));
            }
            if (\array_key_exists('RootFS', $data)) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Docker\\Api\\Model\\ImageRootFS', 'json', $context));
            }
            if (\array_key_exists('Metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Docker\\Api\\Model\\ImageMetadata', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Id'] = $object->getId();
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values = [];
                foreach ($object->getRepoTags() as $value) {
                    $values[] = $value;
                }
                $data['RepoTags'] = $values;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_1 = [];
                foreach ($object->getRepoDigests() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoDigests'] = $values_1;
            }
            $data['Parent'] = $object->getParent();
            $data['Comment'] = $object->getComment();
            $data['Created'] = $object->getCreated();
            $data['Container'] = $object->getContainer();
            if ($object->isInitialized('containerConfig') && null !== $object->getContainerConfig()) {
                $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
            }
            $data['DockerVersion'] = $object->getDockerVersion();
            $data['Author'] = $object->getAuthor();
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            $data['Architecture'] = $object->getArchitecture();
            $data['Os'] = $object->getOs();
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            $data['Size'] = $object->getSize();
            $data['VirtualSize'] = $object->getVirtualSize();
            $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\Image' => false];
        }
    }
} else {
    class ImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\Image';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Image';
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
            $object = new \Docker\Api\Model\Image();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data)) {
                $object->setId($data['Id']);
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
            if (\array_key_exists('Parent', $data)) {
                $object->setParent($data['Parent']);
            }
            if (\array_key_exists('Comment', $data)) {
                $object->setComment($data['Comment']);
            }
            if (\array_key_exists('Created', $data)) {
                $object->setCreated($data['Created']);
            }
            if (\array_key_exists('Container', $data)) {
                $object->setContainer($data['Container']);
            }
            if (\array_key_exists('ContainerConfig', $data)) {
                $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Docker\\Api\\Model\\ContainerConfig', 'json', $context));
            }
            if (\array_key_exists('DockerVersion', $data)) {
                $object->setDockerVersion($data['DockerVersion']);
            }
            if (\array_key_exists('Author', $data)) {
                $object->setAuthor($data['Author']);
            }
            if (\array_key_exists('Config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\Api\\Model\\ContainerConfig', 'json', $context));
            }
            if (\array_key_exists('Architecture', $data)) {
                $object->setArchitecture($data['Architecture']);
            }
            if (\array_key_exists('Os', $data)) {
                $object->setOs($data['Os']);
            }
            if (\array_key_exists('OsVersion', $data)) {
                $object->setOsVersion($data['OsVersion']);
            }
            if (\array_key_exists('Size', $data)) {
                $object->setSize($data['Size']);
            }
            if (\array_key_exists('VirtualSize', $data)) {
                $object->setVirtualSize($data['VirtualSize']);
            }
            if (\array_key_exists('GraphDriver', $data)) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\Api\\Model\\GraphDriverData', 'json', $context));
            }
            if (\array_key_exists('RootFS', $data)) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Docker\\Api\\Model\\ImageRootFS', 'json', $context));
            }
            if (\array_key_exists('Metadata', $data)) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Docker\\Api\\Model\\ImageMetadata', 'json', $context));
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
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values = [];
                foreach ($object->getRepoTags() as $value) {
                    $values[] = $value;
                }
                $data['RepoTags'] = $values;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_1 = [];
                foreach ($object->getRepoDigests() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoDigests'] = $values_1;
            }
            $data['Parent'] = $object->getParent();
            $data['Comment'] = $object->getComment();
            $data['Created'] = $object->getCreated();
            $data['Container'] = $object->getContainer();
            if ($object->isInitialized('containerConfig') && null !== $object->getContainerConfig()) {
                $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
            }
            $data['DockerVersion'] = $object->getDockerVersion();
            $data['Author'] = $object->getAuthor();
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            $data['Architecture'] = $object->getArchitecture();
            $data['Os'] = $object->getOs();
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            $data['Size'] = $object->getSize();
            $data['VirtualSize'] = $object->getVirtualSize();
            $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ImageConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\Image' => false];
        }
    }
}