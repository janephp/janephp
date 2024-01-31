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
    class CheckRunOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CheckRunOutput';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CheckRunOutput';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\CheckRunOutput();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunOutputConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
            }
            if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
                $object->setSummary($data['summary']);
                unset($data['summary']);
            }
            elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
                $object->setSummary(null);
            }
            if (\array_key_exists('text', $data) && $data['text'] !== null) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            elseif (\array_key_exists('text', $data) && $data['text'] === null) {
                $object->setText(null);
            }
            if (\array_key_exists('annotations_count', $data)) {
                $object->setAnnotationsCount($data['annotations_count']);
                unset($data['annotations_count']);
            }
            if (\array_key_exists('annotations_url', $data)) {
                $object->setAnnotationsUrl($data['annotations_url']);
                unset($data['annotations_url']);
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
            $data['title'] = $object->getTitle();
            $data['summary'] = $object->getSummary();
            $data['text'] = $object->getText();
            $data['annotations_count'] = $object->getAnnotationsCount();
            $data['annotations_url'] = $object->getAnnotationsUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunOutputConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CheckRunOutput' => false];
        }
    }
} else {
    class CheckRunOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\CheckRunOutput';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\CheckRunOutput';
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
            $object = new \Github\Model\CheckRunOutput();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunOutputConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
            }
            if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
                $object->setSummary($data['summary']);
                unset($data['summary']);
            }
            elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
                $object->setSummary(null);
            }
            if (\array_key_exists('text', $data) && $data['text'] !== null) {
                $object->setText($data['text']);
                unset($data['text']);
            }
            elseif (\array_key_exists('text', $data) && $data['text'] === null) {
                $object->setText(null);
            }
            if (\array_key_exists('annotations_count', $data)) {
                $object->setAnnotationsCount($data['annotations_count']);
                unset($data['annotations_count']);
            }
            if (\array_key_exists('annotations_url', $data)) {
                $object->setAnnotationsUrl($data['annotations_url']);
                unset($data['annotations_url']);
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
            $data['title'] = $object->getTitle();
            $data['summary'] = $object->getSummary();
            $data['text'] = $object->getText();
            $data['annotations_count'] = $object->getAnnotationsCount();
            $data['annotations_url'] = $object->getAnnotationsUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\CheckRunOutputConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\CheckRunOutput' => false];
        }
    }
}