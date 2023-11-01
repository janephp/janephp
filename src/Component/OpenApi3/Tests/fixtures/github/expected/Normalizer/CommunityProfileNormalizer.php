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
    class CommunityProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CommunityProfile';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CommunityProfile';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CommunityProfile();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommunityProfileConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('health_percentage', $data)) {
                $object->setHealthPercentage($data['health_percentage']);
                unset($data['health_percentage']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('documentation', $data) && $data['documentation'] !== null) {
                $object->setDocumentation($data['documentation']);
                unset($data['documentation']);
            }
            elseif (\array_key_exists('documentation', $data) && $data['documentation'] === null) {
                $object->setDocumentation(null);
            }
            if (\array_key_exists('files', $data)) {
                $object->setFiles($this->denormalizer->denormalize($data['files'], 'Github\\Model\\CommunityProfileFiles', 'json', $context));
                unset($data['files']);
            }
            if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
                $object->setUpdatedAt(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['health_percentage'] = $object->getHealthPercentage();
            $data['description'] = $object->getDescription();
            $data['documentation'] = $object->getDocumentation();
            $data['files'] = $this->normalizer->normalize($object->getFiles(), 'json', $context);
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommunityProfileConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CommunityProfile' => false];
        }
    }
} else {
    class CommunityProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CommunityProfile';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CommunityProfile';
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
            $object = new \Github\Model\CommunityProfile();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommunityProfileConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('health_percentage', $data)) {
                $object->setHealthPercentage($data['health_percentage']);
                unset($data['health_percentage']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('documentation', $data) && $data['documentation'] !== null) {
                $object->setDocumentation($data['documentation']);
                unset($data['documentation']);
            }
            elseif (\array_key_exists('documentation', $data) && $data['documentation'] === null) {
                $object->setDocumentation(null);
            }
            if (\array_key_exists('files', $data)) {
                $object->setFiles($this->denormalizer->denormalize($data['files'], 'Github\\Model\\CommunityProfileFiles', 'json', $context));
                unset($data['files']);
            }
            if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
                $object->setUpdatedAt(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['health_percentage'] = $object->getHealthPercentage();
            $data['description'] = $object->getDescription();
            $data['documentation'] = $object->getDocumentation();
            $data['files'] = $this->normalizer->normalize($object->getFiles(), 'json', $context);
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CommunityProfileConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CommunityProfile' => false];
        }
    }
}