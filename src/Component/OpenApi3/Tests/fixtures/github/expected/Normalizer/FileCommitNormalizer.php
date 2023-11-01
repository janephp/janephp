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
    class FileCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\FileCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\FileCommit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\FileCommit();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('content', $data) && $data['content'] !== null) {
                $object->setContent($this->denormalizer->denormalize($data['content'], 'Github\\Model\\FileCommitContent', 'json', $context));
                unset($data['content']);
            }
            elseif (\array_key_exists('content', $data) && $data['content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\FileCommitCommit', 'json', $context));
                unset($data['commit']);
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
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\FileCommit' => false];
        }
    }
} else {
    class FileCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\FileCommit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\FileCommit';
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
            $object = new \Github\Model\FileCommit();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('content', $data) && $data['content'] !== null) {
                $object->setContent($this->denormalizer->denormalize($data['content'], 'Github\\Model\\FileCommitContent', 'json', $context));
                unset($data['content']);
            }
            elseif (\array_key_exists('content', $data) && $data['content'] === null) {
                $object->setContent(null);
            }
            if (\array_key_exists('commit', $data)) {
                $object->setCommit($this->denormalizer->denormalize($data['commit'], 'Github\\Model\\FileCommitCommit', 'json', $context));
                unset($data['commit']);
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
            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            }
            if ($object->isInitialized('commit') && null !== $object->getCommit()) {
                $data['commit'] = $this->normalizer->normalize($object->getCommit(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\FileCommit' => false];
        }
    }
}