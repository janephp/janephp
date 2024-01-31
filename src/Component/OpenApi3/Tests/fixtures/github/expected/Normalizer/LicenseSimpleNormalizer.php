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
    class LicenseSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\LicenseSimple';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\LicenseSimple';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\LicenseSimple();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LicenseSimpleConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('key', $data)) {
                $object->setKey($data['key']);
                unset($data['key']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('url', $data) && $data['url'] !== null) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            elseif (\array_key_exists('url', $data) && $data['url'] === null) {
                $object->setUrl(null);
            }
            if (\array_key_exists('spdx_id', $data) && $data['spdx_id'] !== null) {
                $object->setSpdxId($data['spdx_id']);
                unset($data['spdx_id']);
            }
            elseif (\array_key_exists('spdx_id', $data) && $data['spdx_id'] === null) {
                $object->setSpdxId(null);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
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
            $data['key'] = $object->getKey();
            $data['name'] = $object->getName();
            $data['url'] = $object->getUrl();
            $data['spdx_id'] = $object->getSpdxId();
            $data['node_id'] = $object->getNodeId();
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LicenseSimpleConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\LicenseSimple' => false];
        }
    }
} else {
    class LicenseSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\LicenseSimple';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\LicenseSimple';
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
            $object = new \Github\Model\LicenseSimple();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LicenseSimpleConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('key', $data)) {
                $object->setKey($data['key']);
                unset($data['key']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('url', $data) && $data['url'] !== null) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            elseif (\array_key_exists('url', $data) && $data['url'] === null) {
                $object->setUrl(null);
            }
            if (\array_key_exists('spdx_id', $data) && $data['spdx_id'] !== null) {
                $object->setSpdxId($data['spdx_id']);
                unset($data['spdx_id']);
            }
            elseif (\array_key_exists('spdx_id', $data) && $data['spdx_id'] === null) {
                $object->setSpdxId(null);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
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
            $data['key'] = $object->getKey();
            $data['name'] = $object->getName();
            $data['url'] = $object->getUrl();
            $data['spdx_id'] = $object->getSpdxId();
            $data['node_id'] = $object->getNodeId();
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LicenseSimpleConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\LicenseSimple' => false];
        }
    }
}