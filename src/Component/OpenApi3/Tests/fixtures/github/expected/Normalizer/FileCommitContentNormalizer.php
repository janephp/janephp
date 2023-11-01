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
    class FileCommitContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\FileCommitContent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\FileCommitContent';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\FileCommitContent();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitContentConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('path', $data)) {
                $object->setPath($data['path']);
                unset($data['path']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('git_url', $data)) {
                $object->setGitUrl($data['git_url']);
                unset($data['git_url']);
            }
            if (\array_key_exists('download_url', $data)) {
                $object->setDownloadUrl($data['download_url']);
                unset($data['download_url']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\FileCommitContentLinks', 'json', $context));
                unset($data['_links']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('sha') && null !== $object->getSha()) {
                $data['sha'] = $object->getSha();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            if ($object->isInitialized('gitUrl') && null !== $object->getGitUrl()) {
                $data['git_url'] = $object->getGitUrl();
            }
            if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
                $data['download_url'] = $object->getDownloadUrl();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitContentConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\FileCommitContent' => false];
        }
    }
} else {
    class FileCommitContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\FileCommitContent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\FileCommitContent';
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
            $object = new \Github\Model\FileCommitContent();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitContentConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('path', $data)) {
                $object->setPath($data['path']);
                unset($data['path']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('git_url', $data)) {
                $object->setGitUrl($data['git_url']);
                unset($data['git_url']);
            }
            if (\array_key_exists('download_url', $data)) {
                $object->setDownloadUrl($data['download_url']);
                unset($data['download_url']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\FileCommitContentLinks', 'json', $context));
                unset($data['_links']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('sha') && null !== $object->getSha()) {
                $data['sha'] = $object->getSha();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['size'] = $object->getSize();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            if ($object->isInitialized('gitUrl') && null !== $object->getGitUrl()) {
                $data['git_url'] = $object->getGitUrl();
            }
            if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
                $data['download_url'] = $object->getDownloadUrl();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\FileCommitContentConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\FileCommitContent' => false];
        }
    }
}